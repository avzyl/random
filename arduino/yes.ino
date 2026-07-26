#include <LiquidCrystal_I2C.h>

#include <LiquidCrystal_I2C.h>

#include <Arduino.h>
#include <Wire.h>
#include <LiquidCrystal_I2C.h>

// Define connections to sensor
#define TRIGPIN D6 // GPIO 12
#define ECHOPIN D5 // GPIO 14

LiquidCrystal_I2C lcd(0x27, 16, 2);

float duration;
int distance_cm, distance_feet, distance_inches;
int object_height_ft, object_height_inch;

const int sensor_height_ft = 4; // Sensor height is 4 feet

void setup(void) {
  Serial.begin(115200);

  pinMode(ECHOPIN, INPUT);
  pinMode(TRIGPIN, OUTPUT);
  
  // Initialize LCD
  lcd.begin(16, 2);
  lcd.backlight();
  
  // Display "Kagayaku Soup" for the first 20 seconds
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("Kagayaku Soup");

  unsigned long startTime = millis();
  while (millis() - startTime < 20000) {
    delay(100);
  }

  // Clear LCD and print Distance
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("Distance:");
}

void loop() {
  // Read sensor data (distance to the object)
  digitalWrite(TRIGPIN, LOW);
  delayMicroseconds(2);
  digitalWrite(TRIGPIN, HIGH);
  delayMicroseconds(20);
  digitalWrite(TRIGPIN, LOW);
  duration = pulseIn(ECHOPIN, HIGH);
  
  // Convert duration to distance (cm, feet, inches)
  distance_cm = (duration * 0.0343) / 2;
  distance_feet = distance_cm / 30.48;
  distance_inches = (distance_cm * 0.393701);

  while (distance_inches >= 12) {
    distance_inches -= 12;
  }

  // Calculate object height (since sensor is at 4 feet)
  object_height_ft = sensor_height_ft - distance_feet;
  object_height_inch = 12 - distance_inches; // Remaining inches below 1 foot

  // Display on LCD
  lcd.setCursor(0, 1);
  lcd.print(String(object_height_ft) + " ft, " + String(object_height_inch) + " in");

  // Print result to serial monitor
  Serial.print("Object Height: ");
  Serial.print(object_height_ft); 
  Serial.print(" Feet ");
  Serial.print(object_height_inch); 
  Serial.println(" Inches");

  delay(5000);
}
