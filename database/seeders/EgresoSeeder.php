<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Egreso;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class EgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $egreso = Egreso::create([
            'idProveedor' => '1',
                'fecha' => '2021-10-20 00:00:00',
                'descripcion' => 'Compra 1',
                'total' => '1000.00',
                'factura' => 'Factura 1',
                'partida' => 'Partida 1',
        ]);
    }
}