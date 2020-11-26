let boutton = document.querySelector(".ham");
let nav = document.querySelector(".navbar");

boutton.addEventListener("click",magic );
function  magic (){
  nav.classList.toggle("showNav");
  boutton.classList.toggle("showClose");
}