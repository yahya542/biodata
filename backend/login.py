from flask import Flask, request, redirect, render_template, flash
import mysql.connector
import bcrypt

app = Flask(__name__, template_folder="../frontend" , static_folder="../frontend")

def koneksi (): 
    return mysql.connector.connect(
        host='localhost', 
        user='yahya',
        password='deya2501',
        database='login_db'
    )
#biar lebih aman
password = "mhs12345"
hashed_password = bcrypt.hashpw(password.encode('utf-8'), bcrypt.gensalt())
print(hashed_password)