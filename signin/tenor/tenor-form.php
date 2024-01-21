
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
  <form class="form-horizontal" action="tenor.php">

  <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Bank</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="bank">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email"> T1 5 years</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="t1_5">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> T1  10 years</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="t1_10">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> T1 15 tears</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="t1_15">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"> T2 5 years</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="t2_5">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> T2 10 years</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd"  name="t2_10">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> T2 15 years</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="t2_15">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"> T3 5 years</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="t3_5">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> T3  10 years</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="t3_10">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> T3 15 tears</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="t3_15">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Status</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="tstatus">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
