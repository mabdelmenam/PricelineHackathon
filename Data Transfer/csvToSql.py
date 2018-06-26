import csv
import mysql.connector

def insert(cursor):
    with open ('data.csv', 'r') as f:
        reader = csv.reader(f)
        columns = next(reader) 
        query = 'INSERT INTO crime(num,lat,lng,hour,assault,atheft,dui,fraud,mur,child,other,sex,theft,traff,wpn) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)'
        for data in reader:
            cursor.execute(query,data)

try:
    mydb = mysql.connector.connect(host='localhost', user='root',password='popipopI1@', database='crime')
    cursor = mydb.cursor()
     
    insert(cursor)
    mydb.commit()
except mysql.connector.Error as err:
    print(err)
finally:
    cursor.close()
print('Done')
