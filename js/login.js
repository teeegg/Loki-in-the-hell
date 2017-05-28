
// Get the modal
var modal01 = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal01) {
        modal01.style.display = "none";
    }
}
