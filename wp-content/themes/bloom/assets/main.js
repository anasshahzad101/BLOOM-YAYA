
/* â•â•â•â•â•â•â•â•â•â•â• PRODUCT DATA â•â•â•â•â•â•â•â•â•â•â• */
const PRODUCTS=[
  {designer:'Elie Saab',name:'Embroidered Tulle Cape Gown',price:5195,occasion:'Evening',badge:'Riyadh Exclusive',img:'https://images.unsplash.com/photo-1566174053879-31528523f8ae?w=1200&q=85&auto=format',size:'Size 38'},
  {designer:'Zuhair Murad',name:'Silk Organza Column Dress',price:4295,occasion:'Evening',badge:'Limited Piece',img:'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=1200&q=85&auto=format',size:'Size 40'},
  {designer:'Marchesa',name:'Beaded Crepe Cocktail Dress',price:4695,occasion:'Cocktail',badge:'By Appointment',img:'https://images.unsplash.com/photo-1485968579580-b6d095142e6e?w=900&q=85&auto=format',size:'Size 36'},
  {designer:'Saiid Kobeisy',name:'Metallic Jacquard Midi',price:4995,occasion:'Wedding Guest',badge:'New Arrival',img:'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=800&q=85&auto=format',size:'Size 38'},
  {designer:'Tony Ward',name:'Silk Charmeuse Bias Gown',price:6495,occasion:'Evening',badge:'Couture',img:'https://images.unsplash.com/photo-1572804013427-4d7ca7268217?w=800&q=85&auto=format',size:'Size 38'},
  {designer:'Reem Acra',name:'Hand-beaded Bridal Gown',price:18950,occasion:'Bridal',badge:'Bridal Atelier',img:'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=800&q=85&auto=format',size:'Made to Measure'},
  {designer:'Georges Hobeika',name:'Sequined Tulle Cocktail',price:5895,occasion:'Cocktail',badge:'Just In',img:'https://images.unsplash.com/photo-1581338834647-b0fb40704e21?w=1400&q=85&auto=format',size:'Size 36'},
  {designer:'Jovani',name:'Crystal-embellished Sheath',price:3795,occasion:'Wedding Guest',badge:'Curated',img:'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=900&q=85&auto=format',size:'Size 40'},
];

const prodGrid=document.getElementById('prodGrid');
function renderProducts(filter='all'){
  const items=filter==='all'?PRODUCTS:PRODUCTS.filter(p=>p.occasion===filter);
  prodGrid.innerHTML=items.map((p,i)=>`
    <div class="p-card rv rv-d${(i%4)+1}" data-occ="${p.occasion}">
      <div class="p-img">
        <div class="p-img-bg" style="background-image:url('${p.img}');"></div>
        <span class="p-badge">${p.badge}</span>
        <button class="p-wish" title="Save to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></button>
        <div class="p-hover">
          <button class="p-hover-btn p-add-bag" onclick="addToBag('${escapeHtml(p.name)}','${escapeHtml(p.designer)}',${p.price},'${escapeHtml(p.occasion+' Â· '+p.size)}','${escapeHtml(p.img)}')">Add to Bag</button>
          <a href="https://wa.me/966112111026?text=${encodeURIComponent('Hello, I would like to inquire about the '+p.name+' by '+p.designer)}" target="_blank" class="p-hover-btn p-inquire">Inquire via WhatsApp</a>
        </div>
      </div>
      <div class="p-designer">${p.designer}</div>
      <div class="p-name">${p.name}</div>
      <div class="p-meta"><span class="p-price">SAR ${p.price.toLocaleString()}</span><span class="p-occ">${p.occasion}</span></div>
    </div>
  `).join('');
  // reattach observers & cursor hover for new cards
  document.querySelectorAll('#prodGrid .rv').forEach(el=>rObs.observe(el));
  document.querySelectorAll('#prodGrid a,#prodGrid button,#prodGrid .p-card').forEach(el=>{
    el.addEventListener('mouseenter',()=>cR.classList.add('hov'));
    el.addEventListener('mouseleave',()=>cR.classList.remove('hov'));
  });
}
function escapeHtml(s){return String(s).replace(/'/g,"\\'");}

/* â•â•â•â•â•â•â•â•â•â•â• PRELOADER â•â•â•â•â•â•â•â•â•â•â• */
function hidePreloader(){const p=document.getElementById('preloader');if(p)p.classList.add('done');}
document.addEventListener('DOMContentLoaded',()=>setTimeout(hidePreloader,1600));
window.addEventListener('load',()=>setTimeout(hidePreloader,200));
setTimeout(hidePreloader,3000);

/* â•â•â•â•â•â•â•â•â•â•â• CUSTOM CURSOR â•â•â•â•â•â•â•â•â•â•â• */
const cD=document.getElementById('curD'),cR=document.getElementById('curR');
let mx=0,my=0,cx=0,cy=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cD.style.left=mx-3+'px';cD.style.top=my-3+'px';});
function aCur(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;cR.style.left=cx+'px';cR.style.top=cy+'px';requestAnimationFrame(aCur);}aCur();
function bindCursor(){document.querySelectorAll('a,button,.coll-card,.p-card,.des-card,.look-item,.jnl-card').forEach(el=>{el.addEventListener('mouseenter',()=>cR.classList.add('hov'));el.addEventListener('mouseleave',()=>cR.classList.remove('hov'));});}

