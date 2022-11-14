<?php include("header.php");?>
<?php include("links.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/addons/p5.sound.min.js"></script>
    <script src="rita.js"></script>
    <script src="https://unpkg.com/rita@2.8.31/dist/rita.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" />
</head>
    
<body>
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
</body>
</html>
<?php include("footer.php");?>
