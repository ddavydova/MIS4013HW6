<?php include("header.php");?>
<?php include("links.php");?>

<script>
function randomValues() {
  anime({
    targets: '.random-demo .el',
    translateX: function() {
      return anime.random(0, 270);
    },
    easing: 'easeInOutQuad',
    duration: 750,
    complete: randomValues
  });
}

randomValues();
</script>

<?php include("footer.php");?>
