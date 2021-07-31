<section class="row section-spacing">
    <div class="img-text<?php if($flipped == true){ echo ' img-text--flipped'; }?>">

        <div class="img-text__img">

            <?php
                $small = $image['sizes']['pod-img-small'];
                $full = $image['sizes']['pod-img'];
            ?>

            <picture>
                <source srcset="<?php echo esc_url($small); ?>"
                        media="(max-width: 640px)">
                <img src="<?php echo esc_url($full); ?>" alt="<?php echo $image['alt']?>" />
            </picture>

        </div>

        <div class="img-text__text">

            <div class="img-text__text-contain">

                <h3 class="h2 text-outline"><?php echo $title; ?></h3>
                <p><?php echo $content; ?></p>
                <a class="btn btn--alt" href="<?php echo $link; ?>"><?php echo $button;?></a>

            </div>

        </div>
    </div>
</section>