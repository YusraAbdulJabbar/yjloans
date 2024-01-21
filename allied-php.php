<?php include('config.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="banks-css.css">
  <style type="text/css">
    body {}

    h2,
    h3,
    span {
      color: #21618C;
    }

    span {
      font-size: 15px;
    }


    #header1 {
      width: 100%;
      height: auto;
      background: #67989A;
      color: #fff;
      font-family: Merriweather and Judson;
      transform: translate(0%, 0%);
      margin-top: 40px;

    }



    ol {
      counter-reset: li;
      list-style: none;
      padding: 0;
      text-shadow: 0 1px 0 rgba(255, 255, 255, .5);
    }

    ol a {
      position: relative;
      display: block;
      padding: .4em .4em .4em .8em;
      margin: .5em 0 .5em 2.5em;
      background: #f8f8ff;
      color: black;
      text-decoration: none;
      transition: all .3s ease-out;
    }

    ol a:hover {
      background: #DCDDE1;
    }

    ol a:before {
      content: counter(li);
      counter-increment: li;
      position: absolute;
      left: -2.5em;
      top: 50%;
      margin-top: -1em;
      background: #67989A;
      height: 2em;
      width: 2em;
      line-height: 2em;
      text-align: center;
      font-weight: bold;
      color: #fff;
    }

    ol a:after {
      position: absolute;
      content: "";
      border: .5em solid transparent;
      left: -1em;
      top: 50%;
      margin-top: -.5em;
      transition: all .3s ease-out;
    }

    ol a:hover:after {
      left: -.5em;
      border-left-color: #236467;
    }

    #subheader {
      background: #236467;
      height: 20px;
      width: 100%;
      color: white;
      margin-top: 5px;

    }

    *,
    *:before,
    *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }



    table {
      max-width: 960px;
      margin: 10px auto;
      width: 100%;
    }

    caption {
      font-size: 1.6em;
      font-weight: 400;
      padding: 10px 0;
    }

    thead th {
      font-weight: 300;
      background: #67989A;
      color: white;
      font-weight: bold;
    }

    tr {
      background: #f8f8ff;
      border-bottom: 2px solid #67989A;
      margin-bottom: 5px;
    }


    th,
    td {
      text-align: left;
      padding: 15px;
      font-weight: 300;
    }

    tfoot tr {
      background: none;
    }

    tfoot td {
      padding: 10px 2px;
      font-size: 0.8em;
      font-style: italic;
      color: #8a97a0;
    }
  </style>


</head>

