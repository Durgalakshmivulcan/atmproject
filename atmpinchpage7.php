<?php
require_once "atmconfig.php";
session_start();
$main_id1 =$_SESSION["main_id"] ;
?>
<style>
#invalid{
    display:none;
}
#invalid1{
    display:none;
}</style>
<?php
if(isset($_POST['save'])){
    $pwd1=$_POST['pin'];
    $pwd2=$_POST['pin1'];
    $pwd3=$_POST['pin2'];
    $Getudetails=mysqli_query($conn, "SELECT * FROM user_details WHERE u_status='1'and u_id='$main_id1'") or die(mysqli_error($conn));
    while($resdetails1=mysqli_fetch_object($Getudetails)){
        $password=$resdetails1->u_pwd;
        if($pwd1!=$password && $pwd2==$pwd3){
                ?>
            <style>
            #invalid{
            display:block;
            }
            </style>
            <?php
        }
        if($pwd1==$password && $pwd2!=$pwd3){
            ?>
            <style>
            #invalid1{
            display:block;
            }
            </style>
            <?php
        }
        if($pwd1!=$password && $pwd2!=$pwd3){
            ?>
            <style>
            #invalid{
            display:block;
            }
            #invalid1{
            display:block;
            }
            </style>
            <?php
        }if($pwd1==$password && $pwd2==$pwd3) {
            $updpin=mysqli_query($conn,"update user_details set u_pwd='$pwd2' where u_id='$main_id1'");
            if($updpin){
            header ("location:atmloginpage1.php");              
            }
         }
     }
}

    if(isset($_POST['cancel'])){
         session_unset();
        session_destroy();
        header ("location:atmservicepage4.php");
    }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atmpage7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Sansita&display=swap" rel="stylesheet">
</head>
<body style="background-color:#d7d7d7;color:#991a4f;font-family: 'Sansita', sans-serif;">
<form method="POST">
<div class="row" style="background-color:#991a4f;height:40px;"></div>
<div class="row">
<div class="col-xl-4"></div>
<div class="col-xl-6">
<h1><span style="text-align:centre;color:#991a4f;">Change Your PIN </span></h1></div></div>
<div class="row mt-5 mb-5">
        <div class="col-xl-3 col-lg-3 col-md-3 "></div>

        <div class="col-xl-5 col-lg-5 col-md-5 ">
        
                 <table>  
                    <tr>
                    <td><span style="font-size:25px;">Enter your old PIN</span></td>
                    <td><span style="font-size:25px;">:</span></td>
                    <td><input class="form-control mb-3" type="password" name="pin" id="pin" value="" ><div id="invalid"><p><span style="color:red;">Invalid Password</span></p></div></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td><span style="font-size:25px;">Enter your new PIN</span></td>
                    <td><span style="font-size:25px;">:</span></td>
                    <td><input class="form-control mb-3" type="password" name="pin1" id="pin1" value="" ></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td><span style="font-size:25px;">Confirm PIN</span></td>
                    <td><span style="font-size:25px;">:</span></td>
                    <td><input class="form-control mb-4" type="password" name="pin2" id="pin2" value="" ><div id="invalid1" ><p><span style="color:red;">Please make sure that new PIN and confirm PIN should be same</span></p></div></td>
                    <td></td>
                    </tr>
                    

                    </table>
        
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 ">
        <tr>
                        <td><button style="background-color:#991a4f;text-align:centre;width:200px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="save" id="save" ><i class="bi bi-check-circle"></i> Change</button></td>
</tr>
<tr>
                        <td><button style="background-color:#991a4f;text-align:centre;width:200px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-5"name="cancel" id="cancel" ><i class="bi bi-x-circle"></i> Cancel</button></td>
                    </tr>
        </div>

        </div>
        
        <div class="row"><img src="images/cropbg.jpg" style="width:100%;height:70px;margin-top:75px;"></div>

</form>

</body>
</html>
