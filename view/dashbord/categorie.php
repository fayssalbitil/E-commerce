<?php
    try{
        $categories=categorierepos::readall();
          if(isset($_POST['submitcat']))
          {
            $categorie= new categorie($_GET['label'],$_GET['description'],$_GET['date']);
            categorierepos::insert($categorie);      
          }    
     }
     catch(Exception $ex)
     {
         die('Erreur : ' . $e->getMessage());
     }
?>
<div id="detailcategorie" style="padding-left:300px;">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>categories <b>Details</b></h2></div>
                    <div class="col-sm-4">
                      <button type="button" onclick="showaddcategorie()" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table  class="table table-bordered">
                <thead>
                    <tr>
                        <th>label</th>
                        <th >Description</th>
                        <th>Date_pub</th>
                        <th>Actions</th>
                    </tr>
                </thead>
    
                <tbody>
                <?php foreach($categories as $categorie)  { ?>
                    <form action="" method="GET">
                    <tr>
                    <td><?php echo $categorie['label']?></td>
                        <td ><?php echo $categorie['description']?></td>
                        <td><?php echo $categorie['date_pub']?></td> 
                        <td>
                            <a id="edit" title="Edit" href="/index.php/editcategorie?id_categorie=<?php echo $categorie['id_categorie']?>" data-toggle="tooltip" ><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"  onclick="return confirm('Are you sure you want to delete?')" href="/index.php/deletecategorie?id_categorie=<?php echo $categorie['id_categorie']?>"><i class="material-icons">&#xE872;</i></a>   
                         </td> 
                    </tr>
                    </form>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>        