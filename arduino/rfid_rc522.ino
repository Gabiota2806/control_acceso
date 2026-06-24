#include <SPI.h>
#include <MFRC522.h>

/*
 * CONEXIÓN DEL MÓDULO RFID-RC522 AL ARDUINO UNO:
 * SDA (SS)  -> Pin 10
 * SCK       -> Pin 13
 * MOSI      -> Pin 11
 * MISO      -> Pin 12
 * IRQ       -> No conectar
 * GND       -> GND
 * RST       -> Pin 9
 * 3.3V      -> 3.3V (¡No conectar a 5V porque se quema!)
 */

#define RST_PIN         9
#define SS_PIN          10

MFRC522 mfrc522(SS_PIN, RST_PIN);  // Crear la instancia del lector

void setup() {
  Serial.begin(9600);   // Iniciar puerto serial para hablar con la PC
  SPI.begin();          // Iniciar bus SPI
  mfrc522.PCD_Init();   // Inicializar el lector MFRC522
}

void loop() {
  // 1. Verificar si hay una tarjeta nueva cerca del lector
  if ( ! mfrc522.PICC_IsNewCardPresent()) {
    return;
  }

  // 2. Intentar leer el código (UID) de la tarjeta
  if ( ! mfrc522.PICC_ReadCardSerial()) {
    return;
  }

  // 3. Extraer el UID y convertirlo a String Hexadecimal
  String uid = "";
  for (byte i = 0; i < mfrc522.uid.size; i++) {
    uid += String(mfrc522.uid.uidByte[i] < 0x10 ? "0" : "");
    uid += String(mfrc522.uid.uidByte[i], HEX);
  }
  uid.toUpperCase(); // Convertir a mayúsculas (ej: A1B2C3D4)
  
  // 4. Enviar el UID por el puerto serial para que Python lo capture
  Serial.println("UID:" + uid);

  // 5. Frenar la lectura actual para no saturar enviando 50 veces el mismo código por segundo
  mfrc522.PICC_HaltA();
  
  // Pequeña pausa antes de permitir una nueva lectura
  delay(2000);
}
