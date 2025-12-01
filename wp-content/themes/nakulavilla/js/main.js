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
    //console.log($(this).scrollTop());
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
     $(".page-id-402 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
$(".page-id-407 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
$(".page-id-411 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
$(".page-id-251 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
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
$(".page-id-402 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
$(".page-id-407 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
$(".page-id-411 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
$(".page-id-251 .navbar-brand img").attr("src","https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png");
    }
  });
	var elem = document.getElementById('offers-home');

if(elem){
  var flkty = new Flickity(elem, {
      // options
      groupCells: true,
      cellAlign: 'left',
      contain: true,
      dragThreshold: 3,
      pageDots: false,
  });
}

  var elem = document.getElementById('rooms-home');
if(elem){ 
 var flkty = new Flickity(elem, {
      // options
      groupCells: true,
      cellAlign: 'left',
      contain: true,
      dragThreshold: 3,
      pageDots: false,
  });
}
});

$(document).ready(function() {
  $('.page-id-34 .navbar-brand img').attr('src', 'https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png');
  $('.page-id-337 .navbar-brand img').attr('src', 'https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png1`');
$('.page-id-402 .navbar-brand img').attr('src', 'https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png');
$('.page-id-407 .navbar-brand img').attr('src', 'https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png');
$('.page-id-411 .navbar-brand img').attr('src', 'https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png');
$('.page-id-251 .navbar-brand img').attr('src', 'https://pulangbali.com/wp-content/uploads/2024/04/Main-Logo-Villa-Pulang.png');
});

function call(id) {
  const items = Array.from(document.getElementsByClassName("filter"));
  items.map(function (item, index) {
 //   console.log(item);
    if (id === "all") {
      item.classList.remove("d-none");
      item.classList.add("fadeIn");
      setTimeout(clean, 500);
    } else {
      const check = items[index].classList.contains(id);
   //   console.log(check);

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
/*
var myModal = new bootstrap.Modal(
  document.getElementById("staticBackdrop"),
  {}
);
document.onreadystatechange = function () {
  myModal.show();
};*/

function scrollCostum(id){
  var pos = jQuery(id).position();
  var header = jQuery('#hight-top').height()
    $('html, body').animate({
      scrollTop: (pos.top - header)
    }, 800);
  
  //  console.log(header)
  }

function direct_to(minStay){
  let checkin = document.getElementById('checkin').value;
  let checkout = document.getElementById('checkout').value;
  let adult = document.getElementById('adult').value;
  let child = document.getElementById('child').value;

  //const url = 'https://www.book-secure.com/index.php?s=results&property=idbal27252&arrival='+checkin+'&departure='+checkout+'&adults1='+adult+'&children1='+child+'&locale=en_GB&currency=IDR';
 const url ='https://book-directonline.com/properties/PulangVillasPererenanbyNakulaDIRECT?checkInDate='+checkin+'&checkOutDate='+checkout+'&items[0][adults]='+adult+'&items[0][children]='+child;
  if(checkin!='' & checkout!='' & adult !=0){
    countDate = calculateStayDuration();
    if(countDate >= minStay){
       window.location.href =url;
    }else{
      alert('The minimum stay is '+minStay+' nights. Please adjust your dates.');
    }
  }
}

function calculateStayDuration() {
  const checkInInput = document.getElementById('checkin');
  const checkOutInput = document.getElementById('checkout');

  if (!checkInInput || !checkOutInput) {
    //console.error("Check-in or check-out date input elements not found.");
    return null; // Or handle the error appropriately
  }

  const checkInValue = checkInInput.value;
  const checkOutValue = checkOutInput.value;

  if (!checkInValue || !checkOutValue) {
    //console.log("Please select both check-in and check-out dates.");
    return 0; // Or indicate no dates selected
  }

  const checkInDate = new Date(checkInValue);
  const checkOutDate = new Date(checkOutValue);

  // Check if the dates are valid
  if (isNaN(checkInDate.getTime()) || isNaN(checkOutDate.getTime())) {
    //console.error("Invalid date format.");
    return null; // Or handle the error
  }

  // Calculate the difference in milliseconds
  const timeDifference = checkOutDate.getTime() - checkInDate.getTime();

  // Calculate the number of days
  const numberOfNights = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));

  return numberOfNights;
}
