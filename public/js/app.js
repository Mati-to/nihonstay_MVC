document.addEventListener('DOMContentLoaded', function () {

  eventListeners();
});

function eventListeners() {
  const mobileMenu = document.querySelector('.mobile-menu');

  mobileMenu.addEventListener('click', responsiveNav)
}

function responsiveNav() {
  const nav = document.querySelector('.navbar');
  nav.classList.toggle('show');
}

// Back to top Button
const backToTopBtn = document.querySelector('#back-to-top');
window.addEventListener('scroll', () => {
  if (window.pageYOffset > 100) {
    backToTopBtn.style.display = 'block';
  } else {
    backToTopBtn.style.display = 'none';
  }
});

backToTopBtn.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
})


// Delete alert messages from the webpage
document.addEventListener('DOMContentLoaded', function () {
  eventListeners();
  if (window.innerWidth <= 768) {
    temporaryClass(document.querySelector('.nav'), 'visibilidadTemporal', 500);
  }

  deleteMessage();
});

function deleteMessage() {
  const messageConfirm = document.querySelector('.success');
  if (messageConfirm !== null) {
    setTimeout(function () {
      const parent = messageConfirm.parentElement;
      parent.removeChild(messageConfirm);
    }, 3500);
  }
}
