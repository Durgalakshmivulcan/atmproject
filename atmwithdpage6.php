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
#invalid1{
    display:none;
}
#invalid2{
    display:none;
}
#showb{
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
                 #ppage{
                display:none;
                }   
                #amountin{
                display:block;
                }
                </style>
                <?php
            }if($pwd1!=$password || $pwd1="") {
                ?>
                <style>
                #invalid{
                display:block;
                }
                #ppage{
                display:block;
                }
                </style>
                <?php
          }
        }
    }
}
 
if (isset($_POST['save1'])) {
    $am1 = $_POST['am'];
    $Getadetails2 = mysqli_query($conn, "SELECT * FROM atmbal_details WHERE atm_status='1'") or die(mysqli_error($conn));

    while ($resdetails4 = mysqli_fetch_object($Getadetails2)) {
        $atmbal=$resdetails4->atm_tbal;
        $n2000=$resdetails4->n_2000;
        $n500=$resdetails4->n_500;
        $n200=$resdetails4->n_200;
        $n100=$resdetails4->n_100;

    $Getadetails1 = mysqli_query($conn, "SELECT * FROM acc_details WHERE a_status='1' AND u_id='$main_id1'") or die(mysqli_error($conn));

    while ($resdetails3 = mysqli_fetch_object($Getadetails1)) {
        $acname = $resdetails3->a_name;
        $acnum = $resdetails3->a_no;
        $accbal1 = $resdetails3->a_bal;
        $accbal2 = $accbal1 - $am1;
        if($atmbal<=$am1){
            ?><style>
                 #amountin{
                display:block;
                }
            #invalid2{
                display:block
            }
            #ppage{
                display:block;
                }  
            </style>
            <?php
        }
        if ($accbal1 <= $am1) {
            ?>
            <style>
                #ppage{
                display:none;
                }  
                #amountin{
                display:block;
                }
                #invalid1 {
                    display: block;
                }
            </style>
            <?php
        }else{
            $insertra = mysqli_query($conn, "INSERT INTO tra_details (t_name, t_accno, t_wd, t_tbal) VALUES ('$acname', '$acnum', '$am1', '$accbal2')");
            $atm2000=$am1/2000;
            $atmr1=$am1%2000;
            $atm500=$atmr1/500;
            $atmr2=$atmr1%500;
            $atm200=$atmr2/200;
            $atmr3=$atmr2%200;
            $atm100=$atmr3/100;
            $atmr4=$atmr3%100;
            $nof2000=$n2000-$atm2000;
            $nof500=$n500-$atm500;
            $nof200=$n200-$atm200;
            $nof100=$n100-$atm100;
            $atmavbal1=$atmbal-$am1;
            $rwithd=mysqli_query($conn,"UPDATE atmbal_details set atm_tbal='$atmavbal1',n_2000='$nof2000',n_500='$nof500',n_200 ='$nof200',n_100='$nof100' where atm_status='1'") or die(mysqli_error($conn));
            $withd = mysqli_query($conn, "UPDATE acc_details SET a_wd='$am1', a_bal='$accbal2' WHERE u_id='$main_id1'") or die(mysqli_error($conn));
            
            if ($withd) {
                ?>
            <style>
                #ppage{
                display:none;
                } 
                #showb{
                display:block;
                }  
                
            </style>
            <?php
            }
                
        } 
            
        }
}         
}  if (isset($_POST['save5'])) {

    header( "location:atmwaitingpage11.php" ); 
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
    <title>atmpage6</title>
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
<div class="row" style="background-color:#991a4f;height:30px;"></div>
<div class="row">
<div class="col-xl-4"></div>
<div class="col-xl-6">
<h1><span style="text-align:centre;color:#991a4f;">Withdraw</span></h1></div></div>
<div id="ppage">
    <div class="row  ms-5">
    <div class="col-xl-1 col-lg-1 col-md-1"></div>

        <div class="col-xl-3 col-lg-3 col-md-3 mt-5 ms-5"><h4><span style="color:#991a4f;">Enter your PIN number:</span></h4></div>

        <div class="col-xl-3 col-lg-3 col-md-3 mt-5">
        <tr>
                        
                    <tr>
                        
                    <td><input class="form-control" type="password" name="bal" id="bal" value="" ><span style="color:#991a4f;font-size:50px;"><i class="bi bi-keyboard-fill"></i></span><div id="invalid" ><p><span style="color:red;">Invalid Password</span></p></div></td>
                    <td></td>
                    </tr>

        </div>
        <div class="col-xl-1 col-lg-1 col-md-1"></div>
        <div class="col-xl-3 col-lg-3 col-md-3 mt-1 ">   
                    <tr>
                        
                    <td><button style="background-color:#991a4f;text-align:centre;height:50px;;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="save" id="save" ><i class="bi bi-check-circle"></i>    Continue</button></td>
                    </tr>

        </div>
        </div>
</div>
        <div id="amountin">
<div class="row ms-5 mt-5" >
<h3><span style="color:#991a4f;">Enter amount of your choice:<i class="bi bi-currency-rupee"></i></span></h3>

        <div class="col-xl-3 col-lg-3 col-md-3 "></div>
        <div class="col-xl-3 col-lg-3 col-md-3 ">
        <tr>
                        
                    <tr>
                        
                    <td><input class="form-control" type="tel" name="am" id="am" value="" ><span style="color:#991a4f;font-size:50px;"><i class="bi bi-keyboard-fill"></i></span></br><div id="invalid1" ><p><span style="color:red;">Insufficient bank balance</span></p></div><div id="invalid2" ><p><span style="color:red;">Sorry...Insufficient ATM balance</span></p></div></td>
                    <td></td>
                    </tr>

        </div>
        <div class="col-xl-1 col-lg-1 col-md-1"></div>
        <div class="col-xl-3 col-lg-3 col-md-3 ">

        
                      <table> 
                    <tr>
                        
                    <td><button style="background-color:#991a4f;text-align:centre;height:50px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="save1" id="save1" ><i class="bi bi-check-circle"></i>    Confirm</button></td>
                    </tr>
                    <tr>
                        
                        <td><button style="background-color:#991a4f;text-align:centre;height:50px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="cancel" id="cancel" ><i class="bi bi-x-circle"></i>    Cancel</button></td>
                        </tr>
</table>
        </div>
        </div>
        
        </div> <div id="showb">
<div class="row ms-5 mt-5" >
<h3><span style="color:#991a4f;">Available Balance:<i class="bi bi-currency-rupee"></i></span></h3>

        <div class="col-xl-3 col-lg-3 col-md-3 "></div>
        <div class="col-xl-3 col-lg-3 col-md-3 ">
        <tr>
                        
                    <tr>
                        
                    <td><input class="form-control" type="tel" name="av" id="av" value="<?php echo $accbal2;?>"disabled ></td>
                    <td></td>
                    </tr>

        </div>
        <div class="col-xl-1 col-lg-1 col-md-1"></div>
        <div class="col-xl-3 col-lg-3 col-md-3 ">

        
                      <table><tr>
                        
                        <td><button style="background-color:#991a4f;text-align:centre;height:50px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="save5" id="save5" ><i class="bi bi-check-circle"></i>    Ok</button></td>
                        </tr> 
                    <tr>
                        
                        <td><button style="background-color:#991a4f;text-align:centre;height:50px;font-size:25px;border-radius:100px;color:white;"class="btn btn-pill mt-3"name="cancel" id="cancel" ><i class="bi bi-x-circle"></i>    Cancel</button></td>
                        </tr>
</table>
        </div>
        </div>
        
        </div>
<div class="row"><img src="images/cropbg.jpg" style="width:100%;height:80px;margin-top:50px;"></div>

</form>

</body>
</html>
