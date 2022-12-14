<?php include("header.php");?>
<?php include("links.php");?>

    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css" />

<style>
.accordion {
  border-radius: 5px;
  overflow: hidden;
  margin: auto;
}

.accordion .item .heading {
  height: 50px;
  line-height: 50px;
  font-size: 17px;
  cursor: pointer;
  color: #fff;
  padding-left: 15px;
  background-position: right 20px top -95px;
  border-bottom: 1px solid #ec8484;
  box-sizing: border-box;
}

.accordion .item .heading .fa-chevron-circle-down{
  float: right;
  padding: 15px;
}

.accordion .item.open .heading,
.accordion .item:last-child .heading {
  border: 0;
}

.accordion .item.open .heading {
  background-position: right 20px top -5px;
}

.accordion .item .content {
  padding: 0px 20px;
  background: #eee;
  font-size: 14px;
  height:0;
  overflow:hidden;
  color: #7f8c8d;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.accordion .item.open .content {
  height: 100px;
  padding: 20px;
}

.orange{
  background-color: #FBB44C;
}

.pink{
  background-color: #FC797A;
}

.green{
  background-color:#2ABB9B;
}

.blue{
  background-color: #3498db;  
}

/*End CSS example*/

/*Other CSS*/
body{
  font-family: helvetica;
  font-size: 1.2em;
  margin: 0px; 
}

body a{
  color: #4183c4;
}

.container{ 
   margin-top: 50px;
   min-width: 300px;
   width: 40%;
}



.sentences{
  color: #7f8c8d;
  font-size: 0.8em;
  padding: 0px 20px;
  background: red;
  min-width: 300px;
  background: #eee;
  display: table;
  border-radius: 5px;
  margin-top: 30px;
}

.anijs-reserved-word {
  font-size: 1em;
  font-weight: bolder;
}

.anijs-if {
color: #D14;
}

.anijs-on {
color: #008080;
}

.anijs-do {
  color: #D56100;
}

.anijs-to {
  color: #4188D2;
}

.margin-right{
    margin-right: 50px;
}

.margin-left{
    margin-left: 50px;
}

.sticky {
  background: #F6F6F6;
  color: #666;
  position: fixed;
  top: 20px;
  right: 20px;
  padding: 0px 15px;
  font-size: 80%;
  font-style: italic;
  border-radius: 5px;
}

.sticky.left{
  top: 20px;
  left: 0px;
  right: inherit;
  padding: 20px;
  width: 200px;
  font-size: 0.7em;
  border-radius: 0px 10px 10px 0px;
}

.sticky.left h4{
  font-size: 150%;
  -webkit-margin-before: 0em;
  -webkit-margin-after: 0.33em;
  text-align: left;
}

.sticky h4{
  text-align: center;
}

.sticky ul{
  list-style-type: disc;
  color: #4183c4;
  font-size: 90%;
}

.sticky ul li{
  margin-bottom:10px;
}

.discover{
  margin-left: -5%;
  color: #7f8c8d;
  font-size: 80%;
}

.discover img{
  width: 16px;
  height: 16px;
}

.pure-button {
  display: inline-block;
  zoom: 1;
  line-height: normal;
  white-space: nowrap;
  vertical-align: baseline;
  text-align: center;
  cursor: pointer;
  -webkit-user-drag: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-size: 100%;
  padding: 0.5em 1.5em 0.5em;
  color: #444;
  color: rgba(0, 0, 0, 0.80);
  border: 1px solid #999;
  border: none rgba(0, 0, 0, 0);
  background-color: #E6E6E6;
  text-decoration: none;
  border-radius: 2px;
  -webkit-transition: 0.1s linear -webkit-box-shadow;
  -moz-transition: 0.1s linear -moz-box-shadow;
  -ms-transition: 0.1s linear box-shadow;
  -o-transition: 0.1s linear box-shadow;
  transition: 0.1s linear box-shadow;
  padding: 0.4em 1em;
  border-radius: 5px;
  font-size: 80%;
}

.pure-button.primary {
  background-color: #1f8dd6;
  color: white;
}

.pure-button.secondary {
  background: rgb(66, 184, 221);
  color: white;
}
</style>
<body>
  
  <!-- The example -->
  <div class="container center">
	  <p> Expand below!</p>
 <div class="accordion" 
     data-anijs="if: click, on: .heading, do: $removeClass open, to: .open;
                 if: click, on: .heading, do: $toggleClass open, to: $parent target;">

	<div class="item" data-anijs="if:mouseenter, on: .heading, do: pulse animated, to: $children target">
		<div class="heading blue">
      <i class="fa fa-bell"></i>
      <span>Notifications</span>
      <i class="fa fa-chevron-circle-down"></i>
    </div>
		<div class="content">Apple want to hiring you :)</div>
  </div>
	
	<div class="item">
		<div class="heading orange">
      <i class="fa fa-camera"></i>
      <span>Images</span>
      <i class="fa fa-chevron-circle-down"></i>
    </div>
		<div class="content">Footprint On The Moon 1969 :D</div>
  </div>
	
	<div class="item">
		<div class="heading pink">
      <i class="fa fa-music"></i>
      <span>Music</span>
      <i class="fa fa-chevron-circle-down"></i>
    </div>
		<div class="content">All you need is love ... ;)</div>
  </div>
	
</div>
  </div>
  <!-- End example -->

  

<script src="https://anijs.github.io/lib/anijs/anijs.js"></script>
<script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom.js"></script>
 </body>
</html>
