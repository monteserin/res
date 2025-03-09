int brillo = 0;
int ledPin = 6;
void setup() {
  pinMode(ledPin, OUTPUT);
  digitalWrite(11, HIGH);

}

void loop() {
  for (brillo = 0; brillo < 256; brillo ++) {
    analogWrite(ledPin, brillo);
    delay(15);
  }
  for (brillo = 255; brillo >= 0; brillo --) {
    analogWrite(ledPin, brillo);
    delay(15);
  }
}
