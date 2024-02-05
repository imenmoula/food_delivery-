<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{

    public function cartList()
    {
     
        return view('front.includes.cart');
    }
   /**
     * Write code on Method
     *
     * @return response()
     */
   // Make sure to import Request
   public function addToCart($id, Request $request)
   {
       $menu = Menu::findOrFail($id);
 

       try {
      

        // Get the guest session ID
        $guestSession = $request->session()->get('guest_session'); 
        $cart = \Cart::session($guestSession) ;

        $cart->add(array(
            'id' => $menu->id,
               'name' =>$menu->nom_plat,
               'quantity' => 1,
               'price' => $menu->prix,
            'attributes' => array(
                'image' => $menu->image,
            ),
        ));
       } catch (\Darryldecode\Cart\Exceptions\InvalidItemException $e) {
          
           return redirect()->back()->with('error', 'Invalid item: ' . $e->getMessage());
       }

       return redirect()->back()->with('success', 'plats  ajouter avec succes!');
   }
   /******************************* ********************************/
public function updateCart(Request $request)
{
    \Cat::update(
        $request->id,
        [
        'quantity'=>[
            'relative'=>false,
            'value'=>$request->quantity,
        ],
        ]
    );
    session()->flash("success","commande modifiie vaec succes");
    return redirect()->route('front.includes.update');
}
/******************************************************/
public function removeCart(Request $request)
{
    $guestSession = $request->session()->get('guest_session'); 
    $cart = \Cart::session($guestSession) ;

    $cart->remove($request->id);
    session()->flash('success', 'item cart  supprimer avec succes!');
    return redirect()->route('cart.list');


}
public function clearAllCart(Request $request)
{
    \Cart::clear();
    session()->flash('success', 'all item cart clear avec succes!');
    return redirect()->route('cart.list');
}
}
