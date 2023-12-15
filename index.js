const navbar = document.querySelector('.navbar');
let prevScrollPos = window.pageYOffset;

function handleScroll() {
  const currentScrollPos = window.pageYOffset;

  if (currentScrollPos > prevScrollPos) {
    navbar.classList.add('hide');
  } else {
    navbar.classList.remove('hide');
  }

  prevScrollPos = currentScrollPos;
}

window.addEventListener('scroll', handleScroll);

// Add a scroll event listener
window.addEventListener('scroll', handleScroll);
