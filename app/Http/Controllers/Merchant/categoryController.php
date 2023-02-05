<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function categorysMerchant(){ 

        return view('merchant.categorys.categorysMerchant');
    }
}
