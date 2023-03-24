<?php 
class productrepos
{
    public static function readall()
    {   
        $pd=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        return database::readall($pd,"product p join categorie c on p.id_categorie=c.id_categorie");
    }
    public static function  readwithid($id_product)
    {
        $pd=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        return database::readwithid($pd,"product",$id_product);
    }
    public static function readwithcategorie($id_categorie)
    {
        $pdo =new pdo('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        $productStatement =$pdo->prepare("select * from product where id_categorie=".$id_categorie);
        $productStatement->execute();
        $products = $productStatement->fetchAll();
        return $products;
    }

    public static function insert(product $product)
    {   
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
        {
         
            // header('location: dashbord.php');

            // Testons si le fichier n'est pas trop gros
            if ($_FILES['image']['size'] <= 1000000)
            {

                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions))
                {

                    if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['sku']) && !empty($_POST['date']) && 
                    !empty($_POST['categorie']) && !empty($_POST['prixorg'])&& !empty($_POST['prixprom']))
                    {

                        if($_POST['visibilite']=="oui" ){$checked="oui";}else{ $checked="non";}
                        $db=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
                        $sqlQuery = 'insert into product(nom,description,sku,visibilite,date_pub,id_categorie,prixorg,prixpromo,image)
                            values("'.$_POST['nom'].'","'.$_POST['description'].'",'.$_POST['sku'].',"'.$checked.'","'.$_POST['date'].'",
                            '.$_POST['categorie'].','.$_POST['prixorg'].','.$_POST['prixprom'].',"'.$_FILES['image']['name'].'");';
                        // Préparation
                        $insertproduct = $db->prepare($sqlQuery);
                        $insertproduct->execute();
                        move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/product/'. $_FILES['image']['name']);
                        ?>
                        <script>alert("product ajoute avec succes")</script>
                      
                    <?php
        header('location: dashbord.php'); 

                    } 
                    else
                    {
                        ?>
                        <script>alert("something is wrong")</script>
                    <?php
                    }  
                }
            }
        }
    }
    
    public static function update($id_product)
    {
        $checked="";
        if(isset($_POST['submit']))
        {  
            // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
            if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
            {
                    // Testons si le fichier n'est pas trop gros
                    if ($_FILES['image']['size'] <= 1000000)
                    {
                            // Testons si l'extension est autorisée
                            $fileInfo = pathinfo($_FILES['image']['name']);
                            $extension = $fileInfo['extension'];
                            $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                            if (in_array($extension, $allowedExtensions))
                            {
    
                                 move_uploaded_file($_FILES['image']['tmp_name'],'assets/img/product/'. $_FILES['image']['name']);
                                if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['sku']) && !empty($_POST['date']) && 
                                !empty($_POST['categorie']) && !empty($_POST['prixorg'])&& !empty($_POST['prixprom']))
                                {
                                    if($_POST['visibilite']=="oui" ){$checked="oui";}else{ $checked="non";}
                                    $sqlQuery = 'update product set nom ="'.$_POST['nom'].'",description="'.$_POST['description'].'",sku='.$_POST['sku'].',visibilite="'.$checked.'",date_pub="'.$_POST['date'].'",id_categorie='.$_POST['categorie'].',prixorg='.$_POST['prixorg'].'
                                    ,prixpromo='.$_POST['prixprom'].', image="'.$_FILES['image']['name'].'" where id_product='.$id_product.'';
                                    $db=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
                                    // Préparation
                                    $insertproduct = $db->prepare($sqlQuery);
                        
                                    $insertproduct->execute();
                                    header('location: dashbord.php');
                                } 
                                else{
                                    echo "something is wrong";
                                }  
                            }
                    }
            }
        }
    }
    public static function delete($id)
    {

        $db=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        $sqlQuery = 'Delete FROM product where id_product='.$id;
        // Préparation
        $insertproduct = $db->prepare($sqlQuery);
        $insertproduct->execute();
        header('location: dashbord.php');

        
    }
}