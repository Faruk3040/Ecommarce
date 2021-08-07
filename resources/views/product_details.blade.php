<!DOCTYPE html>
<html lang="en">

<head>
   @include('asset.css.css')
</head>

<body>
   @include('navigation.header')

    <!-- Single Products -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset($images[0])}}" width="100%" id="ProductImg">

                <div class="small-img-row">
                    @if(isset($images[0]))
                      <div class="small-img-col">
                          <img src="{{ asset($images[0])}}" width="100%" class="small-img">
                      </div>
                    @endif
                    @if(isset($images[1]))
                       <div class="small-img-col">
                           <img src="{{ asset($images[1])}}" width="100%" class="small-img">
                       </div>
                    @endif
                    @if(isset($images[2]))
                       <div class="small-img-col">
                            <img src="{{ asset($images[2])}}" width="100%" class="small-img">
                       </div>
                    @endif
                    @if(isset($images[3]))
                        <div class="small-img-col">
                            <img src="{{ asset($images[3])}}" width="100%" class="small-img">
                        </div>
                    @endif
                </div>

            </div>
            <div class="col-2">
                <div id="error_message"></div>
                <p>{{ $product->category->category_name }}</p>
                <h1>{{ $product->name }}</h1>
                <h4>Price: {{ $product->price }}</h4>

                <form method="POST" action="/add-to-cart">
                    @csrf
                    <select name="size">
                        <option value="">Select Size</option>
                        <option value="XXL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="S">S</option>
                    </select>
                    <input type="hidden" name="pid" value="{{ $product->id }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <label>Amount</label><input name="quantity" type="text" id="qty" value="1" onchange="validateAmount(this.value, {{ $product->id }})">
                    <button type="submit" class="btn">Add To Cart</button>

            </form>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>{{ $product->details }}</p>
            </div>
        </div>
    </div>
    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="/products"><p>View More</p></a>
        </div>
    </div>
    <!-- Products -->
    <div class="small-container">
        <div class="row">
            @foreach ($related_products as $rel_product )
            <div class="col-4">
                <a href="{{ url('/products/'. $rel_product->id) }}"><img src="{{ asset(explode('|' , $rel_product->image)[0])}}"></a>
                <h4>{{ $rel_product->name }}</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>{{ $rel_product->price }}</p>
            </div>
            @endforeach

        </div>
    </div>

    <!-- Footer -->
    @include('navigation.footer')

    <!-- javascript -->

   @include('asset.js.js')
</body>

</html>
