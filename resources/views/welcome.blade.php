<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mastering Contract Drafting &amp; Freelancing — 6-Month Live Course | Lawctopus Law School</title>
<meta name="description" content="A 6-month, 54-live-session course that takes you from contract basics to drafting 24+ expert-level agreements — and earning as a freelance contract drafter.">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300..900&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=Caveat:wght@600;700&display=swap" rel="stylesheet">

<style>
/* ============================= RESET ============================= */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;}
img,svg{display:block;max-width:100%;}
a{color:inherit;text-decoration:none;}
button{font:inherit;cursor:pointer;}
ul{list-style:none;}

/* ============================= TOKENS ============================= */
:root{
  --ink:#131b2e;
  --ink-soft:#1e2944;
  --ink-line:rgba(241,236,225,0.14);
  --paper:#f1ece1;
  --paper-soft:#e7e0cf;
  --paper-line:rgba(19,27,46,0.1);
  --paper-text:#f4f0e6;
  --charcoal:#21242b;
  --charcoal-soft:#5a5d63;
  --brass:#a3793f;
  --brass-soft:#c9a874;
  --redline:#a8392a;
  --redline-soft:#c45a48;
  --shadow:0 18px 40px -16px rgba(19,27,46,0.35);
  --radius-sm:4px;
  --radius-md:8px;
  --radius-lg:14px;
  --maxw:1180px;
  --serif:'Fraunces',serif;
  --sans:'IBM Plex Sans',sans-serif;
  --mono:'IBM Plex Mono',monospace;
  --hand:'Caveat',cursive;
  --ease:cubic-bezier(.22,.61,.36,1);
}

body{
  font-family:var(--sans);
  color:var(--charcoal);
  background:var(--paper);
  line-height:1.6;
  -webkit-font-smoothing:antialiased;
}

.wrap{max-width:var(--maxw);margin:0 auto;padding:0 24px;}

/* ============================= SKIP LINK ============================= */
.skip-link{
  position:absolute;left:-9999px;top:0;background:var(--redline);color:#fff;
  padding:.6rem 1rem;z-index:200;border-radius:0 0 var(--radius-sm) var(--radius-sm);
}
.skip-link:focus{left:12px;}

/* ============================= FOCUS ============================= */
a:focus-visible,button:focus-visible,summary:focus-visible,input:focus-visible,textarea:focus-visible{
  outline:2.5px solid var(--brass);
  outline-offset:3px;
  border-radius:2px;
}

/* ============================= EYEBROW / CLAUSE LABEL ============================= */
.clause{
  display:inline-flex;align-items:baseline;gap:.55em;
  font-family:var(--mono);font-size:.74rem;letter-spacing:.16em;text-transform:uppercase;
  margin-bottom:.85rem;
}
.clause__num{color:var(--brass);font-weight:600;}
.on-ink .clause__num{color:var(--brass-soft);}
.clause__label{color:var(--charcoal-soft);}
.on-ink .clause__label{color:rgba(244,240,230,.62);}

.heading-xl{
  font-family:var(--serif);
  font-weight:620;
  line-height:1.04;
  letter-spacing:-.01em;
}
.heading-lg{
  font-family:var(--serif);
  font-weight:600;
  line-height:1.12;
  letter-spacing:-.005em;
  font-size:clamp(1.9rem,3.4vw,2.7rem);
}
.lede{
  font-size:1.1rem;
  color:var(--charcoal-soft);
  max-width:46ch;
}
.on-ink .lede{color:rgba(244,240,230,.78);}

/* ============================= REDLINE MARK ============================= */
.redline{
  position:relative;color:inherit;
}
.redline::after{
  content:"";position:absolute;left:-2%;right:-2%;top:55%;height:2px;
  background:var(--redline);transform:scaleX(0);transform-origin:left;
}
.in-view .redline::after{transform:scaleX(1);transition:transform .6s var(--ease) .15s;}
@media (prefers-reduced-motion:reduce){.redline::after{transform:scaleX(1);transition:none;}}

.mark-brass{color:var(--brass);}
.mark-redline{color:var(--redline);}

