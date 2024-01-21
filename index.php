<?php include('config.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="index-style-php-full.css">

  <link rel="shortcut icon"
    href="https://image.shutterstock.com/image-vector/alphabet-letters-initials-monogram-logo-260nw-2064319595.jpg" />


  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
  <title>
    YJLoans
  </title>
  <style type="text/css">
    @media only screen and (max-width: 350px) {
      #slide {

        height: 1500px;


      }
    }

    @media only screen and (max-width: 350px) {
      #about {

        height: 900px;
      }
    }


    @media only screen and (max-width: 350px) {
      .card-title {
        height: auto;

      }
    }

    @media only screen and (max-width: 350px) {
      #loans {

        height: 50px;


      }
    }


    @media only screen and (max-width: 350px) {
      .card2 {}
    }



    @media only screen and (max-width: 350px) {
      .card-deck {

        height: 50px;

        margin: -30px;

      }
    }

    @media only screen and (max-width: 350px) {
      #cards {

        height: 2000px;
      }
    }


    @media only screen and (max-width: 600px)and (min-width: 400px) {
      #slide {

        transform: translate(0%, 6%);
        height: auto;
        background: none;

      }
    }

    @media only screen and (max-width: 600px)and (min-width: 400px) {
      #about {

        height: auto;

      }
    }

    @media only screen and (max-width: 600px)and (min-width: 400px) {
      #loans {

        height: auto;
        font-size: 15px;
      }
    }

    @media only screen and (max-width: 400px)and (min-width: 350px) {
      #about {

        height: auto;

      }
    }


    @media only screen and (max-width: 400px)and (min-width: 350px) {
      #loans {

        height: auto;
        font-size: 7px;
        transform: translate(10%, 100%);
        padding: 10px;

      }
    }

    @media only screen and (max-width: 600px)and (min-width: 400px) {
      .card-deck {

        height: auto;

      }
    }

    @media only screen and (max-width: 600px)and (min-width: 400px) {
      .card-title {


        font-size: 13px;

      }
    }


    @media only screen and (max-width: 600px)and (min-width: 400px) {
      #cards {
        transform: translate(0%, 5%);
        height: 1800px;
      }
    }


    @media only screen and (max-width: 800px)and (min-width: 600px) {
      #slide {

        transform: translate(0%, 5%);
        height: 3400px;


      }
    }

    @media only screen and (max-width: 800px)and (min-width: 600px) {
      #about {

        height: 470px;

      }
    }

    @media only screen and (max-width: 800px)and (min-width: 600px) {
      .card-title {}
    }

    @media only screen and (max-width: 800px) and (min-width: 600px) {
      .card-deck {

        height: 50px;
        margin: -30px;
      }
    }

    @media only screen and (max-width: 800px)and (min-width: 600px) {
      #cards {
        transform: translate(0%, 0%);
        height: 1000px;
      }
    }

    @media only screen and (max-width: 1000px)and (min-width: 800px) {
      #slide {

        transform: translate(0%, 5%);
        height: 3800px;


      }
    }

    @media only screen and (max-width: 1000px)and (min-width: 800px) {
      #about {

        height: 430px;

      }
    }

    @media only screen and (max-width: 1000px)and (min-width: 800px) {
      .card-title {}
    }

    @media only screen and (max-width: 1000px) and (min-width: 800px) {
      .card-deck {

        height: 50px;
        margin: -30px;
      }
    }

    @media only screen and (max-width: 1000px)and (min-width: 800px) {
      #cards {
        transform: translate(0%, 0%);
        height: 1000px;
      }
    }
  </style>

</head>

