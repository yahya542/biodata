  cursor = conn.cursor()
        cursor.execute("SELECT password FROM users WHERE username = %s AND npm = %s", (username, npm))
        user = cursor.fetchone()