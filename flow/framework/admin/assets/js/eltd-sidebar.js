
(function($){
	var ElatedSidebar = function(){

		this.widget_wrap = $('.widget-liquid-right');
		this.widget_area = $('#widgets-right');
		this.widget_add  = $('#eltd-add-widget');

		this.create_form();
		this.add_del_button();
		this.bind_events();

	};
	
	ElatedSidebar.prototype = {

		create_form: function(){
			this.widget_wrap.append(this.widget_add.html());
			this.widget_name = this.widget_wrap.find('input[name="eltd-sidebar-widgets"]');
			this.nonce = this.widget_wrap.find('input[name="eltd-delete-sidebar"]').val();
		},

		add_del_button: function(){
			this.widget_area.find('.sidebar-eltd-custom').append('<span class="eltd-delete-button"></span>');
		},

		bind_events: function(){
			this.widget_wrap.on('click', '.eltd-delete-button', $.proxy( this.delete_sidebar, this));
		},

		delete_sidebar: function(e){
			var widget = $(e.currentTarget).parents('.widgets-holder-wrap:eq(0)'),
			title = widget.find('.sidebar-name h2'),
			spinner = title.find('.spinner'),
			widget_name = $.trim(title.text()),
			obj = this;

			$.ajax({
				type: "POST",
				url: window.ajaxurl,
				data: {
					action: 'eltd_ajax_delete_custom_sidebar',
					name: widget_name,
					_wpnonce: obj.nonce
				},

				beforeSend: function(){
					spinner.addClass('activate_spinner');
				},
				success: function(response){     
					if(response == 'sidebar-deleted'){
						widget.slideUp(200, function(){

						$('.widget-control-remove', widget).trigger('click'); //delete all widgets inside
						widget.remove();
						wpWidgets.saveOrder();

						});
					}
				}
			});
		}

	};
	
	$(function()
	{
		new ElatedSidebar();
 	});
	
})(jQuery);	 