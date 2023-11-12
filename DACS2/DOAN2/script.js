// var canvas = document.getElementById("myCanvas");
// // console.log(canvas);
// var ctx = canvas.getContext('2d');
// ctx.font = "30px robot";  // set font size và font family cho text
// var gradient = ctx.createLinearGradient(0, 0, 100, 200); 
// gradient.addColorStop(0, "#30CFD0");// đổ màu vị trí đầu
// gradient.addColorStop(1, "#330867"); // đổ màu vị trí kết thúc
// ctx.fillStyle = gradient;
// ctx.fillText("Phong Nhu Comectics", 10, 50);  // text muốn hiện và vị trí hiện

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');
console.log(navbar);
menu.onclick = () => {
    // menu.classList.toggle('fas-times');
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    // menu.classList.remove('fa-times'); 
        navbar.classList.remove('active');
}

let slides = document.querySelectorAll('.home .slide');
console.log(slides);    
let index = 0;
function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    if(index<=3){
    slides[index].classList.add('active');
    } else {
        index = 0;
    }
}
function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
     slides[index].classList.add('active');
    // if(index<=0){
    //     slides[index].classList.add('active');
    //     } else {
    //         index = 2;
    //     }
}
 