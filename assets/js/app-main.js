// Plugins
// https://github.com/mjball/jQuery-CheckAll - Works with jquery-2.2.4 and below check js file
// https://github.com/NeXTs/Jets.js
// https://silviomoreto.github.io/bootstrap-select/examples/

$(document).ready(function(){

	//Scroll Handler
	$(window).scroll(function(){
		if($(window).scrollTop()){ //1360 id media query set in .less  && $(window).innerWidth() > 1359
			$('.main-navbar .logo').addClass('inSmall'); //inVisible
		} else {
			$('.main-navbar .logo').removeClass('inSmall'); //inVisible
		}
	});

	//Check All
	if($('.fancy-checkbox-parent').length){

		$('.fancy-checkbox-parent').each(function(){
			var $bulkAction = $(this).parents('.bulk-action');
			var $targetInput = $(this).find('input');
			var targetTable = $(this).attr('data-target');

			$targetInput.checkAll(targetTable, {
				sync: true,
				reportTo: function(count){
					if(count){
						$('.bulk-action').addClass('isVisible');
					} else {
						$('.bulk-action').removeClass('isVisible');
					} 
				}
			});
		});

	}

	//Jet Search 
	if(typeof pluginJetSearch == 'object') pluginJetSearch.destroy();

	if($('#jetsSearch').length){
		pluginJetSearch = new Jets({
			searchTag: '#jetsSearch',
			contentTag: '#table-listing tbody',
			cols: [3]
		});
	}

	//Popover
	if($('[data-toggle="popover"]').length) $('[data-toggle="popover"]').popover();

	//Tooltips
	if($('[data-toggle="tooltip"]').length) $('[data-toggle="tooltip"]').tooltip();

	//Delete Confirm 
	$(document).on('click', '.btn-delete', function(e){
		e.preventDefault();
		var $button = $(this);
		var URL = $button.attr('href');
		var TITLE = "Delete Items";
		var _data = $button.data();

		console.log(_data);

		if('title' in _data) TITLE = _data.title;

		$('#modal-delete .btn-delete').attr('href', URL);
		$('#modal-delete .dc-heading').text(TITLE);
		$('#modal-delete').modal('show');
	});

	//BS - Selectpicker
	if($('.selectpicker').length) $('.selectpicker').selectpicker();

});