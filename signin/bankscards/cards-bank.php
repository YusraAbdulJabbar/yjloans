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
  <h2>Banks Data</h2>
  <form class="form-horizontal" action="banks.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="title" name="title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Info</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="define here" name="info">
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
