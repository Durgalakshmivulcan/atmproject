<?php
require_once "atmconfig.php";
session_start();
$main_id1 =$_SESSION["main_id"] ;
?>
<style>
#invalid{
    display:none;
}
#balcheck{
display:none;
}
</style>
<?php

if(isset($_POST['save'])){
    $pwd1=$_POST['pwd'];
    $Getadetails=mysqli_query($conn, "SELECT * FROM acc_details WHERE a_status='1' and u_id='$main_id1'") or die(mysqli_error($conn));
    while($resdetails=mysqli_fetch_object($Getadetails)){
        $Getudetails=mysqli_query($conn, "SELECT u_pwd,u_id FROM user_details WHERE u_status='1'and u_id='$main_id1'") or die(mysqli_error($conn));
        while($resdetails1=mysqli_fetch_object($Getudetails)){
            $password=$resdetails1->u_pwd;
            if($pwd1!=$password ||$pwd1==""){
                ?>
                    <style>
                    #invalid{
                    display:block;
                    }
                    </style>
                    <?php
                
            }else {
                ?>
                <style>
                #balcheck{
                    display:block;
                }#pinpage{
                    display:none;
                }
            </style>

            <?php
            $ab= $resdetails->a_bal;
              }
    
        }
    }
}


    if(isset($_POST['cancel'])){
         session_unset();
        session_destroy();
        header ("location:atmloginpage1.php");
    }

   
?>    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atmpage5</title>
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
<div class="row" style="background-color:#991a4f;height:60px;"></div>
<div id="pinpage">
<div class="row" >
<div class="col-xl-4"></div>
<div class="col-xl-6">
<h1><span style="text-align:centre;color:#991a4f;font-family: 'Sansita', sans-serif;">Enter your PIN number</span></h1></div></div>
<div class="row mt-5">
        <div class="col-xl-3 col-lg-3 col-md-3 mt-5"></div>
        <div class="col-xl-3 col-lg-3 col-md-3 mt-5">
        <tr>
                        
                    <tr>
                        
                    <td><input class="form-control" type="password" name="pwd" id="pwd" value="" ><span style="color:#991a4f;;font-size:50px;"><i class="bi bi-keyboard-fill"></i></span><div id="invalid" ><p><span style="color:red;">Invalid Password</span></p></div></td>
                    <td></td>
                    </tr>

        </div>
        <div class="col-xl-2 col-lg-2 col-md-2"></div>
        <div class="col-xl-3 col-lg-3 col-md-3 mt-5">                             
                    <tr>                        
                    <td><button style="background-color:#991a4f;text-align:centre;height:50px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="save" id="save" ><i class="bi bi-check-circle"></i>    Continue</button></td>
                </tr>
                    <tr>                       
                    <td><button style="background-color:#991a4f;text-align:centre;height:50px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="cancel" id="cancel" ><i class="bi bi-x-circle"></i>    Cancel</button></td>
                    </tr>
        </div>
        </div>
</div>
        <div id="balcheck">
        <div class="row mt-5">
        <div class="col-xl-2 col-lg-2 col-md-2"></div>
        <div class="col-xl-7 col-lg-7 col-md-7">
            <table>
        <tr>
                    <td><span style="font-size:20px;font-weight:bold;color:#991a4f">Ledger balance</span></td>
                    <td><span style="font-size:20px;font-weight:bold;color:#991a4f">:<i class="bi bi-currency-rupee"></i></span></td>  
                    <td><input class="form-control mb-4" type="decimal" name="lb" id="lb" value="0.00" disabled></td>
                    </tr>
                    <tr>
                    <td><span style="font-size:20px;font-weight:bold;color:#991a4f">Available balance</span></td>
                        <td><span style="font-size:20px;font-weight:bold;color:#991a4f">:<i class="bi bi-currency-rupee"></i></span></td>  
                    <td><input class="form-control" type="decimal" name="ab" id="ab" value="<?php echo $ab;?>" disabled></td>
                    </tr>
                    </table>

        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 mt-5">                             
                    <tr>                       
                    <td><button style="background-color:#991a4f;text-align:centre;height:50px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="cancel" id="cancel" ><i class="bi bi-check-circle"></i> Main menu</button></td>
                    </tr>
        </div>
</div>
        </div>
        <div class="row"><img src="images/cropbg.jpg" style="width:100%;height:80px;margin-top:50px;"></div>


</form>





</body>
</html>
