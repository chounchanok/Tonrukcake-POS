@if(Route::is(['index-one','index-three'])) 
@if(!Route::is(['index-three']))
    <div class="sidebar new-header sidebar-one">
    @endif
    @if(Route::is(['index-three']))
    <div class="sidebar side-three new-header">
    @endif
    @if(Route::is(['index-three']))
    <div class="container">
    @endif
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="nav">
                <li class="submenu">
                    <a href="index" ><img src="{{ URL::asset('/assets/img/icons/menu-icon.svg')}}" alt="img"><span> เมนูหลัก</span> <span class="menu-arrow"></span></a>
                    <ul>
                        {{-- 1. แดชบอร์ด --}}
                        <li><a href="index" ><img src="{{ URL::asset('/assets/img/icons/dashboard.svg')}}" alt="img"><span> แดชบอร์ด</span> </a></li>
                        
                        {{-- 2. สินค้า (Products) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/product.svg')}}" alt="img"><span> สินค้า</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="productlist">รายการสินค้า</a></li>
                                <li><a href="addproduct">เพิ่มสินค้า</a></li>
                                <li><a href="categorylist">รายการหมวดหมู่</a></li>
                                <li><a href="addcategory">เพิ่มหมวดหมู่</a></li>
                                <li><a href="subcategorylist">รายการหมวดหมู่ย่อย</a></li>
                                <li><a href="subaddcategory">เพิ่มหมวดหมู่ย่อย</a></li>
                                <li><a href="brandlist">รายการแบรนด์</a></li>
                                <li><a href="addbrand">เพิ่มแบรนด์</a></li>
                                <li><a href="importproduct">นำเข้าสินค้า</a></li>
                                <li><a href="barcode">พิมพ์บาร์โค้ด</a></li>
                            </ul>
                        </li>                                    
                        
                        {{-- 3. การขาย (Sales) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/sales1.svg')}}" alt="img"><span> การขาย</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="saleslist">รายการขาย</a></li>
                                <li><a href="pos">ระบบ POS</a></li>
                                <li><a href="pos">ขายใหม่</a></li>
                                <li><a href="salesreturnlists">รายการคืนสินค้า (ขาย)</a></li>
                                <li><a href="createsalesreturns">เพิ่มคืนสินค้า (ขาย)</a></li>
                            </ul>
                        </li>
                        
                        {{-- 4. การซื้อ (Purchase) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/purchase1.svg')}}" alt="img"><span> การซื้อ</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="purchaselist">รายการซื้อ</a></li>
                                <li><a href="addpurchase">เพิ่มการซื้อ</a></li>
                                <li><a href="importpurchase">นำเข้าการซื้อ</a></li>
                            </ul>
                        </li>
                        
                        {{-- 5. ค่าใช้จ่าย (Expense) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/expense1.svg')}}" alt="img"><span> ค่าใช้จ่าย</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expenselist">รายการค่าใช้จ่าย</a></li>
                                <li><a href="createexpense">เพิ่มค่าใช้จ่าย</a></li>
                                <li><a href="expensecategory">หมวดหมู่ค่าใช้จ่าย</a></li>
                            </ul>
                        </li>
                        
                        {{-- 6. ใบเสนอราคา (Quotation) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/quotation1.svg')}}" alt="img"><span> ใบเสนอราคา</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="quotationList">รายการใบเสนอราคา</a></li>
                                <li><a href="addquotation">เพิ่มใบเสนอราคา</a></li>
                            </ul>
                        </li>
                        
                        {{-- 7. การโอนย้าย (Transfer) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/transfer1.svg')}}" alt="img"><span> การโอนย้าย</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="transferlist">รายการโอนย้าย</a></li>
                                <li><a href="addtransfer">เพิ่มการโอนย้าย</a></li>
                                <li><a href="importtransfer">นำเข้าการโอนย้าย</a></li>
                            </ul>
                        </li>
                        
                        {{-- 8. การคืนสินค้า (Return) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/return1.svg')}}" alt="img"><span> การคืนสินค้า</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="salesreturnlist">รายการคืนสินค้า (ขาย)</a></li>
                                <li><a href="createsalesreturn">เพิ่มคืนสินค้า (ขาย)</a></li>
                                <li><a href="purchasereturnlist">รายการคืนสินค้า (ซื้อ)</a></li>
                                <li><a href="createpurchasereturn">เพิ่มคืนสินค้า (ซื้อ)</a></li>
                            </ul>
                        </li>
                        
                        {{-- 9. บุคลากร (People) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/users1.svg')}}" alt="img"><span> บุคลากร</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="customerlist">รายการลูกค้า</a></li>
                                <li><a href="addcustomer">เพิ่มลูกค้า </a></li>
                                <li><a href="supplierlist">รายการซัพพลายเออร์</a></li>
                                <li><a href="addsupplier">เพิ่มซัพพลายเออร์ </a></li>
                                <li><a href="userlist">รายการผู้ใช้งาน</a></li>
                                <li><a href="adduser">เพิ่มผู้ใช้งาน</a></li>
                                <li><a href="storelist">รายการคลังสินค้า</a></li>
                                <li><a href="addstore">เพิ่มคลังสินค้า</a></li>
                            </ul>
                        </li>                                                       
                        
                        {{-- 10. สถานที่ (Places) --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/places.svg')}}" alt="img"><span> สถานที่</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newcountry">เพิ่มประเทศ</a></li>
                                <li><a href="countrieslist">รายการประเทศ</a></li>
                                <li><a href="newstate">เพิ่มรัฐ/จังหวัด </a></li>
                                <li><a href="statelist">รายการรัฐ/จังหวัด</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                {{-- ************ เมนูที่ถูกตัดออก: Components, UI Interface ************ --}}
                
                {{-- 11. ผู้ใช้งาน (รวมการจัดการผู้ใช้งาน) --}}
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/users1.svg')}}" alt="img"><span> ผู้ใช้งาน</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="newuser">เพิ่มผู้ใช้งาน </a></li>
                        <li><a href="userlists">รายการผู้ใช้งาน</a></li>
                    </ul>
                </li>
                
                {{-- 12. แอปพลิเคชัน --}}
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/product.svg')}}" alt="img"><span> แอปพลิเคชัน</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="chat">แชท</a></li>
                        <li><a href="calendar">ปฏิทิน</a></li>
                        <li><a href="email">อีเมล</a></li>
                    </ul>
                </li>
                
                {{-- 13. รายงาน (Report) --}}
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/time.svg')}}" alt="img"><span> รายงาน</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="purchaseorderreport">รายงานใบสั่งซื้อ</a></li>
                        <li><a href="inventoryreport">รายงานสินค้าคงคลัง</a></li>
                        <li><a href="salesreport">รายงานยอดขาย</a></li>
                        <li><a href="invoicereport">รายงานใบแจ้งหนี้</a></li>
                        <li><a href="purchasereport">รายงานการซื้อ</a></li>
                        <li><a href="supplierreport">รายงานซัพพลายเออร์</a></li>
                        <li><a href="customerreport">รายงานลูกค้า</a></li>
                    </ul>
                </li>
                
                {{-- 14. ตั้งค่า (Settings) --}}
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/settings.svg')}}" alt="img"><span> ตั้งค่า</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="generalsettings">ตั้งค่าทั่วไป</a></li>
                        <li><a href="emailsettings">ตั้งค่าอีเมล</a></li>
                        <li><a href="paymentsettings">ตั้งค่าการชำระเงิน</a></li>
                        <li><a href="currencysettings">ตั้งค่าสกุลเงิน</a></li>
                        <li><a href="grouppermissions">สิทธิ์กลุ่ม</a></li>
                        <li><a href="taxrates">อัตราภาษี</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    @if(Route::is(['index-three']))
    </div>
    @endif
</div>
@endif

@if(Route::is(['index-two']))
<div class="container">
@endif
@if(!Route::is(['index-one','index-two','index-three','index-four']))
<div class="sidebar" id="sidebar">
@endif
@if(Route::is(['index-one']))
<div class="sidebar sidebar-one hide-sidebar" id="sidebar">
@endif
@if(Route::is(['index-two']))
<div class="sidebar sidebar-two" id="sidebar">
@endif    
@if(Route::is(['index-three']))
<div class="sidebar sidebar-three hide-sidebar" id="sidebar">
@endif
@if(Route::is(['index-four']))
<div class="sidebar sidebar-four" id="sidebar">
@endif
    <div class="sidebar-inner slimscroll">
        @if(!Route::is(['index-four']))
        <div id="sidebar-menu" class="sidebar-menu">
            @endif
            
            {{-- ********** Sidebar สำหรับ index-four (Tab Based) ********** --}}
            @if(Route::is(['index-four']))
            <div id="sidebar-menu" class="sidebar-menu sidebar-menu-three">
            <aside id="aside" class="ui-aside">
                <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"  role="tab" aria-controls="home" aria-selected="true">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"  role="tab" aria-controls="messages" aria-selected="false">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-01.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation"> 
                        <a class="tablinks nav-link" id="app-tab" data-bs-toggle="tab" data-bs-target="#app"  role="tab" aria-controls="app" aria-selected="false">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-04.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#report" id="report-tab" data-bs-toggle="tab" data-bs-target="#report"  role="tab" aria-controls="report" aria-selected="true">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-05.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set" id="set-tab" data-bs-toggle="tab" data-bs-target="#set"  role="tab" aria-controls="set" aria-selected="true">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-06.svg')}}" alt="">
                        </a>
                    </li>
                    {{-- Tab Icons ที่ไม่ได้ใช้ (Profile) ถูกตัดออก --}}
                </ul>
            </aside>
            <div class="tab-content tab-content-four pt-2">
                {{-- Tab 1: Home (แดชบอร์ด, สินค้า, ซื้อ, ขาย, คชจ, โอน, คืน, คน, สถานที่) --}}
                <ul class="tab-pane active" id="home" aria-labelledby="home-tab">
                    <li><a href="index" ><span> แดชบอร์ด</span> </a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> สินค้า</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="productlist">รายการสินค้า</a></li>
                            <li><a href="addproduct">เพิ่มสินค้า</a></li>
                            <li><a href="categorylist">รายการหมวดหมู่</a></li>
                            <li><a href="addcategory">เพิ่มหมวดหมู่</a></li>
                            <li><a href="subcategorylist">รายการหมวดหมู่ย่อย</a></li>
                            <li><a href="subaddcategory">เพิ่มหมวดหมู่ย่อย</a></li>
                            <li><a href="brandlist">รายการแบรนด์</a></li>
                            <li><a href="addbrand">เพิ่มแบรนด์</a></li>
                            <li><a href="importproduct">นำเข้าสินค้า</a></li>
                            <li><a href="barcode">พิมพ์บาร์โค้ด</a></li>
                        </ul>
                    </li>                                    
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> การขาย</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="saleslist">รายการขาย</a></li>
                            <li><a href="pos">ระบบ POS</a></li>
                            <li><a href="pos">ขายใหม่</a></li>
                            <li><a href="salesreturnlists">รายการคืนสินค้า (ขาย)</a></li>
                            <li><a href="createsalesreturns">เพิ่มคืนสินค้า (ขาย)</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> การซื้อ</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="purchaselist">รายการซื้อ</a></li>
                            <li><a href="addpurchase">เพิ่มการซื้อ</a></li>
                            <li><a href="importpurchase">นำเข้าการซื้อ</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> ค่าใช้จ่าย</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="expenselist">รายการค่าใช้จ่าย</a></li>
                            <li><a href="createexpense">เพิ่มค่าใช้จ่าย</a></li>
                            <li><a href="expensecategory">หมวดหมู่ค่าใช้จ่าย</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> ใบเสนอราคา</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="quotationList">รายการใบเสนอราคา</a></li>
                            <li><a href="addquotation">เพิ่มใบเสนอราคา</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> การโอนย้าย</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="transferlist">รายการโอนย้าย</a></li>
                            <li><a href="addtransfer">เพิ่มการโอนย้าย</a></li>
                            <li><a href="importtransfer">นำเข้าการโอนย้าย</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> การคืนสินค้า</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="salesreturnlist">รายการคืนสินค้า (ขาย)</a></li>
                            <li><a href="createsalesreturn">เพิ่มคืนสินค้า (ขาย)</a></li>
                            <li><a href="purchasereturnlist">รายการคืนสินค้า (ซื้อ)</a></li>
                            <li><a href="createpurchasereturn">เพิ่มคืนสินค้า (ซื้อ)</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> บุคลากร</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="customerlist">รายการลูกค้า</a></li>
                            <li><a href="addcustomer">เพิ่มลูกค้า </a></li>
                            <li><a href="supplierlist">รายการซัพพลายเออร์</a></li>
                            <li><a href="addsupplier">เพิ่มซัพพลายเออร์ </a></li>
                            <li><a href="userlist">รายการผู้ใช้งาน</a></li>
                            <li><a href="adduser">เพิ่มผู้ใช้งาน</a></li>
                            <li><a href="storelist">รายการคลังสินค้า</a></li>
                            <li><a href="addstore">เพิ่มคลังสินค้า</a></li>
                        </ul>
                    </li>                                                       
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> สถานที่</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="newcountry">เพิ่มประเทศ</a></li>
                            <li><a href="countrieslist">รายการประเทศ</a></li>
                            <li><a href="newstate">เพิ่มรัฐ/จังหวัด </a></li>
                            <li><a href="statelist">รายการรัฐ/จังหวัด</a></li>
                        </ul>
                    </li>
                </ul>
                
                {{-- Tab 2: Messages (การจัดการผู้ใช้งาน) --}}
                <ul class="tab-pane" id="messages" aria-labelledby="messages-tab">
                    <li><a href="newuser">เพิ่มผู้ใช้งาน </a></li>
                    <li><a href="userlists">รายการผู้ใช้งาน</a></li>
                </ul>
                
                {{-- Tab 3: Profile (ถูกตัดออก - ไม่มีในนี้แล้ว) --}}
                
                {{-- Tab 4: App (แอปพลิเคชัน) --}}
                <ul class="tab-pane" id="app" aria-labelledby="app-tab">
                    <li><a href="chat">แชท</a></li>
                    <li><a href="calendar">ปฏิทิน</a></li>
                    <li><a href="email">อีเมล</a></li>
                </ul>                         
                
                {{-- Tab 5: Report (รายงาน) --}}
                <ul class="tab-pane" id="report" aria-labelledby="report-tab">
                    <li><a href="purchaseorderreport">รายงานใบสั่งซื้อ</a></li>
                        <li><a href="inventoryreport">รายงานสินค้าคงคลัง</a></li>
                        <li><a href="salesreport">รายงานยอดขาย</a></li>
                        <li><a href="invoicereport">รายงานใบแจ้งหนี้</a></li>
                        <li><a href="purchasereport">รายงานการซื้อ</a></li>
                        <li><a href="supplierreport">รายงานซัพพลายเออร์</a></li>
                        <li><a href="customerreport">รายงานลูกค้า</a></li>
                </ul>                      
                
                {{-- Tab 6: Settings (ตั้งค่า) --}}
                <ul class="tab-pane" id="set" aria-labelledby="set-tab">
                    <li><a href="generalsettings">ตั้งค่าทั่วไป</a></li>
                    <li><a href="emailsettings">ตั้งค่าอีเมล</a></li>
                    <li><a href="paymentsettings">ตั้งค่าการชำระเงิน</a></li>
                    <li><a href="currencysettings">ตั้งค่าสกุลเงิน</a></li>
                    <li><a href="grouppermissions">สิทธิ์กลุ่ม</a></li>
                    <li><a href="taxrates">อัตราภาษี</a></li>
                </ul>
                
             </div>
            @endif
            
            {{-- ********** Sidebar สำหรับ Default, index-two ********** --}}
            @if(!Route::is(['index-four']))
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">หลัก</h6>
                    <ul>
                        {{-- 1. แดชบอร์ด --}}
                        <li class="{{ Request::is('index','index-two') ? 'active' : '' }}" >
                            <a href="{{url('index')}}"><i data-feather="grid"></i><span>แดชบอร์ด</span></a>
                        </li>
                        {{-- 2. แอปพลิเคชัน --}}
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('chat','calendar','email') ? 'active subdrop' : '' }}"><i data-feather="smartphone"></i><span>แอปพลิเคชัน</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">แชท</a></li>
                                <li><a class="{{ Request::is('calendar') ? 'active' : '' }}" href="{{url('calendar')}}">ปฏิทิน</a></li>
                                <li><a class="{{ Request::is('email') ? 'active' : '' }}" href="{{url('email')}}">อีเมล</a></li>
                            </ul>
                        </li>
                    </ul>                               
                </li>
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">สินค้า</h6>
                    <ul>
                        <li class="{{ Request::is('productlist','editproduct') ? 'active' : '' }}"><a href="{{url('productlist')}}"><i data-feather="box"></i><span>สินค้า</span></a></li>
                        <li class="{{ Request::is('addproduct','product-details') ? 'active' : '' }}"><a href="{{url('addproduct')}}"><i data-feather="plus-square"></i><span>สร้างสินค้า</span></a></li>
                        <li class="{{ Request::is('categorylist','addcategory','editcategory') ? 'active' : '' }}"><a href="{{url('categorylist')}}"><i data-feather="codepen"></i><span>หมวดหมู่</span></a></li>
                        <li class="{{ Request::is('brandlist','addbrand','editbrand') ? 'active' : '' }}"><a href="{{url('brandlist')}}"><i data-feather="tag"></i><span>แบรนด์</span></a></li>
                        <li class="{{ Request::is('subcategorylist','editsubcategory','subaddcategory') ? 'active' : '' }}"><a href="{{url('subcategorylist')}}"><i data-feather="speaker"></i><span>หมวดหมู่ย่อย</span></a></li>                                   
                        <li class="{{ Request::is('barcode') ? 'active' : '' }}"><a href="{{url('barcode')}}"><i data-feather="align-justify"></i><span>พิมพ์บาร์โค้ด</span></a></li>
                        <li class="{{ Request::is('importproduct') ? 'active' : '' }}"><a href="{{url('importproduct')}}"><i data-feather="minimize-2"></i><span>นำเข้าสินค้า</span></a></li>
                    </ul>
                </li>
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">การขาย</h6>
                    <ul>
                        <li class="{{ Request::is('saleslist','sales-details','add-sales','edit-sales') ? 'active' : '' }}"><a href="{{url('saleslist')}}"><i data-feather="shopping-cart"></i><span>การขาย</span></a></li>
                        <li class="{{ Request::is('invoicereport') ? 'active' : '' }}"><a href="{{url('invoicereport')}}"><i data-feather="file-text"></i><span>ใบแจ้งหนี้</span></a></li>
                        <li class="{{ Request::is('salesreturnlists','editsalesreturns','createsalesreturns') ? 'active' : '' }}"><a href="{{url('salesreturnlists')}}"><i data-feather="copy"></i><span>คืนสินค้า (ขาย)</span></a></li>   
                        <li class="{{ Request::is('quotationlist','editquotation','addquotation') ? 'active' : '' }}"><a href="{{url('quotationlist')}}"><i data-feather="save"></i><span>ใบเสนอราคา</span></a></li>                             
                        <li class="{{ Request::is('pos') ? 'active' : '' }}"><a href="{{url('pos')}}"><i data-feather="hard-drive"></i><span>ระบบ POS</a></li>
                        <li class="submenu">
                            <a class="{{ Request::is('transferlist','addtransfer','importtransfer','edittransfer') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="shuffle"></i><span>การโอนย้าย</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('transferlist','edittransfer','addtransfer') ? 'active' : '' }}" href="{{url('transferlist')}}">รายการโอนย้าย</a></li>
                                <li><a class="{{ Request::is('importtransfer') ? 'active' : '' }}" href="{{url('importtransfer')}}">นำเข้าการโอนย้าย </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="{{ Request::is('salesreturnlist','createsalesreturn','editsalesreturn','purchasereturnlist','editpurchasereturn','createpurchasereturn') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="corner-up-left"></i><span>การคืนสินค้า</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('salesreturnlist','editsalesreturn') ? 'active' : '' }}" href="{{url('salesreturnlist')}}">คืนสินค้า (ขาย)</a></li>
                                <li><a class="{{ Request::is('purchasereturnlist','createpurchasereturn','editpurchasereturn') ? 'active' : '' }}" href="{{url('purchasereturnlist')}}">คืนสินค้า (ซื้อ)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">การซื้อ</h6>
                    <ul>
                        <li class="{{ Request::is('purchaselist','editpurchase','addpurchase') ? 'active' : '' }}"><a href="{{url('purchaselist')}}"><i data-feather="shopping-bag"></i><span>การซื้อ</span></a></li>
                        <li class="{{ Request::is('importpurchase') ? 'active' : '' }}"><a href="{{url('importpurchase')}}"><i data-feather="minimize-2"></i><span>นำเข้าการซื้อ</span></a></li>
                        <li class="{{ Request::is('purchaseorderreport') ? 'active' : '' }}"><a href="{{url('purchaseorderreport')}}"><i data-feather="file-minus"></i><span>ใบสั่งซื้อ</span></a></li>
                        <li class="{{ Request::is('purchasereturnlist') ? 'active' : '' }}"><a href="{{url('purchasereturnlist')}}"><i data-feather="refresh-cw"></i><span>คืนสินค้า (ซื้อ)</span></a></li>                                  
                    </ul>
                </li>
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">การเงินและบัญชี</h6>                             
                    <ul>
                        <li class="submenu">
                            <a class="{{ Request::is('expenselist','createexpense','editexpense','expensecategory') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="file-text"></i><span>ค่าใช้จ่าย</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('expenselist','createexpense','editexpense') ? 'active' : '' }}" href="{{url('expenselist')}}">ค่าใช้จ่าย</a></li>
                                <li><a class="{{ Request::is('expensecategory') ? 'active' : '' }}" href="{{url('expensecategory')}}">หมวดหมู่ค่าใช้จ่าย</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">บุคลากร</h6>        
                    <ul>
                        <li class="{{ Request::is('customerlist','addcustomer','editcustomer') ? 'active' : '' }}"><a href="{{url('customerlist')}}"><i data-feather="user"></i><span>ลูกค้า</span></a></li>
                        <li class="{{ Request::is('supplierlist') ? 'active' : '' }}"><a href="{{url('supplierlist')}}"><i data-feather="users"></i><span>ซัพพลายเออร์</span></a></li>
                        <li class="{{ Request::is('userlist') ? 'active' : '' }}"><a href="{{url('userlist')}}"><i data-feather="user-check"></i><span>ผู้ใช้งาน</span></a></li>
                        <li class="{{ Request::is('storelist','addstore','editstore') ? 'active' : '' }}"><a href="{{url('storelist')}}"><i data-feather="home"></i><span>คลังสินค้า</span></a></li>
                    </ul>
                </li>
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">รายงาน</h6>
                    <ul>
                        <li class="{{ Request::is('salesreport') ? 'active' : '' }}"><a href="{{url('salesreport')}}"><i data-feather="bar-chart-2"></i><span>รายงานยอดขาย</span></a></li>
                        <li class="{{ Request::is('purchaseorderreport') ? 'active' : '' }}"><a href="{{url('purchaseorderreport')}}"><i data-feather="pie-chart"></i><span>รายงานการซื้อ</span></a></li>
                        <li class="{{ Request::is('inventoryreport') ? 'active' : '' }}"><a href="{{url('inventoryreport')}}"><i data-feather="credit-card"></i><span>รายงานสินค้าคงคลัง</span></a></li>                                  
                        <li class="{{ Request::is('invoicereport') ? 'active' : '' }}"><a href="{{url('invoicereport')}}"><i data-feather="file"></i><span>รายงานใบแจ้งหนี้</span></a></li>
                        <li class="{{ Request::is('purchasereport') ? 'active' : '' }}"><a href="{{url('purchasereport')}}"><i data-feather="bar-chart"></i><span>รายงานการซื้อ</span></a></li>
                        <li class="{{ Request::is('supplierreport','addsupplier') ? 'active' : '' }}"><a href="{{url('supplierreport')}}"><i data-feather="database"></i><span>รายงานซัพพลายเออร์</span></a></li>
                        <li class="{{ Request::is('customerreport') ? 'active' : '' }}"><a href="{{url('customerreport')}}"><i data-feather="pie-chart"></i><span>รายงานลูกค้า</span></a></li>
                    </ul>
                </li>                                                           
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">การจัดการผู้ใช้งาน</h6>        
                    <ul>
                        <li class="submenu">
                            <a class="{{ Request::is('newuser','userlists','newuseredit') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="users"></i><span>จัดการผู้ใช้งาน</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('newuser','newuseredit') ? 'active' : '' }}" href="{{url('newuser')}}">ผู้ใช้งานใหม่ </a></li>
                                <li><a class="{{ Request::is('userlists') ? 'active' : '' }}" href="{{url('userlists')}}">รายการผู้ใช้งาน</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>           
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">อื่นๆ</h6>      
                    <ul>
                        {{-- Authentication/Error Pages ถูกตัดออก แต่เก็บ Places และ Logout ไว้ --}}
                        <li class="submenu">
                            <a class="{{ Request::is('newcountry','countrieslist','editstate','editcountry','newstate','statelist') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="map"></i><span>สถานที่</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('countrieslist','editcountry','newcountry') ? 'active' : '' }}" href="{{url('countrieslist')}}">ประเทศ</a></li>
                                <li><a class="{{ Request::is('statelist','editstate','newstate') ? 'active' : '' }}" href="{{url('statelist')}}">รัฐ/จังหวัด</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('blankpage') ? 'active' : '' }}">
                            <a href="{{url('blankpage')}}" ><i data-feather="file"></i><span>หน้าว่าง</span> </a>
                        </li>
                    </ul>
                </li>
                
                {{-- ************ เมนูที่ถูกตัดออก: UI Interface ************ --}}
                
                <li class="submenu-open">
                    <h6 class="submenu-hdr">ตั้งค่า</h6>       
                    <ul>
                        <li class="submenu">
                            <a class="{{ Request::is('generalsettings','emailsettings','paymentsettings','createpermission','editpermission','currencysettings','grouppermissions','taxrates') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="settings"></i><span>ตั้งค่า</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('generalsettings') ? 'active' : '' }}" href="{{url('generalsettings')}}">ตั้งค่าทั่วไป</a></li>
                                <li><a class="{{ Request::is('emailsettings') ? 'active' : '' }}" href="{{url('emailsettings')}}">ตั้งค่าอีเมล</a></li>
                                <li><a class="{{ Request::is('paymentsettings') ? 'active' : '' }}" href="{{url('paymentsettings')}}">ตั้งค่าการชำระเงิน</a></li>
                                <li><a class="{{ Request::is('currencysettings') ? 'active' : '' }}" href="{{url('currencysettings')}}">ตั้งค่าสกุลเงิน</a></li>
                                <li><a class="{{ Request::is('grouppermissions','editpermission','createpermission') ? 'active' : '' }}" href="{{url('grouppermissions')}}">สิทธิ์กลุ่ม</a></li>
                                <li><a class="{{ Request::is('taxrates') ? 'active' : '' }}" href="{{url('taxrates')}}">อัตราภาษี</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('signin')}}" ><i data-feather="log-out"></i><span>ออกจากระบบ</span> </a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif 
            
        </div>
    </div>
</div>