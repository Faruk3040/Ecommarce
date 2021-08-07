<!DOCTYPE html>
<html lang="en">

<head>
    @include('asset.css.css')

</head>

<body>
    <!-- Account Page -->
    <div class="account-page">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/image1.png') }}" width="50%">
                </div>
                <div class="col-2">
                    @if (session()->has('error'))
                    <div class="alert alert-warning">
                        {{ session()->get('error') }}
                    </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show">
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="register()">Register</span>
                            <span onclick="login()">Login</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" action="/users" method="GET">
                            @csrf
                            <input type="text" name="uname" placeholder="User Name">
                            <input type="password" name="pass" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forget Password</a>
                        </form>

                        <form id="RegForm" action="/users" method="POST">
                            @csrf
                            <input type="text" name="uname" placeholder="Username" required>
                            <input type="email" name="email" placeholder="Email">
                            <input type="text" name="mobile" placeholder="Mobile">
                            <input type="password" name="pass" placeholder="Password" required>
                            <button type="submit" name="reg" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('asset.js.js')

</body>

</html>