<body>

  <?php

  myHeader();

  ?>
  <div id="subheader" style="margin-top:12px;">
    <h6 style="padding-left:20px">Allied Bank</h6>
  </div>



  <br><br>


  <header id="header1">

  </header>
  <div id="subheader" style="margin-top:12px;">
    <h6 style="padding-left:20px">Allied Bank</h6>
  </div>


  <header id="header1">

  </header>




  <section>

    <caption style="color: #236467">
      <center>
        <h2>Mera Pakistan Mera Ghar Scheme</h2>
        <h3 style="font-weight: 300;">Naya Pakistan Housing & Development Authority (NAPHDA)</h3>
      </center>
    </caption>


    <h3>&nbsp&nbspProduct Features</h3>
    <table>

      <thead>
        <tr>
          <th scope="col">TIERS</th>
          <th scope="col">Size of Housing Unit</th>
          <th scope="col">Maximum Price of Housing Unit</th>
          <th scope="col">Maximum Financing</th>
          <th scope="col">Minimum Contribution from Customer</th>
        </tr>

      </thead>

      <tbody>
        <tr>
          <?php
          $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
          $sql = " SELECT * FROM bnaphda where bid=15";
          $result = $link->query($sql);

          // LOOP TILL END OF DATA
          while ($rows = $result->fetch_assoc()) {
            ?>
          <tr>
            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
            <td style="background: #67989A;
  color: white; font-weight: bold;">TIER-1</td>
            <td>
              <?php echo $rows['t1size']; ?>
            </td>
            <td>
              <?php echo $rows['t1price']; ?>
            </td>
            <td>
              <?php echo $rows['t1finance']; ?>
            </td>
            <td>
              <?php echo $rows['t1contribute']; ?>
            </td>

          </tr>
          <tr>
            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
            <td style="background: #67989A;
  color: white; font-weight: bold;">TIER-2</td>
            <td>
              <?php echo $rows['t2size']; ?>
            </td>
            <td>
              <?php echo $rows['t2price']; ?>
            </td>
            <td>
              <?php echo $rows['t2finance']; ?>
            </td>
            <td>
              <?php echo $rows['t2contribute']; ?>
            </td>

          </tr>
          <tr>
            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
            <td style="background: #67989A;
  color: white; font-weight: bold"> TIER-3</td>
            <td>
              <?php echo $rows['t3size']; ?>
            </td>
            <td>
              <?php echo $rows['t3price']; ?>
            </td>
            <td>
              <?php echo $rows['t3finance']; ?>
            </td>
            <td>
              <?php echo $rows['t3contribute']; ?>
            </td>

          </tr>
          <?php
          }
          ?>
        </tr>

      </tbody>
    </table>

    <br><br><br>

    <h3>&nbsp&nbspMarkup Rate</h3>
    <table>

      <thead>
        <tr>
          <th scope="col">Loan Category</th>
          <th scope="col">From Years 6 to 10</th>
          <th scope="col">From Years 10 to 15</th>
          <th scope="col">Tenor Exceeeding 15 Years</th>
        </tr>

      </thead>

      <tbody>
        <tr>
          <?php
          $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
          $sql = " SELECT * FROM tenor where tid=3";
          $result = $link->query($sql);

          // LOOP TILL END OF DATA
          while ($rows = $result->fetch_assoc()) {
            ?>
          <tr>
            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
            <td style="background: #67989A; color: white; font-weight: bold;">TIER-1</td>
            <td>
              <?php echo $rows['t1_5']; ?>
            </td>
            <td>
              <?php echo $rows['t1_10']; ?>
            </td>
            <td>
              <?php echo $rows['t1_15']; ?>
            </td>


          </tr>
          <tr>
            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
            <td style="background: #67989A; color: white; font-weight: bold;">TIER-2</td>
            <td>
              <?php echo $rows['t2_5']; ?>
            </td>
            <td>
              <?php echo $rows['t2_10']; ?>
            </td>
            <td>
              <?php echo $rows['t2_15']; ?>
            </td>


          </tr>
          <tr>
            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
            <td style="background: #67989A;
  color: white; font-weight: bold"> TIER-3</td>
            <td>
              <?php echo $rows['t3_5']; ?>
            </td>
            <td>
              <?php echo $rows['t3_10']; ?>
            </td>
            <td>
              <?php echo $rows['t3_15']; ?>
            </td>

          </tr>
          <?php
          }
          ?>
        </tr>

      </tbody>
    </table>


    <br><br>


    <div>
      <h3>&nbsp&nbspEligibility Criteria</h3>
      <p>&nbsp&nbspYou are eligible for NAPHDA from Allied Bank if:</p>


      <?php
      $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
      $sql = " SELECT * FROM criteria where eid=4";
      $result = $link->query($sql);

      // LOOP TILL END OF DATA
      while ($rows = $result->fetch_assoc()) {
        ?>

        <ol>

          <li class=""><a href="#">
              <?php echo $rows['e1']; ?>
            </a></li>
          <li class=""><a href="#">
              <?php echo $rows['e2']; ?>
            </a></li>
          <li class=""><a href="#">
              <?php echo $rows['e3']; ?>
            </a></li>
          <li class=""><a href="#">
              <?php echo $rows['e4']; ?>
            </a></li>
          <li class=""><a href="#">
              <?php echo $rows['e5']; ?>
            </a></li>
          <li class=""><a href="#">
              <?php echo $rows['e6']; ?>
            </a></li>
          <li class=""><a href="#">
              <?php echo $rows['e7']; ?>
            </a></li>



        </ol>
        <?php
      }
      ?>
      </ol>
    </div>

    <div>

      <h3>&nbsp&nbspDocuments Required</h3>
      <p>&nbsp&nbspFollowing basic documents are required to apply for car loan through Allied Car Finance:</p>


      <ol>
        <li class=""><a href="#">Last 06 months’ Bank Statement</a></li>
        <li class=""><a href="#">Copy of CNIC/NICOP/ Smart NIC</a></li>
        <li class=""><a href="#">2 recent passport size photographs</a></li>
        <li class=""><a href="#">Last two months’ Salary Slip or Salary Certificate, clearly indicating gross and net
            salary with details of all deductions</a></li>
        <li class=""><a href="#">Complete and duly signed “Application Form” with signature verification from
            branch.</a></li>


      </ol>

    </div>
  </section>


</body>

</html>