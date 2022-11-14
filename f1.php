<?php include("header.php");?>
<?php include("links.php");?>
   <style>
      p {
        position: fixed;
        top: 100px;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-family: 'Arial', sans-serif;
        color: white;
        text-align: center;
        width: 100%;
        z-index: 1;
      }

      #box {
        margin: 0 0;
        width: 100vw;
        height: 100vh;
        background-color: black;
        opacity: 0.2;

        transition: background-color 0.4s ease-in-out;
      }
    </style>

    <p>Multiple animations based on mouse movement.</p>
    <div id="box"></div>
$ npm install --save choreographer-js 
    <script src="../dist/choreographer.min.js"></script>
    <script>
      var choreographer = new Choreographer({
        animations: [
          { range: [-1, window.innerWidth], selector: '#box', type: 'scale', style: 'height', from: 100, to: 50, unit: 'vh' },
          { range: [-1, window.innerWidth / 2], selector: '#box', type: 'scale', style: 'opacity', from: 0.2, to: 1 },
          { range: [window.innerWidth / 2, window.innerWidth], selector: '#box', type: 'change', style: 'backgroundColor', to: '#00c9ff' },
        ]
      })

      window.addEventListener('mousemove', function(e) {
        choreographer.runAnimationsAt(e.clientX)
      })
    </script>



<?php include("footer.php");?>
