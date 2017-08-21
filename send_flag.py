#!/usr/bin/python
#Created by Neidi Chavez
#Copyright (c) 2014. All rights reserved.

#this script reads the time user should
#take their pills from the dates.txt.
#it will only check once per day to see
#if there is a time in the file
#then it will wait until it is time
# and then send the info to the arduino
import datetime
import time
import os
import subprocess
from datetime import timedelta
import serial
from email import parser
import smtplib
import sys
import getopt
#*******************
#FUNCTIONS
#*******************
#creates datetime objects 
def just_time(dt):
    day_time=datetime.datetime.strptime(dt.rstrip('\n'), "%H:%M:%S")
    return day_time

#sends email if client has or HAS NOT taken pills
username='[REDACTED]'
password='[REDACTED]'
approved='[REDACTED]@gmail.com'
frm='[REDACTED]@gmail.com'
msg="Your client has  "
def send_email(stamp):
    server=smtplib.SMTP('smtp.gmail.com:587')
    server.starttls()
    server.login(username,password)
    tru_msg=msg + '\n'+ stamp
    print tru_msg
    server.sendmail(frm,approved,tru_msg)
    print "message sent"
    server.quit()
list=['0','1','2','3','4','5','6']
#returns the respective char for each day of the week
def weekday_char(i):
    if(i==7):
        return list[0]
    return list[i]

#getting the info from the command line to decide what to do
dbtime=str(sys.argv[1])

#check if time retrieved exists
#if not quit and do nothing more
if dbtime =="00:00:00":
    sys.exit()

#NEW SCHEDULE CODE
#AHHHYYY EYYYEEA
#turning parsed data from dates.txt into datetime objects
today_time=just_time(dbtime)
print "Medication Time: "
print today_time

#get weekday number
wkday=datetime.datetime.today().isoweekday()
char_day=weekday_char(wkday)

DEVICE ='/dev/ttyACM0'
BAUD=9600
ser=serial.Serial(DEVICE,BAUD,timeout=0)
count=0
FNULL = open(os.devnull, "w")

#while loop that will end when count is 7 
while count!=1:
    #when it's time
    if today_time == datetime.datetime.strptime(time.strftime("%H:%M:%S"),"%H:%M:%S") :
        #send which light to turn on and play music
        ser.write(char_day)
        retcode=subprocess.call(['mpg321', 'alien.mp3'],stdout=FNULL,stderr=subprocess.STDOUT)
        #calculate end time and start time
        end_time=today_time + datetime.timedelta(seconds = 45)
        print "End time:", end_time
        start_time=datetime.datetime.now()
        print "Start time: ",start_time
        #wait for button press or time runs out
        while(1):
            from_serial=ser.readline().rstrip('\n')
            if from_serial == "HIGH":
                #print from_serial
                mesg="taken their pills at "
                time_stmp=time.strftime("%D %I:%M %p")
                #print "time stamp taken pills " ,time_stmp
                full_mesg=mesg + time_stmp
                send_email(full_mesg)
                count+=1
                break
            elif end_time < datetime.datetime.strptime(time.strftime("%H:%M:%S"),"%H:%M:%S"):
                print "ran out of time"
                ser.write('8');
                error="NOT TAKEN THEIR PILLS AS OF "
                time_stmp=time.strftime("%D %I:%M %p")
                full_err=error + time_stmp
                send_email(full_err)
                count+=1
                break


