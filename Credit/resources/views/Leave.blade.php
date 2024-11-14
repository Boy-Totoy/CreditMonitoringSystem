<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/leave.css" rel="stylesheet">
    <link href="/css/datepicker.css" rel="stylesheet">
    <link href="/css/leavetypes.css" rel="stylesheet">
    <link href="/css/leavesidenav.css" rel="stylesheet">
    <link href="/css/leaveappliedtable.css" rel="stylesheet">
    <link href="/css/tardiness.css" rel="stylesheet">
    <link href="/css/loader.css" rel="stylesheet">
    <link href="/css/tardinesstable.css" rel="stylesheet">
    <link href="/css/acciconsidenav.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>  
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OCA Leave Credit Monitoring System</title>
</head>
<body>
{{--  
  <div class="loader" id="loader">
    <div class="dots-container">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
    <br>
    <p>Getting things ready for you...</p>
</div>
--}}
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAX1JREFUaEPtl9utAjEMRJ1O6ATRCVRybye0QifQiZElIkXRbvD4IbSS92d/srNzPM6r0cGfdnD/VAC/TrASqAScFagWchbQ/Xkl4C6hU6AScBbQ/bk5AWa+EtEfEd1aaw+LkwgNE8Dnx/eP6ZcFIkJD/g8DMPOJiJ5TxSGIyXyXEo1La03e6gcGEGVmltb5t0DsmBcpMQ+3ognAChFt3tRCY9WRJDLMuwG0SWSZDwH4BkFEMun7ijUGaOr5eXab58AstGgnAZifEPNhCXR3OxBp5sMBFu3UIcIq3wXDWmhIQY4YWz0PbXbanSwUYLHajLut+ey0BRUGoDCfAhECsFrniehsPXZo2sgNoNmkkB1bY3oc4wLQmP+yxLonthkAMZ8JYQKwmM+CgAF2LjTiT71JLebEzy40avOLJGAN11FiqKLpx9Oxw6wBt9C4hEk7oXfYjVOsS8MFgK7ZGeMLIKOqiGYlgFQrY2wlkFFVRLMSQKqVMbYSyKgqonn4BN4z7dExp1bhoQAAAABJRU5ErkJggg=="/></a>
          <a href="{{ route('admin.dashboard') }}" class="dashboard-icon" style="margin-top:113px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAPxJREFUWEftmGEOwiAMhV9PokfRk6gncZ5Eb6I3UU9SbbIRMsEixYQs5c+y0Ee+PaBtRuhsUGc8cCBtR5IOMfMawE4TA3gS0SWOs2hlnQ8gZt4DOBfATCFbIrrJi0U7LZYCOr4nhx+ABiI6jUDVWgfKOB7cdYfcoaXcssM8sbbOQ5LhJaluCvLYA4AkVXmG0RSoAEINcSDNopRDsv9XTRjNh+I63rQ7ADlL2ig+Q7KYQK20FeftR0W110tHAUQ2hJnbV/sugWq7vr84VHEO4o6x/ZZZvtKi9X7I+6Gl9EN6pmbm6lpm0X67ZZZaVq3NAllKRwut/47RXOzOoRfa/gE0DICn6QAAAABJRU5ErkJggg=="/>Dashboard</a>
            <a href="{{ route('leave.tardiness') }}" class="Leave/Tardiness"  style="margin-top:16px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAARNJREFUWEftmAEOgjAMRdub6E30JnoS8SR6E72J3qRSwghhYPcZM5sZCQmBbn37bZcVpswuzoyHygUSkUurZtMr2jDz9Zu6qL2bK1gh1AFqXxaQiOyI6EZEhwRJ/+7nPDKzex7czIaslVsSgEynVBgPygMSkVOvzg+Y6MzM97GjOaBxNaWG8qrVAnq2eaT3lpfmpctNGMjcb1BSazuwFMoOKLuQoRFB7eEcQh2g9hXIUixKoWHwUukGvh9DVqDuEDdRbjOFrHxY8z0qZGscWmP+C6hWWRfvkIoI3G+WFK1VZlVW+QrpefeBLDPCNqjr0CbxFeEEGbqfNotLjWLKzlWBtUlUdbyOJvhnA7LsGNsKZKn3AeJFEDQljm/HAAAAAElFTkSuQmCC">Leave/Tardiness</a>
            <a href="#" class="settingsbtn"style="margin-top:20px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAc5JREFUWEftV8FxAjEMlDoJlSRUklBJoJJAJZBKQifKbcZmhE+2Zce5uWHiJ8PJe6vVao9pZYdXhoceA5CIPBHRBxG9ZBi+ENGOma+tHehiSETep4v2lcsA6LgmQHtmPjwuoKATtAZ6uenB2a5IDNp6gpZy9VIGsxoSka8AJj4DPUDEANhyIGyI/E09hN+2luhNQI0stIDT/zU1NgMUqAU7f31MlixAnpEeBXbG0h2gDnagq8+gEYCEvl4TvdTAb7SWUkBedkA3Jg9inR0Rgfjh5J4BODLzLhbpBYQJMcHEwgHUuUYPHF8bqKUhjGf0H6ue24FFBCzpcU/rzdZLiw/FYlV2FEsAA1DpuTLzxnrbZkATve6FXBiScYCmVXA3FSWNjAYkmcvcsaIgbP/qEJGRoi7ZCEAd0szUO/bVtg0Ze8eYxi56jNHjQaiX96EgQhTyOCyKYXWcJq/B1CDzoN3Pw1YHblgoekSmy8tVGVoazhwboPkvphetP6AVWPpthNXxt8up48dg9Iufj74wid5sfdNIsAH4Euog+Jtpwb2XtEKc9uBOBbp2LyBPkFsUUC5W6JddFBD0VTLQCzNvm41gWm5dLeu5yPvMP6AaU9+6VPUlBeMjkQAAAABJRU5ErkJggg=="/>Settings</a>
          <a href="#" class="accountbtn"style="margin-top:421px"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAxNJREFUaEPtmQFu6yAMhgNJz7G9k7z2JFtPsu0k2zvJupO8vHMUwmIEEkpwbAzR9qpVmlapwfBh89s4qruRj7oRju4H5Lt5srlHrtfrUWv9O4DeO+fu4btSaoT/zrkP59x4OBwuLTejCYgx5lEpdTcv7LlgcQB2AbBhGN4KxmUfrQIJAE9d1/ldr/gA1Fvf9y9SGyIQCBdr7atS6iidGBk3TtN0loRdMUjwwmtjgNScyDtFIOCFrused4RITT+XhBobxBjzvkMoUXsy9n3/i3rIqyLnoS+CiEsDEThT6yRBrLWgSiWySs0p+Z0Ms02QkNzeJTM3HkOq2SZIg5AaIYtDVgfJrjxjm+cFBamRWefcZRiG09IrADNN04M0VJ1zZ6wKQEGstX+FGZs8nBXnDvVKFkTqDcwTOc9IK4Npmk65zJ8FkSY+bJLcwQ9hBl4v+mCbhYG4Iuvh4TkTk3Ie7UpB5soiG16rifcOq3SDpKqY8/wKZI+DiHm3QlBWCTIHIi4MS0IL4OZNE4UwyPeyoGwKsqXzS69IQxjs5A58DkSaP2COUWt9ivfzLcGo8AYPRHoAEzW6QLWKwbS4XbI8UgsSgPwtb1aXj5i8asuThXdX1UNL1cIiCaBqmxNL218CIsmt1Bhatb7RHQSFyanjKrQqSoc4MTTbYlfx33I1SqnYhRQ3MXL5Cqt+SxsNxS2coF5HpVRpgy97TciClIQXt3TH4qRUzbCkmwUJxuGuvqk2tRApHLPGK7tYwQRUCdESIpQdZBt2675T03xglyOUlnJAqI2rbQeRbRoOBOdMUrdP8kbHiF2vWFrrP5xiMQXjHnROVU2ChHsDp9u4qq9aKBUVUnEOFkjYOYDhJjH/NiopIP3XeVGQN9jvVLgQYJsFEg9jTXONc1aoCnfLBhskGmGcGcGaV0PIpvWq9JHM2uJyhMwrVsFij6QL+O9fhi4l1FoLhxiqWq4YgAmvcvCl5BUbFkFVHlkahZAzxsDrA/jz5Xp4nQA1G6iYL+/TK7AktHNjmoK0WpTEzg+IZNf2HHMzHvkED4IJUZeOkBoAAAAASUVORK5CYII="/>Account</a>
       
    </div>
 
 <div id="main">
   <button class="openbtn" onclick="openNav()"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAALNJREFUWEftltEJw0AMQ61NOko3aTtZ200ySjdRyGcgAac6gw903xY2z5Y4RPOH5vOFB1Q3ZIImqBJQ9b7BMoIknxHxVhsk9S8An6Pa0xV7wD2uvwjeIuKeXJFatgD4XVqx2nGU3jGjkpyXIMnNIA+VQFL/BbBcMolzcEAO9l5x8nbKy+Z1cTmaZIN5CZLs/VlwDg7Iwd5f/qTJysvmdXE5mmQDE0yCOi0zQRNUCaj69je4AlnBPCnCcO+nAAAAAElFTkSuQmCC"/></button>
   <a href="{{ route('admin.dashboard') }}" ><button class="dashboard-icon-outer"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAPxJREFUWEftmGEOwiAMhV9PokfRk6gncZ5Eb6I3UU9SbbIRMsEixYQs5c+y0Ee+PaBtRuhsUGc8cCBtR5IOMfMawE4TA3gS0SWOs2hlnQ8gZt4DOBfATCFbIrrJi0U7LZYCOr4nhx+ABiI6jUDVWgfKOB7cdYfcoaXcssM8sbbOQ5LhJaluCvLYA4AkVXmG0RSoAEINcSDNopRDsv9XTRjNh+I63rQ7ADlL2ig+Q7KYQK20FeftR0W110tHAUQ2hJnbV/sugWq7vr84VHEO4o6x/ZZZvtKi9X7I+6Gl9EN6pmbm6lpm0X67ZZZaVq3NAllKRwut/47RXOzOoRfa/gE0DICn6QAAAABJRU5ErkJggg==" alt="Dashboard Icon"/></button></a>
   <a href="{{ route('leave.tardiness') }}"><button class="leave-tardi"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAARNJREFUWEftmAEOgjAMRdub6E30JnoS8SR6E72J3qRSwghhYPcZM5sZCQmBbn37bZcVpswuzoyHygUSkUurZtMr2jDz9Zu6qL2bK1gh1AFqXxaQiOyI6EZEhwRJ/+7nPDKzex7czIaslVsSgEynVBgPygMSkVOvzg+Y6MzM97GjOaBxNaWG8qrVAnq2eaT3lpfmpctNGMjcb1BSazuwFMoOKLuQoRFB7eEcQh2g9hXIUixKoWHwUukGvh9DVqDuEDdRbjOFrHxY8z0qZGscWmP+C6hWWRfvkIoI3G+WFK1VZlVW+QrpefeBLDPCNqjr0CbxFeEEGbqfNotLjWLKzlWBtUlUdbyOJvhnA7LsGNsKZKn3AeJFEDQljm/HAAAAAElFTkSuQmCC"/></button></a>
        <button class="emplist"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAc5JREFUWEftV8FxAjEMlDoJlSRUklBJoJJAJZBKQifKbcZmhE+2Zce5uWHiJ8PJe6vVao9pZYdXhoceA5CIPBHRBxG9ZBi+ENGOma+tHehiSETep4v2lcsA6LgmQHtmPjwuoKATtAZ6uenB2a5IDNp6gpZy9VIGsxoSka8AJj4DPUDEANhyIGyI/E09hN+2luhNQI0stIDT/zU1NgMUqAU7f31MlixAnpEeBXbG0h2gDnagq8+gEYCEvl4TvdTAb7SWUkBedkA3Jg9inR0Rgfjh5J4BODLzLhbpBYQJMcHEwgHUuUYPHF8bqKUhjGf0H6ue24FFBCzpcU/rzdZLiw/FYlV2FEsAA1DpuTLzxnrbZkATve6FXBiScYCmVXA3FSWNjAYkmcvcsaIgbP/qEJGRoi7ZCEAd0szUO/bVtg0Ze8eYxi56jNHjQaiX96EgQhTyOCyKYXWcJq/B1CDzoN3Pw1YHblgoekSmy8tVGVoazhwboPkvphetP6AVWPpthNXxt8up48dg9Iufj74wid5sfdNIsAH4Euog+Jtpwb2XtEKc9uBOBbp2LyBPkFsUUC5W6JddFBD0VTLQCzNvm41gWm5dLeu5yPvMP6AaU9+6VPUlBeMjkQAAAABJRU5ErkJggg=="/></button>
    <button class="userprofile-btn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAxNJREFUaEPtmQFu6yAMhgNJz7G9k7z2JFtPsu0k2zvJupO8vHMUwmIEEkpwbAzR9qpVmlapwfBh89s4qruRj7oRju4H5Lt5srlHrtfrUWv9O4DeO+fu4btSaoT/zrkP59x4OBwuLTejCYgx5lEpdTcv7LlgcQB2AbBhGN4KxmUfrQIJAE9d1/ldr/gA1Fvf9y9SGyIQCBdr7atS6iidGBk3TtN0loRdMUjwwmtjgNScyDtFIOCFrused4RITT+XhBobxBjzvkMoUXsy9n3/i3rIqyLnoS+CiEsDEThT6yRBrLWgSiWySs0p+Z0Ms02QkNzeJTM3HkOq2SZIg5AaIYtDVgfJrjxjm+cFBamRWefcZRiG09IrADNN04M0VJ1zZ6wKQEGstX+FGZs8nBXnDvVKFkTqDcwTOc9IK4Npmk65zJ8FkSY+bJLcwQ9hBl4v+mCbhYG4Iuvh4TkTk3Ie7UpB5soiG16rifcOq3SDpKqY8/wKZI+DiHm3QlBWCTIHIi4MS0IL4OZNE4UwyPeyoGwKsqXzS69IQxjs5A58DkSaP2COUWt9ivfzLcGo8AYPRHoAEzW6QLWKwbS4XbI8UgsSgPwtb1aXj5i8asuThXdX1UNL1cIiCaBqmxNL218CIsmt1Bhatb7RHQSFyanjKrQqSoc4MTTbYlfx33I1SqnYhRQ3MXL5Cqt+SxsNxS2coF5HpVRpgy97TciClIQXt3TH4qRUzbCkmwUJxuGuvqk2tRApHLPGK7tYwQRUCdESIpQdZBt2675T03xglyOUlnJAqI2rbQeRbRoOBOdMUrdP8kbHiF2vWFrrP5xiMQXjHnROVU2ChHsDp9u4qq9aKBUVUnEOFkjYOYDhJjH/NiopIP3XeVGQN9jvVLgQYJsFEg9jTXONc1aoCnfLBhskGmGcGcGaV0PIpvWq9JHM2uJyhMwrVsFij6QL+O9fhi4l1FoLhxiqWq4YgAmvcvCl5BUbFkFVHlkahZAzxsDrA/jz5Xp4nQA1G6iYL+/TK7AktHNjmoK0WpTEzg+IZNf2HHMzHvkED4IJUZeOkBoAAAAASUVORK5CYII="/></button>
  
 </div>
