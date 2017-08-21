//days of the week leds pi talks to arduino
//pi and aruduino
//Created by Neidi Chavez
//Copyright (c) 2014. All rights reserved.

#include <Adafruit_Fingerprint.h>
#if ARDUINO >= 100
 #include <SoftwareSerial.h>
#else
 #include <NewSoftSerial.h>
#endif

int getFingerprintIDez();

// pin #10 is IN from sensor (GREEN wire)
// pin #11 is OUT from arduino  (WHITE wire)
#if ARDUINO >= 100
SoftwareSerial mySerial(10, 11);
#else
NewSoftSerial mySerial(10, 11);
#endif

Adafruit_Fingerprint finger = Adafruit_Fingerprint(&mySerial);

#include <Servo.h> 

#define LOCKED 3
#define UNLOCKED 2
#define LOCKED_AGAIN 1

int lockstate=LOCKED;
 
Servo myservo;  
int pos = 0;   

//storing the pins for the pins
int led_pins[7]={5,3,19,22,16,18,7};
//storing the states of the leds
int led_state[7]={0,0,0,0,0,0,0};
//storing the pins for the switches
int sw_pins[7]={6,4,2,24,15,17,8};
//storing the states of the switches
int sw_state[7]={0,0,0,0,0,0,0};

int buttonState;
int red=26;
int green=28;
void setup()
{
  //SERVO
  myservo.attach(9);
  Serial.begin(9600);
  //LEDS
  pinMode(7, OUTPUT);
  pinMode(5,OUTPUT);
  pinMode(3,OUTPUT);
  pinMode(19,OUTPUT);
  pinMode(22,OUTPUT);
  pinMode(16,OUTPUT);
  pinMode(18,OUTPUT);
  //SWTCHES
  pinMode(8, INPUT);
  pinMode(6, INPUT);
  pinMode(4, INPUT);
  pinMode(2, INPUT);
  pinMode(24, INPUT);
  pinMode(15, INPUT);
  pinMode(17, INPUT);
  //GREEN AND RED LIGHTS
  pinMode(red,OUTPUT);
  pinMode(green,OUTPUT);
  finger.begin(57600);
  
  if (finger.verifyPassword()) {
    Serial.println("Found fingerprint sensor!");
  } else {
    Serial.println("Did not find fingerprint sensor :(");
    while (1);
  }
  Serial.println("Waiting for valid finger...");
  
}
int day=-1;
int timeup=-1;
void loop()
{
  //ASK FOR THE FINGERPRINT FIRST
  if(lockstate == LOCKED)
  {
      digitalWrite(red,HIGH);
      digitalWrite(green, LOW);
      
      //turn on respective light
      while(1)
      {
        if(Serial.available() )
        {
          day=Serial.read() - '0';
          flash(day);
          break;
          //Serial.println(day);
        }
      }
      
      while(1)
      {
        if(getFingerprintIDez() != -1)
        {
            myservo.write(90); 
            delay(1000); 
            myservo.write(135); 
            delay(1000); 
            myservo.write(180); 
            delay(1000); 
            setLockState(UNLOCKED);
            break;
        }
      }
  }
  //UNLOCK IT WITH THE SERVO
  else if(lockstate==UNLOCKED)
  {  
      //wait for the respective button press
      //Serial.println(day);
      if(day != -1)
      {
         sw_press(day);
         setLockState(LOCKED_AGAIN);
      }
      
  }
  else if(lockstate==LOCKED_AGAIN)
  {
    if(getFingerprintIDez() != -1)
      {
          myservo.write(135); 
          delay(1000); 
          myservo.write(90); 
          delay(1000); 
          day=-1;
          timeup=-1;
          setLockState(LOCKED);
          
      }
  }
  
}

//returns the state of the pin
boolean state(int pin)
{
  return digitalRead(pin);
}

void flash(int n)
{
  digitalWrite(led_pins[n],HIGH); 
  //Serial.println("led on");
}

void sw_press(int x)
{
  while(1){
    if(digitalRead(sw_pins[x]) == HIGH)
    {
      buttonState=HIGH;
      break;
    }
    else if(Serial.available() )
    {
       timeup=Serial.read() - '0';
       break;
     }
  }
  Serial.println("buttonstate: " + buttonState);
  Serial.println("timeup: " + timeup);
    if(buttonState == HIGH)
    {
      digitalWrite(led_pins[x],LOW);
      for(int i=0;i<10;i++)
      {
        Serial.println("HIGH");
      }
    }
    else if(timeup!=-1)
    {
      digitalWrite(led_pins[x],LOW);
    }
  
}

int getFingerprintIDez() {
  uint8_t p = finger.getImage();
  if (p != FINGERPRINT_OK)  return -1;

  p = finger.image2Tz();
  if (p != FINGERPRINT_OK)  return -1;

  p = finger.fingerFastSearch();
  if (p != FINGERPRINT_OK)  return -1;
  
  // found a match!
  Serial.print("Found ID #"); Serial.print(finger.fingerID); 
  Serial.print(" with confidence of "); Serial.println(finger.confidence);
  
  return finger.fingerID; 
}

void setLockState(int state)
{
   lockstate = state;
   if (state == LOCKED)
   {
      Serial.println("Locked!");
      digitalWrite(red, HIGH);
      digitalWrite(green, LOW);  
   }   
   else if (state == UNLOCKED)
   {
      Serial.println("Unlocked!");
      digitalWrite(red, LOW);
      digitalWrite(green, HIGH);      
   }
   else if(state==LOCKED_AGAIN)
   {
     Serial.println("locked again");
     digitalWrite(red,HIGH);
     digitalWrite(green, LOW);
   }
}
    
