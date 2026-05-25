
function toggleCard(el) {
    const currentCard = el.closest('.card');

    // tutup semua card dulu
    document.querySelectorAll('.card').forEach(card => {
        if (card !== currentCard) {
            card.querySelector('.card-content')?.classList.add('hidden');
            card.querySelector('.icon-arrow')?.classList.remove('rotate-180');
        }
    });

    // ambil card yang diklik
    const content = currentCard.querySelector('.card-content');
    const icon = currentCard.querySelector('.icon-arrow');

    const isOpen = !content.classList.contains('hidden');

    // kalau belum kebuka → buka
    if (!isOpen) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        // kalau sudah kebuka → tutup
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}

function openTambahModal() {
    const modal = document.getElementById(`modalTambahDosen`);
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeTambahModal() {
    const modal = document.getElementById(`modalTambahDosen`);
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}




function aturRiwayat() {

    let pendidikan =
        document.getElementById('pendidikan_terakhir').value;

    let container =
        document.getElementById('riwayat-container');

    container.innerHTML = '';

    let jumlah = 1;

    if (pendidikan === 'S2') {
        jumlah = 2;
    }

    if (pendidikan === 'S3') {
        jumlah = 3;
    }

    for (let i = 1; i <= jumlah; i++) {

        let input = document.createElement('input');

        input.type = 'text';

        input.name = 'riwayat_pendidikan[]';

        input.placeholder =
            'Riwayat Pendidikan ' + i;

        input.className =
            'w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none mt-2';

        container.appendChild(input);
    }
}


    function tambahSpesialis() {
        const container = document.getElementById('spesialis-container');

        const row = document.createElement('div');
        row.className = 'flex items-center gap-2 mt-2';

        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'bidang_spesialis[]';
        input.placeholder = 'Masukkan Bidang Spesialis';
        input.className = 'w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none';

        const btnHapus = document.createElement('button');
        btnHapus.type = 'button';
        btnHapus.className = 'flex-shrink-0 bg-red-100 hover:bg-red-200 text-red-600 w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold';
        btnHapus.textContent = '✕';
        btnHapus.onclick = () => row.remove();

        row.appendChild(input);
        row.appendChild(btnHapus);
        container.appendChild(row);
    }



    // edit



    function closeEditModal() {
    const modal = document.getElementById(`modalEditDosen`);
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}


function openEditModal(
    btn,
    id_dosen,
    id_prodi,
    nama_dosen,
    jabatan,
    pendidikan,
    nik,
    email,
    riwayatPendidikans,
    bidangSpesialis,
    nama_prodi
)
{
    // =========================
    // FORM ACTION
    // =========================

    document.getElementById('editDosenForm').action = `/admin/kelola-dosen/${id_dosen}`;

    // =========================
    // TAMPILKAN MODAL
    // =========================

    const modal = document.getElementById("modalEditDosen");

    modal.classList.remove("hidden");
    modal.classList.add("flex");

    // =========================
    // INPUT BIASA
    // =========================

    document.getElementById('edit_nama_dosen').value =nama_dosen;

    document.getElementById('edit_nik').value =nik;

    document.getElementById('edit_email').value =email;

    document.getElementById('edit_id_prodi').value =id_prodi;

    document.getElementById('edit_jabatan').value =jabatan;

    document.getElementById('edit_pendidikan_terakhir').value = pendidikan;
    // =========================
    // RIWAYAT PENDIDIKAN
    // =========================

    let riwayatContainer =
        document.getElementById('edit-riwayat-container');

    riwayatContainer.innerHTML = '';

    riwayatPendidikans.forEach((item) => {

        let row = document.createElement('div');

        row.className =
            'flex items-center gap-2 mt-2';

        row.innerHTML = `
            <input
                type="text"
                name="riwayat_pendidikan[]"
                value="${item.deskripsi_riwayat}"
                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow">

            <button
                type="button"
                onclick="this.parentElement.remove()"
                class="bg-red-100 text-red-600 w-6 h-6 rounded-full">

                ✕

            </button>
        `;

        riwayatContainer.appendChild(row);
    });

    // =========================
    // BIDANG SPESIALIS
    // =========================

    let spesialisContainer =
        document.getElementById('edit-spesialis-container');

    spesialisContainer.innerHTML = '';

    bidangSpesialis.forEach((item) => {

        let row = document.createElement('div');

        row.className =
            'flex items-center gap-2 mt-2';

        row.innerHTML = `
            <input
                type="text"
                name="bidang_spesialis[]"
                value="${item.deskripsi_bidang}"
                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow">

            <button
                type="button"
                onclick="this.parentElement.remove()"
                class="bg-red-100 text-red-600 w-6 h-6 rounded-full">

                ✕

            </button>
        `;

        spesialisContainer.appendChild(row);
    });

}
