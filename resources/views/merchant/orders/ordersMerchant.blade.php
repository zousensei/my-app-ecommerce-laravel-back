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
<body style="background-color: #e9ecef ;">

<div class="row">
    <!-- col-md-3 sideBar -->
    @include('merchant.components.sideBar') 

    <div class="col-md-10" >
    <!-- contant -->

    <div class="container-fluid pt-4" >
        <div class="col-md-12" style="background-color:#fff;">
            <div class="container p-3">
                <p class="fw-semibold">หน้า : คำสั่งซื้อ</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-3" >
        <div class="col-md-12" style="background-color:#fff;">
            <div class="container p-3">
               
            <table class="table">
                <tr>
                    <td>1</td>
                    <td width="15%">ID Order : 623613 </td>
                    <td width="55%">- น้ำปลา <br> - น้ำตาล  <br> - ผงชูรส</td>
                    <td>รวมการสั่งซื้อ : <br> 990 บาท</td>
                    <td>12-12-2024</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td width="15%">ID Order : 623613 </td>
                    <td width="55%">- น้ำปลา <br> - น้ำตาล  <br> - ผงชูรส</td>
                    <td>รวมการสั่งซื้อ : <br> 990 บาท</td>
                    <td>12-12-2024</td>
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