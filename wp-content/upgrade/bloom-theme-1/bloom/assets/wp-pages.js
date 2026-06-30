/**
 * BLOOM — Shared script for WP-rendered pages (shop, single product, taxonomy archive).
 * Handles: preloader fade, cursor, mobile menu, scroll progress, nav scroll state, WA float.
 */
(function(){
  /* Preloader — guaranteed fade within 3s */
  function hidePreloader(){var p=document.getElementById('preloader');if(p)p.classList.add('done');}
  document.addEventListener('DOMContentLoaded',function(){setTimeout(hidePreloader,1400);});
  window.addEventListener('load',function(){setTimeout(hidePreloader,200);});
  setTimeout(hidePreloader,3000);

  /* Custom cursor */
  var cD=document.getElementById('curD'),cR=document.getElementById('curR');
  if(cD&&cR){
    var mx=0,my=0,cx=0,cy=0;
    document.addEventListener('mousemove',function(e){mx=e.clientX;my=e.clientY;cD.style.left=mx-3+'px';cD.style.top=my-3+'px';});
    (function aCur(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;cR.style.left=cx+'px';cR.style.top=cy+'px';requestAnimationFrame(aCur);})();
    document.querySelectorAll('a,button,.p-card,.sp-img,.cp-cat').forEach(function(el){
      el.addEventListener('mouseenter',function(){cR.classList.add('hov');});
      el.addEventListener('mouseleave',function(){cR.classList.remove('hov');});
    });
    document.querySelectorAll('.p-card,.sp-img,.ph-hero-img,.cp-cat').forEach(function(el){
      el.addEventListener('mouseenter',function(){cR.classList.add('img');cD.classList.add('hide');});
      el.addEventListener('mouseleave',function(){cR.classList.remove('img');cD.classList.remove('hide');});
    });
  }

  /* Scroll progress */
  var prog=document.getElementById('scrollProgress');
  if(prog){
    function uProg(){var h=document.documentElement.scrollHeight-window.innerHeight;prog.style.transform='scaleX('+(h>0?window.scrollY/h:0)+')';}
    window.addEventListener('scroll',uProg,{passive:true});uProg();
  }

  /* WA float reveal after scroll */
  var waf=document.getElementById('waFloat');
  if(waf){
    if(!waf.classList.contains('show'))waf.classList.add('show');
  }

  /* Mobile menu */
  var burger=document.getElementById('burger'),mob=document.getElementById('mobMenu'),mobClose=document.getElementById('mobClose');
  if(burger&&mob){burger.addEventListener('click',function(){mob.classList.add('open');});}
  if(mobClose&&mob){mobClose.addEventListener('click',function(){mob.classList.remove('open');});}
  if(mob){mob.querySelectorAll('a').forEach(function(a){a.addEventListener('click',function(){mob.classList.remove('open');});});}

  /* Scroll reveal — for .rv AND .p-card (the latter has opacity:0 by default) */
  if('IntersectionObserver'in window){
    var rObs=new IntersectionObserver(function(entries){
      entries.forEach(function(en){if(en.isIntersecting){en.target.classList.add('vis');rObs.unobserve(en.target);}});
    },{threshold:.05,rootMargin:'0px 0px -30px 0px'});
    document.querySelectorAll('.rv, .p-card').forEach(function(el){rObs.observe(el);});
  } else {
    // Browsers without IntersectionObserver — just show everything
    document.querySelectorAll('.rv, .p-card').forEach(function(el){el.classList.add('vis');});
  }

  /* Hero parallax on .ph-hero-img */
  var heroImg=document.querySelector('.ph-hero-img');
  var heroSec=document.querySelector('.ph-hero');
  if(heroImg&&heroSec){
    window.addEventListener('scroll',function(){
      var s=window.scrollY;
      if(s<window.innerHeight){heroImg.style.transform='scale(1.04) translateY('+(s*.22)+'px)';}
    },{passive:true});
  }
})();
