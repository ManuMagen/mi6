
<?php
   

      if(isset($_GET['contact']))  {     include("php/contact.php");   }
  elseif(isset($_GET['accueil']))  {     include("php/accueil.php");      }
  elseif(isset($_GET['apropos']))  {     include("php/about.php");     }
  elseif(isset($_GET['blog']))     {     include("php/blog.php");      }
  elseif(isset($_GET['detail']))   {     include("php/details.php");   }
  elseif(isset($_GET['agenda']))   {     include("php/agenda.php");   }
  else                          {     include("php/accueil.php");      }

  ?>
  