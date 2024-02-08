<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\orderLine;
use Carbon\Carbon;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index()
    {
        //$today=Carbon::today();
        $orders=order::all();
        return view('admin.order.index',compact('orders'));
    }
public function show($id)
{
    $orderLine = OrderLine::findOrFail($id);
    
    return view('admin.order.show', compact('orderLine'));

}
public function destroy($id)
{
    $order = Order::find($id);
    //obligatoire inzid statut=1 et

    if ($order) {
        $order->delete();
        return redirect()->back()->withSuccess('La commande a été supprimée avec succès.');
    } else {
        return redirect()->back()->withError('La commande n\'a pas été trouvée.');
    }
}


}
