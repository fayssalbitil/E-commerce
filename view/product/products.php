<?php
   require_once("../model/productRepos.php");
   $products=productrepos::readall();
?>
<section>
<div class="product_container row">
         <div class="tab-content">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
               <div class="product_slick slick_slider_activation" data-slick='{
                     "slidesToShow": 5,
                     "slidesToScroll": 1,
                     "arrows": true,
                     "dots": false,
                     "autoplay": false,
                     "speed": 300,
                     "infinite": true,
                     "responsive":[
                     {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                     {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                     {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                     ]
               }'>
               <?php foreach($products as $product) { ?>
                     <article class="col single_product">
                        <figure>
                           <div class="product_thumb">
                                 <a href="/index.php/product-details?id_product=<?php echo $product["id_product"]?>&id_categorie=<?php echo $product["id_categorie"]?>">
                                    <img class="primary_img" src="../assets/img/product/<?php echo $product["image"]?>"
                                       alt="consectetur">
                                 </a>
                                 <div class="product_action">
                                    <ul>
                                       <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                data-tippy-inertia="true" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-placement="left"><i
                                                   class="icon-heart icons"></i></a></li>

                                       <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="left"><i
                                                   class="icon-size-fullscreen icons"></i></a></li>

                                       <li class="compare"><a data-tippy="Compare" href="#"
                                                data-tippy-inertia="true" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-placement="left"><i
                                                   class="icon-refresh icons"></i></a></li>
                                    </ul>
                                 </div>
                           </div>
                           <figcaption class="product_content text-center">
                                 <div class="product_ratting">
                                    <ul class="d-flex justify-content-center">
                                       <li><a href="#"><i class="ion-android-star"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star"></i></a></li>
                                       <li><a href="#"><i class="ion-android-star"></i></a></li>
                                       <li><span>(4)</span></li>
                                    </ul>
                                 </div>
                                 <h4 class="product_name"><a href="product-details.html"><?php echo $product["nom"]?></a>
                                 </h4>
                                 <div class="price_box">
                                    <span class="current_price"><?php echo $product["prixpromo"]?>$</span>
                                    <span class="old_price"><?php echo $product["prixorg"]?>$</span>
                                 </div>
                                 <div class="add_to_cart">
                                    <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                       data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                       data-tippy-placement="top">Add To Cart</a>
                                 </div>
                           </figcaption>
                        </figure>
                     </article>
               <?php } ?>
               </div>
            </div>
         </div>
   </div>
</div>
</section>
    <!-- product section end -->



    <script src="../assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/vendor/popper.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/jquery.scrollup.min.js"></script>
    <script src="../assets/js/images-loaded.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/jquery.nice-select.js"></script>
    <script src="../assets/js/tippy-bundle.umd.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/jquery.instagramFeed.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/mailchimp-ajax.js"></script>
        <!--modernizr min js here-->
        <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>


<!-- Structured Data  -->
<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "Replace_with_your_site_title",
    "url": "Replace_with_your_site_URL"
    }
</script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
