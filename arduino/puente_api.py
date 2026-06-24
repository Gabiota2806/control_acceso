import serial
import time
import requests

# ================= CONFIGURACIÓN =================
# Cambia esto por el puerto de tu Arduino. 
# En Windows suele ser 'COM3', 'COM4', etc.
# En Linux suele ser '/dev/ttyACM0' o '/dev/ttyUSB0'
PUERTO_SERIAL = '/dev/ttyACM0' 
BAUD_RATE = 9600

# La URL de tu proyecto Laravel corriendo en local
API_URL = 'http://localhost:8000/api/sensor/trigger'
# =================================================

try:
    arduino = serial.Serial(PUERTO_SERIAL, BAUD_RATE)
    time.sleep(2) # Dar 2 segundos para que el Arduino se reinicie tras conectar serial
    print(f"🔌 Conectado al Arduino en el puerto {PUERTO_SERIAL}")
    print("⏳ Esperando detecciones del sensor...")
except Exception as e:
    print(f"❌ Error al conectar con el Arduino: {e}")
    print("¿Verificaste que el puerto sea el correcto y que el monitor serie del IDE esté cerrado?")
    exit()

while True:
    try:
        # Si hay información esperando en el puerto serial
        if arduino.in_waiting > 0:
            # Leer la línea, decodificarla y quitar saltos de línea
            mensaje = arduino.readline().decode('utf-8').strip()
            
            # Verificar si el mensaje empieza con "UID:" (formato enviado por Arduino)
            if mensaje.startswith("UID:"):
                card_uid = mensaje.split(":")[1]
                print(f"\n💳 ¡Tarjeta leída! UID: {card_uid}")
                print("🌐 Enviando petición POST a la API de Laravel...")
                
                payload = {
                    "device_id": "ARDUINO_UNO_PUERTA_PRINCIPAL",
                    "card_uid": card_uid
                }
                
                headers = {
                    "Accept": "application/json",
                    "Content-Type": "application/json"
                }
                
                # Hacer la petición a Laravel
                respuesta = requests.post(API_URL, json=payload, headers=headers)
                
                if respuesta.status_code == 200:
                    print(f"✅ Éxito! Respuesta de Laravel: {respuesta.json()['message']}")
                else:
                    print(f"⚠️ Error de Laravel (Status {respuesta.status_code}): {respuesta.text}")
                    
    except KeyboardInterrupt:
        print("\nCerrando puente Serial-API...")
        arduino.close()
        break
    except Exception as e:
        print(f"Error inesperado: {e}")
