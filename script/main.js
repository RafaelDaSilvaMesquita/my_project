/*========== INDEX ==========*/
var dropdownBtn = document.querySelector('.dropdown-btn')
var dropdownMenu = document.querySelector('.dropdown-menu')
//var items = document .querySelectorAll('.item')

//Dropdown Btn Event Listenner
dropdownBtn.addEventListener('click', toggleMenu)

//Add Click Event Listenners to Each Item
//items.forEach(item => item.addEventListener('click', itemClickHandler))

function toggleMenu() {
    dropdownMenu.classList.toggle('open')
}

/*function closeMenu() {
    dropdownMenu.classList.remove('open')
}

function itemClickHandler(e) {
    closeMenu()
}*/