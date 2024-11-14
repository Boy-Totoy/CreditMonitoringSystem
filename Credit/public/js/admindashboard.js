


       // Function to update the time every second
       function updateTime() {
        // Get the current time from the server
        const now = new Date();
        const options = {
            timeZone: 'Asia/Manila',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        };
        // Format the time using Intl.DateTimeFormat
        const timeString = new Intl.DateTimeFormat('en-US', options).format(now);
        // Update the time in the span element
        document.getElementById('current-time').textContent = timeString;
    }

    // Call updateTime every second
    setInterval(updateTime, 1000);

    
      
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
/* underlines moving */