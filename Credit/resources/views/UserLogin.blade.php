<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/css/Logindesign.css" rel="stylesheet">
    <link href="/css/leave.css" rel="stylesheet">
    <link href="/css/datepicker.css" rel="stylesheet">
    <link href="/css/leavetypes.css" rel="stylesheet">
    <link href="/css/leavesidenav.css" rel="stylesheet">
    <link href="/css/leaveappliedtable.css" rel="stylesheet">
    <link href="/css/tardiness.css" rel="stylesheet">
    <link href="/css/loader.css" rel="stylesheet">
</head>
<body>
    
    <img class="bg" src="/img/loginlogo.png" alt="Office of the City Assessor">
    <div class="date">
        <?php
        // Get the current date and time from Google's servers for security
           $datetime = new DateTime("now", new DateTimeZone('Asia/Manila'));
             $date = $datetime->format('l, F jS, Y');
             $time = $datetime->format('h:i A');
           echo "Date: $date | Time: <span id='current-time'>$time</span>";
        ?>
    </div>
    <div class="LoginBorder">
        <H1 class="systemtitle">Credit Monitoring System</H1>
        <br>
        <main>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <img class="qclogo" src="/img/qc.png" alt="QC Logo">
                <img class="officelogo" src="/img/001_OFFICEOFTHECITYASSESSOR.png" alt="Office Logo">
                
                <div class="inputuser">
                    <h4 class="usernametxt">Username</h4>
                    <input type="text" class="user" name="username" placeholder="Enter username" required>
                </div>
    
                <div class="inputpassword">
                    <h4 class="passwordtxt">Password</h4>
                    <input type="password" class="pass" name="password" placeholder="Enter password" required>
                </div>
    
                <!-- Display error message if any -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif
    
                <button type="submit" class="signin-btn">Sign In</button>
            </form>
        </main>
    </div>
    
  

<script src="{{ asset('js/authenticationbeforeredirect.js') }}"></script>

    <script>
        window.history.pushState(null, null, window.location.href);
window.onpopstate = function () {
    window.history.go(1);
};
    </script>


</body>
</html>