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
                        <li><a href="index" ><img src="{{ URL::asset('/assets/img/icons/dashboard.svg')}}" alt="img"><span> แดชบอร์ด</span> </a></li>
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
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/purchase1.svg')}}" alt="img"><span> การซื้อ</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="purchaselist">รายการซื้อ</a></li>
                                <li><a href="addpurchase">เพิ่มการซื้อ</a></li>
                                <li><a href="importpurchase">นำเข้าการซื้อ</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/expense1.svg')}}" alt="img"><span> ค่าใช้จ่าย</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expenselist">รายการค่าใช้จ่าย</a></li>
                                <li><a href="createexpense">เพิ่มค่าใช้จ่าย</a></li>
                                <li><a href="expensecategory">หมวดหมู่ค่าใช้จ่าย</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/quotation1.svg')}}" alt="img"><span> ใบเสนอราคา</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="quotationList">รายการใบเสนอราคา</a></li>
                                <li><a href="addquotation">เพิ่มใบเสนอราคา</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/transfer1.svg')}}" alt="img"><span> การโอนย้าย</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="transferlist">รายการโอนย้าย</a></li>
                                <li><a href="addtransfer">เพิ่มการโอนย้าย</a></li>
                                <li><a href="importtransfer">นำเข้าการโอนย้าย</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/return1.svg')}}" alt="img"><span> การคืนสินค้า</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="salesreturnlist">รายการคืนสินค้า (ขาย)</a></li>
                                <li><a href="createsalesreturn">เพิ่มคืนสินค้า (ขาย)</a></li>
                                <li><a href="purchasereturnlist">รายการคืนสินค้า (ซื้อ)</a></li>
                                <li><a href="createpurchasereturn">เพิ่มคืนสินค้า (ซื้อ)</a></li>
                            </ul>
                        </li>
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
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/users1.svg')}}" alt="img"><span> ผู้ใช้งาน</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="newuser">เพิ่มผู้ใช้งาน </a></li>
                        <li><a href="userlists">รายการผู้ใช้งาน</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i data-feather="layers"></i> <span> ส่วนประกอบ </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="components" ><i data-feather="layers"></i><span> ส่วนประกอบ</span> </a></li>                  
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="box"></i> <span>องค์ประกอบ </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="sweetalerts">Sweet Alerts</a></li>
                                <li><a href="tooltip">Tooltip</a></li>
                                <li><a href="popover">Popover</a></li>
                                <li><a href="ribbon">Ribbon</a></li>
                                <li><a href="clipboard">Clipboard</a></li>
                                <li><a href="drag-drop">ลากและวาง</a></li>
                                <li><a href="rangeslider">แถบเลื่อนช่วง</a></li>
                                <li><a href="rating">การให้คะแนน</a></li>
                                <li><a href="toastr">Toastr</a></li>
                                <li><a href="text-editor">โปรแกรมแก้ไขข้อความ</a></li>
                                <li><a href="counter">ตัวนับ</a></li>
                                <li><a href="scrollbar">แถบเลื่อน</a></li>
                                <li><a href="spinner">Spinner</a></li>
                                <li><a href="notification">การแจ้งเตือน</a></li>
                                <li><a href="lightbox">Lightbox</a></li>
                                <li><a href="stickynote">Sticky Note</a></li>
                                <li><a href="timeline">ไทม์ไลน์</a></li>
                                <li><a href="form-wizard">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="bar-chart-2"></i> <span> แผนภูมิ </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chart-apex">Apex Charts</a></li>
                                <li><a href="chart-js">Chart Js</a></li>
                                <li><a href="chart-morris">Morris Charts</a></li>
                                <li><a href="chart-flot">Flot Charts</a></li>
                                <li><a href="chart-peity">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="award"></i><span> ไอคอน </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome">Fontawesome Icons</a></li>
                                <li><a href="icon-feather">Feather Icons</a></li>
                                <li><a href="icon-ionic">Ionic Icons</a></li>
                                <li><a href="icon-material">Material Icons</a></li>
                                <li><a href="icon-pe7">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline">Simpleline Icons</a></li>
                                <li><a href="icon-themify">Themify Icons</a></li>
                                <li><a href="icon-weather">Weather Icons</a></li>
                                <li><a href="icon-typicon">Typicon Icons</a></li>
                                <li><a href="icon-flag">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="columns"></i> <span> ฟอร์ม </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs">อินพุตพื้นฐาน </a></li>
                                <li><a href="form-input-groups">กลุ่มอินพุต </a></li>
                                <li><a href="form-horizontal">ฟอร์มแนวนอน </a></li>
                                <li><a href="form-vertical"> ฟอร์มแนวตั้ง </a></li>
                                <li><a href="form-mask">ฟอร์ม Mask </a></li>
                                <li><a href="form-validation">การตรวจสอบฟอร์ม </a></li>
                                <li><a href="form-select2">Form Select2 </a></li>
                                <li><a href="form-fileupload">อัปโหลดไฟล์ </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="layout"></i> <span> ตาราง </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic" >ตารางพื้นฐาน </a></li>
                                <li><a href="data-tables">ตารางข้อมูล </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blankpage" ><i data-feather="file"></i><span> หน้าว่าง</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="alert-octagon"></i> <span> หน้าข้อผิดพลาด </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="error-404">404 Error </a></li>
                                <li><a href="error-500">500 Error </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/product.svg')}}" alt="img"><span> แอปพลิเคชัน</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="chat">แชท</a></li>
                        <li><a href="calendar">ปฏิทิน</a></li>
                        <li><a href="email">อีเมล</a></li>
                    </ul>
                </li>
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
            @if(Route::is(['index-four']))
            <div id="sidebar-menu" class="sidebar-menu sidebar-menu-three">
            <aside id="aside" class="ui-aside">
                <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" role="tab" aria-controls="messages" aria-selected="false">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-01.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation"> 
                        <a class="tablinks nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-02.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation"> 
                        <a class="tablinks nav-link" id="app-tab" data-bs-toggle="tab" data-bs-target="#app" role="tab" aria-controls="app" aria-selected="false">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-04.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#report" id="report-tab" data-bs-toggle="tab" data-bs-target="#report" role="tab" aria-controls="report" aria-selected="true">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-05.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link" href="#set" id="set-tab" data-bs-toggle="tab" data-bs-target="#set" role="tab" aria-controls="set" aria-selected="true">
                            <img src="{{ URL::asset('/assets/img/icons/menu-icon-06.svg')}}" alt="">
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="tab-content tab-content-four pt-2">
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
                <ul class="tab-pane" id="messages" aria-labelledby="messages-tab">
                    <li><a href="newuser">เพิ่มผู้ใช้งาน </a></li>
                    <li><a href="userlists">รายการผู้ใช้งาน</a></li>
                </ul>
                <ul class="tab-pane" id="profile" aria-labelledby="profile-tab">
                    <li><a href="components" ><span> ส่วนประกอบ</span> </a></li>                  
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>องค์ประกอบ</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="sweetalerts">Sweet Alerts</a></li>
                            <li><a href="tooltip">Tooltip</a></li>
                            <li><a href="popover">Popover</a></li>
                            <li><a href="ribbon">Ribbon</a></li>
                            <li><a href="clipboard">Clipboard</a></li>
                            <li><a href="drag-drop">ลากและวาง</a></li>
                            <li><a href="rangeslider">แถบเลื่อนช่วง</a></li>
                            <li><a href="rating">การให้คะแนน</a></li>
                            <li><a href="toastr">Toastr</a></li>
                            <li><a href="text-editor">โปรแกรมแก้ไขข้อความ</a></li>
                            <li><a href="counter">ตัวนับ</a></li>
                            <li><a href="scrollbar">แถบเลื่อน</a></li>
                            <li><a href="spinner">Spinner</a></li>
                            <li><a href="notification">การแจ้งเตือน</a></li>
                            <li><a href="lightbox">Lightbox</a></li>
                            <li><a href="stickynote">Sticky Note</a></li>
                            <li><a href="timeline">ไทม์ไลน์</a></li>
                            <li><a href="form-wizard">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>แผนภูมิ </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="chart-apex">Apex Charts</a></li>
                            <li><a href="chart-js">Chart Js</a></li>
                            <li><a href="chart-morris">Morris Charts</a></li>
                            <li><a href="chart-flot">Flot Charts</a></li>
                            <li><a href="chart-peity">Peity Charts</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> ไอคอน </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="icon-fontawesome">Fontawesome Icons</a></li>
                            <li><a href="icon-feather">Feather Icons</a></li>
                            <li><a href="icon-ionic">Ionic Icons</a></li>
                            <li><a href="icon-material">Material Icons</a></li>
                            <li><a href="icon-pe7">Pe7 Icons</a></li>
                            <li><a href="icon-simpleline">Simpleline Icons</a></li>
                            <li><a href="icon-themify">Themify Icons</a></li>
                            <li><a href="icon-weather">Weather Icons</a></li>
                            <li><a href="icon-typicon">Typicon Icons</a></li>
                            <li><a href="icon-flag">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"> <span>ฟอร์ม </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="form-basic-inputs">อินพุตพื้นฐาน </a></li>
                            <li><a href="form-input-groups">กลุ่มอินพุต </a></li>
                            <li><a href="form-horizontal">ฟอร์มแนวนอน </a></li>
                            <li><a href="form-vertical"> ฟอร์มแนวตั้ง </a></li>
                            <li><a href="form-mask">ฟอร์ม Mask </a></li>
                            <li><a href="form-validation">การตรวจสอบฟอร์ม </a></li>
                            <li><a href="form-select2">Form Select2 </a></li>
                            <li><a href="form-fileupload">อัปโหลดไฟล์ </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"> <span>ตาราง </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="tables-basic" >ตารางพื้นฐาน </a></li>
                            <li><a href="data-tables">ตารางข้อมูล </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blankpage" ><span> หน้าว่าง<span> </a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span> หน้าข้อผิดพลาด </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="error-404">404 Error </a></li>
                            <li><a href="error-500">500 Error </a></li>
                        </ul>
                    </li>
                </ul>              
                <ul class="tab-pane" id="app" aria-labelledby="app-tab">
                    <li><a href="chat">แชท</a></li>
                    <li><a href="calendar">ปฏิทิน</a></li>
                    <li><a href="email">อีเมล</a></li>
                </ul>             
                <ul class="tab-pane" id="report" aria-labelledby="report-tab">
                    <li><a href="purchaseorderreport">รายงานใบสั่งซื้อ</a></li>
                        <li><a href="inventoryreport">รายงานสินค้าคงคลัง</a></li>
                        <li><a href="salesreport">รายงานยอดขาย</a></li>
                        <li><a href="invoicereport">รายงานใบแจ้งหนี้</a></li>
                        <li><a href="purchasereport">รายงานการซื้อ</a></li>
                        <li><a href="supplierreport">รายงานซัพพลายเออร์</a></li>
                        <li><a href="customerreport">รายงานลูกค้า</a></li>
                </ul>           
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
            @if(!Route::is(['index-four']))
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">หลัก</h6>
                    <ul>
                        <li class="{{ Request::is('index','index-two') ? 'active' : '' }}" >
                            <a href="{{url('index')}}"><i data-feather="grid"></i><span>แดชบอร์ด</span></a>
                        </li>
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
                <li class="submenu-open" style="display: none;">
                    <h6 class="submenu-hdr">หน้าเพจ</h6>   
                    <ul>
                        <li class="submenu">
                            <a class="{{ Request::is('signin','signup','forgetpassword','resetpassword') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="shield"></i><span>การยืนยันตัวตน</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="signin">เข้าสู่ระบบ</a></li>
                                <li><a href="signup">ลงทะเบียน</a></li>
                                <li><a href="forgetpassword">ลืมรหัสผ่าน</a></li>
                                <li><a href="resetpassword">รีเซ็ตรหัสผ่าน</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="{{ Request::is('error-404','error-500') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="file-minus"></i><span>หน้าข้อผิดพลาด</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('error-404') ? 'active' : '' }}" href="{{url('error-404')}}">404 Error </a></li>
                                <li><a class="{{ Request::is('error-500') ? 'active' : '' }}" href="{{url('error-500')}}">500 Error </a></li>
                            </ul>
                        </li>
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
                        <li class="{{ Request::is('components') ? 'active' : '' }}">
                            <a href="{{url('components')}}"><i data-feather="pen-tool"></i><span>ส่วนประกอบ</span> </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open" style="display: none;">
                    <h6 class="submenu-hdr">ส่วนต่อประสานผู้ใช้ (UI)</h6>    
                    <ul>
                        <li class="submenu">
                            <a class="{{ Request::is('sweetalerts','tooltip','popover','ribbon','clipboard','drag-drop','rangeslider','toastr','text-editor',
                            'counter','scrollbar','spinner','notification','lightbox','stickynote','timeline','form-wizard') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="layers"></i><span>องค์ประกอบ</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}" href="{{url('sweetalerts')}}">Sweet Alerts</a></li>
                                <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}" href="{{url('tooltip')}}">Tooltip</a></li>
                                <li><a class="{{ Request::is('popover') ? 'active' : '' }}" href="{{url('popover')}}">Popover</a></li>
                                <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}" href="{{url('ribbon')}}">Ribbon</a></li>
                                <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}" href="{{url('clipboard')}}">Clipboard</a></li>
                                <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}" href="{{url('drag-drop')}}">ลากและวาง</a></li>
                                <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}" href="{{url('rangeslider')}}">แถบเลื่อนช่วง</a></li>
                                <li><a class="{{ Request::is('rating') ? 'active' : '' }}" href="{{url('rating')}}">การให้คะแนน</a></li>
                                <li><a class="{{ Request::is('toastr') ? 'active' : '' }}" href="{{url('toastr')}}">Toastr</a></li>
                                <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}" href="{{url('text-editor')}}">โปรแกรมแก้ไขข้อความ</a></li>
                                <li><a class="{{ Request::is('counter') ? 'active' : '' }}" href="{{url('counter')}}">ตัวนับ</a></li>
                                <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}" href="{{url('scrollbar')}}">แถบเลื่อน</a></li>
                                <li><a class="{{ Request::is('spinner') ? 'active' : '' }}" href="{{url('spinner')}}">Spinner</a></li>
                                <li><a class="{{ Request::is('notification') ? 'active' : '' }}" href="{{url('notification')}}">การแจ้งเตือน</a></li>
                                <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}" href="{{url('lightbox')}}">Lightbox</a></li>
                                <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}" href="{{url('stickynote')}}">Sticky Note</a></li>
                                <li><a class="{{ Request::is('timeline') ? 'active' : '' }}" href="{{url('timeline')}}">ไทม์ไลน์</a></li>
                                <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="{{url('form-wizard')}}">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="{{ Request::is('chart-apex','chart-js','chart-morris','chart-flot','chart-peity') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="bar-chart-2"></i><span>แผนภูมิ</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="{{url('chart-apex')}}">Apex Charts</a></li>
                                <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}" href="{{url('chart-js')}}">Chart Js</a></li>
                                <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="{{url('chart-morris')}}">Morris Charts</a></li>
                                <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="{{url('chart-flot')}}">Flot Charts</a></li>
                                <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="{{url('chart-peity')}}">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="{{ Request::is('icon-fontawesome','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline',
                            'icon-themify','icon-weather','icon-typicon','icon-flag') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="database"></i><span>ไอคอน</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}" href="{{url('icon-fontawesome')}}">Fontawesome Icons</a></li>
                                <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="{{url('icon-feather')}}">Feather Icons</a></li>
                                <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="{{url('icon-ionic')}}">Ionic Icons</a></li>
                                <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}" href="{{url('icon-material')}}">Material Icons</a></li>
                                <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="{{url('icon-pe7')}}">Pe7 Icons</a></li>
                                <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}" href="{{url('icon-simpleline')}}">Simpleline Icons</a></li>
                                <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="{{url('icon-themify')}}">Themify Icons</a></li>
                                <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="{{url('icon-weather')}}">Weather Icons</a></li>
                                <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="{{url('icon-typicon')}}">Typicon Icons</a></li>
                                <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="{{url('icon-flag')}}">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="{{ Request::is('form-basic-inputs','form-input-groups','form-horizontal','form-vertical','form-mask','form-validation',
                            'form-select2','form-fileupload') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="edit"></i><span>ฟอร์ม</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{url('form-basic-inputs')}}">อินพุตพื้นฐาน </a></li>
                                <li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{url('form-input-groups')}}">กลุ่มอินพุต </a></li>
                                <li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{url('form-horizontal')}}">ฟอร์มแนวนอน </a></li>
                                <li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{url('form-vertical')}}"> ฟอร์มแนวตั้ง </a></li>
                                <li><a class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{url('form-mask')}}">ฟอร์ม Mask </a></li>
                                <li><a class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{url('form-validation')}}">การตรวจสอบฟอร์ม </a></li>
                                <li><a class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{url('form-select2')}}">Form Select2 </a></li>
                                <li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{url('form-fileupload')}}">อัปโหลดไฟล์ </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a class="{{ Request::is('tables-basic','data-tables') ? 'active subdrop' : '' }}" href="javascript:void(0);"><i data-feather="columns"></i><span>ตาราง</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('tables-basic') ? 'active' : '' }}" href="{{url('tables-basic')}}" >ตารางพื้นฐาน </a></li>
                                <li><a class="{{ Request::is('data-tables') ? 'active' : '' }}" href="{{url('data-tables')}}">ตารางข้อมูล </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open" style="display: none;">
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