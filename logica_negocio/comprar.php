 <?php
 session_start();
 $path="../";
 session_destroy();
 $_POST['accion']="principal";
 include($path."index.htm");
 ?>