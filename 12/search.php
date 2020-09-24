<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="img/Undip.png" type="image/x-icon" height="40px" width="34px"> 
    <title>SIAP Bergota</title>

	<!--

	Template 2095 Level

	http://www.tooplate.com/view/2095-level

	-->

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-search.css">                                   <!-- Templatemo style -->

    <!-- <link rel="stylesheet" type="text/css" href="css/datepicker.css"/> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


		<!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
        <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->

		<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

        <!--
		<script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->

        <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->


		<script>
		$(document).ready(function(){
			  var date_input=$('input[name="tglMeninggal"]'); //our date input has the name "tglMeninggal"
			  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			  var options={
				format: 'mm/dd/yyyy',
				container: container,
				todayHighlight: true,
				autoclose: true,
			  };
			  date_input.datepicker(options);
			})

			$(document).ready(function(){
			  var date_input=$('input[name="tglMakam"]'); //our date input has the name "tglMakam"
			  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			  var options={
				format: 'mm/dd/yyyy',
				container: container,
				todayHighlight: true,
				autoclose: true,
			  };
			  date_input.datepicker(options);
			})
		</script>
</head>

    <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/Undip.png" alt="Site logo" height="40px" width="34px">
                                SIAP Bergota
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-3">Fitur kami</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">Artikel mengenai Bergota</a>
                                  </li>
								  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-5">Statistika kawasan Bergota</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-6">Tilik Makam</a>
                                  </li>
								  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-8">Juru Kunci</a>
                                  </li>
								  <li class="nav-item">
                                    <a class="nav-link" href="#">Login</a>
                                  </li>
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>
            <div class="tm-section tm-bg-img" id="tm-section-1">
			<img src="./img/makam_intro.jpeg"/>
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form action="index.html" method="POST" class="tm-search-form tm-section-pad-2">
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                            <input name="city" type="text" class="form-control" id="inputMakam" placeholder="Nama jenazah">
                                        </div>
										<div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="tglMeninggal" type="text" class="form-control" id="tglMeninggal" placeholder="Tanggal meninggal">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="tglMakam" type="text" class="form-control" id="tglMakam" placeholder="Tanggal dimakamkan">
                                        </div>
                                    </div>
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <button type="submit" class="btn btn-primary tm-btn-search">Cari Data</button>
                                        </div>
                                    </div>
									<!--
                                    <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                        <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need Help?</a>
                                    </div>
									-->
                                </form>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>  


		<div class="tm-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="tm-section-title">Hasil Pencarian Data :</h2>
                            <p class="tm-color-white tm-section-subtitle" style="font-size:23px;">MARIA</p>
                            <!-- <a href="#" class="tm-color-white tm-btn-white-bordered">Download</a> -->
                        </div>                
                    </div>
                </div>        
        </div>
            
            <div class="tm-section tm-position-relative" id="tm-section-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow">
                    <polygon fill="#ee5057" points="0,0  100,0  50,60"></polygon>                   
                </svg> 
                <div class="container tm-pt-5 tm-pb-4">
                    <div class="row text-center">
                       <table class="table table-hover">
						  <thead>
							<tr>
							  <th scope="col" class="align-middle">No.</th>
							  <th scope="col" class="align-middle">Nama Lengkap</th>
							  <th scope="col" class="align-middle"></th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row" class="align-middle">1</th>
							  <td class="align-middle">Maria Anastasha</td>
							  <td><a href="maria_anastasha.php" class="li-modal tm-color-black tm-btn-white-bordered">Lihat Detail</a></td>
							</tr>
							<tr>
							  <th scope="row" class="align-middle">2</th>
							  <td class="align-middle">Maria Amarta Herman</td>
							  <td><a href="maria_amarta.php" class="li-modal tm-color-black tm-btn-white-bordered">Lihat Detail</a></td>
							</tr>
						  </tbody>
						</table>
                    </div>        
                </div>
            </div>
            
            
            <footer class="tm-bg-dark-blue">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                        Copyright &copy; <span class="tm-current-year">2020</span> SIAP Bergota
                        
                        - Design: Rahasia.Tbk</p>        
                    </div>
                </div>                
            </footer>
        </div>

		<div id="theModal" class="modal fade text-center">
			<div class="modal-dialog">
			  <div class="modal-content">
			  </div>
			</div>
		 </div>

  
        <script>

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(-6.990186322680971,110.41314482517637),
                    scrollwheel: false
                };

                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
              });

                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
              });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            } 

            function setCarousel() {
                
                if ($('.tm-article-carousel').hasClass('slick-initialized')) {
                    $('.tm-article-carousel').slick('destroy');
                } 

                if($(window).width() < 438){
                    // Slick carousel
                    $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                }
                else {
                 $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    });   
                }
            }

            function setPageNav(){
                if($(window).width() > 991) {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 79
                    });   
                }
                else {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 65
                    });   
                }
            }

            function togglePlayPause() {
                vid = $('.tmVideo').get(0);

                if(vid.paused) {
                    vid.play();
                    $('.tm-btn-play').hide();
                    $('.tm-btn-pause').show();
                }
                else {
                    vid.pause();
                    $('.tm-btn-play').show();
                    $('.tm-btn-pause').hide();   
                }  
            }
       
            $(document).ready(function(){

                $(window).on("scroll", function() {
                    if($(window).scrollTop() > 100) {
                        $(".tm-top-bar").addClass("active");
                    } else {
                        //remove the background property so it comes transparent again (defined in your css)
                       $(".tm-top-bar").removeClass("active");
                    }
                });      

                // Google Map
                loadGoogleMap();  

                // Date Picker
				/*
                const pickerCheckIn = datepicker('#inputCheckIn');
                const pickerCheckOut = datepicker('#inputCheckOut');
                */

                // Slick carousel
                setCarousel();
                setPageNav();

                $(window).resize(function() {
                  setCarousel();
                  setPageNav();
                });

                // Close navbar after clicked
                $('.nav-link').click(function(){
                    $('#mainNav').removeClass('show');
                });

                // Control video
                $('.tm-btn-play').click(function() {
                    togglePlayPause();                                      
                });

                $('.tm-btn-pause').click(function() {
                    togglePlayPause();                                      
                });

                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());                           
            });

        </script>
		
		<script>
			//var js_array = [<?php echo '"'.implode('"=>"', $nama_nama) ?>];

			var ctx = document.getElementById("myChartbar1").getContext('2d');
			var densityData = {
			  label: 'Jumlah orang yang dimakamkan',
			  data: [50,60,100,300,20],
			  backgroundColor: "rgb(255, 99, 132)",
			  borderWidth: 0,
			  yAxisID: "y-axis-density"
			};

			var gravityData = {
			  label: 'Kapasitas Maksimal',
			  data: [200,300,400,670,770],
			  backgroundColor: "rgb(54, 162, 235)",
			  borderWidth: 0,
			};

			var gravityDatas = {
			  label: 'Kapasitas yang sudah terpakai',
			  data: [150,210,310,610,630],
			  backgroundColor: "rgb(255, 205, 86)",
			  borderWidth: 0,
			};
											
			var jenisData = {
			  labels: ["2014","2015","2018","2019","2020"],
			  datasets: [densityData, gravityData, gravityDatas]
			};

			var chartOptions = {
			  scales: {
				xAxes: [{
				  ticks: {
					maxRotation: 0, // angle in degrees
					beginAtZero: true
				  },
				  //barPercentage: 1,
				  categoryPercentage: 0.6
				}],
				yAxes: [{
				  id: "y-axis-density"
				}]
			  },
				title: {
					display: true,
					text: 'Data Statistik Pemakaman Bergota',
					fontSize: 20
				},	
					legend: {
					display: false
				}
			};

			var barChart = new Chart(ctx, {
			  type: 'horizontalBar',
			  data: jenisData,
			  options: chartOptions
			});
		</script>

		<!-- Full Height Modal Right -->
		<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		  aria-hidden="true">

		  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
		  <div class="modal-dialog modal-full-height modal-right" role="document">


			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title w-100" id="myModalLabel">Informasi Detail</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">


			  </div>
			  <div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			  </div>
			</div>
		  </div>
		</div>
		<!-- Full Height Modal Right -->

		<script>
		$('.li-modal').on('click', function(e){
			  e.preventDefault();
			  $('#fullHeightModalRight').modal('show').find('.modal-body').load($(this).attr('href'));
			});
		</script>

</body>
</html>

