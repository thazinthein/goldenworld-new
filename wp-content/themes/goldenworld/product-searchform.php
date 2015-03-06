<form role="search" method="get" class="form-wrapper search-form frame inbtn rlarge" id="searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
			<div>
				<label class="screen-reader-text" for="s"><?php _e( '', 'woocommerce' ); ?></label>
				<input type="text" class="search-input" id="search" placeholder="search here" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Search for products', 'woocommerce' ); ?>" />
				<input type="submit" class="search-btn" id="submit" value="<?php echo esc_attr__( '' ); ?>" />
				<input type="hidden" name="post_type" value="product" />
			</div>
</form>


