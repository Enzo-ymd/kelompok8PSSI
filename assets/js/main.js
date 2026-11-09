(() => {
  const nav = document.querySelector('.site-nav');
  const links = [...document.querySelectorAll('[data-nav]')];
  const sections = [...document.querySelectorAll('[data-section]')];
  const progress = document.getElementById('progress-bar');
  const menuButton = document.getElementById('menu-toggle');
  const navLinks = document.getElementById('nav-links');
  const backTop = document.getElementById('back-top');

  const onScroll = () => {
    const scrollable = document.documentElement.scrollHeight - window.innerHeight;
    progress.style.width = `${scrollable > 0 ? (window.scrollY / scrollable) * 100 : 0}%`;
    nav.classList.toggle('light', window.scrollY > window.innerHeight * .72);
    backTop.classList.toggle('visible', window.scrollY > 500);
  };
  window.addEventListener('scroll', onScroll, {passive:true}); onScroll();

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      links.forEach(link => link.classList.toggle('active', link.dataset.nav === entry.target.id));
    });
  }, {rootMargin:'-35% 0px -55% 0px'});
  sections.forEach(section => observer.observe(section));

  menuButton.addEventListener('click', () => {
    const open = navLinks.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(open));
    menuButton.setAttribute('aria-label', open ? 'Tutup menu' : 'Buka menu');
  });
  links.forEach(link => link.addEventListener('click', () => {
    navLinks.classList.remove('open'); menuButton.setAttribute('aria-expanded','false');
  }));
  backTop.addEventListener('click', () => window.scrollTo({top:0,behavior:matchMedia('(prefers-reduced-motion: reduce)').matches?'auto':'smooth'}));

  const revealObserver = new IntersectionObserver(entries => entries.forEach(entry => {
    if (entry.isIntersecting) { entry.target.classList.add('is-visible'); revealObserver.unobserve(entry.target); }
  }), {threshold:.08});
  document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

  // Zachman 6 perspectives × 6 questions: all 36 cells are selectable.
  const perspectives = ['Planner','Owner','Designer','Builder','Detailed Representation','Functioning Enterprise'];
  const questions = [
    ['What','Data'],['How','Process'],['Where','Location'],['Who','People'],['When','Time'],['Why','Motivation']
  ];
  const controls = document.getElementById('matrix-controls');
  const detail = document.getElementById('matrix-detail');
  if (controls && detail) {
    perspectives.forEach((perspective, p) => questions.forEach(([question,topic],q) => {
      const button = document.createElement('button');
      button.className = 'matrix-cell'; button.type = 'button'; button.setAttribute('aria-pressed','false');
      button.innerHTML = `<small>${String(p+1).padStart(2,'0')} · ${question}</small><strong>${perspective}</strong>`;
      button.addEventListener('click', () => {
        controls.querySelectorAll('button').forEach(b => b.setAttribute('aria-pressed','false'));
        button.setAttribute('aria-pressed','true');
        detail.innerHTML = `<span class="eyebrow">PERSPEKTIF ${String(p+1).padStart(2,'0')} / PERTANYAAN ${String(q+1).padStart(2,'0')}</span><h3>${perspective}<br>× ${question}</h3><p>${topic} — dokumentasikan aspek ${topic.toLowerCase()} dari sudut pandang ${perspective.toLowerCase()}. Matriks membantu menelusuri kebutuhan dari tingkat konseptual hingga operasional.</p>`;
      });
      controls.appendChild(button);
    }));
  }
})();