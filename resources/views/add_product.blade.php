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
                <div class="col-xs-8">
                    <div class="row">
                        @foreach ($returnProducts as $product)
                            <div class="col-xs-4" style="padding: 10px;">
                                <img src="{{ asset($product['image']) }}" height="200" width="150">
                                <h4> {{ $product['name'] }}</h4>
                                <p>{{ $product ['price'] }}</p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="col-xs-4 ">
                        <div class="form-container">
                            <div class="form-btn">
                                <span>Add Product</span>
                                <hr style="border: none; background: #ff523b; height: 2px;">
                            </div>
                            <form id="LoginForm" method="POST" action="/products" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="name" placeholder="Product Name">
                                <input type="text" name="price" placeholder="Price">
                                <input type="text" name="amount" placeholder="Amount">
                                <input type="text" name="size" placeholder="Size">
                                <input type="text" name="details" placeholder="Details">
                                <input type="text" name="category_id" placeholder="Category Id">
                                <input type="file" name="images[]" multiple>
                                <button type="submit" class="btn">Add Product</button>
                            </form>


                        </div>
                       
                    </div>
                </div>


            </div>
        </div>




        @include('asset.js.js')

</body>

</html>
