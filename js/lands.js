console.log('Hello DevMaster')

const buttonMenu = document.querySelector('.mobile__menu--nav')
const mobileMenu = document.querySelector('.main__menu--container nav')

buttonMenu.addEventListener('click', (e) => {
  e.preventDefault()
  mobileMenu.classList.toggle('open__mobile')
})
