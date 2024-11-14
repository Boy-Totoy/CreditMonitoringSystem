document.querySelector('.userprofile-btn').addEventListener('click', function(event) {
    const accDrop = document.querySelector('.accdrop');
    
    // Prevent the click event from bubbling up to the document
    event.stopPropagation();

    // Toggle the 'show' class
    if (accDrop.classList.contains('show')) {
        accDrop.classList.remove('show'); // Remove show class to fade out
        setTimeout(() => {
            accDrop.style.display = 'none'; // Hide after fade out
        }, 500); // Match the duration of the CSS transition
    } else {
        accDrop.style.display = 'block'; // Show the element
        setTimeout(() => {
            accDrop.classList.add('show'); // Add show class to fade in
        }, 10); // Small timeout to allow display to take effect
    }
});

// Close accdrop when clicking outside of it
document.addEventListener('click', function(event) {
    const accDrop = document.querySelector('.accdrop');
    const userProfileBtn = document.querySelector('.userprofile-btn');

    // Check if the click is outside of accDrop and the button
    if (!accDrop.contains(event.target) && !userProfileBtn.contains(event.target)) {
        if (accDrop.classList.contains('show')) {
            accDrop.classList.remove('show'); // Remove show class to fade out
            setTimeout(() => {
                accDrop.style.display = 'none'; // Hide after fade out
            }, 500); // Match the duration of the CSS transition
        }
    }
});

$(document).ready(function() {
    // Show the dropdown when the userprofile-btn is clicked
    $('.userprofile-btn').on('click', function() {
        $('.accdrop').stop(true, true).css('display', 'block').hide().fadeIn(); // Show the dropdown
    });

    // Hide the dropdown when clicking outside of it
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.userprofile-btn, .accdrop').length) {
            $('.accdrop').stop(true, true).fadeOut(); // Hide the dropdown with fadeOut
        }
    });

    // Function to show logout verification
    $('.logout').on('click', function() {
        if ($('#logoutVerification').length) {
            $('#logoutVerification').show(); // Show the verification prompt if it exists
        } else {
            console.error('Logout verification element not found.');
        }
    });

    // Function to confirm logout
    $('#confirmLogout').on('click', function() {
        // Add your logout logic here, e.g., redirect to logout route
        window.location.href = '/logout'; // Change this to your logout URL
    });

    // Function to cancel logout
    $('#cancelLogout').on('click', function() {
        if ($('#logoutVerification').length) {
            $('#logoutVerification').hide(); // Hide the verification prompt if it exists
        } else {
            console.error('Logout verification element not found.');
        }
    });
});