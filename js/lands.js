console.log( 'Hello DevMaster' )

const buttonMenu = document.querySelector( '.mobile__menu--nav' )
const mobileMenu = document.querySelector( '.main__menu--container nav' )
const parentMenu = document.querySelectorAll( '.menu-item-has-children' );
const subMenu    = document.querySelector( '.sub-menu' );
const parentContainer = document.querySelector('.header__main--nav');

buttonMenu.addEventListener(
	'click',
	(e) => {
		e.preventDefault()
		mobileMenu.classList.toggle( 'open__mobile' )
	}
)

function showMenu() {
	subMenu.classList.toggle('show');
}

// parentMenu.forEach(
// 	(sub) => {
// 		sub.addEventListener(
// 			'mouseover',
// 			(e) => {
// 				if( e.target.className === 'menu-item-has-children' ) {
// 					e.preventDefault();
// 					console.log( 'Menu with sub-menu clicked!' );
// 				} else {
// 					subMenu.style.display = 'block';
// 				}
// 				// subMenu.style.display = 'block';
// 			}
// 		)
// 	}
// )
// window.addEventListener(
// 	'click', (e) => {
// 		e.preventDefault();
// 		if( e.target.className === 'sub-menu' ){
// 			return;
// 		} else {
// 			subMenu.style.display = 'none';
// 		}
// 	}
// )
