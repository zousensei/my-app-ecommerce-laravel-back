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

    <div class="container-fluid pt-4" >
        <div class="col-md-12" style="background-color:#fff;">
            <div class="container p-3">
                <p class="fw-semibold">หน้า : จัดการหมวดหมู่</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3" >
        <div class="col-md-12" style="background-color:#fff;">
            <div class="container p-3">

            <div class="custombtn col-md-3">
                <a href="#"><button type="button" data-bs-toggle="modal" data-bs-target="#addCategory"> เพิ่มหมวดหมู่สินค้า</button></a>
            </div>

            <!-- Modal Add Category -->
            <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มหมวดหมู่สินค้า</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                <form action="">
                    <div class="mb-3">
                        <label class="form-label">* รูปภาพ</label>
                        <input type="file" class="form-control" name="img" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">* ชื่อหมวดหมู่</label>
                        <input type="text" class="form-control" name="nameCategory" required>
                    </div>
                    <div class="custombtn text-center py-2">
                        <button type="submit" > เพิ่มหมวดหมู่สินค้า</button>
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
                    <td class="fw-semibold">รูปภาพ</td>
                    <td class="fw-semibold">ชื่อ</td>
                    <td class="fw-semibold">การจัดการ</td>
                </tr>
                <tr>
                    <td width="15%"><p  class="pt-3">1</p></td>
                    <td width="20%"><img src="{{ asset('imgs/category/1.jpg') }}" alt="" width="30%"> </td>
                    <td width="50%"><p  class="pt-3">ของใช้ทั่วไป</p>  </td>
                    <td width="15%"> 
                        <div class="pt-3">
                            <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#editCategory">แก้ไข</button> &nbsp;
                            <button type="button" class="btn btn-outline-danger  btn-sm">ลบ</button>
                        </div>

                        <!-- Modal Edit Category -->
                        <div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">แก้ไขหมวดหมู่สินค้า</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                            <form action="">
                                <div class="mb-3">
                                    <label class="form-label">* เปลี่ยนรูปภาพ</label><br>
                                    <img src="{{ asset('imgs/category/1.jpg') }}" alt="" width="20%" class="pb-3">
                                    <input type="file" class="form-control" name="img" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">* ชื่อหมวดหมู่</label>
                                    <input type="text" class="form-control" name="nameCategory" required>
                                </div>
                                <div class="custombtn text-center py-2">
                                    <button type="submit" > แก้ไขหมวดหมู่สินค้า</button>
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
            </table>

            </div>
        </div>
    </div>

    <!-- end contant -->
    </div>
</div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>