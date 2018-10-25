<?php
/**
 * Template Name: Test Page
 *
 * @package WordPress
 * @subpackage Idaho_Webmaster
 */

get_header(); ?>

	<div id="primary" class="content-area <?php echo esc_attr( ( is_active_sidebar( 'sidebar-home' ) ) ? 'col-md-8' : 'col-md-12' ); ?>">
		<main id="main" class="site-main">

			<div id="carousel-example-generic" class="carousel slide carousel-thumbnail" data-ride="carousel" data-interval="false">

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
            <div class="row">
                <div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
                <div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
                <div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
                <div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row">
                <div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
								<div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
								<div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
								<div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row">
                <div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
								<div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
								<div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
								<div class="col-md-3">
									<a href="#" class="thumbnail">
										<img class="img-responsive" src="https://placehold.it/250x160" alt="Thumb11">
										<div class="caption">
							        <h3>Thumbnail label</h3>
							        <p>description</p>
							      </div>
									</a>
                </div>
            </div>
        </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicons glyphicons-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicons glyphicons-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>


			<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'idaho-webmaster' ),
							'after'  => '</div>',
						) );
					?>

			<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if ( is_active_sidebar( 'sidebar-home' ) ) : ?>
		<div class="col-md-4">
			<?php dynamic_sidebar( 'sidebar-home' ); ?>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>
