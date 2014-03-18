<div class="pad15"></div>
<form role="search" method="get" id="searchform" action="<?php echo home_url(); ?>">
<fieldset>

		<input type="text" value="<?php echo esc_attr( apply_filters( 'the_search_query' , get_search_query() ) ); ?>" name="s" id="s" class="span3" placeholder="search" />

</fieldset>
</form>