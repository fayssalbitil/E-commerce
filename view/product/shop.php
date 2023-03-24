<?php
   require_once("../model/productRepos.php");
   $products=productrepos::readall();
?>
                     <!--shop toolbar end-->
               <?php foreach($products as $product) { ?>
                     
                     <div class="" style="display:inline-block;padding:0% 2.5% 0% 2%;">
                            <div class="single_product">
                                 <div class="product_thumb">
                                    <a href="/index.php/product-details?id_product=<?php echo $product["id_categorie"]?>" >
                                        <img class="primary_img" src="../assets/img/product/<?php echo $product["image"]?>" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <div class="product_content grid_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html"></a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </div>
                                <div class="product_list_content">
               
                                    <h4 class="product_name"><a href="product-details.html"> <?php  $product["nom"]?></a></h4>
                                    <p><a href="#">shows</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$<?php  $product["prixpromo"]?></span>
                                        <span class="old_price">$<?php  $product["prixorg"]?></span>
                                    </div>
                                    <div class="product_desc">
                                        <p><?php  $product["descrition"]?></p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
               <?php } ?>
                