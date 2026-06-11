function showKurikulum(id) {
    document.querySelectorAll('.kurikulum-content').forEach(el => el.classList.add('hidden'));
    const panel = document.getElementById(`kurikulum-${id}`);
    if (panel) panel.classList.remove('hidden');
}

function openTambahKurikulum() {
    const modal = document.getElementById('tambahkurikulum');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeTambahKurikulum() {
    const modal = document.getElementById('tambahkurikulum');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

let valueTambah = 0;

function updateUITambah() {
    document.getElementById('valueBoxTambah').innerText = valueTambah;
    document.getElementById('semesterInputTambah').value = valueTambah;
}

function tambahTambah() {
    if (valueTambah < 8) { valueTambah++; updateUITambah(); }
}

function kurangTambah() {
    if (valueTambah > 0) { valueTambah--; updateUITambah(); }
}

let valueEdit = 0;

function openEditModal(btn, id_kurikulum, nama_kurikulum, tahun_mulai, status_kurikulum, total_semester) {
    const modal = document.getElementById('editKurikulum');
    modal.classList.remove('hidden');
    modal.classList.add('flex');

    document.getElementById('nama_kurikulum').value = nama_kurikulum;
    document.getElementById('tahun_mulai').value = tahun_mulai;
    document.getElementById('status_kurikulum').value = status_kurikulum;

    valueEdit = parseInt(total_semester, 10);
    document.getElementById('valueBoxEdit').innerText = valueEdit;
    document.getElementById('semesterInputEdit').value = valueEdit;

    document.getElementById('formEdit').action = `/admin/kurikulum/${id_kurikulum}`;
}

function closeEditKurikulum() {
    const modal = document.getElementById('editKurikulum');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function updateUIEdit() {
    document.getElementById('valueBoxEdit').innerText = valueEdit;
    document.getElementById('semesterInputEdit').value = valueEdit;
}

function tambahEdit() {
    if (valueEdit < 8) { valueEdit++; updateUIEdit(); }
}

function kurangEdit() {
    if (valueEdit > 0) { valueEdit--; updateUIEdit(); }
}

function hapusKurikulum(id_kurikulum) {
    if (confirm('Yakin ingin menghapus kurikulum ini?\nSemua data semester dan silabus terkait juga akan terhapus secara permanen.')) {
        document.getElementById(`deleteForm_${id_kurikulum}`).submit();
    }
}

function toggleSemester(kurikulumId, semesterId) {
    const content = document.getElementById(`semesterContent${kurikulumId}-${semesterId}`);
    const icon = document.getElementById(`iconarrow${kurikulumId}-${semesterId}`);
    const btn = document.getElementById(`btnTambah${kurikulumId}-${semesterId}`);

    const isOpen = !content.classList.contains('hidden');
    closeAllSemester(kurikulumId);

    if (!isOpen) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
        btn.classList.remove('hidden');
    }
}

function closeAllSemester(kurikulumId) {
    for (let i = 1; i <= 8; i++) {
        document.getElementById(`semesterContent${kurikulumId}-${i}`)?.classList.add('hidden');
        document.getElementById(`iconarrow${kurikulumId}-${i}`)?.classList.remove('rotate-180');
        document.getElementById(`btnTambah${kurikulumId}-${i}`)?.classList.add('hidden');
    }
}

function openModalTambahMatkul(kurikulumId, semester) {
    const form = document.getElementById('formTambahMatkul');
    form.action = `/admin/kurikulum/${kurikulumId}/detail`;

    form.reset();

    document.getElementById('inputTambahSemester').value = semester;

    resetTambahFileArea();

    // Reset Alpine search tambah
    const mkSearchEl = document.querySelector('#modalTambahMatkul [x-data]');
    if (mkSearchEl) {
        const alpine = Alpine.$data(mkSearchEl);
        alpine.query = '';
        alpine.selectedId = '';
        alpine.open = false;
        alpine.filtered = alpine.all;
    }

    const modal = document.getElementById('modalTambahMatkul');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeModalTambahMatkul() {
    const modal = document.getElementById('modalTambahMatkul');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function resetTambahFileArea() {
    document.getElementById('uploadTextTambah').classList.remove('hidden');
    document.getElementById('uploadIconTambah').classList.remove('hidden');
    document.getElementById('fileIconTambah').classList.add('hidden');
    document.getElementById('fileNameTambah').textContent = '';
    document.getElementById('removeTambahFile').classList.add('hidden');
}

function removeTambahFile() {
    document.getElementById('tambahFileRps').value = '';
    resetTambahFileArea();
}

document.addEventListener('DOMContentLoaded', function () {
    const tambahFileInput = document.getElementById('tambahFileRps');
    if (tambahFileInput) {
        tambahFileInput.addEventListener('change', function () {
            if (this.files.length > 0) {
                const file = this.files[0];
                document.getElementById('uploadTextTambah').classList.add('hidden');
                document.getElementById('uploadIconTambah').classList.add('hidden');
                document.getElementById('fileIconTambah').classList.remove('hidden');
                document.getElementById('removeTambahFile').classList.remove('hidden');
                document.getElementById('fileNameTambah').textContent = file.name;
            }
        });
    }

    const silabusFileInput = document.getElementById('silabusFileRps');
    if (silabusFileInput) {
        silabusFileInput.addEventListener('change', function () {
            const nameEl = document.getElementById('silabusNewFileName');
            const textEl = document.getElementById('uploadTextSilabus');
            const iconEl = document.getElementById('uploadIconSilabus');
            if (this.files.length > 0) {
                nameEl.textContent = 'File dipilih: ' + this.files[0].name;
                nameEl.classList.remove('hidden');
                if (textEl) textEl.classList.add('hidden');
                if (iconEl) iconEl.classList.add('hidden');
            } else {
                nameEl.classList.add('hidden');
                if (textEl) textEl.classList.remove('hidden');
                if (iconEl) iconEl.classList.remove('hidden');
            }
        });
    }

    ['modalTambahMatkul', 'modalEditMatkul', 'modalSilabus',
        'tambahkurikulum', 'editKurikulum'].forEach(function (id) {
            const el = document.getElementById(id);
            if (!el) return;
            el.addEventListener('click', function (e) {
                if (e.target === el) {
                    el.classList.add('hidden');
                    el.classList.remove('flex');
                }
            });
        });
});

function openModalEditMatkul(imgEl) {
    const d = imgEl.dataset;

    document.getElementById('formEditMatkul').action = `/admin/detail-kurikulum/${d.idDetail}`;

    document.getElementById('editSemester').value = d.semester;
    document.getElementById('editSks').value = d.sks;
    document.getElementById('editBobotTeori').value = d.bobotTeori;
    document.getElementById('editBobotPraktikum').value = d.bobotPraktikum;
    document.getElementById('editSesiTeori').value = d.sesiTeori;
    document.getElementById('editSesiPraktikum').value = d.sesiPraktikum;
    document.getElementById('editStatusMatkul').value = d.statusMatkul;

    // Sync ke Alpine search edit
    const mkSearchEl = document.querySelector('#modalEditMatkul [x-data]');
    if (mkSearchEl) {
        const alpine = Alpine.$data(mkSearchEl);
        alpine.query = `${d.kode} — ${d.nama}`;
        alpine.selectedId = d.idMk;
        alpine.open = false;
        alpine.filtered = alpine.all;
    }

    const modal = document.getElementById('modalEditMatkul');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeModalEditMatkul() {
    const modal = document.getElementById('modalEditMatkul');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function hapusDetailKurikulum(id_detail) {
    if (confirm('Yakin ingin menghapus matakuliah ini dari kurikulum?\nData silabus terkait juga akan ikut terhapus.')) {
        document.getElementById(`deleteDetailForm_${id_detail}`).submit();
    }
}

function openModalSilabus(imgEl) {
    const d = imgEl.dataset;

    document.getElementById('silabusNamaMK').textContent = d.namaMk || '-';
    document.getElementById('silabusKode').textContent = d.kode || '-';
    document.getElementById('silabusSks').textContent = d.sks || '-';
    document.getElementById('silabusIdHidden').value = d.idSilabus || '';

    const deskripsiEl = document.getElementById('silabusDeskripsi');
    const cpmEl = document.getElementById('silabusCpm');
    const cpkEl = document.getElementById('silabusCpk');
    const bahanEl = document.getElementById('silabusBahanPustaka');

    deskripsiEl.value = d.deskripsi || '';
    cpmEl.value = d.cpm || '';
    cpkEl.value = d.cpk || '';
    bahanEl.value = d.bahanPustaka || '';

    const fileContainer = document.getElementById('silabusFileContainer');
    if (d.fileRps) {
        const filePath = d.fileRps.startsWith('public/') ? d.fileRps.replace(/^public\//, '') : d.fileRps;
        document.getElementById('silabusFileName').textContent = filePath.split('/').pop();
        document.getElementById('silabusFileLink').href = `/storage/${filePath}`;
        fileContainer.classList.remove('hidden');
    } else {
        fileContainer.classList.add('hidden');
    }

    const newFileNameEl = document.getElementById('silabusNewFileName');
    newFileNameEl.textContent = '';
    newFileNameEl.classList.add('hidden');
    document.getElementById('silabusFileRps').value = '';

    const textEl = document.getElementById('uploadTextSilabus');
    const iconEl = document.getElementById('uploadIconSilabus');
    if (textEl) textEl.classList.remove('hidden');
    if (iconEl) iconEl.classList.remove('hidden');

    const form = document.getElementById('formSilabus');
    if (form) form.action = d.action || `/admin/silabus/${d.idDetail}`;
    document.getElementById('silabusDetailId').value = d.idDetail;

    const modal = document.getElementById('modalSilabus');
    modal.classList.remove('hidden');
    modal.classList.add('flex');

    requestAnimationFrame(() => {
        [deskripsiEl, cpmEl, cpkEl, bahanEl].forEach(autoResize);
    });
}

function closeModalSilabus() {
    const modal = document.getElementById('modalSilabus');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function deleteExistingSilabusFile() {
    if (confirm('Yakin ingin menghapus silabus/RPS ini?')) {
        const silabusId = document.getElementById('silabusIdHidden').value;
        if (silabusId) {
            const form = document.getElementById('deleteSilabusForm');
            form.action = `/admin/silabus/${silabusId}`;
            form.submit();
        }
    }
}

function autoResize(el) {
    el.style.height = 'auto';
    el.style.height = el.scrollHeight + 'px';
}

// Mobile
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

function toggleProfileCard() {
    document.getElementById('profileCard').classList.toggle('hidden');
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