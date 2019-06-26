document.addEventListener('DOMContentLoaded', function () {

  scrollSuaveInterno();

  function scrollSuaveInterno() {
    const internalLinks = document.querySelectorAll('body a[href^="#"]');

    internalLinks.forEach(item => {
      item.addEventListener('click', scrollToId);
    })

    function scrollToId(event) {
      event.preventDefault();
      const section = getOffsetTop(event.target);
      scrollToPosition(section);
    }

    function getOffsetTop(element) {
      const id = element.getAttribute('href');
      return document.querySelector(id).offsetTop + 40;
    }

    function scrollToPosition(section) {
      window.scroll({
        top: section,
        behavior: 'smooth',
      });
    }
  }
});