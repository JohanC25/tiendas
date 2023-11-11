<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('productos')->insert([
            ['cve_productos' => 1, 'Marca' => 'Converse', 'tipo' => 'Zapatos', 'Precio' => 1200, 'Cantidad' => 9],
            ['cve_productos' => 2, 'Marca' => 'Apple', 'tipo' => 'iPad pro', 'Precio' => 25000, 'Cantidad' => 17],
            ['cve_productos' => 3, 'Marca' => 'HP', 'tipo' => 'Laptop', 'Precio' => 17000, 'Cantidad' => 3],
            ['cve_productos' => 4, 'Marca' => 'Pull&Bear', 'tipo' => 'Sueter', 'Precio' => 900, 'Cantidad' => 21],
            ['cve_productos' => 5, 'Marca' => 'American Eagle', 'tipo' => 'Jeans', 'Precio' => 500, 'Cantidad' => 12],
            ['cve_productos' => 6, 'Marca' => 'MAC', 'tipo' => 'Labiales', 'Precio' => 400, 'Cantidad' => 6],
            ['cve_productos' => 7, 'Marca' => 'TupperWare', 'tipo' => 'Botella', 'Precio' => 300, 'Cantidad' => 19],
            ['cve_productos' => 8, 'Marca' => 'Sony', 'tipo' => 'PlayStation', 'Precio' => 13000, 'Cantidad' => 2],
            ['cve_productos' => 9, 'Marca' => 'HomeDepot', 'tipo' => 'Martillo', 'Precio' => 250, 'Cantidad' => 13],
            ['cve_productos' => 10, 'Marca' => 'Beats', 'tipo' => 'Audifonos', 'Precio' => 4000, 'Cantidad' => 7],
            ['cve_productos' => 11, 'Marca' => 'Petco', 'tipo' => 'Correa', 'Precio' => 250, 'Cantidad' => 8],
            ['cve_productos' => 12, 'Marca' => 'Sasha', 'tipo' => 'Vestido', 'Precio' => 2100, 'Cantidad' => 14],
            ['cve_productos' => 13, 'Marca' => 'Yamaha', 'tipo' => 'Piano', 'Precio' => 45000, 'Cantidad' => 1],
            ['cve_productos' => 14, 'Marca' => 'LG', 'tipo' => 'TElevisor4K', 'Precio' => 30000, 'Cantidad' => 6],
            ['cve_productos' => 15, 'Marca' => 'ASUS', 'tipo' => 'Laptop', 'Precio' => 27000, 'Cantidad' => 7]
        ]);

        // Inserciones para Anuncios
        DB::table('anuncios')->insert([
            ['cve_anuncios' => 1, 'm2' => 3, 'piso' => 2, 'numero' => 12, 'renta' => 1200],
            ['cve_anuncios' => 2, 'm2' => 15, 'piso' => 3, 'numero' => 127, 'renta' => 9500],
            ['cve_anuncios' => 3, 'm2' => 9, 'piso' => 1, 'numero' => 69, 'renta' => 4500],
            ['cve_anuncios' => 4, 'm2' => 7, 'piso' => 2, 'numero' => 34, 'renta' => 3200],
            ['cve_anuncios' => 5, 'm2' => 3, 'piso' => 2, 'numero' => 12, 'renta' => 1200]
        ]);

        // Inserciones para Locales
        DB::table('locales')->insert([
            ['cve_locales' => 1, 'numero' => 123, 'm3' => 15, 'piso' => 1, 'renta' => 1500],
            ['cve_locales' => 2, 'numero' => 307, 'm3' => 79, 'piso' => 3, 'renta' => 23000],
            ['cve_locales' => 3, 'numero' => 234, 'm3' => 43, 'piso' => 2, 'renta' => 12000],
            ['cve_locales' => 4, 'numero' => 101, 'm3' => 25, 'piso' => 1, 'renta' => 2700],
            ['cve_locales' => 5, 'numero' => 333, 'm3' => 59, 'piso' => 3, 'renta' => 18000],
            ['cve_locales' => 6, 'numero' => 212, 'm3' => 37, 'piso' => 2, 'renta' => 10500]
        ]);

        // Inserciones para Ofertas
        DB::table('ofertas')->insert([
            ['Marca' => 'Converse', 'cve_ofertas' => 1, 'Descuento' => 15, 'Producto' => 'Zapatos', 'Precio_original' => 1000],
            ['Marca' => 'Adidas', 'cve_ofertas' => 2, 'Descuento' => 20, 'Producto' => 'Pans', 'Precio_original' => 1950],
            ['Marca' => 'Samsung', 'cve_ofertas' => 3, 'Descuento' => 35, 'Producto' => 'Telefono A53', 'Precio_original' => 7500],
            ['Marca' => 'Fernandez', 'cve_ofertas' => 4, 'Descuento' => 10, 'Producto' => 'Guitarra', 'Precio_original' => 9500],
            ['Marca' => 'Puma', 'cve_ofertas' => 5, 'Descuento' => 5, 'Producto' => 'Camisa', 'Precio_original' => 900],
            ['Marca' => 'MAC', 'cve_ofertas' => 6, 'Descuento' => 30, 'Producto' => 'Sombras PopColor', 'Precio_original' => 1100],
            ['Marca' => 'Bershka', 'cve_ofertas' => 7, 'Descuento' => 50, 'Producto' => 'Abrigo', 'Precio_original' => 4500],
            ['Marca' => 'Victoria Secret', 'cve_ofertas' => 8, 'Descuento' => 15, 'Producto' => 'Lenceria', 'Precio_original' => 1500],
            ['Marca' => 'Levis', 'cve_ofertas' => 9, 'Descuento' => 27, 'Producto' => 'Jeans', 'Precio_original' => 600],
            ['Marca' => 'Miniso', 'cve_ofertas' => 10, 'Descuento' => 40, 'Producto' => 'Peluche', 'Precio_original' => 1200]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
