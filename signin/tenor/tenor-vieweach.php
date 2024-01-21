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
      <h3>Financing Tenor</h3>
    </caption>
    <thead>





      <tr>
        <th scope="col">ID</th>
        <th scope="col">Banks</th>
        <th scope="col">T1 first 5 years</th>
        <th scope="col">T1 next 5 years</th>
        <th scope="col">T1 exceed 10 years</th>
        <th scope="col">T2 first 5 years</th>
        <th scope="col">T2 next 5 years</th>
        <th scope="col">T2 exceed 10 years</th>
        <th scope="col">T3 first 5 years</th>
        <th scope="col">T3 next 5 years</th>
        <th scope="col">T3 exceed 10 years</th>

        <th scope="col"> Status </th>
        <th scope="col">Action </th>


      </tr>

    </thead>
    <tfoot></tfoot>

    <tbody>
      <tr>
        <?php
        $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
        $sql = " SELECT * FROM tenor where tstatus = 1 and tid= " . $_GET['tid'] . ";";
        $result = $link->query($sql);

        // LOOP TILL END OF DATA
        while ($rows = $result->fetch_assoc()) {
          ?>
        <tr>
          <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
          <td scope="col">
            <?php echo $rows['tid']; ?>
          </td>
          <td scope="col">
            <?php echo $rows['bank']; ?>
          </td>
          <td>
            <?php echo $rows['t1_5']; ?>
          </td>
          <td>
            <?php echo $rows['t1_10']; ?>
          </td>
          <td>
            <?php echo $rows['t1_15']; ?>
          </td>
          <td>
            <?php echo $rows['t2_5']; ?>
          </td>
          <td>
            <?php echo $rows['t2_10']; ?>
          </td>
          <td>
            <?php echo $rows['t2_15']; ?>
          </td>
          <td>
            <?php echo $rows['t3_5']; ?>
          </td>
          <td>
            <?php echo $rows['t3_10']; ?>
          </td>
          <td>
            <?php echo $rows['t3_15']; ?>
          </td>

          <td>
            <?php echo $rows['tstatus']; ?>
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