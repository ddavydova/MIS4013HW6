<?php include("header.php");?>
<?php include("links.php");?>

<script>

var animation = anime({
  targets: '.remove-demo .el',
  translateX: 270,
  direction: 'alternate',
  loop: true,
  easing: 'easeInOutQuad'
});




document.querySelector('.remove-el-button').addEventListener('click', function() {
  animation.remove('.remove-demo .line:nth-child(2) .el');
});
</script>

<?php include("footer.php");?>
