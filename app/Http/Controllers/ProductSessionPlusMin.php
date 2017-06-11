<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class ProductSessionPlusMin extends Controller
{
    public function subQTY($id)
    {
      foreach (Session::get('carted-products') as $allcarted) {
        if($allcarted->id == $id)
        {
          if ($allcarted->qty>0)
          {

            $oldval = $allcarted->qty;
            $allcarted->qty = $oldval - 1;
            return redirect()->back();
          }else
          {
            return redirect()->back();
          }
        }

      }
    }

    public function addQTY($id)
    {
      foreach(Session::get('carted-products') as $cartedprods)
      {
        if($cartedprods->id == $id)
        {
          if ($cartedprods->stock > $cartedprods->qty) {
            $oldval =$cartedprods->qty;
            $cartedprods->qty = $oldval + 1;
            return redirect()->back();
          }else
          {
            return redirect()->back();
          }
        }

      }
    }
}
