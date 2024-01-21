<?php $id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
$sql = " SELECT * FROM loanterms  where id=$id ";
$result = $link->query($sql);

// LOOP TILL END OF DATA
while ($row = $result->fetch_assoc()) {

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="container">
      <h2>Loan Terms</h2>
      <form class="form-horizontal" method="POST" action="loanterms-up.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">ID</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="Id" name="id"
              value="<?php echo $row['id']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="title" name="title"
              value="<?php echo $row['title']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">definition</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="define here" name="define"
              value="<?php echo $row['define']; ?>">
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="s">Submit</button>
          </div>
        </div>
      </form>
    </div>
  <?php }

?>


</body>

</html>