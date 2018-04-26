(function($){
	var initLayout = function() {
		
		$('#colorFondoSelector').ColorPicker({
			color: $("#ColorBotoDestacat").val(),

			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#colorFondoSelector div').css('backgroundColor', '#' + hex);
				$('#DivFonsButtonProva').css('backgroundColor', '#' + hex);
				$('#BordeSButton').css('backgroundColor', '#' + hex);
				$('#BordeC1Button').css('backgroundColor', '#' + hex);
				$('#BordeC2Button').css('backgroundColor', '#' + hex);
				$('#BordeIButton').css('backgroundColor', '#' + hex);
				$("#ColorBotoDestacat").val('#' + hex);
			}
		});
		
			$('#colorTextSelector').ColorPicker({
			color: 	$("#ColorTextDestacat").val(),
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#colorTextSelector div').css('backgroundColor', '#' + hex);
				$('#DivTextButtonProva').css('color', '#' + hex);
				$("#ColorTextDestacat").val('#' + hex);
			}
		});

			$('#colorWeb').ColorPicker({
			color: 	$("#VARColorWeb").val(),
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$("#VARColorWeb").val(hex);
				CanviaColorWeb(hex);
				//$('#colorWeb').css('backgroundColor', '#' + hex);
				
				$('#FondoSelectorColorWeb').css('backgroundColor', '#' + hex);
			}
		});
	
			$('#ColorButtons').ColorPicker({
			color: 	$("#VARColorButtons").val(),
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$("#VARColorButtons").val(hex);
				CanviaColorButtons(hex);
				//$('#colorWeb').css('backgroundColor', '#' + hex);
				
				$('#FondoSelectorColorButtons').css('backgroundColor', '#' + hex);
			}
		});

	};
	
	var showTab = function(e) {
		var tabIndex = $('ul.navigationTabs a')
							.removeClass('active')
							.index(this);
		$(this)
			.addClass('active')
			.blur();
		$('div.tab')
			.hide()
				.eq(tabIndex)
				.show();
	};
	
	EYE.register(initLayout, 'init');
})(jQuery)