<?php $search_text = empty($_GET['s']) ? __('search', 'lizard') : esc_attr(get_search_query()); ?> 
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform" method="get" role="search"><div>
	<input type="text" id="s" name="s" value="<?php echo $search_text; ?>" onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}"><input type="submit" value="" id="searchsubmit">
</div></form>