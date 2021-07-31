<div class="product-card">
    <div class="product-card__img">
        <a href="<?php the_permalink();?>" class="block-link">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="#">
        </a>
    </div>
    <div class="product-card__info">
        <span class="product-card__brand tag"><?php the_field('brand');?></span>
        <h4 class="product-card__title"><?php the_title();?></h4>
        <span class=" product-card__price tag">£<?php the_field('price');?></span>
    </div>
    <a href="<?php the_permalink();?>" class="btn product-card__btn">View</a>
</div>