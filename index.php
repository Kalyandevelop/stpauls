<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="css3/style.css">
    <link rel="stylesheet" href="css/style.css">
 
    
</head>
<body>
<?php include('header.php');?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
      
     <div class="img-container">
     <img class="d-block w-100" src="imgs/slide1.jpg" alt="First slide">
     <div class="bottom-left">
     <h5 style="color:#FFA200;text-align:left">
100% RESULT <span style="color:#fff">ASSURED</span></h5>
     </div>
     </div>
        

</div>
<div class="carousel-item">
<div class="img-container">
     <img class="d-block w-100" src="imgs/slide1.jpg" alt="First slide">
     <div class="bottom-left">
     <h5 style="color:#FFA200;text-align:left">
100% RESULT <span style="color:#fff">ASSURED</span></h5>
     </div>
     </div>
</div>
<div class="carousel-item">
<div class="img-container">
     <img class="d-block w-100" src="imgs/slide3.jpg" alt="First slide">
     <div class="bottom-left">
     <h5 style="color:#FFA200;text-align:left">
100% RESULT <span style="color:#fff">ASSURED</span></h5>
     </div>
     </div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_stpauls";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<br><br>





<div class="jtv-service-area">
    <div class="container">
      <div class="row">
	  
	  
	  
		      <div class="col-md-4" style="margin-bottom:10px">
         <a href="dataflow.php"> <div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa-brands fa-bandcamp"></i></div>
              <div class="service-wrapper">
                <h3>Exam &amp; dataflow Services </h3>
                <p>for All healthcare professionals</p>
              </div>
            </div>
          </div></a>
        </div>
	  
	  
	   <div class="col-md-4" style="margin-bottom:10px">
          <a href="courseoffered.php"><div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-book"></i></div>
              <div class="service-wrapper">
                <h3>Free Study Material</h3>
                <p>Free Demo Classes </p>
              </div>
            </div>
          </div></a>
        </div>
		
		
		
		
		    <div class="col-md-4" style="margin-bottom:10px">
          <a href="courseoffered.php"><div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-check-square"></i></div>
              <div class="service-wrapper">
                <h3>Embassy Attestation &amp; </h3>
                <p>Good Standing</p>
              </div>
            </div>
          </div></a>
        </div>
		
	  
	  	<div class="col col-md-12 col-sm-6  col-xs-12"></div>
	  
	  
	     <div class="col-md-4" style="margin-bottom:10px">
         <a href="courseoffered.php"> <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-desktop"></i></div>
              <div class="service-wrapper">
                <h3>Computer Based </h3>
                <p>Practice</p>
              </div>
            </div>
          </div></a>
        </div>
	  
	  
	  
	   <div class="col-md-4" style="margin-bottom:10px">
         <a href="courseoffered.php"> <div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-handshake"></i></div>
              <div class="service-wrapper">
                <h3>100% Result Assured</h3>
                <p>Double MOH License holder</p>
              </div>
            </div>
          </div></a>
        </div>
		
	  
	  
        <div class="col-md-4" style="margin-bottom:10px">
          <a href="courseoffered.php"><div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-calendar-check"></i></div>
              <div class="service-wrapper">
                <h3>Free Mock Test </h3>
                <p>updated questions discussion</p>
              </div>
            </div>
          </div></a>
        </div>		
      </div>
    </div>
  </div>
  </div>
  


  <div class="footer-newsletter" style="padding-top : 0px;">
    
  
    <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12 text-justify" style="color:#FFF;">  	  
	  <div class="page-header">
            <h2 style="color:#FFF;">Welcome to St.Paul's Coaching Centre</h2>
          </div>  
  Sharing experience is one of the important factors in achieving the success.  The knowledge learnt from Dubai &amp; Oman while working with Ministry of Health for many years, will definitely be useful for a <a style="color:white;text-decoration:underline" href="https://stpaulscoachingcentre.com/blog/overseas-opportunities-for-health-care-professionals/"> medical professional </a> to Qualify the <a style="color:white;text-decoration:underline" href="https://stpaulscoachingcentre.com/blog/uaes-moh-dha-and-haad-licenses/">Licensing exams</a> &amp; <a style="color:white;text-decoration:underline" href="https://stpaulscoachingcentre.com/blog/dataflow-requirements-for-all-health-care-professionals/"> Dataflow </a>clearance, within limited time  and to get a proper placement in relevant fields.Online and offline courses are available at your convenient time for HAAD, MOH, DHA &amp; <a style="color:white;text-decoration:underline" href="https://stpaulscoachingcentre.com/blog/beginners-guide-to-the-prometric-exam/">PROMETRIC</a> (OMAN, QATAR, SAUDI, BAHRAIN &amp; KUWAIT) BLS &amp; ACLS under AHA.
  
  
