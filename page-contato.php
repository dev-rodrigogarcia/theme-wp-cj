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

   <section class="contact mt-5">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 p-4">
               <div class="contact-titles">
                  <h6>Alguns amigos perguntam isso</h6>
                  <h3>Perguntas frequentes</h3>
               </div>

               <div class="mt-4">
                  <div class="accordion" id="accordionExample">
                     <div class="card">
                        <div class="card-header card-header-styled" id="headingOne">
                           <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Can i get a free version of the app?
                           </button>
                           </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                           <div class="card-body">
                              Dramatically visualize mission-critical manufactured products rather than extensible e-commerce. Progressively incentivize cross-unit value whereas competitive applications.
                              Globally cultivate tactical collaboration and idea-sharing after fully tested strategic theme areas.
                           </div>
                        </div>
                     </div>

                     <div class="card">
                        <div class="card-header card-header-styled" id="headingTwo">
                           <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              The paid version is one time fee?   
                           </button>
                           </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                           <div class="card-body">
                              I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                           </div>
                        </div>
                     </div>

                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Get this outstanding theme now!
                           </button>
                           </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                           <div class="card-body">
                              Dramatically visualize mission-critical manufactured products rather than extensible e-commerce.
                              Globally cultivate tactical collaboration and idea-sharing after fully tested strategic theme areas. Enthusiastically.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 p-4">
               <div class="contact-titles">
                  <h6>Qualquer outra pergunta não listada no FAQ</h6>
                  <h3>Pergunte-nos :)</h3>
               </div>

               <div class="mt-4">
                  <form action="/swape/demo1/#wpcf7-f231-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                     <div class="form-group">
                        <input type="text" name="txtName" class="form-control input-contact" placeholder="Nome" value="" />
                     </div>
                     <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control input-contact" placeholder="Email" value="" />
                     </div>
                     <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control input-contact" placeholder="Your Phone Number *" value="" />
                     </div>
                     <div class="form-group">
                        <textarea name="txtMsg" class="form-control input-contact" placeholder="Escreva sua mensagem aqui." style="width: 100%; height: 150px;"></textarea>
                     </div>
                     <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btn btn-outline-primary btn-contact mt-2" value="Enviar" />
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>

   <?php get_footer(); ?>
</body>
</html>