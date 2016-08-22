<?php

/* Template Name: Main Page */ 

get_header();

?>

<main id="app" class="main-section">
	<section id="intro" class="intro">
	  <video class="intro__video" loop muted autoplay poster="<?php echo get_template_directory_uri(); ?>/images/bg-intro-fullsize@1x.jpg">
	    <source src="<?php $video_webm = get_field('home_block_1_video_webm'); echo $video_webm[url]; ?>" type="video/webm">
	    <source src="<?php $video_mp4 = get_field('home_block_1_video_mp4'); echo $video_mp4[url]; ?>" type="video/mp4">
	    <source src="<?php $video_ogg = get_field('home_block_1_video_ogg'); echo $video_ogg[url]; ?>" type="video/ogg">
	  </video>
	
	  <div class="intro__inner">
	
	    <div class="intro__logo">
	      <img src="<?php the_field('home_block_1_logo'); ?>" width="200" height="53" alt="Soshace Logo">
	    </div>
	
	    <h1 class="intro__title"><?php the_field('home_block_1_title'); ?></h1>
	    <h2 class="intro__subtitle"><?php the_field('home_block_1_subtitle'); ?></h2>
	
	    <div class="intro__btn-wrap">
	      <a class="intro__btn scroll" href="#contact"><?php the_field('home_block_1_button_text'); ?></a>
	    </div>
	
	  </div>
	
	  <div class="intro__triangle">
	    <div class="intro__triangle-part intro__triangle-part--left"></div>
	    <div class="intro__triangle-part intro__triangle-part--right"></div>
	  </div>
	
	</section>
	<section class="features">
	
	  <div class="features__inner">
	
	    <h1 id="services" class="features__header"><?php the_field('home_block_2_title'); ?></h1>
	
	    <div class="features__item">
	
	      <img src="<?php the_field('home_block_2_service_1_img'); ?>" height="85" alt="Feature Image">
	      <h2 class="features__title"><?php the_field('home_block_2_service_1_title'); ?></h2>
	      <p class="features__text"><?php the_field('home_block_2_service_1_descr'); ?></p>
	
	    </div>
	    <div class="features__item">
	
	      <img src="<?php the_field('home_block_2_service_2_img'); ?>" height="85" alt="Feature Image">
	      <h2 class="features__title"><?php the_field('home_block_2_service_2_title'); ?></h2>
	      <p class="features__text"><?php the_field('home_block_2_service_2_descr'); ?></p>
	
	    </div>
	    <div class="features__item">
	
	      <img src="<?php the_field('home_block_2_service_3_img'); ?>" height="85" alt="Feature Image">
	      <h2 class="features__title"><?php the_field('home_block_2_service_3_title'); ?></h2>
	      <p class="features__text"><?php the_field('home_block_2_service_3_descr'); ?></p>
	
	    </div>
	
	  </div>
	
	</section>
	<section class="skills">
	
	  <div class="skills__inner">
	
	    <h1 id="skills" class="skills__header"><?php the_field('home_block_3_title'); ?></h1>
	
	    <div class="skills__item">
	
	      <img src="<?php the_field('home_block_3_item_1_img'); ?>" width="90" height="103" />
	      <h2 class="skills__title"><?php the_field('home_block_3_item_1_title'); ?></h2>
	      <p class="skills__text"><?php the_field('home_block_3_item_1_subtitle'); ?></p>
	
	    </div>
	    <div class="skills__item">
	
	      <img src="<?php the_field('home_block_3_item_2_img'); ?>" width="90" height="103" />
	      <h2 class="skills__title"><?php the_field('home_block_3_item_2_title'); ?></h2>
	      <p class="skills__text"><?php the_field('home_block_3_item_2_subtitle'); ?></p>
	
	    </div>
	    <div class="skills__item">
	
	      <img src="<?php the_field('home_block_3_item_3_img'); ?>" width="90" height="103" />
	      <h2 class="skills__title"><?php the_field('home_block_3_item_3_title'); ?></h2>
	      <p class="skills__text"><?php the_field('home_block_3_item_3_subtitle'); ?></p>
	
	    </div>
	    <div class="skills__item">
	
	      <img src="<?php the_field('home_block_3_item_4_img'); ?>" width="90" height="103" />
	      <h2 class="skills__title"><?php the_field('home_block_3_item_4_title'); ?></h2>
	      <p class="skills__text"><?php the_field('home_block_3_item_4_subtitle'); ?></p>
	
	    </div>
	
	  </div>
	
	</section>
	<section class="portfolio">
	
	  <div class="portfolio__inner">
	
	    <h1 id="portfolio" class="portfolio__header">portfolio</h1>
	
	    <div class="portfolio__arrow-wrap portfolio__arrow-wrap--left">
	      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21.706px" height="41.719px" viewBox="0 0 21.706 41.719" enable-background="new 0 0 21.706 41.719" xml:space="preserve">
	        <path class="portfolio__arrow" d="M2.045,20.859L21.458,1.446c0.331-0.331,0.331-0.867,0-1.198c-0.33-0.331-0.867-0.331-1.197,0L0.248,20.261c-0.331,0.33-0.331,0.867,0,1.197l20.013,20.013c0.164,0.165,0.382,0.248,0.599,0.248s0.434-0.083,0.599-0.248c0.331-0.331,0.331-0.867,0-1.198L2.045,20.859z"/>
	      </svg>
	    </div>
	
	    <div class="portfolio__arrow-wrap portfolio__arrow-wrap--right">
	      <svg class="portfolio__arrow" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21.706px" height="41.719px" viewBox="0 0 21.706 41.719" enable-background="new 0 0 21.706 41.719" xml:space="preserve">
	        <path d="M19.661,20.859L0.248,1.446c-0.331-0.331-0.331-0.867,0-1.198c0.33-0.331,0.867-0.331,1.197,0l20.013,20.012c0.33,0.33,0.33,0.867,0,1.197L1.445,41.471c-0.164,0.165-0.382,0.248-0.599,0.248s-0.434-0.083-0.599-0.248c-0.331-0.331-0.331-0.867,0-1.198L19.661,20.859z"/>
	      </svg>
	    </div>
	
	    <div class="portfolio__slider">
	
	      <div class="swiper-wrapper">
