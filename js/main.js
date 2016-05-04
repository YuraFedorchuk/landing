$(function () {
  var popup = $('#popup');
  var popupCont = $('#popup-cont');

  popupCont.on('click', function(event) {
    if (this !== event.target)
      return;
    popup.fadeOut(500);
  });

  $(window).on('keyup', function (e) {
    if(e.keyCode == 27) {
      popup.fadeOut(500);
    }
  });

  $('.popup-button').on('click', function () {
    popup.fadeIn(500);
  });

  $('#close').on('click', function () {
    popup.fadeOut(500);
  });


  // VALIDATION
  $.validate({
   modules : 'security, html5, sanitize'
  });

  // $('form').on('submit', function (event) {
  //   event.preventDefault();
  //   var email = $(this)[0][0].value;
  //   var name = $(this)[0][1].value;
  //   var phone = $(this)[0][2].value;
  //
  //   $.ajax({
  //     type: 'POST',
  //     dataType: 'text',
  //     data: {
  //       email: email,
  //       name: name,
  //       phone: phone
  //     },
  //     url: 'scripts/handler.php',
  //     success: function (resp) {
  //       window.location = '/success.php'
  //     },
  //     error: function (e) {
  //       alert(e);
  //     },
  //     statusCode: {
  //       500: function() {
  //         alert( "Произошла небольшая ошибка! Попробуйте чуть-чуть позже. А пока напишите нам на info@fayvideo.com и мы отправим Вам Бонус Бесплатно!" );
  //       }
  //     }
  //   });
  //   $(this)[0].reset();
  //   popup.hide();
  // });

});

/*TIMER*/
var myDate = new Date();
function returnEndDate (d,h,m) {
  myDate.setDate(myDate.getDate()+d);
  myDate.setHours(myDate.getHours()+h);
  myDate.setMinutes(myDate.getMinutes()+m);
  return myDate;
}

if($.cookie("timer5")) {
  var dateEnd = $.cookie("timer5");
} else {
  var dateEnd = returnEndDate(0,0,48);
  $.cookie("timer5", dateEnd, {expires: null});
}
