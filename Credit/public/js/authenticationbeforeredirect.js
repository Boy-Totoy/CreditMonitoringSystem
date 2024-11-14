document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    const formData = new FormData(this);
    const loader = document.getElementById('loader');

    // Send an AJAX request to the login route
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show the loader and redirect to the dashboard
            loader.style.display = 'flex';
            setTimeout(() => {
                window.location.href = data.redirect_url;
            }, 1000); // Adjust delay if needed
        } else {
            // If login fails, keep loader hidden and show an error message
            alert(data.message || 'Invalid Credentials!');
        }
    })
    .catch(error => {
        alert('An error occurred. Please try again.');
        console.error('Error:', error);
    });
});
