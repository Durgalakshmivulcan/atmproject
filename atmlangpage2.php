<?php
require_once "atmconfig.php";
if(isset($_POST['save'])){
    header ("location:atmacctypepage3.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atmpage2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Sansita&display=swap" rel="stylesheet">
</head>
<body style="background-color:#d7d7d7;">
<form method="POST">
<div class="row">
<div class="col-xl-4"></div>
<div class="col-xl-6 mt-2">
<h1><span style="text-align:centre;font-family: 'Sansita', sans-serif;color:#991a4f;"><b>Pick language of your choice</b></span></h1></div></div>
<div class="row">
    <div class="col-xl-2"></div>
        <div class="col-xl-4 col-lg-4 col-md-4 mt-5">
            <table>
        <tr>
                        <td>
                        <button style="background-color:#991a4f;color:white;text-align:centre;font-size:25px;border-radius:100px;font-family: 'Sansita', sans-serif;width:200px;"class="btn btn-pill mt-5 "name="save" id="save" >English <i class="bi bi-bank2"></i></button></td>
                    </tr>
                    <tr>
                        
                    <td><button style="background-color:#991a4f;color:white;text-align:centre;font-size:25px;border-radius:100px;font-family: 'Sansita', sans-serif;width:200px;"class="btn btn-pill mt-5 "name="save" id="save" >Telugu <i class="bi bi-bank2"></i></button></td>
                    </tr>
                    <tr>
                        
                    <td><button style="background-color:#991a4f;color:white;text-align:centre;font-size:25px;border-radius:100px;font-family: 'Sansita', sans-serif;width:200px;"class="btn btn-pill mt-5 "name="save" id="save" >Hindi <i class="bi bi-bank2"></i></button></td>
                    </tr>
                    </table>
        </div>

        <div class="col-xl-2 col-lg-2 col-md-2 mt-5"></div>
        <div class="col-xl-4 col-lg-4 col-md-4 mt-5">
<table>
        <tr>
                        <td>
                        <button style="background-color:#991a4f;color:white;text-align:centre;font-size:25px;border-radius:100px;font-family: 'Sansita', sans-serif;width:200px;"class="btn btn-pill mt-5 "name="save" id="save" > Punjabi <i class="bi bi-bank2"></i> </button></td>
                    </tr>
                    <tr>
                        
                    <td><button style="background-color:#991a4f;color:white;text-align:centre;font-size:25px;border-radius:100px;font-family: 'Sansita', sans-serif;width:200px;"class="btn btn-pill mt-5 "name="save" id="save" >Tamil <i class="bi bi-bank2"></i> </button></td>
                    </tr>
                    <tr>
                        
                    <td><button style="background-color:#991a4f;color:white;text-align:centre;font-size:25px;border-radius:100px;font-family: 'Sansita', sans-serif;width:200px;"class="btn btn-pill mt-5 "name="save" id="save" > Marati <i class="bi bi-bank2"></i> </button></td>
                    </tr>
</table>
        </div>
        </div>
        <div class="row"><img src="images/cropbg.jpg" style="width:100%;height:80px;margin-top:82px;"></div>
</form>

</body>
</html>
