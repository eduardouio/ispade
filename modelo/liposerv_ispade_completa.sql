-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-09-2013 a las 16:34:56
-- Versión del servidor: 5.5.32-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `liposerv_ispade`
--
CREATE DATABASE IF NOT EXISTS `liposerv_ispade` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `liposerv_ispade`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_page` smallint(5) unsigned NOT NULL,
  `title` varchar(500) NOT NULL,
  `image` varchar(300) NOT NULL COMMENT 'ruta absoluta de la imagen, tomada del nombre del articulo',
  `content` mediumtext NOT NULL,
  `counter` smallint(5) unsigned NOT NULL,
  `visible` smallint(5) unsigned NOT NULL COMMENT 'booleano que inidica si un articulo es visible o no',
  `create_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_article`),
  KEY `fk_id_page_idx` (`id_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabla encargada de manejar los articulos de la pagina, en imagen va el link de una imágen o un video' AUTO_INCREMENT=78 ;

--
-- Volcado de datos para la tabla `article`
--

INSERT INTO `article` (`id_article`, `id_page`, `title`, `image`, `content`, `counter`, `visible`, `create_date`, `last_update`, `publish_down`) VALUES
(1, 1, 'Bienvenidos', 'img/portada/slide1.jpg', 'Sea usted bienvenido, síentase libre de explorar, y no dude en enviarnos sus consultas, si desea llámenos +593 9929 36569.', 8, 1, '2013-06-18 10:41:55', '2013-09-18 19:06:30', '0000-00-00 00:00:00'),
(2, 1, 'Nosotros', 'img/portada/slide2.jpg', 'Conozca un poco más de nuestra institución, nuestros orígenes y nuestros objetivos', 0, 1, '2013-06-18 10:41:55', '2013-07-10 02:00:57', '0000-00-00 00:00:00'),
(3, 1, 'Servicios', 'img/portada/slide3.jpg', 'Siempre a su lado!, Estamos para darle una solución a sus requerimientos, consulte nuestra guía de servicios para mayor detalle', 0, 1, '2013-06-18 10:41:55', '2013-07-10 02:00:57', '0000-00-00 00:00:00'),
(4, 1, 'Contáctos', 'img/portada/slide4.jpg', 'La comunicación es el camino al éxito, y nosotros estamos prestos a responderle', 0, 1, '2013-06-18 10:41:55', '2013-07-10 02:00:57', '0000-00-00 00:00:00'),
(5, 2, 'Acerca de Nuetra Empresa', 'img/sitio/art/acerca.jpg', 'EVM, es una empresa Ecuatoriana, creada el 1 de Julio del 2012 dedicada al desarrollo de aplicaciones informáticas multi-propósito,  servicios y productos, para pequeña, mediana, grandes empresas.\r\n<br/>\r\nNuestra filosofía es atender a las nuevas tendencias y demandas de la sociedad, aportando nuestra experiencia con el firme compromiso de toda nuestra organización, basada específicamente en los aspectos como : Eficiencia, Calidad, Seguridad, Confidencialidad, e Innovación.\r\n<br/>\r\nLa política de nuestra empresa considera fundamental la capacitación de nuestro personal en el manejo de los estándares y nuevas tecnologías, esto con un alto control de calidad y seguridad, para crear excelentes productos y de conformidad con el cliente.\r\n', 17, 1, '2013-06-18 11:50:42', '2013-09-11 16:27:13', '0000-00-00 00:00:00'),
(9, 2, 'Nuestra Misión', 'img/article/mision.png', 'Suministrar a nuestros Clientes, servicios, procesos y productos de la más alta calidad a través de soluciones innovadoras, costos razonables, respetando los más altos estámdares y priorizando los requerimientos de nuestros clientes.', 18, 1, '2013-06-18 11:50:42', '2013-09-10 01:11:49', '0000-00-00 00:00:00'),
(10, 2, 'Nuestra Visión', 'img/article/mision.png', 'Ser una Empresa confiable y moderna fundamentada en principios de eficiencia, eficacia y aseguramiento de la calidad en el manejo de tecnologías, ofreciendo servicios confiables, que marquen la diferencia en el mercado. Manejando nuestros negocios y operaciones con el uso de prácticas empresariales seguras y responsables, a través de la participación de nuestro talento humano y socios motivados que garantice su expansión en la próxima década a nivel internacional.', 5, 1, '2013-06-18 11:50:42', '2013-09-13 20:27:34', '0000-00-00 00:00:00'),
(17, 3, 'Twitter Lanza Su Propio Servicio De Análitica', 'img/article/mision.png', 'Tras años de peticiones por parte de la comunidad y continuos rumores sobre su posible llegada Twitter Analytics acaba de hacer su aparición al gran público.\r\n<p>\r\nPara empezar con esta nueva herramienta de análisis de datos de Twitter debemos acceder a analytics.twitter.com seleccionar “Analíticas” desde donde accederemos a "Actividad de la Cronología" y "Seguidores".\r\n<br/>\r\nPese a que por el momento el servicio solo está disponible en Estados Unidos, podemos adelantar algunos detalles sobre sus carácterísticas y posibilidades.\r\n</p>\r\nActividad de la cronología: esta opción muestra las interacciones que han tenido nuestros tweets con atención a retweets, favoritos y respuestas a los mismos, cuentas que nos han empezado a seguir y las que han dejado de hacerlo en un intervalo de 6 horas. Los datos se muestran de forma gráfica y en orden cronológico.\r\n<p>\r\nSeguidores: esta opción muestra una gráfica lineal en la que se ve el crecimiento de seguidores a lo largo del tiempo además de otros datos relacionados. Los datos relacionados se refieren a intereses de los usuarios, localización y distribución de hombres y mujeres.\r\n<br>\r\nEsta nueva herramienta de medición oficial de Twitter será de provecho no solo para usuarios finales sino para todos aquellos que utilices la red de microbloggin como una plataforma donde llegara a todo tipo de consumidores y clientes.\r\n</p>\r\nTodo apunta que en las próximas semanas Twitter Analytics estará disponible para los usuarios de todo el mundo.', 0, 1, '2013-06-18 12:38:28', '2013-07-12 02:19:28', '0000-00-00 00:00:00'),
(18, 3, 'Herramientas Secretas De Los Navegadores Para El Desarrollo Web', 'img/article/mision.png', 'Secrets of the Browser Developer Tools es un proyecto web que reúne en un mismo espacio información detallada sobre las herramientas para desarrolladores también conocidas como developers tolos.\r\n<br>\r\nLas herramientas de desarrollo que encontramos en los navegadores actuales nos permite manipular elementos DOM, estilos CSS, JavaScript... de una forma ágil, útil y en tiempo real.\r\n<p>\r\nLa plataforma que hoy presentamos, recopila información sobre los navegadores web más importantes en la actualidad como Google Chrome, Mozilla Firefox, Safari, Internet Explorer y Opera.\r\n<br>\r\nAdemás tiene consejos clasificados por categorías (consola, rendimiento, debugging, inspección, edición, móvil) y ofrece un filtro con el que encontrar una determinada herramienta en un navegador en particular.\r\n</p>\r\nInteresados pueden acceder a Secrets of the Browser Developer Tools de forma completamente gratuita y sin necesidad de registro previo desde devtoolsecrets.com', 0, 1, '2013-06-18 12:50:08', '2013-07-12 02:19:28', '0000-00-00 00:00:00'),
(19, 3, 'Plugin jQuery para los que prefieren sitios de una única página web', 'img/article/mision.png', '\r\nSmint permite crear un menú fijo que queda situado en la parte superior de nuestro site de forma que se mantenga en esa posición incluso aunque nos desplacemos por nuestra web utilizando el scroll.\r\n<p>\r\nEste plugin completamente gratuito favorece la navegabilidad de aquellos sites de una única página web, reduciendo al mínimo la necesidad de desplazarse para llegar a una parte tan importante como el menú.\r\n</p>\r\nSmint tiene soporte para desplazamiento suave, es casi una herramienta plug & play compatible con los principales navagedores web y cuya principal opción de personalización es la velocidad de desplazamiento.\r\n<p>\r\nInteresados pueden acceder a una demo donde conocer las posibilidades de Smint así como a completa documentación y descarga de la última versión desde www.outyear.co.uk\r\n</p>\r\n', 13, 1, '2013-06-18 12:57:36', '2013-08-16 22:23:50', '0000-00-00 00:00:00'),
(20, 3, 'Google Code Decide Cancelar Una De Sus Características Principales.', 'img/article/mision.png', '	La compañía señala que el aumento de uso indebido del servicio le ha obligado a dar el paso en el interés de mantener segura a la comunidad de la plataforma.<br><br>La medida entrará en vigor inmediatamente para los nuevos proyectos y los proyectos existentes que no han utilizado el servicio de descargas. Los proyectos que tienen descargas tendrán que trasladarlos a otro servicio de alojamiento antes del 14 de enero de 2014.<br><br>La compañía recomienda su servicio de Google Drive como una alternativa. Todas las descargas existentes en el servicio seguirá siendo disponible "en el futuro inmediato" y el código fuente alojado en Google Code seguirá estando disponible a través de Git, Mercurial y Subversion.<br><br>Más información acerca de la descarga de archivos directos y alojamiento de código fuente en Google Code pueden acceder a sus <a name="" target="_blank" classname="" class="" href="https://code.google.com/p/support/wiki/DownloadsFAQ">FAQ</a>. Según los datos de FLOSSmole Google Code dispone de  aproximadamente 300.000 proyectos alojados en su servicio. <br><br>Esta noticia coincide, paradójicamente, con la reciente liberación del código fuente de las gafas inteligentes de Google (Google Glass) en Google Code, en el que podría ser una de las últimas grandes descargas del porpular servicio para desarrolladores.<br>	', 5, 1, '2013-06-18 16:15:20', '2013-08-20 22:18:20', '0000-00-00 00:00:00'),
(21, 3, 'Twitter Añade Un Nuevo Sistema De Acceso', 'img/article/mision.png', '	<b>Twitter </b>acaba de anunaciar de forma oficial a través de su blog, el lanzamiento de un sistema de verificación de cuenta basado en SMS con el que mejorar la seguridad a la hora de hacer login.<br><br>Tras la creciente popularidad que la red de microbloggin ha logrado alcanzar en los últimos años, <b>Twitter </b>se ha convertido en uno de los objetivos más importantes para ciberdelincuentes de todo el mundo.<br><br>Como respuesta a esta situación <b>Twitter </b>ha implantado una sistema semejante al usado desde hace tiempo por otras compañías como Google que consiste en asociar un número de teléfono a nuestra cuenta y recibir un código de confirmación de seis dígitos que debemos utilizar al acceder a nuestra cuenta.<br><br>Esta nueva característica de la plataforma de comunicación en tiempo real llega tras conocerse algunos ataques en los últimos meses sobre cuentas propiedad de medios de comunicación como The Financial Times y multinacionales como Burguer King que han tenido una especial repercusión pública reabriendo el debate sobre la seguridad de Twitter y otras plataformas sociales.<br><br>Por el momento este nuevo sistema de login no está disponible en todos los países ni para todos los proveedores de telefonía, auqneu se sabe que el objetivo es ofrecer la máxima cobertura en los próximos meses. <br><br>Interesados pueden encontrar más detalles sobre la implementación de este sistema de verificación de cuenta basado en SMS desde <a name="" target="_blank" classname="" class="" href="https://blog.twitter.com/2013/getting-started-login-verification">blog.twitter.com</a>.<br>	', 2, 1, '2013-06-18 16:15:20', '2013-08-20 22:18:26', '0000-00-00 00:00:00'),
(22, 3, 'Herramienta Basada En Bootstrap Para Diseñar Webs Con Conocimientos Básicos', 'img/article/mision.png', '	 <b>LayoutIt </b>es un entorno de trabajo que de forma gratuita, rápida y con calidad permite a cualquier interesado crear su propio diseño web adaptable a todo tipo de dispositivos (Responsive).<br><br>Gracias a una interfaz intuitiva el manejo de esta herramienta no representa ninguna dificultad por lo que está al alcance de casi cualquiera. Los elementos se encuentran listos para ser implementados simplemente arrastrando y soltando (drag&amp;drop).<br><br>Basado en Bootstrap, <b>LayoutIt </b>nos permite obtener un código HTML5 validado con el que podremos seguir trabajando además de ahorrarnos una buena parte de esfuerzo y trabajo a la hora de maquetar un website.<br><br>Para empezar a usar este interesante servicio online, simplemente selecciona una plantilla ( también es posible comenzar desde 0), añade los elementos que quieras que formen parte de tu diseño front-end y a medida que vayas creando la estructura podras ver una vista previa directamente en el navegador. Unavez finalizado el proyecto puedes descargar el código completo. <br><br>Todavía en fase beta todos aquellos interesados en conocer mejor o empezar a probar <b>LayoutIt</b> pueden acceder a <a name="" target="_blank" classname="" class="" href="http://www.layoutit.com/">www.layoutit.com</a>.	', 1, 1, '2013-06-18 16:15:20', '2013-08-16 22:31:35', '0000-00-00 00:00:00'),
(23, 3, 'Lista La última Versión De PHP', 'img/article/mision.png', '	El equipo de trabajo de PHP ya ofrece la primera versión candidata de PHP 5.5.<br><br>Este nuevo lanzamiento del lenguaje de programación del lado del servidor dirigido al desarrollo web implementa mejoras en el soporte IPV6 en la extensión SNMP, <a name="" target="_blank" classname="" class="" href="https://twitter.com/rasmus/status/312681386119159808">integra Zend Optimizer</a> para mejorar la ejecución de script, añade la función “array_column” para simplificar la extracción de columnas, además de incluir las oportunas correcciones de errores y mejoras de rendimiento.<br><br>Pese a que se espera que la versión final de PHP 5.5 no tarde en llegar, lo cierto es que esta primera Reléase Candidate ya incluye todas las novedades que podremos encontrar en el lanzamiento definitivo.<br><br>Coincidiendo con la llegada de PHP 5.5 R.C 1, la rama 5.4.x de PHP también ha sido actualizada. Interesados pueden acceder a completa información desde la <a name="" target="_blank" classname="" class="" href="http://php.net/archive/2013.php#id2013-05-09-2">web oficial</a> de este popular lenguaje de programación.	', 9, 1, '2013-06-18 16:15:20', '2013-08-16 22:31:32', '0000-00-00 00:00:00'),
(24, 3, 'Mageia 3 Lista Para Descargar', 'img/article/mision.png', '	Con algo de retraso sobre la fecha inicialmente prevista en el calendario oficial el equipo de trabajo de este fork de Mandriva acaba de liberar el nuevo Mageia 3.<br><br>La distribución GNU/Linux que mayor crecimiento ha experimentado en el último año, superando a alternativas como Ubuntu, Fedorao Debian, (ver el último <a name="" target="_blank" classname="" class="" href="http://www.desarrolloweb.com/de_interes/ranking-distribuciones-linux-abril-2013-8139.html">ranking</a>) llega con un nuevo lanzamiento final que pese a no destaca por incluir novedades expectaculares, consolida su proyecto en el mercado de sistemas operativos libres.<br><br>Entre las características que vamos a poder disfrutar del nuevo Mageia 3 descata Kernel 3.8, systemd 195, GRUB como gestor de arranque predeterminado. KDE 4.10.2, GNOME 3.6, Xfce 4.10, Libreoffice 4.0.3 y actualización completa de paquetes.<br><br>Interesados pueden acceder a la descarga de <b>Mageia 3 final</b> desde <a name="" target="_blank" classname="" class="" href="https://www.mageia.org/en/downloads/">www.mageia.org</a> o más información en español de esta nueva versión en <a name="" target="_blank" classname="" class="" href="http://blog.mageia.org/es/">blog.mageia.org</a>.	', 13, 1, '2013-06-18 16:15:20', '2013-08-16 22:21:22', '0000-00-00 00:00:00'),
(25, 3, 'Lanzamiento De La Nueva Versión Del Navegador De Google', 'img/article/mision.png', '	Tras el reciente lanzamiento de <a name="" target="_blank" classname="" class="" href="/actualidad/nuevo-firefox-21-final-espanol-8160.html">Mozilla Firefox 21</a> con un aumento del rendimiento y mejoras sociales, el equipo de trabajo del navegador de Google acaba de lanzar un producto dirigido a dar donde más “duele” a sus competidores, la velocidad.<br><br>El nuevo <b>Chrome 27</b> añade una mejora de carga de páginas web de un 5% de promedio gracias a su sistema inteligente de programación de recursos. Este nuevo incremento&nbsp; supone que el que ya era uno de los navegadores más rápidos del mercado logre distanciarse todavía más del resto de sus competidores.<br><br>Además de la velocidad, característica especialmente apreciada por los usuarios, este nuevo lanzamiento del navegador de Google trae también la incoporación de API Sync FileSystem, con la que sincronizar datos sin conexión a Internet utilizando clientes de servicios como Google Drive; mejora del ranking de predicciones y del corrector ortográfico de la barra Omnibox, además del habitual solución de bugs de seguridad de la versión anterior. &nbsp;<br><br>La llegada de esta nueva versión final coincide además con el lanzamiento en fase beta de su sucesor <a name="" target="_blank" classname="" class="" href="https://www.google.com/intl/es/chrome/browser/beta.html">Chrome 28</a> del que puedes encontrar más información desde <a name="" target="_blank" classname="" class="" href="http://googlechromereleases.blogspot.ro/2013/05/dev-channel-update_9.html">este enlace</a>.	', 11, 1, '2013-06-18 16:15:20', '2013-08-03 01:53:31', '0000-00-00 00:00:00'),
(26, 3, 'Firefox 21 Final Está Listo', 'img/article/mision.png', '<img alt="" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTryrOi_QhEiIi7Kdz0tdvTTUwvpZctWDdBCcr_PoBC-Kj-Z8S7">El navegador de código abierto de la Fundación Mozilla acaba de lanzar la versión 21 de Firefox lo que le consolida como uno de los productos con un programa de actualización más rápido.<br><br>Aún por detrás de las 26 versiones que ofrece Google Chrome pero lejos de Internet Explorer 10 o Safari 6, mes y medio después de la llegada de la versión anterior el nuevo Firefox 21 final llega con:<br><br>- una mejora de rendimiento y seguridad así como del soporte de tecnologías Web <br><br>- aumento de las posibilidades de una navegación privada con cambios en Do not track que ahora ofrece una mayor personalización de nuestras preferencias de rastreo<br><br>- sugerencias de mejora para una ejecución más rápida del navegador<br><br>- una nueva herramienta de informe que permite recopilar y enviar datos, siempre que lo consideremos, para ayudar al equipo de desarrolladores a mejorar Firefox.<br><br>- nuevas opciones sociales gracias a la ampliación de la API Social con la que permitir a los proveedores de plataformas sociales una integración en Firefox para ofrecer una experiencia más cercana con tus contactos sin importar en qué parte de la Web estemos. Los nuevos proveedores de redes sociales que se pueden agregar a Firefox son <a href="https://mozsocial.cliqz.com/" target="_blank" rel="">Cliqz</a>, y <a href="https://now.msn.com/now-for-firefox" target="_blank" rel="">msnNow</a>.<br><br>Esta nueva versión de Firefox ya está disponible en español para usuarios con sistemas operativos Windows, Linux, Mac OS X y Android. <br><br>Interesados pueden acceder a la descarga desde <a href="http://www.mozilla.org/en-US/firefox/all/" target="_blank" rel="">www.mozilla.org</a>.', 4, 1, '2013-06-18 16:15:20', '2013-09-18 20:58:07', '0000-00-00 00:00:00'),
(27, 3, 'Java 8 Se Retrasa Por Seguridad', 'img/article/mision.png', '	El desarrollador jefe de la plataforma Java, Mark Reinhold, ha señalado recientemente de forma oficial que Java SE 8 no verá la luz en la fecha prevista.<br><br>El motivo del retraso en la llegada de la nueva versión son los problemas de seguridad que arrastra una tecnología que según señala el informe anual Microsofts Security Intelligence Report sus exploits son los que mayores problemas de seguridad causan a los sistemas operativos Windows conviriéndose en responsable de buena parte de los ataques con éxito que se producen en Internet.<br><br>El equipo de ingenieros de Oracle centrará buena parte de sus esfuerzos en corregir los problemas de seguridad, sacrificando el desarrollo de nuevas características y además produciendo un retraso en su desarrollo.<br><br>De acuerdo con el nuevo calendario, la preview del JDK para desarrolladores llegaría en Septiembre, mientras que la versión beta lo haría en enero. Java 8 final llegaría a mediados de marzo de 2014, lo que de cumplirse, supondría un retraso de casi 6 meses sobre la fecha prevista inicialmente <br><br>Interesados pueden ver el nuevo calendario oficial desde <a name="" target="_blank" classname="" class="" href="http://openjdk.java.net/projects/jdk8/">openjdk.java.net</a>.	', 6, 1, '2013-06-18 16:15:20', '2013-07-12 23:06:12', '0000-00-00 00:00:00'),
(28, 3, 'AV-Test Ofrece Un Estudio Para Soluciones De Seguridad Para Windows', 'img/article/mision.png', '	La reconocida firma de seguridad de origen alemán acaba de publicar una comparativa sobre las principales soluciones antivirus en el nuevo sistema operativo de Microsoft.<br>Este estudio se suma a los ya ofrecidos por AV-Test para el resto de los sistemas Windows (Windows 7, Vista,y XP).<br><br>Cada uno de las 25 productos de seguridad incluidos en cada comparativa han sido evaluados en base a su rendimiento, fiabilidad y protección, obteniendo una calificación que va desde cero a seis.<br><br>Respecto a Windows 8, la solución de seguridad que logró más puntos en las pruebas realizadas por AV-Test ha sido Bitdefender, con un total de 17 obteniendo la máxima en protección y usabilidad y un punto menos en fiabilidad. En segundo lugar encontramos a BullGuard con 16.5 puntos y a continuación Kaspersky con 16 puntos.<br><br>Llama la atención que Microsoft Windows Defender, un programa de seguridad muy criticado en los últimos tiempos, también logra a juicio de AV-Tes clasificar entre las 25 opciones más destacadas logrando una puntuación de 11.5 puntos.<br><br>El estudio acerca de la mejor solución antivurs para Windows 8 fue realizado entre los meses de enero y febrero de este mismo año y está a disposición de cualquier interesado desde <a name="" target="_blank" classname="" class="" href="http://www.av-test.org/en/tests/home-user/windows-8/janfeb-2013/">www.av-test.org</a>.	', 8, 1, '2013-06-18 16:15:20', '2013-08-18 20:51:26', '0000-00-00 00:00:00'),
(29, 3, 'Adobe Salta A La Nube', 'img/article/mision.png', '	Tras casi 10 años de trabajo desde el lanzamiento de Creative Suite 1 en 2003, Adobe acaba de señalar que no lanzará otra versión de las herramientas CS como venía haciendo hasta la fecha, sino que en adelante su modelo va a centrarse en CC es decir Creative Cloud.<br><br>Esta noticia confirma el camino iniciado a primeros del año pasado por los de Adobe y supone que productos tan relevantes como Photoshop, Dreamweaver o Illustrator den un salto definitivo hacia un modelo de suscripción.<br><br>Gracias a este cambio de estrategia permitirá que los usuarios podrán beneficiarse de ventajas como la sincronización, de forma que llevar a cabo un cambio en la configuración de uno de los programas permita que éste se implemente en el resto de dispositivos donde lo usemos. Por otro lado, Adobe podrá mejorar su control sobre las copias no autorizadas de sus productos, cumpliendo así un importante objetivo para la compañía.<br><br>En cuanto a los precios, sin una información al respecto sobre la próxima versión CC todo apunta que la suscripción individual podría rondar los 50 dólares mensuales por persona por la Suite completa o 19.99 dólares mensuales por aplicación con precios especiales para clientes actuales de CS, en lugar de los 3.000 euros que llega a costar una licencia completa de Creative Suite 6.<br><br>Pese que queda claro que no habrá Adobe Creative Suite 7 y que toda la innovación del producto se centrará en Creative Cloud, la versión Creative Suite 6 seguirá recibiendo actualizaciones de seguridad.<br><br>Así que ¿estás listo para Photoshop CC, InDesign CC, Illustrator CC, Dreamweaver CC y Premiere Pro CC? accede desde <a name="" target="_blank" classname="" class="" href="https://creative.adobe.com/">creative.adobe.com</a>.	', 13, 1, '2013-06-18 16:15:20', '2013-08-03 01:52:57', '0000-00-00 00:00:00'),
(30, 4, 'Diseño De Sitios Web', 'img/article/mision.png', '	"EVM es una empresa experimentada en diseño de sitios web profesionales, construídos y optimizados para triunfar en la lucha por las primeras posiciones de los buscadores, especialmente en la competencia por los primeros lugares de los resultados de Google.\r\n<br><br>\r\nEl diseño de nuestros proyectos web o desarrollos web, contemplan arquitectura de la información, optimización del contenido para el sitio web, asesoramiento en findability o encontrabilidad, trabajo de archivos considerando el long tail ( cola larga de resultados) o diversidad de búsquedas de los usuarios."	', 7, 1, '2013-06-18 17:03:44', '2013-09-03 15:53:23', '0000-00-00 00:00:00'),
(31, 4, 'Administración Redes', 'img/article/mision.png', '	"<p>La administración de Redes es un conjunto de técnicas tendientes a mantener una red operativa, eficiente, segura, constantemente monitoreada y con una planeación adecuada y propiamente documentada.</p>\r\n<p>Una buena administración de una red LAN permite:</p>\r\n<p>\r\n	<ul>\r\n		<li> Control y monitoreo del estado de la red, resolución de problemas y de acceso a recursos.</li>\r\n		<li> Hacer uso eficiente de la red y utilizar mejor los recursos, como por ejemplo, el ancho de banda o periféricos</li>\r\n		<li> Hacer la red más segura, protegiéndola contra el acceso no autorizado. Protocolos de seguridad, firewall o directivas</li>\r\n		<li> Controlar cambios y actualizaciones en la red de modo que ocasionen las menos interrupciones posibles en el servicio a los usuarios.</li>\r\n</p>"	', 2, 1, '2013-06-18 17:03:44', '2013-07-14 02:49:29', '0000-00-00 00:00:00'),
(32, 4, 'Registro de Dominio', 'img/article/mision.png', '	Registre su nombre de dominio y asegúrelo cuanto antes. Registrar sus dominios con Imaginamos.com le brinda la seguridad de mantener privados sus datos personales para evitar Spam y phishing. Además registrar su nombre de dominio con Imaginamos le dará tranquilidad de tener el dominio con una empresa seria y confiable, no se arriesgue a tener sorpresas desagradables registrando sus dominios en empresas sin respaldo. En imaginamos le brindamos asesoría y le administramos su dominio para asegurar el buen funcionamiento del mismo.	', 5, 1, '2013-06-18 17:03:44', '2013-08-16 22:18:39', '0000-00-00 00:00:00'),
(33, 4, 'Mantenimiento De Servidores', 'img/article/mision.png', '	"Desarrollamos todo tipo de actividades de mantenimiento para sus servidores, con personal certificado y calificado. Nuestro equipo de expertos en mantenimiento servidores, ofrecen un amplio portafolio en servicios de mantenimiento con un servicio de alta calidad.\r\n<p>\r\nPara detallar más acerca de nuestros servicios de mantenimiento servidores a continuación le presentamos las marcas de los servidores a los cuales estamos en capacidad de hacer mantenimiento. Tenga en cuenta que contamos con servicios de mantenimiento para servidores tanto a nivel preventivo como correctivo. \r\n</p>\r\n EVM cuenta con un grupo de expertos en mantenimiento de servidores que atienden tanto el mantenimiento correctivo, como el mantenimiento preventivo para los siguientes productos:\r\n<ul>\r\n    <li>Mantenimiento Servidores Hp</li>\r\n    <li>Mantenimiento Servidores Dell</li>\r\n   <li> Mantenimiento Servidores IBM</li>\r\n</ul>\r\n	', 5, 1, '2013-06-18 17:03:44', '2013-08-16 22:25:12', '0000-00-00 00:00:00'),
(34, 4, 'Desarrollo De Aplicaciones En General', 'img/article/mision.png', '	"Si no encuentra el producto que cumpla con sus necesidades, podemos desarrollarlo a medida. \r\n\r\n<p>La realidad es que su negocio opera sobre un conjunto de aplicaciones. El reto más grande es cómo desarrollar un software de negocios que sea confiable y que, a la vez, ofrezca reducción de costos y el cumplimiento de rigurosos plazos de entrega.</p>\r\n<p>EVM puede ayudarle. Nuestro proceso está estructurado bajo una metodología de cumplimiento de fases y objetivos, con actividades y entregables específicos. \r\n\r\n<ul>\r\n<li>Mejores prácticas como resultado de más de 25 años de experiencia en desarrollo de aplicaciones.</li>\r\n<li>Aprovechamiento de nuestra infraestructura tecnológica y bases de conocimiento.</li>\r\n<li>Digitalización de procesos (dashboards &amp; scorecards) y un modelo basado en SLAs (Acuerdos de Niveles de Servicio).</li>\r\n<li>Procesos alineados conforme a Six-Sigma y CMMi.</li>\r\n</ul>\r\n<p><strong>Servicios de Desarrollo de Aplicaciones</strong></p>\r\n<ul>\r\n<li>Modernización de aplicaciones: transformación de sistemas “heredados” a sistemas modernos, basados en tecnologías y arquitecturas de punta.</li>\r\n<li>Inteligencia de Negocios (Business Intelligence): toma de decisiones de negocio en tiempo real, y sustentadas en volúmenes masivos de datos. Ofrecemos soluciones de proveedores líderes del mercado como: Informatica, Cognos y Business Objects.</li>\r\n<li>Desarrollo de aplicaciones a la medida: web o sistemas de software “cliente/servidor” basados en Java, C++, .Net y Oracle.</li>\r\n<li>Integración de sistemas: técnicas y herramientas de integración de aplicaciones empresariales (EAI) que permiten alinear sistemas “heredados”; aplicaciones n-tier; ERP; CRM; y SCM. Contamos con una amplia experiencia implementando e integrando aplicaciones empresariales líderes como: SAP, Oracle y Peoplesoft, entre otras.</li>\r\n<li>Servicios de eCommerce: desarrollo bajo una amplia variedad de estándares como: EDI x12, EDIFACT, RosettaNet y XML</li>\r\n<li>Open Source (Código Abierto): desarrollo de aplicaciones bajo plataformas Linux, servidores de bases de datos, servidores de aplicaciones (JBoss, Tomcat, PHP), servidores de Web, IDEs, SCM y firewalls.</li>\r\n<li>Plataformas Móviles: soporte a la mayoría de las plataformas móviles, desde “Research In Motion s” de BlackBerry, PalmOS y Microsoft Windows Mobile; hasta teléfono, dispositivos portátiles y Tablet PCs.</li>\r\n"', 16, 1, '2013-06-18 17:05:06', '2013-09-02 14:18:04', '0000-00-00 00:00:00'),
(35, 5, 'Siempre En Contacto', 'img/article/mision.png', '\r\n	Estamos dispuestos a resolver cualquier duda o requerimiento, no dude en enviarnoslas.\r\nLe esperamos en la direccion <b>Av. Cristóbal Colón E454-2 y Av. 6 de Diciembre</b><br>\r\nO puede contactarnos a los teléfonos (593) 02 2342-212.	\r\n	', 1, 1, '2013-06-18 17:12:07', '2013-07-12 03:14:15', '0000-00-00 00:00:00'),
(38, 1, 'Bienvenido', 'img/portada/bienvenido.png', 'Sean todos bienvenidos, estamos para servirle de la mejor manera, informandole y bindando servicios de manera oportuna, gracias', 0, 1, '0000-00-00 00:00:00', '2013-09-18 19:02:35', '0000-00-00 00:00:00'),
(39, 1, 'Noticias', 'img/portada/noticias.png', 'Estamos siempre a la vanguardia de los echos tecnológicos, sus acontecimientos y novedades, no se pierda ninguna noticia.', 0, 1, '0000-00-00 00:00:00', '2013-07-12 02:25:01', '0000-00-00 00:00:00'),
(41, 1, 'Nuestros Servicios', 'img/portada/servicios.png', 'Tenemos un catalogo completo de los servicios que prestamos, le invitamos a descargarlo y comparar nuestros precios', 4, 1, '0000-00-00 00:00:00', '2013-07-12 19:25:11', '0000-00-00 00:00:00'),
(42, 1, 'Articulo Eliminado', 'img/article/mision.png', 'No borre este artículo, este contenido se muestra cuando no existe un artículo en la base de datos.', 0, 0, '0000-00-00 00:00:00', '2013-09-02 19:28:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `id_form` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `names` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `browser` varchar(250) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_form`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Listado de paginas del sitio, lás paginas se almacenan en forma de registros' AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `form`
--

INSERT INTO `form` (`id_form`, `names`, `email`, `empresa`, `telefono`, `asunto`, `descripcion`, `browser`, `ip`, `pais`, `create_date`, `last_update`) VALUES
(1, '0', 'eduardouio7@gmail.com', 'Procuserve', '3203161', 'Hola', 'Este es un comentario', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:27:02', '2013-08-16 16:27:02'),
(2, '0', 'eduardouio7@gmail.com', 'Procuserve', '3203161', 'Hola', 'Este es un comentario', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:28:06', '2013-08-16 16:28:06'),
(3, '0', 'eduardouio7@gmail.com', 'Procuserve', '3203161', 'Hola', 'Este es un comentario', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:29:50', '2013-08-16 16:29:50'),
(4, '0', 'eduardouio7@gmail.com', 'Procuserve', '3203161', 'Hola', 'Este es un comentario', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:33:24', '2013-08-16 16:33:24'),
(5, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:41:40', '2013-08-16 16:41:40'),
(6, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:42:04', '2013-08-16 16:42:04'),
(7, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:42:45', '2013-08-16 16:42:45'),
(8, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:43:06', '2013-08-16 16:43:06'),
(9, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:43:16', '2013-08-16 16:43:16'),
(10, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:48:37', '2013-08-16 16:48:37'),
(11, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:48:43', '2013-08-16 16:48:43'),
(12, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:49:16', '2013-08-16 16:49:16'),
(13, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', '/home/eduardo/Escritorio/buzon.png', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:49:38', '2013-08-16 16:49:38'),
(14, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', '/home/eduardo/Escritorio/buzon.png', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:49:54', '2013-08-16 16:49:54'),
(15, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', '/home/eduardo/Escritorio/buzon.png', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:50:33', '2013-08-16 16:50:33'),
(16, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', '/home/eduardo/Escritorio/buzon.png', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 11:50:43', '2013-08-16 16:50:43'),
(17, '0', 'eduardouio7@gmail.com', 'Personal', '0992936569', 'Como estás?', 'To generate a timestamp from a string representation of the date, you may be able to use strtotime(). Additionally, some databases have functions to convert their date formats into timestamps (such as MySQL''s » UNIX_TIMESTAMP function).', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 12:09:55', '2013-08-16 17:09:55'),
(18, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', 'asc<zxc<zxc', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 12:55:17', '2013-08-16 17:55:17'),
(19, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', 'asdfsdfsdfsdfsdf', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 14:37:59', '2013-08-16 19:37:59'),
(20, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', 'asddsfs', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 14:42:17', '2013-08-16 19:42:17'),
(21, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', 'asddsfs', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 14:42:37', '2013-08-16 19:42:37'),
(22, '0', 'eduardouio7@gmail.com', 'Eduardo', '593(2)2226906', 'Hola', 'tiene que haber un ofset para que me bloque el sistema', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 14:44:18', '2013-08-16 19:44:18'),
(23, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', 'vfdvfdvfdvfdvdvfd', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 20:13:23', '2013-08-17 01:13:23'),
(24, '0', 'eduardouio7@gmail.com', 'Eliansito', '593(2)2226906', 'Hola', 'vfdvfdvfdvfdvdvfd', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 20:16:40', '2013-08-17 01:16:40'),
(25, '0', 'vane-ewa@hotmail.com', 'casa', '3203161', 'hola  oooooooooooo', 'feoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gecko/20100101 Firefox/23.0', '127.0.0.1', 'Quito-Ecuador', '2013-08-16 20:18:31', '2013-08-17 01:18:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `controller` varchar(50) NOT NULL COMMENT 'Se acorta el título de la página para controlar que no se repita, se almacena el nombre del controlador de la página',
  `keywords` varchar(500) NOT NULL,
  `create_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_page`),
  UNIQUE KEY `controller` (`controller`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Listado de paginas del sitio, lás paginas se almacenan en forma de registros' AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `page`
--

INSERT INTO `page` (`id_page`, `title`, `controller`, `keywords`, `create_date`, `last_update`) VALUES
(1, 'Inicio', 'home/', 'IanCms, Ispade, Instituto para el desarrollo ISPADE, Educacion Quito, Instituto Superior', '0000-00-00 00:00:00', '2013-06-20 01:15:34'),
(2, 'Nosotros', 'nosotros/', 'Acerca de Ispade, Ispade Historia, Mision y vision Ispade', '0000-00-00 00:00:00', '2013-06-18 22:00:10'),
(3, 'Noticias', 'noticias/', 'Noticias Ispade, Ispade', '0000-00-00 00:00:00', '2013-06-18 22:00:11'),
(4, 'Servicios', 'servicios/', 'Servicios Ispade', '0000-00-00 00:00:00', '2013-06-18 22:00:11'),
(5, 'Contactos', 'contactos/', 'Ispade Quito, Instituto Superior Ispade Quito, Contactos ispade', '0000-00-00 00:00:00', '2013-06-18 22:00:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('05efa9ad513671be97f46e8018ff0b24', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379526789, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 12:45:38";}'),
('0a5fa7e3781514f7d7d8c2cf94c031b5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379527827, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 12:53:13";}'),
('10a1c5a21e28be934f9194eff248fa32', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379528272, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 13:10:31";}'),
('16c3eb9bcc7bfddb70ab433c889df428', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379520521, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 11:03:44";}'),
('22e0b6a991a3ad830d1ab9b2ef207dfa', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379537096, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 15:18:01";}'),
('26aee9c5604536a11bc50f4e41f741a3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379531669, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 14:08:21";}'),
('26b03a394cef3005e46f7f084109de36', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379529236, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 13:27:46";}'),
('2ad8467727936b71282c4e62760d87c0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379537811, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 15:56:51";}'),
('2b85309cdc7823cdf35eb584be82d882', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379521692, ''),
('2e995bf70004eb5ec5248e644fb797fd', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0', 1379538327, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 16:08:58";}'),
('3c0610ed3542f8aedb44e4336c48773f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379523213, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 11:39:28";}'),
('4c18615ac0d9b2cab776fdf83cd9fd9e', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379520926, ''),
('4c3687140ab867040b5d35039369f5e3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379535450, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 15:11:50";}'),
('4fb12501053286743efa096caf5f5cba', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379530283, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 13:45:54";}'),
('68d01d589ece3001024454c9240390be', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0', 1379531856, ''),
('6bda67d6913a2f29ad116ad6501da26d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379529950, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 13:39:41";}'),
('6e76867346a8822165fca40611514d7e', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379533847, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 14:45:08";}'),
('6eba58574668c000dc30d63e22575210', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379537415, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 15:45:12";}'),
('700855ce7afef4b99ba7dfe8164c18a8', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379521689, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 11:23:09";}'),
('70c97e67695998cbde8744407bae80a1', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379524044, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 11:53:37";}'),
('7167af4854501eeb336859b71e741d5d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379537807, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 15:52:51";}'),
('72c2bd3aef737a4bd884f4721fdf9467', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379530614, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 13:51:30";}'),
('80086d5c5c96fd8d2da91205f6f1b209', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379529240, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 13:34:05";}'),
('871572d92351a08036c71eee76b6fb59', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379533501, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 14:35:37";}'),
('8b884834d19d36fcd229125d4e26bf19', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379521234, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 11:15:31";}'),
('9cc1a4d39a1114457af312f654b9d3ee', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379531295, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 14:02:19";}'),
('a6b7dca24505f8512b0ba6ab47ec4358', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379530924, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 13:56:59";}'),
('ae5aac9c88c849e9ebd288b001c31804', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379531975, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 14:14:33";}'),
('b68b32247c350770419532bb9341dba4', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379522363, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 11:28:31";}'),
('bdb22e5a9625c27192c7b2f192d66c3f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379526333, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 12:07:36";}'),
('d27d79dd31470eec6c11459505a282e6', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379520840, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 11:08:46";}'),
('e8ede7fccbcf05b629b30e99eb7ca594', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379534968, ''),
('e9ac88b4b594e2a8860e124fd0b9ddfc', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379529576, ''),
('f226e94db5ffda80f8c9b1c2e107af3f', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0', 1379538322, 'a:3:{s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 15:59:11";}'),
('fa99dbf10e331eb58a50759276ccd81c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.65 Safari/537.36', 1379528858, 'a:4:{s:9:"user_data";s:0:"";s:5:"login";s:4:"TRUE";s:4:"user";s:5:"elian";s:4:"hora";s:19:"2013-09-18 13:18:02";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_usuario` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `last_failure` datetime DEFAULT NULL,
  `failure_count` smallint(5) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `create` datetime DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios, encargados de ingresar a la base de datos' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usuario`, `usuario`, `pass`, `last_failure`, `failure_count`, `last_login`, `create`, `last_update`) VALUES
(1, 'elian', 'elian', '2013-09-18 14:17:40', 0, '2013-09-18 16:08:58', '2013-06-18 17:15:21', '2013-09-18 21:08:58');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ratings`
--
CREATE TABLE IF NOT EXISTS `v_ratings` (
`id_article` smallint(5) unsigned
,`id_page` smallint(5) unsigned
,`controller` varchar(50)
,`title` varchar(500)
,`counter` smallint(5) unsigned
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_tablon`
--
CREATE TABLE IF NOT EXISTS `v_tablon` (
`id_article` smallint(5) unsigned
,`id_page` smallint(5) unsigned
,`controller` varchar(50)
,`title` varchar(500)
,`content` varchar(243)
,`counter` smallint(5) unsigned
,`create_date` datetime
);
-- --------------------------------------------------------

--
-- Estructura para la vista `v_ratings`
--
DROP TABLE IF EXISTS `v_ratings`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ratings` AS select `ar`.`id_article` AS `id_article`,`ar`.`id_page` AS `id_page`,`pa`.`controller` AS `controller`,`ar`.`title` AS `title`,`ar`.`counter` AS `counter` from (`article` `ar` left join `page` `pa` on((`ar`.`id_page` = `pa`.`id_page`))) order by `ar`.`counter` desc;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_tablon`
--
DROP TABLE IF EXISTS `v_tablon`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tablon` AS select `a`.`id_article` AS `id_article`,`a`.`id_page` AS `id_page`,`p`.`controller` AS `controller`,`a`.`title` AS `title`,concat(left(`a`.`content`,240),'...') AS `content`,`a`.`counter` AS `counter`,`a`.`create_date` AS `create_date` from (`article` `a` left join `page` `p` on((`a`.`id_page` = `p`.`id_page`))) order by `a`.`create_date` desc;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_id_page` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
