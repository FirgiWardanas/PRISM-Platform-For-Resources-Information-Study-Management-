function showKurikulum(id) {

    // sembunyikan semua
    document.querySelectorAll(".kurikulum-content").forEach(el => {
        el.classList.add("hidden");
    });

    // tampilkan yang dipilih
    document.getElementById(`kurikulum-${id}`)
        .classList.remove("hidden");
}






// TAMBAH

// tambahkurikulum
function openTambahKurikulum() {
    document.getElementById("tambahkurikulum").classList.remove("hidden");
    document.getElementById("tambahkurikulum").classList.add("flex");
}

function closeTambahKurikulum() {
    document.getElementById("tambahkurikulum").classList.add("hidden");
    document.getElementById("tambahkurikulum").classList.remove("flex");
}


// Semester
let valueTambah = 0;

function updateUITambah() {
    document.getElementById("valueBoxTambah").innerText = valueTambah;
    document.getElementById("semesterInputTambah").value = valueTambah;
}

function tambahTambah() {
    valueTambah++;
    updateUITambah();
}

function kurangTambah() {
    if (valueTambah > 0) {
        valueTambah--;
        updateUITambah();
    }
}







// EDIT


let valueEdit = 0;

//modaleditkurikulum
function openEditModal(btn, id_kurikulum, nama_kurikulum, tahun_mulai, status_kurikulum, total_semester) {
    const modal = document.getElementById("editKurikulum");

    modal.classList.remove("hidden");
    modal.classList.add("flex");

    // isi form edit
    document.getElementById("nama_kurikulum").value = nama_kurikulum;
    document.getElementById("tahun_mulai").value = tahun_mulai;

    // isi select status
    document.getElementById("status_kurikulum").value = status_kurikulum;

    valueEdit = total_semester;

    document.getElementById("valueBoxEdit").innerText = total_semester;

    document.getElementById("semesterInputEdit").value = total_semester;

    // set action form ke route update (dynamic)
    document.getElementById("formEdit").action = `/admin/kurikulum/${id_kurikulum}`;
}


function closeEditKurikulum() {
    document.getElementById("editKurikulum").classList.add("hidden");
    document.getElementById("editKurikulum").classList.remove("flex");
}



function updateUIEdit() {
    document.getElementById("valueBoxEdit").innerText = valueEdit;
    document.getElementById("semesterInputEdit").value = valueEdit;
}

function tambahEdit() {
    valueEdit++;
    updateUIEdit();
}

function kurangEdit() {
    if (valueEdit > 0) {
        valueEdit--;
        updateUIEdit();
    }
}








// Hapus

function hapusKurikulum(id_kurikulum) {
    if (confirm("Yakin mau menghapus kurikulum ini?")) {
        document.getElementById(`deleteForm_${id_kurikulum}`).submit();
    }
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

//tambah silabus

const fileInput = document.getElementById("fileUpload");
const fileName = document.getElementById("fileName");
const dropArea = document.getElementById("dropArea");

const uploadIcon = document.getElementById("uploadIcon");
const fileIcon = document.getElementById("fileIcon");
const uploadText = document.getElementById("uploadText");
const removeBtn = document.getElementById("removeFile");

// === SET FILE ===
function setFile(file) {
    fileName.textContent = file.name;

    // sembunyi upload
    uploadIcon.classList.add("hidden");
    uploadText.classList.add("hidden");

    // tampil file icon & tombol hapus
    fileIcon.classList.remove("hidden");
    removeBtn.classList.remove("hidden");
}

// === REMOVE FILE ===
function removeFile() {
    fileInput.value = "";
    fileName.textContent = "";

    uploadIcon.classList.remove("hidden");
    uploadText.classList.remove("hidden");

    fileIcon.classList.add("hidden");
    removeBtn.classList.add("hidden");
}

// klik browse
fileInput.addEventListener("change", function () {
    if (this.files.length > 0) {
        setFile(this.files[0]);
    }
});

// drag over
dropArea.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropArea.classList.add("bg-blue-50");
});

// drag leave
dropArea.addEventListener("dragleave", () => {
    dropArea.classList.remove("bg-blue-50");
});

// drop file
dropArea.addEventListener("drop", (e) => {
    e.preventDefault();
    dropArea.classList.remove("bg-blue-50");

    const files = e.dataTransfer.files;
    if (files.length > 0) {
        fileInput.files = files;
        setFile(files[0]);
    }
});

// tombol hapus
removeBtn.addEventListener("click", removeFile);


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


