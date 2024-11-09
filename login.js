document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form untuk reload halaman

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Verifikasi login (misalnya menggunakan data sederhana)
    if (username === 'yahya' && password === 'deya2501') {
        // Login berhasil, arahkan ke dashboard.html
        window.location.href = 'dashboard.html'; // Redirect ke halaman dashboard
    } else {
        // Login gagal
        document.getElementById('error-message').style.display = 'block';
    }
});