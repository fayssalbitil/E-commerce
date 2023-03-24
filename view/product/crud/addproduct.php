<?php 
     require_once("../model/categorieRepos.php");
$categories=categorierepos::readall();
?>


<div id="addproduct" style="padding-left:300px; ">
    <form  action="" method="POST" enctype="multipart/form-data">
        <h2 > Ajoutez ici</h2>
        <div style="display:inline-block;" class="info">
            <input class="fname" type="text" name="nom" placeholder="nom">
            <input type="text" name="description" placeholder="description">
            <input type="number" name="sku" placeholder="sku">
            <input type="date" name="date" placeholder="date pub">
            <select name="categorie">
                <?php foreach($categories as $categorie) { ?>
                    <option value=<?php echo $categorie['id_categorie']?> selected><?php echo $categorie['label']?></option>
                <?php } ?>
            </select>
            <div class="checkbox">
                <label for="html">visibilite :</label>
                <label for="html">oui</label>
                <input type="radio" name="visibilite" value="oui">
                <label for="html">non</label>
                <input type="radio" name="visibilite" value="nom">
            </div>
            <input type="number" name="prixorg" placeholder="prix original">
            <input type="number" name="prixprom" placeholder="prix avec promotion">
            <input type="file" name="image" id="image">
            <input type="submit" class="submit" value="Submit" name="submitpro"/>
        </div>
    </form>
</div>