/* -------------------- Check Browser --------------------- */

function browser() {

	var isOpera = !!(window.opera && window.opera.version);  // Opera 8.0+
	var isFirefox = testCSS('MozBoxSizing');                 // FF 0.8+
	var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
	    // At least Safari 3+: "[object HTMLElementConstructor]"
	var isChrome = !isSafari && testCSS('WebkitTransform');  // Chrome 1+
	//var isIE = /*@cc_on!@*/false || testCSS('msTransform');  // At least IE6

	function testCSS(prop) {
	    return prop in document.documentElement.style;
	}

	if (isOpera) {

		return false;

	}else if (isSafari || isChrome) {

		return true;

	} else {

		return false;

	}

}

/* ---------- IE8 list style hack (:nth-child(odd)) ---------- */

jQuery(document).ready(function($){

	if($('.messagesList').width()) {

		if(jQuery.browser.version.substring(0, 2) == "8.") {

			$('ul.messagesList li:nth-child(2n+1)').addClass('odd');

		}

	}

});

$(document).ready(function(){


	$("#username").focus(function() {

		$(this).parent(".input-prepend").addClass("input-prepend-focus");

	});

	$("#username").focusout(function() {

		$(this).parent(".input-prepend").removeClass("input-prepend-focus");

	});

	$("#password").focus(function() {

		$(this).parent(".input-prepend").addClass("input-prepend-focus");

	});

	$("#password").focusout(function() {

		$(this).parent(".input-prepend").removeClass("input-prepend-focus");

	});


	/* ---------- Add class .active to current link  ---------- */
	$('ul.main-menu li a').each(function(){

			if($($(this))[0].href==String(window.location)) {

				$(this).parent().addClass('active');

			}

	});

	$('ul.main-menu li ul li a').each(function(){

			if($($(this))[0].href==String(window.location)) {

				$(this).parent().addClass('active');
				$(this).parent().parent().show();

			}

	});

	/* ---------- Submenu  ---------- */

	$('.dropmenu').click(function(e){

		e.preventDefault();

		$(this).parent().find('ul').slideToggle();

	});

	/* ---------- Acivate Functions ---------- */
	template_functions();
	init_masonry();
	sparkline_charts();
	charts();
	calendars();
	growlLikeNotifications();
	widthFunctions();

	if(jQuery.browser.version.substring(0, 2) == "8.") {

		//disable jQuery Knob

	} else {

		circle_progess();

	}

	chart();
	messageLike();

});

/* ---------- Like/Dislike ---------- */

function messageLike(){

	if($('.messagesList')) {

		$('.messagesList').on('click', '.star', function(){

			$(this).removeClass('star');

			$(this).addClass('dislikes');

			//here add your function

		});

		$('.messagesList').on('click', '.dislikes', function(){

			$(this).removeClass('dislikes');

			$(this).addClass('star');

			//here add your function

		});

	}

}

/* ---------- Check Retina ---------- */

function retina(){

	retinaMode = (window.devicePixelRatio > 1);

	return retinaMode;

}

/* ---------- Chart ---------- */

function chart(){

	if($('.verticalChart')) {

		$('.singleBar').each(function(){

			var theColorIs = $(this).parent().parent().parent().css("background");

			var percent = $(this).find('.value span').html();

			$(this).find('.value span').css('color',theColorIs);

			$(this).find('.value').animate({height:percent}, 2000, function() {

				$(this).find('span').fadeIn();

			});

		});

	}

}

/* ---------- Masonry Gallery ---------- */

function init_masonry(){
    var $container = $('.masonry-gallery');

    var gutter = 6;
    var min_width = 250;
    $container.imagesLoaded( function(){
        $container.masonry({
            itemSelector : '.masonry-thumb',
            gutterWidth: gutter,
            isAnimated: true,
              columnWidth: function( containerWidth ) {
                var num_of_boxes = (containerWidth/min_width | 0);

                var box_width = (((containerWidth - (num_of_boxes-1)*gutter)/num_of_boxes) | 0) ;

                if (containerWidth < min_width) {
                    box_width = containerWidth;
                }

                $('.masonry-thumb').width(box_width);

                return box_width;
              }
        });
    });
}

/* ---------- Numbers Sepparator ---------- */

function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1.$2");
    return x;
}

