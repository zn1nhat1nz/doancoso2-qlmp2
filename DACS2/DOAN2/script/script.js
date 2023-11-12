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
// console.log(navbar);
menu.onclick = () => {
    // menu.classList.toggle('fas-times');
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    // menu.classList.remove('fa-times'); 
        navbar.classList.remove('active');
}

let slides = document.querySelectorAll('.home .slide');
// console.log(slides);    
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

const cartbtn = document.querySelectorAll(".shop button");
// console.log(cartbtn);
  cartbtn.forEach(function(button,index){
    //  console.log(button,index)
    button.addEventListener("click",function(event){
       {
        var btnItem =  event.target
        var product = btnItem.parentElement.parentElement
        var pimage = product.querySelector("img").src
        var pname = product.querySelector("h3").innerText
        var pprice = product.querySelector("span").innerText
        // console.log(pprice)
         addcart(pimage,pname,pprice)
         total()
       }
    })
})
 
function addcart(pimage,pname,pprice){
    // tạo tr
    var addtr =  document.createElement("tr")
    // nội dung tr
    var trContent = '<tr> <td style="max-width:20rem;"><img src="'+pimage+'" alt="" style="width:70px; height:70px;"> <span class="title">'+pname+'</span></td><td><p><span class="price">'+pprice+'</span><sup>đ</sup></p></td>  <td><input type="number" value="1" min="0" style="width:30px; outline: none;text-align: center; border: 0.2rem solid black"> </td> <td style="cursor: pointer;">Xóa</td> </tr>'
    // thêm content vào tr
    addtr.innerHTML = trContent
    // chọn phần tử tbody
    var cartTable = document.querySelector("tbody")
    // thêm dòng vào t body
    cartTable.append(addtr)
}


// Tính tổng tiền 
function total(){
    // trỏ vào dòng chứa tt
    var cartItem = document.querySelectorAll("tbody tr")
    // console.log(cartItem)
   var productCount = 0
   var totalPrice = 0
   for (let i=0;i<cartItem.length;i++){
     var inputValue = cartItem[i].querySelector("input").value
     var productPrice = cartItem[i].querySelector(".price").innerHTML
    //  console.log(productPrice);
    var total = inputValue*productPrice*1000
    // console.log(total);
        // productCount += 1
         totalPrice += total
        console.log(totalPrice)
   }
//    var cartTotalPrice = document.querySelector(".total-price span")
//    cartTotalPrice.innerHTML = totalPrice.toLocaleString('de-DE')
//    var cartCount = document.querySelector(".count")
//   //  console.log(cartCount)
//   cartCount.innerHTML = productCount
  //  console.log(cartTotalPrice) 
  var cartTotal = document.querySelector(".total-price span")
  cartTotal.innerHTML  = totalPrice.toLocaleString('de-DE')
  console.log(cartTotal);
}