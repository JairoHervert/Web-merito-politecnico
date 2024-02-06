# Sistema web "Distinciones al merito politecnico"

Sistema web para el control de asistencias de los galardonados al evento "distinciones al merito politecnico" que realiza el IPN de forma anual.


## Vistas

El programa cuenta con una vista destinada a personal con el rol de administrador y una vista comun destinada a los galardonados.
El acceso a el sistema se realiza por la curp del usuario, ademas de una clave que por defecto fue configurada como '12345678'. En la base de datos, en la tabla usuarios, se pueden observar los registros, los usuarios con el rol 2 son de tipo administrador.


## Vista comun
En la vista destinada a los galardonados unicamente pueden observar sus datos, asi como la presea obtenida, ademas de poder confirmar o rechazar su asistencia y volver a generar el pdf de su invitacion (si esta fue confirmada).

## Vista administrador
El administrados dispone de una tabla donde puede observar los datos importantes de cada registros, aplicar filtros de busqueda, editar los regitros, agregar nuevos registros, generar un reporte PDF con los registros.


## Instalacion
1. Se debe importar la base de datos, esta base de datos utiliza el motor de MariaDB.
2. Mover el resto de archivos a la carpeta de proyectos de su servidor local. Para este proyecto se utilizo XAMPP, para este servidor la carpeta es hotdocs