/* ============================= BUTTONS ============================= */
.btn{
  display:inline-flex;align-items:center;gap:.5em;
  font-family:var(--sans);font-weight:600;font-size:.97rem;
  padding:.85rem 1.5rem;border-radius:var(--radius-md);
  border:1.5px solid transparent;white-space:nowrap;
  transition:transform .2s var(--ease),box-shadow .2s var(--ease),background .2s var(--ease);
}
.btn-primary{background:var(--redline);color:#fdf9f2;box-shadow:0 10px 22px -8px rgba(168,57,42,.55);}
.btn-primary:hover{background:var(--redline-soft);transform:translateY(-2px);}
.btn-outline-ink{border-color:var(--ink);color:var(--ink);}
.btn-outline-ink:hover{background:var(--ink);color:var(--paper-text);transform:translateY(-2px);}
.btn-outline-paper{border-color:rgba(244,240,230,.55);color:var(--paper-text);}
.btn-outline-paper:hover{background:rgba(244,240,230,.12);transform:translateY(-2px);}
.btn-block{width:100%;justify-content:center;}

/* ============================= HEADER ============================= */
.ticker{
  background:var(--brass);color:var(--ink);
  font-family:var(--mono);font-size:.78rem;letter-spacing:.02em;
  text-align:center;padding:.5rem 1rem;
}
.site-header{
  position:sticky;top:0;z-index:100;
  background:var(--ink);
  border-bottom:1px solid var(--ink-line);
}
.site-header .wrap{
  display:flex;align-items:center;justify-content:space-between;
  height:74px;
}
.brand{
  font-family:var(--serif);font-weight:650;font-size:1.18rem;color:var(--paper-text);
  display:flex;align-items:baseline;gap:.4rem;
}
.brand small{font-family:var(--mono);font-size:.62rem;color:var(--brass-soft);letter-spacing:.14em;text-transform:uppercase;font-weight:500;}
.nav-links{
  display:flex;align-items:center;gap:2.1rem;
  font-size:.92rem;color:rgba(244,240,230,.82);
}
.nav-links a{position:relative;padding:.3rem 0;}
.nav-links a:hover{color:var(--paper-text);}
.nav-links a::after{
  content:"";position:absolute;left:0;bottom:-2px;height:1.5px;width:0;background:var(--brass-soft);
  transition:width .25s var(--ease);
}
.nav-links a:hover::after{width:100%;}
.header-actions{display:flex;align-items:center;gap:1rem;}
.menu-toggle{
  display:none;background:none;border:none;color:var(--paper-text);
  width:40px;height:40px;align-items:center;justify-content:center;
}
.menu-toggle svg{width:22px;height:22px;}

@media (max-width:880px){
  .nav-links{
    position:fixed;inset:74px 0 0 0;background:var(--ink);
    flex-direction:column;align-items:flex-start;gap:0;
    padding:1.5rem 24px;transform:translateX(100%);transition:transform .3s var(--ease);
    overflow-y:auto;
  }
  .nav-links.open{transform:translateX(0);}
  .nav-links a{width:100%;padding:.9rem 0;border-bottom:1px solid var(--ink-line);font-size:1.05rem;}
  .header-actions .btn-primary{display:none;}
  .nav-links .btn-primary{margin-top:1rem;}
  .menu-toggle{display:flex;}
}

/* ============================= HERO ============================= */
.hero{
  background:
    radial-gradient(ellipse 80% 60% at 80% 0%, rgba(163,121,63,.16), transparent 60%),
    var(--ink);
  color:var(--paper-text);
  padding:5.5rem 0 6rem;
  overflow:hidden;
}
.hero .wrap{
  display:grid;grid-template-columns:1.05fr .95fr;gap:3.5rem;align-items:center;
}
.hero-recital{
  font-family:var(--mono);font-size:.78rem;letter-spacing:.18em;text-transform:uppercase;
  color:var(--brass-soft);margin-bottom:1.4rem;
}
.hero h1{
  font-size:clamp(2.5rem,4.6vw,3.7rem);
  margin-bottom:1.3rem;
}
.hero h1 em{font-style:italic;color:var(--brass-soft);}
.hero-sub{font-size:1.14rem;color:rgba(244,240,230,.8);max-width:42ch;margin-bottom:1.9rem;}
.hero-ctas{display:flex;flex-wrap:wrap;gap:1rem;margin-bottom:2.2rem;}
.hero-trust{
  display:flex;flex-wrap:wrap;gap:1.6rem;
  font-family:var(--mono);font-size:.82rem;color:rgba(244,240,230,.72);
}
.hero-trust strong{color:var(--paper-text);font-weight:600;}
.hero-trust span{display:flex;align-items:center;gap:.5rem;}
.dot-sep{width:5px;height:5px;border-radius:50%;background:var(--brass-soft);display:inline-block;}

/* ---- hero document mockup ---- */
.doc-card-wrap{position:relative;}
.doc-card{
  position:relative;background:var(--paper);color:var(--charcoal);
  border-radius:var(--radius-lg);padding:2.1rem 2rem 2.4rem;
  box-shadow:var(--shadow);transform:rotate(2.2deg);
  font-family:var(--mono);font-size:.85rem;line-height:1.85;
}
.doc-card::before{
  content:"";position:absolute;left:0;top:0;bottom:0;width:4px;
  background:var(--redline);border-radius:var(--radius-lg) 0 0 var(--radius-lg);
}
.doc-title{
  font-family:var(--serif);font-weight:650;font-size:1.05rem;color:var(--ink);
  margin-bottom:.3rem;letter-spacing:-.01em;
}
.doc-sub{font-family:var(--mono);font-size:.7rem;color:var(--charcoal-soft);letter-spacing:.08em;text-transform:uppercase;margin-bottom:1.3rem;}
.doc-line{display:flex;gap:.6rem;margin-bottom:.55rem;color:var(--charcoal-soft);}
.doc-line b{color:var(--ink);font-weight:600;min-width:1.4rem;}
.strike{text-decoration:line-through;text-decoration-color:var(--redline);text-decoration-thickness:1.5px;opacity:.55;}
.annot{
  font-family:var(--hand);font-size:1.15rem;color:var(--redline);
  display:inline-block;margin-left:.4rem;transform:rotate(-2deg);
}
.seal{
  position:absolute;right:-18px;bottom:-22px;width:108px;height:108px;border-radius:50%;
  background:radial-gradient(circle at 35% 30%, var(--brass-soft), var(--brass) 70%);
  display:flex;align-items:center;justify-content:center;text-align:center;
  box-shadow:0 12px 24px -8px rgba(0,0,0,.35), inset 0 0 0 3px rgba(241,236,225,.5);
  transform:rotate(-9deg);
}
.seal span{
  font-family:var(--mono);font-size:.6rem;letter-spacing:.1em;text-transform:uppercase;
  color:var(--ink);font-weight:700;line-height:1.35;
}
.sig-line{margin-top:1.4rem;border-top:1px solid var(--paper-line);padding-top:.9rem;display:flex;align-items:center;gap:.7rem;}
.sig-script{font-family:var(--hand);font-size:1.5rem;color:var(--ink);}
.sig-caption{font-family:var(--mono);font-size:.62rem;color:var(--charcoal-soft);letter-spacing:.08em;text-transform:uppercase;}

@media (max-width:980px){
  .hero .wrap{grid-template-columns:1fr;}
  .doc-card{transform:rotate(0);max-width:430px;}
  .seal{right:-8px;bottom:-18px;}
}

/* ============================= GENERIC SECTION ============================= */
section{padding:5.5rem 0;}
.section-head{max-width:62ch;margin-bottom:3rem;}
.on-ink{background:var(--ink);color:var(--paper-text);}

.reveal{opacity:0;transform:translateY(22px);transition:opacity .65s var(--ease),transform .65s var(--ease);}
.reveal.in-view{opacity:1;transform:translateY(0);}
@media (prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none;transition:none;}}

