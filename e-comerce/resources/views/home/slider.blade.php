<div class="container" >
    <img src="home/assets/img/deer.png">
   <p class="centered">Elevate Your Stream with Melkon</p>
   </div>

   <section>
    <div id="carouselContent" class="carousel slide" data-ride="carousel">
        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="next">
            <span class="bi bi-chevron-double-left" aria-hidden="true"></span>

        </a>
        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="prev">
            <span class="bi bi-chevron-double-right" aria-hidden="true"></span>
        </a>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
                 <a data-target="section1" class="section-b a ">Emotes</a>
                 <a data-target="section2" class="section-b b">Mascot</a>
                 <a data-target="section3" class="section-b c">Banner</a>
                 <a data-target="section4" class="section-b d">Sub-Badges</a>

            </div>
            <div class="carousel-item text-center p-4">

              <a data-target="section5" class="section-b a1">Pfp</a>
              <a data-target="section6" class="section-b b1">Portrait</a>
              <a data-target="section7" class="section-b c1">Character Art</a>
              <a data-target="section8" class="section-b d1">Furry Artwork</a>
            </div>
            <div class="carousel-item text-center p-4">

              <a data-target="section9" class="section-b a2">Overlay</a>
              <a data-target="section10" class="section-b b2">Alerts</a>
              <a data-target="section11" class="section-b c2">Panel</a>
              <a data-target="section12" class="section-b d2">Transitions</a>
            </div>
            <div class="carousel-item text-center p-4">

              <a data-target="section13" class="section-b a3">Face Cam</a>
              <a data-target="section14" class="section-b b3">Vtube Model</a>
              <a data-target="section15" class="section-b c3">Png Model</a>
              <a data-target="section16" class="section-b d3">Moots</a>
            </div>
            <div class="carousel-item text-center p-4">

              <a data-target="section17" class="section-b a4">Vr Chat</a>
              <a data-target="section18" class="section-b b4">Multi-Character Art</a>
              <a data-target="section19" class="section-b c4">Animation</a>
              <a data-target="section20" class="section-b d4">Rigging

              </a>
            </div>
        </div>

    </div>
    </section>
    <style>
 .bi-chevron-double-left:hover,
.bi-chevron-double-right:hover
{
    color: #2a6fc5;
}
.carousel-item.active,
.carousel-item-prev{
display:inline;

}
.carousel{
padding-right: 307px;
padding-left: 349px;
}
.carousel-control-prev{
left:343px;
width: 17px;
color: #2A8CC5 !important;
}
.carousel-control-next{
right:298px;
width: 17px;
color: #2A8CC5 !important;
}



.text-center a
{
    margin-left: 68px;
    margin-right: 18px !important;
}
.a:hover, .b:hover, .c:hover, .a1:hover, .b1:hover, .a2:hover, .b2:hover, .c2:hover, .d2:hover, .a3:hover, .d3:hover, .c3:hover, .a4:hover, .d4:hover
{
    border-radius: 30px;
    cursor: pointer;
    text-transform: capitalize;
    width: 100px;
    color: #fff;
    background-color: #2a6fc5;
    justify-content: center !important;
    display: inline-flex;
}
.d:hover, .c3:hover, .c4:hover
{
    border-radius: 30px;
    cursor: pointer;
    text-transform: capitalize;
    width: 120px;
    color: #fff;
    background-color: #2a6fc5;
    justify-content: center !important;
    display: inline-flex;
}
.c1:hover, .d1:hover, .b3:hover
{
    border-radius: 30px;
    cursor: pointer;
    text-transform: capitalize;
    width: 140px;
    color: #fff;
    background-color: #2a6fc5;
    justify-content: center !important;
    display: inline-flex;
}
.b4:hover
{
    border-radius: 30px;
    cursor: pointer;
    text-transform: capitalize;
    width: 160px;
    color: #fff;
    background-color: #2a6fc5;
    justify-content: center !important;
    display: inline-flex;
}
    </style>
    <script>
 const btnElList = document.querySelectorAll('.section-b');

btnElList.forEach(btnEl => {
    btnEl.addEventListener('click', () =>{
        document.querySelector('.special').classList.remove('special');
        btnEl.classList.add('.special')
    });
});

    </script>
    <script>
$('.carousel').carousel({
interval: false, // Disable automatic rotation
pause: 'hover', // Pause on mouse hover
direction: 'rtl' // Set the direction to left-to-right
});

$('.carousel-control-prev').click(function() {
$('.carousel').carousel('prev'); // Move to the previous slide
});

$('.carousel-control-next').click(function() {
$('.carousel').carousel('next'); // Move to the next slide
});

    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
         $('#section1').show();
    $(document).ready(function() {
// Show the first section by default
    $('#section1').show();

// Handle click events on section buttons
    $('.section-b').click(function() {
// Hide all sections except the one that was clicked
        $('.section').not('#' + $(this).data('target')).hide();
// Show the target section
    $('#' + $(this).data('target')).show();
});
});
    </script>