/* â•â•â•â•â•â•â•â•â•â•â• NAVIGATION â•â•â•â•â•â•â•â•â•â•â• */
const nav=document.getElementById('mainNav'),hero=document.getElementById('heroSection');
const whisperEl=document.querySelector('.whisper');
// Sections with DARK backgrounds â€” nav must use light text over these
const DARK_SELECTORS='.hero,.tape,.prod,.consult,.footer,.her-text';
let darkSections=[];
function refreshDarkSections(){
  darkSections=Array.from(document.querySelectorAll(DARK_SELECTORS));
}
function uNav(){
  const s=window.scrollY;
  nav.classList.toggle('scrolled',s>40);
  if(whisperEl)whisperEl.classList.toggle('hide',s>40);
  // Sample the section under the nav's vertical center (â‰ˆ y=60 from viewport top)
  const probeY=nav.classList.contains('scrolled')?34:58;
  let overDark=false;
  for(const sec of darkSections){
    const r=sec.getBoundingClientRect();
    if(r.top<=probeY && r.bottom>probeY){overDark=true;break;}
  }
  nav.classList.toggle('on-dark',overDark);
}
refreshDarkSections();
window.addEventListener('scroll',uNav,{passive:true});
window.addEventListener('resize',()=>{refreshDarkSections();uNav();});
uNav();

/* â•â•â•â•â•â•â•â•â•â•â• SCROLL REVEAL â•â•â•â•â•â•â•â•â•â•â• */
const rObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('vis');rObs.unobserve(en.target);}});},{threshold:.12,rootMargin:'0px 0px -50px 0px'});
document.querySelectorAll('.rv').forEach(el=>rObs.observe(el));

/* â•â•â•â•â•â•â•â•â•â•â• INTRO TEXT WORD REVEAL â•â•â•â•â•â•â•â•â•â•â• */
const intro=document.getElementById('introStatement');
const introText=intro.innerHTML;
intro.innerHTML=introText.replace(/(\S+)/g,(w,i)=>{
  // skip empty
  if(!w.trim())return w;
  return `<span class="w">${w}</span>`;
}).replace(/<\/em>/g,'</em>');
// rebuild with per-word delays
let widx=0;
intro.querySelectorAll('.w').forEach(el=>{
  el.style.transitionDelay=(widx*30)+'ms';
  widx++;
});
const introObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('in');introObs.unobserve(en.target);}});},{threshold:.2});
introObs.observe(intro);

