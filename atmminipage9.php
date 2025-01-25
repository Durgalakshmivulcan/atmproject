<?php
require_once "atmconfig.php";
session_start();
$main_id1 =$_SESSION["main_id"] ;
?>
<style>
#amountin{
display:none;
}
#invalid{
    display:none;
}
#mini{
        display:none;
 
}
</style>
<?php

if(isset($_POST['save'])){
        $pwd1=$_POST['bal'];
        $Getadetails=mysqli_query($conn, "SELECT * FROM acc_details WHERE a_status='1' and u_id='$main_id1'") or die(mysqli_error($conn));
        while($resdetails=mysqli_fetch_object($Getadetails)){
            $Getudetails=mysqli_query($conn, "SELECT * FROM user_details WHERE u_status='1'and u_id='$main_id1'") or die(mysqli_error($conn));
            while($resdetails1=mysqli_fetch_object($Getudetails)){
                        $password=$resdetails1->u_pwd;
                        if($pwd1==$password){
                                $accbal1=$resdetails->a_bal;
                                ?>
                                <style>
                                #amountin{
                                display:block;
                                }
                                #pinpage{
                                display:none;
                                }
                                </style>
                                <?php
                                }else {
                                ?>
                                <style>
                                 #pinpage{
                                display:block;
                                } 
                                #invalid{
                                display:block;
                                }
                                </style>
                                <?php
                        }
                 }
        }
}
if(isset($_POST['save1'])){
                        ?>
                        <style>
                         #mini{
                                 display:block;
                                 }
                        #pinpage{
                                display:none;
                        }
                        #amountin{
                                display:none;
                                }
                        </style>
 <?php                   
 }

    if(isset($_POST['cancel'])){
        header ("location:atmservicepage4.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atmpage9</title>
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
<div class="row" >
<div class="col-xl-4"></div>
<div class="col-xl-6">
<h1><span style="text-align:centre;color:#991a4f;">Mini Statement</span></h1></div></div>
<div id="pinpage">
<div class="row mt-5 mb-3">
<div class="col-xl-2 col-lg-2 col-md-2"></div>

        <div class="col-xl-3 col-lg-3 col-md-3 mt-5"><h4><span style="color:#991a4f">Enter your PIN number</span></h4></div>

        <div class="col-xl-3 col-lg-3 col-md-3 mt-5">
        <tr>
                        
                    <tr>
                        
                    <td><input class="form-control" type="password" name="bal" id="bal" value="" ><span style="color:#991a4f;font-size:50px;"><i class="bi bi-keyboard-fill"></i></span><div id="invalid" ><p><span style="color:red;">Invalid Password</span></p></div></td>
                    <td></td>
                    </tr>

        </div>
        <div class="col-xl-1 col-lg-1 col-md-1"></div>
        <div class="col-xl-3 col-lg-3 col-md-3  ">   
                    
        <table>
                <tr>
                        
                    <td><button style="background-color:#991a4f;text-align:centre;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="save" id="save" ><i class="bi bi-check-circle"></i>    Continue</button></td>
                    </tr>
                    <tr>
                        
                    <td><button style="background-color:#991a4f;text-align:centre;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="cancel" id="cancel" ><i class="bi bi-x-circle"></i>    Cancel</button></td>
                    </tr>
</table>
        </div>
        </div>
</div>
<div id="amountin">
<div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 "></div>
        <div class="col-xl-6 col-lg-6 col-md-6 ">
        <h2><span style="color:#991a4f">Select the type of account</span></h2>
                  <table class="mt-5">     
                    <tr>
                        
                    <td><button style="background-color:#991a4f;text-align:centre;width:300px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill  me-5"name="save1" id="save1" ><i class="bi bi-bank2"></i>Current Account</button></td>
                                                        
                        <td><button style="background-color:#991a4f;text-align:centre;width:300px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill  ms-5"name="save1" id="save1" ><i class="bi bi-bank2"></i>Savings Account</button></td>
                        </tr>
                        </table>

        </div>
       
        </div>
</div>     
<div id="mini">
<div class="col-xl-2 col-lg-2 col-2"></div>
<div class="col-xl-10 col-lg-10 col-10">
<table border="5px" width="100%"class="table table-hover">
<tr>    
    <th>S.no</th>
    <th>Name</th>
    <th>A/C Number</th>
    <th>Withdrawn Amount</th>
    <th>Deposited Amount</th>
    <th>Available Balance</th>
    <th>Date & Time</th>

 </tr><?php
        $Getadetails1=mysqli_query($conn, "SELECT * FROM acc_details WHERE a_status='1' and u_id='$main_id1'") or die(mysqli_error($conn));
        while($resdetails1=mysqli_fetch_object($Getadetails1)){
                $acnum=$resdetails1->a_no;
                $Gettdetails1=mysqli_query($conn, "SELECT * FROM tra_details WHERE t_status='1' and t_accno='$acnum' order by t_id DESC limit 5;") or die(mysqli_error($conn));
                while($resdetails2=mysqli_fetch_object($Gettdetails1)){
                        $tid=$resdetails2->t_id;
                        $mname=$resdetails2->t_name;
                        $macno=$resdetails2->t_accno;
                        $wdl=$resdetails2->t_wd;
                        $dpt=$resdetails2->t_dp;
                        $totalbal=$resdetails2->t_tbal;
                        $time=$resdetails2->c_d_t;
                        ?>
<tr>     
    <td><?php echo $tid;?></td>   
    <td><?php echo $mname;?></td>
    <td><?php echo $macno;?></td>
    <td><?php echo $wdl;?></td>
    <td><?php echo $dpt;?></td>
    <td><?php echo $totalbal;?></td>
    <td><?php echo $time;?></td>

</tr>
<?php
                }
        }
        ?>
</table>  
<button style="background-color:#991a4f;text-align:centre;width:250px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill  me-5"name="cancel" id="cancel" ><i class="bi bi-bank2"></i>Back to Main Menu</button>

</div>
</div>
</div>
<div class="row"><img src="images/cropbg.jpg" style="width:100%;height:70px;margin-top:45px;"></div>

        </form>
</body>
</html>
