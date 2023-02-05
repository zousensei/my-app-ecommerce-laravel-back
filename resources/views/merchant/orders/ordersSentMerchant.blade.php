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
      padding: 5px;
      color: white;
      background-color: #ee4d2d;
      text-align: center;
      cursor: pointer;
      width: 50%;
      font-size: 16px;
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
                <p class="fw-semibold">หน้า : รายการสินค้าที่ส่งแล้ว</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3" >
        <div class="col-md-12" style="background-color:#fff;">
            <div class="container p-3">
               
            <table class="table">
                <tr style="background-color:#fafafa ;">
                    <td class="fw-semibold">#</td>
                    <td class="fw-semibold">รหัสคำสั่งซื้อ</td>
                    <td class="fw-semibold">ชื่อ</td>
                    <td class="fw-semibold">ที่อยู่</td>
                    <td class="fw-semibold">ขนส่ง</td>
                    <td class="fw-semibold">รหัสติดตาม</td>
                    <td class="fw-semibold">การจัดการ</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td >623613 </td>
                    <td >ศตวรรษ พันธุ์หริ่ง</td>
                    <td >92 หมู่ 4 ต.ศรีโคตร อ.จตุรพักตรพิมาน จ.ร้อยเอ็ด 45180</td>
                    <td>ไปรษณีไทย</td>
                    <td class="text-success">TH12365613</td>
                    <td width="15%">
                    <div class="custombtn" >
                        <a href="{{url('/ordersDetailMerchant')}}"><button type="button" >เพิ่มเติม</button></a>
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