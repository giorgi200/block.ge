// ==== Search Button ===== 
let searchBtn = document.querySelector(".searchIcon img");
let search = document.querySelector(".searchIcon");
let searchResults = document.querySelector(".search_results");
const searchInput = document.querySelector(".searchValue");
const search_results = document.querySelector(".search_results");

let toggleSearch = () => {
  searchResults.style.display = "none";
  search.classList.toggle('active');
  searchInput.value = "";
}

function sendRequest(){
  if(this.value !== " " || this.value !== ""){
    searchResults.style.display = "block";
    let xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function () {
      if (this.readyState === 4) {
        search_results.innerHTML = this.responseText;

        document.querySelectorAll(".search_item").forEach(item => { 
          item.addEventListener('click', function() {
            window.open(this.dataset.href);
          })
        });
      }
    });

    xhr.open("POST", "./layout/search.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.setRequestHeader("Cache-Control", "no-cache");
    xhr.send(`search=${this.value}`);
  } else {
    search_results.style.display = "none"
  }
}


searchInput.addEventListener('focusout', toggleSearch)
searchBtn.addEventListener('click', toggleSearch)
searchInput.addEventListener('keyup', sendRequest)
