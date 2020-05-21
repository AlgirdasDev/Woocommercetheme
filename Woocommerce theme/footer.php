<footer>
    <div class="container ">

        <div class="row ">

            <div class="col d-flex align-items-center justify-content-between">

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-menu'
                    )
                )
                ?>

            </div>

        </div>

    </div>
</footer>

<?php wp_footer();?>

