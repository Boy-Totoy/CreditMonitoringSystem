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

