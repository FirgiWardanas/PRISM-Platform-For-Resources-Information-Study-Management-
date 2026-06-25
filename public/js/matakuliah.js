       function openTambahModal() {
            const m = document.getElementById('modalTambah');
            m.classList.remove('hidden'); m.classList.add('flex');
        }
        function closeTambahModal() {
            const m = document.getElementById('modalTambah');
            m.classList.add('hidden'); m.classList.remove('flex');
        }
        function openEditModal(id, kode, nama) {
            document.getElementById('editKode').value = kode;
            document.getElementById('editNama').value = nama;
            document.getElementById('formEdit').action = `/admin/matakuliah/${id}`;
            const m = document.getElementById('modalEdit');
            m.classList.remove('hidden'); m.classList.add('flex');
        }
        function closeEditModal() {
            const m = document.getElementById('modalEdit');
            m.classList.add('hidden'); m.classList.remove('flex');
        }

        function hapusMatakuliah(id) {
            Swal.fire({
                title: 'Hapus Mata Kuliah?',
                html: `
                    Data Mata Kuliah akan dihapus secara permanen.<br><br>
                    Pastikan mata kuliah ini sudah tidak digunakan pada data lain.
                `,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc2626',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya, Hapus'
            }).then((result) => {

                if (result.isConfirmed) {
                    document.getElementById(`deleteForm_${id}`).submit();
                }

            });
        }

    

        // Auto dismiss toast error setelah 6 detik
        const toast = document.getElementById('toastError');
        if (toast) {
            setTimeout(() => toast.remove(), 6000);
        }

        // Tutup modal klik backdrop
        ['modalTambah', 'modalEdit'].forEach(id => {
            const el = document.getElementById(id);
            el.addEventListener('click', e => {
                if (e.target === el) { el.classList.add('hidden'); el.classList.remove('flex'); }
            });
        });

        // Mobile sidebar
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

        // Profile card
        const profileBtn = document.getElementById('profileBtn');
        const profileCard = document.getElementById('profileCard');

        profileBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            profileCard.classList.toggle('hidden');
        });

        profileCard.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        document.addEventListener('click', function() {
            profileCard.classList.add('hidden');
        });