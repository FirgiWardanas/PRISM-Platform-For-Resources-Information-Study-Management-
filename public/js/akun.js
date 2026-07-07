function openTambahModal() {
    const modal = document.getElementById("tambahmodal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeTambahModal() {
    const modal = document.getElementById("tambahmodal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function openEditModal(btn, id_user, nama, nip, email, id_prodi, nama_prodi) {
    const modal = document.getElementById("modaledit");

    modal.classList.remove("hidden");
    modal.classList.add("flex");

    // isi form edit
    document.getElementById("editnama").value = nama;
    document.getElementById("editnip").value = nip;
    document.getElementById("editemail").value = email;

    // option pertama
    const selected = document.getElementById("selected_prodi");

    selected.value = id_prodi;
    selected.textContent = nama_prodi;

    // pilih option itu
    document.getElementById("id_prodi").value = id_prodi;

    // set action form ke route update (dynamic)
    document.getElementById("formEdit").action = `/admin/akun/${id_user}`;
}

function closeEditModal() {
    const modal = document.getElementById("modaledit");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function hapusData(id) {
    Swal.fire({
        title: 'Yakin ingin menghapus akun pengelola?',
        text: 'Seluruh akses login untuk akun ini akan dicabut secara permanen.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc2626',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`deleteForm${id}`).submit();
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