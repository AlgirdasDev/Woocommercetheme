<form role="search" method="get" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" id="woocommerce-product-search-field-
    <?php echo isset( $index ) ? absint( $index ) : 0; ?>"
           class="form-control shadow-none" placeholder="
           <?php echo esc_attr__( 'Type product name&hellip;', 'woocommerce' ); ?>"
           value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class=" btn btn-outline-dark shadow-none" value="
    <?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>">
        <?php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); ?>
    </button>
    <input type="hidden" name="post_type" value="product" />
</form>
