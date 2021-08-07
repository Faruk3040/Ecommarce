<!DOCTYPE html>
<html lang="en">

<head>
   @include('asset.css.css')
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="{{ url('/')}}"><img src="{{ asset('images/logo.png')}}" alt="logo" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li><a href="{{ url('/products')}}">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="{{ url('/account')}}" >Account</a></li>
                </ul>
            </nav>
            <a href="{{ url('/cart')}} ><img src="{{ asset('images/cart.png')}}" width="30px" height="30px"></a>
            <img src="images/menu.png')}}" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- Cart items details -->
    <div class="small-container cart-page">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            @foreach ( $carts as $cart )
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset($cart->options['image'])}}">
                        <div>
                            <p>{{ $cart->name }}</p>
                            <small>Price: ${{ $cart->price }}</small>
                            <br>
                            <a href="{{ url('/remove-item/'. $cart->rowId) }}">Remove</a>
                        </div>
                    </div>
                </td>
                <td>{{ $cart->qty }}</td>
                <td>{{ $cart->options['total'] }}</td>
            </tr>
            @endforeach


        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>{{ $subTotal }}</td>
                </tr>
                <tr>
                    <td><button class="btn btn-success">Checkout</button></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="{{ asset('images/play-store.png')}}">
                        <img src="{{ asset('images/app-store.png')}}">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{ asset('images/logo-white.png')}}">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Samwit Adhikary</p>
        </div>
    </div>

    <!-- javascript -->

    @include('asset.js.js')

</body>

</html>
