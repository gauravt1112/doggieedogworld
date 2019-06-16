$(document).ready(function(){
    

    $("body").niceScroll({cursorcolor:"#e83c8d", cursorborderradius : "0px", cursorborder : "0px solid #fff"});


  resizeDiv();
  
    

			// Toggle the form visibility
			jQuery.fn.toggleClick = function() {
				var functions = arguments, iteration = 0
				return this.click(function() {
					functions[iteration].apply(this, arguments)
					iteration = (iteration + 1) % functions.length
				})
			}

			jQuery('#contactable-inner').toggleClick(function() {
				jQuery('#contactable-overlay').css({display: 'block'});
				jQuery(this).animate({"marginRight": "-=5px"}, "2000");
				jQuery('#contactable-contactForm').animate({"marginRight": "-=0px"}, "2000");
				jQuery(this).animate({"marginRight": "+=397px"}, "4000");
				jQuery('#contactable-contactForm').animate({"marginRight": "+=398px"}, "4000");
			},
			function() {
				jQuery('#contactable-contactForm').animate({"marginRight": "-=398px"}, "4000");
				jQuery(this).animate({"marginRight": "-=395px"}, "4000").animate({"marginRight": "+=5px"}, "2000");
				jQuery('#contactable-overlay').css({display: 'none'});
			});


  // $(".menus li").hover(function(){
  //   $(this).find("div").animate({top: "0px"});
  // }, function(){
  //   $(this).find("div").animate({top: "40px"});
  // });

  $(".menus li").hover(function(){
    $(this).find("div").animate({opacity: 1});
    $(this).find("ul").slideToggle(300);
  }, function(){
    $(this).find("div").animate({opacity: 0});
    $(this).find("ul").slideToggle(200);
  });


  $("#homeSlider p.center").center_title(false);



	$(window).resize(function() {
		resizeDiv();
    $("#homeSlider p.center").center_title(false);
	});

    $(".news_media a.news_link").colorbox({
    fixed: true,
    iframe: true,
    width: "855px",
    // height: "432px"//,
    height: "413px"//,
    // href:"news-media-details.html"
  });

  
  
  $(".news_media a.video_link").colorbox({
    fixed: true,
    iframe: true,
    width: "680px",
    height: "460px"//,
  });


  $(".news_media a.gallery_link").colorbox({
    fixed: true
  });


  $("#ribbon").mouseover(function(){
    if ($(this).hasClass("opened")) {      
      $(this).animate({
        top: "-84px"
      }, 500);
      $("#social_links").animate({
        top: "-84px"
      }, 500);
      $(this).removeClass("opened");
      return false;
    }

    $(this).animate({
      top: "0px"
    }, 500);
    $("#social_links").animate({
      top: "0px"
    }, 500);
    $(this).addClass("opened");
  });

  $(".tabs a").click(function(){
    if ($(this).hasClass("current")) {
      return false;
    }
    rel = $(this).attr("rel");
    $(".hidden").fadeOut(400);
    $("#"+rel).delay(300).fadeIn(400, function(){
      $("body").getNiceScroll().resize();
    });
    $("a").removeClass("current");
    $(this).addClass("current");    
  });
	$("#contact_form").validate({ submitHandler: submitFrom });
	$("#contactable-contactForm").validate({ submitHandler: submitFrom2 });


});



function resizeDiv() {
    w = $(window).width();
    h = $(window).height();
    $('#homeSlider').css({'width': w + 'px'});
    $('#homeSlider').css({'height': (h-188) + 'px'});
}


$.fn.center_title = function(parent) {
  wHeight = $(window).height()-250;
    $(this).css({
        "marginTop": (wHeight - $(this).height()) / 2  + "px"
    });
  return this;
}


   $("#gallery div").click(function(){
        if ($(this).hasClass("no_action")) {
          return false;
        }
        if ($(this).hasClass("current_gallery")) {
          $("#gallery2 div").removeClass("current_gallery2");
          $("#gallery div").removeClass("current_gallery");
          $("#gallery p").removeClass("qaimg");
          $("#gallery_details2").slideUp(400); 
          $("#gallery_details").slideUp(400);
          $(".hidden1").fadeOut(600);
          $(".hidden2").fadeOut(600);
          return false;
        }
        rel = $(this).attr("rel");
        $(".hidden1").fadeOut(600);
          $(".hidden2").fadeOut(600);
        $("#"+rel).fadeIn(900);
          $("#gallery2 div").removeClass("current_gallery2");
          $("#gallery div").removeClass("current_gallery");
        $(this).addClass("current_gallery");
          $("#gallery_details2").slideUp(400);
          $("#gallery_details").slideUp(400);
        $("#gallery_details").slideDown(400);
    });

    $(".arrow_gallery").click(function(){
          $("#gallery div").removeClass("current_gallery");
          $("#gallery_details").slideUp(400);
          $(".hidden1").fadeOut(600);
    });

function submitFrom(form) {
  var obj = $('form#'+form.id);
  var formData = $('form#'+form.id).serialize()+'&command='+form.id;
    $("form#"+form.id+" input:submit").addClass('sending');
    $("form#"+form.id+" input:submit").val('SENDING ...');
  //console.log(formData);
  $.post("form_submit_contact.html",  formData , function(data) {
    if(data.status=='success') {
      //obj.hide();
      //obj.parent().append(data.message);
      $("form#"+form.id+" input:submit").removeClass('sending');
      $("form#"+form.id+" input:submit").addClass('sent');
      $("form#"+form.id+" input:submit").val('MESSAGE SENT');
      $("form#"+form.id+" input:submit").animate({'opacity': '0.5'});
      $("form#"+form.id+" input:submit").attr('disabled', 'disabled');
	  $(location).attr('href','thank-you.html');
    } else {
      obj.hide();
      obj.parent().append(data.message);
    }
  }, "json");

  return false;
}
function submitFrom2(form) {
  var obj = $('form#'+form.id);
  var formData = $('form#'+form.id).serialize()+'&command='+form.id;
    $("form#"+form.id+" input:submit").addClass('sending');
    $("form#"+form.id+" input:submit").val('SENDING ...');
  //console.log(formData);
  $.post("form_submit_contactable_contactForm.html",  formData , function(data) {
    if(data.status=='success') {
      //obj.hide();
      //obj.parent().append(data.message);
      $("form#"+form.id+" input:submit").removeClass('sending');
      $("form#"+form.id+" input:submit").addClass('sent');
      $("form#"+form.id+" input:submit").val('MESSAGE SENT');
      $("form#"+form.id+" input:submit").animate({'opacity': '0.5'});
      $("form#"+form.id+" input:submit").attr('disabled', 'disabled');
	  $(location).attr('href','thank-you.html');
    } else {
      obj.hide();
      obj.parent().append(data.message);
    }
  }, "json");

  return false;
}
