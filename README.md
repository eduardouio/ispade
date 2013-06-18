ispade
======

Trabajo de fin de carrera Eduardo Villota

Notas.---

Se tiene tres tipos de paginas 
Home.
Formulario de contactos
presentacion de contenidos


El home no es mas que las noticias del sitio o sus contenidos más importantes, unos links que te llevan a articulos mostrado en una pantalla de presentacion de contenidos, las pantallas de presentacion de contenidos tienen la informacion del sitio los atriculos no se presentan envebidos en la pagina sino en ventanas emergentes tipo modal, 

Las imagnes de los contenidos se las va a almacenar en la base de datos, para que sea mucho más facil obtenerlas y guardarlas, en lugar de hacerlo por manejo de archivos en php, a pesar de que es mejor guardar las imágenes en el sitio que en la base de datos, pero en esta.

Base de datos.-

Tabla Page, se controla que no se repitan las paginas haciendo que el titulo y la url sean unicas en la tabla,
Tabla Article, Se controla que no se repitan los articulos a travez del titulo y la url, los cuales deben ser unicos
para cada articulo en el sitio.



Pagina Home.-

Esta ṕagina debe tener en su portada los tres aticulos más reñevantes del sitio, (con esto me refiero a los articlos con más lecturas), 

slide Home, en este lugar se lugar se muestran conecciones a articulos de mayor interes, por referencia se va a poner una coneccion a las paginas del sitio es decir, uno para servicios, otro para nosotros, y otro para contactos, y un slide de bienvenida.

articulos home.- Al tener los tres articulos debajo del home, se decide colocar alli los mas relevantes, los tres más relevantes del sitio, se conserva las mismas imágenes siempre para no perder el diseño, pero de ser posible se inrustará las imagnes de los articulos.

Paginas de Presentacion de contenidos.

Todos los articulos tienen el titulo en letra capital, la primera letra de cada parabla en mayúscula y las demas on minúsculas

La url de los articulos esta compuesta por el titulo,  es el titulo en minusculas sin tildes, reemplazando los caracteres de espacio por guines bajos, de no funcionar estará dado por el id del articulo...




