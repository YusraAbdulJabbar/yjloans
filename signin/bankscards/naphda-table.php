<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Information</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/normalize.css">
  <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">

  <style type="text/css">
    thead {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.8em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      margin-left: 100px;
      width: 60%;

    }

    thead tr {
      background-color: #2980B9;
      color: #ffffff;
      text-align: left;
    }

    th,
    td {
      padding: 5px 10px;
    }

    tbody tr {
      border-bottom: 1px solid #dddddd;
    }

    tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
    }

    tbody tr:last-of-type {
      border-bottom: 2px solid #2980B9;
    }

    tbody tr.active-row {
      font-weight: bold;
      color: #2980B9;
    }
  </style>
</head>

<body>

  <table>
    <caption style="color: #236467">
      <h3>Naya Pakistan Housing & Development Authority (NAPHDA) details of Banks</h3>
    </caption>
    <thead>





      <tr>
        <th scope="col">Bank ID</th>
        <th scope="col">Banks</th>
        <th scope="col">Banks details</th>
        <th scope="col">T1 Size of Housing Unit</th>
        <th scope="col">T1 Maximum Price of Housing Unit</th>
        <th scope="col">T1 Maximum Financing</th>
        <th scope="col">T1 Minimum Contribution from Customer</th>
        <th scope="col">T2 Size of Housing Unit</th>
        <th scope="col">T2 Maximum Price of Housing Unit</th>
        <th scope="col">T2 Maximum Financing</th>
        <th scope="col">T2 Minimum Contribution from Customer</th>
        <th scope="col">T3 Size of Housing Unit</th>
        <th scope="col">T3 Maximum Price of Housing Unit</th>
        <th scope="col">T3 Maximum Financing</th>
        <th scope="col">T3 Minimum Contribution from Customer</th>
        <th scope="col">Eligibility Criteria</th>
        <th scope="col">Image of bank</th>
        <th scope="col">Links of bank</th>
        <th scope="col">Bank Status </th>
        <th scope="col">Action </th>


      </tr>

    </thead>
    <tfoot></tfoot>

    <tbody>
      <tr>
        <?php
        $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
        $sql = " SELECT * FROM bnaphda where bstatus = 1";
        $result = $link->query($sql);

        // LOOP TILL END OF DATA
        while ($rows = $result->fetch_assoc()) {
          ?>
        <tr>
          <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
          <td scope="col">
            <?php echo $rows['bid']; ?>
          </td>
          <td scope="col">
            <?php echo $rows['btitle']; ?>
          </td>
          <td scope="col">
            <?php echo $rows['binfo']; ?>
          </td>
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
          <td>
            <?php echo "<div><img src='uploads/b" . $rows['bid'] . ".jpg'></div>"; ?>
          </td>
          <td>
            <?php echo $rows['blink']; ?>
          </td>
          <td>
            <?php echo $rows['bstatus']; ?>
          </td>

          <td><a href="naphda-update.php?bid=<?php echo $rows['bid']; ?>">Edit</a>
            <a href="naphda-del.php?bid=<?php echo $rows['bid']; ?>">Delete</a>
            <a href="naphda-vieweach.php?bid=<?php echo $rows['bid']; ?>">View</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </tr>

    </tbody>
  </table>

</body>

</html>