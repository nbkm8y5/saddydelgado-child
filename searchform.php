<?php
$search_icon = '<i class="fa fa-search" aria-hidden="true"></i>';
?>

<form role="search" method="get" class="searchform group" action="<?php echo home_url('/'); ?>">
    <label>
        <input type="search" class="search-field"
               value="<?php echo get_search_query() ?>" name="s"/>
    </label>
    <button type="submit" class="search-submit btn-search">
        <i class="fa fa-search" aria-hidden="true"></i>
    </button>

</form>