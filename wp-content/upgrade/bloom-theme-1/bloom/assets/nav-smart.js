/**
 * BLOOM — Smart nav-color handler (runs on every page).
 * Switches the nav between dark/light by detecting which section is currently behind it.
 * This script is enqueued in the footer, after each page's own inline JS — so its
 * scroll listener fires last and wins.
 */
(function(){
  var nav=document.getElementById('mainNav');
  if(!nav)return;
  var whisper=document.querySelector('.whisper');

  // Every dark-background section across every page in the site.
  // Missing sections per page are simply ignored.
  var DARK_SEL=[
    '.hero','.cp-hero','.dp-hero','.lb-hero','.ph-hero',
    '.tape','.prod','.consult','.footer','.her-text',
    '.cp-featured','.dp-spotlight','.dp-cities',
    '.lb-credits','.lb-section.dark','.lb-end','.lb-full',
    '.ab-values','.ab-stats','.co-strip'
  ].join(',');

  var darkSections=[];
  function refresh(){darkSections=Array.prototype.slice.call(document.querySelectorAll(DARK_SEL));}

  function update(){
    var s=window.scrollY;
    // Whisper bar slides up + nav switches to the "scrolled" compact state past 40px
    nav.classList.toggle('scrolled',s>40);
    if(whisper)whisper.classList.toggle('hide',s>40);

    // Probe the section behind the nav's vertical centre
    var probeY=nav.classList.contains('scrolled')?34:58;
    var overDark=false;
    for(var i=0;i<darkSections.length;i++){
      var r=darkSections[i].getBoundingClientRect();
      if(r.top<=probeY && r.bottom>probeY){overDark=true;break;}
    }
    nav.classList.toggle('on-dark',overDark);
  }

  refresh();
  window.addEventListener('scroll',update,{passive:true});
  window.addEventListener('resize',function(){refresh();update();});
  // Run after a tick so any lazy-rendered sections (products etc.) are in the DOM
  setTimeout(function(){refresh();update();},100);
  update();
})();
