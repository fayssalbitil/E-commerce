<?php
         
         require_once("../model/variantRepos.php");
         try{
            $variants=variantrepos::readall();
         }
         catch(Exception $ex)
         {
             die('Erreur : ' . $e->getMessage());
         }
?>
<div id="detailvariant" >
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Variant <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <form action="">
                            <button style="border:none;" id=""onclick="showaddproduct()" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </form>
                    </div>
                </div>
            </div>
            <table style="width:2000px;" class="table table-bordered">
                <thead>
                    <tr>
                        <th >designation</th>
                        <th>image</th>
                        <th>product</th>          
                        <th>Actions</th>
                    </tr>
                </thead>
    
                <tbody>
                <?php foreach($variants as $variant)  { ?>
                    <form action="" method="GET">
                    <tr>
                        <td ><?php echo $variant['designation'];?></td>
                        <td><?php echo $variant['produc']?></td>


                        <td><img style="height:50px;width:80px;" class="primary_img" src="../assets/img/product/<?php echo $variant["image"]?>" alt="consectetur"></td>
 
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="/index.php/edit?id=<?php echo $variant['id_product'];?>"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete"  onclick="return confirm('Are you sure you want to delete?')" title="Delete" data-toggle="tooltip"href="/index.php/delete?id=<?php echo $variant['id_product'];?>&img=<?php echo $product['image'];?>"><i class="material-icons">&#xE872;</i></a>   
                         </td> 
                    </tr>
                    </form>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>     
