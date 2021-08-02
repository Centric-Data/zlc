console.log( 'Hello DevMaster' )

const buttonMenu = document.querySelector( '.mobile__menu--nav' )
const mobileMenu = document.querySelector( '.main__menu--container nav' )
const parentMenu = document.querySelectorAll( '.menu-item-has-children' );
const subMenu    = document.querySelector( '.sub-menu' );

buttonMenu.addEventListener(
	'click',
	(e) => {
		e.preventDefault()
		mobileMenu.classList.toggle( 'open__mobile' )
	}
)

parentMenu.forEach(
	(sub) => {
		sub.addEventListener(
			'click',
			(e) => {
				e.preventDefault();
				console.log( 'Menu with sub-menu clicked!' );
				subMenu.style.display = 'flex';
			}
		)
	}
)
