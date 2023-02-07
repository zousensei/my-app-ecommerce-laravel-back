<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class productController extends Controller
{
    public function productsMerchant($id){ 
    
        $products = Product::where('category_id', $id)->get(); //แสดงสินค้าตามประเภท 
        return view('merchant.products.productsMerchant')->with([ 'product' => $products, 'category_id' => $id  ]);
        
    }

    //-------------------------------------------------------------------------------------//

    public function addProductsMerchant(Request $request){ //เพิ่มข้อมูล Product
        DB::beginTransaction();
        try {

            $product = new Product;
            $product->product_code   = hexdec(uniqid()) ;
            $product->product_name   = $request->product_name;
            $product->product_detail = $request->product_detail;
            $product->product_amount = $request->product_amount;
            $product->product_price  = $request->product_price;
            $product->category_id    = $request->category_id;

            if ($request->file('cover') !== null)
            {
                $img  = $request->file('cover');
                $path = public_path('product_cover');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->move($path, $name);
                    $product->product_img  = $name;
                }
            }
            $product->save();

            DB::commit();
            return redirect('/productsMerchant/'.$request->category_id.'')->with('success', 'เพิ่มข้อมูลสำเร็จ');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return redirect('/productsMerchant/'.$request->category_id.'')->withError('ไม่สามารถเพิ่มข้อมูลได้ !');
        }
    }

    //-------------------------------------------------------------------------------------//

    public function updateProductsMerchant(Request $request, $id){ // อัพเดตข้อมูล Product
        DB::beginTransaction();
        try {

            $product                  = Product::findOrFail($id);
            $product->product_name    = $request->product_name;
            $product->product_detail  = $request->product_detail;
            $product->product_amount  = $request->product_amount;
            $product->product_price   = $request->product_price;

            if ($request->file('cover') != null)
            {
                
                $imgcover = $request->file('cover');
                $path     = public_path('product_cover');
                foreach($imgcover as $key => $item) {

                    unlink($path.'/'.$product->product_img);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->move($path, $name);
                    $product->product_img = $name;
                }
            }

            $product->save();

            DB::commit();
            return redirect('/productsMerchant/'.$request->category_id.'')->with('success', 'อัพเดตข้อมูลสำเร็จ');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return redirect('/productsMerchant/'.$request->category_id.'')->withError('ไม่สามารถอัพเดตข้อมูลได้ !');
        }
    }

    //-------------------------------------------------------------------------------------//

    public function delProductMerchant(Request $request, $id)
    {
        DB::beginTransaction();
        try {

            $product     = Product::findOrFail($id);
            $path        = public_path('product_cover');
            unlink($path.'/'.$product->product_img);

            $delProduct  = Product::destroy($id);

            DB::commit();
            return redirect('/productsMerchant/'.$request->category_id.'')->with('success', 'ลบข้อมูลสำเร็จ');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return redirect('/productsMerchant/'.$request->category_id.'')->withError('ลบข้อมูลไม่สำเร็จ');
        }
    }

    //-------------------------------------------------------------------------------------//


}
