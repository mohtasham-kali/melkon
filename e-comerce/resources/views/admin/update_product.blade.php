<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Melkon - Admin</title>
    <!-- plugins:css -->
    <base href="/public">
    @include('admin.style')
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font
        {
            font-size:40px;
            padding-bottom: 40px:
        }

        .input_color
        {
            color: #000;
        }
        .center
        {
            margin: 40px auto;
            width: 50%;
            text-align: center;
            border: 3px solid #fff;
        }
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color
        {
            color: #000;
            padding-bottom: 20px;
        }
        label
        {
            width: 200px;
        }
        .div_design
        {
            padding-bottom: 15px;
        }
    </style>
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                    {{session()->get('message')}}

                </div>

                @endif

                <div class="div_center">
                    <h1 class="font_size">Add Product</h1>
                    <form method="POST" action="{{ route('update_product_confirm', $product->id) }}" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <div class="div_design">
                            <label>Product Title</label>
                            <input class="text_color" type="text" name="title" placeholder="Write a title"  value="{{$product->title}}">
                        </div>

                        <div class="div_design">
                            <label>Product Description</label>
                            <input class="text_color" type="text" name="description" placeholder="Write a description" required value="{{$product->description}}">
                        </div>

                        <div class="div_design">
                            <label>Product Price</label>$
                            <input class="text_color" type="number" name="price" min="0" placeholder="Write a price" required value="{{$product->price}}">
                        </div>
                        <div class="div_design">
                            <label>Product Quantity</label>
                            <input class="text_color" type="number" name="quantity" min="1" placeholder="Enter quantity" required value="{{$product->quantity}}">
                        </div>
                        <div class="div_design">
                            <label>Discount Price</label>$
                            <input class="text_color" type="number" name="discount_price" min="0" placeholder="Write a discount price" value="{{$product->discount_price}}">
                        </div>

                        <div class="div_design">
                            <label>Product Category :</label>
                            <select name="category" class="text_color">
                                <option value="{{$product->category}}" selected>{{$product->category}}</option>
                                @foreach ($category as $category)

                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                                @endforeach


                            </select>
                        </div>



                        <div class="div_design">
                            <label>Current Product Image :</label>
                          <img  margin="auto" height="100" width="100" src="/product/{{$product->image}}" alt="">
                        </div>

                        <div class="div_design">
                            <label>Change Product Image Here</label>
                            <input type="file" name="image" >
                        </div>

                        <div class="div_design">
                            <input type="submit" value="Update Product" class="btn btn-primary">
                        </div>
                </form>
                </div>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
