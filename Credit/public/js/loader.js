 
 // Simulate loading process
    window.onload = function() {
        // After loading is complete, add the fade-out class
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fade-out'); // Add fade-out class
            // Optionally, hide the loader completely after fading out
            setTimeout(() => {
                loader.style.display = 'none'; // Hide the loader
            }, 500); // Match this duration with the transition time
        }, 5000); // Simulate a loading time of 1 second
    };
// Function to show the loader
function showLoader() {
    document.body.classList.add('blur'); // Add blur class to body
    document.querySelector('.loader').style.display = 'flex'; // Show the loader
}

// Function to hide the loader
function hideLoader() {
    document.body.classList.remove('blur'); // Remove blur class from body
    document.querySelector('.loader').style.display = 'none'; // Hide the loader
}

// Example usage
showLoader(); // Call this function to show the loader
// Call hideLoader() when you want to hide the loader