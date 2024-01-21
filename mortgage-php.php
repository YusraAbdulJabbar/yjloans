<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


	<style type="text/css">
		.input-wrapper {
  display: flex;
  flex-flow: row nowrap;
  box-shadow: inset 0px 1px 2px #222;
  background-color: #236467 ;
  border-radius: 4px;
  margin-top: 0.2em;
  margin-bottom: 1.2em;
  width: 420px;

}


.input-field {
  flex: 1;
  border: 0;
  font-size: 1.1em;
  font-weight: 600;

}

.input-wrapper:hover {
  box-shadow: inset 1px 2px 2px #222;
  transition: box-shadow 0.1s ease;
}

input:focus, button:focus {
  outline:none;
}

.input-field {
  flex: 1;
  border: 0;
  font-size: 1.1em;
  font-weight: 600;

}

.input-field,
.input-addon {
  padding: 0.5em 0.75em;
  color: #89DDFF;
  letter-spacing: 1px;

}

.input-field:not(first-child) {
    border-left: 1px solid rgba(34,34,34,0.1);
}
.input-field:not(last-child) {
    border-right: 1px solid rgba(34,34,34,0.1);
}

.input-addon {
  font-variant: small-caps;
}

input {
  background-color: transparent;
 
  width: 400px;
}

#sbt{
  background-color: #89DDFF;
  border: 0;
  border-radius: 4px;
  box-shadow: 0px 2px 4px #222;
  font-size: 1.2em;
  font-variant: small-caps;
  font-weight: 600;
  letter-spacing: 0.6px;
  color: #236467 ;
  padding: 0.5em 0.8em;
  margin-top: 0.6em;
  margin-bottom: 1em;
  width:140px ;
}

#sbt:hover {
  box-shadow: 3px 6px 6px #222;
  transition: box-shadow 0.05s ease;
  cursor: pointer;
}

.label {
  font-variant: small-caps;
  font-size: 1.1em;
  letter-spacing: 1px;
}

.output-value,#pmt {
  color: #89DDFF;
  letter-spacing: 1px;
  font-weight: 600;
  font-size: 2em;
  margin-bottom: 0.6em;
}

canvas {
  width: 100%;
  height: auto;
  background-color: #F7F7F7;
}

.container {
  margin: auto;
  width: 100%;
  
}

.row {
  display: flex;
  flex-flow: row nowrap;
}

.col-main {
  flex: 1;
}

.col:first-child {
  padding-right: 3em;
}

h3 {
  color: #236467 ;
  font-size: 1.6em;
  font-variant: small-caps;
  letter-spacing: 1px;
  margin: 0;
  padding-top: 1em;
  padding-bottom: 0.2em;
}

h2 {
  color: #236467 ;
  font-size: 2.5em;
  font-variant: small-caps;
  letter-spacing: 1px;
  margin: 0;
  padding-top: 0.4em;
}

p {
  margin: 0;
}

footer {
  height: 2em;
}

canvas {
  background-color: #fff;
  border-radius: 4px 4px 0 0;
}

.legend {
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  background-color: #fff;
  border-radius: 0 0 4px 4px;
  border-top: 1px solid #ccc;
  padding: 8px 8px 10px 8px;
  position: relative;
  top: -5px;
}

.legend-item {
  margin-right: 16px;
}
.legend-item > div {
  display: inline-block;
}
.legend-swatch {
  height: 12px;
  width: 12px;
  border-radius: 4px;
  position: relative;
  top: 2px;
}

.legend-label {
  font-size: 0.7em;
  color: #23395B;
/*  font-variant: small-caps;
  letter-spacing: 0.03em;*/
}

#total-interest-payments-swatch {
  background-color: #72AAD0;
}

#total-equity-swatch {
  background-color: #40FD65;
}

#loan-balance-swatch {
  background-color: #444;
}

@media (max-width: 565px) {
  .row {
    flex-flow: column;
  }
  .col:first-child {
    padding-right: 0;
  }
  h1 {
    font-size: 2.4em;
  }
}

#pmt{
  border:none ;
}

html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  background-color: #67989A;
  font-family: 'Open Sans', sans-serif;
  color: #2D2D2D ;
}

html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
	</style>
</head>
<body>



<?php

myHeader();

?>
<br><br>
<div style="background: white; height: 120px;"></div>

<div class="container" style="max-width: 620px;">
  <h2>Mortgage Loan Calculator</h2>
  <div class="row">
    <div class="col col-main">
      <h3>Enter Loan Data</h3>

<form action="">

  <label for="amount" class="label">APR%:</label>
      <div class="input-wrapper">
       
        <input type="text" id="apr" name="APR"/>
         <span class="input-addon">%</span>
      </div>

      <label for="amount" class="label">Loan Term</label>
      <div class="input-wrapper">
      <input type="text" id="trm" name="APR"/>
        <span class="input-addon">YEARS</span>
      </div>

      <label for="amount" class="label">Loan Amount</label>
      <div class="input-wrapper">
          <span class="input-addon">PKR</span>
      <input type="text" id="amt" name="amt"/>
      
      </div>

 <input type="button" id="sbt" value="Calculate" />
   

 <div class="col">
<h2>Payments</h2>
      <div class="output-wrapper">

        <p class="label">Monthly payment</p>
        
  
  <input type="text" id="pmt" name="mPmt"/>
</div>



  
</form>


<script type="text/javascript">
  
  var term;
var apr;
var amt;
var mPmt;


window.onload = function()
{
  document.getElementById("apr").focus();
  document.getElementById("sbt").onclick = getValues;
};

//use toFixed(2) to set the precision of the mPayment. Use it on an int.
function getValues()
{
  term = document.getElementById("trm").value;
  apr = document.getElementById("apr").value;
  amt = document.getElementById("amt").value;
  apr /= 1200;
  term *= 12;
  mPmt = calculatePayment();
  document.getElementById("pmt").value = "PKR " + mPmt.toFixed(2);
};

function calculatePayment()
{
  var payment = amt*(apr * Math.pow((1 + apr), term))/(Math.pow((1 + apr), term) - 1);
  return payment;
}
</script>


</body>
</html>