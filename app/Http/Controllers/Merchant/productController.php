<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function productsMerchant(){ 

        return view('merchant.products.productsMerchant');
    }
}
