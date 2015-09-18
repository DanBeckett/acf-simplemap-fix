(function($) {
	$(document).ready(function(){
		// vars
		$fields = $('body').find('.acf-google-map');

		// validate
		if (!$fields.exists()) {
			return;
		}
		
		if( acf.fields.google_map ) {
			$.getScript('https://www.google.com/jsapi', function() {
				google.load('maps', '3', {
					other_params: 'sensor=false&libraries=places',
					callback: function() {
						$fields.each(function() {
							acf.fields.google_map.set({
								$el: $(this)
							}).init();
						});
					}
				});
			});
    	}
	});
	
})(jQuery);