/* ---------- Template Functions ---------- */

function template_functions(){

	/* ---------- ToDo List Action Buttons ---------- */

	$(".todo-remove").click(function(){

		$(this).parent().parent().fadeTo("slow", 0.00, function(){ //fade
			$(this).slideUp("slow", function() { //slide up
		    	$(this).remove(); //then remove from the DOM
		    });
		});


		return false;
	});

	$(".todo-list").find('.action').each(function(){

		$(this).click(function(){

			if($(this).hasClass('icon-check-empty')) {

				$(this).removeClass('icon-check-empty');
				$(this).addClass('icon-check');

				$(this).parent().css('text-decoration','line-through');

			} else {

				$(this).removeClass('icon-check');
				$(this).addClass('icon-check-empty');

				$(this).parent().css('text-decoration','none');

			}

			return false;

		});

	});



	/* ---------- Skill Bars ---------- */
	$(".meter > span").each(function() {

		var getColor = $(this).parent().css('borderTopColor');

		$(this).css('background',getColor);

		$(this)
		.data("origWidth", $(this).width())
		.width(0)
		.animate({
			width: $(this).data("origWidth")
		}, 3000);
	});

	/* ---------- Disable moving to top ---------- */
	$('a[href="#"][data-top!=true]').click(function(e){
		e.preventDefault();
	});

	/* ---------- Text editor ---------- */
	$('.cleditor').cleditor();

	/* ---------- Datapicker ---------- */
	$('.datepicker').datepicker();

	/* ---------- Notifications ---------- */
	$('.noty').click(function(e){
		e.preventDefault();
		var options = $.parseJSON($(this).attr('data-noty-options'));
		noty(options);
	});

	/* ---------- Uniform ---------- */
	$("input:checkbox, input:radio, input:file").not('[data-no-uniform="true"],#uniform-is-ajax').uniform();

	/* ---------- Choosen ---------- */
	$('[data-rel="chosen"],[rel="chosen"]').chosen();

	/* ---------- Tabs ---------- */
	$('#myTab a:first').tab('show');
	$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});

	/* ---------- Makes elements soratble, elements that sort need to have id attribute to save the result ---------- */
	$('.sortable').sortable({
		revert:true,
		cancel:'.btn,.box-content,.nav-header',
		update:function(event,ui){
			//line below gives the ids of elements, you can make ajax call here to save it to the database
			//console.log($(this).sortable('toArray'));
		}
	});

	/* ---------- Tooltip ---------- */
	$('[rel="tooltip"],[data-rel="tooltip"]').tooltip({"placement":"bottom",delay: { show: 400, hide: 200 }});

	/* ---------- Popover ---------- */
	$('[rel="popover"],[data-rel="popover"]').popover();

	/* ---------- File Manager ---------- */
	var elf = $('.file-manager').elfinder({
		url : 'misc/elfinder-connector/connector.php'  // connector URL (REQUIRED)
	}).elfinder('instance');

	/* ---------- Star Rating ---------- */
	$('.raty').raty({
		score : 4 //default stars
	});

	/* ---------- Uploadify ---------- */
	$('#file_upload').uploadify({
		'swf'      : 'misc/uploadify.swf',
		'uploader' : 'misc/uploadify.php'
		// Put your options here
	});

	/* ---------- Fullscreen ---------- */
	$('#toggle-fullscreen').button().click(function () {
		var button = $(this), root = document.documentElement;
		if (!button.hasClass('active')) {
			$('#thumbnails').addClass('modal-fullscreen');
			if (root.webkitRequestFullScreen) {
				root.webkitRequestFullScreen(
					window.Element.ALLOW_KEYBOARD_INPUT
				);
			} else if (root.mozRequestFullScreen) {
				root.mozRequestFullScreen();
			}
		} else {
			$('#thumbnails').removeClass('modal-fullscreen');
			(document.webkitCancelFullScreen ||
				document.mozCancelFullScreen ||
				$.noop).apply(document);
		}
	});

	/* ---------- Datable ---------- */
	$('.datatable').dataTable({
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
			"oLanguage": {
			"sLengthMenu": "_MENU_ records per page"
			}
		} );
	$('.btn-close').click(function(e){
		e.preventDefault();
		$(this).parent().parent().parent().fadeOut();
	});
	$('.btn-minimize').click(function(e){
		e.preventDefault();
		var $target = $(this).parent().parent().next('.box-content');
		if($target.is(':visible')) $('i',$(this)).removeClass('chevron-up').addClass('chevron-down');
		else 					   $('i',$(this)).removeClass('chevron-down').addClass('chevron-up');
		$target.slideToggle();
	});
	$('.btn-setting').click(function(e){
		e.preventDefault();
		$('#myModal').modal('show');
	});


	/* ---------- Progress  ---------- */

		$(".simpleProgress").progressbar({
			value: 89
		});

		$(".progressAnimate").progressbar({
			value: 1,
			create: function() {
				$(".progressAnimate .ui-progressbar-value").animate({"width":"100%"},{
					duration: 10000,
					step: function(now){
						$(".progressAnimateValue").html(parseInt(now)+"%");
					},
					easing: "linear"
				})
			}
		});

		$(".progressUploadAnimate").progressbar({
			value: 1,
			create: function() {
				$(".progressUploadAnimate .ui-progressbar-value").animate({"width":"100%"},{
					duration: 20000,
					easing: 'linear',
					step: function(now){
						$(".progressUploadAnimateValue").html(parseInt(now*40.96)+" Gb");
					},
					complete: function(){
						$(".progressUploadAnimate + .field_notice").html("<span class='must'>Upload Finished</span>");
					}
				})
			}
		});

		if($(".taskProgress")) {

			$(".taskProgress").each(function(){

				var endValue = parseInt($(this).html());

				$(this).progressbar({
					value: endValue
				});

				$(this).parent().find(".percent").html(endValue + "%");

			});

		}

		if($(".progressBarValue")) {

			$(".progressBarValue").each(function(){

				var endValueHTML = $(this).find(".progressCustomValueVal").html();

				var endValue = parseInt(endValueHTML);

				$(this).find(".progressCustomValue").progressbar({

					value: 1,
					create: function() {
						$(this).find(".ui-progressbar-value").animate({"width": endValue + "%"},{
							duration: 5000,
							step: function(now){

								$(this).parent().parent().parent().find(".progressCustomValueVal").html(parseInt(now)+"%");
							},
							easing: "linear"
						})
					}
				});

			});

		}


	/* ---------- Custom Slider ---------- */
		$(".sliderSimple").slider();

		$(".sliderMin").slider({
			range: "min",
			value: 180,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderMinLabel" ).html( "$" + ui.value );
			}
		});

		$(".sliderMin-1").slider({
			range: "min",
			value: 50,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderMin1Label" ).html( "$" + ui.value );
			}
		});

		$(".sliderMin-2").slider({
			range: "min",
			value: 100,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderMin2Label" ).html( "$" + ui.value );
			}
		});

		$(".sliderMin-3").slider({
			range: "min",
			value: 150,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderMin3Label" ).html( "$" + ui.value );
			}
		});

		$(".sliderMin-4").slider({
			range: "min",
			value: 250,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderMin4Label" ).html( "$" + ui.value );
			}
		});

		$(".sliderMin-5").slider({
			range: "min",
			value: 350,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderLabel" ).html( "$" + ui.value );
			}
		});

		$(".sliderMin-6").slider({
			range: "min",
			value: 450,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderLabel" ).html( "$" + ui.value );
			}
		});

		$(".sliderMin-7").slider({
			range: "min",
			value: 550,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderLabel" ).html( "$" + ui.value );
			}
		});

		$(".sliderMin-8").slider({
			range: "min",
			value: 650,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderLabel" ).html( "$" + ui.value );
			}
		});


		$(".sliderMax").slider({
			range: "max",
			value: 280,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( ".sliderMaxLabel" ).html( "$" + ui.value );
			}
		});

		$( ".sliderRange" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 192, 470 ],
			slide: function( event, ui ) {
				$( ".sliderRangeLabel" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});

		$( "#sliderVertical-1" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 60,
		});

		$( "#sliderVertical-2" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 40,
		});

		$( "#sliderVertical-3" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 30,
		});

		$( "#sliderVertical-4" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 15,
		});

		$( "#sliderVertical-5" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 40,
		});

		$( "#sliderVertical-6" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 80,
		});

		$( "#sliderVertical-7" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 60,
		});

		$( "#sliderVertical-8" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 40,
		});

		$( "#sliderVertical-9" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 30,
		});

		$( "#sliderVertical-10" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 15,
		});

		$( "#sliderVertical-11" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 40,
		});

		$( "#sliderVertical-12" ).slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 80,
		});

}

