// ── Toggle Semester Accordion ──────────────────────────────
function toggleSemester(el) {
    const parent = el.parentElement;
    const content = parent.querySelector('.content');
    const arrow = parent.querySelector('.arrow');
    content.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
}

// ── Modal Silabus (read-only) ──────────────────────────────
function openModalSilabus(data) {
    document.getElementById('silabus-nama-mk').textContent = data.nama_matkul || '—';
    document.getElementById('silabus-kode').textContent = data.kode_matkul || '—';
    document.getElementById('silabus-sks').textContent = data.sks || '—';
    document.getElementById('silabus-deskripsi').textContent = data.deskripsi || '—';
    document.getElementById('silabus-cpm').textContent = data.cpm || '—';
    document.getElementById('silabus-cpk').textContent = data.cpk || '—';
    document.getElementById('silabus-bahan-pustaka').textContent = data.bahan_pustaka || '—';

    const rpsCell = document.getElementById('silabus-rps-cell');
    if (data.file_rps) {
        rpsCell.innerHTML = `
                    <a href="/storage/${data.file_rps}" target="_blank"
                        class="flex items-center gap-2 border rounded-lg p-2 w-fit hover:bg-blue-50 transition">
                        <img src="{{ asset('images/silabus.png') }}" class="w-5">
                        <div>
                            <p class="text-xs font-medium">RPS.pdf</p>
                            <p class="text-[10px] text-gray-500">Klik untuk melihat</p>
                        </div>
                    </a>`;
    } else {
        rpsCell.textContent = '—';
    }

    const modal = document.getElementById('modalSilabus');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeModalSilabus() {
    const modal = document.getElementById('modalSilabus');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

// Tutup modal klik backdrop
document.getElementById('modalSilabus').addEventListener('click', function (e) {
    if (e.target === this) closeModalSilabus();
});
const menuBtn = document.getElementById('menuBtn');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');

menuBtn.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-[120%]');
    overlay.classList.toggle('hidden');
});

overlay.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-[120%]');
    overlay.classList.add('hidden');
});


function toggleProfileCard() {
    document
        .getElementById('profileCard')
        .classList
        .toggle('hidden');
}



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