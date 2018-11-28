// ==== Search Button ===== 
let searchBtn = document.querySelector(".searchIcon img")
let search = document.querySelector(".searchIcon")
// ==== Main Slider ===== 
const MainSlider = document.querySelector('#mainSlider');
const MainsliderBtns = document.querySelector('#sliderBtn')
const MainSliderBtnLeft = document.querySelector('#sliderBtn img:first-child')
const MainSliderBtnRight = document.querySelector('#sliderBtn img:last-child')
const MainSliderObject = document.querySelectorAll('#mainSlider .Current_slide_object')
// Completes Slider
const CompleteSlider = document.querySelector('#CompleteSlider');
const CompletesliderBtns = document.querySelector('#sliderBtn1')
const CompleteSliderBtnLeft = document.querySelector('#sliderBtn1 img:first-child')
const CompleteSliderBtnRight = document.querySelector('#sliderBtn1 img:last-child')
const CompleteSliderObject = document.querySelectorAll('#CompleteSlider .Current_slide_object')

let toggleSearch = () => {
    search.classList.toggle('active');
}


class TransformSlider {
    constructor(slider, buttons, obj){
        this.Slider = slider;
        this.objLen = slider.children.length;
        this.transformX = 0;
        this.buttons = buttons;
        this.objectWidth = obj;
        this.objMargins = (slider.offsetWidth - (this.objectWidth * this.objLen)) / this.objLen;
        this.hideObjects = this.objLen - 3;
    }

    left(){
        this.Slider.style.transform = `translateX(${this.transformX += (this.objectWidth + this.objMargins)}px)`
        console.log(this.transformX)
        if(this.transformX == 0){
            this.buttons.className = "const_slider_arrows d-flex left"
        } else {
            this.buttons.className = "const_slider_arrows d-flex"   
        }

    }

    right(){
        this.Slider.style.transform = `translateX(${this.transformX -= (this.objectWidth + this.objMargins)}px)`

        if(this.transformX == (this.hideObjects * (this.objectWidth + this.objMargins)) * -1) {
            this.buttons.className = "const_slider_arrows d-flex right"
        } else {
            this.buttons.className = "const_slider_arrows d-flex"
        }

    }
}


let MainSliderObj = new TransformSlider(MainSlider, MainsliderBtns, MainSliderObject[0].offsetWidth);
let CompleteSliderObj = new TransformSlider(CompleteSlider, CompletesliderBtns,  CompleteSliderObject[0].offsetWidth);





searchBtn.addEventListener('click', toggleSearch)
// Main Slider
MainSliderBtnLeft.addEventListener('click',  () => {MainSliderObj.left()});
MainSliderBtnRight.addEventListener('click',  () => {MainSliderObj.right()});
// Completes Slider
CompleteSliderBtnLeft.addEventListener('click',  () => {CompleteSliderObj.left()});
CompleteSliderBtnRight.addEventListener('click',  () => {CompleteSliderObj.right()});
