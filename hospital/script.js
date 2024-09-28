let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

let valueDisplay = document.querySelectorAll(".num");
let interval = 5000;

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

valueDisplay.forEach((valueDisplay) => {
    let startvalue =0;
    let endvalue = parseInt(valueDisplay.getAttribute("data-val"));

    let duration = Math.floor(interval / endvalue);
    let counter = setInterval (function () {
        startvalue += 1;
        valueDisplay.textContent = startvalue;
        if(startvalue == endvalue){
            clearInterval(counter);
        }
    },duration);
})