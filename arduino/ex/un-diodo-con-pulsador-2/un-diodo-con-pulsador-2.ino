int estado = 0;        // Variable para almacenar el estado del LED

void setup() {
  pinMode(13, OUTPUT);
  digitalWrite(13, HIGH);
   Serial.begin(9600);


  pinMode(2, INPUT_PULLUP);
}
void loop() {
  int lecturaBoton = digitalRead(2);
  Serial.println("Hola mundo");

  if (lecturaBoton == LOW) {
    delay(50);                          // Pequeña espera para eliminar los rebotes del pulsador
    lecturaBoton = digitalRead(2);  // Vuelve a leer el estado del pulsador

    if (lecturaBoton == LOW) {  // Si el pulsador aún está presionado después de la espera
      estado = !estado;         // Cambia el estado del LED

      if (estado == HIGH) {
        digitalWrite(13, HIGH);  // Enciende el LED
      } else {
        digitalWrite(13, LOW);  // Apaga el LED
      }

      while (digitalRead(2) == LOW) {}  // Espera a que se suelte el pulsador
    }
  }
}