<!-- page wrap -->

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
    
    <h1 id="employess-title" class="employess-title underline active">Applied Leave</h1>
    <h1 id="divisiontxt-title" class="divisiontxt-title">Tardiness / Undertime</h1>
    
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


    <div class="Appliedleave">

                <div class="filter">
                    <h1 class="filtertxt">What are you looking for?</h1>
                    <input class="searchbar" type="text" placeholder="Search for name ">
              
                      {{-- more choices --}}

                    <h1 class="morechoices-dateofleave">Date of Leave</h1>
                    <h1 class="morechoices-typeofleave">Leave Type</h1>
                    <h1 class="morechoices-dateapplied">Date Applied</h1>
                    <h1 class="morechoices-payoption">Pay Options</h1>

                    <input type="date" id="date" class="date-picker-input" value="" placeholder="Select" onfocus="this.showPicker()">
                 
                    <select id="leave-types" class="leavetypes">
                         <option value="ALL">All</option> 
                          <option value="SP">SP</option>
                           <option value="SL">SL</option>
                            <option value="MaL">MaL</option>
                             <option value="Solo P">Solo P</option>
                               <option value="VL">VL</option>
                                 <option value="FL">FL</option>
                                <option value="PaL">PaL</option>
                               <option value="StL">StL</option>
                              <option value="VwL">VwL</option>
                             <option value="RL">RL</option>
                           <option value="SLW">SLW</option>
                          <option value="SEL">SEL</option>
                    </select>
                    
                    <input type="date" id="date" class="dateapplied-picker-input" value="" placeholder="Select">
                    <select id="payoption" class="pay-option">
                      <option value="ALL">All</option> 
                      <option value="WithPay">With Pay</option>
                      <option value="WithoutPay">Without Pay</option>
                  </select>
                </div>

                <hr class="hrline">

                <div class="empnamecont" >
                    <h1 class="appliedempnametxt">Employee Name</h1>
                </div>
                     <div class="dateleavecont" >
                        <h1 class="dateleavetxt">Date of Leave</h1>
                     </div>
                        <div class="leavetypecont" >
                           <h1 class="leavetypetxt">Leave Type</h1>
                        </div>
                            <div class="withoutscont" >
                               <h1 class="withoutstxt">With or <br>Without Pay</h1>
                            </div>
                               <div class="dateappliedcont" >
                                 <h1 class="dateappliedtxt">Date Applied</h1>
                               </div>
                                   <div class="remarkscont" >
                                     <h1 class="remarkstxt">Remarks</h1>
                                   </div>
                       
                                   <table class="appliedleavetable">
                                  
                                    <tr>
                                      <td class="name" >Jenard Arches</td>
                                      <td class="dateofleave">12/25</td>
                                      <td class="leavetype">SL</td>
                                      <td class="paymethod">With Pay</td>
                                      <td class="applieddate">12/25</td>
                                      <td class="remarks">Goods</td>
                                      </tr>
                                  
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                  
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          </tr>
                                  
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                  
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              </tr>
                                  
                                              <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                  
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  </tr>
                                  </table>
  </div>
  <div class="tardiness">

    <div class="filter">
      <h1 class="filtertxt">What are you looking for?</h1>
      <input class="searchbar" type="text" placeholder="Search for name ">

      <h1 class="filterdate">Select Date</h1>
      <input type="date" id="date" class="date-picker-input" value="" placeholder="Select" onfocus="this.showPicker()">
    </div>

      <div class="datetableconttard" >
        <h1 class="datetabletxttard">Month</h1>
      </div>

            <div class="empnameconttard" >
             <h1 class="appliedempnametxttard">Employee Name</h1>
            </div>

                <div class="upperconttard" >
                 <h1 class="uppertxttard">LEAVE CREDIT</h1></div>
                   <div class="lowerconttard" >
                    <h1 class="lowertxttard">Days on Leave<br>Without Pay</h1></div>
                      <div class="lowerconttard2" >
                       <h1 class="lowertxttard2">Leave Credit <br>Earned</h1></div>

                       <div class="upperconttard2" >
                        <h1 class="uppertxttard2">TARDINESS / UNDERTIME</h1></div>

                        <div class="lowerconttard3" >
                        <h1 class="lowertxttard3">Hours.</h1></div>
                          <div class="lowerconttard4" >
                           <h1 class="lowertxttard4">Equiv.</h1></div>
                             <div class="lowerconttard5" >
                              <h1 class="lowertxttard5">Minutes</h1></div>
                              <div class="lowerconttard6" >
                                <h1 class="lowertxttard6">Equiv.</h1></div>
                                  <div class="lowerconttard7" >
                                   <h1 class="lowertxttard7">HH:MM</h1></div>
                                     <div class="lowerconttard8" >
                                      <h1 class="lowertxttard8">Equiv.</h1></div>

                                       <table class="tardinessleavetable">
                                  
                                    <tr>
                                      <td class="name" >Jenard Arches</td>
                                      <td class="dateofleave">12/25</td>
                                      <td class="leavetype">SL</td>
                                      <td class="paymethod">With Pay</td>
                                      <td class="applieddate">12/25</td>
                                      <td class="remarks">Goods</td>
                                      </tr>
                                  
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                  
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          </tr>
                                  
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                  
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              </tr>
                                  
                                              <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                  
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  <td></td>
                                                  </tr>
                                  </table>
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


  </div>


 
     <!--frame end -->
 </div>
 <script src="{{ asset('js/script.js') }}"></script>
 <script src="{{ asset('js/leave.js') }}"></script>
 <script src="{{ asset('js/leave-datetime.js') }}"></script>
 <script src="{{ asset('js/leave-datepicker.js') }}"></script>
 <script src="{{ asset('js/checkboxmoreoption.js') }}"></script>
 <script src="{{ asset('js/loader.js') }}"></script>
 <script src="{{ asset('js/logoutdiv.js') }}"></script>

 <script>
  
  


 document.querySelector('.dashboard-icon-outer').addEventListener('click', function() {
  // Redirect to the Admin Dashboard route
  window.location.href = "{{ route('admin.dashboard') }}"; // Ensure this matches your route
});

document.querySelector('.tardiness-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor click behavior
        window.location.href = "{{ route('leave.tardiness') }}"; // Redirect to the Leave/Tardiness route
    });

</script>


</body>
</html> 