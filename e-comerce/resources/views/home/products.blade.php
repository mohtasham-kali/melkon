<style>
    .fw-bolder
    {
        color: #000;
    }

    .muted
    {
        color: #999;
    }
    .btn-outline-dark
    {
        border-radius: 30px;
        text-transform: capitalize;
        width: 200px;
        color: #fff;
        background: linear-gradient(to bottom left, #88C9D5 30%, #4c8abd 70%, #3a90bb 100%);
        border: 4px solid #000;

    }
    .border-top-0
    {

    }
    .btn:hover
    {
        color: #000;

    }
    .card-img-top
    {
        height: 200px;
        width: 230px;
        margin-left:15px;
        margin-top:12px
    }
    .cen {
        margin-left: 0px;
        margin-right: 0px!important;
    }

    .fw-bolder
    {
        color: #000;
    }
  
    .muted
    {
        color: #999;
    }
    .btn-outline-dark
    {
        border-radius: 30px;
        text-transform: capitalize;
        width: 200px;
        color: #fff;
        background: linear-gradient(to bottom left, #88C9D5 30%, #4c8abd 70%, #3a90bb 100%);
        border: 4px solid #000;

    }
    .btn:hover
    {
        color: #000;

    }
    .card-img-top
    {
        height: 200px;
        width: 230px;
        margin-left:15px;
        margin-top:12px
    }
    .row-cols-xl-4>*{
        width: 25%!important;
        }
</style>
<section class="py-5 section active" id="section1">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($product as $product)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <a href="{{ url('view_order/' . $product->id) }}">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ url('product/' . $product->image) }}" alt="..." />



                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="cen">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$product->title}}</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>

                            @if($product->discount_price != null)
                            <span class="text-muted text-decoration-line-through">USD{{$product->price}}</span>

                            <span class="text-muted fw-bold">{{$product->discount_price}}USD</span>
                            @else
                            <span class="text-muted">{{$product->price}}USD</span>
                            @endif

                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="cen"><a href="{{ url('add_cart/' . $product->id) }}" class="btn btn-outline-dark mt-auto" onclick="increaseQuantity({{ $product->id }})">Add to cart</a>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
