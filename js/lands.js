console.log('Hello DevMaster')

const buttonMenu = document.querySelector('.mobile__menu--nav')
const mobileMenu = document.querySelector('.main__menu--container nav')

buttonMenu.addEventListener(
  'click',
  (e) => {
    e.preventDefault()
    mobileMenu.classList.toggle('open__mobile')
  }
);

// const counters = document.querySelectorAll('.statistics__counter');
// const speed = 200;

// counters.forEach( counter => {
//   const updateCount = () => {
//     const target = +counter.getAttribute('data-target');

//     const count = +counter.innerText;

//     const inc = target / speed;

//     if( count < target ) {
//       counter.innerText = count + inc;
//       setTimeout( updateCount, 1 );
//     } else {
//       count.innerText = target;
//     }
//   }

//   updateCount();
// } );

