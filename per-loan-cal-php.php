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
}

#button-loan {
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
}

#button-loan:hover {
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

h3{
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
<br><br><br><br>
<div style="background: white; height: 70px;"></div>

<div class="container" style="max-width: 620px; ">
  <h2>Loan Calculator</h2>
  <div class="row">
    <div class="col col-main">
      <h3>Enter Loan Data</h3>
      <label for="amount" class="label">Amount of the loan</label>
      <div class="input-wrapper">
        <span class="input-addon">PKR</span>
        <input id="amount" class="input-field" type="text" value="100,000">
      </div>
      <label for="apr" class="label">Annual interest rate</label>
      <div class="input-wrapper">
        <input id="apr" class="input-field" type="text" value="5">
        <span class="input-addon">%</span>
      </div>
      <label for="years" class="label">Repayment period</label>
      <div class="input-wrapper">
        <input id="years" class="input-field" type="text" value="20">
        <span class="input-addon">years</span>
      </div>
     
      <button id="button-loan" onclick="calculate();">Calculate</button>

    </div>
    <div class="col">
      <h3>Payments</h3>
      <div class="output-wrapper">
        <p class="label">Monthly payment</p>
        <p class="output-value">PKR&nbsp<span id="payment"></span></p>
      </div>
      <div class="output-wrapper">
        <p class="label">Total payments</p>
        <p class="output-value">PKR&nbsp<span id="total"></span></p>
      </div>
      <div class="output-wrapper">
        <p class="label">Total interest payments</p>
        <p class="output-value">PKR&nbsp<span id="totalinterest"></span></p>
      </div>
    </div>
  </div>
 
  <footer></footer>
</div>


<script type="text/javascript">
	
	"use strict";

function calculate() {
  // Look up the input and output elements in the document
  var amount = document.getElementById("amount");
  var apr = document.getElementById("apr");
  var years = document.getElementById("years");
  var zipcode = document.getElementById("zipcode");
  var payment = document.getElementById("payment");
  var total = document.getElementById("total");
  var totalinterest = document.getElementById("totalinterest");
  
  // Get the user's input from the input elements.
  // Assume all input is valid (for now).
  // Convert interest rate from percentage to decimal
  // Convert from annual rate to monthly rate
  // Convert payment period in years to number of monthly payments
  var principal = parseFloat(amount.value.replace(/,/g, ''));
  var rate = parseFloat(apr.value) / 100 / 12;
  var payments = parseFloat(years.value) * 12;
  
  // Compute the monthly payment
  var x = Math.pow(1 + rate, payments);
  var monthly = (principal * x * rate) / (x - 1);
  
  // If the result is a finite number, the user's input was good
  // and we have meaningful results to display
  if (isFinite(monthly)) {
    // Fill in the output fields, rounding to 2 decimal places
    payment.innerHTML = formatNumber(monthly, 2);
    total.innerHTML = formatNumber(monthly * payments, 2);
    totalinterest.innerHTML = formatNumber((monthly * payments) - principal, 2);
    
    // Finally, chart loan balance, interest, and equity payments
    chart(principal, rate, monthly, payments)
  }
  else {
    // Result was NaN or Infinite, 
    // which means the input was incomplete or invalid.
    // Clear any previously-displayed output.
    payment.innerHTML = "";
    total.innerHTML = "";
    totalinterest.innerHTML = "";
    chart();  // With no arguments, clears the chart
  }
}

// Chart the monthly loan balance, interest, and
// equity in an HTML <canvas> element.
// If called with no arguments, then just erase
// any previously drawn chart.
function chart(principal, rate, monthly, payments) {
  var graph = document.getElementById("graph");
  graph.width = graph.width; // Magic to clear and reset the canvas element
  
  // If we're called with no arguments, 
  // or if the browser does not support graphics
  // in a <canvas> element, then just return now.
  if (arguments.length === 0 || !graph.getContext) return;
  
  // Get the "context" object for the <canvas>
  // that defines the API
  // All drawing is done with this object
  var g = graph.getContext("2d");
  
  var width = graph.width, height = graph.height; // Get canvas size
  
  // These functions convert payment numbers
  // and dollar amounts to pixels
  function paymentToX(n) {
    return n * width/payments;
  }
  function amountToY(a) {
    return height - (a * height / (monthly * payments * 1.05));
  }
  
  // Payments are a straight line from (0,0)
  // to (payments, monthly * payments)
  g.moveTo(paymentToX(0), amountToY(0)); // Start at lower left
  g.lineTo(paymentToX(payments), // Draw to upper right
           amountToY(monthly * payments));
  g.lineTo(paymentToX(payments), amountToY(0)); // Down to lower right
  g.closePath(); 	// And back to start
  g.fillStyle = "#72AAD0";	// Light blue
  g.fill();	// Fill the triangle
  
  // Cumulative equity is non-linear and trickier to chart
  var equity = 0;
  g.beginPath();
  g.moveTo(paymentToX(0), amountToY(0));	// Start at lower left
  for (var p = 1; p <= payments; p++) {
    // For each payment, figure out how much is interest
    var thisMonthsInterest = (principal - equity) * rate;
    equity += (monthly - thisMonthsInterest);	// The rest goes to equity
    g.lineTo(paymentToX(p), amountToY(equity));	// Line to this point
  }
  g.lineTo(paymentToX(payments), amountToY(0));	// Line back to X axis
  g.closePath();	// And back to starting point
  g.fillStyle = "#40FD65";
  g.fill(); // Fill area under curve
  
  // Loop again, as above, but chart loan balance as a black line
  var bal = principal;
  g.beginPath();
  g.moveTo(paymentToX(0), amountToY(bal));
  for (var p = 1; p <= payments; p++) {
    var thisMonthsInterest = bal*rate;
    bal -= (monthly - thisMonthsInterest);	// The rest goes to equity
    g.lineTo(paymentToX(p), amountToY(bal));	// Draw line to this point
  }
  
  g.lineWidth = 2;
  g.strokeStyle = "#444"
  g.stroke();		// Draw the balance curve
  
  // Now make yearly tick marks and year numbers on X axis
  g.textAlign = "center";		// Center text over ticks
  g.fillStyle = "#444";
  g.font = "0.6em 'Open Sans'";
  var y = amountToY(0);			// Y coordinate of X axis
  for (var year=1; year*12 <= payments; year++) { 	// For each year
    var x = paymentToX(year * 12);	// Compute tick position
    g.fillRect(x - 0.5, y - 3, 1, 3);		// Draw the tick
    if (year === 1) g.fillText("Year", x, y - 5);		// Label the axis
    if (year % 5 === 0 && year * 12 !== payments) 	// Number every 5 years
      g.fillText(String(year), x, y - 5);
  }
  
  // Mark payment amounts along the right edge
  g.textAlign = "right";	// Right-justify the text
  g.textBaseline = "middle"	// Center it vertically
  var ticks = [monthly * payments, principal];	// The two points we'll mark
  var rightEdge = paymentToX(payments);		// X coordinate of Y axis
  for (var i=0; i < ticks.length; i++) {	// For each of the 2 points
    var y = amountToY(ticks[i]);		// Compute y position of tick
    g.fillRect(rightEdge - 3, y - 0.5, 3, 1);	// Draw the tick mark
    g.fillText(String(formatNumber(ticks[i]), 2), rightEdge - 5, y); 		// And label it
  }
}

function formatNumber (num, decimals) {
    return num.toFixed(decimals).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
    // http://blog.tompawlak.org/number-currency-formatting-javascript
}
</script>
</body>
</html>