/* ---------- Circle Progess Bars ---------- */

function circle_progess() {

	var divElement = $('div'); //log all div elements

	if (retina()) {

		$(".whiteCircle").knob({
	        'min':0,
	        'max':100,
	        'readOnly': true,
	        'width': 240,
	        'height': 240,
			'bgColor': 'rgba(255,255,255,0.5)',
	        'fgColor': 'rgba(255,255,255,0.9)',
	        'dynamicDraw': true,
	        'thickness': 0.2,
	        'tickColorizeValues': true
	    });

		$(".circleStat").css('zoom',0.5);
		$(".whiteCircle").css('zoom',0.999);


	} else {

		$(".whiteCircle").knob({
	        'min':0,
	        'max':100,
	        'readOnly': true,
	        'width': 120,
	        'height': 120,
			'bgColor': 'rgba(255,255,255,0.5)',
	        'fgColor': 'rgba(255,255,255,0.9)',
	        'dynamicDraw': true,
	        'thickness': 0.2,
	        'tickColorizeValues': true
	    });

	}



	$(".circleStatsItemBox").each(function(){

		var value = $(this).find(".value > .number").html();
		var unit = $(this).find(".value > .unit").html();
		var percent = $(this).find("input").val()/100;

		countSpeed = 2300*percent;

		endValue = value*percent;

		$(this).find(".count > .unit").html(unit);
		$(this).find(".count > .number").countTo({

			from: 0,
		    to: endValue,
		    speed: countSpeed,
		    refreshInterval: 50

		});

		//$(this).find(".count").html(value*percent + unit);

	});

}


