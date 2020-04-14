<?php

use App\Categories;
use App\Sales;
use Illuminate\Database\Seeder;

class HeadphonesProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Categories::create([
            'name' => 'Auriculares',
            'icon' => 'fas fa-headphones'
        ]);

    Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' => 'Usado',
        'title' => 'Xiaomi Redmi Airdots Manos Libres Bluetooth Originales',
    	'description' => 
    	'<pre>Características de los AirDots:
    - Bluetooth 5.0
    - Peso de 4,1 gramos
    - Cuenta con un altavoz de 7,2 mm.
    - Compatible con IOS / Android / Windows
    - Dimensiones auricular: 26.65 x 16.4 x 21.6 mm
    - Biauricular, Mono Auricular
    - Botón Multifuncional: On/Off/Pair Mode, Wake-Up Siri o Google Assistant, Contestar/Colgar/Rechazar Llamada, Play/Pause, Tomar Foto
    - Carga magnética
    - Los Airdots directamente de fabrica la caja no contiene el cable USB. Si desea el adicional el cable de carga puede consultar al vendedor el valor del mismo.
    - Es un producto con una buena relación costo/beneficio. para detalles especificos como cancelación de ruido, sincronización, posición del microfono, calidad de las llamadas, recomendación verificar reviews de este producto que se suben a la web</pre>',
    	'prices' => '95900',
    	'quantity' => '304',
    	'cover' => 'https://http2.mlstatic.com/xiaomi-redmi-airdots-manos-libres-bluetooth-originales-D_NQ_NP_993340-MCO31410298640_072019-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/xiaomi-redmi-airdots-manos-libres-bluetooth-originales-D_NQ_NP_936007-MCO31410282782_072019-F.webp',
    	'cover2' => 'https://http2.mlstatic.com/xiaomi-redmi-airdots-manos-libres-bluetooth-originales-D_NQ_NP_754738-MCO31410284751_072019-F.webp',
    	'cover3' => 'https://http2.mlstatic.com/xiaomi-redmi-airdots-manos-libres-bluetooth-originales-D_NQ_NP_779297-MCO31410298642_072019-F.webp',
        ]);

    Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' => 'Usado',
        'title' => 'Auriculares bluetooth i12 TWS inalámbricos',
    	'description' => 
    	'<pre>Auriculares bluetooth i12 TWS inalámbricos de color blanco , rojo , verde , gris . Toque los auriculares de control.

Para conectar:
    Retire los auriculares de la funda de carga y póngalos en sus oídos; la alimentación estará encendida. Conecte los auriculares a su teléfono a través de Bluetooth. Una vez que su dispositivo esté emparejado, los auriculares se vincularán automáticamente la próxima vez que los saque para usarlos.

Características del producto:
    - Operación de control táctil
    - Saltar a la siguiente canción.
    - Volver a la canción anterior
    - Sube o baja el volumen
    - Jugar y pausar
    - Responder llamadas
    - Detalles del producto:
    - Tiempo de juego: 2-3 horas
    - Distancia Bluetooth: 5-1O Metros
    - Tiempo de carga: 40 minutos.

El paquete incluye:
    - 1 x par de auriculares inalámbricos Bluetooth
    - 1 x Cable de carga
    - 1 x Base de carga
    - 1 x Manual de usuario</pre>',
    	'prices' => '70000',
    	'quantity' => '15',
    	'cover' => 'https://http2.mlstatic.com/audifonos-airpods-i12-tws-touch-tactil-bluetooth-50-stereo-D_NQ_NP_872617-MCO41082137472_032020-F.webp',
    	'cover1' => '',
    	'cover2' => '',
    	'cover3' => '',
        ]);

    Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' => 'Usado',
        'title' => 'Logitech G633 Artemis Spectrum, Diadema Gamer Rgb Sonido 7.1',
    	'description' => 
    	'<pre>Logitech G633 Artemis Spectrum, Diadema Gamer RGB / Sonido 7.1 Dolby

• DISFRUTA DE TUS JUEGOS COMO NUNCA
		Oye sonido de cine con auriculares para juegos G633 Artemis Spectrum™. 7.1 Dolby® Surround Sound* y los controladores de sonido Pro-G™ ofrecen sonido de increíble fidelidad. Oye enemigos al acecho, recibe pistas de habilidades especiales, disfruta de entornos inmersivos y estimulantes bandas sonoras de juegos... todo lo oirás como debe escucharse. Artemis Spectrum™ son unos auriculares para juegos dignos de los más serios aficionados al audio.

• COMPATIBILIDAD MULTIPLATAFORMA. UN PAR DE AURICULARES PARA TODAS LAS PLATAFORMAS DE JUEGO
	Puedes usar G633 Artemis Spectrum en tu PC para juegos, en tu consola de videojuegos y con tus dispositivos móviles. Va dondequiera que vayas. Los auriculares G633 Artemis Spectrum son compatibles con PC, teléfonos celulares y consolas de videojuegos, incluidas PS4™ y Xbox One™.

