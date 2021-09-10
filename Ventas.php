<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!-- ----- fonts---- -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <!-- ---- Boostrap----- -->
    <link rel="stylesheet" href="externos/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/venta.css">
    <!--WhatsApp-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/whats.css">

</head>

<body>

    <!-----Encabezado con las secciones------->
    <header>
        <input type="checkbox" id="btn_menu">
        <label for="btn_menu"><img src="img/iconos/menu.ico" alt="" width="30%"></label>
        <nav class="Menu">
            <a href="#" class=""><img src="img/iconos/Real_peninsula_Logo_.png" alt=""></a>
            <ul>
                <li> <a href="index.php">INICIO</a> </li>
                <li> <a href="#Presentacion">NOSOTROS</a> </li>
                <li> <a href="#Servicios">SERVICIOS</a> </li>
                <li> <a href="#Ventas.php">VENTAS</a> </li>
                <li> <a href="#Marketing">MARKETING INMOBILIARIO</a> </li>
                <li> <a href="#Ubicacion">LOCALIZACION</a></li>
                <li> <a class="cinco" href="#Contacto">CONTACTO</a> </li>
            </ul>
        </nav>
    </header>

    <!---En esta seccion se presentan las ofertas, ventas de las opcionnes a presentar--->
    <div class="wrap">
        <h1>Real Peninsula®</h1>
        <div class="wrappe">
            <div class="category-list">
                <a href="#" class="category-item" category="all">TODO</a>
                <a href="#" class="category-item" category="propiedades">Propiedades</a>
                <a href="#" class="category-item" category="terrenos">Terrenos</a>
                <a href="#" class="category-item" category="inversiones">Inversiones</a>
            </div>
            <section class="properties-list">

                <!-- PROPIEDAD #1 -->
                <div class="propiedades " category="propiedades">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>El Doral</h1>
                        <p>Oportunidad de adquirir un lote de 1,543.74 m2 (forma irregular de 34.55 m por 59.92 m).</p>
                        <p> Ubicado en Privada Residencial a solo 1.5 Km de la carretera Mérida-Progreso.</p>
                        <p>MEDIDAS: 1,543.74 m2 irregular frente 34.55m por 59.92 mayor fondo</p>

                        <!-- VENTANA MODEL DE LA INFORMACION TOTAL DE LA PROPIEDAD -->
                        <a href="#modal" class="btn-open-modal">Mas información</a>
                        <div class="container-all" id="modal">
                            <div class="popup">
                                <div class="img"></div>
                                <div class="container-text">
                                    <h1>El Doral</h1>
                                    <p>Equipamiento:</p>
                                    <ul>
                                        <li>Las calles con iluminación night lighting</li>
                                        <li>Caseta de Vigilancia 24 Horas</li>
                                        <li>Cámaras con circuito cerrado en parque lineal.</li>
                                        <li>Barda Perimetral 3 m de altura.</li>
                                        <li>Control de acceso vehicular mediante tags electrónicos y pluma de entrada
                                            automática.</li>
                                    </ul>
                                    <p>Control de acceso vehicular mediante tags electrónicos y pluma de entrada
                                        automática</p>
                                    <p>Rodeando a la casa club, también encontraremos:</p>
                                    <ul>
                                        <li>Cancha de usos múltiples</li>
                                        <li>Alberca para niños y otra para adultos con cascada y diseño rústico.</li>
                                        <li>Áreas de juegos infantiles </li>
                                        <li>Parque lineal con una pista de jogging, senderos y jardines arbolados.</li>
                                    </ul>
                                    <p>Propiedad en condominio. Cuenta con:</p>
                                    <ul>
                                        <li>Acometida de CFE. </li>
                                        <li>Servicios subterráneos</li>
                                    </ul>
                                    <p>La cuota de mantenimiento se empieza a pagar cuando se entregue el desarrollo.
                                        Entrega de desarrollo a finales de 2021 - principios 2022.</p>
                                    <a
                                        href="https://maps.google.com/maps?q=21.184337%2C-89.6379334&z=17&hl=es">UBICACIÓN</a>
                                </div>
                                <a href="#" class="btn-close-modal">X</a>
                            </div>
                        </div>

                        <h2>$1,650,000 MXM</h2>
                    </div>
                </div>

                <!-- PROPIEDAD #2 -->
                <div class="propiedades " category="propiedades">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>Titulo de la propiedad</h1>
                        <p>Oportunidad de vivir dentro de la ciudad, en ubicación privilegiada al Norte de Mérida, cerca
                            de centros comerciales, escuelas y fácil acceso a avenidas principales.
                            El terreno de la casa colinda con 2 vialidades, por lo que hay posibilidad de tener un
                            segundo acceso.</p>
                        <p>Medidas:terreno 276.40 m2 frente: 8.3 m fondo: 33.3 m Construcción146.80m2</p>


                        <!-- VENTANA MODEL DE LA INFORMACION TOTAL DE LA PROPIEDAD -->
                        <a href="#modal_2" class="btn-open-modal">Mas información</a>
                        <div class="container-all" id="modal_2">
                            <div class="popup">
                                <div class="img_2"></div>
                                <div class="container-text">
                                    <h1>TITULO DE LA PROPIEDAD</h1>
                                    <p> El terreno es de 8.3 m por 33.3 m de fondo, en la parte trasera se tiene un área
                                        muy amplia para disfrutar de la alberca, jardín y terraza.</p>
                                    <p>La casa tiene espacios amplios, equipada con aires acondicionados, ventiladores,
                                        mosquiteros, ventiladores, mosquiteros, bomba e instalación de alarma. </p>
                                    <p>Planta Alta con 3 recámaras:</p>
                                    <ul>
                                        <li> La recámara principal tiene closet, vestidor y baño, las otras dos
                                            recámaras tienen espacio destinado a closet y comparten un baño, los 3 están
                                            equipados con aire acondicionado y ventilador.</li>
                                    </ul>
                                    <p>Planta Baja:</p>
                                    <ul>
                                        <li> Tiene un área muy amplia con vestíbulo de acceso y sala, con un gran
                                            ventanal con vista a la piscina, separado se encuentra el comedor, cocina
                                            con barra, medio baño, área de lavado con batea e instalación para lavadora.
                                        </li>
                                    </ul>
                                    <a
                                        href="https://maps.google.com/maps?q=21.03467559814453%2C-89.63874053955078&z=17&hl=es ">UBICACIÓN</a>
                                </div>
                                <a href="#" class="btn-close-modal">X</a>
                            </div>
                        </div>
                        <h2>$2,500,000 MXM / Minimo: $2,350,000 MXM</h2>
                        <p>Metodo de pago crédito bancario, hipotecario y efectivo. </p>
                    </div>
                </div>

                <!-- PROPIEDAD #3 -->
                <div class="propiedades" category="terrenos">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>Madero 54 townhouse</h1>
                        <p>INCREÍBLE CASA EN PRIVADA A MINUTOS DE UNIVERSIDADES Y CENTROS COMERCIALES.</p>
                        <p>Metros totales 96 m2 y de construcción 135.60m2</p>

                        <!-- VENTANA MODEL DE LA INFORMACION TOTAL DE LA PROPIEDAD -->
                        <a href="#modal_3" class="btn-open-modal">Mas información</a>
                        <div class="container-all" id="modal_3">
                            <div class="popup">
                                <div class="img_3"></div>
                                <div class="container-text">
                                    <h1>Madero 54 townhouse</h1>
                                    <p>TownHouse de 2 niveles</p>
                                    <p>Planta baja:</p>
                                    <ul>
                                        <li>Sala</li>
                                        <li>Comedor</li>
                                        <li>Cocina con trabajos de carpintería</li>
                                        <li>Alacena con trabajos de carpintería</li>
                                        <li>1/2 baño de visitas</li>
                                        <li>Cochera pergolada para 2 autos</li>
                                    </ul>
                                    <p>Planta Alta:</p>
                                    <ul>
                                        <li>Recámara con baño y clóset instalado de madera.</li>
                                        <li>Recámara principal con baño.</li>
                                        <li>Clóset instalado de madera y Sala para TV.</li>
                                        <li>2 recámaras con baño y clóset.</li>
                                        <li>A/C y ventiladores.</li>
                                        <li>Sala de TV.</li>
                                    </ul>
                                    <p>Incluye:</p>
                                    <ul>
                                        <li>Parilla eléctrica</li>
                                        <li>Cocina con barra de granito negro y concreto pulido</li>
                                        <li>Cancel en baños de recámaras</li>
                                        <li>Espejos en baños</li>
                                        <li>Hidroneumático</li>
                                        <li>Biodigestor</li>
                                        <li>Cisterna y tinaco</li>
                                        <li>Iluminación LED</li>
                                        <li>Aire Acondicionado en las 2 recámaras y en la Sala</li>
                                        <li>4 ventiladores en techo ubicados en las recámaras</li>
                                        <li>En la Sala TV y el la Sala planta baja</li>
                                    </ul>
                                    <p>Amenidades de la privada: Casa Club para fiestas y reuniones con acabados de
                                        madera y lujo, área de picnic, área de asado, alberca y área de juegos para
                                        niños, estacionamiento para visitas, acceso controlado, bardeado, Jardín</p>
                                    <p>Dirección : Tablaje 20876 Lote 9 Fraccionamiento Madero 54 C.P. 97240</p>
                                </div>
                                <a href="#" class="btn-close-modal">X</a>
                            </div>
                        </div>
                        <h2>Precio de venta: $ 2,899,000 MXM <br>
                            Precio de renta: $16,000 MXM</h2>
                        <p>Opciones de pago: Crédito infonavit, bancario, hipotecario y de contado.</p>
                    </div>
                </div>

                <!-- PROPIEDAD #4 -->
                <div class="propiedades" category="inversiones">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>Casa 1 - Montebello</h1>
                        <p>Construccion: 358.08 </p>
                        <p>Metros de terreno: 346.5
                            Medidas de terrenos 11.50 mt2 de frente X 30.13 mt2 fondo .</p>

                        <!-- VENTANA MODEL DE LA INFORMACION TOTAL DE LA PROPIEDAD -->
                        <a href="#modal_4" class="btn-open-modal">Mas información</a>
                        <div class="container-all" id="modal_4">
                            <div class="popup">
                                <div class="img_4"></div>
                                <div class="container-text">
                                    <h1>Casa 1 - Montebello</h1>
                                    <p> Planta Baja : </p>
                                    <ul>
                                        <li>Garage techado para 2 autos con portón eléctrico.</li>
                                        <li>Sala y comedor con vista al jardín trasero.</li>
                                        <li>Baño completo para visitas.</li>
                                        <li>Bajo las escaleras bodega.</li>
                                        <li>Cocina vista a la piscina</li>
                                        <li>Cuarto de alacena.</li>
                                        <li>Cuarto de lavado</li>
                                        <li>Cuarto de servicio con baño completo</li>
                                        <li>Jardin trasero amplio</li>
                                        <li>piscina (4 M x 6 M profundidad 1.60 y cuenta con filtro automático) y
                                            terraza</li>
                                        <li>Sala de Star para visitas con vista al jardín trasero</li>
                                    </ul>
                                    <p>Planta Alta:</p>
                                    <ul>
                                        <li>Habitación principal muy amplia con closet vestidor y baño completo cuenta
                                            con terraza individual</li>
                                        <li>2 habitaciónes jr área de closet con baños completos y terraza compartida
                                            con vista al jardín</li>
                                        <li>Pequeña sala </li>
                                    </ul>
                                    <p>Tambien cuenta con:</p>
                                    <ul>
                                        <li>Cuenta con Cámaras de seguridad </li>
                                        <li>Con cerca electrica.</li>
                                        <li>Tanque se gas estacionario de 150 lts.</li>
                                        <li>Muy iluminada</li>
                                        <li>Bomba de agua con despresurizador .</li>
                                    </ul>
                                    <h2>3 Minutos de la plaza City Center</h2>
                                </div>
                                <a href="#" class="btn-close-modal">X</a>
                            </div>
                        </div>
                        <h2> $6,500,000 MXM</h2>
                    </div>
                </div>

                <!-- PROPIEDAD #5 -->
                <div class="propiedades" category="propiedades">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>Casa 2 - Montebello</h1>
                        <p>Terreno 12 x 40, Construcción : 500 m2</p>
                        <p>Planta Baja:</p>
                        <ul>
                            <li>Sala a doble altura</li>
                            <li>Cocina vestida con meseta de granito, alacena de dzalam</li>
                            <li>Sala de cine</li>
                            <li>Piscina con iluminación</li>
                            <li>Bar con piso de mármol</li>
                            <li>Cuarto de servicio </li>
                            <li>Baño para visitas</li>
                            <li>Jardín interior</li>
                            <li>Jardín exterior</li>
                        </ul>
                        <p>Planta Alta:</p>
                        <ul>
                            <li>4 recámaras con closet-vestidor, balcón y baño cada una</li>
                        </ul>
                        <h2>$8,040,000.00 MXM</h2>
                    </div>
                </div>

                <!-- PROPIEDAD #6 -->
                <div class="propiedades" category="inversiones">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>CASA CHUBURNA</h1>
                        <p>JUNTO ITALIAN COFFE CALLE 60 </p>
                        <p>TIENE HIPOTECA</p>

                        <!-- VENTANA MODEL DE LA INFORMACION TOTAL DE LA PROPIEDAD -->
                        <a href="#modal_6" class="btn-open-modal">Mas información</a>
                        <div class="container-all" id="modal_6">
                            <div class="popup">
                                <div class="img_6"></div>
                                <div class="container-text">
                                    <h1>CASA CHUBURNA</h1>
                                    <p> Planta Baja:</p>
                                    <ul>
                                        <li>Entrada con garaje para 4 autos</li>
                                        <li>Recibidor</li>
                                        <li>Sala a doble altura</li>
                                        <li>Oficina</li>
                                        <li>Cubo de luz</li>
                                        <li>Comedor</li>
                                        <li>Amplia cocina con vista al comedor</li>
                                        <li>Medio baño</li>
                                        <li>Terraza</li>
                                        <li>Piscina 6 x 4</li>
                                        <li>Bar</li>
                                        <li>Cuarto de servicio con baño completo</li>
                                        <li>Cuarto de lavado</li>
                                        <li>Area de tendido</li>
                                        <li>Jardín</li>
                                    </ul>
                                    <p>Planta Alta:</p>
                                    <ul>
                                        <li>Recamara principal con jacuzzi, vestidor , baño</li>
                                        <li>3 Recamaras con baño y closet</li>
                                        <li>Pasillo con vista hacia la sala</li>
                                        <li>Area de TV</li>
                                        <li>Muebles para blancos</li>
                                    </ul>
                                    <p>Tambien cuenta con:</p>
                                    <ul>
                                        <li>Toda la madera es de cedro </li>
                                        <li>Piedra de cantera en exterior y pilares</li>
                                        <li>Mármol en cocina y baños</li>
                                        <li>Lámparas de ónix en los baños</li>
                                        <li>Teja </li>
                                        <li>Portón eléctrico</li>
                                        <li>Sistema Hidroneumatico</li>
                                        <li>Interfón</li>
                                        <li>Instalación para conmutador</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn-close-modal">X</a>
                            </div>
                        </div>
                        <h2> $ 5,720,000 MXM a tratar</h2>
                    </div>
                </div>

                <!-- PROPIEDAD #7 -->
                <div class="propiedades" category="terrenos">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>Terreno Dzityá</h1>
                        <p>En venta terreno con plusvalía 30% MAYOR que el de la zona. ALTO potencial de construcción.
                        </p>
                        <p>Cuenta con planos, permisos y un avance de obra (demolición opcional)</p>
                        <p>Atención al constructor, el terreno cuenta con agua potable y electricidad provocando una
                            pronta recuperación por la agilidad del crédito de vivienda</p>
                        <p>Se encuentra por Fraccionamiento Las Americas con acceso por Av. Dzitya/ Fraccionamiento Las
                            Americas .</p>
                        <p>Más información y citas al 9993 500 6000 o al 9992 2 57 98.</p>



                        <!-- VENTANA MODEL DE LA INFORMACION TOTAL DE LA PROPIEDAD -->
                        <a href="#modal_7" class="btn-open-modal">Mas información</a>
                        <div class="container-all" id="modal_7">
                            <div class="popup">
                                <div class="img_7"></div>
                                <div class="container-text">
                                    <h1>Terreno Dzityá</h1>
                                    <p> Cuenta con servicios:</p>
                                    <ul>
                                        <li>Pavimentos</li>
                                        <li>Aceras y banquetas</li>
                                        <li>Drenaje pluvial</li>
                                        <li>Internet</li>
                                        <li>Recolección de basura</li>
                                        <li>Alumbrado público</li>
                                    </ul>
                                    <p>Cercania con:</p>
                                    <ul>
                                        <li>Universidad Marista a 5km</li>
                                        <li>Hospital de alta especialidad a 10km</li>
                                        <li>Sports World a 7km</li>
                                        <li>Walmart a 7km</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn-close-modal">X</a>
                            </div>
                        </div>
                        <h2> $ 1,900,000 MXM</h2>
                    </div>
                </div>

                <!-- PROPIEDAD #8 -->
                <div class="propiedades" category="terrenos">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>Rancho hacienda TELCHAC</h1>
                        <p>Excelente oportunidad, invierte en RANCHO CON CASCO DE HACIENDA en perfectas condiciones. 43
                            HECTÁREAS EN #TELCHACYUCATÁN! A 42km de Mérida y a 1km de la playa.</p>
                        <p>100 años de antigüedad con alto potencial turístico y/o #ganadero</p>
                        <p>La propiedad se encuentra en Telchac a 5 minutos de la playa y 1:30hrs de Mérida. Es uno de
                            los destinos turísticos más populares de la península. </p>
                        <p>Se encuentra por Fraccionamiento Las Americas con acceso por Av. Dzitya/ Fraccionamiento Las
                            Americas .</p>


                        <!-- VENTANA MODEL DE LA INFORMACION TOTAL DE LA PROPIEDAD -->
                        <a href="#modal_8" class="btn-open-modal">Mas información</a>
                        <div class="container-all" id="modal_8">
                            <div class="popup">
                                <div class="img_8"></div>
                                <div class="container-text">
                                    <h1>Rancho hacienda TELCHAC</h1>
                                    <p>Cuenta con: </p>
                                    <ul>
                                        <li>Casa en 4 niveles (Nivel 1 y 2 con habitaciones lofts con baño propio. Nivel
                                            3 terraza.Nivel 4 mirador con palapa y piscina infantil.)</li>
                                        <li>Sala comedor</li>
                                        <li>Salón de fiestas</li>
                                        <li>Caballeriza para animales</li>
                                        <li>Transformador</li>
                                        <li>Pasto especial para ganado</li>
                                        <li>3 pozos profundos</li>
                                        <li>Casa de vigilante</li>
                                    </ul>
                                    <p>Medidas: </p>
                                    <ul>
                                        <li>Tiene 43 hectáreas </li>
                                        <li>Terreno de 430,000m2. </li>
                                        <li>Construidos 700m2</li>
                                        <li>Urbanizada con agua y luz eléctrica & Cuenta con un cenote-piscina.</li>
                                    </ul>
                                    <p>Envíanos un mensaje para recibir el brochure con toda la información.</p>
                                </div>
                                <a href="#" class="btn-close-modal">X</a>
                            </div>
                        </div>
                        <h2> $ 30,500,000 MXM</h2>
                    </div>
                </div>

                <!-- PROPIEDAD #9 -->
                <div class="propiedades" category="terrenos">
                    <div class="visual">
                        <img src="img/Propiedades.jpeg" alt="">
                    </div>
                    <div class="info">
                        <h1>Terreno Av. Aviación</h1>
                        <p>¿Estás buscando construir en Mérida? Bodega para flotilla, comercio, estacionamiento etc.</p>
                        <p>Terreno de 3,333mt2 dentro de la ciudad, con 2 accesos a la avenida principal. A 5 minutos del Aeropuerto Internacional de Mérida.</p>
                        <p>ALTO VALOR COMERCIAL PARA TU PROYECTO.</p>
                        <p>Envía un mensaje al 999 982 2222 para pedir informes, trato directo.</p>

                       <a href="https://goo.gl/maps/P5nBWCFQJtBfKfzV9">UBICACIÓN</a>
                        <h2> $ 8,800,000 MXM</h2>
                    </div>
                </div>

            </section>
        </div>



        <footer>
            <div class="rpa_cont_footer ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-3 ">
                            <h2>Contacto</h2>
                            <p><i class="icon-mobile "> 9992235798</i></p>
                            <p><i class="icon-mail-alt "> realstatepeninsula@gmail.com </i></p>
                        </div>
                        <div class="1 col-md-3  ">
                            <h2>Categorias</h2>
                            <a href="index.html" style="text-decoration: none;">Inicio</a> <br>
                            <a href="#Presentacion" style="text-decoration: none;">Nosotros</a> <br>
                            <a href="#Servicios" style="text-decoration: none;">Servicios</a> <br>
                            <a href="#Ventas" style="text-decoration: none;">Ventas</a> <br>
                            <a href="#Marketing" style="text-decoration: none;">Marketing Inmobiliario</a> <br>
                            <a href="#Contacto" style="text-decoration: none;">Contacto</a>
                        </div>
                        <div class="2 col-md-3 ">
                            <h2>Empresas Aliadas</h2>
                            <img src="img/iconos/REMAX.png " class="img-fluid " width="8% " alt="RE/MAX "> Inmobiliaria
                            RE/MAX Otoch
                        </div>
                        <div class=" col-md-3 ">
                            <h2>Redes Sociales:</h2>
                            <div class="redes">
                                <a href="https://www.facebook.com/realpeninsulaoficial/ "><svg
                                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                        viewBox="0 0 226 226" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,226v-226h226v226z" fill="none"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M40.68,18.08c-12.42781,0 -22.6,10.17219 -22.6,22.6v144.64c0,12.42781 10.17219,22.6 22.6,22.6h76.08078c0.48812,0.08068 0.98618,0.08068 1.4743,0h25.6457c0.48812,0.08068 0.98618,0.08068 1.4743,0h39.96492c12.42781,0 22.6,-10.17219 22.6,-22.6v-144.64c0,-12.42781 -10.17219,-22.6 -22.6,-22.6zM40.68,27.12h144.64c7.54155,0 13.56,6.01845 13.56,13.56v144.64c0,7.54155 -6.01845,13.56 -13.56,13.56h-36.16v-63.28h17.26781l6.32977,-31.64h-23.59758v-9.04c0,-2.51986 0.23979,-2.71684 1.08586,-3.26641c0.84608,-0.54957 3.46046,-1.25359 7.95414,-1.25359h13.56v-25.45148l-2.57781,-1.22711c0,0 -10.38263,-4.96141 -24.54219,-4.96141c-10.17,0 -18.52482,4.05197 -23.87125,10.735c-5.34643,6.68303 -7.76875,15.63167 -7.76875,25.425v9.04h-13.56v31.64h13.56v63.28h-72.32c-7.54155,0 -13.56,-6.01845 -13.56,-13.56v-144.64c0,-7.54155 6.01845,-13.56 13.56,-13.56zM144.64,67.8c9.39736,0 15.31087,2.07222 18.08,3.1693v10.3907h-4.52c-5.20172,0 -9.37016,0.4303 -12.88023,2.71023c-3.51007,2.27996 -5.19977,6.60771 -5.19977,10.84977v18.08h21.60242l-2.71023,13.56h-18.89219v72.32h-18.08v-72.32h-13.56v-13.56h13.56v-18.08c0,-8.28667 2.09768,-15.15803 5.79125,-19.775c3.69357,-4.61697 8.89875,-7.345 16.80875,-7.345z">
                                                </path>
                                            </g>
                                            <path d="M0,226v-226h226v226z" fill="none"></path>
                                            <path d="M4.52,221.48v-216.96h216.96v216.96z" fill="none"></path>
                                        </g>
                                    </svg></a>
                                <a href="https://www.instagram.com/serviciosintegralesrealp/ "><svg
                                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                        viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M55.04,10.32c-24.65626,0 -44.72,20.06374 -44.72,44.72v61.92c0,24.65626 20.06374,44.72 44.72,44.72h61.92c24.65626,0 44.72,-20.06374 44.72,-44.72v-61.92c0,-24.65626 -20.06374,-44.72 -44.72,-44.72zM55.04,17.2h61.92c20.9375,0 37.84,16.9025 37.84,37.84v61.92c0,20.9375 -16.9025,37.84 -37.84,37.84h-61.92c-20.9375,0 -37.84,-16.9025 -37.84,-37.84v-61.92c0,-20.9375 16.9025,-37.84 37.84,-37.84zM127.28,37.84c-3.79972,0 -6.88,3.08028 -6.88,6.88c0,3.79972 3.08028,6.88 6.88,6.88c3.79972,0 6.88,-3.08028 6.88,-6.88c0,-3.79972 -3.08028,-6.88 -6.88,-6.88zM86,48.16c-20.85771,0 -37.84,16.98229 -37.84,37.84c0,20.85771 16.98229,37.84 37.84,37.84c20.85771,0 37.84,-16.98229 37.84,-37.84c0,-20.85771 -16.98229,-37.84 -37.84,-37.84zM86,55.04c17.13948,0 30.96,13.82052 30.96,30.96c0,17.13948 -13.82052,30.96 -30.96,30.96c-17.13948,0 -30.96,-13.82052 -30.96,-30.96c0,-17.13948 13.82052,-30.96 30.96,-30.96z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg></a>
                            </div>
                            <br>
                            <p>Calle 33 519 x 42 y 46, Col, Gonzalo Guerrero, 97115 Mérida, Yuc., Mexico</p>
                        </div>
                    </div>
                    <div class="final">
                        <hr>
                        <h3>Real Peninsula® 2021 | TODOS LOS DERECHOS RESERVADOS</h3>
                    </div>
                </div>
            </div>
        </footer>


        <!--Icono de WhatsApp-->
        <section>
            <div class="whatsapp ">
                <a href="https://api.whatsapp.com/send?phone=529996464432&text=Hola%20real%20peninsula%20necesito%20informacion%20sobre... "
                    class="float " target="_blank ">
                    <i class="fa fa-whatsapp my-float "></i>
                </a>
            </div>
        </section>

        <script src="externos/boostrap/js/jquery.js "></script>
        <script src="externos/boostrap/js/bootstrap.min.js "></script>
        <script src="js/index_.js "></script>
        <script src="js/jquery.flexslider.js "></script>
        <script src="js/benner.js "></script>
        <script src="js/script.js"></script>

</body>

</html>