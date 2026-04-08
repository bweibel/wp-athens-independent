(function () {
  // Function to toggle the "is-scrolling" class on the body
  function toggleBodyClassOnScroll() {
    // Add or remove the class based on scroll position
    if (window.pageYOffset > 0) {
      document.body.classList.add('is-scrolling');
    } else {
      document.body.classList.remove('is-scrolling');
    }
  }

  // Listen for the scroll event
  window.addEventListener('scroll', toggleBodyClassOnScroll);

  // Also check on initial page load, in case the page opens at a non-zero scroll position
  document.addEventListener('DOMContentLoaded', toggleBodyClassOnScroll);

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