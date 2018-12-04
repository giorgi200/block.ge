// ==== Search Button ===== 
let searchBtn = document.querySelector(".searchIcon img")
let search = document.querySelector(".searchIcon")


let toggleSearch = () => {
    search.classList.toggle('active');
}

searchBtn.addEventListener('click', toggleSearch)
