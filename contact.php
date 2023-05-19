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
    <style>
        .contact{
            border:1px solid #ccc;
            padding:20px 20px;
        }
    </style>
    
</head>
<body>
<?php include('header.php');?>


<div class="breadcrumbs">
<div class="container">
<div class="row">
<div class="col-xs-12">
<ul>
<li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>»</span></li>
<li><strong>Get in Touch</strong></li>
</ul>
</div>
</div>
</div>
</div>
<br>
<div class="container">

<div class="contact">
<div class="row">
              <div class="col-xs-12 col-sm-6" id="contact_form_map" style="margin-bottom:20px">
                <h1 class="barlow" style="font-size:18px;text-transform:uppercase">Let ' s get in touch</h1><br>
                
                <ul class="store_info">
                  <li><i class="fa fa-home"></i>St.Paul's  Coaching Centre<br>
Kolenchery Tower,<br>
Near LF Hospital Entry Gate, <br> Angamaly, Ernakulam.<br><br>
</li>
                <li><i class="fa fa-phone"></i><span>91 9447104308</span></li>
                  <li><i class="fa-brands fa-whatsapp"></i><span>91 8089085309</span></li><br>
                  <li><i class="fa fa-envelope"></i><span><a href="mailto:paulscentre@gmail.com">paulscentre@gmail.com</a></span></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h3 class="barlow" style="font-size:18px;text-transform:uppercase">Make an enquiry</h3>
				
                <?php
                    if(isset($_GET['msg'])==1){
                        ?>  
                            <p class="barlow" style="color:green">Successfully Sent</p>
                        <?php
                    }
                ?>
				
                <form class="contact-form-box" method="post" action="contact-form-submission.php">
                  <div class="form-selector"><br>
                    <label class="barlow">Name</label><br>
                    <input type="text" class="form-control input-sm" name="message" id="name">
                  </div><br>
                  <div class="form-selector">
                    <label class="barlow">Email</label><br>
                    <input type="text" class="form-control input-sm" name="email" id="email">
                  </div><br>
                  <div class="form-selector">
                    <label class="barlow">Phone</label><br>
                    <input type="text" class="form-control input-sm" name="phone" id="phone">
                  </div><br>
                  <div class="form-selector">
                    <label class="barlow">Message</label><br>
                    <textarea class="form-control input-sm" rows="10" name="message" id="message"></textarea>
                  </div><br>
                  <div class="form-selector">
                    <button class="button" name="send" type="submit" value="Send"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                     </div>
                </form>
				
				
				
              </div>
            </div>
</div>

</div>

<div class="pad_bottom_30"></div>
  
<?php include('footer.php');?>



<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

<!-- font -->
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css' >
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200&display=swap" rel="stylesheet">
<!-- font -->


</body>
</html>