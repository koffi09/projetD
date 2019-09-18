$('ul.nav li.dropdown').hover(function () {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function () {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

// script carousel
$(document).ready(function () {
  $('#Carousel').carousel({
    interval: 8000
  })
});

// le scrolling// 
$(document).ready(function () {
  $('#scrolling').click(function () {
    $("html,body").animate({ 'scrollTop': 0 }, 500, function () {   // 500 représente la durée du scrolling
      $('#scrolling').fadeOut(1000);
    });

  });
  $(document).scroll(function () {  // Ecouteur d'évènement 
    console.log($(document).scrollTop())
    if ($(document).scrollTop() > 40) {
      $('#scrolling').fadeIn(500);
    }
    else {
      $('#scrolling').fadeOut(300);
    }

  });

});

// la fonction envent.preventDefault() permet de ne pas charger le navigateur
$(document).ready(function () {
  $('.addpanier').click(function (event) {
    event.preventDefault();
    //  ajax-requette ///
    $.get($(this).attr('href'), {}, function (data) {
      if (data.error) {
      } else {
        $('#countPanier').empty().append(data.countPanier);
      }
    }, 'json');
    return false;
  });
});

  // confirmation ajout panier//
$(document).ready(function(){
  $('.addpanier').click(function(){
     $("#dataModal").modal('show');
  });


});