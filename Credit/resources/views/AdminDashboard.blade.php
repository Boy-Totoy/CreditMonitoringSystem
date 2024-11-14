<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link href="/css/AdminDash.css" rel="stylesheet">
         <link href="/css/admindashsidenave.css" rel="stylesheet">
         <link href="/css/acciconsidenav.css" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
           <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
             <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                 <title>OCA Leave Credit Monitoring System</title>
</head>
      <body>
         <div id="mySidebar" class="sidebar">
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAX1JREFUaEPtl9utAjEMRJ1O6ATRCVRybye0QifQiZElIkXRbvD4IbSS92d/srNzPM6r0cGfdnD/VAC/TrASqAScFagWchbQ/Xkl4C6hU6AScBbQ/bk5AWa+EtEfEd1aaw+LkwgNE8Dnx/eP6ZcFIkJD/g8DMPOJiJ5TxSGIyXyXEo1La03e6gcGEGVmltb5t0DsmBcpMQ+3ognAChFt3tRCY9WRJDLMuwG0SWSZDwH4BkFEMun7ijUGaOr5eXab58AstGgnAZifEPNhCXR3OxBp5sMBFu3UIcIq3wXDWmhIQY4YWz0PbXbanSwUYLHajLut+ey0BRUGoDCfAhECsFrniehsPXZo2sgNoNmkkB1bY3oc4wLQmP+yxLonthkAMZ8JYQKwmM+CgAF2LjTiT71JLebEzy40avOLJGAN11FiqKLpx9Oxw6wBt9C4hEk7oXfYjVOsS8MFgK7ZGeMLIKOqiGYlgFQrY2wlkFFVRLMSQKqVMbYSyKgqonn4BN4z7dExp1bhoQAAAABJRU5ErkJggg=="/></a>
               <a href="#" class="dashboard-icon" style="margin-top:113px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAPxJREFUWEftmGEOwiAMhV9PokfRk6gncZ5Eb6I3UU9SbbIRMsEixYQs5c+y0Ee+PaBtRuhsUGc8cCBtR5IOMfMawE4TA3gS0SWOs2hlnQ8gZt4DOBfATCFbIrrJi0U7LZYCOr4nhx+ABiI6jUDVWgfKOB7cdYfcoaXcssM8sbbOQ5LhJaluCvLYA4AkVXmG0RSoAEINcSDNopRDsv9XTRjNh+I63rQ7ADlL2ig+Q7KYQK20FeftR0W110tHAUQ2hJnbV/sugWq7vr84VHEO4o6x/ZZZvtKi9X7I+6Gl9EN6pmbm6lpm0X67ZZZaVq3NAllKRwut/47RXOzOoRfa/gE0DICn6QAAAABJRU5ErkJggg=="/>Dashboard</a>
               <a href="{{ route('leave.tardiness') }}" class="Leave/Tardiness"  style="margin-top:16px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAARNJREFUWEftmAEOgjAMRdub6E30JnoS8SR6E72J3qRSwghhYPcZM5sZCQmBbn37bZcVpswuzoyHygUSkUurZtMr2jDz9Zu6qL2bK1gh1AFqXxaQiOyI6EZEhwRJ/+7nPDKzex7czIaslVsSgEynVBgPygMSkVOvzg+Y6MzM97GjOaBxNaWG8qrVAnq2eaT3lpfmpctNGMjcb1BSazuwFMoOKLuQoRFB7eEcQh2g9hXIUixKoWHwUukGvh9DVqDuEDdRbjOFrHxY8z0qZGscWmP+C6hWWRfvkIoI3G+WFK1VZlVW+QrpefeBLDPCNqjr0CbxFeEEGbqfNotLjWLKzlWBtUlUdbyOJvhnA7LsGNsKZKn3AeJFEDQljm/HAAAAAElFTkSuQmCC">Leave/Tardiness</a>
                 <a href="#" class="settingsbtn"style="margin-top:20px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAc5JREFUWEftV8FxAjEMlDoJlSRUklBJoJJAJZBKQifKbcZmhE+2Zce5uWHiJ8PJe6vVao9pZYdXhoceA5CIPBHRBxG9ZBi+ENGOma+tHehiSETep4v2lcsA6LgmQHtmPjwuoKATtAZ6uenB2a5IDNp6gpZy9VIGsxoSka8AJj4DPUDEANhyIGyI/E09hN+2luhNQI0stIDT/zU1NgMUqAU7f31MlixAnpEeBXbG0h2gDnagq8+gEYCEvl4TvdTAb7SWUkBedkA3Jg9inR0Rgfjh5J4BODLzLhbpBYQJMcHEwgHUuUYPHF8bqKUhjGf0H6ue24FFBCzpcU/rzdZLiw/FYlV2FEsAA1DpuTLzxnrbZkATve6FXBiScYCmVXA3FSWNjAYkmcvcsaIgbP/qEJGRoi7ZCEAd0szUO/bVtg0Ze8eYxi56jNHjQaiX96EgQhTyOCyKYXWcJq/B1CDzoN3Pw1YHblgoekSmy8tVGVoazhwboPkvphetP6AVWPpthNXxt8up48dg9Iufj74wid5sfdNIsAH4Euog+Jtpwb2XtEKc9uBOBbp2LyBPkFsUUC5W6JddFBD0VTLQCzNvm41gWm5dLeu5yPvMP6AaU9+6VPUlBeMjkQAAAABJRU5ErkJggg=="/>Settings</a>
               <a href="#" class="accountbtn"style="margin-top:421px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAxNJREFUaEPtmQFu6yAMhgNJz7G9k7z2JFtPsu0k2zvJupO8vHMUwmIEEkpwbAzR9qpVmlapwfBh89s4qruRj7oRju4H5Lt5srlHrtfrUWv9O4DeO+fu4btSaoT/zrkP59x4OBwuLTejCYgx5lEpdTcv7LlgcQB2AbBhGN4KxmUfrQIJAE9d1/ldr/gA1Fvf9y9SGyIQCBdr7atS6iidGBk3TtN0loRdMUjwwmtjgNScyDtFIOCFrused4RITT+XhBobxBjzvkMoUXsy9n3/i3rIqyLnoS+CiEsDEThT6yRBrLWgSiWySs0p+Z0Ms02QkNzeJTM3HkOq2SZIg5AaIYtDVgfJrjxjm+cFBamRWefcZRiG09IrADNN04M0VJ1zZ6wKQEGstX+FGZs8nBXnDvVKFkTqDcwTOc9IK4Npmk65zJ8FkSY+bJLcwQ9hBl4v+mCbhYG4Iuvh4TkTk3Ie7UpB5soiG16rifcOq3SDpKqY8/wKZI+DiHm3QlBWCTIHIi4MS0IL4OZNE4UwyPeyoGwKsqXzS69IQxjs5A58DkSaP2COUWt9ivfzLcGo8AYPRHoAEzW6QLWKwbS4XbI8UgsSgPwtb1aXj5i8asuThXdX1UNL1cIiCaBqmxNL218CIsmt1Bhatb7RHQSFyanjKrQqSoc4MTTbYlfx33I1SqnYhRQ3MXL5Cqt+SxsNxS2coF5HpVRpgy97TciClIQXt3TH4qRUzbCkmwUJxuGuvqk2tRApHLPGK7tYwQRUCdESIpQdZBt2675T03xglyOUlnJAqI2rbQeRbRoOBOdMUrdP8kbHiF2vWFrrP5xiMQXjHnROVU2ChHsDp9u4qq9aKBUVUnEOFkjYOYDhJjH/NiopIP3XeVGQN9jvVLgQYJsFEg9jTXONc1aoCnfLBhskGmGcGcGaV0PIpvWq9JHM2uJyhMwrVsFij6QL+O9fhi4l1FoLhxiqWq4YgAmvcvCl5BUbFkFVHlkahZAzxsDrA/jz5Xp4nQA1G6iYL+/TK7AktHNjmoK0WpTEzg+IZNf2HHMzHvkED4IJUZeOkBoAAAAASUVORK5CYII="/>Account</a>
            </div>
      
      <div id="main">
        <button class="openbtn" onclick="openNav()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAALNJREFUWEftltEJw0AMQ61NOko3aTtZ200ySjdRyGcgAac6gw903xY2z5Y4RPOH5vOFB1Q3ZIImqBJQ9b7BMoIknxHxVhsk9S8An6Pa0xV7wD2uvwjeIuKeXJFatgD4XVqx2nGU3jGjkpyXIMnNIA+VQFL/BbBcMolzcEAO9l5x8nbKy+Z1cTmaZIN5CZLs/VlwDg7Iwd5f/qTJysvmdXE5mmQDE0yCOi0zQRNUCaj69je4AlnBPCnCcO+nAAAAAElFTkSuQmCC"/></button>
        <a href="#" ><button class="dashboard-icon-outer"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAPxJREFUWEftmGEOwiAMhV9PokfRk6gncZ5Eb6I3UU9SbbIRMsEixYQs5c+y0Ee+PaBtRuhsUGc8cCBtR5IOMfMawE4TA3gS0SWOs2hlnQ8gZt4DOBfATCFbIrrJi0U7LZYCOr4nhx+ABiI6jUDVWgfKOB7cdYfcoaXcssM8sbbOQ5LhJaluCvLYA4AkVXmG0RSoAEINcSDNopRDsv9XTRjNh+I63rQ7ADlL2ig+Q7KYQK20FeftR0W110tHAUQ2hJnbV/sugWq7vr84VHEO4o6x/ZZZvtKi9X7I+6Gl9EN6pmbm6lpm0X67ZZZaVq3NAllKRwut/47RXOzOoRfa/gE0DICn6QAAAABJRU5ErkJggg==" alt="Dashboard Icon"/></button></a>
        <a href="{{ route('leave.tardiness') }}"><button class="leave-tardi"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAARNJREFUWEftmAEOgjAMRdub6E30JnoS8SR6E72J3qRSwghhYPcZM5sZCQmBbn37bZcVpswuzoyHygUSkUurZtMr2jDz9Zu6qL2bK1gh1AFqXxaQiOyI6EZEhwRJ/+7nPDKzex7czIaslVsSgEynVBgPygMSkVOvzg+Y6MzM97GjOaBxNaWG8qrVAnq2eaT3lpfmpctNGMjcb1BSazuwFMoOKLuQoRFB7eEcQh2g9hXIUixKoWHwUukGvh9DVqDuEDdRbjOFrHxY8z0qZGscWmP+C6hWWRfvkIoI3G+WFK1VZlVW+QrpefeBLDPCNqjr0CbxFeEEGbqfNotLjWLKzlWBtUlUdbyOJvhnA7LsGNsKZKn3AeJFEDQljm/HAAAAAElFTkSuQmCC"/></button></a>
        <a href="{{ route('admin.emp') }}"><button class="emplist"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAbZJREFUWEftl8F5wjAMhaVNyiRtNymTFCYpnYQySdlEzSsOnx0S67k2KQfrwgFZ+v0k24rKg5s+OJ90wNoKdQW7grUK1K4v6kEzexGRZxF5EpGTiJxV9asWIreeAjQzAB0D2DTeQUT2qnq+B6gLGFQDXM6g5Oa/AAGH0nq2U9V97BQ2B/VLLGmbrIKkemPyGxXN7GPo07cSuqGNDqq6Hdd4gAiOJJQNCibx1gB8H8h2FN3FaRMfljUA0XveAbnyTxUs2Niiq1diNPg3mSjpHXKN68ZcM2wfJuV1M5MOLiDimFmuF3FBb3MvSuhFEklOqorL/9cowACJcgMUv+PdhrImd98cxbBBY+mKrpmCoFnXVQDDexyrByhqWLhbiQMUyuq9BuhDqtylVVnsQTNjT2+cE6CvLSebWUDn1HoiuKfaCxD/fwNYOCAs5ZobHNiK5IcFM2PHK0+IZPwqaJllwHAo2KfNA0xUbAXIlsGDu7wC0fgVNs8MvssD6x/HoxwsTnTVR1WLATMHiDf6+q5Ssk+cpoAoMT4rW9lnUwVbUbWMQ08zLZOWxOqAJWrN+XYFu4K1CtSu/wFnALIpCWRlmQAAAABJRU5ErkJggg=="/></button></a>
         <button class="userprofile-btn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAxNJREFUaEPtmQFu6yAMhgNJz7G9k7z2JFtPsu0k2zvJupO8vHMUwmIEEkpwbAzR9qpVmlapwfBh89s4qruRj7oRju4H5Lt5srlHrtfrUWv9O4DeO+fu4btSaoT/zrkP59x4OBwuLTejCYgx5lEpdTcv7LlgcQB2AbBhGN4KxmUfrQIJAE9d1/ldr/gA1Fvf9y9SGyIQCBdr7atS6iidGBk3TtN0loRdMUjwwmtjgNScyDtFIOCFrused4RITT+XhBobxBjzvkMoUXsy9n3/i3rIqyLnoS+CiEsDEThT6yRBrLWgSiWySs0p+Z0Ms02QkNzeJTM3HkOq2SZIg5AaIYtDVgfJrjxjm+cFBamRWefcZRiG09IrADNN04M0VJ1zZ6wKQEGstX+FGZs8nBXnDvVKFkTqDcwTOc9IK4Npmk65zJ8FkSY+bJLcwQ9hBl4v+mCbhYG4Iuvh4TkTk3Ie7UpB5soiG16rifcOq3SDpKqY8/wKZI+DiHm3QlBWCTIHIi4MS0IL4OZNE4UwyPeyoGwKsqXzS69IQxjs5A58DkSaP2COUWt9ivfzLcGo8AYPRHoAEzW6QLWKwbS4XbI8UgsSgPwtb1aXj5i8asuThXdX1UNL1cIiCaBqmxNL218CIsmt1Bhatb7RHQSFyanjKrQqSoc4MTTbYlfx33I1SqnYhRQ3MXL5Cqt+SxsNxS2coF5HpVRpgy97TciClIQXt3TH4qRUzbCkmwUJxuGuvqk2tRApHLPGK7tYwQRUCdESIpQdZBt2675T03xglyOUlnJAqI2rbQeRbRoOBOdMUrdP8kbHiF2vWFrrP5xiMQXjHnROVU2ChHsDp9u4qq9aKBUVUnEOFkjYOYDhJjH/NiopIP3XeVGQN9jvVLgQYJsFEg9jTXONc1aoCnfLBhskGmGcGcGaV0PIpvWq9JHM2uJyhMwrVsFij6QL+O9fhi4l1FoLhxiqWq4YgAmvcvCl5BUbFkFVHlkahZAzxsDrA/jz5Xp4nQA1G6iYL+/TK7AktHNjmoK0WpTEzg+IZNf2HHMzHvkED4IJUZeOkBoAAAAASUVORK5CYII="/></button>
        </div>

      <div id="content">

