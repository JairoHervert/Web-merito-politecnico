// jQuery
$(function () {
   // Dependiendo el boton vamos a ejecutar una accion para confirmar asistencia o negarla

   $("#btn_reporte").click(function () {
      
   })

   $("#btn_form_asistir").click(function () {
      let id_parc = $(id_sendt).text();
      let curp_parcial = $(curp_sendt).text();
      console.log("Acabo de pasar por enviar la funcion de actualizar asistencia como confirmada \n");
   })

   $("#btn_ar").click(function () {
      let id_parc = $(id_sendt).text();
      let curp_parcial = $(curp_sendt).text();
      //alert($(curp_sendt).text());
      actualizarAsistencia("Confirmada", curp_parcial, id_parc);

   });

   $("#btn_no_asistir").click(function () {
      let id_parc = $(id_sendt).text();
      let curp_parcial = $(curp_sendt).text();
      actualizarAsistencia("Negada", curp_parcial, id_parc);

      // actualizar el valor de pendiente a negada de la tarjeta de mi 
      $("#asistencia_sendt").empty().append("Negada");

      // Quitar los botones y ponerle un mensaje
      $(".infor_presea").remove();
      $(".asistencia").empty().append("<div class=\"asistencia mt-4\"><h6>Nos lamenta saber que no asistiras al evento, felicidades por tu presea Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati iure voluptatem natus voluptates non. Facere adipisci veritatis quibusdam quo pariatur.</h6></div>");
   });

   function actualizarAsistencia(estado, curp, id) {
      $.ajax({
         type: "POST",
         url: "./php/actualizar_asistencia.php",
         data: { estado: estado, curp: curp, id: id },  // Agregar curp al objeto de datos
         success: function (response) {
            // Puedes manejar la respuesta del servidor aquí si es necesario
            console.log(response);
            if (response == "voy a negar la asistencia en sqlYa negue la asistencia en sql") {
               console.log("Se nego la asistencia con exito");
               //alert("chido opi");
            } else {
               alert("Hubo un error en agregar los datos, contacta a soporte");
            }
         },
         error: function (error) {
            console.error("Error en la solicitud AJAX:", error);
         }
      });
   }



   /////////////////////////// formulario de el usuario
   const formulario_confirmar_asistencia = document.querySelectorAll(".form_confirmar_asistencia");

   formulario_confirmar_asistencia.forEach(formularios => {
      formularios.addEventListener("submit", confirmarAsistencia);

   })

   function confirmarAsistencia(e) {
      e.preventDefault();  // Para no redireccionar al dar submit

      // necesarios para la consulta sql del update
      let id_parc = $(id_sendt).text();
      let curp_parcial = $(curp_sendt).text();

      let data = new FormData(this); // data almacena los datos de todos los campos del formulario
      console.log(data);
      let invitado_nombre = data.get('invitado_nombre').trim();
      let usuario_implemento = data.get('usuario_implemento');
      let invitado_implemento = data.get('invitado_implemento');

      if (usuario_implemento == "Abrir opciones de implementos") {
         usuario_implemento = "";
      }

      if (invitado_implemento == "Abrir opciones de implementos") {
         invitado_implemento = "";
      }

      console.log(invitado_nombre);
      console.log(usuario_implemento);
      console.log(invitado_implemento);
      console.log(id_parc);
      console.log(curp_parcial);

      // si hay algun implemento del invitado pero no hay invitado seria ilogico
      if (invitado_implemento != "" && invitado_nombre == "") {
         // intentar hacerlo bonito
         alert("Ocurrio un error, vuelve a intentarlo");
      } else {
         // si esta correcto el formulario cambiamos los botones de las asistencias por el de los boletos
         $(".asistencia").empty().append("<div class=\"asistencia mt-2\"><button type=\"button\" id=\"btn_boletos\" class=\"btn btn-primary btn-md\">Volver a generar mis boletos</button></div>");

         // Tambien actualizar los datos de la pestania de "mis datos"
         $("#asistencia_sendt").empty().append("Confirmada");
         $("#impemento_sendt").empty().append(usuario_implemento);
         $("#invitado_sendt").empty().append(invitado_nombre);
         $("#implemento_inv_sendt").empty().append(invitado_implemento);


         // mandar a actualizar los datos con alguna funcion

         actualizarConfirmEnDB(id_parc, curp_parcial, "Confirmada", usuario_implemento, invitado_nombre, invitado_implemento);
      }
   }

   function actualizarConfirmEnDB(id, curp, asistencia, usuario_implemento, invitado_nombre, invitado_implemento) {
      $.ajax({
         type: "POST",
         url: "./php/confirmar_asist_en_DB.php",
         data: { id: id, curp: curp, asistencia: asistencia, asistencia: asistencia, usuario_implemento: usuario_implemento, invitado_nombre: invitado_nombre, invitado_implemento: invitado_implemento },
         success: function (response) {
            // Puedes manejar la respuesta del servidor aquí si es necesario
            console.log(response);
         },
         error: function (error) {
            console.error("Error en la solicitud AJAX:", error);
         }
      });
   }


   /// formulario del agregar usuario

   const formulario_agregar_usuario = document.querySelectorAll(".form_agregar_usuario_admin");
   formulario_agregar_usuario.forEach(formularios => {
      formularios.addEventListener("submit", agregar_new_user);
   })

   function agregar_new_user(ev) {
      ev.preventDefault();


      console.log("evite la recarga");

      let data = new FormData(this); // data almacena los datos de todos los campos del formulario

      // guardar los datos en unas variables distintas
      let curp_ingresado = data.get('curp_ingresado').trim();
      let nombre_ingresado = data.get('nombre_ingresado').trim();
      let clave_ingresada = data.get('contraseña_ingresada').trim();

      let academia_ingresada = data.get('academia_ingresada').trim();
      let asistencia_ingresada = data.get('asistencia_ingresada').trim();

      let presea_ingresada = data.get('presea_ingresada').trim();

      let Implemento_ingresado = data.get('Implemento_ingresado').trim();
      let invitado_ingresado = data.get('invitado_ingresado').trim();
      let invitado_implemento_ingresado = data.get('invitado_implemento_ingresado').trim();

      // como estos datos no vinene vacios pues los vacio
      if (Implemento_ingresado == "Abrir opciones de implementos") {
         Implemento_ingresado = "";
      }
      if (invitado_implemento_ingresado == "Abrir opciones de implementos") {
         invitado_implemento_ingresado = "";
      }


      console.log(data);

      console.log(curp_ingresado);
      console.log(nombre_ingresado);
      console.log(academia_ingresada);
      console.log(presea_ingresada);
      console.log(clave_ingresada);
      console.log(Implemento_ingresado);
      console.log(invitado_ingresado);
      console.log(invitado_implemento_ingresado);

      console.log(data.get('asistencia_ingresada'));
      console.log(asistencia_ingresada);

      //expresiones regulares para asegurarnos que la cadena cumple con los datos del formulario
      var regex_curp = /^[a-zA-Z0-9]{18}$/;
      var regex_nombre = /^[a-zA-Z\sáéíóúÁÉÍÓÚñ]{1,100}$/;
      var regex_clave = /^[a-zA-Z0-9$@.-_]{8,100}$/;

      if (regex_curp.test(curp_ingresado) && regex_nombre.test(nombre_ingresado) && regex_clave.test(clave_ingresada) && academia_ingresada != "" && presea_ingresada != "") {

         //paso los test individuales
         //ahora ver si no viene con

         // los datos extra si existen
         if (Implemento_ingresado != "" || invitado_ingresado != "" || invitado_implemento_ingresado != "") {

            // hay datos extra pero no se confirmo
            if (asistencia_ingresada != "Confirmada") {
               alert("No puedes agregar datos adicionales si el usuario no ha confirmado asistencia");
            } else {
               if ((invitado_implemento_ingresado !== "") && !regex_nombre.test(invitado_ingresado)) {
                  alert("Se indicó un implemento para un acompañante pero no hay acompañante");

               } else if (regex_nombre.test(invitado_ingresado)) {

                  console.log("vengo con invitado con o sin implemento, mandar al php");
                  altaUsuario(curp_ingresado, nombre_ingresado, clave_ingresada, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);

               } else {
                  console.log("Pase los tests sin datos extra, voy al PHP");
                  altaUsuario(curp_ingresado, nombre_ingresado, clave_ingresada, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);
               }
            }
         } else {
            console.log("Pase los tests sin datos extra SOLOOO, voy al PHP");
            altaUsuario(curp_ingresado, nombre_ingresado, clave_ingresada, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);
            
         }

      } else {
         let mensaje = "Los siguientes campos obligatorios no cumplen con el formato adecuado: \n";

         if (!regex_curp.test(curp_ingresado)) {
            mensaje += "CURP del usuario, ";
         }
         if (!regex_nombre.test(nombre_ingresado)) {
            mensaje += "Nombre del usuario, ";
         }
         if (!regex_clave.test(clave_ingresada)) {
            mensaje += "Clave de la cuenta, ";
         }
         if (academia_ingresada == "") {
            mensaje += "Academia del usuario, ";
         }
         if (presea_ingresada == "") {
            mensaje += "Presea del usuario, ";
         }

         // Elimina la coma y el espacio extra al final de la cadena
         mensaje = mensaje.slice(0, -2);

         alert(mensaje);
      }

      function altaUsuario(curp, nombre_ingresado, clave_ingresada, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado) {
         console.log("Ya entre a la puta funcion de agregar");

         $.ajax({
            type: "POST",
            url: "./php/agregar_usuario _DB.php", //////////// haer el php para dar de alta
            data: { curp: curp, nombre_ingresado: nombre_ingresado, clave_ingresada: clave_ingresada, academia_ingresada: academia_ingresada, presea_ingresada: presea_ingresada, asistencia_ingresada: asistencia_ingresada, Implemento_ingresado: Implemento_ingresado, invitado_implemento_ingresado: invitado_implemento_ingresado, invitado_ingresado: invitado_ingresado },
            success: function (response) {
               // Puedes manejar la respuesta del servidor aquí si es necesario
               alert(response);
            },
            error: function (error) {
               alert("Error en la solicitud AJAX:", error);
            }
         });
      }

   }



   /// formulario de modificar usuario

   /*$(".editar").on("click", function(){
      //sessionStorage.clear();
      let id = $(this).attr("data-id");
      sessionStorage.setItem("id", id);
      console.log(id);
   });*/
    
   /*

   const formulario_mod_usuario = document.querySelectorAll(".form_modificar_usuario_admin");
   formulario_mod_usuario.forEach(formularios => {
      formularios.addEventListener("submit", modificarUsuario);
   })

   function modificarUsuario(ev){
      ev.preventDefault();
      let id = sessionStorage.getItem("id");
      //sessionStorage.removeItem("id");
      console.log(id);


      console.log("evite la recarga");

      let data = new FormData(this); // data almacena los datos de todos los campos del formulario

      // guardar los datos en unas variables distintas
      //let id = $(this).attr("data-boleta");
      //sessionStorage.setItem("id", id);
      console.log(id);

      let nombre_ingresado = data.get('nombre_ingresado').trim();

      let academia_ingresada = data.get('academia_ingresada').trim();
      let asistencia_ingresada = data.get('asistencia_ingresada').trim();

      let presea_ingresada = data.get('presea_ingresada').trim();

      let Implemento_ingresado = data.get('Implemento_ingresado').trim();
      let invitado_ingresado = data.get('invitado_ingresado').trim();
      let invitado_implemento_ingresado = data.get('invitado_implemento_ingresado').trim();

      // como estos datos no vinene vacios pues los vacio
      if (Implemento_ingresado == "Abrir opciones de implementos") {
         Implemento_ingresado = "";
      }
      if (invitado_implemento_ingresado == "Abrir opciones de implementos") {
         invitado_implemento_ingresado = "";
      }


      console.log(data);

      console.log(nombre_ingresado);
      console.log(academia_ingresada);
      console.log(presea_ingresada);
      console.log(Implemento_ingresado);
      console.log(invitado_ingresado);
      console.log(invitado_implemento_ingresado);

      console.log(data.get('asistencia_ingresada'));
      console.log(asistencia_ingresada);

      //expresiones regulares para asegurarnos que la cadena cumple con los datos del formulario
      var regex_nombre = /^[a-zA-Z\sáéíóúÁÉÍÓÚñ]{1,100}$/;

      if (regex_nombre.test(nombre_ingresado) && academia_ingresada != "" && presea_ingresada != "") {

         //paso los test individuales
         //ahora ver si no viene con

         // los datos extra si existen
         if (Implemento_ingresado != "" || invitado_ingresado != "" || invitado_implemento_ingresado != "") {

            // hay datos extra pero no se confirmo
            if (asistencia_ingresada != "Confirmada") {
               alert("No puedes agregar datos adicionales si el usuario no ha confirmado asistencia");
            } else {
               if ((invitado_implemento_ingresado !== "") && !regex_nombre.test(invitado_ingresado)) {
                  alert("Se indicó un implemento para un acompañante pero no hay acompañante");

               } else if (regex_nombre.test(invitado_ingresado)) {

                  console.log("vengo con invitado con o sin implemento, mandar al php");
                  modUsuario(id, nombre_ingresado, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);

               } else {
                  console.log("Pase los tests sin datos extra, voy al PHP");
                  modUsuario(id, nombre_ingresado, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);
               }
            }
         } else {
            console.log("Pase los tests sin datos extra SOLOOO, voy al PHP");
            modUsuario(id, nombre_ingresado, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);
            
         }

      } else {
         let mensaje = "Los siguientes campos obligatorios no cumplen con el formato adecuado: \n";

         if (!regex_nombre.test(nombre_ingresado)) {
            mensaje += "Nombre del usuario, ";
         }
         if (academia_ingresada == "") {
            mensaje += "Academia del usuario, ";
         }
         if (presea_ingresada == "") {
            mensaje += "Presea del usuario, ";
         }

         // Elimina la coma y el espacio extra al final de la cadena
         mensaje = mensaje.slice(0, -2);

         alert(mensaje);
      }

      function modUsuario(id, nombre_ingresado, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado) {
         console.log("Ya entre a la puta funcion");

         $.ajax({
            type: "POST",
            url: "./php/modificar_usuario_DB.php", //////////// haer el php para dar de alta
            data: { id: id, nombre_ingresado: nombre_ingresado, academia_ingresada: academia_ingresada, presea_ingresada: presea_ingresada, asistencia_ingresada: asistencia_ingresada, Implemento_ingresado: Implemento_ingresado, invitado_implemento_ingresado: invitado_implemento_ingresado, invitado_ingresado: invitado_ingresado},
            success: function (response) {
               // Puedes manejar la respuesta del servidor aquí si es necesario
               alert(response);
            },
            error: function (error) {
               alert("Error en la solicitud AJAX:", error);
            }
         });
      }
      sessionStorage.removeItem("id");

   }

   */

      /// formulario de borrar usuario

      /*$(".eliminar").click(function (){
         let id_borrar = $(this).attr("data-id");
         sessionStorage.setItem("id_borrar", id_borrar);
         console.log(id_borrar);
     });*/
     
     /*
     $("#btn_eliminar").click(function (){

         let id_borrar = sessionStorage.getItem("id_borrar");
         //sessionStorage.removeItem("id-borrar");
     
         console.log(id_borrar);
     
         eliminarUsuario(id_borrar);
     
         function eliminarUsuario(id_borrar) {
             console.log("Ya entré a la función");
     
             $.ajax({
                 url: "./php/eliminar_usuario_DB.php",
                 type: "POST",
                 data: {id_borrar: id_borrar},
                 cache:false,
                 success: function (response) {
                     // Puedes manejar la respuesta del servidor aquí si es necesario
                     alert(response);
                 },
                 error: function (error) {
                     alert("Error en la solicitud AJAX:", error);
                 }
             });
         }
     
         // Limpia el sessionStorage después de usar el valor
         sessionStorage.removeItem("id-borrar");
         //location.reload();
         console.log(id_borrar);
     });

     */



});

