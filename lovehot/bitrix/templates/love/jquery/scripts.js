(function($) {
  /**
   * Test whether argument elements are parents
   * of the first matched element
   * @return boolean
   * @param objs
   *    a jQuery selector, selection, element, or array of elements
   */
  $.fn.hasParent = function(objs) {
    // ensure that objs is a jQuery array
    objs = $(objs);
    var found = false;
    $(this[0]).parents().andSelf().each(function() {
      if ($.inArray(this, objs) != -1) {
        found = true;
        return false; // stops the each...
      }
    });
    return found;
  }
  
  var objid = 0;
  var expando = 'cOId';
  
  /**
   * Essentially, the opposite of click(), this function
   * defines what happens when the document is clicked outside
   * of the targeted element(s)
   * @return jQuery
   * @param fn required
   *   Required function to execute
   * @param once optional
   *   If true, function will be executed only on the first click
   */
  $.fn.clickOutside = function(fn, once) {
    once = (once) ? true : false;
    return $(this).each(function() {
      var id = this[expando];
      if (!id) {
        id = this[expando] = ++objid;
      }
      var obj = this;
      // bind a namespaced function to the document
      $(document).bind('click.' + expando + '.' + id, function(e){
        if (!e) var e = window.event;
        if (!$(e.target).hasParent(obj)) {
          if (once) {
            $(document).unbind('click.' + expando + '.' + id);
          }
          fn.call(obj);
        }
      });
    });
  };
}(jQuery));

