#!/usr/bin/python
#Created by Neidi Chavez
#Copyright (c) 2014. All rights reserved.

#runs only once a day to get the time from
#database.  gets the time by connecting to mysql
#outputs retrieved time to dates.txt
#where send_flag.py will retrieve it
#do its thang with it

import MySQLdb
import sys
import time
#connecting to databse
connection=MySQLdb.connect(host="mysql.rangerpillsystem.com",user="[REDACTED]",passwd="[REDACTED]",db="pill_records")
cursor=connection.cursor()
#getting the date to execute sql query
#where im asking for the time to take pills ONLY for today
datee=time.strftime("%Y-%m-%d")

sql="SELECT times FROM schedule WHERE dates=%s"
cursor.execute(sql, (datee))
data=cursor.fetchall()

#print the data and close connection
dbtime=""
for row in data:
    dbtime= row[0]

#check if time retrieved exists
#if not quit and do nothing more
if dbtime =="" or dbtime == "16:00:00":
    print "00:00:00"
    cursor.close()
    connection.close()
    sys.exit()

#make the retrieved time pretty to 
#file=open("/home/pi/Documents/dates.txt","w")
str_time=str(dbtime)
#file.write(str_time)
print str_time
#file.close()
#close the mysql connection and quit
cursor.close()
connection.close()
sys.exit()
