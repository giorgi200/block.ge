// Single Slider controller
const sliderController = document.querySelectorAll('.bgsliders_block');
const bgsliderImages = document.querySelector('.bgslider_images');
const sliderArrows = document.querySelectorAll('.bgslider_controller img ');
var lastPage = parseInt(sliderController[sliderController.length - 1].dataset.index);
var activePage = 0;

function controllSlider(){
    document.querySelector('.bgsliders_block.active').classList.remove('active')
    this.className += " active";
    activePage = parseInt(this.dataset.index);
    bgsliderImages.style.left =  activePage * -100 + "vw";
    if(activePage == 0){
        sliderArrows[0].style.display = "none";
    } else{
        sliderArrows[0].style.display = "block";
    }
    if(lastPage !== activePage){ 
        sliderArrows[1].style.display = "block"
    } else {
        sliderArrows[1].style.display = "none"
    }
}

function leftControll(){
    if(0 !== activePage){
        bgsliderImages.style.left =  (activePage * -100) + 100 + "vw";
        document.querySelector('.bgsliders_block.active').classList.remove('active')
        activePage--;
        sliderController[activePage].className += " active"
       
    } 
    if(activePage == 0){
        this.style.display = "none";
    }
    if(lastPage !== activePage){ 
        sliderArrows[1].style.display = "block"
    }
}

function rightControll(){
    if(lastPage !== activePage){
        bgsliderImages.style.left =  (activePage * -100) - 100 + "vw";
        document.querySelector('.bgsliders_block.active').classList.remove('active')
        activePage++;
        sliderController[activePage].className += " active"
    } 
    if(lastPage === activePage){
        this.style.display = "none";
    }
    if(activePage !== 0){
        sliderArrows[0].style.display = "block"
    }
}

sliderController.forEach(element => {
    element.addEventListener('click', controllSlider)
});

// leftArrow
sliderArrows[0].addEventListener('click', leftControll)

// rightArrow
sliderArrows[1].addEventListener('click', rightControll)
