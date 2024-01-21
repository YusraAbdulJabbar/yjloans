<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Information</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">

  <style type="text/css">
    *,
    *:before,
    *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      font-family: 'Nunito', sans-serif;
      color: #384047;
    }

    table {
      max-width: 960px;
      margin: 10px auto;
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
      background: #f4f7f8;
      border-bottom: 2px solid #67989A;
      margin-bottom: 5px;
    }

    tr:nth-child(even) {
      background: #e8eeef;
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

  <table>
    <caption style="color: #236467">
      <h3>Loan Terms</h3>
    </caption>
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Define</th>
        <th scope="col">Status</th>
        <th scope="col">Action </th>
      </tr>

    </thead>
    <tfoot>

      <tr>
        <td colspan="3">Data is updated every 15 minutes.</td>
      </tr>
    </tfoot>
    <tbody>
      <tr>
        <?php
        $link = mysqli_connect("localhost", "root", "", "yjl", 3308);
        $sql = " SELECT * FROM loanterms where lstatus=1";
        $result = $link->query($sql);

        // LOOP TILL END OF DATA
        while ($rows = $result->fetch_assoc()) {
          ?>
        <tr>
          <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->

          <td>
            <?php echo $rows['title']; ?>
          </td>
          <td>
            <?php echo $rows['define']; ?>
          </td>
          <td>
            <?php echo $rows['lstatus']; ?>
          </td>
          <td><a href="loanterms-update.php?id=<?php echo $rows['id']; ?>">Edit</a>
            <a href="loanterms-del.php?id=<?php echo $rows['id']; ?>">Delete</a>
            <a href="loanterms-vieweach.php?id=<?php echo $rows['id']; ?>">View</a>
          </td>


        </tr>
        <tr>

          <?php
        }
        ?>
      </tr>

    </tbody>
  </table>

</body>

</html>