function openMenu() {
    let sidebarMenu = document.getElementById("menusidebar");
    if (sidebarMenu.style.display === "none") {
        console.log("I was just clicked");
        sidebarMenu.style.display = "block";
    }
}

function closeMenu() {
    let sidebarMenu = document.getElementById("menusidebar");
    if (sidebarMenu.style.display === "block") {
        console.log("You just closed me");
        sidebarMenu.style.display = "none";
    } 
}
