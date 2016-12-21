<?php get_header(); ?>

<main id="content" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="row">
					<?php if (have_posts()): ?>
						<?php $count = 0; ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php $count++; ?>

							<div class="col-md-6">
								<?php get_template_part('partials/content-entry-preview'); ?>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<div class="col-md-12">
							<?php get_template_part('partials/content-none'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
