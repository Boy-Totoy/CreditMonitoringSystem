<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/CreditDashboards.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
   <!-- page wrap -->
<div class="page-wrapper"> 
    <!-- top menu -->
    <img class="banner" src="/img/mainbanner.jpg">
    <div class="leavemenu">
        <div class="emname">
            <h2 class="name">Employee Name:</h2>
            <div class="empnamecont">
            <h2 class="empname"></h2>
            </div>
        </div>
        <div class="emdiv">
        <h2 class="div">Division:</h2>
        <div class="empdivcont">
            <h2 class="empdivis"></h2>
            </div>
        </div>
        <button class="logoutbtn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAANJJREFUSEvVVcERwjAMkzaBTWASYBLoJB2FbgKbiDqX3oVSmvgu5UI+eSS2IkW2iY0XN86PNgAkHQBcAdieWwOAjqTtZQwkPQDscpmT84Hk0QOgcJnMSirp7W42wBLPg9aYtAMgqSd5qc5Akn1mb44p0Xwu16pE0Y73KagqgKRzfLnDjZ/O+spgPLBCurmyL1g3J5HpbxKFoqoq0fTy+MkBZBOAaEtjcBoBuuo2XfqD/6zklMkvGHjb9ZPk3tOubdBY+yiZCf6B4y2+9H7RPGga4AWNyY4Z7HeArAAAAABJRU5ErkJggg=="/>Log out</button>
        <button class="accdetails"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAS5JREFUSEvVVUEOgkAMLMf+Qn4iL1FeIr5EfyI/kV/0qAzpGqjdLSFycBNi4oZOZ6ZTKtr5VDvXp1UAInIgohsRHYlo0OfKzH3UYAggImctbmsB6M7M1xJIEUBE0PFDC3QopmxO43+dMmlLTCIAyAIGU/F5pzNmPTM3ORYRwHOUAfrXzAxJPkeZ4H5g5vrnACgoIi/8juyyjUYMoD988CS6qA8wut3KAPJMMqSJMSajbrPZZJUhdeo1iQm6bx7T9OKuQYuSGt1HJkMemIzHSzK8QQ6yaXYBNMEIGUxecwDkJvoLwKyH7IvqCxpILN2J8gBSeovzbQbgs5tsqhcAa/eL1cxM2SKUFiAtt3C+HZC0eRfLzwJkl1vkdG75WYBweZWAvOUXftGizqP7/wd4A/slnhly2YpmAAAAAElFTkSuQmCC"/>Account</button>
    </div>
    <button class="leavebtn">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAAAAXNSR0IArs4c6QAAAT9JREFUWEftl+sNwjAMhH2bwCTAJjAJZRK6CTAJbGI41EihpE0cXFEhIvELx/rqxzmGzORgJhySBVHVhQUWwM1iH2wHQVR1LSKnCqcNgIP13hiIWp1F9maYJIiqbkXk+AEIr5pgPEEaEWE6+QunGMYTZPeAOHeRNMO4ggBouy5jWk0w7iDMSQ3MJCA1MJOBjMBsALCWXo4nCLvmkmh5KvNeRIJC71hLU4KUys5vg3DAhXyzXUsG5CQRaQFQyNiy1A6Ohtz5g/Qj5BKR/qPnHKWGLRqnZqheXECSTlJFMfKU+C0QKmKsnrcg193TMk7HaqCLXCLSz8K/fWcbEcr7U1m7Cfs1Zc3Jeep/U7HWLlclYCYQtuG1xGuFzTK1luZWTk7UktFewsPxwGi8PRN52X0JHyLKLedZkJJP9bCZDcgdCTjnI41zEZ8AAAAASUVORK5CYII="/>
    File Leave</button>
    <!-- top menu -->
