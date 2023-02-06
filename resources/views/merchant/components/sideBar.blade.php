<div class="col-md-2" style="width: 200px; background-color: #fff; padding: 20px;height: 150vh;">
    <h4 class="text-center">ZENZOU <span style="color: #ee4d2d ;">SHOP</span> </h4> <hr>
    <p class="px-3"><a href="{{url('/')}}" class="text-decoration-none text-dark"><i class="fa fa-home"></i> หน้าแรก</a> </p>
    <p class="px-3"><a href="{{url('/ordersMerchant')}}" class="text-decoration-none text-dark"><i class="fa fa-shopping-basket"></i> คำสั่งซื้อ</a></p> 
    <p class="px-3"><a href="{{url('/ordersSentMerchant')}}" class="text-decoration-none text-dark"><i class="fa fa-truck"></i> สินค้าส่งแล้ว</a></p> <hr>
    <p>การจัดการสินค้า</p>
    <p class="px-3 m-0 collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <a href="#" class="text-decoration-none text-dark"><i class="fa fa-cubes"></i> หมวดหมู่</a>
    </p>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body p-2 px-3">
                       
                <span class="vr"></span> <a href="{{url('/categorysMerchant')}}" class="text-decoration-none text-dark px-2"><i class="fa fa-cube"></i> เพิ่มหมวดหมู่</a> <br>
                <?php
                    $category_sidebar = DB::Table('tb_category')->get(); 
                ?>
                @foreach ($category_sidebar as $category_sidebars)
                <span class="vr"></span> <a href="{{url('/productsMerchant')}}"  class="text-decoration-none text-dark px-2"><i class="fa fa-circle-o"></i> {{ $category_sidebars->category_name }}</a> <br>
                @endforeach    
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p>Logout</p>
    <p class="px-3"><a href="{{url('/login')}}" class="text-decoration-none text-dark"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></p> <hr>
    
    </div>