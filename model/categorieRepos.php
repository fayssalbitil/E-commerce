<?php

require "../model/categorie.php";


class categorierepos extends categorie
{ 

    public static function readall()
    {   
        $pd=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        return database::readall($pd,"categorie");
    }
    public static function readwithid($id_categorie)
    {
        $pd=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
        return database::readwithid($pd,"categorie",$id_categorie);
    }
    public static  function insert(categorie $categorie):void
    {
 
            if (!empty($_GET['label']) && !empty($_GET['description']) && !empty($_GET['date']))
            {
                $db=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
                $sqlQuery = 'INSERT INTO categorie (`label`, `description`,`date_pub`) VALUES
                ("'.$categorie->getlabel().'","'.$categorie->getdescription().'","'.$categorie->getdate().'")';
    
                // Préparation
                $insertproduct = $db->prepare($sqlQuery);
    
                $insertproduct->execute();
                header('location: dashbord.php');?>
                <?php
            } 
            else
                echo "something is wrong";
    }
    public static function update(categorie $categorie,$id)
    {
        
        if (!empty($_GET['label']) && !empty($_GET['description']) )
        {
            $db=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
            $sqlQuery = 'UPDATE categorie SET label = "'.$categorie->getlabel().'" ,
            description = "'.$categorie->getdescription().'"
            WHERE id_categorie ='.$categorie->getid().';';
            // Préparation
            $insertproduct = $db->prepare($sqlQuery);
            $insertproduct->execute();
            header('location: dashbord.php');
        } 
        else{
            echo "something is wrong";
        } 
    }
    public static function delete(int $id)
    {    

            $db=new PDO('mysql:host=localhost;dbname=e_commerce;charset=utf8',"root");
            $sqlQuery = 'Delete FROM categorie where id_categorie='.$id;
            // Préparation
            $insertproduct = $db->prepare($sqlQuery);
            $insertproduct->execute();
            header('location: dashbord.php'); 
    }
}