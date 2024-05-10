const toggleSidebarButton = document.getElementById('toggleSidebarButton');
const sidebar = document.getElementById('sidebar');
let isSidebarOpen = false;
toggleSidebarButton.addEventListener('click', () => {
    if (isSidebarOpen) {
        sidebar.style.left = '-250px';
        isSidebarOpen = false;
    } else {
        sidebar.style.left = '0';
        isSidebarOpen = true;
    }
});

const dataMaster = document.getElementById('data')
const dataDropdown = document.getElementById('data-dd')
const pb = document.getElementById('pembayaran')
dataMaster.addEventListener('click', () => dataDropdown.classList.toggle('hidden'))
pb.addEventListener('click', () => document.getElementById('isi').classList.toggle('hidden'))