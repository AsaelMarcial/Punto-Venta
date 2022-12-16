<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor;
use App\Models\Proveedores;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedor = Proveedores::create([
            'nombre' => 'Chedrahui',
            'direccion' => 'Direccion 1',
            'telefono' => 'Telefono 1',
            'rfc' => 'RFC 1',
        ]);
    }
}