<?php

$args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1, 'order' => 'ASC' );
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
	$query->the_post(); 

$pf_thumbnail_id = get_post_thumbnail_id();
$pf_thumbnail_url = wp_get_attachment_url( $pf_thumbnail_id );

?>

	          <div class="portfolio__slide swiper-slide">
	
	            <a href="#" data-title="Conceptsauce" data-complete-description="<?php if (get_field('portfolio_description_full')) { the_field('portfolio_description_full'); } else { the_field('portfolio_description'); } ?>" data-incomplete-description="<?php the_field('portfolio_description'); ?>" data-link="<?php the_field('portfolio_url'); ?>" data-image="<?php echo $pf_thumbnail_url; ?>">
	              <?php the_post_thumbnail(); ?>
	              <div class="portfolio__project-info">
	                <h2 class="portfolio__project-name"><?php the_title(); ?></h2>
	                <p class="portfolio__project-description"><?php the_field('portfolio_description'); ?></p>
	                <span class="portfolio__project-more">Details</span>
	              </div>
	            </a>
	
	          </div>

<?php }
wp_reset_postdata();

?>


	      </div>
	
	    </div>
	
	  </div>
	
	</section>
	<section class="contact">
	
	  <div class="contact__inner">
	
	    <h1 id="contact" class="contact__header">have any questions?</h1>
	    <p class="contact__text">Leave your message and our manager will answer you</p>
	
	    <div class="contact__form">
                <?php echo do_shortcode('[contact-form-7 id="36" title="Contact form 1"]'); ?>
	    </div>
	
	  </div>
	</section>
	<section class="team">
	
	  <div class="team__inner">
	
	    <h1 id="team" class="team__header">our team</h1>
	
	    <div class="team__members-wrap">
	
	      <div class="swiper-wrapper">


<?php

$args = array( 'post_type' => 'team', 'posts_per_page' => -1, 'order' => 'ASC' );
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
	$query->the_post(); 

$tm_thumbnail_id = get_post_thumbnail_id();
$tm_thumbnail_url = wp_get_attachment_url( $tm_thumbnail_id );

?>

	          <div class="team__member swiper-slide">
	
	            <a data-name="<?php the_title(); ?>" data-position="<?php the_field('team_position'); ?>" data-info="<?php the_field('team_descr'); ?>" data-photo="<?php echo $tm_thumbnail_url; ?>">
                      <img src="<?php echo $tm_thumbnail_url; ?>" width="280" alt="photo">
	              <div class="team__member-info">
	                <h2 class="team__member-name"><?php the_title(); ?></h2>
	                <p class="team__member-position"><?php the_field('team_position'); ?></p>
	                <!-- <p class="team__member-resume"><?php the_field('team_descr'); ?></p> -->
	                <span class="team__member-more">more</span>
	              </div>
	            </a>
	          </div>