{{-- all content in dashboard here --}}

       <div class="topdecor">
          <div class="topdecortitlecont">
            <img class="logotitle" src="/img/001_OFFICEOFTHECITYASSESSOR.png">
              <h1 class="officetitle">OFFICE OF THE CITY ASSESSOR</h1>
            <img class="logotitle2" src="/img/qc.png">
          </div>
       </div>


       <div class="maincontent" >
           <h1 id="divisiontxt-title" class="divisiontxt-title">Pending Leaves</h1>

           <div class="date-time">
             <?php
              // Get the current date and time from Google's servers for security
                 $datetime = new DateTime("now", new DateTimeZone('Asia/Manila'));
                   $date = $datetime->format('l, F jS, Y');
                   $time = $datetime->format('h:i A');
                 echo "Date: $date | Time: <span id='current-time'>$time</span>";
              ?>
            </div>

        <button class="morebtn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAH1JREFUSEtjZKAxYKSx+QwjyAINDQ2H/3//1oOClJGZufHGjRsHiAleooNIXU3tPgMDgwLY0P//D9y8fduRdhYwMDy4eeuWIlUtAAfRv3/zGf7/f0CTICLGtdjUEB0HNLdgNBURDOLRVERcEI2WRfjCaTQVEUxF5CqgeWkKAA2CXRkMduGGAAAAAElFTkSuQmCC"/></button>
       
        <hr class="upper-separator">
       </div>

       
          <!-- searchbar  -->
          <div class="filtering">
            <div class="search-container">
                <input class="searchbar" type="text" placeholder="Search by name...">
                <span class="search-icon"><i class="fas fa-search"></i></span>
            </div>
        </div>
        <!-- searchbar  -->



        <div class="table-container">
          <table class="divisionemployeetable">
              <thead>
                  <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Date</th>
                      <th>Reason</th>
                      <th>Status</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>  
                      <td>1</td>
                      <td>John Doe</td>
                      <td>HR</td>
                      <td>2023-01-01</td>
                      <td>Annual Leave</td>
                      <td>
                      <div class="button-container">
                        <button class="approve-button">Approve</button>
                        <button class="deny-button">Deny</button>
                    </div>
                      </td>
                  </tr>
                  <tr>  
                    <td>1</td>
                    <td>John Doe</td>
                    <td>HR</td>
                    <td>2023-01-01</td>
                    <td>Annual Leave</td>
                    <td>Approved</td>
                </tr>
                <tr>  
                  <td>1</td>
                  <td>John Doe</td>
                  <td>HR</td>
                  <td>2023-01-01</td>
                  <td>Annual Leave</td>
                  <td>Approved</td>
              </tr>
              <tr>  
                <td>1</td>
                <td>John Doe</td>
                <td>HR</td>
                <td>2023-01-01</td>
                <td>Annual Leave</td>
                <td>Approved</td>
            </tr> 
            <tr>  
              <td>1</td>
              <td>John Doe</td>
              <td>HR</td>
              <td>2023-01-01</td>
              <td>Annual Leave</td>
              <td>Approved</td>
          </tr>
                  <tr>
                      <td>2</td>
                      <td>Jane Smith</td>
                      <td>IT</td>
                      <td>2023-01-02</td>
                      <td>Sick Leave</td>
                      <td>Pending</td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>Emily Johnson</td>
                      <td>Finance</td>
                      <td>2023-01-03</td>
                      <td>Personal Leave</td>
                      <td>Approved</td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>Michael Brown</td>
                      <td>Marketing</td>
                      <td>2023-01-04</td>
                      <td>Vacation</td>
                      <td>Denied</td>
                  </tr>
                  <tr>
                      <td>5</td>
                      <td>Linda Davis</td>
                      <td>Sales</td>
                      <td>2023-01-05</td>
                      <td>Annual Leave</td>
                      <td>Approved</td>
                  </tr>
                  <tr>
                      <td>6</td>
                      <td>James Wilson</td>
                      <td>HR</td>
                      <td>2023-01-06</td>
                      <td>Personal Leave</td>
                      <td>Pending</td>
                  </tr>
                  <tr>
                      <td>7</td>
                      <td>Patricia Garcia</td>
                      <td>IT</td>
                      <td>2023-01-07</td>
                      <td>Sick Leave</td>
                      <td>Approved</td>
                  </tr>
                  <tr>
                      <td>8</td>
                      <td>Robert Martinez</td>
                      <td>Finance</td>
                      <td>2023-01-08</td>
                      <td>Vacation</td>
                      <td>Denied</td>
                  </tr>
                  <tr>
                      <td>9</td>
                      <td>Elizabeth Hernandez</td>
                      <td>Marketing</td>
                      <td>2023-01-09</td>
                      <td>Annual Leave</td>
                      <td>Approved</td>
                  </tr>
                  <tr>
                      <td>10</td>
                      <td>William Lee</td>
                      <td>Sales</td>
                        <td>2023-01-09</td>
                        <td>Annual Leave</td>
                        <td>Approved</td>
                      </tr>
                      <tr>  
                        <td>1</td>
                        <td>John Doe</td>
                        <td>HR</td>
                        <td>2023-01-01</td>
                        <td>Annual Leave</td>
                        <td>Approved</td>
                    </tr>
                    <tr>  
                      <td>1</td>
                      <td>John Doe</td>
                      <td>HR</td>
                      <td>2023-01-01</td>
                      <td>Annual Leave</td>
                      <td>Approved</td>
                  </tr><tr>  
                    <td>1</td>
                    <td>John Doe</td>
                    <td>HR</td>
                    <td>2023-01-01</td>
                    <td>Annual Leave</td>
                    <td>Approved</td>
                </tr>
                <tr>  
                  <td>1</td>
                  <td>John Doe</td>
                  <td>HR</td>
                  <td>2023-01-01</td>
                  <td>Annual Leave</td>
                  <td>Approved</td>
              </tr> 
              </tbody>
          </table>
        </div>
        
