//

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });



    const slides = document.querySelectorAll('.slide');
    let i = 0;

    function show() {
      const isMobile = window.innerWidth < 768;
      const gap = isMobile ? 0 : 260;

      slides.forEach((s, idx) => {
        let offset = 0;
        let scale = 0.5;
        let opacity = "0";
        let zIndex = "5";

        if (idx === i) {
          offset = 0;
          scale = 1;
          opacity = "1";
          zIndex = "10";
        }
        else if (idx === (i - 1 + slides.length) % slides.length) {
          offset = -gap;
          scale = isMobile ? 0 : 0.7;
          opacity = isMobile ? "0" : "0.45";
        }
        else if (idx === (i + 1) % slides.length) {
          offset = gap;
          scale = isMobile ? 0 : 0.7;
          opacity = isMobile ? "0" : "0.45";
        }

        s.style.transform = `translate(calc(-50% + ${offset}px), 0) scale(${scale})`;
        s.style.opacity = opacity;
        s.style.zIndex = zIndex;
      });
    }

    function next() {
      i = (i + 1) % slides.length;
      show();
    }

    function prev() {
      i = (i - 1 + slides.length) % slides.length;
      show();
    }

    window.addEventListener('resize', show);
    show();



    document.onclick = e => {
      if (!e.target.classList.contains('kur-btn')) return;

      document.querySelectorAll('.kur-content')
        .forEach(c => c.classList.add('hidden'));

      document.getElementById('kur-' + e.target.dataset.id)
        .classList.remove('hidden');

      // reset button
      document.querySelectorAll('.kur-btn')
        .forEach(b => {
          b.classList.remove('bg-white/20', 'text-white');
          b.classList.add('bg-white', 'text-[#014B53]');
        });

      // aktif gradient
      e.target.classList.remove('bg-white', 'text-[#014B53]');
      e.target.classList.add('bg-white/20' , 'text-white');
    };

    document.addEventListener("DOMContentLoaded", () => {
      document.querySelector('.kur-btn').click();
    });



    function toggle(id) {
      const el = document.getElementById("content-" + id);
      const icon = document.getElementById("icon-" + id);

      // tutup kalau sedang terbuka
      if (el.style.maxHeight && el.style.maxHeight !== "0px") {
        el.style.maxHeight = null;
        icon.classList.remove("rotate-180");
      }
      // buka kalau tertutup
      else {
        el.style.maxHeight = el.scrollHeight + "px";
        icon.classList.add("rotate-180");
      }
    }



    function toggleSemester(el) {
      const parent = el.parentElement;
      const content = parent.querySelector(".content");
      const arrow = parent.querySelector(".arrow");

      content.classList.toggle("hidden");
      arrow.classList.toggle("rotate-180");
    }

    function openModalSilabus() {
      const modal = document.getElementById("modalSilabus");
      modal.classList.remove("hidden");
      modal.classList.add("flex");
    }

    function closeModalSilabus() {
      const modal = document.getElementById("modalSilabus");
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    }
