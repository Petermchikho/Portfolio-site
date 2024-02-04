

const header=document.getElementById('header');

if (header) {
    const headerScrolled = () => {
      if (window.scrollY > 30) {
        if(header.classList.contains('header-scrolled')===false){
          header.classList.add('header-scrolled');
        }
        
      } else {
          header.classList.remove('header-scrolled');
      }
    }
    window.addEventListener('load', headerScrolled);
    document.addEventListener('scroll',headerScrolled);
}




/*
=================================================================================
 opening and closing the navigation for small screens 
=================================================================================
*/
const closeNav=document.getElementById('close-nav');
const openNav=document.getElementById('open-nav');

const nav=document.getElementById('nav');

openNav.addEventListener('click',function(){
  nav.classList.toggle('show');
  openNav.classList.toggle("hide");
  closeNav.classList.toggle("show");
})

closeNav.addEventListener('click',function(){
  nav.classList.toggle('show');
  openNav.classList.toggle("hide");
  closeNav.classList.toggle("show");
})
/**
   * Back to top button
   */
const backtotop =document.getElementById('back-to-top');
if (backtotop) {
  const toggleBacktotop = () => {
    if (window.scrollY > 100) {
      backtotop.classList.add('active')
    } else {
      backtotop.classList.remove('active')
    }
  }
  window.addEventListener('load', toggleBacktotop)
  document.addEventListener('scroll',toggleBacktotop);
}