<!-- particular table guide -->
    <div class="particular">
     <div class="monthtxtdiv"><h1 class="monthtxt">MONTH</h1></div>
        <div class="particulartxtdiv"><i><h1 class="parttxt">PARTICULAR</h1></i></div>
         <div class="Tardinessdiv"><i><h1 class="tardtxt">TARDINESS / UNDERTIME</h1></i></div>
         <div class="hhmm"><i><h1 class="hourmintxt">HH:MM</h1></i></div>
         <div class="equiv"><i><h1 class="equivtxt">EQUIV.</h1></i></div>
           <div class="vacationdiv"><i><h1 class="vacationtxt">VACATION LEAVE</h1></i>
           <i> <h1 class="vacationtxt2">(VL)</h1></i></div>
           <div class="wpay"><i><h1 class="wpaytxt">W/PAY</h1></i></div>
           <div class="wopay"><i><h1 class="wopaytxt">W/O PAY</h1></i></div>
           <div class="wpaysl"><i><h1 class="wpaysltxt">W/PAY</h1></i></div>
           <div class="wopaysl"><i><h1 class="wopaysltxt">W/O PAY</h1></i></div>
           <div class="Spleave"><i><h1 class="Spleavetxt">SP</h1></i></div>
           <div class="fleave"><i><h1 class="fleavetxt">FL</h1></i></div>
           <div class="SP"><i><h1 class="SPtxt">SOLO P</h1></i></div>
             <div class="sickdiv"><i><h1 class="sicktxt">SICK LEAVE</h1></i>
             <i><h1 class="sicktxt2">(SL)</h1></i></div>
                 <div class="spleavediv"><i><h1 class="spleavetxt">SPECIAL LEAVE</h1></i></div>
                   <div class="forceddiv"><i><h1 class="forcedtxt">FORCED LEAVE</h1></i></div>
                       <div class="solodiv"><i><h1 class="solotxt">SOLO</h1></i>
                       <i><h1 class="solotxt2">PARENT</h1></i></div>
                         <div class="datediv"><i><h1 class="datetxt">DATE OF</h1></i>
                         <i><h1 class="datetxt2">LEAVE</h1></i></div>
                             <div class="remdiv"><i><h1 class="remtxt">REMARKS</h1></i></div>
                             <!-- table guide -->

                             <!-- months -->
                             <div class="month1"><H1 class="jan">JANUARY</H1></div>
                             <div class="month2"><H1 class="feb">FEBRUARY</H1></div>
                             <div class="month3"><H1 class="mar">MARCH</H1></div>
                             <div class="month4"><H1 class="apr">APRIL</H1></div>
                             <div class="month5"><H1 class="may">MAY</H1></div>
                             <div class="month6"><H1 class="jun">JUNE</H1></div>
                             <div class="month7"><H1 class="jul">JULY</H1></div>
                             <div class="month8"><H1 class="aug">AUGUST</H1></div>
                             <div class="month9"><H1 class="sep">SEPTEMBER</H1></div>
                             <div class="month10"><H1 class="oct">OCTOBER</H1></div>
                             <div class="month11"><H1 class="nov">NOVEMBER</H1></div>
                             <div class="month12"><H1 class="dec">DECEMBER</H1></div>
                                <!-- months -->

                                 <!-- table -->
                             <table class="particulartable" style="border-collapse: collapse;">
                              <tr style="border: 1px solid black;">
                                <td style="border: 1px solid black; width: 82.5px;"></td>
                                <td style="border: 1px solid black; width: 84px;"></td>
                                <td style="border: 1px solid black; width: 84px;"></td>
                                <td style="border: 1px solid black; width: 83px;"></td>
                                <td style="border: 1px solid black; width: 80px;"></td>
                                <td style="border: 1px solid black; width: 79px;"></td>
                                <td style="border: 1px solid black; width: 146px;"></td>
                                <td style="border: 1px solid black; width: 146px;"></td>
                                <td style="border: 1px solid black; width: 91px;"></td>
                                <td style="border: 1px solid black; width: 114px;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              
                            </table>
                            
                                 <!-- table -->                   
    </div>
