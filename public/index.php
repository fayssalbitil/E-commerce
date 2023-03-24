<?php 

    if($_SERVER["PHP_SELF"]=="/index.php")
    {
       require("../controller/homepage.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/homepage")
    {
        require("../controller/homepage.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/shop")
    {
        require("../controller/shop.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/shopfiltre")
    {
        require("../controller/shopfiltre.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/login")
    {
        require("../controller/login.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/dashbord.php")
    {
        require("../controller/dashbord/index.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/delete")
    {
        require("../controller/dashbord/delete.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/deletecategorie")
    {
        require("../controller/dashbord/deletecategorie.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/edit")
    {
        require("../controller/dashbord/edit.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/editcategorie")
    {
        require("../controller/dashbord/editcategorie.php");     
    }
    else if($_SERVER["PHP_SELF"]=="/index.php/product-details")
    {
        require("../controller/productdetail.php");     
    }
    