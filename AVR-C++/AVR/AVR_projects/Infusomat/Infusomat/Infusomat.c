/*
 * Infusomat.c
 *
 * Created: 25.07.2019 11:04:25
 *  Author: anton
 */ 

#include <avr/io.h>

/* const byte tsentr = 0;
const byte lverh = 1;
const byte tochka = 2;
const byte verh = 3;
const byte pverh = 4;
const byte lniz = 5;
const byte niz = 6;
const byte pniz = 7; */

void setup() {
 DDRD = B11110111; //��������� ����� �� ����� ������
 PORTD = B00001000;

DDRB = B00100001;
 
}

int display = 3;
byte mass1[4] = {0xFA, 0x22, 0x79, 0xD9};

void loop() {
  Off();
  if (PCINT19 == 1) PORTB = B00100001;

for (int i = 0; i <= display; i++ )
 {
 PORTD = mass1[i];
 delay(1000); Off(); delay(500);
 };
}  
void Off() {
 PORTD = 0;
}