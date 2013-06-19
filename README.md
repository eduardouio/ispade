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


URls
Antes de entrar en el asunto del manejo de las rutas, recordemos como maneja las urls codeigniter, ya que en este principio estará  basado.

http://sitio/index.php/controller/method/param

Para codeigniter esta urlñ está segmentada de manera que cada barra inclinada "/" es la separacion de un segmento y tiene una funcion propia quedando asi

http://sitio.com/index.php/controller/method/param
		1		2			3 		4		5

La primera parte es la direccion del sitio, la segunda parte es el index del sitio, que es el controlador principal del framework, el tercero es el nombre del  controlador, el cuarto es el nombre de la función que pertenece al controlador a partir del quinto elemento de la url son los parámetros que el metodo necesesita para trabajar.


Recordando esto, la url de los articulos esta compuesta por el titulo,  es el titulo en minusculas sin tildes, reemplazando los caracteres de espacio por guines bajos, de no funcionar estará dado por el id del articulo...

Se trata de manejar los articulos de manera que sea facil de encontrar, me gustaria manejar los articulos por el nombre, en lugar del id, es mucho más elaborado y de mejor aspecto, consideremos el funcionamiento de un controlador que tiene que buscar el articulo y mostrarlo en pantalla y la forma en la que los articulos estan distribuidos en la base de datos.

Primero que nada tenemos las paginas que son las que poseen los articulos, luego de ello tenemos los articulos que pertenecen a una pagina, es por esto que se registra en la base de datos una relacion entre pagina y articulo en tablas diferentes, veamos las estructuras de las tablas 

Tabla Paginas

+--------------+----------------------+
| Field        | Type                 |
+--------------+----------------------+
| id_article   | smallint(5) unsigned |
| id_page      | smallint(5) unsigned |
| title        | varchar(500)         |
| url          | varchar(500)         |
| image        | varchar(300)         |
| content      | mediumtext           |
| counter      | smallint(5) unsigned |
| visible      | smallint(5) unsigned |
| create_date  | datetime             |
| last_update  | timestamp            |
| publish_down | datetime             |
+--------------+----------------------+


Tabla Articulos

+--------------+----------------------+
| Field        | Type                 |
+--------------+----------------------+
| id_article   | smallint(5) unsigned |
| id_page      | smallint(5) unsigned |
| title        | varchar(500)         |
| url          | varchar(500)         |
| image        | varchar(300)         |
| content      | mediumtext           |
| counter      | smallint(5) unsigned |
| visible      | smallint(5) unsigned |
| create_date  | datetime             |
| last_update  | timestamp            |
| publish_down | datetime             |
+--------------+----------------------+


Como podemos ver en las dos tenemos el campo url que es la que almacena el identificador del articulo y de la paginaa, tomemos como principio una direccion de un articulo completo basado en las url de codeigniter.

http://sitio/index.php/noticias/art/mi_primer_articulo

Con esto podemos decir que noticias es el nombre del controlador, art es el metodo del controlador y mi_primer_articulo es el parametro de esta función, entonces en las tablas solo se almacenas el nombre del controlador y el nombre del articulo que es el identificador del articulo respectivamente.




Imagenes



