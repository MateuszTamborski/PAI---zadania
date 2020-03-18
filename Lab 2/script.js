window.onload = function() {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('.mobile-nav');

    const handleClick = () => {
    hamburger.classList.toggle('hamburger--active');
    nav.classList.toggle('mobile-nav--active');
    }

    hamburger.addEventListener('click', handleClick);
  };