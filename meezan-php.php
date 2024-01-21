<?php include('config.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="banks-css.css">
    <style type="text/css">
    </style>
</head>

<body>
    <?php
    myHeader();

    ?>
    <div id="subheader" style="margin-top:12px;">
        <h6 style="padding-left:20px;">Meezan Bank</h6>
    </div>



    <br><br>


    <header id="header1">

    </header>
    <div id="subheader">
        <h6 style="padding-left:20px">Meezan Bank</h6>
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
                    $sql = " SELECT * FROM bnaphda where bid=14 ";
                    $result = $link->query($sql);

                    // LOOP TILL END OF DATA
                    while ($rows = $result->fetch_assoc()) {
                        ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                        <td style="background: #67989A; color: white; font-weight: bold;">TIER-1</td>
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
                    $sql = " SELECT * FROM tenor where tid=1 ";
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
                        <td style="background: #67989A;
  color: white; font-weight: bold;">TIER-2</td>
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



        <div>


            <h3>&nbsp&nbspEligibility Criteria</h3>
            <p>You are eligible for NAPHDA from Meezan Bank if:</p>


            <?php
            $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
            $sql = " SELECT * FROM criteria where  eid=2";
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


                </ol>
                <?php
            }
            ?>
            </ol>
        </div>



        <h3>&nbsp&nbspDocuments Required</h3>
        <p>Following basic documents are required to apply for car loan through Allied Car Finance:</p>

        <h4>Salaried Individuals</h4>
        <ol>
            <li class=""><a href="#">Latest employment certificate including the date of joining</a></li>
            <li class=""><a href="#">Last six-month credited salary bank statement</a></li>
            <li class=""><a href="#">Nominee CNIC copy</a></li>
            <li class=""><a href="#">Name of employer’s HR representative with mailing address</a></li>
            <li class=""><a href="#">Credit Bureau Report of stay country</a></li>
        </ol>

        <h4>Businessman</h4>

        <ol>
            <li class=""><a href="#">Valid business proof</a></li>
            <li class=""><a href="#">Last six-month verified bank statement through embassy</a></li>
            <li class=""><a href="#">Nominee CNIC copy</a></li>
            <li class=""><a href="#">Credit Bureau Report of stay country</a></li>
            <li class=""><a href="#">In case of remittances income, last six months bank statement of remitter would be
                    required</a></li>
        </ol>

    </section>

</body>

</html>