<!---St.Pauls coaching center started in 2015 by Reji Paul, utilizing her experience  as a double MOH license holder.  Initially we  provided coaching only for Nurses.  Our 100% success scores in Licensing  exams ,motivated us to expand our services in other professions too.  Now we are rendering  Coaching & Dataflow for OPTOMETRY, BDS, PHYSIOTHERAPY, PHARMACIST, MICROBIOLOGY, MBBS & NURSES. <br><br>

Understanding the importance of a fast and secure documentation, we have a separate Dataflow section for all Health care professionals.  We also do attestation services for Embassy/HRD/MEA Apostle/Foreign Verification and Good Standing.  Quick response on Exam Registration & Dataflow is our highlight.  We ensure the dataflow is completed within the committed time frame. <br><br>

St.Pauls offer you a single window solution for Coaching and Dataflow to achieve your dream job of any medical professional in any Ministry of Health.--->

  	
      </div>
    </div>
  </div>
  
    </div>



    
<div class="container">

<div class="row">
  <div class="col-md-6" >
    <div style="background-color:#F8F8F8;padding:20px;height:100%">
      <div class="slider-container">
        <div class="slider-content">

        <div class="row">
          <div class="col-md-6">
          <a href="course-reviews.php" class="button"> View More Feedbacks &nbsp; <i class="fa fa-angle-double-right"></i></a>
          </div>
          <div class="col-md-6">
          <a href="#" data-toggle="modal" data-target="#myModalnew" class="button"> Post Your Feedback &nbsp; <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
          <br><br>
          <?php
          $sql = "SELECT * FROM `comments` WHERE `status` = 1 ORDER BY `id` DESC ";
          $query = mysqli_query($conn, $sql);

          while ($data = mysqli_fetch_array($query)) {
            $dbstartvalue= $data['star'];
            echo '<div class="hider" style="display:none"><p>' . $data['description'] . '</p>';
            ?>
            <span  style="color:#fb5e78;" ><strong> 
            <?php if($dbstartvalue =='1'){ ?> <img src="star.png"/> 
            <?php } else if($dbstartvalue =='2'){ ?> <img src="star.png"/> <img src="star.png"/> 
            <?php } else if($dbstartvalue =='3'){ ?> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> 
            <?php } else if($dbstartvalue == '4') { ?> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/>
            <?php } else if($dbstartvalue == '5') { ?> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> <?php } ?>
            </strong></span><br>
            <strong><?php echo $data['name'] ?></strong>
            </div>                  
             <?php } ?>  
         
                        
        </div>
      </div>
    </div>

            </div>
            <div class="col-md-6">

<!-- slider starts -->
<div class=" page-container" id="page-content">
    <div class="padding">
        <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div style="border-bottom:1px solid #ddd">
                  <h2 style="font-size:16px"><b>UPDATES</b></h2>
                  </div><br>
                
                  <div class="owl-carousellol">
                    <?php
                    $sql="SELECT * FROM `news`  order by `news_id` DESC LIMIT 6 ";
                    $query = mysqli_query($conn, $sql);

                    while ($data = mysqli_fetch_array($query)) {
                    
                    ?>
                    <div class="item">
                    <div class="text-center"> <a href="uploads/<?php echo $data['photo'] ?>" target=_blank><img src="uploads/<?php echo $data['photo'] ?>" alt="achievements"></a> <br> <br>
		<h6 style="font-family: 'Barlow', sans-serif !important;font-size:12px"> <?php echo $data['news_title']; ?></h6>
    </div></div>
    <?php  } ?>

                   
                   
                     
                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
            </div> 
            <!-- slider ends -->


            </div>
           
  </div>
