<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/userregister.css" rel="stylesheet">
    <title>Create Account</title>

</head>
<body>

    <img class="bglogo" src="/img/001_OFFICEOFTHECITYASSESSOR.png">


    <div class="top">
        <h1 class="accid">Account ID:</h1>
            <input type="text" class="accidnum" value="00000001" disabled>
        <h1 class="userid">Employee No.:</h1>
            <input type="text" class="empnumber" required>
    </div>


    <div class="bottom">
        <h1 class="usertxt">Account Information</h1>
            <h1 class="newlname">Last Name:</h1>
            <input type="text" class="name">    
                <h1 class="newfname">First Name:</h1>
                <input type="text" class="fname">
                    <h1 class="newmname">Middle Name:</h1>
                    <input type="text" class="mname">
                        <h1 class="newsufname">Suffix</h1> 
                        <h3 class="newsufnamecomment">(Leave blank if none.):</h3>                 
                              <input type="text" class="suffix">

                            <hr class="linesplit">

                            <h1 class="secdetails">Account Security</h1>
                        <h1 class="newusernametxt">Username:</h1>
                        <input type="text" class="newusernameinput">  
                    <h1 class="newemailtxt">Email:</h1>
                
                    <input type="email" class="newemailinput"> 
                <h1 class="newpasswordname">Password:</h1>
                <input type="password" class="newpasswordinput">
                <input type="checkbox" class="showPassword">
                <h1 class="showPasswordtxt">Show Password</h1>
            <h1 class="newconfirmname">Confirm Password:</h1>
            <input type="password" class="newconfirminput">
            <input type="checkbox" class="showconfirmPassword">
            <h1 class="showconfirmtxt">Show Password</h1>    
            </div>


            <div class="side">
                <h1 class="officetxt">Office / Deparment</h1>
                <h1 class="officedisptxt">Office:</h1>
                <input type="text" class="officeinput" value="   OFFICE OF THE CITY ASSESSOR" disabled>
                <select class="dept">
                    <option value="" disabled selected>-- Select Division --</option>
                    <option> PVSD - Property Valuation Standard Division</option>
                    <option> PAD - Property Appraisal Division</option>
                    <option> EDP - Electronic Data Processing Division</option>
                    <option> ARMD - Assmt. Records Management Division</option>
                    <option>TMD- Tax Mapping Division</option>
                    <option>ADMIN - Administrative Division</option>
                    <option>Exec. Unit</option>
                </select>
                <h1 class="departmenttxt">Department</h1>
                <h1 class="positiontxt">Position</h1>
                <input type="text" class="office">
                <h1 class="salarytxt">Salary:</h1>
                <input type="text" class="salaryinput" value="">
                <h1 class="salaryinwords"></h1>
                <hr class="linesplit2">

                <img class="lowdesign" src="/img/assessors.jpg" alt="design">

                <button class="submitbtn">Create Account</button>
                <button class="cancelbtn">Cancel</button>
            </div> 
            
            <script>
document.addEventListener('DOMContentLoaded', () => {

  // Username input formatting
  const newusernameinput = document.querySelector('.newusernameinput');
  newusernameinput.addEventListener('input', function() {
      this.value = this.value.replace(/[^\w]/g, '').slice(0, 18); // Remove non-alphanumeric and limit to 18 chars
  });

  // Salary input formatting and in-words conversion
  const salaryInput = document.querySelector('.salaryinput');
  const salaryInWords = document.querySelector('.salaryinwords');

  salaryInput.addEventListener('input', function() {
      const salaryValue = this.value.replace(/[^\d]/g, '').slice(0, 8); // Limit to 8 digits
      this.value = salaryValue;
      salaryInWords.textContent = numToWords(salaryValue);
  });

  salaryInput.addEventListener('blur', function() {
      if (this.value) this.value = parseFloat(this.value).toLocaleString('en-US', { minimumFractionDigits: 2 });
  });

  function numToWords(num) {
      // Helper functions for number conversion
      const ones = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
      const teens = ['ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
      const tens = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
      const thousands = ['', 'thousand', 'million', 'billion'];

      let words = '', i = 0;
      while (num > 0) {
          if (num % 1000 !== 0) {
              words = helper(num % 1000) + (i > 0 ? ' ' + thousands[i] : '') + (words ? ' ' + words : '');
          }
          num = Math.floor(num / 1000);
          i++;
      }
      return words;

      function helper(num) {
          if (num < 10) return ones[num];
          if (num < 20) return teens[num - 10];
          if (num < 100) return tens[Math.floor(num / 10)] + (num % 10 > 0 ? ' ' + ones[num % 10] : '');
          return ones[Math.floor(num / 100)] + ' hundred' + (num % 100 > 0 ? ' and ' + helper(num % 100) : '');
      }
  }

  // Password visibility toggle
  document.querySelectorAll('.showPassword, .showconfirmPassword').forEach(toggle => {
      toggle.addEventListener('click', function() {
          const passwordInput = this.classList.contains('showPassword') ? 
                                document.querySelector('.newpasswordinput') : 
                                document.querySelector('.newconfirminput');
          passwordInput.type = this.checked ? 'text' : 'password';
      });
  });

  // Form submission validation
  document.querySelector('.submitbtn').addEventListener('click', function(e) {
      e.preventDefault(); // prevent form submission for validation

      // Required field validation
      const inputs = document.querySelectorAll('input:not(.suffix)');
      let isBlank = false;
      inputs.forEach(input => {
          input.style.border = input.value.trim() === '' ? '1px solid red' : '1px solid black';
          if (input.value.trim() === '') isBlank = true;
      });

      if (isBlank) return alert(`Warning: All fields need to be filled in`);

      // Email format validation
      const email = document.querySelector('.newemailinput').value;
      if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
          return alert('Warning: Enter email in correct format');
      }

      // Password validation
      const newpass = document.querySelector('.newpasswordinput').value;
      const confpass = document.querySelector('.newconfirminput').value;
      if (newpass !== confpass) return alert('Warning: Passwords do not match');
      if (newpass.length < 8 || newpass.length > 12) return alert('Warning: Password must be 8-12 characters');
      if (!/[A-Z]/.test(newpass)) return alert('Warning: Password must contain at least one uppercase letter');
      if (!/[a-z]/.test(newpass)) return alert('Warning: Password must contain at least one lowercase letter');
      if (!/[0-9]/.test(newpass)) return alert('Warning: Password must contain at least one number');
      if (!/[!@#$%^&*.,]/.test(newpass)) return alert('Warning: Password must contain at least one special character');

      // Division selection validation
      const deptInput = document.querySelector('.dept');
      if (deptInput.value === '' || deptInput.options[deptInput.selectedIndex].disabled) {
          return alert('Please select a valid division');
      }

      // Username validation
      const username = newusernameinput.value;
      if (username.length < 3 || username.length > 20 || !/^[a-zA-Z0-9_.]+$/.test(username)) {
          return alert('Username must be 3-20 characters and contain only letters, numbers, underscores (_), or periods (.)');
      }

      alert('Account Created');
      // e.preventDefault(); // Uncomment this if form should actually submit
  });
});
</script>

</body>
</html>