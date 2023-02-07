<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class categoryController extends Controller
{
    public function categorysMerchant(){ //แสดงข้อมูล Catrgory ทั้งหมด 

        $categorys = Category::all();    
        return view('merchant.categorys.categorysMerchant')->with([ 'category' => $categorys ]);
    }

    //-------------------------------------------------------------------------------------//

    public function addCategorysMerchant(Request $request){ //เพิ่มข้อมูล Category 
        DB::beginTransaction();
        try {

            $category = new Category;
            if ($request->file('cover') !== null)
            {
                $img  = $request->file('cover');
                $path = public_path('category_cover');
                foreach($img as $key => $item) {
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->move($path, $name);
                    $category->category_img  = $name;
                }
            }
            $category->category_name  = $request->nameCategory;
            $category->save();

            DB::commit();
            return redirect('/categorysMerchant')->with('success', 'เพิ่มข้อมูลสำเร็จ');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return redirect('/categorysMerchant')->withError('ไม่สามารถเพิ่มข้อมูลได้ !');
        }
    }

    //-------------------------------------------------------------------------------------//

    public function updateCategorysMerchant(Request $request, $id){ // อัพเดตข้อมูล Category
        DB::beginTransaction();
        try {
            $category                 = Category::findOrFail($id);
            $category->category_name  = $request->nameCategory;

            if ($request->file('cover') != null)
            {
                
                $imgcover = $request->file('cover');
                $path     = public_path('category_cover');
                foreach($imgcover as $key => $item) {

                    unlink($path.'/'.$category->category_img);
                    $name = rand().time().'.'.$item->getClientOriginalExtension();
                    $item->move($path, $name);
                    $category->category_img = $name;
                }
            }

            $category->save();

            DB::commit();
            return redirect('/categorysMerchant')->with('success', 'อัพเดตข้อมูลสำเร็จ');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return redirect('/categorysMerchant')->withError('ไม่สามารถอัพเดตข้อมูลได้ !');
        }
    }

    //-------------------------------------------------------------------------------------//

    public function delCategorysMerchant($id)
    {
        DB::beginTransaction();
        try {

            $category    = Category::findOrFail($id);
            $path        = public_path('category_cover');
            unlink($path.'/'.$category->category_img);

            $delCategory = Category::destroy($id);

            DB::commit();
            return redirect('/categorysMerchant')->with('success', 'ลบข้อมูลสำเร็จ');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return redirect('/categorysMerchant')->withError('ลบข้อมูลไม่สำเร็จ');
        }
    }

    //-------------------------------------------------------------------------------------//
    


}