<?php }
wp_reset_postdata();

?>


 
	          <div class="team__member swiper-slide">
	
	            <a data-name="Albert Shakirov" data-position="Frontend Developer" data-info="Albert works at JavaScript frameworks and libraries as well as PSD to HTML. He uses responsive, mobile-first approach, with HTML5 and CSS3 technologies to make the UI look and feel modern." data-photo="http://res.cloudinary.com/doc9ow0py/image/upload/v1465297933/zpmecphcyj5hmefoncri.jpg">
	              <img src="http://res.cloudinary.com/doc9ow0py/image/upload/v1465297933/zpmecphcyj5hmefoncri.jpg" width="280" alt="photo">
	              <div class="team__member-info">
	                <h2 class="team__member-name">Albert Shakirov</h2>
	                <p class="team__member-position">Frontend Developer</p>
	                <!-- <p class="team__member-resume">Albert works at JavaScript frameworks and libraries as well as PSD to HTML. He uses responsive, mobile-first approach, with HTML5 and CSS3 technologies to make the UI look and feel modern.</p> -->
	                <span class="team__member-more">more</span>
	              </div>
	            </a>
	          </div>
	          <div class="team__member swiper-slide">
	
	            <a data-name="Vitalii Zhukov" data-position="Full Stack Developer" data-info="Has 5 years of experience in web development. For the recent four years he has been working for international and Russian companies. Vitalii has skills of front-end and back-end development, high-load projects, etc." data-photo="http://res.cloudinary.com/doc9ow0py/image/upload/v1465298032/eouojfoqnv66duzczhgr.jpg">
	              <img src="http://res.cloudinary.com/doc9ow0py/image/upload/v1465298032/eouojfoqnv66duzczhgr.jpg" width="280" alt="photo">
	              <div class="team__member-info">
	                <h2 class="team__member-name">Vitalii Zhukov</h2>
	                <p class="team__member-position">Full Stack Developer</p>
	                <!-- <p class="team__member-resume">Has 5 years of experience in web development. For the recent four years he has been working for international and Russian companies. Vitalii has skills of front-end and back-end development, high-load projects, etc.</p> -->
	                <span class="team__member-more">more</span>
	              </div>
	            </a>
	          </div>
	          <div class="team__member swiper-slide">
	
	            <a data-name="Denis Nefedov" data-position="Full Stack Developer" data-info="Denis has been working in web development since 2007. He has large experience in both front-end and back-end development with emphasis on JavaScript technology stack. Denis is fully customer-oriented." data-photo="http://res.cloudinary.com/doc9ow0py/image/upload/v1465297952/uu6711wwnsc7paik4gn8.jpg">
	              <img src="http://res.cloudinary.com/doc9ow0py/image/upload/v1465297952/uu6711wwnsc7paik4gn8.jpg" width="280" alt="photo">
	              <div class="team__member-info">
	                <h2 class="team__member-name">Denis Nefedov</h2>
	                <p class="team__member-position">Full Stack Developer</p>
	                <!-- <p class="team__member-resume">Denis has been working in web development since 2007. He has large experience in both front-end and back-end development with emphasis on JavaScript technology stack. Denis is fully customer-oriented.</p> -->
	                <span class="team__member-more">more</span>
	              </div>
	            </a>
	          </div>
	          <div class="team__member swiper-slide">
	
	            <a data-name="Ivan Rastvorov" data-position="Project Manager" data-info="Ivan joined to our team in May 2016. He is seasoned professional in their field, quickly find a common language with both the clients and the developers. Executive, polite, punctual." data-photo="http://res.cloudinary.com/doc9ow0py/image/upload/v1465297967/pitrgewqxowya34t8av1.jpg">
	              <img src="http://res.cloudinary.com/doc9ow0py/image/upload/v1465297967/pitrgewqxowya34t8av1.jpg" width="280" alt="photo">
	              <div class="team__member-info">
	                <h2 class="team__member-name">Ivan Rastvorov</h2>
	                <p class="team__member-position">Project Manager</p>
	                <!-- <p class="team__member-resume">Ivan joined to our team in May 2016. He is seasoned professional in their field, quickly find a common language with both the clients and the developers. Executive, polite, punctual.</p> -->
	                <span class="team__member-more">more</span>
	              </div>
	            </a>
	          </div>
	          <div class="team__member swiper-slide">
	
	            <a data-name="Andrey Medvedev" data-position="Server-side Developer " data-info="He participated in projects mostly associated with low-level programming. Guru of automation and administration. Sphere of interests includes server-side programming and development through testing." data-photo="http://res.cloudinary.com/doc9ow0py/image/upload/v1468505580/agfam2caeh4dqoda4jsa.jpg">
	              <img src="http://res.cloudinary.com/doc9ow0py/image/upload/v1468505580/agfam2caeh4dqoda4jsa.jpg" width="280" alt="photo">
	              <div class="team__member-info">
	                <h2 class="team__member-name">Andrey Medvedev</h2>
	                <p class="team__member-position">Server-side Developer </p>
	                <!-- <p class="team__member-resume">He participated in projects mostly associated with low-level programming. Guru of automation and administration. Sphere of interests includes server-side programming and development through testing.</p> -->
	                <span class="team__member-more">more</span>
	              </div>
	            </a>
	          </div>
	          <div class="team__member swiper-slide">
	
	            <a data-name="Pavel Bragin" data-position="Frontend Developer & Co-Founder" data-info="Developer completely dedicated to the client’s needs and requirements. He has got more than 3 years’ experience of working with Javascript (popular frameworks, like Angular, React and Backbone), HTML, CSS." data-photo="http://res.cloudinary.com/doc9ow0py/image/upload/v1465298016/n4v42vljfx5cj6pzcrum.jpg">
	              <img src="http://res.cloudinary.com/doc9ow0py/image/upload/v1465298016/n4v42vljfx5cj6pzcrum.jpg" width="280" alt="photo">
	              <div class="team__member-info">
	                <h2 class="team__member-name">Pavel Bragin</h2>
	                <p class="team__member-position">Frontend Developer & Co-Founder</p>
	                <!-- <p class="team__member-resume">Developer completely dedicated to the client’s needs and requirements. He has got more than 3 years’ experience of working with Javascript (popular frameworks, like Angular, React and Backbone), HTML, CSS.</p> -->
	                <span class="team__member-more">more</span>
	              </div>
	            </a>
	          </div>
	          <div class="team__member swiper-slide">
	
	            <a data-name="Stepan Zharychev" data-position="Frontend Developer" data-info="2 years experience in web development client-side and server-side solutions. The main area of interest JavaScript, both front-end (AngularJS), and on the back-end (Node.js, Express). Also Stepan has experience in test automation on Karma / Jasmine and SpecFlow." data-photo="http://res.cloudinary.com/doc9ow0py/image/upload/v1468505258/ke4qsiodqga91yqaqrbq.jpg">
	              <img src="http://res.cloudinary.com/doc9ow0py/image/upload/v1468505258/ke4qsiodqga91yqaqrbq.jpg" width="280" alt="photo">
	              <div class="team__member-info">
	                <h2 class="team__member-name">Stepan Zharychev</h2>
	                <p class="team__member-position">Frontend Developer</p>
	                <!-- <p class="team__member-resume">2 years experience in web development client-side and server-side solutions. The main area of interest JavaScript, both front-end (AngularJS), and on the back-end (Node.js, Express). Also Stepan has experience in test automation on Karma / Jasmine and SpecFlow.</p> -->
	                <span class="team__member-more">more</span>
	              </div>
	            </a>
	          </div>
	      </div>
	
	    </div>
	
	
	    <div class="team__arrows">
	      <div class="team__arrow-wrap team__arrow-wrap--left">
	        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21.706px" height="41.719px" viewBox="0 0 21.706 41.719" enable-background="new 0 0 21.706 41.719" xml:space="preserve">
	          <path class="team__arrow" d="M2.045,20.859L21.458,1.446c0.331-0.331,0.331-0.867,0-1.198c-0.33-0.331-0.867-0.331-1.197,0L0.248,20.261c-0.331,0.33-0.331,0.867,0,1.197l20.013,20.013c0.164,0.165,0.382,0.248,0.599,0.248s0.434-0.083,0.599-0.248c0.331-0.331,0.331-0.867,0-1.198L2.045,20.859z"/>
	        </svg>
	      </div>
	
	      <div class="team__arrow-wrap team__arrow-wrap--right">
	        <svg class="team__arrow" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21.706px" height="41.719px" viewBox="0 0 21.706 41.719" enable-background="new 0 0 21.706 41.719" xml:space="preserve">
	          <path d="M19.661,20.859L0.248,1.446c-0.331-0.331-0.331-0.867,0-1.198c0.33-0.331,0.867-0.331,1.197,0l20.013,20.012c0.33,0.33,0.33,0.867,0,1.197L1.445,41.471c-0.164,0.165-0.382,0.248-0.599,0.248s-0.434-0.083-0.599-0.248c-0.331-0.331-0.331-0.867,0-1.198L19.661,20.859z"/>
	        </svg>
	      </div>
	    </div>
	
	
	    <p class="team__description">In its activity our team demonstrates a unique combination of creativity, experience, knowledge, and, what is most important, the shared 'can do' attitude. We do our best to help our clients to get the very best support, advice and project management that enables them to easily achieve their business goals.</p>
	
	  </div>
	</section>
	<section class="testimonial">
	
	  <div class="testimonial__inner">
	
	    <a class="testimonial__header" href="https://www.upwork.com/o/companies/_~0195981d091a50e50f/" target="_blank">
	      <h1 id="testimonial">we are on Upwork</h1>
	    </a>
	
	    <div class="testimonial__upwork-content">
	      <p class="testimonial__intro">(visible only for logged users)</p>
	      <img class="testimonial__description" src="<?php echo get_template_directory_uri(); ?>/images/upwork-description.jpg" width="300" alt="Upwork Description">
	
	      <div class="testimonial__top-rated">
	
	        <p class="testimonial__top-rated-text">
	          <span class="testimonial__top-rated-hidden">High Qualified & </span>Top Rated Team
	        </p>
	
	        <img class="testimonial__top-rated-staff" src="<?php echo get_template_directory_uri(); ?>/images/upwork-staff.jpg" width="150" alt="Upwork Staff">
	
	        <div class="testimonial__top-rated-t">
	          <img class="testimonial__top-rated-total" src="<?php echo get_template_directory_uri(); ?>/images/upwork-total.jpg" width="150" alt="Upwork Total">
	          <img class="testimonial__top-rated-tests" src="<?php echo get_template_directory_uri(); ?>/images/upwork-tests.jpg" width="150" alt="Upwork Tests">
	        </div>
	
	      </div>
	
	      <div class="testimonial__feedback">
	        <p class="testimonial__feedback-text">Feedback</p>
	        <img class="testimonial__feedback-2" src="<?php echo get_template_directory_uri(); ?>/images/upwork-feedback-2.jpg" width="300" alt="Upwork Feedback">
	        <img class="testimonial__feedback-1" src="<?php echo get_template_directory_uri(); ?>/images/upwork-feedback-1.jpg" width="300" alt="Upwork Feedback">
	        <img class="testimonial__feedback-3" src="<?php echo get_template_directory_uri(); ?>/images/upwork-feedback-3.jpg" width="300" alt="Upwork Feedback">
	      </div>
	
	    </div>
	
	  </div>
	</section>
	<div class="funfacts">
	
	  <div class="funfacts__left-column">
	
	    <div class="funfacts__clients">
	      <div class="funfacts__clients-number"><?php the_field('home_block_4_item_1_title'); ?></div>
	      <div class="funfacts__clients-text"><?php the_field('home_block_4_item_1_subtitle'); ?></div>
	    </div>
	
	    <div class="funfacts__projects">
	      <div class="funfacts__projects-number"><?php the_field('home_block_4_item_2_title'); ?></div>
	      <div class="funfacts__projects-text"><?php the_field('home_block_4_item_2_subtitle'); ?></div>
	    </div>
	
	  </div>
	
	  <div class="funfacts__right-column">
	
	    <div class="funfacts__awards">
	      <div class="funfacts__awards-number"><?php the_field('home_block_4_item_3_title'); ?></div>
	      <div class="funfacts__awards-text"><?php the_field('home_block_4_item_3_subtitle'); ?></div>
	    </div>
	
	    <div class="funfacts__years">
	      <div class="funfacts__years-number"><?php the_field('home_block_4_item_4_title'); ?></div>
	      <div class="funfacts__years-text"><?php the_field('home_block_4_item_4_subtitle'); ?></div>
	    </div>
	
	  </div>
	
	</div>
	<div class="map-wrap">
	
	  <div class="map" id="map"></div>
	
	  <div class="map-wrap__triangle">
	    <div class="map-wrap__triangle-part map-wrap__triangle-part--left"></div>
	    <div class="map-wrap__triangle-part map-wrap__triangle-part--right"></div>
	  </div>
	  
	</div>
</main>

<?php get_footer(); ?>