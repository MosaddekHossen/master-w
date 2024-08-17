   <!--::header part start::-->
   <header class="main_menu home_menu">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-12">
                   <nav class="navbar navbar-expand-lg navbar-light">
                       <?php master_logo(); ?>
                       <button class="navbar-toggler" type="button" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                           <span class="menu_icon"><i class="fas fa-bars"></i></span>
                       </button>

                       <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                           <?php master_menu(); ?>
                       </div>
                       <div class="hearer_icon d-flex">
                           <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                           <a href=""><i class="ti-heart"></i></a>
                           <div class="dropdown cart">
                               <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-cart-plus"></i>
                               </a>
                               <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->

                           </div>
                       </div>
                   </nav>
               </div>
           </div>
       </div>
       <div class="search_input" id="search_input_box">
           <div class="container ">
               <form action="/" method="get" class="d-flex justify-content-between search-inner">
                   <input type="text" class="form-control" id="search_input" name="s" value="<?php the_search_query(); ?>" placeholder=" <?php echo esc_attr__('Search Here', 'tecHub'); ?>">
                   <button type="submit" class="btn"></button>
                   <span class="ti-close" id="close_search" title="Close Search"></span>
               </form>
           </div>
       </div>
   </header>
   <!-- Header part end-->