function growlLikeNotifications() {

	$('#add-sticky').click(function(){

		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a sticky notice!',
			// (string | mandatory) the text inside the notification
			text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
			// (string | optional) the image to display on the left
			image: 'img/avatar.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: true,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});

		// You can have it return a unique id, this can be used to manually remove it later using
		/* ----------
		setTimeout(function(){

			$.gritter.remove(unique_id, {
				fade: true,
				speed: 'slow'
			});

		}, 6000)
		*/

		return false;

	});

	$('#add-regular').click(function(){

		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a regular notice!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
			// (string | optional) the image to display on the left
			image: 'img/avatar.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: ''
		});

		return false;

	});

    $('#add-max').click(function(){

        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a notice with a max of 3 on screen at one time!',
            // (string | mandatory) the text inside the notification
            text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
            // (string | optional) the image to display on the left
            image: 'img/avatar.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (function) before the gritter notice is opened
            before_open: function(){
                if($('.gritter-item-wrapper').length == 3)
                {
                    // Returning false prevents a new gritter from opening
                    return false;
                }
            }
        });

        return false;

    });

	$('#add-without-image').click(function(){

		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a notice without an image!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.'
		});

		return false;
	});

    $('#add-gritter-light').click(function(){

        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a light notification',
            // (string | mandatory) the text inside the notification
            text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
            class_name: 'gritter-light'
        });

        return false;
    });

	$('#add-with-callbacks').click(function(){

		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a notice with callbacks!',
			// (string | mandatory) the text inside the notification
			text: 'The callback is...',
			// (function | optional) function called before it opens
			before_open: function(){
				alert('I am called before it opens');
			},
			// (function | optional) function called after it opens
			after_open: function(e){
				alert("I am called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + e);
			},
			// (function | optional) function called before it closes
			before_close: function(e, manual_close){
                var manually = (manual_close) ? 'The "X" was clicked to close me!' : '';
				alert("I am called before it closes: I am passed the jQuery object for the Gritter element... \n" + manually);
			},
			// (function | optional) function called after it closes
			after_close: function(e, manual_close){
                var manually = (manual_close) ? 'The "X" was clicked to close me!' : '';
				alert('I am called after it closes. ' + manually);
			}
		});

		return false;
	});

	$('#add-sticky-with-callbacks').click(function(){

		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a sticky notice with callbacks!',
			// (string | mandatory) the text inside the notification
			text: 'Sticky sticky notice.. sticky sticky notice...',
			// Stickeh!
			sticky: true,
			// (function | optional) function called before it opens
			before_open: function(){
				alert('I am a sticky called before it opens');
			},
			// (function | optional) function called after it opens
			after_open: function(e){
				alert("I am a sticky called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + e);
			},
			// (function | optional) function called before it closes
			before_close: function(e){
				alert("I am a sticky called before it closes: I am passed the jQuery object for the Gritter element... \n" + e);
			},
			// (function | optional) function called after it closes
			after_close: function(){
				alert('I am a sticky called after it closes');
			}
		});

		return false;

	});

	$("#remove-all").click(function(){

		$.gritter.removeAll();
		return false;

	});

	$("#remove-all-with-callbacks").click(function(){

		$.gritter.removeAll({
			before_close: function(e){
				alert("I am called before all notifications are closed.  I am passed the jQuery object containing all  of Gritter notifications.\n" + e);
			},
			after_close: function(){
				alert('I am called after everything has been closed.');
			}
		});
		return false;

	});


}


