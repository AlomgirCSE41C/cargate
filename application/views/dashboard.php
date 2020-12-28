<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Car Gate</title>
    <!-- Bootstrap Styles-->
    <link href="asset/dashboard/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="asset/dashboard/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="asset/dashboard/css/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="asset/dashboard/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong><i class="fas fa-car-side"></i>CAR GATE</strong></a>
				
		<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>

            
                  
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="<?php echo base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>manage-car"><i class="fa fa-archive"></i>Manage Car</a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url()?>add-car"><i class="fa fa-plus-square"></i>Add Car</a>
                    </li> 

                    <li>
                        <a href="<?php echo base_url()?>buy-us"><i class="fa fa-money"></i>Buy</a>
                    </li> 

					 
                    <li>
                        <a href="<?php echo base_url()?>contact"><i class="fa fa-phone-square"></i>Contact</a>
                    </li> 




                    <li>
                        <a href="<?php echo base_url()?>"><i class="fa fa-phone-square"></i>user view</a>
                    </li> 
							
                    <li>
                        <a href="<?php echo base_url()?>admin-login"><i class="fa fa-qrcode"></i>Logout</a>
                    </li>
                    
                   
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Dashboard <small>Welcome to Car Gate</small>
            </h1>
						
        </div>
        
        <div id="page-inner">
            <?php
                echo $content;
            ?>
        </div>
            
				     
				
		
		
				
				
        <div class="row">
        <div class="col-md-12">
        
            </div>		
        </div> 	
               

	   
			
			
		
				<footer><p>All right reserved.<a href="<?php echo base_url();?>">Cargate</a></p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="asset/dashboard/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="asset/dashboard/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="asset/dashboard/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="asset/dashboard/js/morris/raphael-2.1.0.min.js"></script>
    <script src="asset/dashboard/js/morris/morris.js"></script>
	
	
	<script src="asset/dashboard/js/easypiechart.js"></script>
	<script src="asset/dashboard/js/easypiechart-data.js"></script>
	
	 <script src="asset/dashboard/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="asset/dashboard/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="asset/dashboard/js/Chart.min.js"></script>  
    <script type="text/javascript" src="asset/dashboard/js/chartjs.js"></script> 

</body>

</html>