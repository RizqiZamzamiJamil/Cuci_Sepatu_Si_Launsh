// Fungsi untuk menampilkan pesan dan mengalihkan ke halaman utama setelah beberapa detik
function showSuccessMessage() {
    var messageElement = document.getElementById('success-message');
    messageElement.style.display = 'flex';
  
    setTimeout(function() {
      window.location.href = '/'; // Ganti dengan URL halaman utama Anda
    }, 3000); // Ganti dengan durasi dalam milidetik (misalnya 3000 untuk 3 detik)
  }
  
  // Panggil fungsi showSuccessMessage() saat halaman dimuat
  window.onload = function() {
    showSuccessMessage();
  };

  document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
      duration: 800, // Durasi animasi dalam milidetik (ms)
      easing: 'ease-in-out', // Jenis kurva perpindahan animasi (ease, linear, ease-in, ease-out, ease-in-out)
    });
  });