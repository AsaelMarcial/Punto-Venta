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

        $data = [
            [
                'idProveedor' => '1',
                'fecha' => '2021-10-20 00:00:00',
                'descripcion' => 'Compra 1',
                'total' => '2000.00',
                'factura' => 'Factura 1',
                'partida' => 'Partida 1',
                'created_at' => '2021-10-20 00:00:00',
                'updated_at' => '2021-10-20 00:00:00',
            ],
            ['idProveedor' => '1',
                'fecha' => '2021-10-20 00:00:00',
                'descripcion' => 'Compra 2',
                'total' => '2000.00',
                'factura' => 'Factura 2',
                'partida' => 'Partida 2',
                'created_at' => '2021-10-20 00:00:00',
                'updated_at' => '2021-10-20 00:00:00',
            ],
            ['idProveedor' => '1',
                'fecha' => '2021-10-20 00:00:00',
                'descripcion' => 'Compra 3',
                'total' => '2000.00',
                'factura' => 'Factura 3',
                'partida' => 'Partida 4',
                'created_at' => '2021-10-20 00:00:00',
                'updated_at' => '2021-10-20 00:00:00',
            ]];

        Egreso::insert($data);
                
    }
}