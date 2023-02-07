<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZENZOU SETTING</title>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
      .custombtn button {
      border: none;
      outline: 0;
      padding: 10px;
      color: white;
      background-color: #ee4d2d;
      text-align: center;
      cursor: pointer;
      width: 70%;
      font-size: 18px;
    }

    .custombtn button:hover {
      opacity: 0.7;
    }
</style>
<body style="background-color: #e9ecef ;">

<div class="row">
    <!-- col-md-3 sideBar -->
    @include('merchant.components.sideBar') 

    <div class="col-md-10" >
    <!-- contant -->
    <?php 
        $category_data = DB::Table('tb_category')->where('category_id', $category_id)->first(); 
    ?>
    <div class="container-fluid pt-4" >
        <div class="col-md-12" style="background-color:#fff;">
            <div class="container p-3">
                <p class="fw-semibold">หน้า : จัดการสินค้า / หมวดหมู่สินค้า : {{ $category_data->category_name }}</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3" >
        <div class="col-md-12" style="background-color:#fff;">
            <div class="container p-3">

            <div class="custombtn col-md-3">
                <a href="#"><button type="button" data-bs-toggle="modal" data-bs-target="#addProduct"> เพิ่มข้อมูลสินค้า</button></a>
            </div>

            <!-- Modal Add Product -->
            <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลสินค้า</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                <form action="{{url('/addProductsMerchant')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">* รูปภาพ</label>
                        <input type="file" class="form-control" name="cover[]" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">* ชื่อสินค้า</label>
                        <input type="text" class="form-control" name="product_name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">* รายละเอียด</label>
                        <input type="text" class="form-control" name="product_detail" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">* หมวดหมู่สินค้า</label>
                        <input type="text" class="form-control" value="{{ $category_data->category_name }}" required readonly>
                        <input type="text" class="form-control" name="category_id" value="{{ $category_id }}" required hidden>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">* จำนวนสินค้า</label>
                        <input type="number" class="form-control" name="product_amount" min="1" value="1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">* ราคาสินค้า</label>
                        <input type="text" class="form-control" name="product_price" required>
                    </div>
                    <div class="custombtn text-center py-2">
                        <button type="submit" > เพิ่มข้อมูลสินค้า</button>
                    </div>
                </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>

            <br>
            <table class="table">
                <tr style="background-color:#fafafa ;">
                    <td class="fw-semibold">#</td>
                    <td class="fw-semibold">รูปหน้าปก</td>
                    <td class="fw-semibold">รหัสสินค้า</td>
                    <td class="fw-semibold">ชื่อสินค้า</td>
                    <td class="fw-semibold">ราคา</td>
                    <td class="fw-semibold">จำนวน</td>
                    <td class="fw-semibold">การจัดการ</td>
                </tr>
                <?php $i = 1 ; ?>
                @foreach ($product as $products)
                <tr>
                    <td width="5%"><p  class="pt-3">{{ $i++ }}</p></td>
                    <td width="10%"><img src="{{ asset('product_cover/'.$products->product_img.'') }}" alt="" width="100%"> </td>
                    <td width="10%"><p  class="pt-3">{{ $products->product_code }}</p>  </td>
                    <td ><p  class="pt-3">{{ $products->product_name }}</p>  </td>
                    <td ><p  class="pt-3">{{ number_format($products->product_price,2) }}</p>  </td>
                    <td ><p  class="pt-3">{{ $products->product_amount }}</p>  </td>
                    <td width="15%"> 
                        <div class="pt-3">
                            <form action="{{url('delProductMerchant/'.$products->product_id.'')}}"  method="POST">
                                 @csrf
                                 <input type="text" class="form-control" name="category_id" value="{{ $category_id }}" required hidden>
                                 <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#editProduct{{ $products->product_id }}">แก้ไข</button> &nbsp;
                                 <button type="submit" class="btn btn-outline-danger  btn-sm" onclick="return confirm('คุณต้องการลบ [ {{ $products->product_name }} ] ใช่ไหม ? ')">ลบ</button>
                            </form>
                        </div>

                        <!-- Modal Edit Product -->
                        <div class="modal fade" id="editProduct{{ $products->product_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">แก้ไขข้อมูลสินค้า</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                            <form action="{{url('/updateProductsMerchant/'.$products->product_id.'')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">* เปลี่ยนรูปภาพ</label><br>
                                    <img src="{{ asset('product_cover/'.$products->product_img.'') }}" alt="" width="50%" class="pb-3">
                                    <input type="file" class="form-control" name="cover[]" value="{{ $products->product_img }}" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">* ชื่อสินค้า</label>
                                    <input type="text" class="form-control" name="product_name" value="{{ $products->product_name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">* รายละเอียด</label>
                                    <input type="text" class="form-control" name="product_detail" value="{{ $products->product_detail }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">* หมวดหมู่สินค้า</label>
                                    <input type="text" class="form-control" value="{{ $category_data->category_name }}" required readonly>
                                    <input type="text" class="form-control" name="category_id" value="{{ $category_id }}" required hidden>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">* จำนวนสินค้า</label>
                                    <input type="number" class="form-control" name="product_amount" value="{{ $products->product_amount }}" min="1" value="1" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">* ราคาสินค้า</label>
                                    <input type="text" class="form-control" name="product_price" value="{{ $products->product_price }}" required>
                                </div>
                                <div class="custombtn text-center py-2">
                                    <button type="submit" > แก้ไขข้อมูลสินค้า</button>
                                </div>
                            </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </table>

            </div>
        </div>
    </div>

    <!-- end contant -->
    </div>
</div>

<script>
    var alert = "{{Session::get('success')}}";
    if(alert){
        Swal.fire({
            text : alert,
            confirmButtonColor: "#ee4d2d",
         })
    }
</script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>