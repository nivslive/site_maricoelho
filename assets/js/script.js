const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
  if (event.type === 'touchstart') event.preventDefault();
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
  if (active) {
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);









// Identificar o clique no menu
// Verificar o item que foi clicado e fazer referência com o alvo
// Verificar a distância entre o alvo e o topo
// Animar o scroll até o alvo

const menuItems = document.querySelectorAll('header a[href^="#"]');

menuItems.forEach(item => {
  item.addEventListener('click', scrollToIdOnClick);
})

function getScrollTopByHref(element) {
  const id = element.getAttribute('href');
  return document.querySelector(id).offsetTop;
}

function scrollToIdOnClick(event) {
  event.preventDefault();
  const to = getScrollTopByHref(event.target) - 80;
  scrollToPosition(to);
}

function scrollToPosition(to) {
  // window.scroll({
  //   top: to,
  //   behavior: "smooth",
  // });
  smoothScrollTo(0, to);
}

/**
 * Smooth scroll animation
 * @param {int} endX: destination x coordinate
 * @param {int} endY: destination y coordinate
 * @param {int} duration: animation duration in ms
 */
function smoothScrollTo(endX, endY, duration) {
  const startX = window.scrollX || window.pageXOffset;
  const startY = window.scrollY || window.pageYOffset;
  const distanceX = endX - startX;
  const distanceY = endY - startY;
  const startTime = new Date().getTime();

  duration = typeof duration !== 'undefined' ? duration : 1400;

  // Easing function
  const easeInOutQuart = (time, from, distance, duration) => {
    if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
    return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
  };

  const timer = setInterval(() => {
    const time = new Date().getTime() - startTime;
    const newX = easeInOutQuart(time, startX, distanceX, duration);
    const newY = easeInOutQuart(time, startY, distanceY, duration);
    if (time >= duration) {
      clearInterval(timer);
    }
    window.scroll(newX, newY);
  }, 1500 / 60); // 60 fps
};













function iniciaModal(modalID) {
  const modal = document.getElementById(modalID);
    if(modal) {
      modal.classList.add('mostrar');
      $(".modal-container").css({
        background: "rgb(0, 0, 0,0.9)"
    });
             
      modal.addEventListener('click', (e) => {
        if(e.target.id == modalID || e.target.className == 'fechar') {
          modal.classList.add('fecharanimation')
                        modal.classList.remove('mostrar')
                        $(".modal-container").css({
                          background: "rgb(0, 0, 0,0.0)"
                      });

          let timer = setInterval(myTimer, 400)
          function myTimer(){
            modal.classList.remove('fecharanimation')
            clearInterval(timer)	
          }
        }
      })
    }
          
  }



const modal_ebook = document.querySelector('.button-ebook');
modal_ebook.addEventListener('click', () => iniciaModal('modal-ebook'));


const modal_apostilas = document.querySelector('.button-apostilas');
modal_apostilas.addEventListener('click', () => iniciaModal('modal-apostilas'));



const modal_palestras = document.querySelector('.button-palestras');
modal_palestras.addEventListener('click', () => iniciaModal('modal-palestras'));



const modal_cursos = document.querySelector('.button-cursos');
modal_cursos.addEventListener('click', () => iniciaModal('modal-cursos'));







$(document).ready(function(){
  var scrollTop = $('html, body').scrollTop();
  
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 800) { console.log(this)
          
          $(".img-fazemos-1").css({
            transform: "translate(0%,0%)",
            filter: "blur(0px)"
        });
        $(".img-fazemos-2").css({
          transform: "translate(0%,0%)",
          filter: "blur(0px)"
      });

      $(".img-fazemos-3").css({
        transform: "translate(0%,0%)",
        filter: "blur(0px)"
    });
        
      } 



    





  });
});





















