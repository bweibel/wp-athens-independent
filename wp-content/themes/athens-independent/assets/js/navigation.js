(function () {
  var header = null;

  function getHeaderHeight() {
    if (!header) header = document.querySelector('header.site-header');
    return header ? header.offsetHeight : 0;
  }

  function toggleBodyClassOnScroll() {
    if (window.pageYOffset > getHeaderHeight()) {
      document.body.classList.add('is-scrolling');
    } else {
      document.body.classList.remove('is-scrolling');
    }
  }

  window.addEventListener('scroll', toggleBodyClassOnScroll);

  document.addEventListener('DOMContentLoaded', function () {
    header = document.querySelector('header.site-header');
    toggleBodyClassOnScroll();
  });

  // Enable ticker scroll animation only when text overflows the container
  document.addEventListener('DOMContentLoaded', function () {
    var ticker = document.querySelector('.aci-breaking-news__link');
    if (!ticker) return;
    if (ticker.scrollWidth > ticker.parentElement.clientWidth) {
      var originalText = ticker.textContent.trim();
      var separator = '\u00A0\u00A0\u2022\u00A0\u00A0';
      ticker.textContent = originalText + separator + originalText + separator;
      ticker.classList.add('is-overflowing');
    }
  });
})();