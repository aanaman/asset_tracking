<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{

$tid=(int)$_GET['tid'];
// print_r($_GET);
if(isset($_POST['submit']))
{
    // print_r($_POST);
    
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$depositdate = $_POST['depositdate'];
$nextofkin = $_POST['nextofkin'];
$asserttype = $_POST['asserttype'];
$assertstatus = $_POST['assertstatus']; 
$chargepermonth = $_POST['chargepermonth'];
// var_dump($tid);
// exit();
$sql="update tblusers set UserName= :username,FirstName= :firstname,LastName= :lastname,PhoneNumber= :phone,Address= :address,DepositDate= :depositdate,NextOfKin= :nextofkin,AssertType= :asserttype,AssertStatus= :assertstatus,ChargePerMonth= :chargepermonth where id= :tid ";
//$sql="update tblusers set UserName=:username,FirstName=:firstname,LastName=:lastname,PhoneNumber=:phone,Address:=address,DepositDate:=depositdate,NextOfKin:=nextofkin,AssertType:=asserttype,ChargePerMonth:=chargepermonth where id=:tid ";

//print($sql);
$query = $dbh->prepare($sql);

$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':depositdate',$depositdate,PDO::PARAM_STR);
$query->bindParam(':nextofkin',$nextofkin,PDO::PARAM_STR);
$query->bindParam(':asserttype',$asserttype,PDO::PARAM_STR);
$query->bindParam(':assertstatus',$assertstatus,PDO::PARAM_STR);
$query->bindParam(':chargepermonth',$chargepermonth,PDO::PARAM_STR);
$query->bindParam(':tid',$tid,PDO::PARAM_INT);
$query->execute();

$msg=" User info updated successfully";
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assert Tracking| Edit User </title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="../css/select2/select2.min.css" >
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('../includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('../includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">User Account Update</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li><a href="manager-users'php">Users</a></li>
                                        <li class="active">User Account Update</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill the User info</h5>
                                                </div>
                                            </div>
                                            
<?php if(!empty($msg)){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if(!empty($error)){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                        <div class="panel-body">
                                                <form method="post" action="" > 
<?php 

$sql = "SELECT tblusers.UserName,tblusers.FirstName,tblusers.LastName,tblusers.id,tblusers.AssertStatus,tblusers.PhoneNumber,tblusers.Address,tblusers.DepositDate,tblusers.NextOfKin,tblusers.AssertType,tblusers.ChargePerMonth from tblusers where tblusers.id=:tid";
$query = $dbh->prepare($sql);
$query->bindParam(':tid',$tid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


<div class="form-group has-success">
<label for="success" class="control-label">Username</label>                                                		
<div class="">
<input type="text" name="username" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->UserName)?>" >                                                		
</div>
</div>

<div class="form-group has-success">
<label for="success" class="control-label">First Name</label>
<div class="">
<input type="text" name="firstname" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->FirstName)?>">
</div>
</div>

<div class="form-group has-success">
<label for="success" class="control-label">Last Name</label>
<div class="">
<input type="text" name="lastname" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->LastName)?>">
</div>
</div>

<div class="form-group has-success">
<label for="success" class="control-label">Phone</label>
<div class="">
<input type="text" name="phone" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->PhoneNumber)?>">
</div>
</div>


<div class="form-group has-success">
<label for="success" class="control-label">Address</label>                                                		
<div class="">
<input type="text" name="address" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->Address)?>" >                                                		
</div>
</div>

<div class="form-group has-success">
<label for="success" class="control-label">Deposit Date</label>                                                		
<div class="">
<input type="date" name="depositdate" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->DepositDate)?>" >                                                		
</div>
</div>

<div class="form-group has-success">
<label for="success" class="control-label">Next of Kin</label>                                                		
<div class="">
<input type="text" name="nextofkin" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->NextOfKin)?>" >                                                		
</div>
</div>

<div class="form-group has-success">
<label for="success" class="control-label">Assert Type</label>                                                		
<div class="">
<input type="text" name="asserttype" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->AssertType)?>" >                                                		
</div>
</div>

<div class="form-group has-success">
<label for="success" class="control-label">Charge Per Month</label>                                                		
<div class="">
<input type="text" name="chargepermonth" class="form-control" required="required" id="success" value="<?php echo htmlentities($result->ChargePerMonth)?>" >                                                		
</div>
</div>

<div class="form-group has-success">
<label for="success" class="control-label">Assert Status </label>                                                		
<div class="">
<select name="assertstatus" required="required" class="form-control" id="success">
    <option value="Active">Active</option>
    <option value="Inactive">Inactive</option>
</select>
</div>
</div>

<?php }} ?>                                                    

                                                    
                                                    <div class="form-group has-success">
                                                        <div class="">
                                                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="../js/prism/prism.js"></script>
        <script src="../js/select2/select2.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
<?PHP } ?>
