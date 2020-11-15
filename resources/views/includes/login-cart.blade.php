<!-- Modal -->

<!-- modal login -->

<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="login">
                <h3 class="text-center">Welcome</h3>
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 modal-button text-center">
                            <form action="">
                                <input class="form-control" type="email" placeholder="Email Address">
                                <p></p>
                                <input class="form-control" type="password" placeholder="Password">
                                <br>
                                <button type="button" class="yellow-btn">Log In</button>
                            </form>
                            <br>
                            <br>
                            <p class="reg">New here ? <a data-toggle="modal" data-target="#registration"
                                                         data-dismiss="modal">Create an account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal registration -->

<div class="modal fade" id="registration">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="registration">
                <h3 class="text-center">Sign Up for Free</h3>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Non
                    nulla arcu habitant
                    sollicitudin.</p>
                <br>
                <form action="">
                    <div class="container-fluid">
                        <div class="row modal-button">
                            <div class="col-md-6 col-sm-6 col-12">
                                <input class="form-control" type="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input class="form-control" type="text" placeholder="Username">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input class="form-control" type="text" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input class="form-control" type="text" placeholder="Address">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input class="form-control" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input class="form-control" type="password" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="button" class="yellow-btn">Register</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal cart -->

<div class="modal fade" id="cart">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="cart-items">
                <br>
                <h4 class="text-center">My Cart</h4>
                <p></p>
                <hr>
                <p></p>
                <br>
                <div class="row modal-button ">
                    <div class="col-md-1 col-sm-1 col-1"></div>
                    <div class="col-md-10 col-sm-10 col-10">
                        <div id="item1">
                            <div class="row">
                                <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal1">400</span></div>
                                <div class="col-md-12 col-sm-10 col-10">
                                    <p></p>
                                    <div class="row ">
                                        <div class="col-md-4 col-sm-4 col-4">
                                            <p class="single d-flex align-items-center justify-content-center">৳
                                                <span id="itemTotal1">200</span>/kg</p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                            <p id="cartMinus1"
                                               class="cartMinus d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/minus.png') }}" alt="">
                                            </p>
                                            <p class="items"><span id="itemQuantity1">2</span></p>
                                            <p id="cartPlus1"
                                               class="cartPlus d-flex justify-content-center align-items-center ">
                                                <img src="{{ asset('frontend/images/icons/plus.png') }}" alt="">
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-sm-2 col-2">
                                            <p id="cartCross1"
                                               class="cartCross d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/cross.png') }}" alt="">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div id="item2">
                            <div class="row">
                                <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal2">400</span></div>
                                <div class="col-md-12 col-sm-10 col-10">
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-4">
                                            <p class="single d-flex align-items-center justify-content-center">৳
                                                <span id="itemTotal2">200</span>/kg</p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                            <p id="cartMinus2"
                                               class="cartMinus d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/minus.png') }}" alt="">
                                            </p>
                                            <p class="items"><span id="itemQuantity2">2</span></p>
                                            <p id="cartPlus2"
                                               class="cartPlus d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/plus.png') }}" alt="">
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-sm-2 col-2">
                                            <p id="cartCross2"
                                               class="cartCross d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/cross.png') }}" alt="">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div id="item3">
                            <div class="row">
                                <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal3">400</span></div>
                                <div class="col-md-12 col-sm-10 col-10">
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-4">
                                            <p class="single d-flex align-items-center justify-content-center">৳
                                                <span id="itemTotal3">200</span>/kg</p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                            <p id="cartMinus3"
                                               class="cartMinus d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/minus.png') }}" alt="">
                                            </p>
                                            <p class="items"><span id="itemQuantity3">2</span></p>
                                            <p id="cartPlus3"
                                               class="cartPlus d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/plus.png') }}" alt="">
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-sm-2 col-2">
                                            <p id="cartCross3"
                                               class="cartCross d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/cross.png') }}" alt="">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div id="item4">
                            <div class="row">
                                <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal4">400</span></div>
                                <div class="col-md-12 col-sm-10 col-10">
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-4">
                                            <p class="single d-flex align-items-center justify-content-center">৳
                                                <span id="itemTotal4">200</span>/kg</p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                            <p id="cartMinus4"
                                               class="cartMinus d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/minus.png') }}" alt="">
                                            </p>
                                            <p class="items"><span id="itemQuantity4">2</span></p>
                                            <p id="cartPlus4"
                                               class="cartPlus d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/plus.png') }}" alt="">
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-sm-2 col-2">
                                            <p id="cartCross4"
                                               class="cartCross d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('frontend/images/icons/cross.png') }}" alt="">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id='no-items' class="text-center">
                            <h5>No Items in Cart</h5>
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-md-1 col-sm- col-1"></div>
                    <div class="col-md-10 col-sm-10 col-10">
                        <div class="cart-font d-flex justify-content-between">
                            <p>Gross Total</p>
                            <p>৳ <span id="total">1600</span></p>
                        </div>
                        <br>
                        <div class="text-center">
                            <button class="yellow-btn">Checkout</button>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
