<?php include("header.php");?>
<?php include("links.php");?>
   

   <!-- Entire bundle -->
<script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.11/lib/draggable.bundle.js"></script>
<!-- legacy bundle for older browsers (IE11) -->
<script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.11/lib/draggable.bundle.legacy.js"></script>
<!-- Draggable only -->
<script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.11/lib/draggable.js"></script>
<!-- Sortable only -->
<script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.11/lib/sortable.js"></script>
<!-- Droppable only -->
<script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.11/lib/droppable.js"></script>
<!-- Swappable only -->
<script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.11/lib/swappable.js"></script>
<!-- Plugins only -->
<script src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.11/lib/plugins.js"></script>


<script>
   // eslint-disable-next-line import/no-unresolved
import {Draggable} from '@shopify/draggable';

// eslint-disable-next-line shopify/strict-component-boundaries
import Plate from '../../components/Plate';

export default function Home() {
  const containerSelector = '#Home .PlateWrapper';
  const container = document.querySelector(containerSelector);

  if (!container) {
    return false;
  }

  const draggable = new Draggable(container, {
    draggable: '.Plate',
  });
  const plates = new Plate(container);

  // --- Draggable events --- //
  draggable.on('drag:start', (evt) => {
    plates.setThreshold();
    plates.setInitialMousePosition(evt.sensorEvent);
  });

  draggable.on('drag:move', (evt) => {
    // rAF seems to cause the animation to get stuck?
    // requestAnimationFrame(() => {});
    plates.dragWarp(evt.source, evt.sensorEvent);
  });

  draggable.on('drag:stop', () => {
    plates.resetWarp();
  });

  return draggable;
}
</script>
