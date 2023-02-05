<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function ordersMerchant(){ //คำสั่งซื้อ

        return view('merchant.orders.ordersMerchant');
    }
    public function ordersDetailMerchant(){  //รายละเอียดคำสั่งซื้อ

        return view('merchant.orders.ordersDetailMerchant');
    }
    public function ordersSentMerchant(){ //สินค้าส่งแล้ว

        return view('merchant.orders.ordersSentMerchant');
    }
}
