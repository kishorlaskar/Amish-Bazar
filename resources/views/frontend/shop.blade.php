@extends('frontend.frontend-shop-blog')

@section('shop-content')
    <div class="fix">
        <a data-toggle="modal" data-target="#cart">
            <img src="./images/icons/fix.png" alt="">
            <div class="fix-info">
                <p>50 Items</p>
                <h6>৳ 45000</h6>
            </div>
        </a>
    </div>

    <!-- all products -->

    <div class="container-fluid shop-products">

        <!-- sidebar -->

        <div id="see-side" class="see-side">
            <!-- <div id="mySidenav" class="sidenav"> -->
            <div id="custom" class="custom">
                <a href="" class="menu d-flex align-items-center">
                    <p></p>
                    <img src="{{ asset('frontend/images/icons/coronavirus.png') }}" alt="">
                    <p>COVID-19 Protections</p>
                </a>
                <a href="" class="menu d-flex align-items-center">
                    <p></p>
                    <img src="{{ asset('frontend/images/icons/new.png')  }}" alt="">
                    <p>New Arrivals</p>
                </a>
                <a href="" class="menu d-flex align-items-center">
                    <p></p>
                    <img src="{{ asset('frontend/images/icons/sale.png') }}" alt="">
                    <p>Flash Sales</p>
                </a>
                <a href="" class="menu d-flex align-items-center">
                    <p></p>
                    <img src="{{ asset('frontend/images/icons/fire.png') }}" alt="">
                    <p>Popular</p>
                </a>
                <a href="" class="menu d-flex align-items-center">
                    <p></p>
                    <img src="{{ asset('frontend/images/icons/chicken.png') }}" alt="">
                    <p>Chicken</p>
                </a>
                <a href="" class="menu d-flex align-items-center">
                    <p></p>
                    <img src="{{ asset('frontend/images/icons/cow.png') }}" alt="">
                    <p>Cow</p>
                </a>
                <a href="" class="menu d-flex align-items-center">
                    <p></p>
                    <img src="{{ asset('frontend/images/icons/sheep.png') }}" alt="">
                    <p>Lamb</p>
                </a>
                <a href="" class="side-menu-last menu d-flex align-items-center">
                    <p></p>
                    <img src="{{ asset('frontend/images/icons/fish.png') }}" alt="">
                    <p>Fish</p>
                </a>
                <br>
                <div id="range" class="range">
                    <h6>Price Range</h6>
                    <input type="range" id="myinput" min="200" max="1000">
                    <br>
                    <small>৳ 200 - 1000</small>
                </div>
            </div>

        </div>

        <!-- products -->

        <div id="all-products" class="row all-products products">
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product cart">
                    <img src="{{ asset('frontend/images/shop-items/amish1.png') }}" alt="">
                    <div class="product-info text-center">
                        <a href="{{ route('single-product') }}">
                            <h6>Beef Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 350</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-0" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-0" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-0">0</span> in Cart</p>
                            <button id="product-plus-0" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-0' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{ asset('frontend/images/shop-items/amish2.png') }}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Loitta Fish</h6>
                        </a>
                        <small>250 gm</small>
                        <br>
                        <strong>৳ 450</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-1" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-1" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-1">0</span> in Cart</p>
                            <button id="product-plus-1" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-1' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{ asset('frontend/images/shop-items/amish3.png') }}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Chicken Raw Meat</h6>
                        </a>
                        <small>250 gm</small>
                        <br>
                        <strong>৳ 350</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-2" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-2" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-2">0</span> in Cart</p>
                            <button id="product-plus-2" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-2' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{ asset('frontend/images/shop-items/amish4.png') }}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Lamb Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 750</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-3" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-3" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-3">0</span> in Cart</p>
                            <button id="product-plus-3" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-3' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="./images/shop-items/amish5.png" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Prawn Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 850</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-4" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-4" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-4">0</span> in Cart</p>
                            <button id="product-plus-4" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-4' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="./images/shop-items/amish6.png" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Sheep Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 550</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-5" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-5" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-5">0</span> in Cart</p>
                            <button id="product-plus-5" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-5' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="./images/shop-items/amish7.png" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Rohu Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 250</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-6" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-6" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-6">0</span> in Cart</p>
                            <button id="product-plus-6" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-6' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="./images/shop-items/amish8.png" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Tuna Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 750</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-7" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-7" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-7">0</span> in Cart</p>
                            <button id="product-plus-7" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-7' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">
                <div class="product">
                    <img src="{{ asset('frontend/images/shop-items/amish1.png') }}" alt="">
                    <div class="product-info text-center">
                        <a href="singleProduct.html">
                            <h6>Beef Raw Meat</h6>
                        </a>
                        <small>500 gm</small>
                        <br>
                        <strong>৳ 350</strong>
                    </div>
                    <div style="display: none" id="item-plus-minus-8" class="cart-plus-minus">
                        <div class="plus-minus d-flex ">
                            <button id="product-minus-8" class="page-minus"><strong
                                    class="d-flex align-items-center justify-content-center">-</strong></button>
                            <p class="d-flex align-items-center justify-content-center"><span
                                    class="product-item-quantity" id="product-item-quantity-8">0</span> in Cart</p>
                            <button id="product-plus-8" class="page-plus"><strong
                                    class="d-flex align-items-center justify-content-center">+</strong></button>
                        </div>
                    </div>
                    <button id='item-zero-8' class="yellow-btn cart-add">Add to cart</button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="pagination-custom text-center">
                    <a href="">
                        <p>1</p>
                    </a>
                    <a class="red" href="">
                        <p>2</p>
                    </a>
                    <a href="">
                        <p>3</p>
                    </a>
                    <a href="">
                        <p>...</p>
                    </a>
                    <a href="">
                        <p>20</p>
                    </a>
                    <a href="">
                        <p>21</p>
                    </a>
                    <a href="">
                        <p>22</p>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
