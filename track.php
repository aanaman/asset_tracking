<?php 
error_reporting(0);
include ('includes/configpdo.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tracking Asset Info</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="css/navbar.css" media="screen">
        <script src="js/modernizr/modernizr.min.js"></script>

        <style>
           html, body {
    height: 100%;
  }
  #tableContainer-1 {
    height: 100%;
    width: 100%;
    display: table;
  }
  #tableContainer-2 {
    vertical-align: middle;
    display: table-cell;
    height: 100%;
  }
  #myTable {
    margin: 0 auto;
    border-radius: 5px;
  }
  table tr:last-child td:first-child {
    border-bottom-left-radius: 10px;
}

table tr:last-child td:last-child {
    border-bottom-right-radius: 10px;
}
         .navbar a{
            color: white; 
            margin-right: 20px; 
            font-size: 15px;
            padding-top: 10px;
          }

         

          @media (min-width: 1200px){
            .col-lg-6{
              width: 100%!important;
            }
          }
          @media (min-width: 992px){
            .col-md-11 {
                width: 50%!important;
                margin-left: 280px!important;
          }

        </style>


        <body>

</body>
    </head>
    </br>


    <body class="">

       <div class= "background">
        <div class="main-wrapper">

            <div class="">
                <div class="row">


                    <div class="col-lg-6">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                    <img width="300px;" height:"250px;" src="images/logo-small.png" style="display: block; margin: auto;">

                                                    <div id="tableContainer-1">
                                                    
                                                              <div id="tableContainer-2">
                                                            <table id="myTable" align="center" border="1" cellpadding="0" cellspacing="5" width="100%" bordercolor="#804000">
                                                                <?php

                                                                echo '<h2 style="text-align: center;">Asset Tracking Info</h2><br><tr>
                                                                <td><b>&nbsp;Name</b></td>
                                                                <td><b>&nbsp;Assert Type</b></td>
                                                                <td><b>&nbsp;Next of Kin</b></td>
                                                                <td><b>Charge Per Month</b></td>
                                                                <td><b>&nbsp;Deposit Date</b></td>
                                                                <td><b>&nbsp;Assert Status</b></td>
                                                                </tr>';
                                                                $select="SELECT * FROM tblusers WHERE Tracking='".$_POST['query']."'"; // here input box name
                                                                $query=mysqli_query($mysqli, $select) or die($select);
                                                                $numrow=mysqli_num_rows($query);
                                                                if($numrow != 0)
                                                                {
                                                                while($row=mysqli_fetch_array($query))
                                                                {   
                                                                ?><tr align="left" >
                                                                <td>&nbsp;<?php echo $row['FirstName' ] ." ". $row['LastName']; ?></td>
                                                                <td>&nbsp;<?php echo $row['AssertType']; ?></td>
                                                                <td>&nbsp;<?php echo $row['NextOfKin']; ?></td>  
                                                                <td>&nbsp;<?php echo $row['ChargePerMonth']; ?></td> 
                                                                <td>&nbsp;<?php echo $row['DepositDate']; ?></td>
                                                                <td>&nbsp;<?php echo $row['AssertStatus'] ?></td>   
                                                                </tr><?php  } } else  { echo '<table ><tr align="center"  style="font-size:16px;line-height:150px;color:#FF0000;">
                                                                <font color="#FF0000" >NO RECORDS FOUND</font>
                                                                </tr></table>'; }  ?>
                                                                </table>
                                                                </div>
                                                                </div>

                                                                <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-5 col-sm-12">
                                                                <button onclick="window.location.href = 'index.php';" class="btn btn-success btn-labeled pull-left"><span class="btn-label btn-label-left"><i class="fa fa-home"></i></span>Back to Home</button>
                                                    		</div>
                                                    	</div>

                                        <!-- /.col-md-11 -->
                                    
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>


        <!-- /.panel -->
      <p class="text-muted text-center"><small> Developed By <a href="https://www.aanaman.me/">Abdullah. </a></small> </p>                                        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
