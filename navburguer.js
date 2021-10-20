const ham = document.querySelector('.ham');
const enlaces = document.querySelector('.menu');
const barra = document.querySelectorAll('.ham span');

ham.addEventListener('click',() => {
    enlaces.classList.toggle('activado');
    barra.forEach(child => {child.classList.toggle('animado')});


});