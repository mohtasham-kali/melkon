<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <!-- Favicons -->
    <link href="home/assets/img/logo.png" rel="icon">
    <link href="home/assets/img/logo.png" rel="logo">
    <link rel="stylesheet" href="home/assets/css/main.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="home/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="home/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="home/style(1).css">


<style>
    @keyframes swiper-slide{
        from{
            opacity: 0;
        }
        to{
            opacity: 1;
        }
    }
    @keyframes swiper-slide {
        from{
            opacity: 1;
        }
        to{
            opacity: 0;
        }
    }
</style>
<link rel="stylesheet" href="home/Home.css" media="screen">
</head>
<style>
    @font-face {
font-family: "CustomFont";
src: url("https://yoursite.com/css/fonts/CustomFont.eot");
src: url("https://yoursite.com/css/fonts/CustomFont.woff") format("woff"),
url("https://yoursite.com/css/fonts/CustomFont.otf") format("opentype"),
url("https://yoursite.com/css/fonts/CustomFont.svg#filename") format("svg");
}
    .header-social-links>.bi-cart {
        cursor: pointer;
    }
    /* Container holding the image and the text */
.container {
  position: relative;
  text-align: center;
  color: white;
  max-width: fit-content;
}
.right {
    margin-left: 200px;
}
/* Centered text */
.centered {
  position: absolute;
  top: 45%;
  left: 19%;
  right: 540px;
  transform: translate(-50%, -50%);
  pointer-events: none;
  font-size: 35px;
  background-attachment: fixed;
  font-family:Arial, Helvetica, sans-serif;
  -webkit-background-clip: text;
  padding-top: 40px;
  padding: 60px;
}
.centered>span{
    position: absolute;
  top: 45%;
  left: 19%;
  right: 540px;
  transform: translate(-50%, -50%);
  pointer-events: none;
  font-size: 15px;
  background-attachment: fixed;
  font-family:Arial, Helvetica, sans-serif;
  -webkit-background-clip: text;
  padding-top: 40px;
  padding: 60px;
}
.centered::before
{
    content: attr(data-text);
    position: absolute;
    top: 0;
    text-shadow: -5px 5px 20px #000,
                 -10px 10px 300px #000,
                 -20px 15px 40px #000,
                 -12px 20px 50px #000;
}
.footer-dark {
  padding: 50px 0;
  color: #f0f9ff;
  background-color: #282d32;
}

.footer-dark h3 {
  margin-top: 0;
  margin-bottom: 12px;
  font-weight: bold;
  font-size: 16px;
  margin-left: 15px;
}

.footer-dark ul {
  padding: 0;
  list-style: none;
  line-height: 1.6;
  font-size: 14px;
  margin-bottom: 0;
  margin-left: 15px;
}

.footer-dark ul a {
  color: inherit;
  text-decoration: none;
  opacity: 0.6;
}

.footer-dark ul a:hover {
  opacity: 0.8;
  color: #2a6fc5;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align: center;
    padding-bottom: 20px;
  }
}

.footer-dark .item.text {
  margin-bottom: 36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom: 0;
  }
}

.footer-dark .item.text p {
  opacity: 0.6;
  margin-bottom: 0;
}

.footer-dark .item.social {
  text-align: center;

}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align: center;
    margin-top: 20px;
  }
}

.footer-dark .item.social > a {
  font-size: 20px;
  width: 36px;
  height: 36px;
  line-height: 36px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  margin: 0 5px;
  color: #fff;
  opacity: 0.75;
}

.footer-dark .item.social > a:hover {
  opacity: 0.9;
  background-color: #2a6fc5;
}

.footer-dark .copyright {
  text-align: center;
  padding-top: 24px;
  opacity: 0.3;
  font-size: 13px;
  margin-bottom: -50px;
}
.footer-dark>a:hover{
    background-color: #2a6fc5;
}
.ct-footer-pre {
    padding-top:0px;
    border-bottom: none;
}
.btn-dark
{
    margin-left: 300px;
    background-color: #fff;
}
.navigation{
    position: relative;
    background: #2a6fc5;
    display: flex;
    padding: 10px 20px;
    border-radius: 50px;
    box-shadow: 0 5px 15px rgb(0, 0, .2);
}
.navigation>li{
    list-style: none;
    line-height: 50px;
    margin: 0 5px;
}
.navigation>.emote
{
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
}
.navigation li a
{
    display: block;
    text-decoration: none;
    font-weight: 600;
}
.navigation li.emote:hover a,
.navigation li.emote.active a{
    color: #fff;
    padding: 12px;
}
.navigation li:first-child
{
    margin-right: 30px;
    font-weight: 700;
    font-size: 20px;
}
.navigation li:last-child
{
    margin-left: 30px;
    font-weight: 700;
    font-size: 20px;
}
.con{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 10px;
}
.swiper{
    height: fit-content;
}
.swiper-slide>ul>li{
    display: inline;
    padding: 12px;
    align-items: center;
    margin-left: 40px;
}
.swiper-slide ul{
    margin-left: 400px;
    margin-bottom: 0px;
}
.swiper-button-prev{
    padding-left: 435px;
    background-color: #0f1824;

}
.swiper-button-next{
    padding-right: 495px;
    background-color: #0f1824;

}
.swiper-slide{
    background-color: #0f1824;
    overflow: hidden;
}
.u-image-1{
    float: right;
}

.u-clearfix{
    margin-top: 500px;
}
.modal-title, .modal-body{
    color: #000;
}
.modal-dialog{
    max-width: 750px;
    margin-right: 208;
    margin-left: 208;
}
.close{
    border: none;
}
.tos{
    color: #666873;
}
.tos:hover{
    color: #fff;
}
.container-fluid{
    height: 60px;
}
.btn-primary
    {
        border-radius: 30px !important;
        text-transform: capitalize;
        width: 200px;
        color: #fff;
        background:  #4c8abd !important;
        border: 4px solid #000;

    }
    .btn-primary:hover
    {
        color: #000;
    }
    .marg
    {
        margin-top: 120px;
    }
</style>
<body>
    <base href="/public">
    @include('home.header')
    @include('home.style')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="{{ asset('product/' . $product->image) }}" class="img-fluid">
          </div>
          <div class="col-sm-6 marg">
            <h1>{{$product->title}}</h1>
            <p>{{$product->description}}</p>
            <p style="text-decoration: line-through">{{$product->price}}</p>
            <p>Discount Price: {{$product->discount_price}}</p>
            <form action="" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button class="btn btn-primary"><a href="{{ url('cart/' . $product->id) }}"></a> Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    @include('home.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>

</html>
