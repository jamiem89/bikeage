const menuTrigger = document.querySelector(`.site-header__trigger`);
const mobileMenu = document.querySelector(`.menu`);
const stickyMenu = document.querySelector(`header`);
const stickPoint = stickyMenu.offsetHeight;

console.log(menuTrigger);

function toggleMenu(){
    if(!mobileMenu.classList.contains('active')) {
        mobileMenu.classList.add(`active`);
        menuTrigger.classList.add('active');
    } else {
        mobileMenu.classList.remove(`active`);
        menuTrigger.classList.remove('active');
    }
}

function stickyHandle() {
    if (window.pageYOffset >= (stickPoint / 4)) {
        stickyMenu.dataset.scrolled = 'true';
    } else {
        stickyMenu.dataset.scrolled = 'false';
    }
  }

menuTrigger.addEventListener('click', toggleMenu);

window.addEventListener('scroll', stickyHandle);


