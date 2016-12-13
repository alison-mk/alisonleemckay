<?php
/*
 Template Name: Project Overview
 *
*/
?>

<?php get_header(); ?>

	<div id="content" class="project-overview wrap">
		<h4 class="about-title">I'm a front end developer based in Seattle, Washington.</h4>
		<main id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
				<h2 class="page-title"><?php the_title(); ?></h2>
				<section class="entry-content">
					<?php
						// the content (pretty self explanatory huh)
						the_content();
					?>
					<ul>
						<?php
						$projects = get_field('project_list');
						foreach($projects as $project) {
							global $post;
							$post = $project;
						?>
						<li class="m-all mt-all t-1of2 d-1of3">
							<a href="<?php the_permalink(); ?>"  class="thumbnail" style="background-image:url(<?php the_field('thumbnail_image'); ?>);">
								<h3><?php the_title(); ?></h3>
								<p><?php the_field('project_subtitle'); ?></p>
							</a>
						</li>
						<?php } ?>
						<?php wp_reset_postdata(); ?>
					</ul>

				</section>
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
								<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

			<?php endif; ?>

			<div class="dancing-donuts">
				<div class="top-left"></div>
				<div class="top-right"></div>
				<div class="bottom-left"></div>
				<div class="bottom-right"></div>
			</div>
		</main>
	</div>

<?php get_footer(); ?>
