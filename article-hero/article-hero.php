<?php $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>


<div class="image-breaker uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="images/hero.jpeg" data-sizes="(min-width: 650px) 650px, 100vw" uk-img="" style="background-image: url(<?php echo $featimg ?>);"></div>