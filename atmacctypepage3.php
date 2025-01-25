<?php
require_once "atmconfig.php";
if(isset($_POST['save'])){
  header ("location:atmservicepage4.php");
  }
  if(isset($_POST['save1'])){
    header ("location:atmservicepage4.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atmpage3</title>
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
<div class="row" style="background-color:#991a4f;height:70px;">
<div class="col-xl-4"></div>
<div class="col-xl-6">
<h1><span style="text-align:centre;color:white;font-family: 'Sansita', sans-serif;">SELECT ACCOUNT TYPE</span></h1></div></div>
<div class="row "><img src="images/atm-banking-1920x360.jpg" style="width:100%;height:360px"></div>
<div class="row">
<div class="col-xl-2 col-lg-2 col-md-2"></div>
        <div class="col-xl-4 col-lg-4 col-md-4 ">
        
                        
                    <tr>
                        
                    <td><button style="color:white;background-color:#991a4f;text-align:centre;width:300px;font-size:30px;border-radius:100px;font-family: 'Sansita', sans-serif;"class="btn btn-pill mt-1"name="save" id="save" > <i class="bi bi-currency-rupee"></i>  Savings Account</button></td>
                    </tr>

        </div>
        <div class="col-xl-1 col-lg-1 col-md-1"></div>
        <div class="col-xl-5 col-lg-5 col-md-5">
                             
          <tr>
                    
                <td><button style="color:white;background-color:#991a4f;text-align:centre;width:300px;font-size:30px;border-radius:100px;font-family: 'Sansita', sans-serif;"class="btn btn-pill mt-1"name="save1" id="save1" ><i class="bi bi-currency-rupee"></i> Current Account</button></td>
                </tr>

    </div>
        </div>
        <div class="row"><img src="images/cropbg.jpg" style="width:100%;height:70px;margin-top:10px;"></div>

</form>

</body>
</html>
