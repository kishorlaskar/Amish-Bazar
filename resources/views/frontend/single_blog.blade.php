@extends('frontend.frontend-shop-blog')
@section('shop-content')
    <!-- single blog -->

    <!-- single blog -->
    <section>
        <div class="container-fluid">
            <div class="single-blog blog-width">
               <a href="{{ route('single-blog') }}"> <img src="{{ asset('frontend/images/blogs/blog4.jpeg') }}" alt="">
               </a>
                   <br>
                <p></p>
                <h4>Chicken is important</h4>
                <small>Suva Karmaker | 6 June, 2020</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate non senectus maecenas sed
                    pellentesque consequat. Imperdiet egestas odio non et facilisis morbi semper. Enim at diam ac
                    vestibulum justo. Adipiscing augue est lacus hac eget lectus enim praesent.
                    Arcu morbi aliquam blandit risus nunc. Mauris malesuada orci dignissim scelerisque duis auctor.
                    Nascetur mauris magna placerat viverra vulputate nunc vitae, sit sed. Libero, nunc adipiscing et
                    dictum sed sed. Et molestie tellus vestibulum nullam proin aenean sed.
                    <br>
                    Et lacinia viverra augue massa. Urna viverra quis integer at amet orci ut lobortis sed. Enim,
                    dolor morbi sapien dignissim sed eget. Quis enim molestie purus, vitae. Ultrices dui aliquam
                    cursus ipsum tellus. Iaculis accumsan tincidunt ullamcorper feugiat turpis purus sed massa.
                    Ornare adipiscing integer nisi, arcu. Non feugiat turpis in feugiat faucibus magna volutpat
                    eget. Egestas facilisis risus pharetra lacus. Eros massa fames donec suspendisse pharetra.

                </p>
                <br>
                <strong>Share Me</strong>
                <div class="social-blog">
                    <a href=""><img src="./images/icons/facebook.png" alt=""></a>
                    <a href=""><img src="./images/icons/twitter.png" alt=""></a>
                    <a href=""><img src="./images/icons/in.png" alt=""></a>
                </div>
                <br><br>
                <hr>
            </div>
        </div>
    </section>

    <br><br>

    <!-- related blogs -->

    <section>
        <div class="container-fluid">
            <div class="blog-width m-auto">
                <h4>Related Blogs</h4>
                <div class="row">
                    <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-info">
                            <img src="{{ asset('frontend/images/blogs/blog1.jpeg') }}" alt="">
                            <div class="blog-details">
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
                                <a href="{{ route('single-blog') }}"><h6>Dul risus</h6></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                </p>
                                <small>23 January, 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-info">
                            <img src="./images/blogs/blog3.jpeg" alt="">
                            <div class="blog-details">
                                <a href="singleBlog.html"><h6>Elementum cras</h6></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                </p>
                                <small>23 January, 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-info">
                            <img src="./images/blogs/blog3.jpeg" alt="">
                            <div class="blog-details">
                                <a href="singleBlog.html"><h6>Delicious prawn</h6></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                </p>
                                <small>23 January, 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-info">
                            <img src="./images/blogs/blog1.jpeg" alt="">
                            <div class="blog-details">
                                <a href="singleBlog.html"><h6>Rui mach</h6></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                </p>
                                <small>23 January, 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-info">
                            <img src="./images/blogs/blog2.jpeg" alt="">
                            <div class="blog-details">
                                <a href="singleBlog.html"><h6>lamb stack</h6></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                </p>
                                <small>23 January, 2020</small>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br><br>
                <hr>
            </div>
        </div>
    </section>

    <br><br>

    <!-- related products -->

    <section>
        <div class="container-fluid">
            <div class="products">
                <div class="">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product cart">
                                <img src="./images/shop-items/amish1.png" alt="">
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
                                                class="product-item-quantity" id="product-item-quantity-0">0</span> in Cart</p>
                                        <button id="product-plus-0" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-0' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="./images/shop-items/amish2.png" alt="">
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
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="./images/shop-items/amish3.png" alt="">
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
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="./images/shop-items/amish4.png" alt="">
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
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
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
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
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
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
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
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
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
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="./images/shop-items/amish1.png" alt="">
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
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="./images/shop-items/amish2.png" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Loitta Fish</h6>
                                    </a>
                                    <small>250 gm</small>
                                    <br>
                                    <strong>৳ 450</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-9" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-9" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-9">0</span> in Cart</p>
                                        <button id="product-plus-9" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-9' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="./images/shop-items/amish3.png" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Chicken Raw Meat</h6>
                                    </a>
                                    <small>250 gm</small>
                                    <br>
                                    <strong>৳ 350</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-10" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-10" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-10">0</span> in Cart</p>
                                        <button id="product-plus-10" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-10' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="./images/shop-items/amish4.png" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Lamb Raw Meat</h6>
                                    </a>
                                    <small>500 gm</small>
                                    <br>
                                    <strong>৳ 750</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-11" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-11" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-11">0</span> in Cart</p>
                                        <button id="product-plus-11" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-11' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all yellow-sh text-center">
            <br><br>
            <button class="text-center yellow-btn blog-anchor"><a href="shop.html">View all Products</a></button>
        </div>
    </section>
@endsection
