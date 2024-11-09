// Data pengguna yang tersimpan secara lokal 
const validUser = {
    username: "yahya", 
    password: "deya2501" 
} 

app.use(express.static(path.join(__dirname, '../frontend')));


document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form untuk reload halaman

    // Ambil nilai input dari form
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Verifikasi kredensial
    if (username === validUser.username && password === validUser.password) {
        // Login berhasil, arahkan ke halaman dashboard
        res.sendFile(path.join(__dirname, '../frontend/dashboard.html')); 
    } else {
        // Login gagal, tampilkan pesan error
        document.getElementById('error-message').style.display = 'block';
    }
});