/* ---------- Additional functions for data table ---------- */
$.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings )
{
	return {
		"iStart":         oSettings._iDisplayStart,
		"iEnd":           oSettings.fnDisplayEnd(),
		"iLength":        oSettings._iDisplayLength,
		"iTotal":         oSettings.fnRecordsTotal(),
		"iFilteredTotal": oSettings.fnRecordsDisplay(),
		"iPage":          Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),
		"iTotalPages":    Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )
	};
}
$.extend( $.fn.dataTableExt.oPagination, {
	"bootstrap": {
		"fnInit": function( oSettings, nPaging, fnDraw ) {
			var oLang = oSettings.oLanguage.oPaginate;
			var fnClickHandler = function ( e ) {
				e.preventDefault();
				if ( oSettings.oApi._fnPageChange(oSettings, e.data.action) ) {
					fnDraw( oSettings );
				}
			};

			$(nPaging).addClass('pagination').append(
				'<ul>'+
					'<li class="prev disabled"><a href="#">&larr; '+oLang.sPrevious+'</a></li>'+
					'<li class="next disabled"><a href="#">'+oLang.sNext+' &rarr; </a></li>'+
				'</ul>'
			);
			var els = $('a', nPaging);
			$(els[0]).bind( 'click.DT', { action: "previous" }, fnClickHandler );
			$(els[1]).bind( 'click.DT', { action: "next" }, fnClickHandler );
		},

		"fnUpdate": function ( oSettings, fnDraw ) {
			var iListLength = 5;
			var oPaging = oSettings.oInstance.fnPagingInfo();
			var an = oSettings.aanFeatures.p;
			var i, j, sClass, iStart, iEnd, iHalf=Math.floor(iListLength/2);

			if ( oPaging.iTotalPages < iListLength) {
				iStart = 1;
				iEnd = oPaging.iTotalPages;
			}
			else if ( oPaging.iPage <= iHalf ) {
				iStart = 1;
				iEnd = iListLength;
			} else if ( oPaging.iPage >= (oPaging.iTotalPages-iHalf) ) {
				iStart = oPaging.iTotalPages - iListLength + 1;
				iEnd = oPaging.iTotalPages;
			} else {
				iStart = oPaging.iPage - iHalf + 1;
				iEnd = iStart + iListLength - 1;
			}

			for ( i=0, iLen=an.length ; i<iLen ; i++ ) {
				// remove the middle elements
				$('li:gt(0)', an[i]).filter(':not(:last)').remove();

				// add the new list items and their event handlers
				for ( j=iStart ; j<=iEnd ; j++ ) {
					sClass = (j==oPaging.iPage+1) ? 'class="active"' : '';
					$('<li '+sClass+'><a href="#">'+j+'</a></li>')
						.insertBefore( $('li:last', an[i])[0] )
						.bind('click', function (e) {
							e.preventDefault();
							oSettings._iDisplayStart = (parseInt($('a', this).text(),10)-1) * oPaging.iLength;
							fnDraw( oSettings );
						} );
				}

				// add / remove disabled classes from the static elements
				if ( oPaging.iPage === 0 ) {
					$('li:first', an[i]).addClass('disabled');
				} else {
					$('li:first', an[i]).removeClass('disabled');
				}

				if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
					$('li:last', an[i]).addClass('disabled');
				} else {
					$('li:last', an[i]).removeClass('disabled');
				}
			}
		}
	}
});

