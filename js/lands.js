console.log('Hello DevMaster');

const fbButton = document.querySelector('#fb_button');

const buttonMenu = document.querySelector('.mobile__menu--nav')
const mobileMenu = document.querySelector('.main__menu--container nav')

buttonMenu.addEventListener(
  'click',
  (e) => {
    e.preventDefault()
    mobileMenu.classList.toggle('open__mobile')
  }
);

fbButton.addEventListener( 'click', (e) => {
  console.log('fb clicked');
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Something went wrong!'
  })
} )