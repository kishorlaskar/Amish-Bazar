

@extends('frontend.frontend-shop-blog')

@section('shop-content')


<!-- single blog -->

<section>
    <div class="container-fluid">
        <div class="single-product w-90">
            <div class="row">
                <div class="col-md-6">
                    <img id="main-image" src="{{ asset('frontend/images/blogs/blog4.jpeg') }}" alt="">
                    <div class="owl-carousel">
                        <div class="item">
                            <img class="sub-images" src="{{ asset('frontend/images/blogs/blog4_1.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="sub-images" src="{{ asset('frontend/images/blogs/blog4_2.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="sub-images" src="./images/blogs/blog4.jpeg" alt="">
                        </div>
                        <div class="item">
                            <img class="sub-images" src="./images/blogs/blog4_1.png" alt="">
                        </div>
                        <div class="item">
                            <img class="sub-images" src="./images/blogs/blog4_2.png" alt="">
                        </div>
                        <div class="item">
                            <img class="sub-images" src="./images/blogs/blog4.jpeg" alt="">
                        </div>
                        <div class="item">
                            <img class="sub-images" src="./images/blogs/blog4_1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Chicken Meat</h6>
                    <small>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non nulla arcu habitant.
                    </small>
                    <p></p>
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-4">
                            <p class="single d-flex align-items-center justify-content-center">৳
                                <span id="itemTotal">200</span>/kg</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 d-flex align-items-center">
                            <p id="minus" class="cartMinus d-flex align-items-center justify-content-center">
                                <img src="./images/icons/minus.png" alt="">
                            </p>
                            <p class="items"><span id="itemQuantity">1</span></p>
                            <p id="plus" class="cartPlus d-flex align-items-center justify-content-center">
                                <img src="./images/icons/plus.png" alt="">
                            </p>
                        </div>
                    </div>
                    <hr>
                    <p>- Lorem ipsum dolor sit amet <br>
                        - Consectetur adipiscing elit <br>
                        - Non nulla arcu habitant.</p>
                    <div class="view-all yellow-sh">
                        <button class="yellow-btn">Add to Cart</button>
                    </div>
                </div>
            </div>


        </div>
        <br>
        <hr>
    </div>
</section>

<!-- customer review -->

<section>
    <section>
        <div class="container-fluid w-90">
            <br>
            <h5>Customer Reviews</h5>
            <p></p>
            <div class="total-review">
                <div class="d-flex">
                    <p>5 Stars</p>
                    <div class="line"></div>
                </div>
                <div class="d-flex">
                    <p>4 Stars</p>
                    <div class="line2"></div>
                </div>
                <div class="d-flex">
                    <p>3 Stars</p>
                    <div class="line"></div>
                </div>
                <div class="d-flex">
                    <p>2 Stars</p>
                    <div class="line3"></div>
                </div>
                <div class="d-flex">
                    <p>1 Stars</p>
                    <div class="line"></div>
                </div>
            </div>
            <br>
        </div>
    </section>
    <!--  -->
    <section>
        <div class="container-fluid w-90">
            <div class="review ">
                <div class=" d-flex justify-content-between">
                    <div class="">
                        <h6>Saimam Hasan</h6>
                        <div class="rate">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                    </div>
                    <small>4 June, 2020</small>
                </div>
                <p></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa lacinia mauris ullamcorper non
                    nunc risus nisl. Odio vitae porttitor euismod lectus scelerisque. Tellus nulla elit placerat
                    curabitur laoreet elit malesuada viverra neque. Vel felis tortor velit quisque dolor enim at
                    varius leo. In ultrices ac eu nec lacus eget nulla vestibulum, augue. Enim mauris, lorem
                    bibendum condimentum porta aenean at. Blandit nisi.</p>
            </div>
            <br>
            <div class="review">
                <div class=" d-flex justify-content-between">
                    <div class="">
                        <h6>Suva Karmaker</h6>
                        <div class="rate">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                    </div>
                    <small>4 June, 2020</small>
                </div>
                <p></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa lacinia mauris ullamcorper non
                    nunc risus nisl. Odio vitae porttitor euismod lectus scelerisque. Tellus nulla elit placerat
                    curabitur laoreet elit malesuada viverra neque. Vel felis tortor velit quisque dolor enim at
                    varius leo. In ultrices ac eu nec lacus eget nulla vestibulum, augue. Enim mauris, lorem
                    bibendum condimentum porta aenean at. Blandit nisi.</p>
                <div class="small-pic">
                    <img src="./images/blogs/blog4_1.png" alt="">
                    <img src="./images/blogs/blog4_2.png" alt="">
                    <img src="./images/blogs/blog4_1.png" alt="">
                </div>
            </div>
            <br>
            <div class="review">
                <div class=" d-flex justify-content-between">
                    <div class="">
                        <h6>Suva Karmaker</h6>
                        <div class="rate">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                    </div>
                    <small>4 June, 2020</small>
                </div>
                <p></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa lacinia mauris ullamcorper non
                    nunc risus nisl. Odio vitae porttitor euismod lectus scelerisque. Tellus nulla elit placerat
                    curabitur laoreet elit malesuada viverra neque. Vel felis tortor velit quisque dolor enim at
                    varius leo. In ultrices ac eu nec lacus eget nulla vestibulum, augue. Enim mauris, lorem
                    bibendum condimentum porta aenean at. Blandit nisi.</p>

            </div>
            <br><br>
            <hr>
        </div>
    </section>
</section>

<br><br>

<!-- related products -->

<section>
    <div class="container-fluid">
        <div class="products">
            <div class="row">
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
        <div class="view-all yellow-sh text-center">
            <br><br>
            <button class="text-center yellow-btn blog-anchor"><a href="shop.html">View all Products</a></button>
        </div>
    </div>
</section>
@endsection
