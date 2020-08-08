//Author: Dr.Gireeshan MG Ramachandran A
//Program for NODEMCU to detect movement using PIR sensorand send email
#define USE_ARDUINO_INTERRUPTS true    // Set-up low-level interrupts for most acurate BPM math.
#include <Wire.h>  // Only needed for Arduino 1.6.5 and earlier
#include "SSD1306Wire.h" // legacy include: `#include "SSD1306.h"`
#include <SimpleTimer.h>   //including the library of SimpleTimer
#define BLYNK_PRINT Serial
#include <BlynkSimpleEsp8266.h>
#include <SPI.h>
#include<SoftwareSerial.h>
#include <ESP8266WiFi.h>`

#include "images.h"

const int buttonPin = D3; 
SimpleTimer timer;
char auth[] = "dC8A6XrvLA58ZFUvM208MJaru0Wqhl28";            //  Auth Token in the Blynk App.
                                                        

char ssid[] = "mywifi";    // WiFi credentials.
char pass[] = "123456789";  
int buttonState = 0;
char ac = 0;
//#define DEMO_DURATION 3000
typedef void (*Demo)(void);
 int demoMode = 0;    
void setup() {
   pinMode(LED_BUILTIN, OUTPUT);
     pinMode(D3, INPUT);
   pinMode(buttonPin, INPUT);
  Serial.begin(115200); 
  Serial.println();
 Serial.begin(9600);
 Blynk.begin(auth, ssid, pass);

}
//digitalWrite(LED_BUILTIN, LOW);   // Turn the LED on by making the voltage LOW
Demo demos[] = {drawFontFaceDemo};
void drawFontFaceDemo(){
     buttonState = digitalRead(D3);
        
  if (buttonState == LOW) {
       
  digitalWrite(LED_BUILTIN, HIGH);   // Turn the LED on by making the voltage HIGH
  delay(200);                      // Wait for 200ms
    digitalWrite(LED_BUILTIN, LOW);   // Turn the LED off by making the voltage LOW
  delay(200);                      // Wait for 200ms
     Serial.println("breach Checking...");  //serial monitor print
  }
  
else {
        Blynk.email("TVM", "Breach alert link : .....com"); ////////////////////////sending email using Blynk as the gateway app
    delay(1000);Wait for a second
        Serial.println(" Breach Movement Detected sending Email..."); //serial monitor print

}

    }
  
   
//}



void loop() {
  Blynk.run();
  timer.run();
  
    demos[demoMode]();
  delay(10);
}