/* â•â•â•â•â•â•â•â•â•â•â• WA FLOAT â•â•â•â•â•â•â•â•â•â•â• */
const waf=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waf.classList.toggle('show',window.scrollY>500);},{passive:true});

/* â•â•â•â•â•â•â•â•â•â•â• MOBILE MENU â•â•â•â•â•â•â•â•â•â•â• */
const burger=document.getElementById('burger'),mob=document.getElementById('mobMenu'),mobClose=document.getElementById('mobClose');
if(burger){burger.addEventListener('click',()=>mob.classList.add('open'));}
if(mobClose){mobClose.addEventListener('click',()=>mob.classList.remove('open'));}
mob.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>mob.classList.remove('open')));

/* â•â•â•â•â•â•â•â•â•â•â• CART â•â•â•â•â•â•â•â•â•â•â• */
let cart=[];
const cartBtn=document.getElementById('cartBtn'),
      cartOverlay=document.getElementById('cartOverlay'),
      cartDrawer=document.getElementById('cartDrawer'),
      cartClose=document.getElementById('cartClose'),
      cartItems=document.getElementById('cartItems'),
      cartEmpty=document.getElementById('cartEmpty'),
      cartFooter=document.getElementById('cartFooter'),
      cartCountEl=document.getElementById('cartCount'),
      cartCountDrawer=document.getElementById('cartCountDrawer'),
      cartTotalEl=document.getElementById('cartTotal'),
      atbToast=document.getElementById('atbToast'),
      atbText=document.getElementById('atbText');

function openCart(){if(cartOverlay)cartOverlay.classList.add('open');if(cartDrawer)cartDrawer.classList.add('open');document.body.style.overflow='hidden';}
function closeCart(){if(cartOverlay)cartOverlay.classList.remove('open');if(cartDrawer)cartDrawer.classList.remove('open');document.body.style.overflow='';}
if(cartBtn)cartBtn.addEventListener('click',openCart);
if(cartClose)cartClose.addEventListener('click',closeCart);
if(cartOverlay)cartOverlay.addEventListener('click',closeCart);

function addToBag(name,designer,price,detail,img){
  const id=name.replace(/\s/g,'_');
  if(cart.find(i=>i.id===id)){showToast('Already in your bag');return;}
  cart.push({id,name,designer,price,detail,img});
  renderCart();
  showToast(name+' added');
  setTimeout(openCart,700);
}
function removeFromBag(id){cart=cart.filter(i=>i.id!==id);renderCart();}

function renderCart(){
  const count=cart.length;
  cartCountEl.textContent=count;
  cartCountDrawer.textContent=count;
  if(count===0){
    cartEmpty.style.display='';
    cartItems.innerHTML='';
    cartFooter.style.display='none';
  } else {
    cartEmpty.style.display='none';
    cartFooter.style.display='';
    let total=0;
    cartItems.innerHTML=cart.map(item=>{
      total+=item.price;
      return `<div class="cart-item">
        <div class="cart-item-img" style="background-image:url('${item.img}');"></div>
        <div class="cart-item-info">
          <div><div class="ci-designer">${item.designer}</div><div class="ci-name">${item.name}</div><div class="ci-size">${item.detail}</div></div>
          <div class="ci-bottom"><span class="ci-price">SAR ${item.price.toLocaleString()}</span><button class="ci-remove" onclick="removeFromBag('${item.id}')">Remove</button></div>
        </div>
      </div>`;
    }).join('');
    cartTotalEl.textContent='SAR '+total.toLocaleString();
  }
}

function showToast(msg){
  atbText.textContent=msg;
  atbToast.classList.add('show');
  clearTimeout(window._tT);
  window._tT=setTimeout(()=>atbToast.classList.remove('show'),2600);
}

