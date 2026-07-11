const dataProdi = window.dataProdi;

const gradients = [
    'from-[#E555FF] to-[#A900C7]',
    'from-[#9A55FF] to-[#7928CA]',
    'from-[#9A55FF] to-[#6B00FF]',
    'from-[#7928CA] to-[#5100C6]',
    'from-[#4364F7] to-[#3307CC]',
    'from-[#067AFA] to-[#044894]',
    'from-[#0088FF] to-[#0052D4]',
];

const maxJumlah = Math.max(...dataProdi.map(d => d.jumlah), 1);
const offsetLeft = 48;

const prodiContainer = document.getElementById("prodi-bars-container");
dataProdi.forEach((item, index) => {
    const persen = Math.round((item.jumlah / maxJumlah) * 100);
    const gradient = gradients[index % gradients.length];

    const rowGroup = document.createElement("div");
    rowGroup.className = "flex items-center w-full text-[9px] font-bold text-gray-700 gap-2";

    rowGroup.innerHTML = `
        <span class="w-10 text-left text-gray-800 shrink-0">${item.prodi}</span>
        <div class="flex-1 bg-gray-100 h-3 rounded-full relative overflow-hidden">
            <div class="bar-fill bg-gradient-to-r ${gradient} h-full rounded-full"
                 style="width: 0%; transition: width 1s ease-out;" 
                 data-width="${persen}%"></div>
        </div>
        <span class="w-6 text-left text-gray-600 font-bold ml-2">${item.jumlah}</span>
    `;
    prodiContainer.appendChild(rowGroup);

    // Pemicu animasi: ubah width dari 0% ke width target setelah sedikit jeda
    setTimeout(() => {
        const bar = rowGroup.querySelector('.bar-fill');
        bar.style.width = bar.getAttribute('data-width');
    }, 100);
});

const scaleContainer = document.getElementById("scale-container");
const scaleNumbers = document.getElementById("scale-numbers");

for (let i = 0; i <= maxJumlah; i++) {
    const persen = (i / maxJumlah) * 100;
    const leftPos = `calc(${offsetLeft}px + ${persen}% * (100% - ${offsetLeft}px) / 100%)`;

    const line = document.createElement("div");
    line.className = "absolute top-0 bottom-0 border-r border-gray-100";
    line.style.left = leftPos;
    scaleContainer.appendChild(line);

    const num = document.createElement("div");
    num.className = "absolute text-[9px] font-bold text-gray-400";
    num.style.left = leftPos;
    num.innerHTML = `<span class="-translate-x-1/2 block">${i}</span>`;
    scaleNumbers.appendChild(num);
}

//sidebbar responsive
const menuBtn = document.getElementById('menuBtn');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('closeBtn');

menuBtn.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-[120%]');
    overlay.classList.toggle('hidden');
});

overlay.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-[120%]');
    overlay.classList.add('hidden');
});

if (closeBtn) {
    closeBtn.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-[120%]');
        overlay.classList.add('hidden');
    });
}
//
const profileBtn = document.getElementById('profileBtn');
const profileCard = document.getElementById('profileCard');

profileBtn.addEventListener('click', function (e) {

    e.stopPropagation();

    profileCard.classList.toggle('hidden');

});

profileCard.addEventListener('click', function (e) {

    e.stopPropagation();

});

document.addEventListener('click', function () {

    profileCard.classList.add('hidden');

});