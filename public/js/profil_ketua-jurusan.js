//sidebbar responsive
const menuBtn = document.getElementById('menuBtn');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('closeBtn'); 

menuBtn.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-[120%]');
    overlay.classList.toggle('hidden');
});

overlay.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-[120%]');
    overlay.classList.add('hidden');
});

if (closeBtn) {
    closeBtn.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-[120%]');
        overlay.classList.add('hidden');
    });
}

// Profile Card & Modal 
function toggleModal(id, show) {
    const el = document.getElementById(id);
    if (show) { el.classList.remove('hidden'); el.classList.add('flex'); }
    else { el.classList.add('hidden'); el.classList.remove('flex'); }
}

function openModal() { toggleModal('modal', true); }
function closeModal() { toggleModal('modal', false); }

function toggleProfileCard() {
    document.getElementById('profileCard').classList.toggle('hidden');
}

const profileBtn = document.getElementById('profileBtn');
const profileCard = document.getElementById('profileCard');

if (profileBtn && profileCard) {
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
}