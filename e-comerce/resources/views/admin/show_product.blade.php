<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Melkon - Admin</title>
    <!-- plugins:css -->
   @include('admin.style')
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
  </head>
  <style>
    .center
    {
        margin: auto;
        width: 50%;
        border: 2px solid #fff;
        text-align: center;
        margin-top: 40px;
        margin-left: 80px;
    }
    .font_size
    {
        text-align: center;
        font-size: 40px;
        padding-top: 60px;
    }
    .img_size
    {
        width: 150px;
        height: 150px;
    }
    .th_color
    {
        background-color: rgb(0, 162, 255);
    }
    .th_deg{
        padding: 10px;
    }
    td, th
    {
        border-width: 3px;
        padding: 6px;
    }
    .description
    {
        max-width: 200px; /* set a maximum width for the cell */
        overflow: hidden; /* hide any content that exceeds the cell dimensions */
        text-overflow: ellipsis; /* display an ellipsis (...) when the text overflows */
        white-space: nowrap; /* prevent the text from wrapping */
    }
  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->

        <div class="main-panle">
            <div class="content-wrapper">
                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="buttton" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                    {{session()->get('message')}}
                </div>
                @endif
            </div>
                <h2 class="font_size">All Products</h2>
                <table class="center">
                    <tr class="th_color">
                        <th class="th_deg">Product Id</th>
                        <th class="th_deg">Product Title</th>
                        <th class="th_deg">Product Description</th>
                        <th class="th_deg">Product Price</th>
                        <th class="th_deg">Product Quantity</th>
                        <th class="th_deg">Discount Price</th>
                        <th class="th_deg">Product Category</th>
                        <th class="th_deg">Product Image</th>
                        <th class="th_deg">Edit</th>
                        <th class="th_deg">Delete</th>
                    </tr>
                    @foreach ($product as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td class="description">{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>{{$product->category}}</td>
                        <td>
                            <br/>
                            <img  class="img_size" src="/product/{{$product->image}}">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_product', $product->id)}}">Edit</a>
                        </td>

                        <td>

                            <a class="btn btn-danger" onclick="return confirm('Are You Sure to Delete This Product')" href="{{url('delete_product', $product->id)}}">Delete</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
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
