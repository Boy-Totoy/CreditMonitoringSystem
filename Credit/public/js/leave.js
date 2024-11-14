/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("content").style.paddingLeft = "170px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("content").style.paddingLeft = "0";
}

function switchUnderline(activeTitle, inactiveTitle) {
    // Get the elements by their IDs
    const activeElement = document.getElementById(activeTitle);
    const inactiveElement = document.getElementById(inactiveTitle);

    // Check if both elements exist
    if (!activeElement || !inactiveElement) {
        console.error(`One or both of the elements with IDs "${activeTitle}" or "${inactiveTitle}" do not exist.`);
        return; // Exit the function if elements are not found
    }

    // Change the font color of the active title to green
    activeElement.style.color = 'green';
    // Revert the font color of the inactive title to default
    inactiveElement.style.color = ''; // Default color

    // Manage underline class
    inactiveElement.classList.remove('underline');
    activeElement.classList.add('underline');

    // Manage active class
    inactiveElement.classList.remove('active'); // Remove active class from inactive title
    activeElement.classList.add('active'); // Add active class to active title
}

// Add event listeners to the titles
document.getElementById('employess-title').addEventListener('click', function() {
    switchUnderline('employess-title', 'divisiontxt-title');
    toggleContent('employess-title'); // Call toggleContent when this title is clicked
});

document.getElementById('divisiontxt-title').addEventListener('click', function() {
    switchUnderline('divisiontxt-title', 'employess-title');
    toggleContent('divisiontxt-title'); // Call toggleContent when this title is clicked
});
// Function to set the initial active content
function setInitialActiveContent() {
    // Set the initial active content to Appliedleave
    switchUnderline('employess-title', 'divisiontxt-title');
    toggleContent('employess-title');
}

// Call the function to set the initial active content when the page is loaded
document.addEventListener('DOMContentLoaded', setInitialActiveContent);

function toggleContent(activeTitle) {
    const Appliedleave = document.querySelector('.Appliedleave');
    const tardiness = document.querySelector('.tardiness');

    if (activeTitle === 'employess-title') {
        Appliedleave.style.display = 'block';
        tardiness.style.display = 'none';
    } else if (activeTitle === 'divisiontxt-title') {
        Appliedleave.style.display = 'none';
        tardiness.style.display = 'block';
    }
}

