<div class="col-md-2" style="width: 250px; background-color: #fff; padding: 20px;height: 100vh;">
    <h4 class="text-center">ZENZOU <span style="color: #ee4d2d ;">SHOP</span> </h4> <hr>
    <p class="px-3"><a href="{{url('/')}}" class="text-decoration-none text-dark"><i class="fa fa-home"></i> หน้าแรก</a> </p>
    <p class="px-3"><a href="{{url('/ordersMerchant')}}" class="text-decoration-none text-dark"><i class="fa fa-shopping-basket"></i> คำสั่งซื้อ</a></p> <hr>
    <p>การจัดการสินค้า</p>
    <p class="px-3 m-0 collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <a href="#" class="text-decoration-none text-dark"><i class="fa fa-cubes"></i> หมวดหมู่</a>
    </p>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-2 px-3">
                       
                <span class="vr"></span> <a href="{{url('/categorysMerchant')}}" class="text-decoration-none text-dark px-2"><i class="fa fa-cube"></i> เพิ่มหมวดหมู่</a> <br>
                <span class="vr"></span> <a href="{{url('/productsMerchant')}}"  class="text-decoration-none text-dark px-2"><i class="fa fa-cube"></i> รายการ 2</a> <br>
                        
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p>Logout</p>
    <p class="px-3"><a href="{{url('/login')}}" class="text-decoration-none text-dark"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></p> <hr>
    
    </div>