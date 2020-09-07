
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assert Tracking</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="css/navbar.css" media="screen">
        <script src="js/modernizr/modernizr.min.js"></script>

        <style>
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


        <body style="background-image:url('bgimg/<?php echo (schoolbackgound); ?>.jpg');">

</body>
    </head>
    </br>



             <!--   <div align="center" class="navbar">
                   <h1 align="center" style=color:green ><strong>SCHOOL DISCIPLINE SYSTEM</strong></h1>
                </div> -->

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
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Track Assets</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                  <!--  <div class="section-title">
                                                        <p class="sub-title">Student Result Management System</p>
                                                    </div> -->

                                                    <form class="form-horizontal" method="post" action="track.php">
                                                    	<div class="form-group">
                                                    		<label for="TrackingNo" class="col-sm-2 control-label">Tracking</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="text" name="query" class="form-control" id="inputEmail3" placeholder="Input Tracking No.">
                                                    		</div>
                                                    	</div>

                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">
                                                                <button type="submit" name="login" class="btn btn-success btn-labeled pull-left">Track<span class="btn-label btn-label-right"><i class="fa fa-search"></i></span></button>
                                                    		</div>
                                                    	</div>
                                                    </form>




                                                </div>
                                            </div>

                                        <!-- /.col-md-11 -->
                                    </div>
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
     <!--   <p class="text-muted text-center"><small>Copyright © AkroSoft 2019 | Designed By <a href="https://www.akrohitech.com/">AKROSOFT. </a></small> </p> -->
                                        </div>
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
