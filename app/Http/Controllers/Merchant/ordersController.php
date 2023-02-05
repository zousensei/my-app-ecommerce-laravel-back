<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function ordersMerchant(){ 

        return view('merchant.orders.ordersMerchant');
    }
}