<body>




  <?php

  myHeader();

  ?>
  <br><br><br>
  <div id="slide">



    <!-- Gallery -->
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img
          src="https://images.unsplash.com/photo-1603039078583-13468e835b01?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
          class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

        <img
          src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
          class="w-100 shadow-1-strong rounded mb-4" height="280px" alt="Wintry Mountain Landscape" />
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <img
          src="https://images.unsplash.com/photo-1559067341-04a52c7d06d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
          class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

        <img src="https://cdn.pixabay.com/photo/2020/06/06/13/15/mortgage-5266520_1280.jpg"
          class="w-100 shadow-1-strong rounded mb-4" height="320px" alt="Boat on Calm Water" />
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <img
          src="https://media.istockphoto.com/photos/person-holds-a-smartphone-with-mobile-banking-icons-projection-picture-id1304484797?k=20&m=1304484797&s=612x612&w=0&h=Xe1Rn01y7CPyMiQdtii9j8WttQuv5HB0pQhnJ56vyLA="
          class="w-100 shadow-1-strong rounded mb-4" height="280px" alt="Waves at Sea" />

        <img
          src="https://images.pexels.com/photos/4386327/pexels-photo-4386327.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
      </div>
    </div>
    <!-- Gallery -->
  </div>
  <div id="aboutloans">
    <div id="about">


      <h1 id="heading">About Us</h1>
      <div>
        <center>
          <p style="text-align:center">
            Welcome to YJLoans. Sounds impressive doesn’t it? Not the big part,<br> but how we help so many people while
            being owned by those very<br> same people. It sounds good, it feels good and it is good.
            We also<br> have more freedom to focus on our priorities. At Great YJLoans<br> we’re thinking big, going for
            gold and aiming for nothing <br>less than to help all Pakistanis own their own homes.<br>
            We also know that no two customers are the same, so we have <br>created some pretty clever products that
            match the many ways they now <br>live and work. Real world solutions for real financial security.
          </p>
        </center>
      </div>
    </div>

    <div id="loans" style="width:90%; text-align :center;">

      <div class="card-deck">
        <div class="card2">
          <img class="card-img-top"
            src="https://cdn2.iconfinder.com/data/icons/leto-loan-debt/64/loan_peer_to_peer_loan_p2p_personal_lending-512.png"
            width="100px " alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Personal Loan</h4>
          </div>
        </div>

        <div class="card2">
          <img class="card-img-top"
            src="https://cdn3.iconfinder.com/data/icons/personal-business-finance-set-2-1/64/b-61-256.png"
            width="100px " alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Car Loan</h4>
          </div>
        </div>
        <div class="card2">
          <img class="card-img-top"
            src="https://cdn0.iconfinder.com/data/icons/leto-insurance-1/64/house_hand_insurance_protection-1024.png"
            width="100px " alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">House Loan</h4>
          </div>
        </div>
        <div class="card2">
          <img class="card-img-top"
            src="https://cdn2.iconfinder.com/data/icons/leto-loan-debt/64/loan_home_house_mortgage_loan-256.png"
            width="90px " alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Mortgage Loan</h4>
          </div>
        </div>
        <div class="card2">
          <img class="card-img-top"
            src="https://cdn1.iconfinder.com/data/icons/credit-loan-color-filled/300/114235792-1-512.png" width="100px "
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Student Loan</h4>
          </div>
        </div>
      </div>
    </div>
    <center>

      <div id="cards">
        <h2 id="heading">Banking that suits you better</h2>
        <?php
        $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
        $sql = " SELECT * FROM bnaphda where bid=14";
        $result = $link->query($sql);

        // LOOP TILL END OF DATA
        while ($rows = $result->fetch_assoc()) {
          ?>
          <div class="card" style="width: 18rem; ">
            <img class="card-img-top"
              src="https://mir-s3-cdn-cf.behance.net/projects/404/f5142a121708311.Y3JvcCwxMzgwLDEwODAsMjcwLDA.jpg"
              alt="Card image cap" width="100px" height="170px">
            <!-- <img class="card-img-top"  alt="Card image cap" width="70px" height="170px"> -->
            <div class="card-body">
              <h4 class="card-title" style="text-align:center; color: #21618C">
                <?php echo $rows['btitle']; ?>
              </h4>
              <p class="card-text">
                <?php echo $rows['binfo']; ?>
              </p>

              <a href="meezan-php.php" class="fa fa-chevron-right" aria-hidden="true"
                style="color:  #85C1E9; float: right; text-decoration: none;"> &nbsp &nbsp &nbsp &nbsp</a>
            </div>
          </div>
          <?php
        }
        ?>
        <?php
        $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
        $sql = " SELECT * FROM bnaphda where bid=15";
        $result = $link->query($sql);

        // LOOP TILL END OF DATA
        while ($rows = $result->fetch_assoc()) {
          ?>
          <div class="card" style="width: 18rem; ">

            <img class="card-img-top" src="https://load.pk/wp-content/uploads/2019/12/Allied-Bank.jpg"
              alt="Card image cap" width="100px" height="170px">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center; color: #21618C">
                <?php echo $rows['btitle']; ?>
              </h4>
              <p class="card-text">
                <?php echo $rows['binfo']; ?>
              </p>

              <a href="<?php echo $rows['blink']; ?>" class="fa fa-chevron-right" aria-hidden="true"
                style="color:  #85C1E9; float: right; text-decoration: none;"> &nbsp &nbsp &nbsp &nbsp</a>
            </div>
          </div>
          <?php
        }
        ?>
        <?php
        $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
        $sql = " SELECT * FROM bnaphda where bid=16";
        $result = $link->query($sql);

        // LOOP TILL END OF DATA
        while ($rows = $result->fetch_assoc()) {
          ?>
          <div class="card" style="width: 18rem; ">

            <img class="card-img-top" src="https://dailytimes.com.pk/assets/uploads/2020/06/22/HBL-1280x720.jpg"
              alt="Card image cap" width="100px" height="170px">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center; color: #21618C">
                <?php echo $rows['btitle']; ?>
              </h4>
              <p class="card-text">
                <?php echo $rows['binfo']; ?>
              </p>

              <a href="hbl-php.php" class="fa fa-chevron-right" aria-hidden="true"
                style="color:  #85C1E9; float: right; text-decoration: none;"> &nbsp &nbsp &nbsp &nbsp</a>
            </div>
          </div>
          <?php
        }
        ?>
        <?php
        $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
        $sql = " SELECT * FROM bnaphda where bid=17";
        $result = $link->query($sql);

        // LOOP TILL END OF DATA
        while ($rows = $result->fetch_assoc()) {
          ?>
          <div class="card" style="width: 18rem; ">
            <img class="card-img-top" src="https://www.ravimagazine.com/wp-content/uploads/2015/10/faysal-bank1.png"
              alt="Card image cap" alt="Card image cap" width="100px" height="170px">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center; color: #21618C">
                <?php echo $rows['btitle']; ?>
              </h4>
              <p class="card-text">
                <?php echo $rows['binfo']; ?>
              </p>

              <a href="faysal-php.php" class="fa fa-chevron-right" aria-hidden="true"
                style="color:  #85C1E9; float: right; text-decoration: none;"> &nbsp &nbsp &nbsp &nbsp</a>
            </div>
          </div>
          <?php
        }
        ?>

    </center>
  </div>


  <?php

  myFooter();

  ?>
</body>

</html>