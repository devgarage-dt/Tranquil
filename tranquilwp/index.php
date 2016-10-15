<?php get_header(); ?>

	<!-- BLOG SECTION -->
	<div class="container">

	  <div class="row">

	    <div class="col-sm-12 col-md-8 blog-main">          

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	      <div class="blog-post">
	        <h2 class="blog-post-title">
	        	<a href="<?php the_permalink(); ?>"
		        	 title="<?php the_title_attribute(); ?>">
		        	 <?php the_title(); ?>
	        	</a>
	        </h2>
	        <p class="blog-post-meta"><?php echo get_the_date('F, j, Y'); ?>
		         by <a href="#"><?php the_author(); ?></a>

		         <i class="fa fa-tag"></i>
		         <?php the_tags();  ?><br>
		         <i class="fa fa-folder-open"></i>
		         <?php _e( 'Category: ' ) ?>
		         <?php the_category(', '); ?>
	         </p>

			<?php the_excerpt(); ?>	

			<a href="<?php echo get_permalink(); ?>">
				<?php _e( 'Read more...' ); ?>
			</a>

		  </div><!--  end blog-post -->

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	      <nav>
	        <ul class="pager">
	          <li><?php next_posts_link( 'Older Posts' ); ?></li>
	          <li><?php previous_posts_link( 'Newer Posts' ); ?></li>
	        </ul>
	      </nav>

	    </div><!-- end blog-main -->

	    <!-- SIDEBAR SECTION -->
	    <div class="col-sm-12 col-md-3 col-md-offset-1 blog-sidebar">

	      <?php get_sidebar(); ?>

	    </div><!-- end blog-sidebar -->

	  </div><!-- end row -->

	</div><!-- end container -->



	

<?php get_footer(); ?>