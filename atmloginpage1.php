<?php
require_once "atmconfig.php";
?>
<style>
#invalid{
    display:none;
}
</style>
<?php
if(isset($_POST['save'])){
    $loginid1=$_POST['loginid'];
    $pwd2=$_POST['pwd'];
    $Getdetails=mysqli_query($conn, "SELECT u_id FROM user_details WHERE u_status='1'and u_mail='$loginid1' and u_pwd='$pwd2'") or die(mysqli_error($conn));
    $resdetails=mysqli_fetch_object($Getdetails);
        $main_id=$resdetails->u_id;
        session_start();
        $_SESSION["main_id"] = $main_id;
        $count=mysqli_num_rows($Getdetails);
        if($count > 0){
            header ("location:atmlangpage2.php");
            } 
        else {
            ?>
<style>
#invalid{
    display:block;
}
</style>
<?php
          }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atmpage1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">
</head>
<body style="background-color:#d7d7d7;">
<form method="POST">
<div class="row" style="background-color:#991a4f;"><img src="images/axis-bank-logo-800x533-sixteen_nine.avif" style="width:200px;height:70px"></div>
<div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 mt-5"><img src="images/two-card.png" style="width:500px;height:380px;"></div>
        <div class="col-xl-5 col-lg-5"style="height:400px;padding:50px;margin-top:10px;">
        <div class=" text centre"><h1><span style="color:#991a4f;font-family: 'Calistoga', serif;">User Login   <i class="bi bi-person-fill"></i></span></h1></div><br>
        <table>
                
                    <tr>
                        <td><span style="color:#991a4f;font-size:20px;font-family: 'Calistoga', serif;">Login ID</span><span style="color:red;">*</span></td>
                        <td><span style="color:#991a4f;">:</span></td>
                        <td><input class="form-control mb-4" type="email" name="loginid" id="loginid" value=""></td>

                        
                    </tr>
                    <tr>
                        <td><span style="color:#991a4f;font-size:20px;font-family: 'Calistoga', serif;">Password</span><span style="color:red;">*</span></td>
                        <td><span style="color:#991a4f;">:</span></td>
                        <td><input class="form-control text-capitalize" type="password" name="pwd" id="pwd" value=""></br><div id="invalid" ><p><span style="color:red;">Invalid login</span></p></div></td>

                        
                    </tr>
                    
                    
                    <tr>
                        <td></td>
                        <td colspan="2"><input style="background-color:#991a4f;text-align:centre;width:100px;font-family: 'Calistoga', serif;color:white;"class="btn btn-pill mt-5"  type="submit" name="save" id="save" value="Login"></td>
                    </tr>

             </table>
        

        </div>
        </div>
        

        <div class="row "><img src="images/syzFKt_OiIReq97u.jpg" style="width:100%;height:80px"></div>

</form>
</script>
</body>
</html>
