<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
<!-- <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x('Search', 'submit button'); ?>"> -->
<button class="abs-cr" type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
</form>