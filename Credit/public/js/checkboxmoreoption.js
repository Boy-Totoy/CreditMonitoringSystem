function toggleCheckbox(checkbox) {
    // If the clicked checkbox is checked, uncheck the other one
    if (checkbox.checked) {
        const otherCheckbox = checkbox.id === 'with-pay' ? document.getElementById('without-pay') : document.getElementById('with-pay');
        otherCheckbox.checked = false; // Uncheck the other checkbox
    }
}