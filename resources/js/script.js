//Toggle kelas aktif
const navbarNav = document.querySelector(".navbar-nav");

//ketika icon menu di klik
document.querySelector("#menu").onclick = () => {
    navbarNav.classList.toggle("active");
};

//klik di mana saja untuk menghilangkan navMenu

const hilangNavMenu = document.querySelector("#menu");
document.addEventListener("click", function (e) {
    if (!hilangNavMenu.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("active");
    }
});

function MessageToWhatsapp() {
    const urlToWhatsapp = `https://wa.me/6285775242278?text=Halo nama saya, ${nama.value}, ${pesan.value}`;

    window.open(urlToWhatsapp, "_blank");
}
