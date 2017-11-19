
		<section class="row">
			<div class="col-full">
				<h2><?php the_date(); ?></h2>
				<article class="row">
          <?php if ( has_post_thumbnail()): ?>
            <figure class="col col-no-hr">

                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                  </a>
              <!-- <img src="/frontpage-assets/img/UoY.png" alt="University Radio York (URY) Logo"> -->
            </figure>
          <?php endif; ?>
					<div class="col1 col-no-hr">
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          </div>
          <?php the_content(); ?>
				</article>
		</section>
