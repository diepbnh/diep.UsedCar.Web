var basicScrollTop = function() {
  // The button
  var btnTop = document.querySelector('#toTop');
  var body = document.querySelector('body');
  // Reveal the button
  var btnReveal = function() {
    if (window.pageYOffset >= 50) {
      body.classList.add('sticky');
      btnTop.classList.add('is-visible');
    } else {
      btnTop.classList.remove('is-visible');
      body.classList.remove('sticky');
    }
  }
  // Smooth scroll top
  // Thanks to => http://stackoverflow.com/a/22610562
  var TopscrollTo = function() {
    if (window.pageYOffset != 0) {
      setTimeout(function() {
        window.scrollTo(0, window.pageYOffset - 30);
        TopscrollTo();
      }, 5);
    }
  }
  // Listeners
  window.addEventListener('scroll', btnReveal);
  btnTop.addEventListener('click', TopscrollTo);
};
basicScrollTop();