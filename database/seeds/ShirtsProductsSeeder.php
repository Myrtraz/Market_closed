<?php

use App\Categories;
use App\Sales;
use Illuminate\Database\Seeder;

class ShirtsProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Categories::create([
            'name' => 'Camisetas',
            'icon' => 'fas fa-tshirt'
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' => 'Nuevo',
        'title' => 'Camiseta Esqueleto Mujer Totoro Anime',
    	'description' => 
        '<pre>Talla única, se ajusta a mujeres de talla S y M por su tela strech. Mide 60 cm de largo</pre>',
    	'prices' => '25000',
    	'quantity' => '10',
    	'cover' => 'https://http2.mlstatic.com/camiseta-esqueleto-mujer-totoro-anime-D_NQ_NP_884778-MCO40929579237_022020-F.webp',
    	'cover1' => '',
    	'cover2' => '',
    	'cover3' => '',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' => 'Nuevo',
        'title' => 'Camisetas Estampadas Mujer Dama Blusa Nasa Mujer Idk 2',
        'description' => 
        '<pre>• La tela de esta prenda es suave
• El estampado no se siente al tacto
• Costura reforzada, tela y estampado resistentes al paso del tiempo
• Este producto es exclusivo, no está disponible en tiendas
• Esta prenda es de una de las mejores marcas en el sitio
• Esta prenda es cuello redondo
• Horma de esta prenda es para dama</pre>',
        'prices' => '34111',
        'quantity' => '100',
        'cover' => 'https://http2.mlstatic.com/camisetas-estampadas-mujer-dama-blusa-nasa-mujer-idk-2-D_NQ_NP_856750-MCO31006618123_062019-F.webp',
        'cover1' => '',
        'cover2' => '',
        'cover3' => '',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' => 'Nuevo',
        'title' => 'Camiseta Soda Stereo Gracias Totales Rock Activity',
        'description' => 
        '<pre>Las fotos son reales no tienen ningún tipo de retoque para que la compra sea con confianza, viendo directamente de lo que usted va a recibir.
        Si tiene preguntas sobre el producto, puede hacer todas las que guste.
        Totalmente nueva y nunca ha sido usada.

No se suministraran mas fotos a la plataforma de Mercadolibre, si desea puede hacer la compra y recogerla en nuestro local para verificar su compra, si no esta conforme de alguna manera se le hará la devolución inmediata del dinero o cambio de producto.</pre>',
        'prices' => '41900',
        'quantity' => '31',
        'cover' => 'https://http2.mlstatic.com/camiseta-soda-stereo-gracias-totales-rock-activity-D_NQ_NP_796069-MCO32984532571_112019-F.webp',
        'cover1' => 'https://http2.mlstatic.com/camiseta-soda-stereo-gracias-totales-rock-activity-D_NQ_NP_659483-MCO32984527366_112019-F.webp',
        'cover2' => 'https://http2.mlstatic.com/camiseta-soda-stereo-gracias-totales-rock-activity-D_NQ_NP_998362-MCO32984531134_112019-F.webp',
        'cover3' => '',
        ]);

        Sales::create([
        'user_id' =>1,
        'category_id' =>$category->id,
        'status' => 'Nuevo',
        'title' => 'Camisetas Largas Con Capucha Urban Para Hombre',
        'description' => 
        '<pre>Camisetas Largas con capucha Urban
Por la compra de dos o mas el envió es totalmente gratis

PARA APLICAR EL ENVIÓ GRATIS: Elige la compra de dos productos en cualquier color y talla, después por interno especificas con nosotros los colores y las tallas que deseas
(Mercado libre en su plataforma no permite la opción de comprar dos productos de diferente color)</pre>',
        'prices' => '39999',
        'quantity' => '64',
        'cover' => 'https://http2.mlstatic.com/camisetas-largas-con-capucha-urban-para-hombre-D_NQ_NP_742039-MCO31060704991_062019-F.webp',
        'cover1' => '',
        'cover2' => '',
        'cover3' => '',
        ]);
    }
}