• ILUMINACIÓN RGB AJUSTABLE Y ETIQUETAS PERSONALIZABLES. PERSONALIZA EL ASPECTO
	Iluminación RGB ajustable para elegir entre aproximadamente 16,8 millones de colores. Usa Logitech Gaming Software para configurar el patrón de brillo o el color del entorno. G633 Artemis Spectrum tiene dos zonas de iluminación personalizable: La banda de iluminación y el logo. Cada zona se puede programar con sus propios colores o efectos. También se pueden sincronizar. Agrega etiquetas personalizadas para mejorar aún más el aspecto.

• TECLAS G PROGRAMABLES. CONTROLES MUY A MANO
	Personaliza botones con Logitech Gaming Software para mejorar tu experiencia de juego o multimedia. Activa macros mientras juegas para usar al instante combinaciones de comandos, o controla tu perfil de audio o música sin salir del juego.

• PERFILES DE SONIDO PERSONALIZADOS. PERSONALIZADOS PARA TI
	Escucha música y audio de juegos y películas con preferencias de audio predefinidas, exactamente a tu gusto. Logitech Gaming Software se puede usar para programar el ecualizador de audio. Personaliza opciones de audio y crea perfiles de sonido personales para cada uno de tus juegos.

• MEZCLA DE AUDIO DE VARIAS FUENTES. AUDIO PROCEDENTE DE DOS DISPOSITIVOS
	No te detengas en mitad de una partida para atender una llamada. Contesta mientras sigues jugando. Contesta llamadas, reproduce música y comunícate mientras juegas sin perder de vista la acción ni ponerla en pausa. G633 Artemis Spectrum tiene una conexión USB y una entrada analógica que conecta y mezcla sonido de dos dispositivos.

• MICRÓFONO PLEGABLE CON SUPRESIÓN DE RUIDO. COMUNICACIÓN NÍTIDA
	Ten la seguridad de que te oirán gracias a un micrófono de varilla flexible con supresión de ruido de una nitidez superior. La varilla tiene un LED indicador para que sepas si el micrófono está silenciado. Si no lo estás usando, puedes plegar el micrófono contra los auriculares y quedará casi invisible. G633 está listo para viajar: incluye un cable de móvil y un cable de micrófono secundario para dispositivos móviles, que puedes usar cuando no quieras tener la varilla junto a la cara.

• MATERIALES BLANDOS Y TRANSPIRABLES. COMODIDAD DURADERA
	G633 Artemis Spectrum se ha diseñado para sesiones de juego largas. Las almohadillas y la diadema son de materiales de malla deportiva, blandos y transpirables para ofrecer máxima comodidad. Los auriculares con sujeción sobre la oreja de G633 Artemis Spectrum se han diseñado para acomodarse sin presionar. Para mantener limpios los auriculares, las almohadillas se pueden extraer y lavar.</pre>',
    	'prices' => '369900',
    	'quantity' => '11',
    	'cover' => 'https://http2.mlstatic.com/logitech-g633-artemis-spectrum-diadema-gamer-rgb-sonido-71-D_NQ_NP_705006-MCO41084869034_032020-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/logitech-g633-artemis-spectrum-diadema-gamer-rgb-sonido-71-D_NQ_NP_967588-MCO41084856261_032020-F.webp',
    	'cover2' => 'https://http2.mlstatic.com/logitech-g633-artemis-spectrum-diadema-gamer-rgb-sonido-71-D_NQ_NP_678049-MCO41084819858_032020-F.webp',
    	'cover3' => 'https://http2.mlstatic.com/logitech-g633-artemis-spectrum-diadema-gamer-rgb-sonido-71-D_NQ_NP_880069-MCO41084850384_032020-F.webp',
        ]);

    Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' => 'Usado',
        'title' => 'Audífonos Bluetooth Deportivos R1 Micrófono 5 Horas Potente',
    	'description' => 
    	'<pre>CARACTERÍSTICAS DEL PRODUCTO:
    - Boton para responder y colgar llamadas.
    - Ingresa tu microsd y reproduce automáticamente.
	- Bluetooth 4.1 + EDR 2.1.
	- Rango de Alcance: 10m.
	- Reducción de Ruido.
	- Tiempo En espera: 175 horas.
	- Tiempo en conversación en llamada : de 4 a 5 horas.
	- Tiempo para full carga: 1 hora.</pre>',
    	'prices' => '27900',
    	'quantity' => '100',
    	'cover' => 'https://http2.mlstatic.com/audifonos-bluetooth-deportivos-r1-microfono-5-horas-potente-D_NQ_NP_996312-MCO32095248877_092019-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/audifonos-bluetooth-deportivos-r1-microfono-5-horas-potente-D_NQ_NP_862250-MCO31111616707_062019-F.webp',
    	'cover2' => 'https://http2.mlstatic.com/audifonos-bluetooth-deportivos-r1-microfono-5-horas-potente-D_NQ_NP_935580-MCO32095254612_092019-F.webp',
    	'cover3' => '',
        ]);
    }
}