/* ============================= OUTCOMES (DEFINITIONS) ============================= */
.outcomes-grid{
  display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;
}
.outcome-card{
  background:#fff;border:1px solid var(--paper-line);border-radius:var(--radius-lg);
  padding:1.8rem 1.6rem;
}
.outcome-num{font-family:var(--mono);color:var(--brass);font-size:.8rem;margin-bottom:.8rem;display:block;}
.outcome-card h3{font-family:var(--serif);font-weight:620;font-size:1.18rem;margin-bottom:.55rem;}
.outcome-card p{color:var(--charcoal-soft);font-size:.95rem;}
@media (max-width:880px){.outcomes-grid{grid-template-columns:1fr 1fr;}}
@media (max-width:560px){.outcomes-grid{grid-template-columns:1fr;}}

/* ============================= CURRICULUM TIMELINE ============================= */
.timeline{position:relative;border-left:2px solid var(--paper-line);margin-left:6px;}
.t-item{position:relative;padding:0 0 2.6rem 2.4rem;}
.t-item:last-child{padding-bottom:0;}
.t-dot{
  position:absolute;left:-8px;top:2px;width:14px;height:14px;border-radius:50%;
  background:var(--paper);border:2.5px solid var(--brass);
}
.t-month{font-family:var(--mono);font-size:.74rem;letter-spacing:.12em;text-transform:uppercase;color:var(--brass);margin-bottom:.4rem;}
.t-item h3{font-family:var(--serif);font-weight:620;font-size:1.25rem;margin-bottom:.5rem;}
.t-item p{color:var(--charcoal-soft);max-width:60ch;margin-bottom:.7rem;}
.t-meta{font-family:var(--mono);font-size:.78rem;color:var(--ink);background:var(--paper-soft);display:inline-block;padding:.25rem .65rem;border-radius:var(--radius-sm);}

/* ============================= FREELANCING STRIP ============================= */
.freelance-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.2rem;}
.fl-card{
  background:var(--ink-soft);border:1px solid var(--ink-line);border-radius:var(--radius-lg);
  padding:1.6rem 1.4rem;
}
.fl-card .platform{
  font-family:var(--mono);font-size:.7rem;letter-spacing:.1em;text-transform:uppercase;
  color:var(--brass-soft);margin-bottom:.6rem;display:block;
}
.fl-card p{color:rgba(244,240,230,.78);font-size:.93rem;}
@media (max-width:880px){.freelance-grid{grid-template-columns:1fr 1fr;}}
@media (max-width:560px){.freelance-grid{grid-template-columns:1fr;}}

/* ============================= FACULTY ============================= */
.faculty-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;}
.faculty-card{
  background:#fff;border:1px solid var(--paper-line);border-radius:var(--radius-lg);
  padding:1.7rem 1.5rem;
}
.faculty-avatar{
  width:52px;height:52px;border-radius:50%;background:var(--ink);color:var(--brass-soft);
  display:flex;align-items:center;justify-content:center;font-family:var(--serif);font-weight:650;
  font-size:1.05rem;margin-bottom:1rem;border:2px solid var(--brass);
}
.faculty-card h3{font-family:var(--serif);font-weight:620;font-size:1.08rem;margin-bottom:.2rem;}
.faculty-role{font-family:var(--mono);font-size:.7rem;color:var(--brass);letter-spacing:.06em;text-transform:uppercase;margin-bottom:.7rem;display:block;}
.faculty-card p{font-size:.9rem;color:var(--charcoal-soft);}
@media (max-width:880px){.faculty-grid{grid-template-columns:1fr 1fr;}}
@media (max-width:560px){.faculty-grid{grid-template-columns:1fr;}}

/* ============================= PROOF / WARRANTIES ============================= */
.proof-stats{display:grid;grid-template-columns:repeat(4,1fr);gap:1.4rem;margin-bottom:3rem;}
.stat{text-align:left;}
.stat-num{font-family:var(--serif);font-weight:650;font-size:2.3rem;color:var(--ink);display:block;}
.stat-label{font-family:var(--mono);font-size:.74rem;color:var(--charcoal-soft);letter-spacing:.04em;}
.notes-row{display:grid;grid-template-columns:repeat(2,1fr);gap:1.6rem;}
.sticky-note{
  background:#fff;border:1px solid var(--paper-line);border-left:4px solid var(--redline);
  border-radius:var(--radius-md);padding:1.4rem 1.5rem;position:relative;
}
.sticky-note p{font-family:var(--hand);font-size:1.3rem;line-height:1.4;color:var(--ink);margin-bottom:.6rem;}
.sticky-note span{font-family:var(--mono);font-size:.72rem;color:var(--charcoal-soft);letter-spacing:.04em;}
@media (max-width:880px){.proof-stats{grid-template-columns:1fr 1fr;}.notes-row{grid-template-columns:1fr;}}

