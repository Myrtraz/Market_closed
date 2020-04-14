<?php

use App\Categories;
use App\Sales;
use Illuminate\Database\Seeder;

class SportsProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Categories::create([
            'name' => 'Deportes y Fitness',
            'icon' => 'far fa-futbol'
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' =>'Usado',
        'title' => 'Bicicleta Roadmaster Jumper Doble Susp 29 Shimano21v Bloqueo',
    	'description' => 
    	'<pre>****LA NUEVA ROADMASTER JUMPER 29" MODELO 2020*** RoadMaster trae para ti Bicicleta Roadmaster Jumper Doble Susp RIN 29 Shimano21v.

    - Marco Roadmaster JUMPER Doble Suspension en Acero Inoxidable (Aleacion Acero) pintura Electroestatica.
    - Colores: Publicado, con compuesto Acrilico Perlasdo
    - Caña Aluminio 331.8
    - Tenedor de Suspension Delantera 29",
    - Recorrido de la Suspension 100 mmm
    - Manubrio 31.8 Overside SWALLOW en Aluminio de mediad 31,8*22,2*600MM
    - Suspension Trasera Con recarga.
    - Frenos de Disco en Aluminio, Mecanico , en Llanta Delantero y Trasera.
    - Diametro del Disco 160MM
    - Manilar de Cambios: Manecillas de Cambio Shimano RevoShift EasyGrip ( Shimano Tipo Moto 7Vel) REF TX-700 3X7V
    - Mangos en Goma Ergonomicos, para facil adecuacion del producto
    - Descarrilador Delantero: Shimano Tourney Dual SIS Index
    - Plato: PROWHEEL
    - Tensor Trasero: Shimano TourneyTZ Index 7 Velocidades
    - Pacha: Shimano System MF-TZ500-7 Equipment, 7 Velocidades
    - Sillin Antiprostatico RoadMaster Contamarcado
    - Caña del Asiento: Aluminio de 28,6 * 1,2T *300
    - Neumaticos WandaKing 54-584 - 29x2,10
    - Llantas WandaKing 29 MTB Black Edition
    - Rines RoadMaster 6061
    - Pedales Incluidos
    - Cadena: KMC 1/2*3/32*110L
    - Producto listo para ser utilizado, solo debes colocar los pedales y listo para rodar.</pre>',
    	'prices' => '529900',
    	'quantity' => '33',
    	'cover' => 'https://http2.mlstatic.com/bicicleta-roadmaster-jumper-doble-susp-29-shimano21v-bloqueo-D_NQ_NP_602611-MCO32878791537_112019-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/bicicleta-roadmaster-jumper-doble-susp-29-shimano21v-bloqueo-D_NQ_NP_917983-MCO32878838015_112019-F.webp',
    	'cover2' => 'https://http2.mlstatic.com/bicicleta-roadmaster-jumper-doble-susp-29-shimano21v-bloqueo-D_NQ_NP_865908-MCO32878804528_112019-F.webp',
    	'cover3' => 'https://http2.mlstatic.com/bicicleta-roadmaster-jumper-doble-susp-29-shimano21v-bloqueo-D_NQ_NP_994513-MCO32878825660_112019-F.webp',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' =>'Usado',
        'title' => 'Balon Baloncesto Basketball Molten Gg7x Cuero Original',
    	'description' => 
    	'<pre>BALON MOLTEN GG7X EN CUERO, INTERIOR Y EXTERIOR

Con el Balón Molten GG7X , demostrarás el talento del cual presumes a diario. Con diseño innovador para un mejor agarre y menos deslizamiento, es la elección perfecta para ser tu compañero de muchas victorias.

    - Balón Molten Cuero
    - Modelo masculino.
    - Construcción duradera.
    - Cuero super suave
    - Canales y detalles en negro
    - Fácil manejo y control.
    - Tamaño 7.
    - Para 13 años en adelante.
    - IDEAL PARA TODAS LAS SUPERFICIES
    - MATERIAL EN CUERO
    - VERSION DE COMPETENCIA
    - TAMAÑO PROFESIONAL
    - QUE SE ENTREGA EN TU COMPRA:
    - BALON MARCA MOLTEN GG7X
    - 1 PAR DE RODILLERAS</pre>',
    	'prices' => '250000',
    	'quantity' => '32',
    	'cover' => 'https://http2.mlstatic.com/balon-baloncesto-basketball-molten-gg7x-cuero-original-D_NQ_NP_607718-MCO31111272909_062019-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/balon-baloncesto-basketball-molten-gg7x-cuero-original-D_NQ_NP_847605-MCO27036005878_032018-F.webp',
    	'cover2' => '',
    	'cover3' => '',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' =>'Usado',
        'title' => 'Opro Platinum Level - Protector Bucal Para Rugby, Hockey',
    	'description' => 
    	'<pre>SOMOS AKAESCOLOMBIA SAS, TODOS NUESTROS PRODUCTOS SON IMPORTADOS Y EL TIEMPO DE ENTREGA ES DE 9 A 11 DÍAS HÁBILES.</pre>',
    	'prices' => '152900',
    	'quantity' => '1',
    	'cover' => 'https://http2.mlstatic.com/opro-platinum-level-protector-bucal-para-rugby-hockey-D_NQ_NP_947212-MCO31790317728_082019-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/opro-platinum-level-protector-bucal-para-rugby-hockey-D_NQ_NP_652587-MCO31790317730_082019-F.webp',
    	'cover2' => 'https://http2.mlstatic.com/opro-platinum-level-protector-bucal-para-rugby-hockey-D_NQ_NP_791198-MCO31790317726_082019-F.webp',
    	'cover3' => 'https://http2.mlstatic.com/opro-platinum-level-protector-bucal-para-rugby-hockey-D_NQ_NP_918976-MCO31790317729_082019-F.webp',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' =>'Usado',
        'title' => 'Balon Futbol Mikasa Original Clasico Ft-5',
    	'description' => 
    	'<pre>Balon Futbol tamaño numero 5 Original Mikasa
    - Marca: Mikasa.
    - Referencia: TF-150.
    - Material: Cuero.
    - Color: Negro/naranja.
    - Tamaño: 5.</pre>',
    	'prices' => '104990',
    	'quantity' => '14',
    	'cover' => 'https://http2.mlstatic.com/balon-futbol-mikasa-original-clasico-ft-5-colores-variados-D_NQ_NP_736954-MCO31232202214_062019-F.webp',
    	'cover1' => '',
    	'cover2' => '',
    	'cover3' => '',
        ]);
    }
}
