
<header>

    <!-- navbar -->

    <div class="fixed-top">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container-fluid">
                <a id="off-btn"><img src="{{ asset('frontend/images/icons/menu.png') }}" alt=""></a>
                <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/images/logos/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item single-line d-flex">
                            <a class="nav-link cart-show">
                                <button data-toggle="modal" data-target="#cart"
                                        class="cart-image yellow-btn d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('frontend/images/icons/bcart.png') }}" alt="">
                                </button>
                                <div class="red-dot"></div>
                            </a>
                            <a class="nav-link">
                                <button data-toggle="modal" data-target="#login"
                                        class="people-image yellow-btn d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('frontend/images/icons/people.png') }}" alt="">
                                </button>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>

</header>
