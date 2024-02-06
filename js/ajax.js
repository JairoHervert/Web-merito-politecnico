const formularios_ajax = document.querySelectorAll(".FormularioAjax");

function enivar_formulario_ajax(e) {
   e.preventDefault();  // Para no redireccionar al dar submit

   let enviar = confirm("Quieres enviar el formulario?"); // abre una ventana emergente del navegador

   if (enviar==true) {
      let data = new FormData(this); // data almacena los datos de todos los campos del formulario
      let method = this.getAttribute("method");
      let action = this.getAttribute("action");

      let encabezados = new Headers();

      let config = {
         method: method,
         headers: encabezados,
         mode: 'cors',
         cache: 'no-cache',
         body: data
      };

      fetch(action, config)
      .then(respuesta => respuesta.text())   // pasamos la respuesta a texto plano
      .then(respuesta => {
         alert.apply(respuesta);
         // let contenedor = document.querySelector(".form-rest");
         // contenedor.innerHTML = respuesta;   // insertamos la respuesta en el html de clase form-reset
      })
   }
}

// A los formularios del array se les agrega el evento
formularios_ajax.forEach(formularios => {
   // si un formulario hace submit ejecutamos la funcion enivar_fomrulaio_ajax
   formularios.addEventListener("submit", enivar_formulario_ajax);
})
