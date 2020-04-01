<?php

use App\Sales;
use Illuminate\Database\Seeder;

class DefaultProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sales::create([
        'title' => 'Bicicleta Roadmaster Jumper Doble Susp 29 Shimano21v Bloqueo',
    	'description' => '****LA NUEVA ROADMASTER JUMPER 29" MODELO 2020*** RoadMaster trae para ti Bicicleta Roadmaster Jumper Doble Susp RIN 29 Shimano21v


Marco Roadmaster JUMPER Doble Suspension en Acero Inoxidable (Aleacion Acero) pintura Electroestatica.
Colores: Publicado, con compuesto Acrilico Perlasdo
Caña Aluminio 331.8
Tenedor de Suspension Delantera 29",
Recorrido de la Suspension 100 mmm
Manubrio 31.8 Overside SWALLOW en Aluminio de mediad 31,8*22,2*600MM
Suspension Trasera Con recarga.
Frenos de Disco en Aluminio, Mecanico , en Llanta Delantero y Trasera.
Diametro del Disco 160MM
Manilar de Cambios: Manecillas de Cambio Shimano RevoShift EasyGrip ( Shimano Tipo Moto 7Vel) REF TX-700 3X7V
Mangos en Goma Ergonomicos, para facil adecuacion del producto
Descarrilador Delantero: Shimano Tourney Dual SIS Index
Plato: PROWHEEL
Tensor Trasero: Shimano TourneyTZ Index 7 Velocidades
Pacha: Shimano System MF-TZ500-7 Equipment, 7 Velocidades
Sillin Antiprostatico RoadMaster Contamarcado
Caña del Asiento: Aluminio de 28,6 * 1,2T *300
Neumaticos WandaKing 54-584 - 29x2,10
Llantas WandaKing 29 MTB Black Edition
Rines RoadMaster 6061
Pedales Incluidos
Cadena: KMC 1/2*3/32*110L
Producto listo para ser utilizado, solo debes colocar los pedales y listo para rodar.',
    	'prices' => '529900',
    	'quantity' => '33',
    	'cover' => 'https://http2.mlstatic.com/bicicleta-roadmaster-jumper-doble-susp-29-shimano21v-bloqueo-D_NQ_NP_602611-MCO32878791537_112019-F.webp',
    	'cover1' => '',
    	'cover2' => '',
    	'cover3' => '',
        ]);

        Sales::create([
        'title' => 'Consola Playstation 4 Slim De 1tb +3 Juegos. Sellada. Nueva',
    	'description' => 'PlayStation 4 Slim o PS4 Slim es el último modelo estándar de la consola de octava generación de Sony desde septiembre de 2016. Sus cambios frente a la PS4 original son la reducción de su volumen en un 30%, el peso en un 16% y el consumo energético en un 28% además de un rediseño de sus líneas. La consola viene equipada con 500 GB o 1 TB de capacidad, según modelo. En general, una PS4 más estilizada',
    	'prices' => '1349900',
    	'quantity' => '18',
    	'cover' => 'https://http2.mlstatic.com/consola-playstation-4-slim-de-1tb-3-juegos-sellada-nueva-D_NQ_NP_943930-MCO40262610184_122019-F.webp',
    	'cover1' => '',
    	'cover2' => '',
    	'cover3' => '',
        ]);

        Sales::create([
        'title' => 'Buso Jersey Mtb Motocross Bmx Downhill Mx Camo Tipo Fox',
    	'description' => 
'• Producto importado de China
• Diseñado con comodidad y mínimo peso, también ofrece la durabilidad conocida TLD
• Material transpirable y flexible permite un ajuste más cómodo para cualquier piloto
• La versatilidad de la línea hace que sea la elección perfecta para todo tipo de condiciones de conducción y carreras
• Material de malla micro fibra de poliéster proporciona un ajuste ligero
• Gráficos de patrones de impresión únicos
• Muy ligero muy delgado para reducir la carga de peso',
    	'prices' => '115000',
    	'quantity' => '6',
    	'cover' => 'https://http2.mlstatic.com/buso-jersey-mtb-motocross-bmx-downhill-mx-camo-tipo-fox-D_NQ_NP_941508-MCO33083893254_122019-F.webp',
    	'cover1' => '',
    	'cover2' => '',
    	'cover3' => '',
        ]);

        Sales::create([
        'title' => 'Xbox One S 1tb 4k + Extra ! Promocion !',
    	'description' => 
'- XBOX ONE S 1TB BLANCA ALL DIGITAL MICROSOFT REFURBISHED
- (1) Control Original Inalambrico Blanco
- Video Juego FIFA 20
- Video Juego THE DIVISION 2
- Video Juego NBA2K19
- Video Juego MINECRAFT
- Cable de Energia
- Cable Hdm 4K
- Manuales
- Membresia Game Pass 1 Mes
- Membresia Gold 14 dias
- 12 MESES GARANTIA CONSOLA
- Solo en ABC INSUMOS


-- PROPIEDADES DEL PRODUCTO --

-40% más pequeña
-Disco Duro 1tb (1000 gb)
-Ultra HD
-4K
-HDMI 2.0a, S/PDIF, USB 3.0, IR
-WiFi: 5GHz
-CPU: octo-core + GPU dedicada
-Alto Rango Dinámico
-Consola TODO DIGITAL (No reproduce Discos Fisicos)',
    	'prices' => '1395000',
    	'quantity' => '6',
    	'cover' => 'https://http2.mlstatic.com/xbox-one-s-1tb-4k-extra-promocion--D_NQ_NP_678416-MCO41290576750_032020-F.webp',
    	'cover1' => '',
    	'cover2' => '',
    	'cover3' => '',
        ]);
    }
}