/* ---------- Page width functions ---------- */

$(window).bind("resize", widthFunctions);

function widthFunctions(e) {

    var winHeight = $(window).height();
    var winWidth = $(window).width();

	var contentHeight = $("#content").height();

	if (winHeight) {

		$("#content").css("min-height",winHeight);

	}

	if (contentHeight) {

		$("#sidebar-left2").css("height",contentHeight);

	}

	if (winWidth < 980 && winWidth > 750) {

		if($("#sidebar-left").hasClass("span2")) {

			$("#sidebar-left").removeClass("span2");
			$("#sidebar-left").addClass("span1");

		}

		if($("#content").hasClass("span10")) {

			$("#content").removeClass("span10");
			$("#content").addClass("span11");

		}


		$("a").each(function(){

			if($(this).hasClass("quick-button-small span1")) {

				$(this).removeClass("quick-button-small span1");
				$(this).addClass("quick-button span2 changed");

			}

		});

		$(".circleStatsItem, .circleStatsItemBox").each(function() {

			var getOnTablet = $(this).parent().attr('onTablet');
			var getOnDesktop = $(this).parent().attr('onDesktop');

			if (getOnTablet) {

				$(this).parent().removeClass(getOnDesktop);
				$(this).parent().addClass(getOnTablet);

			}

		});

		$(".box").each(function(){

			var getOnTablet = $(this).attr('onTablet');
			var getOnDesktop = $(this).attr('onDesktop');

			if (getOnTablet) {

				$(this).removeClass(getOnDesktop);
				$(this).addClass(getOnTablet);

			}

		});

		$(".widget").each(function(){

			var getOnTablet = $(this).attr('onTablet');
			var getOnDesktop = $(this).attr('onDesktop');

			if (getOnTablet) {

				$(this).removeClass(getOnDesktop);
				$(this).addClass(getOnTablet);

			}

		});

		$(".statbox").each(function(){

			var getOnTablet = $(this).attr('onTablet');
			var getOnDesktop = $(this).attr('onDesktop');

			if (getOnTablet) {

				$(this).removeClass(getOnDesktop);
				$(this).addClass(getOnTablet);

			}

		});

	} else {

		if($("#sidebar-left").hasClass("span1")) {

			$("#sidebar-left").removeClass("span1");
			$("#sidebar-left").addClass("span2");

		}

		if($("#content").hasClass("span11")) {

			$("#content").removeClass("span11");
			$("#content").addClass("span11");

		}

		$("a").each(function(){

			if($(this).hasClass("quick-button span2 changed")) {

				$(this).removeClass("quick-button span2 changed");
				$(this).addClass("quick-button-small span1");

			}

		});

		$(".circleStatsItem, .circleStatsItemBox").each(function() {

			var getOnTablet = $(this).parent().attr('onTablet');
			var getOnDesktop = $(this).parent().attr('onDesktop');

			if (getOnTablet) {

				$(this).parent().removeClass(getOnTablet);
				$(this).parent().addClass(getOnDesktop);

			}

		});

		$(".box").each(function(){

			var getOnTablet = $(this).attr('onTablet');
			var getOnDesktop = $(this).attr('onDesktop');

			if (getOnTablet) {

				$(this).removeClass(getOnTablet);
				$(this).addClass(getOnDesktop);

			}

		});

		$(".widget").each(function(){

			var getOnTablet = $(this).attr('onTablet');
			var getOnDesktop = $(this).attr('onDesktop');

			if (getOnTablet) {

				$(this).removeClass(getOnTablet);
				$(this).addClass(getOnDesktop);

			}

		});

		$(".statbox").each(function(){

			var getOnTablet = $(this).attr('onTablet');
			var getOnDesktop = $(this).attr('onDesktop');

			if (getOnTablet) {

				$(this).removeClass(getOnTablet);
				$(this).addClass(getOnDesktop);

			}

		});

	}

	if($('.timeline')) {

		$('.timeslot').each(function(){

			var timeslotHeight = $(this).find('.task').outerHeight();

			$(this).css('height',timeslotHeight);

		});

	}

}
