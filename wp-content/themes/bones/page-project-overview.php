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
				<div class="top-left">
					<div class="donut"></div>
					<iframe src="//media1.popsugar-assets.com/files/thumbor/keJRWDI3GDFm8eChFuK5nsCAazY/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2014/03/25/773/n/1922283/c63bdc34df461cbe_tumblr_lnq4sbcAFF1qdk5lp/i/DONT-try-home.gif" frameborder="0" scrolling="no" async allowTransparency="true"></iframe>
				</div>
				<div class="top-right">
					<div class="donut"></div>
					<iframe src="//68.media.tumblr.com/f99b2a0fb41fe99550677920806d3074/tumblr_mzlgg97REa1t5m6pgo1_500.gif" frameborder="0" scrolling="no" async></iframe>
				</div>
				<div class="middle-left">
					<div class="donut"></div>
					<iframe src="//68.media.tumblr.com/39094fccf0a42c32ddd8e2420dca66c5/tumblr_mzzcgbB2By1qc5i9so1_500.gif" frameBorder="0" scrolling="no" async></iframe>
				</div>
				<div class="middle-right">
					<div class="donut"></div>
					<iframe src="//s-media-cache-ak0.pinimg.com/originals/3f/5d/16/3f5d16704eca2b57066602b6ed8252bc.gif" frameborder="0" scrolling="no" async></iframe>
				</div>
				<div class="bottom-left">
					<div class="donut"></div>
					<iframe src="//giphy.com/embed/l396Ua8mfTtszQlk4?html5=true" frameborder="0" scrolling="no" async></iframe>
				</div>
				<div class="bottom-right">
					<div class="donut"></div>
					<iframe src="//www.hodderscape.co.uk/wp-content/uploads/2015/04/Buffy-Stake-gif.gif" frameborder="0" scrolling="no" async></iframe>
				</div>
			</div>
		</main>
	</div>

<?php get_footer(); ?>
