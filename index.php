<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset') ?>">
      <meta content="Sensedia — Developers Portal" property="og:title">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <?php wp_head(); ?>
</head>
<body>
   <?php get_header(); ?>

   <section class="my-banner">
      <div class="banner-main d-flex justify-content-center">
         <div class="banner">
            <div class="shape one"></div>
            <div class="shape two"></div>
            
            <div class="container">
               <div class="row d-flex justify-content-center">
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
                     <div class="new_startup_content animation-right">
                        <h2 class="text-body mb-3 font-weight-bold text-center text-search-title">
                           Boa sorte!
                        </h2>
         
                        <p class="text-body text-center font-weight-bold text-search-subhead">
                           As melhores empresas de Campinas e Região estão aqui.
                        </p>
      
                        <div class="d-flex mt-4">
                           <input type="text" class="search" placeholder="Ex: Administração">
                        </div>
         
                        <div class="mt-4 btn-search text-center">
                           <a class="btn mybtn btn-outline-mydark font-weight-bold">Ver todas</a>
                           <button class="btn mybtn btn-mydark font-weight-bold">Pesquisar</button>
                        </div>
                     </div>
                  </div>
   
                  <div class="col-6 d-none d-md-block d-lg-block d-xl-block">
                     <div class="box-svg">
                     <?php
                        switch (rand(1,14)) {
                           case 1:
                              include('images/bg-initial-1.svg');
                              break;
                           case 2:
                              include('images/bg-initial-2.svg');
                              break;
                           case 3:
                              include('images/bg-initial-3.svg');
                              break;
                           case 4:
                              include('images/bg-initial-4.svg');
                              break;
                           case 5:
                              include('images/bg-initial-5.svg');
                              break;
                           case 6:
                              include('images/bg-initial-6.svg');
                              break;
                           case 7:
                              include('images/bg-initial-7.svg');
                              break;
                           case 8:
                              include('images/bg-initial-8.svg');
                              break;
                           case 9:
                              include('images/bg-initial-9.svg');
                              break;
                           case 10:
                              include('images/bg-initial-10.svg');
                              break;
                           case 11:
                              include('images/bg-initial-11.svg');
                              break;
                           case 12:
                              include('images/bg-initial-12.svg');
                              break;
                           case 13:
                              include('images/bg-initial-13.svg');
                              break;
                           default:
                              include('images/bg-initial-14.svg');
                        }
                     ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="my-categories p-3">
            <div class="d-flex flex-wrap justify-content-between align-items-center jobs-icons">
               <a class="m-2 d-flex flex-column align-items-center">
                  <em class="fab fa-accessible-icon fa-2x"></em>
                  <span class="mt-1">blablabla</span>
               </a>

               <a class="m-2 d-flex flex-column align-items-center">
                  <em class="fab fa-accessible-icon fa-2x"></em>
                  <span class="mt-1">blablabla</span>
               </a>

               <a class="m-2 d-flex flex-column align-items-center">
                  <em class="fab fa-accessible-icon fa-2x"></em>
                  <span class="mt-1">blablabla</span>
               </a>

               <a class="m-2 d-flex flex-column align-items-center">
                  <em class="fab fa-accessible-icon fa-2x"></em>
                  <span class="mt-1">blablabla</span>
               </a>

               <a class="m-2 d-flex flex-column align-items-center">
                  <em class="fab fa-accessible-icon fa-2x"></em>
                  <span class="mt-1">blablabla</span>
               </a>

               <a class="m-2 d-flex flex-column align-items-center">
                  <em class="fab fa-accessible-icon fa-2x"></em>
                  <span class="mt-1">blablabla</span>
               </a>
            </div>
         </div>
      </div>
   </section>

   <section class="title-jobs-section m-4">
      <div class="container">
         <h2 class="title-jobs">
            Vagas Recentes
         </h2>

         <div class="subhead-title-bg">
            Vagas
         </div>

         <span class="separator"></span>

         <p class="description-jobs">
            Confira as últimas vagas nas principais empresas de Campinas e região e candidate-se gratuitamente.
         </p>
      </div>
   </section>

   <section class="container-jobs mb-5 mt-5">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <?php for ($x = 0; $x < 5; $x++) { ?>               
                  <div class="jobs">
                     <div class="bg-icon">
                        <div class="icon">
                           <em class="fas fa-star"></em>
                        </div>
                     </div>
                     <div class="job-header">
                        <h3 class="job-title mb-3">
                           Nutricionista
                        </h3>
                     </div>
      
                     <div class="job-body">
                        <div class="row">
                           <div class="col-sm-6 col-md-6 col-lg-7 col-xl-8">
                              <p class="job-items">
                                 <em class="fas fa-briefcase"></em>
                                 Confidencial 
                              </p>

                              <p class="job-items">
                                 <em class="fas fa-map-marker-alt"></em>
                                 Campinas - SP
                              </p>

                              <p class="job-items">
                                 <em class="fas fa-user-check"></em>
                                 2 vagas
                              </p>

                              <div class="mb-4 d-block .d-sm-none"></div>
                           </div>

                           <div class="col-sm-6 col-md-6 col-lg-5 col-xl-4">
                              <div class="tags d-flex flex-wrap justify-content-center justify-content-sm-end">
                                 <p class="job-tag job-pcd d-flex align-items-center justify-content-center">
                                    <em class="fas fa-wheelchair"></em>
                                    PCD
                                 </p>
                                 
                                 <p class="job-tag job-remote d-flex align-items-center justify-content-center">
                                    <em class="fas fa-house-user"></em>
                                    Remoto
                                 </p>

                                 <p class="job-tag d-flex align-items-center justify-content-center">
                                    <em class="fas fa-tags"></em>
                                    Jovem Aprendiz
                                 </p>
                              </div>
                           </div>

                           <div class="col mt-2">
                              <span class="job-items job-clock">
                                 <em class="far fa-clock"></em>
                                 Publicado a 3 horas atrás
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>

               <div class="d-flex justify-content-center mt-5">
                  <a href="#" class="btn-all-jobs">
                     Todas as vagas&nbsp;
                     <em class="fas fa-paper-plane"></em>
                  </a>
               </div>

               <div class="mb-5 d-block .d-sm-none"></div>
            </div>
                  
            <div class="col-md-4">
               bla
            </div>
         </div>
      </div>
   </section>

   <?php get_footer(); ?>
</body>
</html>