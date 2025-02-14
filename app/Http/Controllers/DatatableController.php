<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Fabricante;
use App\Models\Familia;
use App\Models\Linea;
use App\Models\User;
use App\Models\Venta;
use JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable;
use Yajra\DataTables\Facades\DataTables;

class DatatableController extends Controller
{
    public function products()
    {
        $products = Producto::select('id', 'codigo', 'producto', 'precio_compra', 'precio_venta', 'foto')
            ->orderBy('id', 'desc')->get();
        return DataTables::of($products)->toJson();
    }

    public function clients()
    {
        $clients = Cliente::select('id', 'nombre', 'telefono', 'direccion')
            ->orderBy('id', 'desc')->get();
        return DataTables::of($clients)->toJson();
    }

    public function users()
    {
        $users = User::select('id', 'name', 'email')
            ->orderBy('id', 'desc')->get();
        return DataTables::of($users)->toJson();
    }

    public function categories()
    {
        $categories = Categoria::select('id', 'nombre')
            ->orderBy('id', 'desc')->get();
        return DataTables::of($categories)->toJson();
    }

    public function sales()
    {
        $sales = Venta::join('clientes', 'ventas.id_cliente', '=', 'clientes.id')
            ->select('ventas.*', 'clientes.nombre')
            ->orderBy('ventas.id', 'desc')->get();
        return DataTables::of($sales)->toJson();
    }

    public function families()
    {
        $categories = Familia::select('id', 'nombre')
            ->orderBy('id', 'desc')->get();
        return DataTables::of($categories)->toJson();
    }

    public function manufacturers()
    {
        $manufacturers = Fabricante::select('id', 'nombre')->orderBy('id', 'desc')->get();
        return Datatables::of($manufacturers)->toJson();
    }

    public function lineas()
    {
        $lineas = Linea::select('id', 'nombre')->orderBy('id', 'desc')->get();
        return Datatables::of($lineas)->toJson();
    }
}
