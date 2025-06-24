const header=document.querySelector("header");
window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", window.scrollY > 0);
});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.toggle('open');
};

document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    var email = document.getElementById('emailInput').value;
    window.location.href = 'login.html?email=' + encodeURIComponent(email);
});