<br><br>



    <div class="container">
    <a href="health-care-professionals.php" style="color:#036099"><h2 style="text-align:center;font-weight:900;font-family: 'Oswald', sans-serif;">HEALTH CARE PROFESSIONALS</h2></a>
    
    <div class="row">
      <div class="col-md-3">
          <div class="box1">
            <img src="imgs/nurse.jpg" alt="" class="img-responsive">
            <h5>NURSES</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box1">
            <img src="imgs/bds.jpg" alt="" class="img-responsive">
            <h5>BDS</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box1">
            <img src="imgs/mbbs.jpg" alt="" class="img-responsive">
            <h5>MBBS</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box1">
            <img src="imgs/optometry.jpg" alt="" class="img-responsive">
            <h5>OPTOMETRIST</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>
  </div>
  <br>
  <div class="row">

      <div class="col-md-3">
          <div class="box1">
            <img src="imgs/physiotherapist.jpg" alt="" class="img-responsive">
            <h5>PHYSIOTHERAPIST</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box1">
            <img src="imgs/microbiologist.jpg" alt="" class="img-responsive">
            <h5>MICROBIOLOGIST</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>

      <div class="col-md-3">
          <div class="box1">
            <img src="imgs/pharmacist.jpg" alt="" class="img-responsive">
            <h5>PHARMACIST</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>
   

    <div class="col-md-3">
          <div class="box1">
            <img src="imgs/medicalaboratoryteechnician.jpg" alt="" class="img-responsive">
            <h5>MLT -A MEDICAL LABORATORY TECHNICIAN (MLT)</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>
    </div>
<br>
  <div class="row">
    <div class="col-md-3">
          <div class="box1">
            <img src="imgs/audiology-and-speech-language-pathology.jpg" alt="" class="img-responsive">
            <h5>AUDIOLOGY AND SPEECH LANGUAGE PATHOLOGY</h5>
            <a href="exam-for-nurses.php"><button type="button" class="add-to-cart bluebutn"> <span> View Details</span> </button></a>
          </div>
      </div>
    </div>
  </div>
  
  </div>

  
<div class="pad_bottom_30"></div>

<div class="container">
<div class="tabs">
  <ul class="tabs-nav">
    <li><a href="#tab-1">FACEBOOK REVIEWS</a></li>
    <li><a href="#tab-2">GOOGLE REVIEWS</a></li>
  </ul>
  <div class="tabs-stage">
    <div id="tab-1">
     
  <div class=" page-container" id="page-content">
    <div class="padding">
        <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
 
                  <div class="owl-carousel">
                    <div class="item">
                    I strongly recommend st paul coaching center for licenseing exams like DHA, HAAD because of their excellent service and rendering topnotching classes, study materials and Mock exams. Thank you Annmaria Mam and Reji mam for your since support.<br>
							 <b>Renu Thomas Sejo - India</b>
                    </div>
                    <div class="item">
                    Thank you so much st paul's coaching center for my success. I  passed qatar prometric becoz of the great class and coaching given by this centre, i  am really thankful to reji mam, jessy mam and divya mam those helped me to attain this success. Specially jessy miss who gave me support and confidence till my exams thank you so much everyone<br>
							  <b>Liza Renil - India</b>
                    </div>
                    <div class="item">
                    This coaching centre is the best option for DHA examination... good coaching nd excellent service...<br>
							  <b>Anna AnnaBaby - India</b>
                    </div>
                     <div class="item">
                     I am very glad to say that I have cleared my cbt exam with the help of st paul coaching centre.Thanks to everyone working here and a special thanks to renjimam ,who always try to provide us updated questions with answers in order to make our journey easy .<br>
							  <b>Shary Vinayan - India</b>
							  
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
            </div> 
    </div>
    <div id="tab-2">
    <div class=" page-container" id="page-content">
    <div class="padding">
        <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
 
                  <div class="owl-carousel">
                    <div class="item">
                    I am so happy that i cleared my CBT Exam in the first attempt itself. Thank you so much, Reji Madam, for your continuous support. I highly recommend St. Paul's Coaching centre Angamaly.<br>
							  <b>Anju Babu - India</b>
                    </div>
                    <div class="item">
                    I had few days of coaching with St.paul's coaching centre. But it much worth getting in touch with the institute. Especy, Reji mam was  very helpful in covering all the important aspects of exam and gaining more confidence before appearing for the examination. She took a lot of efforts for the sake of each and every student and paying special attention for our doubts and ensuring that the materials are completed. Repeated coaching was also given in the important areas and according to students interest. Thank you so much to Reji mam for helping to get through the exam and relocating to UK.<br>
							  <b>christy I - India</b>
                    </div>
                    <div class="item">
                    Excellent coaching centre...No other words to say actually...My heartful gratitude to the whole team , for your incredible support and guidance to clear my exam... Special thanks to Reji mam , Jessy Mam and Divya mam...<br>
							  <b>Aswathy Das - India</b>
                    </div>
                     <div class="item">
                     I am Rameeza Musthafa NK recent DHA candidate i would like to give thanks to all st pauls team especially Reji mam & Ann mam for their effort and support & making a way to fullfill our dreams I strongly recommend this institute for giving wings to your dreams<br>
							  <b>Jilu Shaju - India</b>
							  
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
    </div>
  </div>
