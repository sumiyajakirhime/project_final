<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<?php
$txt = "Mushroom Madness";
echo "$txt!";
?>

<!-- MAIN (Center website) -->
<div class="main">

<h1>MUSHY.COM</h1>
<hr>

<h2>Mushroom Magic Awaits You!!!</h2>
<p>Organic Goodness</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
	<img src="./images/m5.jpeg" alt="Lights" style="width:100%">
     
      <h3>Golden Oyster Mushrooms</h3>
	  <p>$9.99</p>
      <p>Delicate and Nutty Flavour,Perfect for Stir-Fries</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
	<img src="./images/m6.jpeg" alt="Lights" style="width:100%">
   
      <h3>Lion's Mane Mushrooms</h3>
	  <p>$12.99</p>
      <p>Meaty Texture,Ideal for Vagen Meat Substitutes </p>
    </div>
  </div>
  <div class="column">
    <div class="content">
	<img src="./images/m7.jpeg" alt="Lights" style="width:100%">

      <h3>Shiitake Mushrooms</h3>
	  <p>$7.99</p>
      <p>Rich Ummami Teste,Great for Soups and Stir-Fries</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="./images/m10jpeg.jpeg" alt="Lights" style="width:100%">
      <h3>Enoki Mushrooms</h3>
      <p>$6.99</p>
	  <p>Delicate and Crunchy,Ideal for Salads</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
 <img src="./images/m9jpeg.jpeg" alt="Lights" style="width:100%">
  <h3>Maitake Mushrooms</h3>
  <p>$10.99</p>
  <p>Early Flavor,Excellent for Roasting</p>
</div>

<!-- END MAIN -->
</div>

</body>
</html>
