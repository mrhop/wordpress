<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <input type="search" class="search-field" placeholder="<?php echo __( 'Search &hellip;', 'shanyue' ) ?>"
           value="<?php echo get_search_query() ?>" name="s"/>
    <button class="search-submit btn btn-sm"><i class="fa fa-search"></i></button>
</form>


