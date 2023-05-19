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
    .hidden {
  display: none;
}

.pagination-container {
  width: calc(100% - 2rem);
  display: flex;
  align-items: center;
  position: ;
  bottom: 0;
  padding: 1rem 0;
  justify-content: center;
}

.pagination-number,
.pagination-button{
  font-size: 1.1rem;
  background-color: transparent;
  border: none;
  margin: 0.25rem 0.25rem;
  cursor: pointer;
  height: 2.5rem;
  width: 2.5rem;
  border-radius: .2rem;
}

.pagination-number:hover,
.pagination-button:not(.disabled):hover {
  background: #fff;
}

.pagination-number.active {
  color: #fff;
  background: #0085b6;
}
.sect{
text-align:left;
margin-bottom:10px;
border-top: 1px dashed #ccc;
padding:10px 0;
}
  </style>
    
</head>
<body>
<?php include('header.php');?>
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

<div class="breadcrumbs">
<div class="container">
<div class="row">
<div class="col-xs-12">
<ul>
<li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>»</span></li>
<li><strong>Feedback</strong></li>
</ul>
</div>
</div>
</div>
</div>
<br><br>
<div class="container">
    
<main>

<h2 class="barlow"><b>Our Students <span style="color:#DB2205;">Feedback</span></b></h2><br>
  <ul id="paginated-list" data-current-page="1" aria-live="polite">
<div class="row">
  <?php
  $sql = "SELECT * FROM `comments`  WHERE `status` = 1  order by `id` DESC   ";
$result=mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($result)) {
    $dbstartvalue = $data['star'];

?>

<div class="sect">
    
    <p class="barlow"><?php echo $data['description'] ?></p>
    <span  style="color:#fb5e78;" ><strong> 
            <?php if($dbstartvalue =='1'){ ?> <img src="star.png"/> 
            <?php } else if($dbstartvalue =='2'){ ?> <img src="star.png"/> <img src="star.png"/> 
            <?php } else if($dbstartvalue =='3'){ ?> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> 
            <?php } else if($dbstartvalue == '4') { ?> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/>
            <?php } else if($dbstartvalue == '5') { ?> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> <img src="star.png"/> <?php } ?>
            </strong></span>
            <strong style="color:#FC9989"><?php echo $data['name'] ?></strong>
</div>


<?php
}
  ?>
  </div>
  </ul>

  <div class="pagination-container">
    <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
      &lt;
    </button>

    <div id="pagination-numbers">

    </div>

    <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
      &gt;
    </button>
</div>
</main>
  
</div>



<div class="pad_bottom_30"></div>
  
<?php include('footer.php');?>

<script>
  const paginationNumbers = document.getElementById("pagination-numbers");
const paginatedList = document.getElementById("paginated-list");
const listItems = paginatedList.querySelectorAll(".sect");
const nextButton = document.getElementById("next-button");
const prevButton = document.getElementById("prev-button");

const paginationLimit = 16;
const pageCount = Math.ceil(listItems.length / paginationLimit);
let currentPage = 1;

const disableButton = (button) => {
  button.classList.add("disabled");
  button.setAttribute("disabled", true);
};

const enableButton = (button) => {
  button.classList.remove("disabled");
  button.removeAttribute("disabled");
};

const handlePageButtonsStatus = () => {
  if (currentPage === 1) {
    disableButton(prevButton);
  } else {
    enableButton(prevButton);
  }

  if (pageCount === currentPage) {
    disableButton(nextButton);
  } else {
    enableButton(nextButton);
  }
};

const handleActivePageNumber = () => {
  document.querySelectorAll(".pagination-number").forEach((button) => {
    button.classList.remove("active");
    const pageIndex = Number(button.getAttribute("page-index"));
    if (pageIndex == currentPage) {
      button.classList.add("active");
    }
  });
};

const appendPageNumber = (index) => {
  const pageNumber = document.createElement("button");
  pageNumber.className = "pagination-number";
  pageNumber.innerHTML = index;
  pageNumber.setAttribute("page-index", index);
  pageNumber.setAttribute("aria-label", "Page " + index);

  paginationNumbers.appendChild(pageNumber);
};

const getPaginationNumbers = () => {
  for (let i = 1; i <= pageCount; i++) {
    appendPageNumber(i);
  }
};

const setCurrentPage = (pageNum) => {
  currentPage = pageNum;

  handleActivePageNumber();
  handlePageButtonsStatus();
  
  const prevRange = (pageNum - 1) * paginationLimit;
  const currRange = pageNum * paginationLimit;

  listItems.forEach((item, index) => {
    item.classList.add("hidden");
    if (index >= prevRange && index < currRange) {
      item.classList.remove("hidden");
    }
  });
};

window.addEventListener("load", () => {
  getPaginationNumbers();
  setCurrentPage(1);

  prevButton.addEventListener("click", () => {
    setCurrentPage(currentPage - 1);
  });

  nextButton.addEventListener("click", () => {
    setCurrentPage(currentPage + 1);
  });

  document.querySelectorAll(".pagination-number").forEach((button) => {
    const pageIndex = Number(button.getAttribute("page-index"));

    if (pageIndex) {
      button.addEventListener("click", () => {
        setCurrentPage(pageIndex);
      });
    }
  });
});

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