$(document).ready(function(){

	$(".captcha img").click(function(){
		var c = $(this).attr("src") + "&" + Math.round(Math.random(1,999));
		$(this).attr("src",c);
	});
	$(".captcha_line img").click(function(){
		var c = $(this).attr("src") + "&" + Math.round(Math.random(1,999));
		$(this).attr("src",c);
	});
	
	$(window).resize(function() {
		if(document.documentElement.clientWidth > 840) {
		    $('.l_menu >ul > li').hover(function(){
				if ($(this).parents('.level_two')==false) alert("11");
				$(this).addClass('active');
				$(this).find('.level_two').show();
				var maxHeight = 0, h = 0; 
				$(this).find('ul').each(function(){
					h = $(this).height();
					if(maxHeight < h) maxHeight = h;
				});
				$(this).find('ul').height(maxHeight);
				
				if (window.PIE) { $('.l_menu .level_two ul').each(function() {PIE.attach(this);	}); }
			}, function(){
				$(this).find('.level_two').hide();
				$(this).removeClass('active');
			});	
	  	}
	});

		$(document).ready(function() {

		  var toggle_mnu = document.querySelector(".toggle_mnu");
		  var menu = document.querySelector(".mobile_menu_container");
		  var overlay = document.querySelector(".modal_overlay");
		  var m_mnu = document.querySelector(".mobile_mnu");
		  var h = 225;

		  // var link = document.querySelectorAll(".link");
			$(window).scroll(function() {
		  if ($(this).scrollTop() > h) {
           $('.mobile_mnu').addClass('fixed');
       		} else {
	           $('.mobile_mnu').removeClass('fixed');
	       }
	     });

		  if ($(".toggle_mnu").length > 0) {
			toggle_mnu.addEventListener("click", function(event) {
			  event.preventDefault(); //отмена стандартного дейстивия
			  overlay.classList.toggle("menu_show");
			  m_mnu.classList.toggle("m_menu_show");
			  menu.classList.toggle("menu_show"); //добавляем класс
			  toggle_mnu.classList.toggle("on");
			})
		  }
		  var main_menu = document.querySelector("section.l_menu")
		  var ctg_item = document.querySelectorAll("a.menu_part_name_sub")

		  $(".menu_part_name").click(function(event) {
			event.preventDefault();
			main_menu.classList.remove("main_menu");
			$(this).parents(".sub_mnu").find(".hide_menu").toggleClass("menu_show");
			// $(this).closest(".hide_menu").toggleClass("menu_show");
		  });
		  $(".menu_part_name_sub").click(function(event) {
			event.preventDefault();
			$(this).parents(".l_menu").find(".hide_menu_sub > li > .mnu_catagory_btn").toggleClass("sub_mnu_arrow");
			$(this).toggleClass("ctg_item_active");
			$(this).parents(".l_menu").find(".hide_menu_sub").toggleClass("menu_show");
		  });
		  $(".mnu_catagory_btn").click(function(event) {
			event.preventDefault();
			$(this).toggleClass("mnu_catagory_btn_active");
			$(this).parent("li").find(".level_two").toggleClass("menu_show");
		  });

		  $('.modal_overlay').on('click', function() {
		  	$(this).toggleClass("menu_show");
		  	m_mnu.classList.toggle("m_menu_show");
			  menu.classList.toggle("menu_show"); //добавляем класс
			  toggle_mnu.classList.toggle("on");
		  })
		})	

	/*----------------------------------------------------------------*/
	
	if($('*').is('#carousel_1')){
		$('#carousel_1 .c_carousele').jCarouselLite({
			btnNext: '#carousel_1 .next',
			btnPrev: '#carousel_1 .prev',
			visible: 4,
			speed: 1000,
			circular: false
		});
	}	
	if($('*').is('#carousel_2')){
		$('#carousel_2 .c_carousele').jCarouselLite({
			btnNext: '#carousel_2 .next',
			btnPrev: '#carousel_2 .prev',
			visible: 4,
			speed: 1000,
			circular: false
		});
	}	
	if($('*').is('#carousel_3')){
		$('#carousel_3 .c_carousele').jCarouselLite({
			btnNext: '#carousel_3 .next',
			btnPrev: '#carousel_3 .prev',
			visible:4,
			speed: 1000,
			circular: false
		});
	}
	
	if($('*').is('#carousel_4')){
		$('#carousel_4 .sexy_carousele').jCarouselLite({
			btnNext: '#carousel_4 .next',
			btnPrev: '#carousel_4 .prev',
			visible: 5,
			speed: 1000,
			circular: false
		});
	}
	$('.product_list .prev').addClass('disabled');
	
	/*----------------------------------------------------------------*/
	
	$('.c_carousele img').each(function(i,e){
		$(e).parent('a').css({
				'backgroundImage':'url('+e.src+')'
		});
		$(e).hide();
	});
	
	$('.product_categories img').each(function(i,e){
		$(e).parent('.img').css({
				'backgroundImage':'url('+e.src+')'
		});
		$(e).hide();
	});
	
	$('.card_list .pic img').each(function(i,e){
		$(e).parent('a').css({
				'backgroundImage':'url('+e.src+')'
		});
		$(e).hide();
	});
	
	/*----------------------------------------------------------------*/
	
	$('.product_list .buy').click(function(){
		var currentPr = $(this).parent('li');
		$(this).text('â êîðçèíå').addClass('bought');
		$('.order_popup').appendTo(currentPr).show();
		return false;
	});
	
	$('.product_block .btn_buy').click(function(){
		var currentPr = $(this).parent('div');
		$('.order_popup').appendTo(currentPr).show();
		return false;
	});
	
	$('.continue_link').click(function(){
		$('.order_popup').hide();
		return false;
	});
	
	$('#otziv_product').click(function(){
		if($('#list_otziv').css('display') == 'none'){
			$('#list_otziv').css('display','block');
			$('#all_list_otziv').css('display','none');
		}
		else{
			$('#list_otziv').hide();
			$('#all_list_otziv').show();
		}
		return false;
	});
	
	$('.sign_in_link').click(function(){
		$(this).addClass('active');
		$('.sign_in_popup').show();
		return false;
	});
	
	$('.callback_link').click(function(){
		$('.callback_popup').show();
		return false;
	});
	
	$('.callback_popup').clickOutside(function(){
		$('.callback_popup').hide();		
	});
	
	$('.callback_popup .btn_close').click(function(){
		$('.callback_popup').hide();	
		return false;
	
	});
	
	$('.sign_in_popup').clickOutside(function(){
		$('.sign_in_popup').hide();		
	});
	
	/*----------------------------------------------------------------*/	
	
	$('.counter .btn_plus').click(function(){
		var counter = $(this).parents('.counter').find('input');
		var valueCounter = parseInt(counter.val()) +1;
		if(valueCounter > 0)
			counter.val(valueCounter);
		else
			counter.val(0);
		return false;
	});
	
	$('.counter .btn_minus').click(function(){
		var counter = $(this).parents('.counter').find('input');
		var valueCounter = parseInt(counter.val()) -1;
		if(valueCounter > 0)
			counter.val(valueCounter);
		else
			counter.val(0);
		return false;
	});
	
	$('.counter input').blur(function(){
		var valueCounter = parseInt($(this).val());
		if(valueCounter>0) 
			$(this).val(valueCounter);
		else
			$(this).val(0);
	});
	
	/*----------------------------------------------------------------*/
	
	if($('*').is('.product_block')){
		$(".product_block .photo ul").PikaChoose({autoPlay:false, buildFinished: picVertical, animationFinished: picVertical}); 
	}
	
	/*----------------------------------------------------------------*/
	
	$('.payment_method li').hover(function(){
		$(this).parents('.payment_method').find('.active').removeClass('active');
		$(this).addClass('active');
	}, function(){
		$(this).removeClass('active');
		$(this).parents('.payment_method').find(':checked').parents('li').addClass('active');
		if (window.PIE) {
			$('.payment_method .active').each(function() { PIE.detach(this); PIE.attach(this); }); }
	});
	
	$('.payment_method li').click(function(){
		$('.niceRadio').removeClass('radioChecked');
		$(this).find('.niceRadio input').attr('checked', 'checked').parent().addClass('radioChecked');
	});
	
	/*----------------------------------------------------------------*/
	
	if($('*').is('.cusel')){
		var params = {
			changedEl: '.cusel',
			visRows: 8
		}
		cuSel(params);
	}
	
	/*----------------------------------------------------------------*/	

	if($('*').is('.input_range')){
		$('.input_range').slider({
			min: 0,
			max: 24,
			values: [0,24],
			range: true,
			stop: function(event, ui) {
				var minHour = $('.input_range').slider('values',0) + '.00';
				var maxHour = $('.input_range').slider('values',1) + '.00';
				$('input#minHour').val(minHour);
				$('input#maxHour').val(maxHour);
				
				$('input#ORDER_PROP_4').val('ñ ' + minHour + ' äî ' + maxHour);
		    },
		    slide: function(event, ui){
				var minHour = $('.input_range').slider('values',0) + '.00';
				var maxHour = $('.input_range').slider('values',1) + '.00';
				$('input#minHour').val(minHour);
				$('input#maxHour').val(maxHour);
				
				$('input#ORDER_PROP_4').val('ñ ' + minHour + ' äî ' + maxHour);
		    }
		});
	}

	/*----------------------------------------------------------------*/
	
	if($('*').is('.datepicker')){
		$('.datepicker').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd.mm.yy',
			minDate: new Date(1900, 1 , 1),
			maxDate: '+0'
		});
	}
	
	/*----------------------------------------------------------------*/
	
	$('.brands_block li').each(function(){
		var size = $(this).find('div').length;
		if(size<5){
			var newBlock = 5 - size;
			for(var i=0; i<newBlock; i++){
				$(this).append('<div>');
			}
		}
	});
	
	/*----------------------------------------------------------------*/
	
	$('input[placeholder], textarea[placeholder]').placeholder();
	
	$('form').each(function(){
		$(this).validate();
	});

	/*----------------------------------------------------------------*/
	
	if (window.PIE) {
		$('.wrapper, .search_form .input_search, .h_card, nav ul, nav .active a, .brands_block, .middle, .c_carousele .pic, .sexy_carousele .pic, .card_popup, .card_popup .photo, .sign_in_popup, .sign_in_form input, .sign_in_form input:submit, .callback_popup, .callback_form input, .category_banner, .product_categories .img, .product_type li, .news_list .photo, .news_article figure, .card_list .pic a, .counter, .discount_block input, .user_form input, .user_form textarea, .registration_form input:submit, .pika-stage, .order_window, .payment_method li, .product_block .in_stock, .order_window .user_info, .methods_block .methods_list, .cusel_2, .cusel_2 .cuselFrameRight, .cusel_2 span, .cusel_2 .cusel-scroll-wrap, .cusel_2 .jScrollPaneTrack, .order_window .additional_info').each(function() {
			PIE.attach(this);
		});
	  	$('nav ul a, .brands_block a, .c_carousele .pic').mouseover(function(){PIE.attach(this);});
	  	/*$('.btn_white').focus(function(){PIE.attach(this);});*/
	}
	
});
	
$(window).load(function(){
	if (document.all && !document.querySelector) {/* IE7 èëè íèæå*/
		$('.card_popup .photo img').each(function(i, e){
			var heightBlock = $(e).parents('.photo').height()/2;
			var heightPic = $(e).height()/2;
			var m = heightBlock - heightPic;
			if ( m > 0)
				$(e).css('margin-top', m + 'px');
		});
	}
	
});

function picVertical(){
	if (document.all && !document.querySelector){
		$('.pika-stage img').load(function(){
			$(this).each(function(i, e){
				var heightBlock = $(e).parents('.pika-stage').height()/2;
				var heightPic = $(e).height()/2;
				var m = heightBlock - heightPic;
				if ( m > 0)
					$(e).css('margin-top', m + 'px');
			});
		});
	}
	
	if (window.PIE) {
		$('.pika-stage').each(function() { PIE.detach(this); PIE.attach(this); });
	}
}
	
/*----------------------------------------------------------------*/

function cardList(){
	$('.card_list li').removeClass('odd').each(function(i){
	  $(this).find('.index_list').text(i+1 + '.');	
	});
	$('.card_list li:odd').addClass('odd');
}