const cuerpo=document.querySelector("body");
const botonModo=document.querySelector("#btn-tema");
let esDeDia=false;
function alternarModo(){
    cuerpo.classList.toggle("oscuro");

    esDeDia=!esDeDia;
    if(esDeDia){
        botonModo.textContent="🌙 Modo noche"
    }
    else{
        botonModo.textContent="☀️ Modo Dia"
    } 
    
}
botonModo.addEventListener("click", alternarModo);

const botonMenu = document.getElementById("#btn-menu");
const menu = document.getElementById("nav ul");

function alternarMenu(){
    menu.classList.toggle("abierto");

}
botonMenu.addEventListener("click", alternarMenu);