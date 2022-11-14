<?php include("header.php");?>
<?php include("links.php");?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/addons/p5.sound.min.js"></script>
    <script src="rita.js"></script>
    <script src="https://unpkg.com/rita@2.8.31/dist/rita.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" />

<main>
<body style="center">
    <script src="sketch.js"></script>
 <script>
 let field;
let button;
function setup() {
  createCanvas(400, 300);
  field = createInput();
  button = createButton("Get rhymes!");
  button.mousePressed(findRhymes);
  background(50);
  textSize(32);
  noStroke();
  fill(255);
}
       </script>
     <script>
function draw() {
}
      </script>
     <script>
function findRhymes() {
  background(50);
  let rhymes = RiTa.rhymes(field.value());
  if (rhymes.length > 0) {
    text(rhymes.join(" "),
      10, 10, width-10, height-10);
  }
}
  </script>
    </main>
<div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


<div class="display-4">
<br>
<?php
date_default_timezone_set("America/Chicago");
echo "The time is " . date("h:i:sa");
?>
  
 <br>
<?php
$d1=strtotime("December 25");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until Christmas!";
?>
  
    </div></div>
</body>
</html>
