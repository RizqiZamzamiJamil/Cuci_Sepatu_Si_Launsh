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