let menu = document.querySelector("#menu")
let sidebar = document.querySelector(".sidebar")
let searchBtn = document.querySelector(".bx-search")

menu.onclick = function () {
    sidebar.classList.toggle("active")
}

searchBtn.onclick = function () {
    sidebar.classList.toggle("active")
}