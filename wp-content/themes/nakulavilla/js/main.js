$("#menu1 li").click(function () {
  $("#drop4").html($(this).text());
});

Fancybox.bind('[data-fancybox="gallery"]', {
  caption: function (fancybox, carousel, slide) {
    return slide.caption;
  },
});

AOS.init({ duration: 1000 });

$('[data-toggle="slide-collapse"]').on("click", function () {
  $navMenuCont = $($(this).data("target"));
  $navMenuCont.animate(
    {
      width: "toggle",
    },
    350
  );
  $(".menu-overlay").fadeIn(500);
});

$(".menu-overlay").click(function (event) {
  $(".navbar-toggle").trigger("click");
  $(".menu-overlay").fadeOut(500);
});

var navbar = document.querySelector(".navbar-dark");
var fixedbottom = document.querySelector(".fixed-bottom");
var fixedtop = document.querySelector(".submenu-stay");
window.onscroll = () => {
  this.scrollY > 20
    ? navbar.classList.add("bg-white")
    : navbar.classList.remove("bg-white");
  this.scrollY > 20
    ? fixedbottom.classList.add("bg-white")
    : fixedbottom.classList.remove("bg-white");
  this.scrollY > 20
    ? fixedtop.classList.add("bg-white")
    : fixedtop.classList.remove("bg-white");
};

$(document).ready(function () {
  $(window).on("scroll", function () {
    console.log($(this).scrollTop());
    if ($(this).scrollTop() >= 20) {
      //set to new image
      $(".navbar-brand img").attr(
        "src",
        "https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png"
      );
      $(".page-id-34 .navbar-brand img").attr(
        "src",
        "https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png"
      );
      $(".page-id-337 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
    } else {
      //back to default
      $(".navbar-brand img").attr(
        "src",
        "https://pulangbali.com/wp-content/uploads/2024/08/Main-Logo-Villa-Pulang-white.png"
      );
      $(".page-id-34 .navbar-brand img").attr(
        "src",
        "https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png"
      );
      $(".page-id-337 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
    }
  });
});

$(document).ready(function() {
  $('.page-id-34 .navbar-brand img').attr('src', 'https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png');
  $('.page-id-337 .navbar-brand img').attr('src', 'https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png');
});

function call(id) {
  const items = Array.from(document.getElementsByClassName("filter"));
  items.map(function (item, index) {
    console.log(item);
    if (id === "all") {
      item.classList.remove("d-none");
      item.classList.add("fadeIn");
      setTimeout(clean, 500);
    } else {
      const check = items[index].classList.contains(id);
      console.log(check);

      if (check) {
        item.classList.remove("d-none");
        item.classList.add("fadeIn");
      } else {
        item.classList.add("d-none");
        item.classList.remove("fadeIn");
      }
    }
  });
}

function clean() {
  const items = Array.from(document.getElementsByClassName("filter"));
  items.map(function (item, index) {
    item.classList.remove("fadeIn");
  });
}

$(function () {
  $("li a").click(function () {
    $("li a").removeClass("active");
    $(this).addClass("active");
  });
});

var myModal = new bootstrap.Modal(
  document.getElementById("staticBackdrop"),
  {}
);
document.onreadystatechange = function () {
  myModal.show();
};

function scrollCostum(id){
  var pos = jQuery(id).position();
  var header = jQuery('#hight-top').height()
    $('html, body').animate({
      scrollTop: (pos.top - header)
    }, 500);
  
    console.log(header)
  }