document.addEventListener("DOMContentLoaded", () =>{
    document
        .getElementById("registroForm")
        .addEventListener("submit", function (event) {
            event.preventDefault();
            validarFormulario();
        })

    window.addEventListener('load', ()=>{
        nombre.focus();//Enfoca el campo inicial al cargar la página
    })

    //Contador de caracteres para el campo "Comentario"
    document.getElementById("descripcion").addEventListener("input", function () {
        const maxLength = this.maxLength; //El maximo de caracteres permitidos
        const currentLength = this.value.length; //La cantidad de carácteres actuales
        document.getElementById("contador").innerText = `${currentLength}/${maxLength} caracteres`;
    });

    //Funcion para validar el formulario
    function validarFormulario(){
        const nombre = document.getElementById("nombre").value.trim();
        const apellido = document.getElementById("apellido").value.trim();
        const asunto = document.getElementById("asunto").value.trim();

        let valid = true; //Variable para verificar si el formulario es valido

        //Valida que nombre no este vacio
        if(nombre === "") {
            document.getElementById("errorNombre").innerText = "El nombre es obligatorio";
            valid = false;
        } else{
            document.getElementById("errorNombre").innerText = "";
        }

        //Valida que apellido no este vacío
        if (apellido === ""){
            document.getElementById("errorApellido").innerText = "El campo apellido es obligatorio";
            valid = false;
        } else {
            document.getElementById("errorApellido").innerText = "";
        }

        //Valida el asunto
        if (asunto === "") {
            document.getElementById("errorAsunto").innerText = "Ingrese la razón de su consulta";
            valid = false;
        } else {
                document.getElementById("errorAsunto").innerText = "";
        }


        if (valid) {
            //Enviar formulario con Ajax
            enviarFormulario();
        }
    }

    function enviarFormulario(){
        const obtenerDatos = (exito=true) => {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if(exito) {

                    fetch("mensaje.txt")
                        .then(res => res.text())
                        .then(data => {
                            document.getElementById("mensaje").innerText = data; //Mostrar mensaje
                            document.getElementById("registroForm").reset(); //Reiniciar el formulario
                            document.getElementById("contador").innerText = "";
                        })
                        .catch(err => console.error("Error al enviar el formulario:", err))
                    resolve("Datos recibidos");
                } else {
                    fetch("error.txt")
                        .then(res => res.text())
                        .then(data => {
                            document.getElementById("mensaje").innerText = data; //Mostrar mensaje
                            
                            document.getElementById("registroForm").reset(); //Reiniciar el formulario
                            document.getElementById("contador").innerText = "";
                        })
                    .catch(err => console.error("Error al enviar el formulario:", err))
                    reject("Error al obtener datos")
                }
            }, 2000)//Tiempo de espera hasta devolver los datos(2 seg)
        })
    }
    

       /* fetch("mensaje.txt")
            .then(res => res.text())
            .then(data => {
                document.getElementById("mensaje").innerText = data; //Mostrar mensaje
                document.getElementById("registroForm").reset(); //Reiniciar el formulario
                document.getElementById("contador").innerText = "";
            })

            .catch(err => console.error("Error al enviar el formulario:", err))
*/
        console.log("Solicitando datos..")
        obtenerDatos(true)
        .then(resultado => console.log("Promesa resuelta",resultado))
        .catch(error => console.error("Promesa rechazada",error));
        
        
    }


})