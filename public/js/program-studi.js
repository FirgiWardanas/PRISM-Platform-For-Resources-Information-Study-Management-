// =======================
// MODAL TAMBAH
// =======================
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

// ❌ HAPUS saveTambah()
// karena submit langsung ke backend


// =======================
// MODAL EDIT
// =======================
function openEditModal(btn, id, kode, nama, jenjang) {
    const modal = document.getElementById("modaledit");

    modal.classList.remove("hidden");
    modal.classList.add("flex");

    // isi form edit
    document.getElementById("editkode").value = kode;
    document.getElementById("editnama").value = nama;
    document.getElementById("editjenjang").value = jenjang;

    // set action form ke route update (dynamic)
    document.getElementById("formEdit").action = `/admin/program-studi/${id}`;
}

function closeEditModal() {
    const modal = document.getElementById("modaledit");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

// ❌ HAPUS saveEdit()
// karena update dilakukan oleh backend


// =======================
// HAPUS DATA (BACKEND)
// =======================
function hapusData(id) {
    if (confirm("Yakin mau hapus data ini?")) {
        document.getElementById(`deleteForm${id}`).submit();
    }
}
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
