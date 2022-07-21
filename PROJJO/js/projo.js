const booking = document.querySelector(".btn-book");
const sectioning = document.querySelector("#section-bg");




booking.addEventListener("click", () => {
    
});

$(document).ready(function(){
 const urls = ["url('/Images/contact.jpg'), url('/Images/services.jpg'), url('/Images/bed.jpg')"];

 let cout = 1;
 sectioning.style.backgroundImage = " + urls[0] +";
 setInterval(() => {
     sectioning.style.backgroundImage = " + urls[cout] + ";
     cout == urls.length-1 ? cout = 0 : cout++;
 }, 3000);
});