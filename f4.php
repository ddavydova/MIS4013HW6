<?php include("header.php");?>
<?php include("links.php");?>
<title>AniJS Accordion</title>

    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css" />

<style>
	.accordion {
  width: 500px;
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

.center{
  display: block;
  margin-left: auto;
  margin-right: auto;
  position:relative;
}


footer {
  color: rgba(236, 222, 209, 1);
  text-align: center;
  background: #eee;
  position: fixed;
  width: 100%;
  bottom: 0px;
  padding: 10px 0px;
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

 <div class="sentences center" data-anijs="if:mouseover, do: bounce animated, to: .learn">
   <p>
     *
    <span class="anijs-if anijs-reserved-word">If</span>
    <span>click,</span>
    <span class="anijs-on anijs-reserved-word">On</span>
    <span>.heading,</span>
    <span class="anijs-do anijs-reserved-word">Do</span>
    <span class="do-value">$removeClass open</span>
    <span class="anijs-to anijs-reserved-word">To</span>
    <span class="to-value">.open,</span>
     <br><br>
     *
    <span class="anijs-if anijs-reserved-word">If</span>
    <span>click,</span>
    <span class="anijs-on anijs-reserved-word">On</span>
    <span>.heading,</span>
    <span class="anijs-do anijs-reserved-word">Do</span>
    <span class="do-value">$toggleClass open</span>
    <span class="anijs-to anijs-reserved-word">To</span>
    <span class="to-value">$parent target</span>
   </p>
 
 </div> 
  
  
  
<footer>
  <div class="pull-left margin-left">
    <a class="pure-button primary" href="https://codepen.io/darielnoel/pen/mALtz?editors=110" target="_blank">
       <i class="fa fa-edit"></i> Edit
    </a>
    <a class="pure-button primary" href="https://codepen.io/darielnoel/share/zip/mALtz/">
       <i class="fa fa-download"></i> Download
    </a>   
  </div>
  <span class="discover" data-anijs="if: mouseover,on: .tab-bar, do: bounceIn animated, after: $holdAnimClass" >
    Made using            <img src="https://anijs.github.io/assets/img/favicon.png" alt="" />
    <a href="https://anijs.github.io/" target="_blanck">AniJS</a>
  </span>
  <div class="pull-right margin-right">
   <a class="pure-button primary" href="https://codepen.io/collection/DFmkq" target="_blanck">
   <i class="fa fa-external-link"></i> More!!!
    </a> 
   </div>
 </footer>
 
  <div class="sticky learn">
    <h4>
      <i class="fa fa-mortar-board"></i>
      Learn AniJS
    </h4>
    <ul>
      <li><a href="https://github.com/anijs/anijs/wiki/Sentence-Definitions#if" target="_blanck">click</a></li>
      <li><a href="https://github.com/anijs/anijs/wiki/Refer-to-the-current-element" target="_blanck">target</a></li>
      <li><a href="https://github.com/anijs/anijs/wiki/Selecting-html-elements#parent" target="_blanck">$parent</a></li>
      <li><a href="https://github.com/anijs/anijs/wiki/Playing-with-CSS-classes" target="_blanck">$removeClass</a></li>
      <li><a href="https://github.com/anijs/anijs/wiki/Playing-with-CSS-classes" target="_blanck">$toggleClass</a></li>
    </ul>  
  </div>
  

<script src="https://anijs.github.io/lib/anijs/anijs.js"></script>
<script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom.js"></script>
 </body>
</html>
