<?php
   require_once("../model/categorieRepos.php");
   $categories=categorierepos::readall();
?>
<!-- product section start -->
<form id="editcategorie" action="" method="GET">
   <section class="product_section mb-96">
      <div class="container">
         <div class="product_header d-flex justify-content-between  mb-50">
               <div class="section_title">
                  <h2>best selling items</h2>
               </div>
               <div class="product_tab_btn d-flex">
                  <ul class="nav" role="tablist">
                  <?php foreach($categories as $categorie) { ?>
                     <li style="list-style-type: none;padding-right:30px; color: gray;">
                        <a  href="/index.php/shopfiltre?id_categorie=<?php echo $categorie["id_categorie"]?>" role="tab" aria-controls="accessories"
                           aria-selected="false">
                           <?php echo $categorie["label"]?>
                        </a>
                     </li>
                  </ul>
                  <?php } ?>
               </div>
         </div>
   </section>
</form>