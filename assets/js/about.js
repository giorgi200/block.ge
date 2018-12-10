const left_arrow = document.querySelector('.arrow_remote img:first-child');
const right_arrow = document.querySelector('.arrow_remote img:last-child');
const titles = document.querySelectorAll('.arrow_remote h1');
const paragraphs = document.querySelectorAll('.aboutSliderText') 
const yearsLabels = document.querySelectorAll('.years_labels')
var activeID = 0;
let lastID = yearsLabels.length - 1;

titles[activeID].className ="active";
paragraphs[activeID].className += " active";
yearsLabels[activeID].className += " active";

yearsLabels.forEach(year => {
    year.addEventListener('click', changeYear)
});

left_arrow.addEventListener('click', left)
right_arrow.addEventListener('click', right)

function changeYear(){
    activeID =  parseInt(this.dataset.index);
    document.querySelector('.arrow_remote h1.active').className = "";
    document.querySelector('.aboutSliderText.active').classList.remove("active");
    document.querySelector('.years_labels.active').classList.remove("active");
    titles[activeID].className = "active";
    paragraphs[activeID].className += " active";
    this.className += " active";
    
    if(activeID === 0){
        left_arrow.className = "";
        right_arrow.className = "active"; 
    } else if(activeID === lastID){
        left_arrow.className = "active";
        right_arrow.className = "";
    } else {
        left_arrow.className = "active";
        right_arrow.className = "active";
    }
}

function left(){
    if(activeID !== 0){
        activeID -= 1;
        document.querySelector('.arrow_remote h1.active').className = "";
        document.querySelector('.aboutSliderText.active').classList.remove("active");
        document.querySelector('.years_labels.active').classList.remove("active");
        titles[activeID].className = "active";
        paragraphs[activeID].className += " active";
        yearsLabels[activeID].className += " active";


        if(activeID === 0){
            left_arrow.className = "";
            right_arrow.className = "active"; 

        } else if(activeID === lastID){
            left_arrow.className = "active";
            right_arrow.className = "";

        } else {
            left_arrow.className = "active";
            right_arrow.className = "active";

        }
    }
}

function right(){
    if(activeID !== lastID){
        activeID += 1;
        document.querySelector('.arrow_remote h1.active').className = "";
        document.querySelector('.aboutSliderText.active').classList.remove("active");
        document.querySelector('.years_labels.active').classList.remove("active");
        titles[activeID].className = "active";
        paragraphs[activeID].className += " active";
        yearsLabels[activeID].className += " active";


        if(activeID === 0){
            left_arrow.className = "";
            right_arrow.className = "active"; 

        } else if(activeID === lastID ){
            left_arrow.className = "active";
            right_arrow.className = "";

        } else {
            left_arrow.className = "active";
            right_arrow.className = "active";

        }
    }
}