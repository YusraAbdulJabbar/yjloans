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
.form-control,
.input-field {
  flex: 1;
  border: 0;
  font-size: 1.1em;
  font-weight: 600;
  background-color: #236467 ;
}
.form-control,
.input-field,
.input-addon {
  padding: 0.5em 0.75em;
  color: #89DDFF;
  letter-spacing: 1px;
}
.form-control,
.input-field:not(first-child) {
    border-left: 1px solid rgba(34,34,34,0.1);
}
.form-control,
.input-field:not(last-child) {
    border-right: 1px solid rgba(34,34,34,0.1);
}

.input-addon {
  font-variant: small-caps;
}

input {
  background-color: transparent;
}

.calcBtn {
  background-color:  #236467;
  border: 0;
  border-radius: 4px;
  box-shadow: 0px 2px 4px #222;
  font-size: 1.2em;
  font-variant: small-caps;
  font-weight: 600;
  letter-spacing: 0.6px;
  color: #F7F7F7 ;
  padding: 0.5em 0.8em;
  margin-top: 0.6em;
  margin-bottom: 1em;
}

.calcBtn:hover {
  box-shadow: 3px 6px 6px #222;
  transition: box-shadow 0.05s ease;
  cursor: pointer;
}

.label {
  font-variant: small-caps;
  font-size: 1.1em;
  letter-spacing: 1px;
}

.output-value {
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
  font-size: 3em;
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


html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  background-color:  #67989A;
  font-family: 'Open Sans', sans-serif;
  color: #236467;
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

<div class="container" style="max-width: 520px;">
 <h2>Car Loan Calculator</h2>
  <div class="row">
    <div class="col col-main">
      <h3>Enter Loan Data</h3>
      <label class="label" for="vehiclePrice">Vehicle Price</label>
      <div class="input-wrapper">
        <span class="input-addon">PKR</span>
       <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="vehiclePrice" placeholder="Vehicle Price" value=100,000>
      </div>
      <label  class="label" for="downPayment">Down Payment</label>
      <div class="input-wrapper">
        <span class="input-addon">PKR</span>
         <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="downPayment" placeholder="Down Payment" value=30,000>
        
      </div>
      <label class="label" for="intRate">Interest Rate</label>
      <div class="input-wrapper">
         
         <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="tradeValue" placeholder="Trade In Value" value=5>
        <span class="input-addon" >%</span>
      </div>

      <label class="label" for="tradeValue">Trade In Value</label>

      <div class="input-wrapper">
        <span class="input-addon">PKR</span>
       <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="intRate" placeholder="Interest Rate" value=10,000>
        
    
      </div>
     
      
        <label class="label" for="intRate">Loan Term</label>
      <div class="input-wrapper">
       <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="loanTerm" placeholder="Loan Term (ex: 36 Months)" value=10>
        <span class="input-addon">years</span>
        
        
    </form>

  </div>
  <div class="clearfix"></div>
      <div class="col-md-12">
        <a href="#" class="calcBtn" onclick="calculatePayments()" id="calculate" value="Calulate">Calculate</a>
        <br><br>
      </div>
  <div class="col-md-6">
    <div id="paymentResults">

    </div>
        </div>
      </div>
      

    </div>
    
 
  
    <div id="paymentResults">
  
</div>

<script type="text/javascript">
    

    function calculatePayments(){
  var vehiclePrice = document.getElementById('vehiclePrice').value,
      loanTerm = document.getElementById('loanTerm').value,
      intRate = document.getElementById('intRate').value,
      downPayment = document.getElementById('downPayment').value,
      tradeValue = document.getElementById('tradeValue').value,
      amount = parseInt(vehiclePrice),
      months = parseInt(loanTerm),
      down  = parseInt(downPayment),
      trade =  parseInt(tradeValue),
      totalDown  = down + trade
      annInterest = parseFloat(intRate),
      monInt = annInterest / 1200;

      if(!amount){
        alert('Please add a loan amount');
        return;
      }

      if(!months){
        months = 60;
        loanTerm = document.getElementById('loanTerm').value = '60';
      }

      if(!downPayment){
        down = 0;
        downPayment = document.getElementById('downPayment').value = '0';
      }

      if(!trade){
        trade = 0;
        tradeValue = document.getElementById('tradeValue').value = '0';
      }

      if(!annInterest){
        annInterest = 3.25;
        intRate = document.getElementById('intRate').value = '3.25';
      }


      var calc = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (totalDown || 0))).toFixed(2);

      var paymentResults = document.getElementById('paymentResults');
      paymentResults.style.display = 'block';
      paymentResults.innerHTML = '';
      var results = document.createElement('div');
      results.innerHTML = '<h3 style="text-align:center">Estimated Monthly Payment is:<br/></h3>' + '<h3 style="text-align:center; color:#89DDFF;">PKR ' + calc + '/Month</h3>';

      paymentResults.append(results);


}
</script>
</body>
</html>