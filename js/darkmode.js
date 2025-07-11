// SISTEM DARK MODE GLOBAL - SATU TOMBOL UNTUK SEMUA HALAMAN

// Fungsi utama toggle dark mode
function toggleGlobalDarkMode() {
  document.body.classList.toggle('dark');
  const toggleBtn = document.querySelector('.darkmode-btn'); 
  
  if (document.body.classList.contains('dark')) {
    if (toggleBtn) toggleBtn.textContent = '☀️';
    localStorage.setItem('globalDarkMode', 'enabled');
  } else {
    if (toggleBtn) toggleBtn.textContent = '🌙';
    localStorage.setItem('globalDarkMode', 'disabled');
  }
  // Optional: Update all buttons if there are multiple on one page (e.g., in modals)
  document.querySelectorAll('.darkmode-btn').forEach(btn => {
    btn.textContent = document.body.classList.contains('dark') ? '☀️' : '🌙';
  });
}

// Inisialisasi dark mode
function initializeGlobalDarkMode() {
  const darkMode = localStorage.getItem('globalDarkMode');
  
  if (darkMode === 'enabled') {
    document.body.classList.add('dark');
  } else {
    document.body.classList.remove('dark');
  }
  // Pastikan semua tombol dark mode menampilkan ikon yang benar saat inisialisasi
  document.querySelectorAll('.darkmode-btn').forEach(btn => {
    btn.textContent = document.body.classList.contains('dark') ? '☀️' : '🌙';
  });
}

// Jalankan ketika halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
  // Pastikan tombol darkmode ada di navbar dan elemen lain
  const toggleButtons = document.querySelectorAll('.darkmode-btn');
  toggleButtons.forEach(btn => {
    if (btn) {
      btn.addEventListener('click', toggleGlobalDarkMode);
    }
  });
  initializeGlobalDarkMode();
  
  // Sync ulang jika ada perubahan (ini opsional, tapi bisa membantu)
  setTimeout(initializeGlobalDarkMode, 100);
});

// Expose fungsi secara global (sudah ada, pastikan tidak ada duplikasi)
window.toggleGlobalDarkMode = toggleGlobalDarkMode;
window.initializeGlobalDarkMode = initializeGlobalDarkMode;