<?php get_header(); ?>

<div class="content">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-2">

                <?php dynamic_sidebar('woocommerce-sidebar');?>

            </div>
            <div class="col-lg-10">

                <?php woocommerce_content();?>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
