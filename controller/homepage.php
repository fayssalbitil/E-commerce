<?php

    $_SESSION["user_login"]=null ;
    $_SESSION["password"]= null;
    require("../libs/paths.php");
    require ("../model/database.php");  
    paths::requirelvl2model("layout","header");
    paths::requirelvl2model("homepage","slider");
    paths::requirelvl2model("homepage","shipping");
    paths::requirelvl2model("homepage","banner");
    paths::requirelvl2model("categories","categorie");
    paths::requirelvl2model("product","products");
    paths::requirelvl2model("homepage","banner1");
    paths::requirelvl2model("layout","footer");


