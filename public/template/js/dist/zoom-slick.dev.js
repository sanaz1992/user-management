"use strict";

var colors = [];
var zoomOptions = {
  cursor: "crosshair",
  zoomType: "inner"
};
$(document).ready(function () {
  $(".regular").slick({
    asNavFor: ".thumbs"
  });
  $(".thumbs").slick({
    arrows: false,
    centerMode: true,
    slidesToShow: 3,
    asNavFor: ".regular",
    focusOnSelect: true
  });
  $(".regular .slick-current img").elevateZoom(zoomOptions);
  $(".regular").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    $.removeData(currentSlide, "elevateZoom");
    $(".zoomContainer").remove();
  });
  $(".regular").on("afterChange", function () {
    $(".regular .slick-current img").elevateZoom(zoomOptions);
  });
});