<?php get_header();?>

<div id="hero-image">
    <div class="hero-text">
        <h1>ELECTRONIC SCOOTERS</h1>
        <p>Discover your new city partner</p>
        <a href="http://localhost/wordpress/shop/" class="btn btn-light btn-lg" role="button">Products</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
        <?php endwhile; else: endif;?>

    </div>
</div>

<?php get_footer();?>