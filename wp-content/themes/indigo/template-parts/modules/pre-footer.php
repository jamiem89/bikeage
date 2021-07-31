<section class="row section-spacing bg-bright">
    <div class="img-text">
        <div class="img-text__img">
            <picture class="img-no-stripe">
                <source srcset="<?php echo esc_url($small); ?>"
                        media="(max-width: 640px)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/googlemap.jpg" alt="<?php echo $image['alt']?>" />
            </picture>
        </div>

        <div class="img-text__text img-text__text-left">

            <div class="img-text__text-contain">

                <h3 class="h2 text-outline--light">Finding us</h3>
                <ul class="icon-list">
                    <li class="icon__location"><a href="#">2 Collum Lane, Ashby, Scunthorpe DN16 2TA</a></li>
                    <li class="icon__phone"><a href="#">01724 844409</a></li>
                    <li class="icon__clock"><a href="#">9:30 - 4pm</a></li>
                    <li class="icon__no">Closed Wednesday and Sunday</li>
                </ul>
            </div>

        </div>
    </div>
</section>