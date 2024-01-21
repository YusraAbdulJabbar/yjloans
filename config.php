<!DOCTYPE html>
<html>
<head>

    <title>YJLoans</title>
    
<!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    .navbar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 5px;
    margin-bottom:10px;
    
}

.navbar li a{
  color: white;
}

/*
headeer top
*/
.topbar{
  background-color: #67989A;
  padding: 10px;
  
}

.topbar .container .row {
  margin:-7px;
  padding:0;
}

.topbar .container .row .col-md-12 { 
  padding:0;
}

.topbar p{
  margin:0;
  display:inline-block;
  font-size: 13px;
  color: #f1f6ff;
}

.topbar p > i{
  margin-right:5px;
}
.topbar p:last-child{
  text-align:right;
} 

header .navbar {
    margin-bottom: 0;
}

.topbar li.topbar {
    display: inline;
    padding-right: 18px;
    line-height: 52px;
    transition: all .3s linear;
}

.topbar li.topbar:hover {
    color:#236467;
}

.topbar ul.info i {
    color: #ffffff;
    font-style: normal;
    margin-right: 8px;
    display: inline-block;
    position: relative;
    top: 4px;
}

.topbar ul.info li {
    float: right;
    padding-left: 30px;
    color: #ffffff;
    font-size: 13px;
    line-height: 44px;
}

.topbar ul.info i span {
    color: #ffffff;
    font-size: 13px;
    font-weight: 400;
    line-height: 50px;
    padding-left: 18px;
}

ul.social-network {
  border:none;
  margin:0;
  padding:0;
}

ul.social-network li {
  border:none;  
  margin:0;
}

ul.social-network li i {
  margin:0;
}

ul.social-network li {
    display:inline;
    margin: 0 5px;
    border: 0px solid #2D2D2D;
    padding: 5px 0 0;
    width: 32px;
    display: inline-block;
    text-align: center;
    height: 32px;
    vertical-align: baseline;
    color: #000;
}

ul.social-network {
  list-style: none;
  margin: 5px 0 10px -25px;
  float: right;
}

.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity, transform;
    transition: .3s ease-out;
    color: #fff;
}
a {
  color: white;
  text-decoration: none;
}

li {
    list-style-type: none;
}
.bg-image-full {
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
.bg-dark {
    background-color: #67989A!important;
}

.mx-background-top-linear {
    background: -webkit-linear-gradient(45deg, #236467 48%, #568082 48%);
    background: -webkit-linear-gradient(left, #236467 48%, #568082 48%);
    background: linear-gradient(45deg, #236467 52%, #67989A 48%);
}

#Contact-form{
	margin: 0px;
	padding: 0px;
	width: 100%;
	background: #67989A;
	color: #fff;
	height:auto;
	transform: translate(0%, 15%);
	border-bottom:40px solid  #67989A;

}

form{
	margin: 30px auto;
}

textarea.form-control {
    height: 135px;
   
}

.submit{
	width: 150px;
}

/*Footer*/
footer{
	background: #67989A;
	height: 80px;
	width: 100vw;

}

.brand-name {
	padding-top: 30px;
}

footer  .fa{
	font-size: 22px;
}
.social{
	padding-top: 30px;
}

.fa-space{
	padding-left: 20px;
}
/*Media Queries*/
@media (max-width: 460px){
	footer{
		height: 120px;
	}

	.social{
	padding-top: 10px;
	float: left;
	text-align: center;
}
}

#foot{
	width: 100%;
	height: 400px;
	transform: translate(0%,30%);
}



  </style>
</head>
<body>


  <?php 
  function myHeader()
  {
    echo'
    <!-- Navigation -->
<div class="fixed-top">
  <header class="topbar">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
  </header>
  
  
  
 <nav class="navbar navbar-expand-lg  mx-background-top-linear" > 
    <div class="container-fluid">
      <a class="navbar-brand" rel="nofollow" target="_blank" href="#" style="text-transform: capitalize; color: white; font-size:25px;"> <b>YJLoans</b> </a>
      
    <button class="navbar-toggler border-white " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon" ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll" >
<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
   
          <li class="nav-item active">
            <a class="nav-link" href="index.php">&nbsp&nbspHome
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#aboutloans">About</a>
          </li>
          
          
          
          <li class="nav-item">
            <a class="nav-link" href="define.php">Loan Terms</a>
          </li>
          
          <div class="dropdown">
    <button   class="btn dropdown-toggle" data-bs-toggle="dropdown" style="color: ghostwhite; border:none; text-transform: capitalize; padding-top:7px;"> 
      Calculators
    </button>
    <ul class="dropdown-menu" style="background: #236467;">
      <li><a class="dropdown-item" href="per-loan-cal-php.php">Loan Calculator</a></li>
      <li><a class="dropdown-item" href="car-xtra.php">Auto Loan Calculator</a></li>
      <li><a class="dropdown-item" href="mortgage-php.php">Mortgage Loan Calculator</a></li>
    </ul>
    
  </div>
 

          <div class="dropdown">
    <button   class="btn dropdown-toggle" data-bs-toggle="dropdown" style="color: ghostwhite; border:none; text-transform: capitalize; padding-top:7px;"> 
      Banks
    </button>
    <ul class="dropdown-menu" style="background: #236467;">
      <li><a class="dropdown-item" href="meezan-php.php">Meezan Bank</a></li>
      <li><a class="dropdown-item" href="allied-php.php">Allied Bank</a></li>
      <li><a class="dropdown-item" href="hbl-php.php">HBL</a></li>
       <li><a class="dropdown-item" href="faysal-php.php"> Faysal Bank</a></li>
    </ul>
    
  </div>

        
       <li class="nav-item">
            <a class="nav-link" href="index.php">Contact</a>
          </li>
         

        </ul>


        
      </div>
    </div>
  </nav>
</div>';
  }
 



function myFooter()
{
  echo'
  
  

<section id="Contact-form">
  <br>
         <div class="container">
        <div class="contact-header" align="center">
          <h2>Contact Form</h2>
          <p>Get in touch with us</p>
        </div>
        <!-- Form  -->
        <form action="data.php" method="POST">
       <section id="Contact-form" >
        <form >
          <div class="row" >
            <div class="col-md-4 col-sm-4">
                <h4 align="center"><strong>YJLoans</strong></h4>
                <p align="center"><strong>Address:</strong>  Abcd, Karachi,<br>Pakistan<br><br><strong>Contact:</strong> +91-123456987</p>
              </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="form-group">
                  <label for="exampleInputUsername">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputUsername" placeholder=" Enter Your Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmailId">Email-id</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmailId" placeholder="Enter email-id">
                </div>
                <div class="form-group">
                  <label for="exampleInputnumber">Mobile-no</label>
                  <input type="number" name="mobile_no" class="form-control" id="exampleInputnumber" placeholder="Enter 10 Digit Mobile-no ">
                </div>   
                
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="form-group">
                  <label for="exampleInputtext">Subject</label>
                  <input type="text" name="subject"class="form-control" id="exampleInputtext" placeholder="Enter Message title">
                </div>
                <div class="form-group">
                  <label for="inputMessage">Message</label>
                  <textarea  class="form-control" name="message" for="inputMessage" placeholder="Enter Your Message"></textarea>
                </div>
                <div>
                  <button type="submit" class="btn btn-md btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit Message</button>
                 
                </div>




    </form>
</div>



';
}
?>





</body>
</html>