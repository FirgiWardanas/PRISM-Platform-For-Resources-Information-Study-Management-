function showKurikulum(id) {
    document.querySelectorAll(".kurikulum-content").forEach(el => {
        el.classList.add("hidden");
    });

    document.getElementById(`kurikulum-${id}`).classList.remove("hidden");
}
//togle
function toggleSemester(kurikulumId, semesterId) {
    const content = document.getElementById(`semesterContent${kurikulumId}-${semesterId}`);
    const icon = document.getElementById(`iconarrow${kurikulumId}-${semesterId}`);
    const btn = document.getElementById(`btnTambah${kurikulumId}-${semesterId}`);

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(kurikulumId);

    if (!isOpen) {
        content.classList.remove("hidden");
        icon.classList.add("rotate-180");
        btn.classList.remove("hidden");
    }
}

function closeAllSemester(kurikulumId) {
    for (let i = 1; i <= 8; i++) {
        document.getElementById(`semesterContent${kurikulumId}-${i}`)?.classList.add("hidden");
        document.getElementById(`iconarrow${kurikulumId}-${i}`)?.classList.remove("rotate-180");
        document.getElementById(`btnTambah${kurikulumId}-${i}`)?.classList.add("hidden");
    }
}
//open modal matkul
function openModalMatkul(kurikulumId, semesterId) {
    const modal = document.getElementById(`modalMatkul${kurikulumId}-${semesterId}`);
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul(kurikulumId, semesterId) {
    const modal = document.getElementById(`modalMatkul${kurikulumId}-${semesterId}`);
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

// editmatakuliah semester 
function openEditMatakuliah(id) {
    const modal = document.getElementById(`modalEditMatakuliah${id}`);
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}
// tutup modal edit
function closeEditMatakuliah(id) {
    const modal = document.getElementById(`modalEditMatakuliah${id}`);
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveEditMatkuliah() {
    closeEditMatakuliah();

    const popup = document.getElementById("popupSuksesEditMatakuliah");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}

// tambahkurikulum
function openTambahKurikulum() {
    document.getElementById("tambahkurikulum").classList.remove("hidden");
    document.getElementById("tambahkurikulum").classList.add("flex");
}

function closeTambahKurikulum() {
    document.getElementById("tambahkurikulum").classList.add("hidden");
    document.getElementById("tambahkurikulum").classList.remove("flex");
}

//
let value = 0;

function updateUI() {
    document.getElementById("valueBox").innerText = value;
}

function tambah() {
    value++;
    updateUI();
}

function kurang() {
    if (value > 0) { // biar nggak minus
        value--;
        updateUI();
    }
}

//
let valueKur = 0;

function updateKurUI() {
    document.getElementById("valueKurBox").innerText = valueKur;
}

function tambahkur() {
    valueKur++;
    updateKurUI();
}

function kurangkur() {
    if (valueKur > 0) {
        valueKur--;
        updateKurUI();
    }
}

//modaleditkurikulum
function editKurikulum() {
    document.getElementById("editKurikulum").classList.remove("hidden");
    document.getElementById("editKurikulum").classList.add("flex");
}

function closeEditKurikulum() {
    document.getElementById("editKurikulum").classList.add("hidden");
    document.getElementById("editKurikulum").classList.remove("flex");
}


function openModalSilabus(id) {
    const modal = document.getElementById(`modalSilabus${id}`);
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus(id) {
    const modal = document.getElementById(`modalSilabus${id}`);
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS(id) {
    const upload = document.getElementById(`uploadArea${id}`);
    upload.classList.toggle("hidden");
}
//simpansilabus
function simpansilabus() {
    closeModalSilabus();

    const popup = document.getElementById("popupSuksesSilabus");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}

//hapuskurikulum
function hapusKurikulum(el) {
    const yakin = confirm("Yakin ingin menghapus kurikulum ini?");
    if (!yakin) return;

    // ambil div kurikulum terdekat
    const item = el.closest("div");

    if (item) {
        item.remove();
    }
}