/* ============================= CERTIFICATE / DELIVERABLES ============================= */
.cert-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;}
.cert-card{
  background:var(--ink-soft);border:1px solid var(--ink-line);border-radius:var(--radius-lg);
  padding:1.8rem 1.6rem;
}
.cert-icon{width:42px;height:42px;margin-bottom:1rem;color:var(--brass-soft);}
.cert-card h3{font-family:var(--serif);font-weight:620;font-size:1.1rem;margin-bottom:.5rem;color:var(--paper-text);}
.cert-card p{color:rgba(244,240,230,.75);font-size:.93rem;}
@media (max-width:880px){.cert-grid{grid-template-columns:1fr;}}

/* ============================= PRICING / CONSIDERATION ============================= */
.pricing-wrap{display:grid;grid-template-columns:1fr .9fr;gap:3rem;align-items:start;}
.pricing-copy h2{margin-bottom:1rem;}
.pricing-list{margin-top:1.4rem;display:flex;flex-direction:column;gap:.85rem;}
.pricing-list li{display:flex;gap:.75rem;align-items:flex-start;color:var(--charcoal-soft);font-size:.96rem;}
.pricing-list svg{flex-shrink:0;width:18px;height:18px;margin-top:3px;color:var(--brass);}
.price-card{
  background:var(--ink);color:var(--paper-text);border-radius:var(--radius-lg);
  padding:2.2rem 2rem;box-shadow:var(--shadow);position:relative;overflow:hidden;
}
.price-card::before{
  content:"";position:absolute;top:-40px;right:-40px;width:140px;height:140px;border-radius:50%;
  background:radial-gradient(circle, rgba(163,121,63,.35), transparent 70%);
}
.price-tag{font-family:var(--mono);font-size:.74rem;letter-spacing:.14em;text-transform:uppercase;color:var(--brass-soft);margin-bottom:.6rem;}
.price-old{font-family:var(--mono);text-decoration:line-through;color:rgba(244,240,230,.5);font-size:1.1rem;}
.price-new{font-family:var(--serif);font-weight:650;font-size:2.6rem;margin:.2rem 0 1.4rem;}
.price-new sup{font-size:1rem;font-weight:500;color:rgba(244,240,230,.6);}
.price-card .btn{width:100%;margin-bottom:.9rem;}
.price-fine{font-size:.8rem;color:rgba(244,240,230,.6);text-align:center;}

@media (max-width:880px){.pricing-wrap{grid-template-columns:1fr;}}

/* ============================= FAQ ============================= */
.faq-list{max-width:760px;}
.faq-item{border-bottom:1px solid var(--paper-line);}
.faq-item summary{
  list-style:none;display:flex;justify-content:space-between;align-items:center;gap:1rem;
  padding:1.3rem 0;cursor:pointer;font-family:var(--serif);font-weight:600;font-size:1.08rem;color:var(--ink);
}
.faq-item summary::-webkit-details-marker{display:none;}
.faq-icon{flex-shrink:0;width:22px;height:22px;position:relative;}
.faq-icon::before,.faq-icon::after{
  content:"";position:absolute;background:var(--brass);border-radius:1px;
}
.faq-icon::before{left:0;top:9px;width:22px;height:2px;}
.faq-icon::after{left:9px;top:0;width:2px;height:22px;transition:transform .25s var(--ease);}
.faq-item[open] .faq-icon::after{transform:rotate(90deg);}
.faq-item p{padding:0 0 1.4rem;color:var(--charcoal-soft);max-width:62ch;}

/* ============================= FINAL CTA / EXECUTION ============================= */
.execution{position:relative;}
.execution-grid{display:grid;grid-template-columns:1fr .85fr;gap:3.5rem;align-items:start;}
.execution h2{margin-bottom:1rem;}
.sig-area{margin-top:2.2rem;padding-top:1.6rem;border-top:1px dashed rgba(244,240,230,.3);}
.sig-area-label{font-family:var(--mono);font-size:.74rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(244,240,230,.55);margin-bottom:.8rem;}
.sig-svg{width:230px;height:70px;}
.sig-path{fill:none;stroke:var(--brass-soft);stroke-width:3;stroke-linecap:round;stroke-linejoin:round;
  stroke-dasharray:1;stroke-dashoffset:1;transition:stroke-dashoffset 1.6s var(--ease) .2s;}
.in-view .sig-path{stroke-dashoffset:0;}
@media (prefers-reduced-motion:reduce){.sig-path{stroke-dashoffset:0;transition:none;}}

