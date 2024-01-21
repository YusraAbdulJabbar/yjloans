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
    <form action="naphda.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email"> Bank</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="email" placeholder="Name of bank" name="btitle">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Details</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pwd" placeholder="Details " name="binfo">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Size</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="email" placeholder="size of house" name="t1size">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pwd" placeholder="maximum price " name="t1price">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Finance</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pwd" placeholder="maximum financing " name="t1finance">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Contribution</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pwd" placeholder="minimum contribution " name="t1contribute">
        </div>
      </div>
      <div class="form-group">


        <div class="form-group">
          <label class="control-label col-sm-2" for="email"> T2 Size</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="size of house" name="t2size">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd"> T2 Price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="maximum price " name="t2price">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd"> T2 Finance</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="maximum financing " name="t2finance">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">T2 Contribution</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="minimum contribution " name="t2contribute">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">T3 Size</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="size of house" name="t3size">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd"> T3 Price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="maximum price " name="t3price">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd"> T3 Finance</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="maximum financing " name="t3finance">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">T3 ntribution</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="minimum contribution " name="t3contribute">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">bstatus</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder=" status " name="bstatus">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Link</label>
          <div class="col-sm-10">
            <input type="text" id="link" name="blink">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Image</label>
          <div class="col-sm-10">
            <input type="file" name="image" id="image">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="Upload Image" name="submit">
          </div>
        </div>
      </div>

    </form>

</body>

</html>