/* â•â•â•â•â•â•â•â•â•â•â• PRODUCT FILTERS â•â•â•â•â•â•â•â•â•â•â• */
document.querySelectorAll('.prod-filter').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('.prod-filter').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    renderProducts(btn.dataset.filter);
  });
});

/* â•â•â•â•â•â•â•â•â•â•â• NEWSLETTER â•â•â•â•â•â•â•â•â•â•â• */
function subscribeNews(){
  const e=document.getElementById('newsEmail').value;
  if(e){
    showToast('Thank you. You\'re on the list.');
    document.getElementById('newsEmail').value='';
  }
}

/* â•â•â•â•â•â•â•â•â•â•â• HERO PARALLAX â•â•â•â•â•â•â•â•â•â•â• */
const heroImg=document.querySelector('.hero-img');
window.addEventListener('scroll',()=>{
  const s=window.scrollY;
  if(s<window.innerHeight){
    heroImg.style.transform=`scale(1.05) translateY(${s*.25}px)`;
  }
},{passive:true});

/* â•â•â•â•â•â•â•â•â•â•â• SCROLL PROGRESS â•â•â•â•â•â•â•â•â•â•â• */
const scrollProg=document.getElementById('scrollProgress');
function updateProg(){
  const h=document.documentElement.scrollHeight-window.innerHeight;
  const p=h>0?window.scrollY/h:0;
  scrollProg.style.transform=`scaleX(${p})`;
}
window.addEventListener('scroll',updateProg,{passive:true});

/* â•â•â•â•â•â•â•â•â•â•â• 3D TILT â•â•â•â•â•â•â•â•â•â•â• */
function attachTilt(selector,intensity=8){
  document.querySelectorAll(selector).forEach(el=>{
    let raf=null,tx=0,ty=0;
    el.addEventListener('mousemove',e=>{
      const r=el.getBoundingClientRect();
      const cx=e.clientX-r.left,cy=e.clientY-r.top;
      const dx=(cx/r.width-.5),dy=(cy/r.height-.5);
      tx=-dy*intensity;ty=dx*intensity;
      if(!raf)raf=requestAnimationFrame(applyTilt);
    });
    function applyTilt(){
      el.style.transform=`perspective(1200px) rotateX(${tx}deg) rotateY(${ty}deg) translateY(${el.classList.contains('p-card')?'-8px':'0'})`;
      raf=null;
    }
    el.addEventListener('mouseleave',()=>{
      el.style.transform='';
    });
  });
}
// Defer to after products render

/* â•â•â•â•â•â•â•â•â•â•â• MAGNETIC CTAs â•â•â•â•â•â•â•â•â•â•â• */
function attachMagnet(selector,strength=.35){
  document.querySelectorAll(selector).forEach(el=>{
    el.addEventListener('mousemove',e=>{
      const r=el.getBoundingClientRect();
      const cx=r.left+r.width/2,cy=r.top+r.height/2;
      const dx=(e.clientX-cx)*strength,dy=(e.clientY-cy)*strength;
      el.style.transform=`translate(${dx}px,${dy}px)`;
    });
    el.addEventListener('mouseleave',()=>{el.style.transform='';});
  });
}

/* â•â•â•â•â•â•â•â•â•â•â• CURSOR STATES â•â•â•â•â•â•â•â•â•â•â• */
function bindCursorStates(){
  document.querySelectorAll('.coll-card,.des-card,.look-item,.jnl-card,.p-card,.hero-img').forEach(el=>{
    el.addEventListener('mouseenter',()=>{cR.classList.add('img');cD.classList.add('hide');});
    el.addEventListener('mouseleave',()=>{cR.classList.remove('img');cD.classList.remove('hide');});
  });
}

