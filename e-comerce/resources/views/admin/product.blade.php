<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.style')

</head>
<style>
    .font_size
    {
        margin-left: 371px;
    }
    form
    {
    margin-left: 337px;
    margin-top: 27px;
    }
    .div_design
    {
        margin-bottom: 21px;
    }
    .text_color
    {
        color: #000
    }
    .title
    {
        margin-left: 54px;
    }
    .desc
    {
        margin-left: 2px;
    }
    .pp
    {
        margin-left: 43px;
    }
    .pq
    {
        margin-left: 28px;
    }
    .dp, .cat
    {
        margin-left: 40px;
    }
    .img
    {
        margin-left: 60px;
    }
    .btn-primary
    {
        margin-left: 168px;
    }

</style>
<body>
    <div class="container-scroller">
    @include('admin.sidebar')
        <!--header-->
    @include('admin.header')

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
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="div_design">
                        <label>Product Title</label>
                        <input class="text_color title" type="text" name="title" placeholder="Write a title" required>
                    </div>

                    <div class="div_design">
                        <label>Product Description</label>
                        <input class="text_color desc" type="text" name="description" placeholder="Write a description" required>
                    </div>

                    <div class="div_design">
                        <label>Product Price</label> <span>$</span>
                        <input class="text_color pp" type="number" name="price" min="0" placeholder="Write a price" required>
                    </div>
                    <div class="div_design">
                        <label>Product Quantity</label>
                        <input class="text_color pq" type="number" name="quantity" min="1" placeholder="Enter quantity" required>
                    </div>
                    <div class="div_design">
                        <label>Discount Price</label><span>$</span>
                        <input class="text_color dp" type="number" name="discount_price" min="0" placeholder="Write a discount price" required>
                    </div>

                    <div class="div_design">
                        <label>Product Category :</label>
                        <select name="category" class="text_color cat">
                            <option value="" selected>Select a Category</option>
                            @foreach ($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="div_design">
                        <label>Product Image Here</label>
                        <input class="img" type="file" name="image" required>
                    </div>

                    <div class="div_design">
                        <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>
            </form>
            </div>
        </div>
    </div>

    @include('admin.script')

</body>
</html>
