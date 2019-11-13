<?php $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>


<div id="header-hero" class="heroContent uk-cover-container">

<img src="<?php echo $featimg ?>" alt="" uk-cover="" class="uk-cover" style="height: 647px; width: 1680px;">
<div class="uk-overlay-primary uk-position-cover"></div>
<div class="uk-overlay uk-position-center uk-light uk-text-center">
<div class="uk-grid">
<div class="uk-width-1-1" style="margin: auto;">
<h3>Want Amazing Deals + Special Offers?</h3>
<h1 class="uk-text-bold massive-text">You’ve Come To The Right Place...</h1>
<a uk-scroll="offset: 90" href="#product-tiles" target="_blank" style="margin-right: 6px;" class="uk-button uk-button-primary uk-button-large">Join The Club</a>
</div>
</div>
</div>
</div>
</div>