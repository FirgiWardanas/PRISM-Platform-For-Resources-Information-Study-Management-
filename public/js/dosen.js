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

// =====================
// JUMLAH RIWAYAT
// =====================

function getJumlahRiwayat(pendidikan) {
    if (pendidikan === 'S2') return 2;
    if (pendidikan === 'S3') return 3;
    return 1;
}

// =====================
// MODAL TAMBAH
// =====================

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

function aturRiwayat() {
    const pendidikan = document.getElementById('pendidikan_terakhir').value;
    const container = document.getElementById('riwayat-container');

    container.innerHTML = '';

    if (!pendidikan) return;

    const jumlah = getJumlahRiwayat(pendidikan);

    for (let i = 1; i <= jumlah; i++) {
        const input = document.createElement('input');

        input.type = 'text';
        input.name = 'riwayat_pendidikan[]';
        input.placeholder = 'Riwayat Pendidikan ' + i;
        input.className = 'w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none mt-2';

        container.appendChild(input);
    }
}

function tambahSpesialis() {
    const container = document.getElementById('spesialis-container');
    container.appendChild(buatRowSpesialis(''));
}

// =====================
// MODAL EDIT
// =====================

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

    if (!pendidikan) return;

    const jumlah = getJumlahRiwayat(pendidikan);

    for (let i = 0; i < jumlah; i++) {
        const idRiwayat = existingData[i]?.id_riwayat_pendidikan ?? '';
        const value = existingData[i]?.deskripsi_riwayat ?? '';

        container.appendChild(
            buatRowRiwayat(value, idRiwayat)
        );
    }
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

// =====================
// HELPER ROW
// =====================

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
    if (confirm("Yakin mau menghapus data dosen berikut?")) {
        document.getElementById(`deleteForm${id_dosen}`).submit();
    }
}