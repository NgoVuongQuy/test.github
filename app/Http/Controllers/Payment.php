<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Payment extends Controller {
    public function showData()
    {
      /* $products = DB::table("product")
           ->get();*/

return view("payment"/*, ["products" => $products]*/);
    }
}