$(document).ready(()=>{

   console.log($(".editar").length);
   console.log($(".eliminar").length);
   console.log("Editar data-id:", $(".editar").attr("data-id"));
   console.log("Eliminar data-id:", $(".eliminar").attr("data-id"));
   
   
   // Función para manejar el clic en el botón editar
   function handleEditarClick() {
      let id = $(this).attr("data-id");
      sessionStorage.setItem("id", id);
      console.log(id);
  }

  // Función para manejar el clic en el botón eliminar
  function handleEliminarClick() {
      let id_borrar = $(this).attr("data-id");
      sessionStorage.setItem("id_borrar", id_borrar);
      console.log(id_borrar);
  }

  // Asociar eventos al cargar el documento
  $(".editar").on("click", handleEditarClick);
  $(".eliminar").on("click", handleEliminarClick);
   
   
   /// formulario de modificar usuario

   const formulario_mod_usuario = document.querySelectorAll(".form_modificar_usuario_admin");
   formulario_mod_usuario.forEach(formularios => {
      formularios.addEventListener("submit", modificarUsuario);
   })

   function modificarUsuario(ev){
      ev.preventDefault();
      let id = sessionStorage.getItem("id");
      //sessionStorage.removeItem("id");
      console.log(id);


      console.log("evite la recarga");

      let data = new FormData(this); // data almacena los datos de todos los campos del formulario

      // guardar los datos en unas variables distintas
      //let id = $(this).attr("data-boleta");
      //sessionStorage.setItem("id", id);
      console.log(id);

      let nombre_ingresado = data.get('nombre_ingresado').trim();

      let academia_ingresada = data.get('academia_ingresada').trim();
      let asistencia_ingresada = data.get('asistencia_ingresada').trim();

      let presea_ingresada = data.get('presea_ingresada').trim();

      let Implemento_ingresado = data.get('Implemento_ingresado').trim();
      let invitado_ingresado = data.get('invitado_ingresado').trim();
      let invitado_implemento_ingresado = data.get('invitado_implemento_ingresado').trim();

      // como estos datos no vinene vacios pues los vacio
      if (Implemento_ingresado == "Abrir opciones de implementos") {
         Implemento_ingresado = "";
      }
      if (invitado_implemento_ingresado == "Abrir opciones de implementos") {
         invitado_implemento_ingresado = "";
      }


      console.log(data);

      console.log(nombre_ingresado);
      console.log(academia_ingresada);
      console.log(presea_ingresada);
      console.log(Implemento_ingresado);
      console.log(invitado_ingresado);
      console.log(invitado_implemento_ingresado);

      console.log(data.get('asistencia_ingresada'));
      console.log(asistencia_ingresada);

      //expresiones regulares para asegurarnos que la cadena cumple con los datos del formulario
      var regex_nombre = /^[a-zA-Z\sáéíóúÁÉÍÓÚñ]{1,100}$/;

      if (regex_nombre.test(nombre_ingresado) && academia_ingresada != "" && presea_ingresada != "") {

         //paso los test individuales
         //ahora ver si no viene con

         // los datos extra si existen
         if (Implemento_ingresado != "" || invitado_ingresado != "" || invitado_implemento_ingresado != "") {

            // hay datos extra pero no se confirmo
            if (asistencia_ingresada != "Confirmada") {
               alert("No puedes agregar datos adicionales si el usuario no ha confirmado asistencia");
            } else {
               if ((invitado_implemento_ingresado !== "") && !regex_nombre.test(invitado_ingresado)) {
                  alert("Se indicó un implemento para un acompañante pero no hay acompañante");

               } else if (regex_nombre.test(invitado_ingresado)) {

                  console.log("vengo con invitado con o sin implemento, mandar al php");
                  modUsuario(id, nombre_ingresado, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);

               } else {
                  console.log("Pase los tests sin datos extra, voy al PHP");
                  modUsuario(id, nombre_ingresado, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);
               }
            }
         } else {
            console.log("Pase los tests sin datos extra SOLOOO, voy al PHP");
            modUsuario(id, nombre_ingresado, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado);
            
         }

      } else {
         let mensaje = "Los siguientes campos obligatorios no cumplen con el formato adecuado: \n";

         if (!regex_nombre.test(nombre_ingresado)) {
            mensaje += "Nombre del usuario, ";
         }
         if (academia_ingresada == "") {
            mensaje += "Academia del usuario, ";
         }
         if (presea_ingresada == "") {
            mensaje += "Presea del usuario, ";
         }

         // Elimina la coma y el espacio extra al final de la cadena
         mensaje = mensaje.slice(0, -2);

         alert(mensaje);
      }

      function modUsuario(id, nombre_ingresado, academia_ingresada, presea_ingresada, asistencia_ingresada, Implemento_ingresado, invitado_ingresado, invitado_implemento_ingresado) {
         console.log("Ya entre a la puta funcion");

         $.ajax({
            type: "POST",
            url: "./php/modificar_usuario_DB.php", //////////// haer el php para dar de alta
            data: { id: id, nombre_ingresado: nombre_ingresado, academia_ingresada: academia_ingresada, presea_ingresada: presea_ingresada, asistencia_ingresada: asistencia_ingresada, Implemento_ingresado: Implemento_ingresado, invitado_implemento_ingresado: invitado_implemento_ingresado, invitado_ingresado: invitado_ingresado},
            success: function (response) {
               // Puedes manejar la respuesta del servidor aquí si es necesario
               alert(response);
            },
            error: function (error) {
               alert("Error en la solicitud AJAX:", error);
            }
         });
      }
      sessionStorage.removeItem("id");

   }

      /// formulario de borrar usuario
     
     $("#btn_eliminar").click(function (){

         let id_borrar = sessionStorage.getItem("id_borrar");
         //sessionStorage.removeItem("id-borrar");
     
         console.log(id_borrar);
     
         eliminarUsuario(id_borrar);
     
         function eliminarUsuario(id_borrar) {
             console.log("Ya entré a la función");
     
             $.ajax({
                 url: "./php/eliminar_usuario_DB.php",
                 type: "POST",
                 data: {id_borrar: id_borrar},
                 cache:false,
                 success: function (response) {
                     // Puedes manejar la respuesta del servidor aquí si es necesario
                     alert(response);
                 },
                 error: function (error) {
                     alert("Error en la solicitud AJAX:", error);
                 }
             });
         }
     
         // Limpia el sessionStorage después de usar el valor
         sessionStorage.removeItem("id-borrar");
         //location.reload();
         console.log(id_borrar);
     });


     const inputBusqueda = document.querySelector("#campo");

      inputBusqueda.addEventListener("input", (e) => {
         // Obtener el valor de búsqueda
         let valorBusqueda = e.target.value;
         console.log(valorBusqueda);
         // Realizar la búsqueda
         buscarRegistros(valorBusqueda);
      });

      function buscarRegistros(valorBusqueda) {
         $.ajax({
           url: "./php/buscar_registros.php",
           type: "POST",
           data: {valorBusqueda:valorBusqueda},
           success: function (response) {
            // Puedes manejar la respuesta del servidor aquí si es necesario
               //alert(response);
               $("#trsAlumnos").html(response);
            },
            error: function (error) {
                  alert("Error en la solicitud AJAX:", error);
            }
         });
       }


});
   

