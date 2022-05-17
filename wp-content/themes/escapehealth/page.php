<?php get_header(); ?>
<main id="content" role="main">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header class="header">
			<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
		</header>
		<div class="entry-content" itemprop="mainContentOfPage">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>