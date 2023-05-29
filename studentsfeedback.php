<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css3/style.css">
    <link rel="stylesheet" href="css/style.css">
 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php include('header.php');?>

<div class="breadcrumbs">
<div class="container">
<div class="row">
<div class="col-xs-12">
<ul>
<li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
<li><strong>Feedback</strong></li>
</ul>
</div>
</div>
</div>
</div>
<!-- Breadcrumbs End --> 
  
  
<!-- Main Container -->
  
<div class="main container">

<div class="about-page">
<div class="col-xs-12 col-sm-12 col-lg-12"> 


<h1 class="barlow">Post Your Feedback</h1><br><br>



        <form id="frm" class="recaptchaForm" >
<div class="form-group">
<label for="email">Name *</label>
<input  type="text" class="form-control" placeholder="Enter Name" id="name"  name="name" required>
</div>
<br>
<div class="form-group">
<label for="email">Email </label>
<input type="email" class="form-control" required placeholder="Enter email" id="email" name="email">
</div>
<br>
<div class="form-group">
<label for="email">Description *</label>
<textarea name="message" class="form-control" id="comm" cols="15" rows="6"  required placeholder="Comment"></textarea>
</div>
<br>
<script type="text/javascript">
function getValue() {
  var value = document.querySelector('input[name="star"]:checked').value;
  console.log(value);
}
</script>
<div class="row">
<div class="col-md-2">
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input" id="customRadio" name="star" value="1"  >
<label class="custom-control-label" for="customRadio">1 <img src="star.png"/> </label>
</div></div>


<div class="col-md-2">
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input" id="customRadio2" name="star" value="2" >
<label class="custom-control-label" for="customRadio2">2 <img src="star.png"/> </label>
</div></div>


<div class="col-md-2">
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input" id="customRadio3" name="star" value="3" >
<label class="custom-control-label" for="customRadio3">3 <img src="star.png"/> </label>
</div></div>

<div class="col-md-2">
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input" id="customRadio4" name="star" value="4" checked>
<label class="custom-control-label" for="customRadio4">4 <img src="star.png"/>  </label>
</div></div>

<div class="col-md-2">
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input" id="customRadio5" name="star" value="5" >
<label class="custom-control-label" for="customRadio5">5 <img src="star.png"/> </label>
</div></div>
</div>
<br><br><br>
<div class="g-recaptcha" data-sitekey="6LcrXeIiAAAAAO3u1nZrTb4NQ-dOhLql72-dt43I"></div><br>

<button id="submit" name="send" type="submit" value="Send" class="btn btn-primary iq-mt-20">Send</button>

</form>
      
	  
 <!---------Model END------------------------------------->  
</div></div></div>


<br>

<div class="pad_bottom_30"></div>



<script>
    $(document).ready(function(){
       $(".recaptchaForm").on('submit',function(event){
          var recaptcha = $("#g-recaptcha-response").val();
      var name =  $("input[name=name]").val();
      var email =  $("input[name=email]").val();
     var msg = $("#comm").val();
      var star =  $('input[name="star"]:checked').val();
          if(recaptcha === ""){
              event.preventDefault();
              alert("Please check recaptcha");
          }else{
          event.preventDefault();
          $.post("comment-form-submission.php",{
              "secret":"6LcrXeIiAAAAABwXM8PPZ3WwNCAbhc8-11Cv_8rr",
              "response":recaptcha,
              "name":name,
              "email":email,
              "star":star,
              "message":msg
      
                      },function(ajaxResponse){
              console.log(ajaxResponse);
           alert(ajaxResponse);
          });
       }
       });
    });
</script>

  
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