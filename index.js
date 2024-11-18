document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form untuk reload halaman

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  //mencari 
 
    // Verifikasi login (misalnya menggunakan data sederhana)
    if (username === 'yahya' && password === 'deya2501') {
        // Login berhasil, arahkan ke dashboard.html
        window.location.href = 'dashboard.html'; // Redirect ke halaman dashboard
    } else {
        // Login gagal
        alert("maaf username dan password yang anda masukkan salah! 🙏")
    }


  
});

document.getElementById("logout").addEventListener("click", function(event) {
    event.preventDefault();

    window.location.href="index.php";

});

const themeToggleButton = document.getElementById('theme-toggle');
const body = document.body;

if (localStorage.getItem('theme') === 'light') {
    body.classList.add('light-theme');
    themeToggleButton.textContent = '🌞'; // Ubah ikon tombol untuk mode terang
} else {
    body.classList.remove('light-theme');
    themeToggleButton.textContent = '🌙'; // Default ke mode gelap
}

// Mengganti antara mode terang dan gelap
themeToggleButton.addEventListener('click', () => {
    body.classList.toggle('light-theme');
    if (body.classList.contains('light-theme')) {
        localStorage.setItem('theme', 'light');
        themeToggleButton.textContent = '🌞'; // Ubah ikon tombol untuk mode terang
    } else {
        localStorage.removeItem('theme');
        themeToggleButton.textContent = '🌙'; // Ubah ikon tombol untuk mode gelap
    }
});