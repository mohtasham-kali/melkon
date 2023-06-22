<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        .center{
            margin: 40px auto;
            width: 50%;
            text-align: center;
            border: 3px solid #fff;
        }
    </style>
</head>
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

                <h2 class="h2_font">Add Category</h2>

                <form action="{{url('/add_category')}}" method="POST">

                    @csrf

                    <input class="input_color" type="text" name="category" placeholder="Write category name">

                    <input class="btn btn-primary" type="submit" name="name" value="Add Category">
                </form>
            </div>

            <table class="center">
                <tr>
                    <td>Category Name</td>
                    <td>Action</td>
                </tr>

                @foreach ($data as $data)

                <tr>
                    <td>{{$data->category_name}}</td>
                    <td>
                        <a onclick="return confirm('Are you Sure To Delete This Category')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


    </div>

    @include('admin.script')

</body>
</html>
