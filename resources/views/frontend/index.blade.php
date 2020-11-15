@extends('frontend.frontend-master')

@section('content')

    <main>
      @include('includes.login-cart')
        <!-- introduction -->

        <section class="introduction">
            <div class="container-fluid intro">
                <div class="row intro-info">
                    <div class="col-md-1 col-sm-1 col-1 space"></div>
                    <div class="col-md-10 col-sm-10 col-12">
                        <h1>From Farm to You</h1>
                        <p>Get responsibly sourced fresh protein products right at your doorstop.</p>
                        <button class='yellow-btn'>Register Now</button>
                    </div>
                </div>
            </div>
            <br>
        </section>

        <br><br><br>

        <!-- fixed icon -->

        <div class="fix">
            <a data-toggle="modal" data-target="#cart">
                <img src="{{ asset('frontend/images/icons/fix.png') }}" alt="">
                <div class="fix-info">
                    <p>50 Items</p>
                    <h6>৳ 45000</h6>
                </div>
            </a>
        </div>

        <!-- category -->

        <section>
            <div class="red-sh category text-center">
                <h2>Shop by Category</h2>
                <p></p>
                <div class="products-anchor">
                    <button class="red-btn"><a href="shop.html">View All Products</a></button>
                </div>
                <br><br><br>
                <div class="container">
                    <div class="all-category d-flex justify-content-center">
                        <div class="cat-info cat-info-1 d-flex align-items-center justify-content-center">
                            <a href="">
                                <div class="">
                                    <img src="{{ asset('frontend/images/category-icons/chicken.png') }}" alt="">
                                    <br>
                                    <small>Chicken</small>
                                </div>
                            </a>
                        </div>
                        <div class="cat-info d-flex align-items-center justify-content-center">
                            <a href="">
                                <div class="">
                                    <img src="{{ asset('frontend/images/category-icons/cow.png') }}" alt="">
                                    <br>
                                    <small>Cow</small>
                                </div>
                            </a>
                        </div>
                        <div class="cat-info d-flex align-items-center justify-content-center">
                            <a href="">
                                <div class="">
                                    <img src="{{ asset('frontend/images/category-icons/sheep.png') }}" alt="">
                                    <br>
                                    <small>Lamb</small>
                                </div>
                            </a>
                        </div>
                        <div class="cat-info d-flex align-items-center justify-content-center">
                            <a href="">
                                <div class="">
                                    <img src="{{ asset('frontend/images/category-icons/fish.png') }}" alt="">
                                    <br>
                                    <small>Fish</small>
                                </div>
                            </a>
                        </div>
                        <div class="cat-info d-flex align-items-center justify-content-center">
                            <a href="">
                                <div class="">
                                    <img src="{{ asset('frontend/images/category-icons/horse.png') }}" alt="">
                                    <br>
                                    <small>Horse</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br>

        <!-- popular products -->

        <section>
            <div class="category container-fluid">
                <div class="red-sh text-center products-anchor">
                    <h2>Popular Products</h2>
                    <p></p>
                    <button class="red-btn"><a href="shop.html">View All Products</a></button>
                </div>
                <br>
                <div class="row products">
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                        <div class="product cart">
                            <img src="{{ asset('frontend/images/shop-items/amish1.png') }}" alt="">
                            <div class="product-info text-center">
                                <a href="singleProduct.html">
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
                                            class="product-item-quantity" id="product-item-quantity-0">0</span> in Cart
                                    </p>
                                    <button id="product-plus-0" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-0' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
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
                                            class="product-item-quantity" id="product-item-quantity-1">0</span> in Cart
                                    </p>
                                    <button id="product-plus-1" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-1' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
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
                                            class="product-item-quantity" id="product-item-quantity-2">0</span> in Cart
                                    </p>
                                    <button id="product-plus-2" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-2' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                        <div class="product">
                            <img src="{{asset('frontend/images/shop-items/amish4.png')}}" alt="">
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
                                            class="product-item-quantity" id="product-item-quantity-3">0</span> in Cart
                                    </p>
                                    <button id="product-plus-3" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-3' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                        <div class="product">
                            <img src="{{ asset('frontend/images/shop-items/amish5.png') }}" alt="">
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
                                            class="product-item-quantity" id="product-item-quantity-4">0</span> in Cart
                                    </p>
                                    <button id="product-plus-4" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-4' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                        <div class="product">
                            <img src="{{ asset('frontend/images/shop-items/amish6.png') }}" alt="">
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
                                            class="product-item-quantity" id="product-item-quantity-5">0</span> in Cart
                                    </p>
                                    <button id="product-plus-5" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-5' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                        <div class="product">
                            <img src="{{ asset('frontend/images/shop-items/amish7.png') }}" alt="">
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
                                            class="product-item-quantity" id="product-item-quantity-6">0</span> in Cart
                                    </p>
                                    <button id="product-plus-6" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-6' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                        <div class="product">
                            <img src="{{ asset('frontend/images/shop-items/amish8.png') }}" alt="">
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
                                            class="product-item-quantity" id="product-item-quantity-7">0</span> in Cart
                                    </p>
                                    <button id="product-plus-7" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-7' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
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
                                            class="product-item-quantity" id="product-item-quantity-8">0</span> in Cart
                                    </p>
                                    <button id="product-plus-8" class="page-plus"><strong
                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                </div>
                            </div>
                            <button id='item-zero-8' class="yellow-btn cart-add">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br>

        <!-- blogs -->

        <section class="blog">
            <div class="yellow-sh text-center blog-anchor">
                <h2>Our Blogs</h2>
                <p>see our blog story to decide yourself</p>
                <button class="red-btn"><a href="blog.html">View All</a></button>
            </div>
            <br>
            <div class="container-fliud">
                <div class="m-auto blog-width">
                    <div class="row">
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{ asset('frontend/images/blogs/blog1.jpeg') }}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Chicken is important</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{ asset('frontend/images/blogs/blog2.jpeg') }}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Dul risus</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{asset('frontend/images/blogs/blog3.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Elementum cras</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{ asset('frontend/images/blogs/blog3.jpeg') }}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Delicious prawn</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{ asset('frontend/images/blogs/blog1.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Rui mach</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{asset('frontend/images/blogs/blog2.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>lamb stack</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br>

    </main>
@endsection
