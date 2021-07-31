<?php
/*
    Template Name: Home page
*/

get_header();

get_template_part('template-parts/modules/hero');?>

<!-- Latest products -->

<?php
$the_query = new WP_Query( array(
    'post_type' => 'product',
    'posts_per_page' => 4,
));
?>
<?php if ( $the_query->have_posts() ) : ?>

    <section class="row section-spacing">
        <div class="latest-products">
            <h2 class="h1 text-outline--alt section-title"><?php the_field('latest_bikes_title');?></h2>
            <div class="latest-products-grid grid-quarters">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php get_template_part('template-parts/modules/product-card');?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="section__footer section-spacing pb-0">
                <a href="<?php echo get_post_type_archive_link('product'); ?>" class="btn btn--alt">View all bikes</a>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if(get_field(enable_pod_one)) {

set_query_var( 'title', get_field('pod_one_title'));
set_query_var( 'image', get_field('pod_one_image'));
set_query_var( 'content', get_field('pod_one_content'));
set_query_var( 'button', get_field('pod_one_button'));
set_query_var( 'link', get_field('pod_one_link'));
// Add checkbox for this in CMS
set_query_var( 'flipped', false);

get_template_part('template-parts/modules/img-text');

} ?>

<?php if(get_field(enable_pod_two)) {

set_query_var( 'title', get_field('pod_two_title'));
set_query_var( 'image', get_field('pod_two_image'));
set_query_var( 'content', get_field('pod_two_content'));
set_query_var( 'button', get_field('pod_two_button'));
set_query_var( 'link', get_field('pod_two_link'));
// Add checkbox for this in CMS
set_query_var( 'flipped', true);

get_template_part('template-parts/modules/img-text');

} ?>

<?php get_template_part('template-parts/modules/pre-footer'); ?>
<?php get_template_part('template-parts/global/footer'); ?>