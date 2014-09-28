(function($) {

  // jquery helper for the thumbs plugin
  $.fn.thumb = function() {
     this.each(function() {
     	 var input = this;
     	 var $input = $(this);
		 var $vislink = $('<div class="toggle">');
		 var data = JSON.parse($('script', $input.parent().parent()).text());
		 var uri = $(this).data('uri');
		 $input.before($vislink);
		 $vislink.on('click', function(e) {
		 	$input.parent().parent().addClass('loading');
		 	data.visible = input.disabled ? '1' : '0';
		 	input.disabled = !input.disabled;
		 	FileModel.update(uri, input.value, data, function(response) {
			 	$input.parent().parent().toggleClass('disabled').removeClass('loading');
		 	}, function(message, response) {
			 	$input.parent().parent().removeClass('loading').addClass('error');
        });
        return false;
		 });
    });

  };

})(jQuery);