/* â•â•â•â•â•â•â•â•â•â•â• COUNT-UP STATS â•â•â•â•â•â•â•â•â•â•â• */
function countUp(el,target){
  const dur=2000,start=performance.now();
  const isInfinity=target==='âˆž';
  if(isInfinity){el.textContent='âˆž';return;}
  const num=parseInt(target,10);
  function tick(now){
    const t=Math.min((now-start)/dur,1);
    const e=1-Math.pow(1-t,3);
    el.textContent=Math.floor(num*e);
    if(t<1)requestAnimationFrame(tick);else el.textContent=num;
  }
  requestAnimationFrame(tick);
}

const statObs=new IntersectionObserver(e=>{
  e.forEach(en=>{
    if(en.isIntersecting){
      const num=en.target;
      const orig=num.dataset.target||num.textContent;
      if(!num.dataset.target)num.dataset.target=orig;
      const sp=num.querySelector('span');
      const spText=sp?sp.outerHTML:'';
      const cleanText=orig.replace(/<[^>]+>/g,'').trim();
      if(cleanText==='âˆž'){num.innerHTML='âˆž';}
      else{
        const n=parseInt(cleanText,10);
        const dur=2000,start=performance.now();
        function tick(now){
          const t=Math.min((now-start)/dur,1);
          const e=1-Math.pow(1-t,3);
          num.innerHTML=Math.floor(n*e)+spText;
          if(t<1)requestAnimationFrame(tick);else num.innerHTML=n+spText;
        }
        requestAnimationFrame(tick);
      }
      // Add vis to parent for line animation
      const stats=num.closest('.her-stats');
      if(stats)stats.classList.add('vis');
      statObs.unobserve(num);
    }
  });
},{threshold:.4});
document.querySelectorAll('.hs-num').forEach(n=>{
  // Stash original HTML
  n.dataset.html=n.innerHTML;
  statObs.observe(n);
});

/* â•â•â•â•â•â•â•â•â•â•â• IMAGE CLIP REVEALS â•â•â•â•â•â•â•â•â•â•â• */
const clipTargets=['.her-img','.split-img','.consult-bg','.coll-card-bg','.des-img','.look-img','.jnl-img-bg'];
// We won't clip backgrounds (they're inset), but we'll add a soft scale+fade reveal
const revealObs=new IntersectionObserver(e=>{
  e.forEach(en=>{
    if(en.isIntersecting){en.target.classList.add('vis');revealObs.unobserve(en.target);}
  });
},{threshold:.18});
document.querySelectorAll('.her-img-bg,.split-img-bg,.consult-bg').forEach(el=>{
  el.style.transform='scale(1.15)';
  el.style.opacity='.4';
  el.style.transition='transform 1.8s cubic-bezier(.22,.61,.36,1),opacity 1.4s ease';
  const wrap=el.parentElement;
  wrap.classList.add('clip-host');
  const wObs=new IntersectionObserver(es=>{
    es.forEach(en=>{
      if(en.isIntersecting){
        el.style.transform='scale(1)';
        el.style.opacity=el.classList.contains('consult-bg')?'.22':'1';
        wObs.unobserve(en.target);
      }
    });
  },{threshold:.2});
  wObs.observe(wrap);
});

/* â•â•â•â•â•â•â•â•â•â•â• PARALLAX SECTIONS â•â•â•â•â•â•â•â•â•â•â• */
const parTargets=[
  {sel:'.her-img-bg',speed:.18},
  {sel:'.split-img-bg',speed:.15},
  {sel:'.consult-bg',speed:.22},
  {sel:'.jnl-img-bg',speed:.08},
];
const parEls=[];
parTargets.forEach(t=>{document.querySelectorAll(t.sel).forEach(el=>parEls.push({el,speed:t.speed,parent:el.parentElement}));});

