import mysql.connector
mydb = mysql.connector.connect (host = "162.241.169.18" , user= "manufria_p01", password ="chocotower15")

print (mydb)

if(mydb):
    print("Connection Successful")
else:
    print("Error with connection")