</div>
</div>
  </div>

  <div class="pad_bottom_30"></div>

<div class="container">
    <div class="card" style="padding:20px">
    <div style="border-bottom:solid 1px #ddd;">
    <h2 style="font-size:16px"><b>OUR FACILITIES</b></h2>
    </div>

      <br>
      <div class=" page-container" id="page-content">
    <div class="padding">
        <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="">
                <div class="card-body">
 
                  <div class="owl-carousel">
                    <div class="item">
                    <figure> <img class="first-img" src="imgs/facilities.jpg" alt=""> <img class="hover-img" src="imgs/facilities.jpg" alt=""></figure>  
                    </div>
                    <div class="item">
                    <figure> <img class="first-img" src="imgs/facilities2.jpg" alt=""> <img class="hover-img" src="imgs/facilities2.jpg" alt=""></figure>  
                    </div>
                    <div class="item">
                    <figure> <img class="first-img" src="imgs/facilities3.jpg" alt=""> <img class="hover-img" src="imgs/facilities3.jpg" alt=""></figure>  
                    </div>
                     <div class="item">
                     <figure> <img class="first-img" src="imgs/facilities4.jpg" alt=""> <img class="hover-img" src="imgs/facilities4.jpg" alt=""></figure>  
							  
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
            </div> 
    </div>
</div>

<div class="pad_bottom_30"></div>


<div class="container">

<h2 style="color:#036099"><b>OUR ACHIEVEMENTS</b></h2>


<br>

<div style="background-color:#F8F8F8;padding:20px">
<!-- slider starts -->
<div class=" page-container" id="page-content">
    <div class="padding">
        <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
 
                  <div class="owl-carousel">
                    <?php
                    $sql="SELECT * FROM `achievements`  order by `id` DESC LIMIT 6 ";
                    $query = mysqli_query($conn, $sql);

                    while ($data = mysqli_fetch_array($query)) {
                    
                    ?>
                    <div class="item">
                    <div class="text-center"> <a href="achievements/<?php echo $data['image'] ?>" target=_blank><img src="achievements/<?php echo $data['image'] ?>" alt="achievements"></a> <br> <br>
		<h6 style="font-family: 'Barlow', sans-serif !important;font-size:12px"> <?php echo $data['title']; ?></h6>
    </div></div>
    <?php  } ?>

                   
                   
                     
                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
            </div> 
            <!-- slider ends -->
  </div>


</div>


<div class="pad_bottom_30"></div>
  
<?php include('footer.php');?>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // Show the first tab by default
$('.tabs-stage #tab-1').hide();
$('.tabs-stage #tab-2').hide();
$('.tabs-stage div:first').show();
$('.tabs-nav li:first').addClass('tab-active');

// Change tab class and display content
$('.tabs-nav a').on('click', function(event){
  event.preventDefault();
  $('.tabs-nav li').removeClass('tab-active');
  $(this).parent().addClass('tab-active');
  $('.tabs-stage #tab-1').hide();
  $('.tabs-stage #tab-2').hide();
  $($(this).attr('href')).show();
});
</script>

<script>
  
$(document).ready(function() {
 
 $(".owl-carousel").owlCarousel({

     autoPlay: 3000,
     items : 3,
     itemsDesktop : [1199,3],
     itemsDesktopSmall : [979,3],
     center: true,
     nav:true,
     loop:true,
     responsive: {
       600: {
         items: 1
       }
     }
    
    
 });

 $(".owl-carousellol").owlCarousel({

autoPlay: 3000,
items : 2,
itemsDesktop : [1199,3],
itemsDesktopSmall : [979,3],
center: true,
nav:true,
loop:true,
responsive: {
  600: {
    items: 1
  }
}


});

});
</script>

<script>
  
  var sliderContent = document.querySelector('.slider-content');
  var slideItems = sliderContent.querySelectorAll('.hider');
  var currentSlide = 0;

  function slideNext() {
    slideItems[currentSlide].style.display = 'none';
    currentSlide = (currentSlide + 2) % slideItems.length;
    slideItems[currentSlide].style.display = 'block';
  }

  // Start the sliding animation
  setInterval(slideNext, 3000); // Adjust the duration (in milliseconds) between slides as needed
</script>


<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

<!-- font -->
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css' >
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200&display=swap" rel="stylesheet">
<!-- font -->


</body>
</html>