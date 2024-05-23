<footer class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <h1 class="text-warning">GolekTukang</h1>
                {{-- <img src="/assets/img/logo-hypermart-main-1.png" alt=""> --}}
                <p class="text-light">GolekTukang merupakan sebuah web yang memudahkan pengguna untuk melakukan
                    pencarian jasa berbagai jenis tukang sesuai dengan profesi masing- masing. Tersedia berbagai macam
                    tukang yang profesional dibidangnya masing- masing.
                </p>
            </div>
            <div class="col-md-2 mb-3">
                <header>
                    <h5 class="text-warning">Navbar link</h5>
                </header>
                @guest
                    <div class="navbar-link">
                        <a href="/" class="text-decoration-none">Home</a><br>
                        <a href="/product" class="text-decoration-none">Product</a><br>
                        <a href="/auth/login" class="text-decoration-none">Login</a><br>
                    </div>
                @endguest
                @auth
                    @if (auth()->user()->role == 'user')
                        <div class="navbar-link">
                            <a href="/my/home" class="text-decoration-none">Home</a><br>
                            <a href="/my/product" class="text-decoration-none">Product</a><br>
                            <a href="/my/cart" class="text-decoration-none">Cart</a>
                        </div>
                    @endif
                    @if (auth()->user()->role == 'admin')
                        <div class="navbar-link">
                            <a href="/my/home" class="text-decoration-none">Home</a><br>
                            <a href="/my/dashboard/product" class="text-decoration-none">Product</a><br>
                            <a href="/my/dashboard/buyer" class="text-decoration-none">Buyer</a><br>
                            <a href="/my/dashboard/users" class="text-decoration-none">Users</a><br>
                        </div>
                    @endif

                @endauth


            </div>
            <div class="col-md-2 mb-3">
                <header>
                    <h5 class="text-warning">Contact Us</h5>
                </header>
                <div class="social-media d-flex gap-3">
                    <a href="https://www.instagram.com/sls__na" target="_blank" class="fs-4"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/+6281238797336" class="fs-4"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <header>
                    <h5 class="text-warning">About Us</h5>
                </header>
                <div class="link-about-us d-flex gap-3">
                    <a href="#" class="text-decoration-none">Read more <i class="fa-solid fa-newspaper"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <p
                    class="text-light">Copyright &copy; 2024 by GolekTukang
                </p>
            </div>
        </div>
    </div>
</footer>
