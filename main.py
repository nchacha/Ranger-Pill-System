#!/usr/bin/python
#Created by Neidi Chavez
#Copyright (c) 2014. All rights reserved.

#the MAIN PROGRAM
#this program will run as a cron job
#it will run both get_time.py and send_flag.py
#it will make checks to see if they get_time actually gets a time from
#the database; if it doesn't: quit!!! ayyyyy
import subprocess
import sys
import time
import datetime

#creates datetime objects 
def just_time(dt):
    day_time=datetime.datetime.strptime(dt.rstrip('\n'), "%H:%M:%S")
    return day_time

#running the get_time program and storing the stdout in a string
#to check for later //the stderr is stored just in case
command="python /home/pi/Documents/get_time.py"
p=subprocess.Popen(command, stdout=subprocess.PIPE, stderr=subprocess.PIPE, shell=True)
output, error=p.communicate()
print "Time Stamp: " + time.strftime("%c")
print "*******************************"
print "Medication Time retrieved from get_time.py :"

today_time=output.rstrip('\n')
print today_time
#check if there is anything in the database for today if not quuuuuit
if today_time == "00:00:00":
    print "No time listed for today"
    print "quitting main.py"
    print "*******************************"
    print "*******************************"
    sys.exit()
#turn today's time into datetime object
#to compare with real time
#to decide what to do
time_object=just_time(today_time)
#if the medication time has passed
#quit main.py
if time_object < datetime.datetime.strptime(time.strftime("%H:%M:%S"),"%H:%M:%S") :
    print "Medication Time has passed"
    print "quitting main.py..."
    sys.exit()
#run the send_flag program with the time as an argument ayy
print "*******************************"
print "Running send_flag.py...: "
command2="python /home/pi/Documents/send_flag.py " + today_time
subprocess.call([command2], shell=True)

