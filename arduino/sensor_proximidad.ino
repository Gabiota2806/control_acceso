const int trigPin = 9;
const int echoPin = 10;
const int DISTANCIA_UMBRAL = 50; // Distancia en centímetros para considerar que hay alguien

long duration;
int distance;
bool personaDetectada = false;

void setup() {
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  Serial.begin(9600); // Iniciar comunicación serial con la PC
}

void loop() {
  // Limpiar el trigPin
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  
  // Emitir pulso de 10 microsegundos
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  
  // Leer el tiempo de rebote del sonido
  duration = pulseIn(echoPin, HIGH);
  
  // Calcular distancia en centímetros
  distance = duration * 0.034 / 2;
  
  // Si la distancia es menor al umbral, hay alguien
  if (distance > 0 && distance <= DISTANCIA_UMBRAL) {
    if (!personaDetectada) {
      Serial.println("DETECTADO"); // Enviar mensaje a la PC por USB
      personaDetectada = true;
      
      // Esperar 3 segundos para evitar mandar múltiples señales por la misma persona
      delay(3000); 
    }
  } else {
    // La persona ya se quitó de en frente
    personaDetectada = false;
  }
  
  delay(100);
}
