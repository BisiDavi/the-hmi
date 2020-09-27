function openMenu() {
    let sidebarMenu = document.getElementById("menusidebar");
    if (sidebarMenu.style.display === "none") {
        sidebarMenu.style.display = "block";
    }
}

function closeMenu() {
    let sidebarMenu = document.getElementById("menusidebar");
    if (sidebarMenu.style.display === "block") {
        sidebarMenu.style.display = "none";
    }
}
