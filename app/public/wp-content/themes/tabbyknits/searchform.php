<?php
// This will be used as the search template wherever the search shows up, in a widget, or in the template by using the following hook:
// get_search_form( true );
//
?>
<form method="get" id="searchform" class="search-box" action="<?php echo home_url(); ?>/" class="form-inline">
    <label class="sr-only" for="s"><?php _e('Search:', 'tabbyknits'); ?></label>
    <input type="text" value="" placeholder=" " name="s" id="s" />
    <button type="reset"></button>
</form>