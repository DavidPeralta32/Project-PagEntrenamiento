let ubicacionPrincipal = window.pageYOffset;
//Inicializa lo de aos animate
  AOS.init();

//nav desplazado
window.addEventListener("scroll",function(){
    let desplazamientoActual = window.pageYOffset;
    if(ubicacionPrincipal >= desplazamientoActual){
        document.getElementsByTagName("nav")[0].style.top="0px"
    }else{
        document.getElementsByTagName("nav")[0].style.top="-100px"
    }
    ubicacionPrincipal = desplazamientoActual;
})

//menu

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let semaforo = true;

document.querySelectorAll(".hamburguer")[0].addEventListener("click",function(){
    if(semaforo){
        document.querySelectorAll(".hamburguer")[0].style.color="#fff";
        semaforo=false;
    }else{
        document.querySelectorAll(".hamburguer")[0].style.color="#000";
        semaforo=true;
    }
    enlacesHeader.classList.toggle("menudos")
})


const footer = document.querySelector('.footer');
const btnfooter = document.querySelector('.btn-flotante');
const linkfooter = document.querySelector('.linkfooter');
console.log(footer.classList);

btnfooter.addEventListener('click', () => {
    if(footer.classList.contains('inactivo')){
        footer.classList.remove('inactivo');
        linkfooter.href = '#footerPag';
    }else{
        footer.classList.add('inactivo');
        
    }
});

