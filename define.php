
<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
    <title></title>


    <style type="text/css">
        
        body { background: #eee;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif, cursive;
         color:white;
          }

.container-fluid { 
    width: 100%;
    text-align: center;


 }


.card {
    background: #67989A;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    padding: 20px;
    margin-bottom: 2em;
    margin-right: 1em;
    max-width: 300px;
    display: inline-block;


}

[class*="row"] {
    margin-bottom: 2em;
  justify-content: center;
margin-top:100px;
}


[class*="col-"] {
  
    border: 0px solid #ddd;
    padding-top: .75rem;
    padding-bottom: .75rem;
    width: 100%;
}


/* === HEADING STYLE #3 === */
.three h1 {
  font-size: 28px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 1.5em;
  padding-bottom: 15px;
  position: relative;
color:black;
}
.three h1:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 5px;
  width: 55px;
  background-color: #111;
}
.three h1:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 2px;
  height: 1px;
  width: 95%;
  max-width: 255px;
  background-color: #333;
}

    </style>
</head>
<body>

 




<?php

myHeader();

?>




  <div class="three">
  <h1>Loan Terms</h1>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="card-deck">
        
         <?php
                    require("db.php");
                    $qry = "select * from loanterms where lstatus=1";
                    $output= $conn->query($qry);
                    while($row = $output->fetch_assoc())
                    {
                        echo '
                        
                         <div class="card">
       
        <div class="card-block">
          <h4 class="card-title">'.$row['title'].'</h4>
          <p class="card-text"><br><br>'.$row['define'].'</p>
        
        </div>
      </div>';
                    }
                    ?>
     

</body>
</html>