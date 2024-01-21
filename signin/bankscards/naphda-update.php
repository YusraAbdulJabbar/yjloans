<?php
$bid = $_GET['bid'];
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
$sql = "SELECT * FROM bnaphda WHERE bid = $bid";
$result = $link->query($sql);

// Loop till end of data
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
      <h2>Banks Details</h2>
      <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">ID</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="ID" name="bid"
              value="<?php echo $row['bid']; ?>" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email"> Bank</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="Name of bank" name="btitle"
              value="<?php echo $row['btitle']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Details</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="Details " name="binfo"
              value="<?php echo $row['binfo']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Size</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="size of house" name="t1size"
              value="<?php echo $row['t1size']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="maximum price " name="t1price"
              value="<?php echo $row['t1price']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Finance</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="maximum financing " name="t1finance"
              value="<?php echo $row['t1finance']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Contribution</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="minimum contribution " name="t1contribute"
              value="<?php echo $row['t1contribute']; ?>">
          </div>
        </div>
        <div class="form-group">


          <div class="form-group">
            <label class="control-label col-sm-2" for="email"> T2 Size</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" placeholder="size of house" name="t2size"
                value="<?php echo $row['t2size']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"> T2 Price</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="maximum price " name="t2price"
                value="<?php echo $row['t2price']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"> T2 Finance</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="maximum financing " name="t2finance"
                value="<?php echo $row['t2finance']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">T2 Contribution</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="minimum contribution " name="t2contribute"
                value="<?php echo $row['t2contribute']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">T3 Size</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" placeholder="size of house" name="t3size"
                value="<?php echo $row['t3size']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"> T3 Price</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="maximum price " name="t3price"
                value="<?php echo $row['t3price']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"> T3 Finance</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="maximum financing " name="t3finance"
                value="<?php echo $row['t3finance']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">T3 ntribution</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="minimum contribution " name="t3contribute"
                value="<?php echo $row['t3contribute']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Status</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pwd" placeholder="minimum contribution " name="bstatus"
                value="<?php echo $row['bstatus']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Link</label>
            <div class="col-sm-10">
              <input type="text" id="myFile" name="blink" value="<?php echo $row['blink']; ?>">
            </div>
          </div>

          <!-- Rest of the form fields -->
          <!-- Replace the existing form fields with the updated ones -->

          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Image</label>
            <div class="col-sm-10">
              <img src="uploads/b<?php echo $row['bid'] . '.jpg' ?>" />
              <input type="file" id="image" name="bpic">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default" name="save">Submit</button>
            </div>
          </div>
      </form>
    </div>
    <?php
}
?>

</body>

</html>

<?php
if (isset($_POST['save'])) {
  // Escape user inputs for security
  $bid = mysqli_real_escape_string($link, $_POST['bid']);
  // Rest of the form fields

  // Check if a new image was uploaded
  if (isset($_FILES['bpic']) && $_FILES['bpic']['error'] === UPLOAD_ERR_OK) {
    // Get the file details
    $image = $_FILES['bpic']['name'];
    $tmpimage = $_FILES['bpic']['tmp_name'];

    // Move the uploaded file to the desired location
    $targetDirectory = 'uploads/';
    $targetFile = $targetDirectory . basename($image);

    if (move_uploaded_file($tmpimage, $targetFile)) {
      // File uploaded successfully, update the database with the new image

      // Update the database with the new image filename
      $qry = "UPDATE bnaphda SET bpic = '$image' WHERE bid = '$bid'";
      if (mysqli_query($link, $qry)) {
        echo "Record updated successfully.";
      } else {
        echo "Error updating record: " . mysqli_error($link);
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  } else {
    // No new image was uploaded, continue updating the rest of the form fields
    // Update the database without changing the image filename
    $qry = "UPDATE bnaphda SET ... WHERE bid = '$bid'";
    if (mysqli_query($link, $qry)) {
      echo "Record updated successfully.";
    } else {
      echo "Error updating record: " . mysqli_error($link);
    }
  }
}

mysqli_close($link);
?>