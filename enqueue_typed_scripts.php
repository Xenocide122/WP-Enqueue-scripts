function enqueue_typed_scripts() {
	if(is_page(762) || is_page(775) || is_page(706) || is_page(809))
	{		
		wp_register_script( 'typedTxt', 'https://unpkg.com/https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js', array('jquery') );		
		wp_enqueue_script( 'typedTxt' );
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_typed_scripts' );
