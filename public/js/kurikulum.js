//dropdown semester 1
function tooglesemester() {
    const content = document.getElementById("semesterContent");
    const icon = document.getElementById("iconarrow");
    const btn = document.getElementById("btnTambah");

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(); // tutup semua dulu

    if (!isOpen) {
        content.classList.remove("hidden");
        icon.classList.add("rotate-180");
        btn.classList.remove("hidden");
    }
}
//dropdown semester 2
function tooglesemester2() {
    const content = document.getElementById("semesterContent2");
    const icon = document.getElementById("iconarrow2");
    const btn = document.getElementById("btnTambah2");

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(); // tutup semua dulu

    if (!isOpen) {
        content.classList.remove("hidden");
        icon.classList.add("rotate-180");
        btn.classList.remove("hidden");
    }
}
//dropdown semester 3
function tooglesemester3() {
    const content = document.getElementById("semesterContent3");
    const icon = document.getElementById("iconarrow3");
    const btn = document.getElementById("btnTambah3");

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(); // tutup semua dulu

    if (!isOpen) {
        content.classList.toggle("hidden");
        icon.classList.toggle("rotate-180");
        btn.classList.toggle("hidden");
    }
}
//dropdown semester 4
function tooglesemester4() {
    const content = document.getElementById("semesterContent4");
    const icon = document.getElementById("iconarrow4");
    const btn = document.getElementById("btnTambah4");

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(); // tutup semua dulu

    if (!isOpen) {
        content.classList.toggle("hidden");
        icon.classList.toggle("rotate-180");
        btn.classList.toggle("hidden");
    }
}
//dropdown semester 5
function tooglesemester5() {
    const content = document.getElementById("semesterContent5");
    const icon = document.getElementById("iconarrow5");
    const btn = document.getElementById("btnTambah5");

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(); // tutup semua dulu

    if (!isOpen) {
        content.classList.toggle("hidden");
        icon.classList.toggle("rotate-180");
        btn.classList.toggle("hidden");
    }
}
//dropdown semester 6
function tooglesemester6() {
    const content = document.getElementById("semesterContent6");
    const icon = document.getElementById("iconarrow6");
    const btn = document.getElementById("btnTambah6");

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(); // tutup semua dulu

    if (!isOpen) {
        content.classList.toggle("hidden");
        icon.classList.toggle("rotate-180");
        btn.classList.toggle("hidden");
    }
}
//dropdown semester 7
function tooglesemester7() {
    const content = document.getElementById("semesterContent7");
    const icon = document.getElementById("iconarrow7");
    const btn = document.getElementById("btnTambah7");

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(); // tutup semua dulu

    if (!isOpen) {
        content.classList.toggle("hidden");
        icon.classList.toggle("rotate-180");
        btn.classList.toggle("hidden");
    }
}
//dropdown semester 8
function tooglesemester8() {
    const content = document.getElementById("semesterContent8");
    const icon = document.getElementById("iconarrow8");
    const btn = document.getElementById("btnTambah8");

    const isOpen = !content.classList.contains("hidden");

    closeAllSemester(); // tutup semua dulu

    if (!isOpen) {
        content.classList.toggle("hidden");
        icon.classList.toggle("rotate-180");
        btn.classList.toggle("hidden");
    }
}
// function untuk nutup semua
function closeAllSemester() {
    document.getElementById("semesterContent").classList.add("hidden");
    document.getElementById("iconarrow").classList.remove("rotate-180");
    document.getElementById("btnTambah").classList.add("hidden");

    document.getElementById("semesterContent2").classList.add("hidden");
    document.getElementById("iconarrow2").classList.remove("rotate-180");
    document.getElementById("btnTambah2").classList.add("hidden");

    document.getElementById("semesterContent3").classList.add("hidden");
    document.getElementById("iconarrow3").classList.remove("rotate-180");
    document.getElementById("btnTambah3").classList.add("hidden");

    document.getElementById("semesterContent4").classList.add("hidden");
    document.getElementById("iconarrow4").classList.remove("rotate-180");
    document.getElementById("btnTambah4").classList.add("hidden");

    document.getElementById("semesterContent5").classList.add("hidden");
    document.getElementById("iconarrow5").classList.remove("rotate-180");
    document.getElementById("btnTambah5").classList.add("hidden");

    document.getElementById("semesterContent6").classList.add("hidden");
    document.getElementById("iconarrow6").classList.remove("rotate-180");
    document.getElementById("btnTambah6").classList.add("hidden");

    document.getElementById("semesterContent7").classList.add("hidden");
    document.getElementById("iconarrow7").classList.remove("rotate-180");
    document.getElementById("btnTambah7").classList.add("hidden");

    document.getElementById("semesterContent8").classList.add("hidden");
    document.getElementById("iconarrow8").classList.remove("rotate-180");
    document.getElementById("btnTambah8").classList.add("hidden");
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
function saveTambah() {
    // tutup modal
    closeTambahKurikulum();

    // tampilkan popup sukses
    const popup = document.getElementById("popupSukses");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
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
function saveEdit() {
    closeEditKurikulum();

    const popup = document.getElementById("popupSuksesEdit");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}
//tambahmatkuliah semester1
function openModalMatkul() {
    const modal = document.getElementById("modalMatkul");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul() {
    const modal = document.getElementById("modalMatkul");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveMatkul() {
    closeModalMatkul();

    // popup sukses yang sudah kamu punya
    const popup = document.getElementById("popupSuksesTambahMatkul");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}
//tambahmatkuliah semester2
function openModalMatkul2() {
    const modal = document.getElementById("modalMatkul2");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul2() {
    const modal = document.getElementById("modalMatkul2");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveMatkul() {
    closeModalMatkul();

    // popup sukses yang sudah kamu punya
    const popup = document.getElementById("popupSuksesTambahMatkul");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}

//tambahmatkuliah semester3
function openModalMatkul3() {
    const modal = document.getElementById("modalMatkul3");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul3() {
    const modal = document.getElementById("modalMatkul3");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveMatkul() {
    closeModalMatkul();

    // popup sukses yang sudah kamu punya
    const popup = document.getElementById("popupSuksesTambahMatkul");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}
//tambahmatkuliah semester4
function openModalMatkul4() {
    const modal = document.getElementById("modalMatkul4");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul4() {
    const modal = document.getElementById("modalMatkul4");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveMatkul() {
    closeModalMatkul();

    // popup sukses yang sudah kamu punya
    const popup = document.getElementById("popupSuksesTambahMatkul");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}
//tambahmatkuliah semester5
function openModalMatkul5() {
    const modal = document.getElementById("modalMatkul5");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul5() {
    const modal = document.getElementById("modalMatkul5");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveMatkul() {
    closeModalMatkul();

    // popup sukses yang sudah kamu punya
    const popup = document.getElementById("popupSuksesTambahMatkul");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}
//tambahmatkuliah semester6
function openModalMatkul6() {
    const modal = document.getElementById("modalMatkul6");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul6() {
    const modal = document.getElementById("modalMatkul6");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveMatkul() {
    closeModalMatkul();

    // popup sukses yang sudah kamu punya
    const popup = document.getElementById("popupSuksesTambahMatkul");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}
//tambahmatkuliah semester7
function openModalMatkul7() {
    const modal = document.getElementById("modalMatkul7");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul7() {
    const modal = document.getElementById("modalMatkul7");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveMatkul() {
    closeModalMatkul();

    // popup sukses yang sudah kamu punya
    const popup = document.getElementById("popupSuksesTambahMatkul");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}
//tambahmatkuliah semester8
function openModalMatkul8() {
    const modal = document.getElementById("modalMatkul8");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalMatkul8() {
    const modal = document.getElementById("modalMatkul8");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

function saveMatkul() {
    closeModalMatkul();

    // popup sukses yang sudah kamu punya
    const popup = document.getElementById("popupSuksesTambahMatkul");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}

//modalsilabus semester 1
function openModalSilabus() {
    const modal = document.getElementById("modalSilabus");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus() {
    const modal = document.getElementById("modalSilabus");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS() {
    const upload = document.getElementById("uploadArea");
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
//modalsilabus semester 2
function openModalSilabus2() {
    const modal = document.getElementById("modalSilabus2");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus2() {
    const modal = document.getElementById("modalSilabus2");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize2(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS2() {
    const upload = document.getElementById("uploadArea2");
    upload.classList.toggle("hidden");
}
//simpansilabus
function simpansilabus2() {
    closeModalSilabus(); 

    const popup = document.getElementById("popupSuksesSilabus");
    popup.classList.remove("hidden");

    setTimeout(() => {
        popup.classList.add("hidden");
    }, 3000);
}
//modalsilabus semester 3
function openModalSilabus3() {
    const modal = document.getElementById("modalSilabus3");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus3() {
    const modal = document.getElementById("modalSilabus3");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize3(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS3() {
    const upload = document.getElementById("uploadArea3");
    upload.classList.toggle("hidden");
}

//modalsilabus semester 4
function openModalSilabus4() {
    const modal = document.getElementById("modalSilabus4");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus4() {
    const modal = document.getElementById("modalSilabus4");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize4(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS4() {
    const upload = document.getElementById("uploadArea4");
    upload.classList.toggle("hidden");
}

//modalsilabus semester 5
function openModalSilabus5() {
    const modal = document.getElementById("modalSilabus5");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus5() {
    const modal = document.getElementById("modalSilabus5");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize5(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS5() {
    const upload = document.getElementById("uploadArea5");
    upload.classList.toggle("hidden");
}

//modalsilabus semester 6
function openModalSilabus6() {
    const modal = document.getElementById("modalSilabus6");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus6() {
    const modal = document.getElementById("modalSilabus6");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize6(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS6() {
    const upload = document.getElementById("uploadArea6");
    upload.classList.toggle("hidden");
}

//modalsilabus semester 7
function openModalSilabus7() {
    const modal = document.getElementById("modalSilabus7");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus7() {
    const modal = document.getElementById("modalSilabus7");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize7(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS7() {
    const upload = document.getElementById("uploadArea7");
    upload.classList.toggle("hidden");
}

//modalsilabus semester 8
function openModalSilabus8() {
    const modal = document.getElementById("modalSilabus8");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeModalSilabus8() {
    const modal = document.getElementById("modalSilabus8");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
//js autosize table
function autoResize8(el) {
    el.style.height = "auto";
    el.style.height = el.scrollHeight + "px";
}
function tambahRPS8() {
    const upload = document.getElementById("uploadArea8");
    upload.classList.toggle("hidden");
}


// editmatakuliah semester 1
function openEditMatakuliah() {
    const modal = document.getElementById("modalEditMatakuliah");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}
// tutup modal edit
function closeEditMatakuliah() {
    const modal = document.getElementById("modalEditMatakuliah");
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
// editmatakuliah semester 2
function openEditMatakuliah2() {
    const modal = document.getElementById("modalEditMatakuliah2");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}
// tutup modal edit
function closeEditMatakuliah2() {
    const modal = document.getElementById("modalEditMatakuliah2");
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
// editmatakuliah semester 3
function openEditMatakuliah3() {
    const modal = document.getElementById("modalEditMatakuliah3");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}
// tutup modal edit
function closeEditMatakuliah3() {
    const modal = document.getElementById("modalEditMatakuliah3");
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
// editmatakuliah semester 4
function openEditMatakuliah4() {
    const modal = document.getElementById("modalEditMatakuliah4");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}
// tutup modal edit
function closeEditMatakuliah4() {
    const modal = document.getElementById("modalEditMatakuliah4");
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
// editmatakuliah semester 5
function openEditMatakuliah5() {
    const modal = document.getElementById("modalEditMatakuliah5");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}
// tutup modal edit
function closeEditMatakuliah5() {
    const modal = document.getElementById("modalEditMatakuliah5");
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
// editmatakuliah semester 6
function openEditMatakuliah6() {
    const modal = document.getElementById("modalEditMatakuliah6");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}
// tutup modal edit
function closeEditMatakuliah6() {
    const modal = document.getElementById("modalEditMatakuliah6");
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
// editmatakuliah semester 7
function openEditMatakuliah7() {
    const modal = document.getElementById("modalEditMatakuliah7");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}
// tutup modal edit
function closeEditMatakuliah7() {
    const modal = document.getElementById("modalEditMatakuliah7");
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
// editmatakuliah semester 8
function openEditMatakuliah8() {
    const modal = document.getElementById("modalEditMatakuliah8");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}// tutup modal edit
function closeEditMatakuliah8() {
    const modal = document.getElementById("modalEditMatakuliah8");
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