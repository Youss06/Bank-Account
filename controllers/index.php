<?php

require ("../model/accountManager.php");


function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");


include ("../views/indexVue.php");
