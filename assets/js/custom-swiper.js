const eduList = new Swiper(".edu-list__slider", {
  effect: "fade",
  pagination: {
    el: ".edu-list__pagination",
    clickable: true,
    renderBullet: function (index, className) {
    return '<span class="' + className + '">0' + (index + 1) + "</span>";
    },
  },
});