</div>
      
<div class="nopending">

  <img class="nopendingimg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAAidJREFUaEPtmtFxgzAMhq1jkeQxh9khmaTNJE0naTZpdghcHksHIW7dkl7KHZYwkgtFvsubbfTpl2QTBGZhAxbGaxT4vyuuCvcpXFXVk3Nua4zxv6mM2hsCAMc8z58pRqEKXy6XVdM0r8aYFWXDP5xTZ1m222w2X07oGyhwWZYedkqqhnhO1tpdNPD5fN4CgAeezXDO7YqiOEUpXFXVo3PuZTa03/m8z/P8GAvsC9VhZsCHUAEL5nBbmRV4yooDgCp8L5CG9L03NIennLytbaly+AQAvYc9h5+o9/gkwNhDOICp6YXZwlK0sIcocIQHVOEep2HRxhLSn6+PyypaEREqtiSVwmIAQzdW4I7HuHJ4qBBi81MpzFK0OP5sSAKMPYQqZ1mWjjq39y+cFO/DChwpkyoc4Tgs2riq9LKKVoQQYktSKSwGMHRjBdabViBmqC/dQ8NOcr6GtIZ0IL7m+H141OfStt3hTTLnuPfOsmwdanvQloeuxxfX1OId4KGv1+sD9XMHd5gi+9WsbUsxxnP0hmDNKTF2+TVoDsduPObSglXaWJtEgf3mkdBHa+1+DFRorZjCndynNsagjWVjHSEKfINumsb3emHdfOKw4iF9U4NwtNXW2vVY9SjrxRUmQNfOuX2oXZACQp2TDPguvH9dVaWOnz4HJAVuK/dP/2Zq2GQ53PW2P66MMe+hJlBqiA6dl1zhoQZyz1dgbo9ObT9VeGqKcNvzATlk40xWoY/LAAAAAElFTkSuQmCC"/>
      <H1 class="nopendingtxt">No pending requests</H1>

