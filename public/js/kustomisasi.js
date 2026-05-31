function setupColor(inputPicker, inputText, previewBox) {

    const picker = document.getElementById(inputPicker);
    const input = document.getElementById(inputText);
    const preview = document.getElementById(previewBox);

    // dari picker
    picker.addEventListener('input', function () {
        input.value = this.value;
        preview.style.backgroundColor = this.value;
    });

    // dari input manual
    input.addEventListener('input', function () {
        preview.style.backgroundColor = this.value;
    });

}
document.addEventListener("DOMContentLoaded", function () {

    setupColor('picker-primary', 'input-primary', 'preview-primary');

    setupColor('picker-secondary', 'input-secondary', 'preview-secondary');

    setupColor('picker-tertiary', 'input-tertiary', 'preview-tertiary');

    setupColor('picker-quaternary', 'input-quaternary', 'preview-quaternary');

});


function setupImagePreview(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    input.addEventListener('change', function () {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.innerHTML = `
                    <div class="relative w-full h-full">
                        
                        <!-- gambar -->
                        <img src="${e.target.result}" 
                             class="w-full h-full object-contain rounded-xl">

                        <!-- tombol hapus -->
                        <button onclick="removeImage('${inputId}', '${previewId}')" 
                            class="absolute top-1 right-1 bg-white border border-red-300 rounded-md p-1 shadow hover:bg-red-100">
                            
                            <img src="/images/icon-hapus (merah).svg" class="w-4 h-4">
                        </button>

                    </div>
                `;
            }

            reader.readAsDataURL(file);
        }
    });
}
// hapus
function removeImage(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    // reset input file
    input.value = "";

    // balikin ke icon upload awal
    preview.innerHTML = `
        <img src="/images/icon-upload.svg" class="w-17 h-17 ">
    `;
}
document.addEventListener("DOMContentLoaded", function () {

    setupImagePreview('input-logo', 'preview-logo');
    setupImagePreview('input-ilustrasi', 'preview-ilustrasi');
    setupImagePreview('input-icon', 'preview-icon');
    setupImagePreview('input-header', 'preview-header');
    setupImagePreview('input-footer', 'preview-footer');

});

//ketua jurusan
//tambah
function openModal() {
    const modal = document.getElementById('modalProfil');

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeModal() {
    const modal = document.getElementById('modalProfil');

    modal.classList.remove('flex');
    modal.classList.add('hidden');
}
//edit
function editProfil(button) {

    const card = button.closest('.profil-card');

    const judul =
        card.querySelector('.judul-profil').innerText;

    const deskripsi =
        card.querySelector('.deskripsi-profil').innerText;

    document.getElementById('editJudul').value = judul;
    document.getElementById('editDeskripsi').value = deskripsi;

    const modal = document.getElementById('modalEditProfil');

    modal.classList.remove('hidden');
    modal.classList.add('flex');

}
function closeModalEdit() {

    const modal = document.getElementById('modalEditProfil');

    modal.classList.remove('flex');
    modal.classList.add('hidden');

}
