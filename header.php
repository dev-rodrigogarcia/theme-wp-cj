<div class="top-bar d-none d-sm-block">
   <div class="container">
      <div class="d-flex justify-content-between align-items-center">
         <div class="clearfix"> 
            <ul class="socials ul-icons d-flex"> 
               <li> 
                  <a class="social-icon" href="#">
                     <em class="fab fa-facebook-f"></em>
                  </a> 
               </li> 
               <li> 
                  <a class="social-icon" href="#">
                     <em class="fab fa-instagram"></em>
                  </a> 
               </li> 
               <li> 
                  <a class="social-icon" href="#">
                     <em class="fab fa-youtube"></em>
                  </a> 
               </li> 
               <li> 
                  <a class="social-icon" href="#">
                     <em class="fab fa-linkedin-in"></em>
                  </a> 
               </li> 
            </ul> 
         </div>

         <div class="top-bar-right"> 
            <ul class="custom ul-icons">
               <li> 
                  <a href="login.html" class="">
                     <em class="fas fa-hands-helping mr-1"></em> 
                     <span>Para empresas</span>
                  </a> 
               </li> 
            </ul> 
         </div>
      </div>
   </div>
</div>

<nav class="navbar-custom sticky sticky-dark nav-sticky navbar navbar-expand-lg">
   <div class="container">
      <?php the_custom_logo(); ?>

      <?php
         if ($_SERVER['REQUEST_URI'] != "/Sensedia/") {
      ?>
      <form>
         <div class="input-group input-search">
            <input type="text" placeholder="Ex: Produção">
            <div class="input-group-btn">
               <button class="btn btn-default" type="submit">
                  <em class="fas fa-search"></em>
               </button>
            </div>
         </div>
      </form>
      <?php
         }
      ?>
      
      <button aria-label="Toggle navigation" type="button" class="navbar-toggler">
         <svg width="18px" height="12px" viewBox="0 0 18 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>menu</title>
            <desc>Created with Sketch.</desc>
            <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
               <g id="Rounded" transform="translate(-885.000000, -3438.000000)">
                  <g id="Navigation" transform="translate(100.000000, 3378.000000)">
                     <g id="-Round-/-Navigation-/-menu" transform="translate(782.000000, 54.000000)">
                        <g transform="translate(0.000000, 0.000000)">
                           <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                           <path d="M4,18 L20,18 C20.55,18 21,17.55 21,17 C21,16.45 20.55,16 20,16 L4,16 C3.45,16 3,16.45 3,17 C3,17.55 3.45,18 4,18 Z M4,13 L20,13 C20.55,13 21,12.55 21,12 C21,11.45 20.55,11 20,11 L4,11 C3.45,11 3,11.45 3,12 C3,12.55 3.45,13 4,13 Z M3,7 C3,7.55 3.45,8 4,8 L20,8 C20.55,8 21,7.55 21,7 C21,6.45 20.55,6 20,6 L4,6 C3.45,6 3,6.45 3,7 Z" id="🔹-Icon-Color" fill="#1D1D1D"></path>
                        </g>
                     </g>
                  </g>
               </g>
            </g>
         </svg>
      </button>
      
      <?php
         wp_nav_menu(array(
            'theme_location' => 'my-custom-menu',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbar_main',
            'menu_class' => 'ml-auto navbar-center navbar-nav'
         ));
      ?>
   </div>
</nav>