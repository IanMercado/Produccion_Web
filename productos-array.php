<?php

include_once("productos.json");



if (isset($_REQUEST['id_marca']))
    $id_marca = $_REQUEST['id_marca'];
else
    $id_marca = array();

$array_productos = array ( 

    '1' => array ('id_marca' => '1', // La marca 1 es la marca LOGITECH 
     'nombre_marca' => 'Logitech',
     'id_categoria' => '1', // La categoria 1 es AURICULARES
     'nombre_categoria' => 'Auriculares',
     'id_producto' => '1', // Basicamente es un ID unico para cada producto
     'nombre_producto' => 'AURICULARES USB H390',
     'precio' => '49.00',
     'destacado'=> false,
     'descripcion' => 'Te sentirás realmente cómodo con estos auriculares gracias a las almohadillas afelpadas 
     y a la diadema que se ajusta a la perfección.
     No tendrás que luchar contra el ruido de fondo para que te oigan.'),

    '2' => array ('id_marca' => '1', // La marca 1 es la marca LOGITECH 
    'nombre_marca' => 'Logitech',
    'id_categoria' => '1', // La categoria 1 es AURICULARES
    'nombre_categoria' => 'Auriculares',
    'id_producto' => '2',
    'nombre_producto' => 'AURICULARES STEREO G332',
    'precio' => '50.00',
    'destacado'=> false,
    'descripcion' => 'Los auriculares Logitech G332 para gaming permiten oír más de lo que pasa en el juego,
    con transductores grandes de 50 mm que ofrecen una reproducción de sonido completa.
     Disfruta de la experiencia completa de todos tus juegos favoritos.'),

    '3' => array ('id_marca' => '1', // La marca 1 es la marca LOGITECH 
    'nombre_marca' => 'Logitech',
    'id_categoria' => '1', // La categoria 1 es AURICULARES
    'nombre_categoria' => 'Auriculares',
    'id_producto' => '3',
    'nombre_producto' => 'AURICULARES A50 + BASE PS4 GEN4',
    'precio' => '70.00',
    'destacado' => false,
    'descripcion' => 'Experimenta la inmersión absoluta en tu audio. 
    Los A50 Wireless + Base de Carga para PS4/PC 
    entregan la acústica premium, ergonomía, comodidad y durabilidad que los gamers demandan.'),

    //¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ACA TERMINA LA CATEGORIA DE AURICULARES!!!!!!!!!!!!!!!!!!!
    //¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡COMIENZA LA CATEGORIA DE MOUSE!!!!!!!!!!!!!!!!!!!

    '4' => array ('id_marca' => '1',
    'nombre_marca' => 'Logitech',
    'id_categoria' => '2', // La categoria 2 es MOUSE
    'nombre_categoria' => 'Mouse',
    'id_producto' => '4',
    'nombre_producto' => 'MOUSE INALÁMBRICO M280',
    'precio' => '28.00',
    'destacado' => true,
    'descripcion' => 'M280 Mouse inalámbrico con diseño contorneado para la mano derecha. 
    Es la combinación perfecta de funcionalidad, estética y comodidad'),

    '5' => array ('id_marca' => '1',
    'nombre_marca' => 'Logitech',
    'id_categoria' => '2', // La categoria 2 es MOUSE
    'nombre_categoria' => 'Mouse',
    'id_producto' => '5',
    'nombre_producto' => 'MOUSE LOGITECH MX ANYWHERE 3',
    'precio' => '28.00',
    'destacado' => false,
    'descripcion' => 'Mouse compacto de alto rendimiento inalámbrico'),

    '6' => array ('id_marca' => '1',
    'nombre_marca' => 'Logitech',
    'id_categoria' => '2', // La categoria 2 es MOUSE
    'nombre_categoria' => 'Mouse',
    'id_producto' => '6',
    'nombre_producto' => 'MOUSE INALÁMBRICO M190 FULL SIZE',
    'precio' => '33.00',
    'destacado' => false,
    'descripcion' => 'Mouse Inalámbrico Logitech M190, Diseño Curvo Ambidiestro, 
    Batería 18 Meses con Modo Ahorro, Receptor USB, Cursor y Desplazamiento Preciso, 
    Rueda de Desplazamiento Amplio'),

    '7' => array ('id_marca' => '1',
    'nombre_marca' => 'Logitech',
    'id_categoria' => '3', // La categoria 3 es TECLADO 
    'nombre_categoria' => 'Teclado',
    'id_producto' => '7',
    'nombre_producto' => 'TECLADO INALÁMBRICO CON TOUCHPAD K400 PLUS',
    'precio' => '32.00',
    'destacado' => false,
    'descripcion' => 'K400 Teclado inalámbrico , touchpad integrado, diseño compacto, teclas Multimedia. '),

    '8' => array ('id_marca' => '1',
    'nombre_marca' => 'Logitech',
    'id_categoria' => '3', // La categoria 3 es TECLADO 
    'nombre_categoria' => 'Teclado',
    'id_producto' => '8',
    'nombre_producto' => 'TECLADO INALÁMBRICO K230',
    'precio' => '32.00',
    'destacado' => false,
    'descripcion' => 'K230 Teclado inalámbrico, diseño compacto. Teclado en Español'  ),

    '9' => array ('id_marca' => '1',
    'nombre_marca' => 'Logitech',
    'id_categoria' => '3', // La categoria 3 es TECLADO
    'nombre_categoria' => 'Teclado',
    'id_producto' => '9',
    'nombre_producto' => 'TECLADO INALÁMBRICO ILUMINADO AVANZADO MX KEYS',
    'precio' => '32.00',
    'destacado' => true,
    'descripcion' => 'Presentamos MX Keys, un avanzado teclado inalámbrico iluminado con teclas para pulsaciones perfectas contorneadas para las yemas de los dedos, 
    iluminación inteligente y construcción extraordinariamente sólida.'),

        // MARCA LOGITECH COMPLETA. ACA TERMINA EL ARRAY DE LOGITECH
        // MARCA LOGITECH COMPLETA. ACA TERMINA EL ARRAY DE LOGITECH
        // MARCA LOGITECH COMPLETA. ACA TERMINA EL ARRAY DE LOGITECH
        // MARCA LOGITECH COMPLETA. ACA TERMINA EL ARRAY DE LOGITECH
        // MARCA LOGITECH COMPLETA. ACA TERMINA EL ARRAY DE LOGITECH

    '10' => array(
    'id_marca' => '2', // la marca 2 es NOGA 
    'nombre_marca' => 'NOGA',
    'id_categoria' => '1',
    'nombre_categoria' => 'Auriculares',
    'id_producto' => '10',
    'nombre_producto' => 'AURICULARES GAMER 7.1 VIRTUAL CHANNEL CON MICRÓFONO',
    'precio' => '60.00',
    'destacado' => false,
    'descripcion' => 'Noga te presenta MISFIT, Auriculares 7.1 Virtual Channel que te permitirán 
     disfrutar de tus juegos en PC y Consolas gracias a su Sonido 7.1 con Extra Power Bass,
     MISFIT que te hará vivir una experiencia gamer como nunca antes.'
    ),
    '11' => array(
    'id_marca' => '2', // la marca 2 es NOGA
    'nombre_marca' => 'NOGA',
    'id_categoria' => '1',
    'nombre_categoria' => 'Auriculares',
    'id_producto' => '11',
    'nombre_producto' => 'AURICULARES GAMER ST-342',
    'precio' => '60.00',
    'destacado' => false,
    'descripcion' => 'Los Auriculares ST-8104 te brindan sonido, diseño y confort gamer tanto en PC como en Consolas.
    Su sonido envolvente y sus bajos potentes (Bass Power) te harán vivir una experiencia de audio inmersiva.'
    ),
    '12' => array (
    'id_marca' => '2', // la marca 2 es NOGA 
    'nombre_marca' => 'NOGA',
    'id_categoria' => '1',
    'nombre_categoria' => 'Auriculares',
    'id_producto' => '12',
    'nombre_producto' => 'AURICULARES GAMER ST-BRASH',
    'precio' => '60.00',
    'destacado' => false,
    'descripcion' => 'Diseño Gamer confortable y ajustable.
    Disfrutá plenamente de tus juegos y tu música con un sonido de Alta Definición. '
    ),
    '13' => array(
        'id_marca' => '2', // la marca 2 es NOGA
        'nombre_marca' => 'NOGA',
        'id_categoria' => '2',
        'nombre_categoria' => 'Mouse',
        'id_producto' => '13',
        'nombre_producto' => 'MOUSE GAMER RETROILUMINADO',
        'precio' => '30.00',
        'destacado' => false,
        'descripcion' => 'Mouse Gamer Retroiluminado con 3 cambios de colores.
        Posee terminación en Rubber Finish.'
    ),
    '14' => array(
        'id_marca' => '2', // la marca 2 es NOGA
        'nombre_marca' => 'NOGA',
        'id_categoria' => '2',
        'nombre_categoria' => 'Mouse',
        'id_producto' => '14',
        'nombre_producto' => 'MOUSE GAMER 12000 DPI ST-333',
        'precio' => '35.00',
        'destacado' => false,
        'descripcion' => 'El Mouse Gamer ST-333 es muy superior a todo lo conocido
         ya que posee una Resolución Máxima de 12000 DPI.Diseño Ultra-Ergonómico con excelente estabilidad
          y deslizamiento. Presentación en Pack Premium.'
    ),
    '15' => array(
        'id_marca' => '2', // la marca 2 es NOGA
        'nombre_marca' => 'NOGA',
        'id_categoria' => '2',
        'nombre_categoria' => 'Mouse',
        'id_producto' => '15',
        'nombre_producto' => 'MOUSE GAMER STORMER SERIES',
        'precio' => '35.00',
        'destacado' => false,
        'descripcion' => 'Sentí todo el poder en tu mano.'
    ),
    '16' => array(
        'id_marca' => '2', // la marca 2 es NOGA
        'nombre_marca' => 'NOGA',
        'id_categoria' => '3',
        'nombre_categoria' => 'Teclado',
        'id_producto' => '16',
        'nombre_producto' => 'TECLADO SEMI-MECÁNICO NKB-HYBRID',
        'precio' => '32.00',
        'destacado' => false,
        'descripcion' => 'HYBRID es un teclado de
         Alta Calidad de construcción con teclas de doble inyección generando una mayor vida útil.'
    ),
    '17' => array(
        'id_marca' => '2', // la marca 2 es NOGA
        'nombre_marca' => 'NOGA',
        'id_categoria' => '3',
        'nombre_categoria' => 'Teclado',
        'id_producto' => '17',
        'nombre_producto' => 'TECLADO NKB-560',
        'precio' => '32.00',
        'destacado' => false,
        'descripcion' => 'El NKB-560 es un Teclado Gamer compacto de Alta Calidad.
        Construído con Sistema de Doble Inyección y Ultra-Silencioso.
        La elevación de sus teclas brindan comodidad y una gran suavidad al tacto.'    
    ),
    '18' => array(
        'id_marca' => '2', // la marca 2 es NOGA
        'nombre_marca' => 'NOGA',
        'id_categoria' => '3',
        'nombre_categoria' => 'Teclado',
        'id_producto' => '18',     
        'nombre_producto' => 'TECLADO GAMER STORMER SERIES',
        'precio' => '32.00',
        'destacado' => false,
        'descripcion' => 'Teclado Gamer ideal para jugadores de multiplayer on-line, rpg, first person shooter 
        y cualquier juego con interface basada en Teclado + Mouse disponible en el mercado.'
    ),
    
        // MARCA NOGA COMPLETA. ACA TERMINA EL ARRAY DE NOGA
        // MARCA NOGA COMPLETA. ACA TERMINA EL ARRAY DE NOGA
        // MARCA NOGA COMPLETA. ACA TERMINA EL ARRAY DE NOGA
        // MARCA NOGA COMPLETA. ACA TERMINA EL ARRAY DE NOGA
        // MARCA NOGA COMPLETA. ACA TERMINA EL ARRAY DE NOGA

    '19' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '1',  
        'nombre_categoria' => 'Auriculares',
        'id_producto' => '19',     
        'nombre_producto' => 'DS501 GAMNING',
        'precio' => '31.00',
        'destacado' => false,
        'descripcion' => 'Los auriculares DS501 GAMNING son cómodos sobre tu cabeza y orejas 
        para sesiones de gaming extensas.'   
    ),
    '20' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '1', 
        'nombre_categoria' => 'Auriculares', 
        'id_producto' => '20',     
        'nombre_producto' => 'DS502 GAMING HEADSET',
        'precio' => '31.00',
        'destacado' => false,
        'descripcion' => 'Los parlantes de alta calidad ofrecen más detalle en frecuencia alta, media y baja.
        La función mejorada de reducción de ruido y los protectores de gran tamaño permiten menos interferencia
         y son más cómodos, permitiéndote enfocarte completamente en tu juego.'  
    ),
    '21' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '1', 
        'nombre_categoria' => 'Auriculares', 
        'id_producto' => '21',     
        'nombre_producto' => 'IMMERSE GH20',
        'precio' => '31.00',
        'destacado' => false,
        'descripcion' => 'GH20 es liviano y portátil, con un peso de apenas 245 gramos. 
        Este headset te resultará cómodo aún durante las largas sesiones de juego.'  
    ),
    '22' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '2',  
        'nombre_categoria' => 'Mouse',
        'id_producto' => '22',     
        'nombre_producto' => 'CLUTCH GM40 BLACK',
        'precio' => '20.00',
        'destacado' => false,
        'descripcion' => 'El Mouse Clutch GM40 Gaming está diseñado para el gaming con su forma sólida y funciones únicas. 
        Con un preciso sensor óptico de hasta 5000 dpi, los gamers tienen más control sobre su juego.'  
    ),
    '23' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '2', 
        'nombre_categoria' => 'Mouse',
        'id_producto' => '23',     
        'nombre_producto' => 'INTERCEPTOR DS300',
        'precio' => '23.00',
        'destacado' => false,
        'descripcion' => 'El diseño para mano derecha del mouse DS300 asegura el agarre más cómodo para los gamers.
        Tiene bandas laterales de goma para asegurar el control total.' 
    ), 
    '24' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '2',
        'nombre_categoria' => 'Mouse',
        'id_producto' => '24',     
        'nombre_producto' => 'INTERCEPTOR DS200 GAMING MOUSE',
        'precio' => '20.00',
        'destacado' => false,
        'descripcion' => 'Con un peso de apenas 65 gramos, el GM41 ultraliviano es perfecto para el juego competitivo, 
        permitiendo a los gamers mover y apuntar sin esfuerzo, con agilidad y precisión.' 
    ),
    '25' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '3',
        'nombre_categoria' => 'Teclado',
        'id_producto' => '25',     
        'nombre_producto' => 'VIGOR GK70',
        'precio' => '20.00',
        'destacado' => false,
        'descripcion' => 'Utilizando los interruptores mecánicos Cherry MX Red/ Silver,
         el modelo de interruptor más popular del mundo, te ofrecemos una excelente retroalimentación
          y más de 50 millones de ciclos. 
        Especialmente para gamers con baja distancia de actuación.'   
    ),
    '26' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '3',
        'nombre_categoria' => 'Teclado',
        'id_producto' => '26',     
        'nombre_producto' => 'VIGOR GK20',
        'precio' => '23.00',
        'destacado' => true,
        'descripcion' => 'El diseño ergonómico con teclas de forma cóncava 
        permite una experiencia de juego y escritura más confortable. 
        El efecto de arco iris del GK20 es un despliegue de luz multicolor, 
        que puedes atenuar o apagar si lo deseas.'     
    ),
    '27' => array(
        'id_marca' => '3', // La marca 3 es MSI
        'nombre_marca' => 'MSI',
        'id_categoria' => '3',
        'nombre_categoria' => 'Teclado',
        'id_producto' => '27',     
        'nombre_producto' => 'INTERCEPTOR DS4100 GAMING KEYBOARD',
        'precio' => '20.00',
        'destacado' => true,
        'descripcion' => 'El interruptor mecánico INTERCEPTOR DS4100 está confeccionado para gamers
         que buscan un teclado mecánico preciso que requiera un toque de teclas más liviano.'    
    ),
);

//  ¡RECORDAR= (3 ES TECLADO, 2 ES MOUSE, 1 ES AURICULARES)
   //  ¡RECORDAR = (ID1 ES LOGITECH, ID2 ES NOGA, ID3 ES MSI)

$fp = fopen( 'productos.json', 'w');
fwrite($fp, json_encode($array_productos));
fclose($fp);

$fp = fopen ('productos.json', 'r');
$json_productos = fread($fp, filesize('productos.json'));
fclose($fp);

$array_productos = json_decode($json_productos, true);

echo '<pre>';
print_r($array_productos);
echo '</pre>';
