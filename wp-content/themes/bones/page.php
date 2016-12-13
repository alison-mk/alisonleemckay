<?php get_header(); ?>

	<div id="content" class="wrap">
		<main id="main" class="m-all cf" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
				<h2 class="page-title"><?php the_title(); ?></h2>
				<section class="entry-content cf">
					<?php
						// the content (pretty self explanatory huh)
						the_content();
					?>
				</section> <?php // end article section ?>
			</article>

			<?php endwhile; else : ?>

					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

			<?php endif; ?>

		</main>
	</div>

<?php get_footer(); ?>
