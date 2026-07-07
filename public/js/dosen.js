function toggleCard(el) {
    const currentCard = el.closest('.card');

    document.querySelectorAll('.card').forEach(card => {
        if (card !== currentCard) {
            card.querySelector('.card-content')?.classList.add('hidden');
            card.querySelector('.icon-arrow')?.classList.remove('rotate-180');
        }
    });

    const content = currentCard.querySelector('.card-content');
    const icon = currentCard.querySelector('.icon-arrow');
    const isOpen = !content.classList.contains('hidden');

    if (!isOpen) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}

// JUMLAH RIWAYAT
function getJumlahRiwayat(pendidikan) {
    if (pendidikan === 'S2') return 2;
    if (pendidikan === 'S3') return 3;
    return 1;
}

// MODAL TAMBAH
function openTambahModal() {
    const modal = document.getElementById('modalTambahDosen');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeTambahModal() {
    const modal = document.getElementById('modalTambahDosen');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function tambahRiwayat() {
    const container = document.getElementById('riwayat-container');
    container.appendChild(buatRowRiwayatTambah());
}

function buatRowRiwayat(value = '', id = '') {
    const row = document.createElement('div');
    row.className = 'flex items-center gap-2 mt-2';

    row.innerHTML = `
        <input type="hidden" name="id_riwayat[]" value="${id}">

        <input type="text"
            name="riwayat_pendidikan[]"
            value="${value}"
            placeholder="Masukkan Riwayat Pendidikan"
            class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">

        <button type="button"
            onclick="this.parentElement.remove()"
            class="flex-shrink-0 bg-red-100 hover:bg-red-200 text-red-600 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">
            ✕
        </button>
    `;

    return row;
}

function tambahSpesialis() {
    const container = document.getElementById('spesialis-container');

    // Panggil fungsi buatRowSpesialis untuk membuat elemen input baru
    const rowBaru = buatRowSpesialis();

    // Masukkan ke dalam container scroll
    container.appendChild(rowBaru);

    // Otomatis scroll ke bawah saat input bertambah
    container.scrollTop = container.scrollHeight;
}

// Fungsi helper untuk menyusun baris input baru + tombol hapus
function buatRowSpesialis() {
    const div = document.createElement('div');
    // Class 'spesialis-item' penting untuk penanda saat dihapus
    div.className = 'flex items-center gap-2 mt-2 spesialis-item';

    div.innerHTML = `
        <input type="text" name="bidang_spesialis[]" placeholder="Masukkan Bidang Spesialis"
            class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
        <button type="button" onclick="hapusSpesialis(this)" 
            class="text-red-500 bg-red-100 hover:bg-red-200 w-8 h-8 rounded-full flex items-center justify-center font-bold transition-all shrink-0">
            ✕
        </button>
    `;
    return div;
}

// Fungsi untuk menghapus baris ketika tombol silang diklik
function hapusSpesialis(button) {
    const row = button.closest('.spesialis-item');
    if (row) {
        row.remove();
    }
}

// MODAL EDIT
document.addEventListener('click', function (e) {
    const btn = e.target.closest('.btn-edit');
    if (!btn) return;

    const modal = document.getElementById('modalEditDosen');
    modal.classList.remove('hidden');
    modal.classList.add('flex');

    document.getElementById('editDosenForm').action = `/admin/kelola-dosen/${btn.dataset.id}`;

    document.getElementById('edit_nama_dosen').value = btn.dataset.nama ?? '';
    document.getElementById('edit_nik').value = btn.dataset.nik ?? '';
    document.getElementById('edit_email').value = btn.dataset.email ?? '';
    document.getElementById('edit_id_prodi').value = btn.dataset.idProdi ?? '';
    document.getElementById('edit_jabatan').value = btn.dataset.jabatan ?? '';

    const pendidikan = btn.dataset.pendidikan ?? '';
    document.getElementById('edit_pendidikan_terakhir').value = pendidikan;

    // ---- HANDLER FOTO LAMA DI MODAL EDIT ----
    const fotoPath = btn.dataset.foto ?? '';
    const editUploadBtn = document.getElementById('editUploadBtn');
    const editPreviewFile = document.getElementById('editPreviewFile');
    const editFileName = document.getElementById('editFileName');
    const editFileSize = document.getElementById('editFileSize');

    if (fotoPath && fotoPath.trim() !== '') {
        const namaFileLama = fotoPath.split('/').pop();

        editFileName.textContent = namaFileLama;
        editFileSize.textContent = "File Tersimpan"; // Menghidupkan baris teks kedua
        editUploadBtn.classList.add('hidden');
        editPreviewFile.classList.remove('hidden');
    } else {
        editUploadBtn.classList.remove('hidden');
        editPreviewFile.classList.add('hidden');
    }

    try {
        const riwayatPendidikans = JSON.parse(btn.dataset.riwayat || '[]');
        aturRiwayatEdit(pendidikan, riwayatPendidikans);
    } catch (err) {
        console.error('Error parsing riwayat:', err);
        aturRiwayatEdit(pendidikan, []);
    }


    try {
        const bidangSpesialis = JSON.parse(btn.dataset.spesialis || '[]');
        const spesialisContainer = document.getElementById('edit-spesialis-container');
        spesialisContainer.innerHTML = '';

        bidangSpesialis.forEach(item => {
            spesialisContainer.appendChild(
                buatRowSpesialis(item.deskripsi_bidang ?? '')
            );
        });
    } catch (err) {
        console.error('Error parsing spesialis:', err);
    }
});



function aturRiwayatEdit(pendidikan, existingData = []) {
    const container = document.getElementById('edit-riwayat-container');

    container.innerHTML = '';

    existingData.forEach(item => {
        container.appendChild(
            buatRowRiwayat(
                item.deskripsi_riwayat ?? '',
                item.id_riwayat_pendidikan ?? ''
            )
        );
    });
}

function closeEditModal() {
    const modal = document.getElementById('modalEditDosen');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function tambahSpesialisEdit() {
    const container = document.getElementById('edit-spesialis-container');
    container.appendChild(buatRowSpesialis(''));
}

// HELPER ROW
function buatRowRiwayat(value = '', id = '') {
    const row = document.createElement('div');
    row.className = 'mt-2';

    row.innerHTML = `
        <input type="hidden" name="id_riwayat[]" value="${id}">

        <input type="text" name="riwayat_pendidikan[]" value="${value}"
            placeholder="Masukkan Riwayat Pendidikan"
            class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
    `;

    return row;
}

function buatRowSpesialis(value = '') {
    const row = document.createElement('div');
    row.className = 'flex items-center gap-2 mt-2';

    row.innerHTML = `
        <input type="text" name="bidang_spesialis[]" value="${value}"
            placeholder="Masukkan Bidang Spesialis"
            class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">

        <button type="button" onclick="this.parentElement.remove()"
            class="flex-shrink-0 bg-red-100 hover:bg-red-200 text-red-600 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold">
            ✕
        </button>
    `;

    return row;
}

function hapusData(id_dosen) {
    Swal.fire({
        title: 'Yakin ingin menghapus data dosen?',
        html: 'Data dosen yang dihapus tidak dapat dikembalikan.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {

        if (result.isConfirmed) {
            document.getElementById(`deleteForm${id_dosen}`).submit();
        }

    });
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

//tombol foto
const input = document.getElementById('fotoDosen');
const uploadBtn = document.getElementById('uploadBtn');
const preview = document.getElementById('previewFile');
const fileName = document.getElementById('fileName');
const fileSize = document.getElementById('fileSize');
const hapus = document.getElementById('hapusFoto');

input.addEventListener('change', function () {

    if (!this.files.length) return;

    const file = this.files[0];

    fileName.textContent = file.name;
    fileSize.textContent = (file.size / 1024).toFixed(0) + " KB";

    uploadBtn.classList.add('hidden');
    preview.classList.remove('hidden');
});

hapus.addEventListener('click', function () {

    input.value = "";

    preview.classList.add('hidden');
    uploadBtn.classList.remove('hidden');

});

//tom select
const ts = new TomSelect("#filterProdi", {
    create: false,
    maxItems: 1,
    allowEmptyOption: true,
    closeAfterSelect: true,
    placeholder: "Semua Prodi",

    onItemAdd() {
        this.close();
        this.blur();
    }
});

// CONTROLLER INTERAKSI FOTO PADA MODAL EDIT
const inputEditFoto = document.getElementById('editFotoDosen');
const editUploadBtnEl = document.getElementById('editUploadBtn');
const editPreviewEl = document.getElementById('editPreviewFile');
const editFileNameEl = document.getElementById('editFileName');
const editFileSizeEl = document.getElementById('editFileSize');
const editHapusBtn = document.getElementById('editHapusFoto');

// Ketika user memilih file baru di modal edit
inputEditFoto.addEventListener('change', function () {
    if (!this.files.length) return;

    const file = this.files[0];
    editFileNameEl.textContent = file.name;
    // Mengubah teks dari "File Tersimpan" menjadi ukuran asli saat file baru dipilih
    editFileSizeEl.textContent = (file.size / 1024).toFixed(0) + " KB";

    editUploadBtnEl.classList.add('hidden');
    editPreviewEl.classList.remove('hidden');
});

// Ketika user menghapus preview foto di modal edit
editHapusBtn.addEventListener('click', function () {
    inputEditFoto.value = ""; // Reset file input
    editFileNameEl.textContent = "";
    editFileSizeEl.textContent = "";

    editPreviewEl.classList.add('hidden');
    editUploadBtnEl.classList.remove('hidden');
});



