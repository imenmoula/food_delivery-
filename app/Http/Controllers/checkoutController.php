<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckoutRequest;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\order;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Log;

class checkoutController extends Controller
{
 
   
   



    public function checkout()
    {
     
        return view('front.includes.checkout');
    }


    public function store(StoreCheckoutRequest $request)
    {

        try{

       
        $guestSession = session('guest_session');

       $cart = \Cart::session($guestSession)->getContent(); 

       if($cart->count() == 0){
          return redirect()->back()->with('error', 'Votre Panier est vide ');
       }

       $order = order::create([
           'fname' => $request->fname,
           'lname' => $request->lname,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,
           'rue' => $request->rue,
           'message' => $request->message,
           'netpaye' => \Cart::session($guestSession)->getTotal(),
       ]);

       if ($order)
       {
            foreach ( $cart as $item) {
                $order->orderLine()->create([
                    'menu_id' => $item->id,
                    'qty' => $item->quantity,
                    'prixunitaire'=> $item->price,
                    'total' => $item->price * $item->quantity,
                ]);
            }
           \Cart::session($guestSession)->clear();
           return redirect()->back()->with('success', 'votre commande est bien enregistre avec succes');
       }

    }catch(\Exception $e) {
        Log::error('erreur passage menu . ' . $e->getMessage());
        return redirect()->back()->with('error', 'erreur de passage menu ' );
    }

    }
}
