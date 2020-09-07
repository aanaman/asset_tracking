<?php
session_start();
error_reporting(0);
include('../includes/config.php');
$msg="";
$error="";
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
if(isset($_POST['submit']))
{

$username = $_POST['username'];
$tracking = rand(0, 9999999);
$password = md5($_POST['password']);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$depositdate = $_POST['depositdate'];
$nextofkin = $_POST['nextofkin'];
$asserttype = $_POST['asserttype'];
$assertstatus = $_POST['assertstatus']; 
$chargepermonth = $_POST['chargepermonth'];

$sql="INSERT INTO  tblusers(UserName,Password,FirstName,LastName,PhoneNumber,Address,DepositDate,NextOfKin,AssertType,AssertStatus,ChargePerMonth,Tracking) VALUES(:username,:password,:firstname,:lastname,:phone,:address,:depositdate,:nextofkin,:asserttype,:assertstatus,:chargepermonth,:tracking)";
$query = $dbh->prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':depositdate',$depositdate,PDO::PARAM_STR);
$query->bindParam(':nextofkin',$nextofkin,PDO::PARAM_STR);
$query->bindParam(':asserttype',$asserttype,PDO::PARAM_STR);
$query->bindParam(':assertstatus',$assertstatus,PDO::PARAM_STR);
$query->bindParam(':chargepermonth',$chargepermonth,PDO::PARAM_STR);
$query->bindParam(':tracking',$tracking,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg=" User Info Created Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | User Account Creation</title>
        <link rel="stylesheet" href="../css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="../css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
         <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('../includes/topbar.php');?>   
          <!-----End Top bar> -->
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
                                    <h2 class="title">Add User</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li><a href="manager-users'php">Users</a></li>
            							<li class="active">Create User</li>
            						</ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Create User</h5>
                                                </div>
                                            </div>
           <?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
  
                                            <div class="panel-body">

                                                <form method="post">
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Username</label>
                                                		<div class="">
                                                			<input type="text" name="username" class="form-control" required="required" id="success">                                                		
                                                            </div>
                                                	</div>
                                                      
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">Password</label>
                                                        <div class="">
                                                            <input type="password" name="password" class="form-control" required="required" id="success">                                                        
                                                            </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">First Name</label>
                                                        <div class="">
                                                            <input type="text" name="firstname" class="form-control" required="required" id="success">
                                                            </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Last Name</label>
                                                        <div class="">
                                                            <input type="text" name="lastname" required="required" class="form-control" id="success">
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Phone Number</label>
                                                        <div class="">
                                                            <input type="text" name="phone" required="required" class="form-control" id="success">
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Address</label>
                                                        <div class="">
                                                            <input type="text" name="address" required="required" class="form-control" id="success">
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Deposit Date</label>
                                                        <div class="">
                                                            <input type="date" name="depositdate" required="required" class="form-control" id="success">
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Next Of Kin</label>
                                                        <div class="">
                                                            <input type="text" name="nextofkin" required="required" class="form-control" id="success">
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Assert Type</label>
                                                        <div class="">
                                                            <input type="text" name="asserttype" required="required" class="form-control" id="success">
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Charge Per Month</label>
                                                        <div class="">
                                                            <input type="text" name="chargepermonth" required="required" class="form-control" id="success">
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Assert Status</label>
                                                        <div class="">
                                                            <select name="assertstatus" required="required" class="form-control" id="success">
                                                                <option value="Active">Active</option>
                                                                <option value="Inactive">Inactive</option>
                                                            </select
                                                        </div>
                                                    </div><br>
                                                
                                                    <div class="form-group has-success">
                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-success btn-labeled">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                        </div>
                                                    </div>
                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/jquery-ui/jquery-ui.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="../js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="../js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
<?php  } ?>
