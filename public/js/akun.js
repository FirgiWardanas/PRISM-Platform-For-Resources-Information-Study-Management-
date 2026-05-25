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

function openEditModal(btn, id_user,nama, nip, email, id_prodi ,nama_prodi) {
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

function hapusData(id_user) {
    if (confirm("Yakin mau menghapus akun ini?")) {
        document.getElementById(`deleteForm${id_user}`).submit();
    }
}