<?php $product = aff_get_product(); ?>
<?php $starRating = aff_get_product_review_rating($product); ?>

<?php if($starRating !== null): ?>
	<p class="product-review" itemprop="aggregateRating"
	   itemscope itemtype="http://schema.org/AggregateRating">

		<span class="product-review-rating" itemprop="reviewRating"
			  itemscope itemtype="http://schema.org/Rating">
				<meta itemprop="worstRating" content="0">
				<meta itemprop="bestRating" content="5">
				<meta itemprop="ratingValue" content="<?php echo $starRating; ?>">
			<?php for($i = 0; $i < 5; $i++): ?>
				<?php if ($starRating >= ($i + 1)): ?>
					<i class="fa fa-star fa-lg" aria-hidden="true"></i>
				<?php elseif($starRating >= ($i + 0.5)): ?>
					<i class="fa fa-star-half-o fa-lg" aria-hidden="true"></i>
				<?php else: ?>
					<i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
				<?php endif; ?>
			<?php endfor; ?>
		</span>

		<?php if($votes = aff_get_product_review_votes($product)): ?>
			<span class="product-review-number-rating" itemprop="aggregateRating"
				  itemscope itemtype="http://schema.org/AggregateRating">
					<?php echo sprintf(_n(
						'based on <span itemprop="reviewCount">%s</span> review',
						'based on <span itemprop="reviewCount">%s</span> reviews',
						$votes, 'affilicious-theme'),
						$votes);
					?>
			</span>
		<?php endif; ?>
	</p>
<?php endif; ?>

