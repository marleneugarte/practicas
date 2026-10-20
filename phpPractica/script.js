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
/*mensaje de error o aceptacion*/
const formularioPedido=document.querySelector("#form-pedido");
const avisoPedido=document.querySelector("#error-pedido");
function revisarPedido(event){
    
    event.preventDefault() ;


    const nombre=document.querySelector("#nombre").value;
    const correo=document.querySelector("#correo").value;

    if (nombre===""){
        avisoPedido.textContent="Debe ingresar su nombre y apellido";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }
    else if (correo.includes("@")===false){
        avisoPedido.textContent="El correo ingresado no parece correo:le falta @. ";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }else{
        avisoPedido.textContent="Pedido realizado con exito en un momento le contactamos";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}
formularioPedido.addEventListener("submit", revisarPedido);