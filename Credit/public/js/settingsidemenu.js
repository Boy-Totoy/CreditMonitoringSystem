document.addEventListener('DOMContentLoaded', function() {
    const addNewButton = document.getElementById('addNewButton');

    addNewButton.addEventListener('click', function() {
        // Toggle the 'active' class on button click
        this.classList.toggle('active');
    });
});