<!-- balance table guide -->
    <div class="balance">
        <div class="balancetxtdiv">
            <h1 class="baltxt">BALANCE</h1>
        </div>
        <div class="vacationleavediv">
            <h1 class="vacationleavetxt">VACATION LEAVE</h1>
            <h1 class="vacationleavetxt2">(VL)</h1>
        </div>
        <div class="earn1">
            <h1 class="earn1txt">EARNED</h1>
        </div>
        <div class="bal1">
            <h1 class="bal1txt">BALANCE</h1>
        </div>
        <div class="sickleavediv">
            <h1 class="sickleavetxt">SICK LEAVE</h1>
            <h1 class="sickleavetxt2">(SL)</h1>
        </div>
        <div class="earn2">
            <h1 class="earn2txt">EARNED</h1>
        </div>
        <div class="bal2">
            <h1 class="bal2txt">BALANCE</h1>
        </div>
        <div class="specialleavediv">
            <h1 class="specialleavetxt">SPECIAL LEAVE</h1>
            <h1 class="specialleavetxt2">(SP)</h1>
        </div>
        <div class="forceleavediv">
            <h1 class="forceleavetxt">FORCED LEAVE</h1>
            <h1 class="forceleavetxt2">(FL)</h1>
        </div>
    
                                 <!-- table -->

                        <table class="balancetable" style="border-collapse: collapse;">
                        <td style="border: 1px solid black; width: 83px;"></td>
                        <td style="border: 1px solid black; width: 85px;"></td>
                        <td style="border: 1px solid black; width: 85px;"></td>
                        <td style="border: 1px solid black; width: 85px;"></td>
                        <td style="border: 1px solid black; width: 125px;"></td>
                        <td style="border: 1px solid black; width: 122px;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                               <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                              <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                                <td style="border: 1px solid black;"></td>
                              </tr>
                           </table>
    
                                 <!-- table -->
                   </div>
               <!-- balance table guide -->
                      </div>
                         <!-- page wrap -->

     <!-- logout form -->
            <div class="logout" style="display:none;">
                <h1 class="logouttxt">Proceed logging out?</h1>
                <button class="No">No</button>
                <button class="Yes">Log out</button>
            </div>
             <!-- logout form -->

             <!-- leave form -->
        <div class="leaveform">
            <h1 class="applicationtxt">Application for Leave</h1>
          
               <h1 class="edept">Office / Agency</h1>
               <input type="text" class="empoffice" readonly disabled>
               <h1 class="eposition">Position</h1> 
               <input type="text" class="empposition" readonly disabled>
               <h1 class="ename">Employee Name</h1>
               <input type="text" class="empnameleave" readonly disabled>
               <h1 class="esalary">Salary</h1>
               <input type="text" class="empsalary" readonly disabled>
               <input type="checkbox" class="read">
               <h1 class="instruction">I have already read the <a href="Instructions and Regulations.pdf" target="_blank"> Instructions and Regulations</a>.</h1>
          
            <button class="Fileleavebtn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAdZJREFUSEu9luFRA0EIhZdKNJ2YSjSVmFRiUomxEmMlmJdZGJawsL/u/uhM9vjYxwOO2sYPbcxry0Bmfm2tvfcE8T+eW2vtj4jOq4mXwA76vAf/SIICjOdARNcMngKZ+SsASXD8fQuCH4noNIOGwH4rwCQggkO2H3+DfhbnoIKVek9EkpzyZ8BvA7sS0b6qkanxUepLRDv/3hOQmS0MWaY18QGZGTcV6JmIDvbMAGRmSAMgnqWbRTd3tR+S9kC93b3wpYMtDJJKzbq8iIWaDol7IBt7L/WWMRikvxgo2gjGu9laKpCZ5QCYu8hhQb1wA+tmfa8n8tvfUVktUIu9ImfQOk8GuxtIFNPetEBp8sFZ3Uioj0q8AsPNjOM1ZgTUIjvXYmydV2EdCEkhewgUSbXIzm2Igf5C68gESvu0ktT2oAYKoOKdCoabiWke6uBFK6k9MAzgAFpOoJnrZ42PoTsMXwMtV1Cvnzh0MGE22p7mYDXA5fdsHkfD2+7AdLdN5qj1Qj68uxR+eqDYp2ryBO0SDv9sAcvwRR7VAsa3jqykx/loFw4uncxJH0jgssmjT4x0rZUrKJBq5h0kUTq4BBrnoba40Yv7dmnZR5PPbhm42hLVuc2B/zajGiwbYFwtAAAAAElFTkSuQmCC"/>Proceed</button>
            <button class="Cancelbtn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAORJREFUSEvtlmEOgjAMhftOot5ETqKeRDyJ3ARuIp7kSROIYemgbsmMkf2Ddf3WtwcrpPBAYZ64gSSvIrKPbLAHcPNs3gUcYfVKwtoDnQFJagXHIPFueF6D6ZJ+UKARkWewXqvvpnchUGXzJPeoN8XMKv8u8JNtp8ZGTUPykZp0XFcB0HOdDRM4micXePgpoNpa5bE+m9hcVoUXAA3Js4jcg2OJzW3At1CGSzdJLUNtpvlz00x/faunic1lmSblpvIDNTvJ1uhvvOAOQGUFL13AKt9poTWMwRdbRleb6C3LE1cc+AIodOAd1RsurwAAAABJRU5ErkJggg=="/>Cancel Request</button>
        </div>
         <!-- leave form -->

           <!-- account form -->
           
                <div class="accountform" style="display:none;">
                <div class="security"> <h1 class="secutxt">Account Security</h1></div>
                <div class="accclosebtn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAX1JREFUaEPtl9utAjEMRJ1O6ATRCVRybye0QifQiZElIkXRbvD4IbSS92d/srNzPM6r0cGfdnD/VAC/TrASqAScFagWchbQ/Xkl4C6hU6AScBbQ/bk5AWa+EtEfEd1aaw+LkwgNE8Dnx/eP6ZcFIkJD/g8DMPOJiJ5TxSGIyXyXEo1La03e6gcGEGVmltb5t0DsmBcpMQ+3ognAChFt3tRCY9WRJDLMuwG0SWSZDwH4BkFEMun7ijUGaOr5eXab58AstGgnAZifEPNhCXR3OxBp5sMBFu3UIcIq3wXDWmhIQY4YWz0PbXbanSwUYLHajLut+ey0BRUGoDCfAhECsFrniehsPXZo2sgNoNmkkB1bY3oc4wLQmP+yxLonthkAMZ8JYQKwmM+CgAF2LjTiT71JLebEzy40avOLJGAN11FiqKLpx9Oxw6wBt9C4hEk7oXfYjVOsS8MFgK7ZGeMLIKOqiGYlgFQrY2wlkFFVRLMSQKqVMbYSyKgqonn4BN4z7dExp1bhoQAAAABJRU5ErkJggg=="/></div>
                <div class="accdetaildiv">
                <input type="text" class="oficeinput" value="OFFICE OF THE CITY ASSESSOR" readonly>
                <input type="text" class="divsioninput" value="EDP" readonly>
                <input type="text" class="positioninput" value="ENCODER" readonly>
                <input type="text" class="lnameinput" value="DIWATA" readonly>
                <input type="text" class="fnameinput" value="PARES" readonly>
                <input type="text" class="mnameinput" value="OVERLOAD" readonly>
                <input type="text" class="salaryinput" value="13500" readonly>
                </div>
                  <h1 class="accttxt">Account Details </h1>
                  <h1 class="lname">Last Name</h1>
                  <h1 class="fname">First Name</h1>
                  <h1 class="mname">Middle Name</h1>
                  <h1 class="offic">Office</h1>
                  <h1 class="division">Division</h1>
                  <h1 class="post">Position</h1>
                  <h1 class="slary">Salary</h1>
                  <button class="updateacc">Update</button>
                  <button class="save" style="display:none;">Save</button>

                </div>
              
                <!-- account form -->

                 <!-- security form -->

                  <div class="accountsecurity" style="display:none;">
                  <div class="security2"> <h1 class="secutxt2">Account Details</h1></div>
                  <h1 class="accttxt2">Account Security </h1>

                  <input type="text" class="user">
                  <h1>Username</h1>
                  <input type="text" class="user">


                  </div>
                 
                 <!-- security form -->

            
                <div class="decor"></div>

              <script>

                document.querySelector('.accdetails').addEventListener('click', (e) => {
                  document.querySelector('.accountform').style.display = 'block';
                });
                
                 //make all input editable when updateacc is clicked
                document.addEventListener('DOMContentLoaded', function(){
                  
  //read employee name to dashboard
const lnameInputElement = document.querySelector('.lnameinput');
const fnameInputElement = document.querySelector('.fnameinput');
const mnameInputElement = document.querySelector('.mnameinput');
const empNameElement = document.querySelector('.empname');

const lname = lnameInputElement.value;
const fname = fnameInputElement.value;
const mname = mnameInputElement.value;
const empName = lname + ', ' + fname + ' ' + mname;
empNameElement.textContent = empName;
//read employee name

//read employee name and display it to empnameleave
const emploNameElement = document.querySelector('.empname');
const empNameLeaveElement = document.querySelector('.empnameleave');

const emploName = empNameElement.textContent;
empNameLeaveElement.value = empName;

//read employee division 
const divisionInputElement = document.querySelector('.divsioninput');
const empDivisionElement = document.querySelector('.empdivis');

const empdiv = divisionInputElement.value;
const empdivis = empdiv;

empDivisionElement.textContent = empdivis;
//read employee division 

// Define the updateacc button
  const updateacc = document.querySelector('.updateacc');

  // Add event listener to updateacc button
  updateacc.addEventListener('click', () => {
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
      input.removeAttribute('readonly');
    });
  });
});

                //update and save button

                const updateacc = document.querySelector('.updateacc');
                const save = document.querySelector('.save');
                updateacc.addEventListener('click', () => {
                  updateacc.style.display = 'none';
                  save.style.display = 'block';
                });
                save.addEventListener('click', () => {
                  updateacc.style.display = 'block';
                  save.style.display = 'none';
                });
                
                //closeaccountform
                const accclosebtn = document.querySelector('.accclosebtn');
                const accountform = document.querySelector('.accountform');
                const accsecurity = document.querySelector('.accountsecurity');
                accclosebtn.addEventListener('click', () => {
                  accountform.style.display = 'none';
                  accountsecurity.style.display = 'none';
                });
                
       //logout button
