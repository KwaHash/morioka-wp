!(function ($) {
  "use strict";

  $(".gnav__btn").on("click", function () {
    $(".gnav__lines").toggleClass("gnav__lines--active");
    $(".mnav").toggleClass("mnav--active");
  });

  $(".mnav__close").on("click", function () {
    $(".gnav__lines").removeClass("gnav__lines--active");
    $(".mnav").removeClass("mnav--active");
  });
})(jQuery);
