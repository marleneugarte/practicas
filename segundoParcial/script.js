const formularioTurno=document.querySelector("#form-turno");
const avisoTurno=document.querySelector("#aviso-turno");
function reservarTurno(event){
    
    


    const nombre=document.querySelector("#nombre").value;
    const correo=document.querySelector("#correo").value;

    if (nombre==="" || correo===""){
        event.preventDefault();
        avisoTurno.textContent="Nos falta tu nombre y tu correo para darte turno";
        avisoTurno.classList.add("error");
        avisoTurno.classList.remove("exito");
    }
    else if (correo.includes("@")===false){
        event.preventDefault();
        avisoTurno.textContent="Revisa tu correo -le falta @. ";
        avisoTurno.classList.add("error");
        avisoTurno.classList.remove("exito");
    }else{
        avisoTurno.textContent="Turno reservado - te atiende Marlene Ugarte Galarza";
        avisoTurno.classList.add("exito");
        avisoTurno.classList.remove("error");
    }
}
formularioTurno.addEventListener("submit", revisarPedido);