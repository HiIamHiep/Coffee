<?php

    require './model/Customers.php';
    $result = (new Customer())->index();

    var_dump($result);
    
