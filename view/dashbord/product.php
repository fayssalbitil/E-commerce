<?php
         require_once("../model/productRepos.php");
         require_once("../model/product.php");
         try{
            $products=productrepos::readall();
              if(isset($_POST['submitpro']))
              {
                  $product= new product($_POST['nom'],$_POST['description'],$_POST['sku'],$_POST['visibilite'],$_POST['date'],$_POST['categorie'],(int)$_POST['prixorg'],(int)$_POST['prixprom'],$_FILES['image']);
                  productrepos::insert($product);
               
              }    
         }
         catch(Exception $ex)
         {
             die('Erreur : ' . $e->getMessage());
         }
?>
<div id="detailproduct" >
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>product <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <form action="../product/admin/adminajout.php">
                            <button style="border:none;" id=""onclick="showaddproduct()" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </form>
                    </div>
                </div>
            </div>
            <table style="width:2000px;" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th >Description</th>
                        <th>Sku</th>
                        <th>visibilite</th>
                        <th>Date_pub</th>
                        <th>Categorie</th>
                        <th>prix original</th>
                        <th>prix avec promotion</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
    
                <tbody>
                <?php foreach($products as $product)  { ?>
                    <form action="" method="GET">
                    <tr>
                    <td><?php echo $product['nom'];?></td>
                        <td ><?php echo $product['description'];?></td>
                        <td><?php echo $product['sku']?></td>
                        <td><?php echo $product['visibilite']?></td>
                        <td><?php echo $product['date_pub']?></td>
                        <td><?php echo $product['label']?></td>
                        <td><?php echo $product['prixorg']?></td>
                        <td><?php echo $product['prixpromo']?></td>
                        <td><img style="height:50px;width:80px;" class="primary_img" src="../assets/img/product/<?php echo $product["image"]?>" alt="consectetur"></td>
 
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="/index.php/edit?id=<?php echo $product['id_product'];?>"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete"  onclick="return confirm('Are you sure you want to delete?')" title="Delete" data-toggle="tooltip"href="/index.php/delete?id=<?php echo $product['id_product'];?>&img=<?php echo $product['image'];?>"><i class="material-icons">&#xE872;</i></a>   
                         </td> 
                    </tr>
                    </form>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>     
