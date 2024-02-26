@vite(["resources/sass/app.scss"])
<style>
    *{
        margin:0;
        padding:0;
        font-family:arial;
        font-size:13px;
        color:#333;
    }

    body{
        background:#F0E8E8;
    }

    #header{
        background: #1757FB;
        display: block;
        height: 40px;
    }

    #header p{
        display:inline-block;
        height:20px;
        line-height:40px;
        text-align:center;
        color: #fff;
        font-size: 14px;
        font-weight: 100;
    }


    .mt-3 {
        margin-top: 0.5rem!important;
    }

    .form-inline {
        display: -ms-flexbox;
        display: flex;
        align-items: center;
    }

    #search input {
        width: 50%;
        border-radius: 3px 0 0 3px;
    }

    #search button {
        background: #B2B2B2;
    }
    #search button {
        border-radius: 0 3px 3px 0;
    }

    .btn-danger {
        color: #fff;
         background-color: #B2B2B2;
         border-color: #B2B2B2;
    }

    #cart {
        text-align: right;
        line-height: 60px;
        cursor: pointer;
    }

    #cart a {
        text-decoration: none;
        text-transform: capitalize;
        position: relative;
    }

    #cart a, #cart span {
        color: #FFF;
        text-decoration: none;
        text-transform: capitalize;
    }

    .fa-solid, .fas {
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
    }

    #cart span {
        display: inline-block;
        width: 20px;
        height: 20px;
        line-height: 20px;
        text-align: center;
        position: absolute;
        border-radius: 100%;
        right: -4px;
        top: -31px;
        color: #fff;
        font-size: 14px;
        font-weight: 100;
    }

    #menu {
        display: block;
    }

    #menu  {
        overflow: hidden;
        background: #FF0000;
    }

    #menu ul {
        margin: 0;
    }

    #menu ul li a {
        color: white;
    }

    .menu-item {
        float: left;
        list-style: none;
        padding: 10px;
        border-right: 1px solid #FF0000;
        display: block;
        width: auto;
    }

    .menu-item a {
        text-decoration: none;
    }

</style>
<!-- Header -->
<div id="header">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <p>Hotline: 0934512765</p>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div  class="col-lg-2 col-md-3 col-sm-12">

            </div>
            <div id="search" class="col-lg-7 col-md-6 col-sm-12">
                <form class="form-inline">
                    <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                <a class="mt-4 mr-2" href="#">
                    <i class="fa-solid fa-cart-shopping cart-icon"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header  -->
<nav>
    <div id="menu" class="collapse navbar-collapse">
        <ul>
            <li class="menu-item"><a href="#">Hàng mới</a></li>
            <li class="menu-item"><a href="#">Danh mục</a></li>
            <li class="menu-item"><a href="#">Sản phẩm</a></li>
            <li class="menu-item"><a href="#">Độ tuổi</a></li>
            <li class="menu-item"><a href="#">Giới tính</a></li>
            <li class="menu-item"><a href="#">Khuyễn mãi</a></li>
            <li class="menu-item"><a href="#">Ưu đãi khách hàng</a></li>
        </ul>
    </div>
</nav>
<!--    Banner  -->
<div id="Banner">
    <div></div>
</div>
<!--    End Banner  -->
<!--	Body	-->
<div id="body">
    <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12"></div>
        <div class="row">
            <div id="main" class="col-lg-8 col-md-12 col-sm-12">
                <!--	Slider	-->
                <div id="slide" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#slide" data-slide-to="0" class="active"></li>
                        <li data-target="#slide" data-slide-to="1"></li>
                        <li data-target="#slide" data-slide-to="2"></li>
                        <li data-target="#slide" data-slide-to="3"></li>
                        <li data-target="#slide" data-slide-to="4"></li>
                        <li data-target="#slide" data-slide-to="5"></li>
                    </ul>

                <!--	Feature Product	-->
                <div class="products">
                    <h3>Bán chạy</h3>
                    <div class="product-list row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="product.html"><img src="images/product/product-1.png"></a>
                                <h4><a href="product.html">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="product.html"><img src="images/product/product-2.png"></a>
                                <h4><a href="product.html">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-3.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-4.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-5.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-6.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--	End Feature Product	-->


                <!--	Latest Product	-->
                <div class="products">
                    <h3>Sản phẩm mới</h3>
                    <div class="product-list row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-1.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-2.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-3.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-4.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-5.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product/product-6.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="footer-top">
    <div class="container">
        <div class="row">
            <div id="address" class=" col-md-6 col-sm-12">
                <h3>Địa chỉ</h3>
                <p>Số 300 - Kim Mã</p>
                <p>Hưng Thịnh - Yên Sở Hoàng Mai - Hà Nội</p>
            </div>
            <div id="hotline" class=" col-md-6 col-sm-12">
                <h3>Hotline</h3>
                <p>Phone Sale: (+84) 0395954444</p>
                <p>Email: huynguyenhuynv@gmail.com</p>
            </div>
        </div>
    </div>
</div>

{{--<table class="table table-bordered table-striped table-hover">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>price</td>
    </tr>
    @foreach($products as $obj)
        <tr>
            <td>{{$obj->id}}</td>
            <td>{{$obj->product_name}}</td>
            <td>{{$obj->price}}</td>
        </tr>
    @endforeach
</table>--}}
</div>