</div>

       <!-- content end -->
       </div>

       <div class="accdrop" >
        <button class="accmanage">My Account</button>
        <br>
          <button class="accset">Account Settings</button>
          <br>
            <button class="logout" id="logout-button">Logout</button>
  </div>
  
  <div id="logoutVerification" class="logout-verification" style="display:none;">
    <h1 class="logoutverificationtxt">Are you sure you want to logout?</h1>
    
    <a href="{{ route('logout') }}"><button id="confirmLogout">Yes</button></a>
    <button id="cancelLogout">No</button>
  
  </div>

          <!-- Dashboard frame end -->
      </div> 
      <script src="{{ asset('js/logoutdiv.js') }}"></script>
      <script src="{{ asset('js/admindashboard.js') }}"></script>

    <script>
     


document.querySelector('.dashboard-icon-outer').addEventListener('click', function() {
        // Redirect to the Admin Dashboard route
        window.location.href = "{{ route('admin.dashboard') }}"; // Ensure this matches your route
    });

    document.querySelector('.tardiness-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor click behavior
        window.location.href = "{{ route('leave.tardiness') }}"; // Redirect to the Leave/Tardiness route
    });

    document.querySelector('.emplist').addEventListener('click', function() {
        // Redirect to the Admin Dashboard route
        window.location.href = "{{ route('admin.emp') }}"; // Ensure this matches your route
    });

  

        </script>
   
   
</body>
</html>