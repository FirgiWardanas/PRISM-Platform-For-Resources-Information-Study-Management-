    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

        let index = 0;
    const slider = document.getElementById('slider');
    const total = slider.children.length;

    function updateSlide() {
      slider.style.transform = `translateX(-${index * 100}%)`;
    }

    function next() {
      index = (index + 1) % total;
      updateSlide();
    }

    function prev() {
      index = (index - 1 + total) % total;
      updateSlide();
    }