let parTicking=false;
function parTick(){
  parTicking=false;
  const vh=window.innerHeight;
  parEls.forEach(p=>{
    const r=p.parent.getBoundingClientRect();
    if(r.bottom<0||r.top>vh)return;
    const mid=r.top+r.height/2;
    const off=(vh/2-mid)*p.speed;
    const baseScale=p.el.classList.contains('consult-bg')?1:1;
    p.el.style.transform=`scale(${baseScale}) translate3d(0,${off}px,0)`;
  });
}
window.addEventListener('scroll',()=>{
  if(!parTicking){requestAnimationFrame(parTick);parTicking=true;}
},{passive:true});

/* â•â•â•â•â•â•â•â•â•â•â• RIPPLE ON CTA CLICK â•â•â•â•â•â•â•â•â•â•â• */
document.addEventListener('click',e=>{
  const t=e.target.closest('.btn-gold,.btn-noir,.btn-outline,.btn-ghost,.p-hover-btn');
  if(!t)return;
  const r=t.getBoundingClientRect();
  const rip=document.createElement('span');
  rip.className='ripple';
  const size=Math.max(r.width,r.height);
  rip.style.width=rip.style.height=size+'px';
  rip.style.left=(e.clientX-r.left-size/2)+'px';
  rip.style.top=(e.clientY-r.top-size/2)+'px';
  t.appendChild(rip);
  setTimeout(()=>rip.remove(),900);
});

/* â•â•â•â•â•â•â•â•â•â•â• SMOOTH MOMENTUM SCROLL â•â•â•â•â•â•â•â•â•â•â• */
// Lightweight inertial smoothing
let currentScroll=window.scrollY,targetScroll=window.scrollY,smoothing=false;
function isMobile(){return window.innerWidth<=1024;}
function smoothLoop(){
  if(isMobile()){smoothing=false;return;}
  currentScroll+=(targetScroll-currentScroll)*.1;
  if(Math.abs(targetScroll-currentScroll)<.5){currentScroll=targetScroll;smoothing=false;return;}
  window.scrollTo(0,currentScroll);
  requestAnimationFrame(smoothLoop);
}
// We'll skip aggressive smoothing â€” keep native, only add light parallax.
// (Heavy smoothing can fight native â€” better UX to keep momentum native.)

/* â•â•â•â•â•â•â•â•â•â•â• NAV LOGO SCRAMBLE â•â•â•â•â•â•â•â•â•â•â• */
/* Logo scramble effect removed - the logo now stays "BLOOM" on hover. */

/* â•â•â•â•â•â•â•â•â•â•â• HERO STAGGERED TITLE â€” already done via CSS â•â•â•â•â•â•â•â•â•â•â• */

/* â•â•â•â•â•â•â•â•â•â•â• SCROLL-LINKED HERO GRADIENT â•â•â•â•â•â•â•â•â•â•â• */
const heroSection=document.getElementById('heroSection');
window.addEventListener('scroll',()=>{
  const r=heroSection.getBoundingClientRect();
  if(r.bottom>0){
    const p=Math.max(0,Math.min(1,-r.top/r.height));
    document.querySelector('.hero-ct').style.transform=`translateY(${p*60}px)`;
    document.querySelector('.hero-ct').style.opacity=String(1-p*.8);
  }
},{passive:true});

/* â•â•â•â•â•â•â•â•â•â•â• NEW INIT â•â•â•â•â•â•â•â•â•â•â• */
function bindMotionForGrid(){
  attachTilt('.p-card',6);
  attachTilt('.coll-card',4);
  attachTilt('.des-card',5);
  attachTilt('.jnl-card',3);
}
attachMagnet('.btn-gold',.3);
attachMagnet('.btn-noir',.25);
attachMagnet('.btn-ghost',.25);
attachMagnet('.btn-outline',.25);
attachMagnet('.n-icon-btn',.4);
bindCursorStates();

/* Re-bind after product re-render */
const origRender=renderProducts;
renderProducts=function(filter){
  origRender(filter);
  setTimeout(()=>{
    bindMotionForGrid();
    bindCursorStates();
  },20);
};

/* INIT */
renderProducts();
bindCursor();
bindMotionForGrid();
updateProg();