const logoutBtn = document.querySelector('.logoutbtn');
const logoutForm = document.querySelector('.logout');
const noBtn = document.querySelector('.No');
const yesBtn = document.querySelector('.Yes');
logoutBtn.addEventListener('click', () => {
  // Show the logout form
  logoutForm.style.display = 'block';
});
// Add an event listener to the no button
noBtn.addEventListener('click', () => {
  // Hide the logout form
  logoutForm.style.display = 'none';
});
// Add an event listener to the yes button
yesBtn.addEventListener('click', () => {
  // Redirect to CreditLogin.php
  window.location.href = 'CreditLogin.php';
});
 //logout button

 //leave button
 const leaveBtn = document.querySelector('.leavebtn');
    const leaveForm = document.querySelector('.leaveform');
    const pageWrapper = document.querySelector('.page-wrapper');

    leaveBtn.addEventListener('click', () => {
      // Show the leave form
      leaveForm.style.display = 'block';
      leaveForm.style.zIndex = '1';
      pageWrapper.classList.add('blurred'); // Add the blurred class to the page wrapper
    });

    const cancelBtn = document.querySelector('.Cancelbtn');
    cancelBtn.addEventListener('click', () => {
      // Hide the leave form
      leaveForm.style.display = 'none';
      pageWrapper.classList.remove('blurred'); // Remove the blurred class from the page wrapper
    });

    cancelBtn.addEventListener('click', () => {
      // Remove the checkbox selection
      document.querySelector('.read').checked = false;
    });
