from flask import Flask, request, redirect, render_template, flash
import mysql.connector
import bcrypt

app = Flask(__name__, template_folder="../frontend" , static_folder="../frontend")

def koneksi(): 
    return mysql.connector.connect(
        host='localhost', 
        user='yahya',
        password='deya2501',
        database='login_db'
    )
#biar lebih aman
password = "deya2501"
hashed_password = bcrypt.hashpw(password.encode('utf-8'), bcrypt.gensalt())
print(hashed_password)

@app.route ('/login', methods=['POST', 'GET'])
def login(): 
    if request.method == "POST" :
        username = request.form['username']
        npm = request.form['npm']
        password = request.form['password']
        conn = koneksi()
        cursor = conn.cursor()
        cursor.execute("SELECT password FROM users WHERE username = %s AND npm = %s", (username, npm))
        user = cursor.fetchone()
        cursor.close()
        conn.close()
        if user and bcrypt.checkpw(password.encode('utf-8'), user[0].encode('utf-8')):
            return redirect('/dashboard')  # Arahkan ke dashboard
        else:
            flash('Username, NPM, atau password salah.')
            return redirect('/')  # Kembali ke halaman login
    elif request.method == "GET" : 
        return render_template ("login.html") 
    
@app.route('/dashboard')
def dashboard():
    return render_template ("/dashboard.html")

if __name__ == '__main__':
    app.run(debug=True)
