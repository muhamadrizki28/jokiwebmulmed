// vars
'use strict';
var testim = document.getElementById('testim'),
  testimDots = Array.prototype.slice.call(document.getElementById('testim-dots').children),
  testimContent = Array.prototype.slice.call(document.getElementById('testim-content').children),
  testimLeftArrow = document.getElementById('left-arrow'),
  testimRightArrow = document.getElementById('right-arrow'),
  testimSpeed = 4500,
  currentSlide = 0,
  currentActive = 0,
  testimTimer,
  touchStartPos,
  touchEndPos,
  touchPosDiff,
  ignoreTouch = 30;
window.onload = function () {
  // Testim Script
  function playSlide(slide) {
    for (var k = 0; k < testimDots.length; k++) {
      testimContent[k].classList.remove('active');
      testimContent[k].classList.remove('inactive');
      testimDots[k].classList.remove('active');
    }

    if (slide < 0) {
      slide = currentSlide = testimContent.length - 1;
    }

    if (slide > testimContent.length - 1) {
      slide = currentSlide = 0;
    }

    if (currentActive != currentSlide) {
      testimContent[currentActive].classList.add('inactive');
    }
    testimContent[slide].classList.add('active');
    testimDots[slide].classList.add('active');

    currentActive = currentSlide;

    clearTimeout(testimTimer);
    testimTimer = setTimeout(function () {
      playSlide((currentSlide += 1));
    }, testimSpeed);
  }

  testimLeftArrow.addEventListener('click', function () {
    playSlide((currentSlide -= 1));
  });

  testimRightArrow.addEventListener('click', function () {
    playSlide((currentSlide += 1));
  });

  for (var l = 0; l < testimDots.length; l++) {
    testimDots[l].addEventListener('click', function () {
      playSlide((currentSlide = testimDots.indexOf(this)));
    });
  }

  $(document).ready(function () {
    $('.mobile-bar').click(function () {
      $('nav ul').toggleClass('active');
      $('.mobile-bar1').toggleClass('active');
      $('.mobile-bar2').toggleClass('active');
      $('.mobile-bar3').toggleClass('active');
      $('.a').toggleClass('active');
    });
  });

  playSlide(currentSlide);

  // keyboard shortcuts
  document.addEventListener('keyup', function (e) {
    switch (e.keyCode) {
      case 37:
        testimLeftArrow.click();
        break;

      case 39:
        testimRightArrow.click();
        break;

      case 39:
        testimRightArrow.click();
        break;

      default:
        break;
    }
  });

  //   / link terpilih
  $('a[href*="#"]')
    // hapus link yang tidak terarah
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          event.preventDefault();
          $('html, body').animate(
            {
              scrollTop: target.offset().top,
            },
            1000,
            function () {
              var $target = $(target);
              $target.focus();
              if ($target.is(':focus')) {
                return false;
              } else {
                $target.attr('tabindex', '-1');
                $target.focus();
              }
            }
          );
        }
      }
    });

  testim.addEventListener('touchstart', function (e) {
    touchStartPos = e.changedTouches[0].clientX;
  });

  testim.addEventListener('touchend', function (e) {
    touchEndPos = e.changedTouches[0].clientX;

    touchPosDiff = touchStartPos - touchEndPos;

    console.log(touchPosDiff);
    console.log(touchStartPos);
    console.log(touchEndPos);

    if (touchPosDiff > 0 + ignoreTouch) {
      testimLeftArrow.click();
    } else if (touchPosDiff < 0 - ignoreTouch) {
      testimRightArrow.click();
    } else {
      return;
    }
  });
};
