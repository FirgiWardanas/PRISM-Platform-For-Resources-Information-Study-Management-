
function toggleCard(el) {
    const currentCard = el.closest('.card');

    // tutup semua card dulu
    document.querySelectorAll('.card').forEach(card => {
        if (card !== currentCard) {
            card.querySelector('.card-content')?.classList.add('hidden');
            card.querySelector('.icon-arrow')?.classList.remove('rotate-180');
        }
    });

    // ambil card yang diklik
    const content = currentCard.querySelector('.card-content');
    const icon = currentCard.querySelector('.icon-arrow');

    const isOpen = !content.classList.contains('hidden');

    // kalau belum kebuka → buka
    if (!isOpen) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        // kalau sudah kebuka → tutup
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}

function openTambahModal(id) {
    const modal = document.getElementById(`modalTambahDosen${id}`);
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeTambahModal(id) {
    const modal = document.getElementById(`modalTambahDosen${id}`);
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}


// edit dosen
function openEditDosen(id) {
    const modal = document.getElementById(`modalEditDosen${id}`);
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

// tutup modal edit
function closeEditDosen(id) {
    const modal = document.getElementById(`modalEditDosen${id}`);
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

