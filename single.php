<?php get_header(); ?>
    <!-- BEGIN SINGLE PHP -->

   <div class="column" >

                               <article class="fluid postContainer">
    <section id="sectionThree" class="fluid ">
       


            <?php if (have_posts()) {
					while (have_posts() ) {
						
						the_post();?>
                
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
					}
			}?>
     </section>
  </article></div>

<!-- END SINGLE PHP -->
   
<?php get_footer(); ?>