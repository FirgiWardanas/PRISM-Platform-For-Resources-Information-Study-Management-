// =============================================
// COLOR PICKER SYNC
// =============================================
['primary', 'secondary', 'tertiary', 'quaternary'].forEach(function (name) {
    const picker = document.getElementById('picker-' + name);
    const input = document.getElementById('input-' + name);
    const preview = document.getElementById('preview-' + name);

    if (!picker || !input || !preview) return;

    picker.addEventListener('input', function () {
        input.value = this.value;
        preview.style.backgroundColor = this.value;
    });

    input.addEventListener('input', function () {
        const val = this.value;
        if (/^#[0-9A-Fa-f]{6}$/.test(val)) {
            picker.value = val;
            preview.style.backgroundColor = val;
        }
    });
});

// =============================================
// IMAGE PREVIEW
// =============================================
function setupImagePreview(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    if (!input || !preview) return;

    input.addEventListener('change', function () {
        const file = this.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = function (e) {
            preview.innerHTML = `
                <div class="relative w-full h-full">
                    <img src="${e.target.result}" class="w-full h-full object-contain rounded-xl">
                    <button type="button"
                        onclick="removeImage('${inputId}', '${previewId}')"
                        class="absolute top-1 right-1 bg-white border border-red-300 rounded-md p-1 shadow hover:bg-red-100">
                        <img src="/images/icon-hapus (merah).svg" class="w-4 h-4">
                    </button>
                </div>
            `;
        };
        reader.readAsDataURL(file);
    });
}

function removeImage(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    if (input) input.value = '';
    if (preview) preview.innerHTML = `<img src="/images/icon-upload.svg" class="w-17 h-17">`;
}

document.addEventListener('DOMContentLoaded', function () {
    setupImagePreview('input-logo', 'preview-logo');
    setupImagePreview('input-ilustrasi', 'preview-ilustrasi');
    setupImagePreview('input-icon', 'preview-icon');
});

// =============================================
// MODAL PROFIL LULUSAN
// =============================================
function openModal() {
    const m = document.getElementById('modalProfil');
    m.classList.remove('hidden');
    m.classList.add('flex');
}

function closeModal() {
    const m = document.getElementById('modalProfil');
    m.classList.add('hidden');
    m.classList.remove('flex');
}

function editProfil(button) {
    const id = button.dataset.id;
    const judul = button.dataset.judul;
    const deskripsi = button.dataset.deskripsi;

    document.getElementById('editJudul').value = judul;
    document.getElementById('editDeskripsi').value = deskripsi;
    document.getElementById('formEditProfil').action = `/admin/profil-lulusan/${id}`;

    const m = document.getElementById('modalEditProfil');
    m.classList.remove('hidden');
    m.classList.add('flex');
}

function closeModalEdit() {
    const m = document.getElementById('modalEditProfil');
    m.classList.add('hidden');
    m.classList.remove('flex');
}

// Tutup modal kalau klik di luar
['modalProfil', 'modalEditProfil'].forEach(function (id) {
    const el = document.getElementById(id);
    if (!el) return;
    el.addEventListener('click', function (e) {
        if (e.target === el) {
            el.classList.add('hidden');
            el.classList.remove('flex');
        }
    });
});

// =============================================
// RESET FORM — mengosongkan semua field
// =============================================
function resetForm() {
    if (!confirm('Yakin ingin mereset semua perubahan?')) return;

    // Kosongkan semua textarea
    document.querySelectorAll('#formKustomisasi textarea').forEach(function (el) {
        el.value = '';
    });

    // Kosongkan semua input text
    document.querySelectorAll('#formKustomisasi input[type="text"]').forEach(function (el) {
        el.value = '';
    });

    // Reset status ke draft
    const status = document.querySelector('select[name="status_prodi"]');
    if (status) status.value = 'draft';

    // Reset warna ke hitam
    ['primary', 'secondary', 'tertiary', 'quaternary'].forEach(function (name) {
        const input = document.getElementById('input-' + name);
        const picker = document.getElementById('picker-' + name);
        const preview = document.getElementById('preview-' + name);
        if (!input || !picker || !preview) return;

        input.value = '#000000';
        picker.value = '#000000';
        preview.style.backgroundColor = '#000000';
    });

    // Reset preview gambar
    ['logo', 'ilustrasi', 'icon'].forEach(function (name) {
        const input = document.getElementById('input-' + name);
        const preview = document.getElementById('preview-' + name);
        if (input) input.value = '';
        if (preview) preview.innerHTML = `<img src="/images/icon-upload.svg" class="w-17 h-17">`;
    });
}
//mobile
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
//mobile
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