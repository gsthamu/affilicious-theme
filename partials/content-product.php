<?php do_action('affilicious_theme_product_above_post'); ?>

<?php $product = aff_get_product(); ?>
<article id="product-<?php the_ID(); ?>" <?php post_class('product'); ?>
         itemscope itemtype="http://schema.org/Product">

    <header class="product-header">
        <div class="panel">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="product-title" itemprop="name">
                        <?php the_title(); ?>
                    </h1>

                    <?php get_template_part('partials/content-product-review'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="row">
                        <div class="col-xs-12">
                            <?php get_template_part('partials/content-product-image-gallery'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6">
                    <?php if(has_excerpt()): ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-excerpt" itemprop="description">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-md-12">
                            <?php aff_the_product_attribute_choices($product); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php get_template_part('partials/content-product-details'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php if(get_the_content() !== ''): ?>
        <section class="product-body" itemprop="text">
            <?php the_content(); ?>
        </section>
    <?php endif; ?>

    <footer class="product-footer">
        <?php get_template_part('partials/content-product-relations'); ?>
    </footer>
</article>

<?php do_action('affilicious_theme_product_below_post'); ?>
