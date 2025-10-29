// Harita modal fonksiyonları
function openMapModal() {
    document.getElementById('mapModal').style.display = 'block';
    document.body.style.overflow = 'hidden'; // Sayfa kaydırmayı engelle
}

function closeMapModal() {
    document.getElementById('mapModal').style.display = 'none';
    document.body.style.overflow = 'auto'; // Sayfa kaydırmayı geri aç
}

// Modal dışına tıklayınca kapat
window.onclick = function(event) {
    const modal = document.getElementById('mapModal');
    if (event.target == modal) {
        closeMapModal();
    }
}

// ESC tuşu ile kapat
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeMapModal();
    }
});