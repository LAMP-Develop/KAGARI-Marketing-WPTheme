<div id="pagenavi">
<?php
    $big = 9999999999;
    $arg = array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'list',
        'prev_text' => '<i class="fas fa-angle-left"></i> 前へ',
        'next_text' => '次へ <i class="fas fa-angle-right"></i>',
    );
    echo paginate_links($arg);
?>
</div>