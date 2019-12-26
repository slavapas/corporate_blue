
<form name="search" action="<?php echo home_url( '/' ) ?>" method="get" class="search-form">
    <span class="screen-reader-text"><?php echo _x( '', 'label' ) ?></span>
    <input class="form-control" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="<?php echo __('Search', 'whitesquare'); ?>" class="input">
    <div class="input-group-btn">
        <button type="submit" class="btn btn-primary"><?php echo __('SEARCH', 'whitesquare'); ?></button>
    </div>
</form>
