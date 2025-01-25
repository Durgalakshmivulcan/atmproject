<?php
require_once "atmconfig.php";
if(isset($_POST['save1'])){
    header ("location:atmbalancepage5.php");
    }
    if(isset($_POST['save2'])){
        header ("location:atmwithdpage6.php");
        }
        if(isset($_POST['save3'])){
            header ("location:atmdeppage8.php");
            }
            if(isset($_POST['save4'])){
                header ("location:atmpinchpage7.php");
                }
                if(isset($_POST['save5'])){
                    header ("location:atmminipage9.php");
                    }
                    if(isset($_POST['save6'])){
                        header ("location:atmfullstpage10.php");
                        }
                        if(isset($_POST['save7'])){
                            header ("location:atmloginpage1.php");
                            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atmpage4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Sansita&display=swap" rel="stylesheet">

</head>
<body style="background-color:#d7d7d7;font-family: 'Sansita', sans-serif;">
<form method="POST">
<div class="row" style="background-color:#991a4f;color:white;font-family: 'Sansita', sans-serif;">
<div class="col-xl-3"></div>
<div class="col-xl-6"><h1>HOW CAN WE HELP YOU TODAY?</h1></div></div>
<div class="row">
<div class="col-xl-4 ms-5"></div>
<div class="col-xl-6 mt-1">
<h1><span style="text-align:centre;font-family: 'Sansita', sans-serif;"><b>Select a service</b></span></h1></div></div>
<div class="row">
<div class="col-xl-2 col-lg-2 col-md-2 "></div>
        <div class="col-xl-4 col-lg-4 col-md-4">
            <table>
                    <tr>
                        <td>
                        <button style=" background-color:#991a4f;text-align:centre;width:300px;font-size:25px;color:white;border-radius:100px;font-family: 'Sansita', sans-serif;"class="btn btn-pill mt-5"name="save1" id="save1" >Balance enquiry    <i class="bi bi-currency-exchange"></i></button></td>
                    </tr>
                    <tr>
                        
                    <td><button style=" background-color:#991a4f;text-align:centre;width:300px;font-size:25px;color:white;border-radius:100px;font-family: 'Sansita', sans-serif;" class="btn btn-pill mt-5"name="save2" id="save2" >Withdrawl      <i class="bi bi-cash-coin"></i></button></td>
                    </tr>
                    <tr>
                        
                    <td><button style=" background-color:#991a4f;text-align:centre;width:300px;font-size:25px;color:white;border-radius:100px;font-family: 'Sansita', sans-serif;" class="btn btn-pill mt-5"name="save3" id="save3" >Deposit       <i class="bi bi-cash-stack"></i></button></td>
                    </tr>
</table>
        </div>
        <div class="col-xl-1 col-lg-2 col-md-1"></div>
        <div class="col-xl-4 col-lg-4 col-md-4 ">
<table>
        <tr>
                        <td>
                        <button style=" background-color:#991a4f;text-align:centre;width:300px;font-size:25px;color:white;border-radius:100px;font-family: 'Sansita', sans-serif;" class="btn btn-pill mt-5"name="save4" id="save4" >  Change PIN  <i class="bi bi-grid-3x3-gap-fill"></i>    </button></td>
                    </tr>
                    <tr>
                        
                    <td><button style=" background-color:#991a4f;text-align:centre;width:300px;font-size:25px;color:white;border-radius:100px;font-family: 'Sansita', sans-serif;" class="btn btn-pill mt-5" name="save5" id="save5" >  Mini Statement <i class="bi bi-receipt-cutoff"></i>      </button></td>
                    </tr>
                    <tr>
                        
                    <td><button style=" background-color:#991a4f;text-align:centre;width:300px;font-size:25px;color:white;border-radius:100px;font-family: 'Sansita', sans-serif;" class="btn btn-pill mt-5" name="save6" id="save6" >   Full Statement   <i class="bi bi-journals"></i>     </button></td>
                    </tr>
</table>
        </div>
        </div>
        <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-5"></div>
        <div class="col-xl-4 col-lg-4 col-md-4">

        <div><button style=" background-color:#991a4f;text-align:centre;width:200px;font-size:25px;color:white;border-radius:100px;font-family: 'Sansita', sans-serif;" class="btn btn-pill mt-3" name="save7" id="save7" >   Main Menu </button></div>
        </div></div>
        <div class="row"><img src="images/cropbg.jpg" style="width:100%;height:75px;margin-top:68px;"></div>

</form>

</body>
</html>
