
<?php 
        

    productrepos::delete( $_GET["id"]);
    unlink("assets/img/product/".$_GET['img']);
?>;


