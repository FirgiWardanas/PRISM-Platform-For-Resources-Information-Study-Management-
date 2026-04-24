        function openModal() {
            document.getElementById("modal").classList.remove("hidden");
            document.getElementById("modal").classList.add("flex");
        }

        function closeModal() {
            document.getElementById("modal").classList.add("hidden");
            document.getElementById("modal").classList.remove("flex");
        }

        function saveData() {

            closeModal();

            const popup = document.getElementById("successPopup");
            popup.classList.remove("hidden");

            // hilang otomatis setelah 3 detik
            setTimeout(() => {
                popup.classList.add("hidden");
            }, 3000);
        }