//leave button

//read employee name 
const empNameElement = document.querySelector('.empname');
const empNameLeaveElement = document.querySelector('.empnameleave');
const empName = empNameElement.textContent;
empNameLeaveElement.value = empName;

//read office input value and display it to empoffice
const officeInputElement = document.querySelector('.oficeinput');
const empOfficeElement = document.querySelector('.empoffice');
const officeInputValue = officeInputElement.value;
empOfficeElement.value = officeInputValue;
//read employee name 

//read position input value and display it to empposition
const positionInputElement = document.querySelector('.positioninput');
const empPositionElement = document.querySelector('.empposition');
const positionInputValue = positionInputElement.value;
empPositionElement.value = positionInputValue;
//read position input value and display it to 

//read salary input value and display it to empsalary
const salaryInputElement = document.querySelector('.salaryinput');
const empSalaryElement = document.querySelector('.empsalary');
const salaryInputValue = salaryInputElement.value;
empSalaryElement.value = salaryInputValue;
//read salary input value and display it to empsalary
const fileLeaveButton = document.querySelector('.Fileleavebtn');
                fileLeaveButton.addEventListener('click', (e) => {
                  if (!document.querySelector('.read').checked) {
                    e.preventDefault();
                    alert('Please check the box to confirm you have read the instructions and regulations.');
                  } else {
                    window.open('leaveform.pdf', '_blank');
                  }
                });
                

                const secutxt = document.querySelector('.secutxt');
                const accountsecurity = document.querySelector('.accountsecurity');
                secutxt.addEventListener('click', () => {
                  accountsecurity.style.display = 'block';
                });
                const security = document.querySelector('.security');
                security.addEventListener('click', () => {
                  accountsecurity.style.display = 'block';
                });


                const secutxt2 = document.querySelector('.secutxt2');
                const security2 = document.querySelector('.security2');
                const accountForm = document.querySelector('.accountform');
                const accountSecurity = document.querySelector('.accountsecurity');

                secutxt2.addEventListener('click', () => {
                  accountForm.style.display = 'block';
                  accountSecurity.style.display = 'none';
                });

                security2.addEventListener('click', () => {
                  accountForm.style.display = 'block';
                  accountSecurity.style.display = 'none';
                });
              </script>
              
</body>
</html>