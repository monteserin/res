int led = 6;
int brillo;
int pot = 0;
void setup() {
  pinMode(led, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  brillo = analogRead(pot) / 4;
  Serial.println("brillo: " + brillo);
  analogWrite(led, brillo);
}
