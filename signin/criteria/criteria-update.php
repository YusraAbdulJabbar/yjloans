<?php $eid = $_GET['eid'];
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
$sql = " SELECT * FROM criteria  where eid=$eid ";
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
      <h2>Criteria</h2>
      <form class="form-horizontal" method="POST" action="criteria-up.php">

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">ID</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="title" name="eid"
              value="<?php echo $row['eid']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="title" name="ebank"
              value="<?php echo $row['ebank']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">E1</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="criteria" name="e1"
              value="<?php echo $row['e1']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">E2</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="criteria" name="e2"
              value="<?php echo $row['e2']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">E3</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="criteria" name="e3"
              value="<?php echo $row['e3']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">E4</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="criteria" name="e4"
              value="<?php echo $row['e4']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">E5</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="criteria" name="e5"
              value="<?php echo $row['e5']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">E6</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="criteria" name="e6"
              value="<?php echo $row['e6']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">E7</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="criteria" name="e7"
              value="<?php echo $row['e7']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">status</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="criteria" name="cstatus">
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