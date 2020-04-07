<?php

use App\Sales;
use Illuminate\Database\Seeder;

class FurnituresProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sales::create([
        'user_id' =>1,
        'category_id' =>5,
        'title' => 'Sala Pequeña Espalda Riñonera De 1.70',
    	'description' => 
    	'<pre>SALA RIÑONERA PEQUEÑA DE 1.70 X 1.70
La sala ofrece la siguientes caracteristicas:
    - Sala con 3 módulos (esquinero tipo diamante o curvo según su preferencia)
    - 3 cojines decorativos,
    - Puff central.
La sala esta tapizada en tela tipo cuero fácil de limpiar, se puede fabricar en el color y combinación que usted desee, somos fabricantes, se lleva a domicilio dentro de Bogotá sin ningún costo, se hacen envios nacionales.</pre>',
    	'prices' => '559000',
    	'quantity' => '10',
    	'cover' => 'https://http2.mlstatic.com/sala-pequena-espalda-rinonera-de-170-D_NQ_NP_911737-MCO31038981835_062019-F.webp',
    	'cover1' => '',
    	'cover2' => '',
    	'cover3' => '',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>5,
        'title' => 'Biblioteca moduofi salvaje Café',
    	'description' => 
    	'<pre>- Medidas: Alto: 181cm x Ancho: 63cm x Profundidad: 24cm
    - Estilo: moderno.
    - Material: madera.
    - Cuenta con cuatro divisiones.
    - Forma rectangular y sentido vertical.
    - Ideal para espacios reducidos.</pre>',
    	'prices' => '172950',
    	'quantity' => '10',
    	'cover' => 'https://http2.mlstatic.com/bibliotecamoduofisalvaje-cafe-D_NQ_NP_745756-MCO41303437706_042020-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/bibliotecamoduofisalvaje-cafe-D_NQ_NP_969774-MCO41303437708_042020-F.webp',
    	'cover2' => 'https://http2.mlstatic.com/bibliotecamoduofisalvaje-cafe-D_NQ_NP_615475-MCO41303437707_042020-F.webp',
    	'cover3' => '',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>5,
        'title' => 'Juego Sala Puff : 2 Sillas + 1 Sofá + Obsequio - Nueva!',
    	'description' => 
    	'<pre>CARACTERÍSTICAS
    - Funda Exterior en Lona Morral, esta es antifluidos y de gran resistencia.
    - Relleno en icopor particulado, permitiendo que se aapte a la forma de tu cuerpo.
    - Doble costura, reforzando las partes de mayor presión.
    - Cremallera para que le puedas poner más relleno a tu gusto.

MEDIDAS
    - Sofá: 75 x 75 x 135cm.
    - Sillas Modelo 1 (Peras): 90cm diámetro x 110cm. alto
    - Sillas Modelo 2 (Cool): 70cm. diámetro x 130cm. alto
    - Sillas Modelo 3 (Deko): 75 x 75 x 75cm.
    - Opción Obsequio 1 (Cojines Deco): 30 x 30cm.
    - Opción Obsequio 2 (MesaPuff): 40 x 40 x 40cm.</pre>',
    	'prices' => '159900',
    	'quantity' => '100',
    	'cover' => 'https://http2.mlstatic.com/juego-sala-puff-2-sillas-1-sofa-obsequio-nueva-D_NQ_NP_889066-MCO31111256674_062019-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/juego-sala-puff-2-sillas-1-sofa-obsequio-nueva-D_NQ_NP_923674-MCO31766089401_082019-F.webp',
    	'cover2' => 'https://http2.mlstatic.com/juego-sala-puff-2-sillas-1-sofa-obsequio-nueva-D_NQ_NP_745553-MCO31766167545_082019-F.webp',
    	'cover3' => '',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>5,
        'title' => 'Escritorio Con Biblioteca Lacado Ref: Sevilla',
    	'description' => 
    	'<pre>PRODUCTO: Escritorio Ref: Sevilla
    - MARCA: Muebles Coffee
    - DIMENSIONES Largo: 150 cm Alto: 132 cm y profundidad: 50 cm.
    - COLORES DISPONIBLES: Blanco, Negro, Rojo, Gris claro, Gris oscuro, tabaco, caramelo, ebano, wengue, entre otros.
    - TERMINACIONES DISPONIBLES: Semi-mate.
    - TIPO DE ACABADO: Lacado
    - TIEMPO DE ENTREGA PARA BOGOTÁ: 7 días hábiles
    - TIEMPO DE ENTREGA PARA OTRAS CIUDADES: 9 dias hábiles.
    - GARANTÍA: 2 años.
    - MATERIAL: Madera de cedro y Mdf.</pre>',
    	'prices' => '645000',
    	'quantity' => '10',
    	'cover' => 'https://http2.mlstatic.com/escritorio-con-biblioteca-lacado-ref-sevilla-D_NQ_NP_644410-MCO31607990111_072019-F.webp',
    	'cover1' => 'https://http2.mlstatic.com/escritorio-con-biblioteca-lacado-ref-sevilla-D_NQ_NP_868545-MCO31607935405_072019-F.webp',
    	'cover2' => 'https://http2.mlstatic.com/escritorio-con-biblioteca-lacado-ref-sevilla-D_NQ_NP_693021-MCO20684590303_042016-F.webp',
    	'cover3' => 'https://http2.mlstatic.com/escritorio-con-biblioteca-lacado-ref-sevilla-D_NQ_NP_127625-MCO25470734914_032017-F.webp',
        ]);
    }
}
