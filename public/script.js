// buka modal
function openModal() {
    document.getElementById("myModal").style.display = "flex";
}
// menutup modal
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}
// Menutup modal jika mengklik di luar modal
window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}