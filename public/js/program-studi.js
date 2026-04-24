        function openTambahModal() {
            document.getElementById("tambahmodal").classList.remove("hidden");
            document.getElementById("tambahmodal").classList.add("flex");
        }

        function closeTambahModal() {
            document.getElementById("tambahmodal").classList.add("hidden");
            document.getElementById("tambahmodal").classList.remove("flex");
        }

        function saveTambah() {
            // tutup modal
            closeTambahModal();

            // tampilkan popup sukses
            const popup = document.getElementById("popupSukses");
            popup.classList.remove("hidden");

            setTimeout(() => {
                popup.classList.add("hidden");
            }, 3000);
        }
        //edit
        let currentCard = null;

        function openEditModal(btn, kode, nama, jenjang) {
            currentCard = btn.closest(".bg-white"); // simpan card

            document.getElementById("modaledit").classList.remove("hidden");
            document.getElementById("modaledit").classList.add("flex");

            document.getElementById("editkode").value = kode;
            document.getElementById("editnama").value = nama;
            document.getElementById("editjenjang").value = jenjang;
        }

        function closeEditModal() {
            document.getElementById("modaledit").classList.add("hidden");
            document.getElementById("modaledit").classList.remove("flex");
        }

        function saveEdit() {
            // ambil nilai dari input
            const kode = document.getElementById("editkode").value;
            const nama = document.getElementById("editnama").value;
            const jenjang = document.getElementById("editjenjang").value;

            // ambil semua <p> di card
            const p = currentCard.querySelectorAll("p");

            // update isi card
            p[0].innerText = kode;
            p[1].innerText = nama;
            p[2].innerText = jenjang;

            closeEditModal();

            // popup sukses
            const popup = document.getElementById("popupSukses");
            popup.innerText = "✏️ Data berhasil diupdate";
            popup.classList.remove("hidden");

            setTimeout(() => {
                popup.classList.add("hidden");
            }, 3000);
        }
        //hapus
        function hapusData(btn) {
            if (confirm("Yakin mau hapus data ini?")) {
                const card = btn.closest(".bg-white");
                card.remove();

                const popup = document.getElementById("popupSukses");
                popup.innerText = "❌ Data berhasil dihapus";
                popup.classList.remove("hidden");

                setTimeout(() => {
                    popup.classList.add("hidden");
                }, 3000);
            }
        }