<?php
require("../model/accountManager.php");
require ("../entities/Account.php");


$manager = new accountManager($bd);
var_dump($manager);


require("../views/FormUpdateVue.php");