.lead-form{
  background:var(--paper);color:var(--charcoal);border-radius:var(--radius-lg);
  padding:2rem 1.9rem;box-shadow:var(--shadow);
}
.lead-form h3{font-family:var(--serif);font-weight:620;font-size:1.25rem;margin-bottom:.3rem;}
.lead-form .sub{color:var(--charcoal-soft);font-size:.9rem;margin-bottom:1.5rem;}
.field{margin-bottom:1rem;}
.field label{display:block;font-family:var(--mono);font-size:.72rem;letter-spacing:.05em;text-transform:uppercase;color:var(--charcoal-soft);margin-bottom:.4rem;}
.field input{
  width:100%;padding:.75rem .9rem;border:1.5px solid var(--paper-line);border-radius:var(--radius-sm);
  background:#fff;font-family:var(--sans);font-size:.95rem;color:var(--charcoal);
  transition:border-color .2s var(--ease);
}
.field input:focus{border-color:var(--brass);outline:none;}
.field input:invalid:not(:placeholder-shown){border-color:var(--redline);}
.form-msg{display:none;margin-top:1rem;padding:.85rem 1rem;border-radius:var(--radius-sm);font-size:.9rem;}
.form-msg.success{display:block;background:#eaf3ea;color:#1f5c2e;border:1px solid #bfe0c4;}

/* ============================= FOOTER ============================= */
.site-footer{background:var(--ink);color:rgba(244,240,230,.65);padding:3rem 0 6.5rem;}
.footer-grid{display:flex;justify-content:space-between;flex-wrap:wrap;gap:2rem;margin-bottom:2rem;}
.footer-brand{font-family:var(--serif);font-weight:620;font-size:1.1rem;color:var(--paper-text);margin-bottom:.6rem;}
.footer-links{display:flex;gap:1.8rem;font-size:.9rem;}
.footer-links a:hover{color:var(--paper-text);}
.footer-bottom{font-size:.8rem;border-top:1px solid var(--ink-line);padding-top:1.4rem;display:flex;justify-content:space-between;flex-wrap:wrap;gap:.6rem;}

/* ============================= MOBILE STICKY CTA ============================= */
.mobile-cta{
  display:none;position:fixed;left:0;right:0;bottom:0;z-index:150;
  background:var(--ink);border-top:1px solid var(--ink-line);
  padding:.8rem 1rem;align-items:center;gap:.8rem;
  padding-bottom:calc(.8rem + env(safe-area-inset-bottom));
}
.mobile-cta .price-mini{font-family:var(--mono);color:var(--paper-text);font-size:.85rem;flex-shrink:0;}
.mobile-cta .price-mini b{color:var(--brass-soft);display:block;font-size:.95rem;}
@media (max-width:640px){.mobile-cta{display:flex;}body{padding-bottom:64px;}}

/* ============================= RESPONSIVE SECTION TWEAKS ============================= */
@media (max-width:980px){
  .pricing-wrap,.execution-grid{grid-template-columns:1fr;}
  .outcomes-grid,.faculty-grid,.cert-grid{grid-template-columns:1fr 1fr;}
}
@media (max-width:560px){
  section{padding:3.6rem 0;}
  .outcomes-grid,.faculty-grid,.cert-grid,.proof-stats{grid-template-columns:1fr;}
}
</style>
</head>
<body>
<a href="#main" class="skip-link">Skip to main content</a>

<!-- SECTION: Urgency ticker (dynamic: batch start date) -->
<div class="ticker">New batch begins July 1 &nbsp;·&nbsp; Limited scholarship seats for early registrations</div>

<!-- SECTION: Header / Nav -->
<header class="site-header">
  <div class="wrap">
    <a href="#" class="logo">
        <img src="https://cdn.lawctopus.com/wp-content/uploads/2021/08/Lawctopus-1.png" alt="Lawctopus" style="max-width: 25%;">

    <nav class="nav-links" id="navLinks" aria-label="Primary">
      <a href="#curriculum">Curriculum</a>
      <a href="#faculty">Faculty</a>
      <a href="#pricing">Pricing</a>
      <a href="#faq">FAQs</a>
      <a href="#enroll" ></a>
    </nav>
    <div class="header-actions">
      <a href="#enroll" class="btn btn-primary">Enroll Now</a>
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="navLinks">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
    </div>
  </div>
</header>

<main id="main">

  <!-- SECTION: Hero (Recitals) -->
  <section class="hero" id="top">
    <div class="wrap">
      <div>
        <div class="hero-recital">This agreement is entered into between Lawctopus Law School and You</div>
        <h1 class="heading-xl">Master contract drafting. <em>Get paid to draft.</em></h1>
        <p class="hero-sub">A 6-month, fully live course that takes you from "what is a contract?" to drafting 24+ expert-level agreements — and into your first freelance gig on Upwork.</p>
        <div class="hero-ctas">
          <a href="#enroll" class="btn btn-primary">Enroll Now →</a>
          <a href="#curriculum" class="btn btn-outline-paper">See the curriculum</a>
        </div>
        <div class="hero-trust">
          <span><strong>54</strong> live sessions</span>
          <span class="dot-sep"></span>
          <span><strong>20,000+</strong> learners trained</span>
          <span class="dot-sep"></span>
          <span><strong>93.2/100</strong> avg. rating</span>
        </div>
      </div>

      <div class="doc-card-wrap">
        <div class="doc-card">
          <div class="doc-title">Contract for Professional Drafting Services</div>
          <div class="doc-sub">Clause 4 — Term of Mastery</div>
          <div class="doc-line"><b>1.</b><span><span class="strike">Learn this over 4–5 years of practice</span><span class="annot">6 months ✓</span></span></div>
          <div class="doc-line"><b>2.</b><span>Drafter shall complete <strong>24+</strong> agreements across IP, real estate &amp; corporate law</span></div>
          <div class="doc-line"><b>3.</b><span>Drafter shall receive personal feedback on <strong>10</strong> portfolio-ready contracts</span></div>
          <div class="doc-line"><b>4.</b><span>Drafter shall be trained for freelance work on Upwork &amp; LinkedIn</span></div>
          <div class="sig-line">
            <span class="sig-script">Your name here</span>
            <span class="sig-caption">— signed, sealed, freelancing</span>
          </div>
          <div class="seal"><span>Expert<br>Level</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: Outcomes (Definitions) -->
  <section id="outcomes">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="clause"><span class="clause__num">§ 2</span><span class="clause__label">Definitions — What this course makes you</span></div>
        <h2 class="heading-lg">Six months in, you'll think and draft like a corporate lawyer.</h2>
      </div>
      <div class="outcomes-grid">
        <div class="outcome-card reveal">
          <span class="outcome-num">01</span>
          <h3>A drafter, not a memoriser</h3>
          <p>Draft 24+ high-stakes agreements — NDAs, MSAs, website terms, international contracts — clause by clause, under expert supervision.</p>
        </div>
        <div class="outcome-card reveal">
          <span class="outcome-num">02</span>
          <h3>A portfolio that opens doors</h3>
          <p>Walk away with 10 personally fine-tuned drafts, each reviewed one-on-one, ready to anchor your Upwork or Fiverr profile.</p>
        </div>
        <div class="outcome-card reveal">
          <span class="outcome-num">03</span>
          <h3>A working freelancer</h3>
          <p>Train directly with a top-rated Upwork contract specialist and learn to price, pitch, and deliver your first client engagement.</p>
        </div>
        <div class="outcome-card reveal">
          <span class="outcome-num">04</span>
          <h3>A sharper negotiator</h3>
          <p>Pick up negotiation tactics that pay off at the table — in client deals, salary talks, and everywhere contracts get signed.</p>
        </div>
        <div class="outcome-card reveal">
          <span class="outcome-num">05</span>
          <h3>A visible professional</h3>
          <p>Build a LinkedIn profile and cover letter that actually get read, with live feedback from the faculty.</p>
        </div>
        <div class="outcome-card reveal">
          <span class="outcome-num">06</span>
          <h3>A certified expert</h3>
          <p>Earn a completion certificate from Lawctopus Law School, with merit certificates reserved for top performers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: Curriculum (Term & Schedule) -->
  <section class="ruled" id="curriculum">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="clause"><span class="clause__num">§ 3</span><span class="clause__label">Term &amp; schedule — Six months, mapped clause by clause</span></div>
        <h2 class="heading-lg">From your first contract to your hardest one.</h2>
        <p class="lede" style="margin-top:.8rem;">Two months of fundamentals, then four months of specialised drafting — 7–8 live sessions a month, every one of them hands-on.</p>
      </div>

      <div class="timeline">
        <div class="t-item reveal">
          <span class="t-dot"></span>
          <div class="t-month">Month I &amp; II</div>
          <h3>Foundations &amp; Basic Negotiation</h3>
          <p>Learn what actually makes a contract valid, how to identify the type of agreement in front of you, and get hands-on practice reviewing and redrafting a real sale deed — your first compulsory assignment.</p>
          <span class="t-meta">8–10 live sessions</span>
        </div>
        <div class="t-item reveal">
          <span class="t-dot"></span>
          <div class="t-month">Month III</div>
          <h3>Common &amp; International Agreements</h3>
          <p>Move into commonly used commercial agreements and the negotiation skills that go with cross-border deals.</p>
          <span class="t-meta">7–8 live sessions</span>
        </div>
        <div class="t-item reveal">
          <span class="t-dot"></span>
          <div class="t-month">Month IV</div>
          <h3>IP, Technology &amp; Website Terms</h3>
          <p>Draft licensing agreements, SaaS and website terms, and the contracts that hold modern tech businesses together.</p>
          <span class="t-meta">7–8 live sessions</span>
        </div>
        <div class="t-item reveal">
          <span class="t-dot"></span>
          <div class="t-month">Month V</div>
          <h3>Real Estate Agreements</h3>
          <p>Sale deeds, lease and licence agreements, gift deeds, and the finer print that real estate transactions hinge on.</p>
          <span class="t-meta">7–8 live sessions</span>
        </div>
        <div class="t-item reveal">
          <span class="t-dot"></span>
          <div class="t-month">Month VI</div>
          <h3>Business Agreements</h3>
          <p>NDAs, Master Service Agreements, Power of Attorney, Shareholders' and Joint Venture Agreements, and e-contracts — the documents that run a company.</p>
          <span class="t-meta">7–8 live sessions</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: Freelancing track (Scope of Work) -->
  <section class="on-ink" id="freelancing">
    <div class="wrap">
      <div class="section-head reveal on-ink">
        <div class="clause on-ink"><span class="clause__num">§ 4</span><span class="clause__label">Scope of work — Turning skill into income</span></div>
        <h2 class="heading-lg">Learning to draft is half the deal. We teach you to get hired for it.</h2>
      </div>
      <div class="freelance-grid">
        <div class="fl-card reveal">
          <span class="platform">Upwork</span>
          <p>Train with a top-rated Upwork contract specialist, learn how the platform's top drafters price and pitch, and get direct exposure to live opportunities.</p>
        </div>
        <div class="fl-card reveal">
          <span class="platform">LinkedIn</span>
          <p>Build a profile that actually attracts clients and recruiters, with personal, live feedback from faculty on every draft.</p>
        </div>
        <div class="fl-card reveal">
          <span class="platform">Fiverr</span>
          <p>Pick up the tactics that work specifically on Fiverr, so you're not relying on a single platform for freelance income.</p>
        </div>
        <div class="fl-card reveal">
          <span class="platform">Career coaching</span>
          <p>Bi-monthly 1:1 sessions with the founders and faculty for CV review, interview prep, and accountability on your goals.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: Faculty (Represented By) -->
  <section id="faculty">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="clause"><span class="clause__num">§ 5</span><span class="clause__label">Represented by — The practitioners teaching you</span></div>
        <h2 class="heading-lg">Learn from lawyers who draft contracts for a living, not just teach them.</h2>
      </div>
      <div class="faculty-grid">
        <div class="faculty-card reveal">
          <div class="faculty-avatar">BV</div>
          <h3>Bhumesh Verma</h3>
          <span class="faculty-role">Managing Partner, Corp Comm Legal</span>
          <p>25+ years as a corporate lawyer, formerly with Khaitan &amp; Co. and Paras Kuhad &amp; Associates. Author of a practical guide to drafting commercial contracts.</p>
        </div>
        <div class="faculty-card reveal">
          <div class="faculty-avatar">AM</div>
          <h3>Akanksha Mishra</h3>
          <span class="faculty-role">CEO, Lawctopus Law School</span>
          <p>Independent litigator at the Bombay High Court, Nagpur Bench, and former corporate counsel to startups and large companies including BHEL.</p>
        </div>
        <div class="faculty-card reveal">
          <div class="faculty-avatar">DK</div>
          <h3>Debanshu Khettry</h3>
          <span class="faculty-role">Corporate Lawyer &amp; Angel Investor</span>
          <p>NUJS Kolkata graduate with an LLM from UCL. Founder of Standard Indian Legal Citation and head of law firm Leslie and Khettry.</p>
        </div>
        <div class="faculty-card reveal">
          <div class="faculty-avatar">LC</div>
          <h3>Adv. Lokenath Chatterjee</h3>
          <span class="faculty-role">Practising Advocate</span>
          <p>Walks learners through every clause of a contract from both a legal and a business lens, drawing on years of practice.</p>
        </div>
        <div class="faculty-card reveal">
          <div class="faculty-avatar">SD</div>
          <h3>Shayonee Dasgupta</h3>
          <span class="faculty-role">Legal Educator &amp; Researcher</span>
          <p>Consultant at IDIA and a freelance researcher-writer, deeply invested in making legal education practical and accessible.</p>
        </div>
        <div class="faculty-card reveal">
          <div class="faculty-avatar">+</div>
          <h3>And a wider faculty bench</h3>
          <span class="faculty-role">Guest practitioners</span>
          <p>Additional live sessions are led by practising lawyers across real estate, IP, and corporate law, brought in module by module.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: Proof (Warranties) -->
  <section class="on-ink" id="proof">
    <div class="wrap">
      <div class="section-head reveal on-ink">
        <div class="clause on-ink"><span class="clause__num">§ 6</span><span class="clause__label">Warranties — What past learners will tell you</span></div>
        <h2 class="heading-lg">9 out of 10 learners rated this course for practical, hands-on teaching.</h2>
      </div>
      <div class="proof-stats">
        <div class="stat reveal"><span class="stat-num">20,000+</span><span class="stat-label">Learners trained by LLS</span></div>
        <div class="stat reveal"><span class="stat-num">93.2</span><span class="stat-label">Avg. rating, out of 100</span></div>
        <div class="stat reveal"><span class="stat-num">24+</span><span class="stat-label">Contracts mastered</span></div>
        <div class="stat reveal"><span class="stat-num">54</span><span class="stat-label">Live training sessions</span></div>
      </div>
      <div class="notes-row">
        <div class="sticky-note reveal">
          <p>"The live sessions were genuinely interactive — I got better at drafting just by watching how the faculty thought through each clause."</p>
          <span>— LLS Learner, Dec–May Batch</span>
        </div>
        <div class="sticky-note reveal">
          <p>"I landed an internship mainly because I could already draft an NDA properly. That alone justified the course for me."</p>
          <span>— LLS Learner, Dec–May Batch</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: Certification (Deliverables) -->
  <section class="on-ink" id="certificate">
    <div class="wrap">
      <div class="section-head reveal on-ink">
        <div class="clause on-ink"><span class="clause__num">§ 7</span><span class="clause__label">Deliverables — What you walk away with</span></div>
        <h2 class="heading-lg">Everything that proves the work, long after the live sessions end.</h2>
      </div>
      <div class="cert-grid">
        <div class="cert-card reveal">
          <svg class="cert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="8" r="5"/><path d="M8 13l-2 8 6-3 6 3-2-8"/></svg>
          <h3>Completion certificate</h3>
          <p>Issued by Lawctopus Law School to every learner who finishes the course.</p>
        </div>
        <div class="cert-card reveal">
          <svg class="cert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2l3 7 7 .5-5.5 4.8L18 22l-6-4-6 4 1.5-7.7L2 9.5 9 9z"/></svg>
          <h3>Merit certificate</h3>
          <p>Reserved for the best-performing learners in each batch — a real signal to future employers.</p>
        </div>
        <div class="cert-card reveal">
          <svg class="cert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M9 4v16"/></svg>
          <h3>Lifetime access</h3>
          <p>Every recording, reading, and resource stays with you — come back to any module whenever you need it.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: Pricing (Consideration) — dynamic: fee & discount -->
  <section id="pricing">
    <div class="wrap">
      <div class="pricing-wrap">
        <div class="pricing-copy reveal">
          <div class="clause"><span class="clause__num">§ 8</span><span class="clause__label">Consideration — What this costs you</span></div>
          <h2 class="heading-lg">Less than the income one well-drafted client contract can bring in.</h2>
          <ul class="pricing-list">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 54 live sessions across 6 months, with recordings if you miss one</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Personal feedback on 10 portfolio-ready contract drafts</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Freelancing training for Upwork, Fiverr &amp; LinkedIn</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bi-monthly 1:1 career coaching with founders &amp; faculty</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Lifetime access to every recording and resource</li>
          </ul>
        </div>
        <div class="price-card reveal">
          <div class="price-tag">6-month expert-level course</div>
          <div class="price-old">₹60,000</div>
          <div class="price-new">₹24,999 <sup>only</sup></div>
          <a href="#enroll" class="btn btn-primary">Reserve My Seat →</a>
          <a href="#faq" class="btn btn-outline-paper">Read the FAQs</a>
          <p class="price-fine" style="margin-top:1.2rem;">Scholarships available for early registrations</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: FAQ (Governing Terms) -->
  <section class="ruled" id="faq">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="clause"><span class="clause__num">§ 9</span><span class="clause__label">Governing terms — Questions, answered plainly</span></div>
        <h2 class="heading-lg">Before you sign, here's what most people ask.</h2>
      </div>
      <div class="faq-list">
        <details class="faq-item reveal" open>
          <summary>Do I need a law degree to join?<span class="faq-icon"></span></summary>
          <p>No. If you can read and write English and you're willing to put in the work, you can start from the basics — the first module covers the fundamentals of what makes a contract valid in the first place.</p>
        </details>
        <details class="faq-item reveal">
          <summary>What happens if I miss a live session?<span class="faq-icon"></span></summary>
          <p>Every session is recorded. You get lifetime access to recordings, reading material, and drafts, so a missed session never means missed learning.</p>
        </details>
        <details class="faq-item reveal">
          <summary>Will I actually find freelance work after this?<span class="faq-icon"></span></summary>
          <p>You'll train directly with a top-rated Upwork contract specialist, leave with 10 personally reviewed contract drafts for your portfolio, and get direct exposure to freelance opportunities on Upwork.</p>
        </details>
        <details class="faq-item reveal">
          <summary>What certificate do I get at the end?<span class="faq-icon"></span></summary>
          <p>A completion certificate from Lawctopus Law School for everyone who finishes the course, and a merit certificate for the top-performing learners in the batch.</p>
        </details>
        <details class="faq-item reveal">
          <summary>How much time should I budget each week?<span class="faq-icon"></span></summary>
          <p>Expect 7–8 live sessions a month in the specialisation phase, each with a hands-on assignment. Most learners manage this alongside a full-time job or degree by setting aside a few hours a week.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- SECTION: Final CTA (Execution) -->
  <section class="on-ink execution" id="enroll">
    <div class="wrap">
      <div class="execution-grid">
        <div class="reveal on-ink">
          <div class="clause on-ink"><span class="clause__num">§ 10</span><span class="clause__label">Execution — Where you put your name down</span></div>
          <h2 class="heading-lg">Ready to put your name on this?</h2>
          <p class="lede" style="margin-top:.6rem;">Six months from today, you could be the person your firm — or your first client — trusts to draft the contract that actually matters.</p>

          <div class="sig-area">
            <div class="sig-area-label">Sign here to begin</div>
            <svg class="sig-svg" viewBox="0 0 230 70" aria-hidden="true">
              <path class="sig-path" pathLength="1" d="M8 50 C 18 20, 28 20, 34 45 C 40 65, 48 35, 56 30 C 64 25, 66 50, 74 45 C 86 38, 84 15, 96 22 C 108 29, 100 55, 112 50 C 128 43, 130 18, 146 25 C 158 30, 150 52, 165 48 C 182 43, 188 22, 205 30 C 215 34, 218 45, 222 40"/>
            </svg>
          </div>
        </div>

        <form class="lead-form reveal" id="leadForm" novalidate>
          <h3>Request a callback</h3>
          <p class="sub">Leave your details and an advisor will help you pick the right batch.</p>
          <div class="field">
            <label for="fname">Full name</label>
            <input type="text" id="fname" name="fname" required placeholder="Your full name">
          </div>
          <div class="field">
            <label for="femail">Email</label>
            <input type="email" id="femail" name="femail" required placeholder="you@example.com">
          </div>
          <div class="field">
            <label for="fphone">Phone / WhatsApp</label>
            <input type="tel" id="fphone" name="fphone" required placeholder="+91 00000 00000">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Request Callback →</button>
          <div class="form-msg" id="formMsg">Thanks — an advisor will reach out within one business day.</div>
        </form>
      </div>
    </div>
  </section>

</main>

<!-- SECTION: Footer -->
<footer class="site-footer">
  <div class="wrap">
    <div class="footer-grid">
      <div>
        <div class="footer-brand">Lawctopus Law School</div>
        <p style="max-width:34ch;font-size:.9rem;">Practical legal education for law students, young lawyers, and working professionals.</p>
      </div>
      <div class="footer-links">
        <a href="#curriculum">Curriculum</a>
        <a href="#faculty">Faculty</a>
        <a href="#pricing">Pricing</a>
        <a href="#faq">FAQs</a>
      </div>
    </div>
    <div class="footer-bottom">
      <span>Questions? Write to courses@lawctopus.com</span>
      <span>© 2026 Lawctopus Law School</span>
    </div>
  </div>
</footer>

<!-- SECTION: Mobile sticky CTA -->
<div class="mobile-cta">
  <span class="price-mini">From<b>₹24,999</b></span>
  <a href="#enroll" class="btn btn-primary btn-block">Enroll Now</a>
</div>

<script>
(function(){
  // mobile nav toggle
  var toggle = document.getElementById('menuToggle');
  var nav = document.getElementById('navLinks');
  toggle.addEventListener('click', function(){
    var open = nav.classList.toggle('open');
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
  nav.querySelectorAll('a').forEach(function(a){
    a.addEventListener('click', function(){
      nav.classList.remove('open');
      toggle.setAttribute('aria-expanded','false');
    });
  });

  // scroll reveal
  var revealEls = document.querySelectorAll('.reveal');
  if('IntersectionObserver' in window){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          entry.target.classList.add('in-view');
          io.unobserve(entry.target);
        }
      });
    }, {threshold:.15});
    revealEls.forEach(function(el){ io.observe(el); });
  } else {
    revealEls.forEach(function(el){ el.classList.add('in-view'); });
  }

  // lead form (front-end only demo — wire this to a Laravel POST route)
  var form = document.getElementById('leadForm');
  var msg = document.getElementById('formMsg');
  form.addEventListener('submit', function(e){
    e.preventDefault();
    if(!form.checkValidity()){ form.reportValidity(); return; }
    msg.classList.add('success');
    form.querySelectorAll('input').forEach(function(i){ i.disabled = true; });
    form.querySelector('button').disabled = true;
    form.querySelector('button').textContent = 'Request sent ✓';
  });
})();
</script>
</body>
</html>