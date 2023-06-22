<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Melkon Art - Comming Soon!</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="home/assets/css/vendor.css">
    <link rel="stylesheet" href="home/assets/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="home/assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="home/assest/images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="home/assets/images/logo.png">
    <link rel="manifest" href="site.webmanifest">

</head>
<base href="/public">
<body id="top" class="ss-preload theme-slides">


    <!-- preloader
    ================================================== -->
    <!-- <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    @include('home.header')
    <!-- intro
    ================================================== -->
    <section id="intro" class="s-intro">

        <div class="s-intro__slider swiper-container">
            <div class="swiper-wrapper">
                <div id="particles-js" class="s-intro__slide swiper-slide bg-opacity-10" style="background-image:url(none);"></div>
                <div class="s-intro__slide swiper-slide bg-opacity-10" style="background-image: url(home/assets/images/bg-static.jpg);"></div>
                <div id="particles-js" class="s-intro__slide swiper-slide bg-opacity-10" style="background-image:url(none);"></div>
                <div class="s-intro__slide swiper-slide bg-opacity-10" style="background-image: url(home/assests/images/slides/slide-01.jpg);"></div>
                <div id="particles-js" class="s-intro__slide swiper-slide bg-opacity-100" style="background-image:url(none);"></div>
                <div class="s-intro__slide swiper-slide bg-opacity-50" style="background-image: url(home/assets/images/slides/slide-02.jpg);"></div>
                <div id="particles-js" class="s-intro__slide swiper-slide bg-opacity-10" style="background-image:url(none);"></div>
                <div class="s-intro__slide swiper-slide bg-opacity-10" style="background-image: url(home/assets/images/slides/slide-03.jpg);"></div>
                <div id="particles-js" class="s-intro__slide swiper-slide bg-opacity-10" style="background-image:url(none);"></div>

            </div>
        </div>

        <header class="s-intro__header">
            <div class="s-intro__logo">
                <a class="logo" href="index.html">
                    <img src="home/assets/images/logo.png" alt="">
                </a>
            </div>
        </header>
        <!-- s-intro__header -->

        <div class="row s-intro__content">
            <div class="column">

                <div class="text-pretitle">
                    Nice to meet you.
                </div>

                <h1 class="text-huge-title">
                    We are preparing <br> something exciting <br> & amazing for you.
                </h1>

                <div class="s-intro__content-bottom">

                    <div class="s-intro__content-bottom-block">
                        <h5>Launching in</h5>

                        <div class="counter">
                            <div class="counter__time">
                                <span class="ss-days">000</span>
                                <span>D</span>
                            </div>
                            <div class="counter__time">
                                <span class="ss-hours">00</span>
                                <span>H</span>
                            </div>
                            <div class="counter__time minutes">
                                <span class="ss-minutes">00</span>
                                <span>M</span>
                            </div>
                            <div class="counter__time">
                                <span class="ss-seconds">00</span>
                                <span>S</span>
                            </div>
                        </div>
                        <!-- end counter -->
                        <a type="button" class="btn--stroke" href="index.html" style="background-color: gray;">
                            Back to Home
                        </a>
                    </div>

                </div>
                <!-- end s-intro-content__bottom -->

            </div>
        </div>
        <!-- s-intro__content -->

        <div class="s-intro__notify">
            <button type="button" class="btn--stroke btn--small ss-modal-trigger">
                Notify Me
            </button>
        </div>
        <!-- s-intro__notify -->

        <div hidden class="s-intro__modal ss-modal">
            <div class="ss-modal__inner">

                <span class="ss-modal__close"></span>

                <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="30" height="30"><path d="M.5 4.5l7 4 7-4m-13-3h12a1 1 0 011 1v10a1 1 0 01-1 1h-12a1 1 0 01-1-1v-10a1 1 0 011-1z" stroke="var(--color-2-dark)"></path></svg>

                <h4>Sign Up</h4>

                <p class="ss-modal__text">
                    Be the first to know about the latest updates and get exclusive offer on our grand opening.
                </p>

                <form id="mc-form" class="mc-form">
                    <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$"
                        required>
                    <input type="submit" name="subscribe" value="Subscribe" class="btn--small btn--primary u-fullwidth">
                    <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                    <div class="mc-status"></div>
                </form>

            </div>
            <!-- end ss-modal__inner -->
        </div>
        <!-- end ss-modal -->

        <div class="s-intro__scroll">
            <a href="#hidden" class="smoothscroll">
                Scroll For More
            </a>
        </div>
        <!-- s-intro__scroll -->

    </section>
    <!-- end s-intro -->


    <!-- hidden element
    ================================================== -->
    <div id="hidden" aria-hidden="true" style="opacity: 0;"></div>


    <!-- details
    ================================================== -->
    <section id="details" class="s-details">

        <div class="row">
            <div class="column">

                <h1 class="text-huge-title text-center">
                    Hi, We Are Melkon.
                </h1>

                <nav class="tab-nav">
                    <ul class="tab-nav__list">
                        <li class="active" data-id="tab-about">
                            <a href="#0">
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-services">
                                <span>Services</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- end tab-nav -->

                <div class="tab-content">

                    <!-- 01 - tab about -->
                    <div id="tab-about" class='tab-content__item'>

                        <div class="row tab-content__item-header">
                            <div class="column">
                                <h2>Our Story.</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column">
                                <p class="lead">
                                    Melkon Art was founded with a mission to help businesses succeed in the digital space through creative and innovative solutions. Our team of talented professionals brings together diverse skills and expertise in e-commerce, illustration, web designing, and UI/UX designing to provide a comprehensive range of services to our clients.
                                </p>

                                <p>
                                    Our journey started with a focus on illustration and web designing, where we quickly gained recognition for our high-quality and visually stunning designs. As we grew, we realized the importance of incorporating e-commerce and UI/UX designing into our offerings to provide a more complete and holistic approach to digital solutions.
                                </p>

                                    <p>
                                        Over the years, we have had the privilege of working with businesses of all sizes, from startups to multinational corporations, across a range of industries, including fashion, beauty, technology, and education. Each project has presented unique challenges and opportunities, allowing us to continually grow and evolve as a company.

                                    </p>

                                    <p>
                                        What sets us apart is our commitment to delivering custom solutions that meet our clients' specific needs and goals. We take a collaborative approach, working closely with our clients to understand their vision and develop tailored strategies that achieve their objectives. We understand that the digital landscape is constantly evolving, and we stay up-to-date with the latest trends and technologies to ensure that our clients are always ahead of the curve.

                                    </p>

                                    <p>
                                        At Melkon Art, we take pride in our attention to detail, creativity, and dedication to excellence. Our team is passionate about what we do and committed to delivering exceptional service and results to our clients. We believe that our success is intertwined with our clients' success, and we work tirelessly to help them achieve their goals.
                                    </p>
                                <div class="row">
                                    <div class="column lg-6 tab-12">
                                        <h4>More About Us.</h4>
                                      <p>
                                        As we continue to grow, we remain committed to our core values of creativity, innovation, and collaboration. We believe that these values are essential to our success and the success of our clients. We look forward to continuing to serve our clients and helping them achieve their digital objectives through our creative and innovative solutions.

                                      </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end 01 - tab about -->

                    <!-- 02 - tab services -->
                    <div id="tab-services" class='tab-content__item'>

                        <div class="row tab-content__item-header">
                            <div class="column">
                                <h2>What We Do.</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column">
                                <p class="lead">
                                    Melkon Art is a creative agency offering a range of services including e-commerce, illustration, web designing, and UI/UX designing. Their team of talented professionals is dedicated to creating custom solutions that meet their clients' specific needs and goals. They use the latest technologies and design trends to deliver high-quality and visually stunning designs that engage and delight their audience. With a focus on attention to detail, creativity, and commitment to excellence, Melkon Art is the go-to choice for businesses looking to achieve success in the digital space.
                                </p>
                            </div>
                        </div>

                        <div class="row services-list block-lg-one-half block-md-one-half block-tab-whole">


                            <div class="column services-list__item">
                                <div class="services-list__item-content">
                                    <h4 class="item-title">Illustration</h4>
                                    <p>
                                        Welcome to our Melkon Art, where we specialize in bringing your ideas to life through captivating visuals. Our team of skilled artists is dedicated to creating unique and imaginative illustrations that perfectly capture the essence of your message.
                                    </p>
                                </div>
                            </div>

                            <div class="column services-list__item">
                                <div class="services-list__item-content">
                                    <h4 class="item-title">Web Design</h4>
                                    <p>
                                        Our designers use the latest technologies and trends to create websites that are visually appealing, user-friendly, and optimized for search engines. We believe that a website should not only look great but also function seamlessly to enhance user experience and drive conversions.
                                    </p>
                                </div>
                            </div>

                            <div class="column services-list__item">
                                <div class="services-list__item-content">
                                    <h4 class="item-title">Animation</h4>
                                    <p>
                                        Melkon Art is a creative animation studio dedicated to delivering high-quality animation artworks that captivate and engage audiences. Our team of talented animators works collaboratively to produce unique and visually stunning animations for a variety of industries including film, television, gaming, and advertising.

                                        We offer a range of animation services including 2D and 3D animation, motion graphics, character design, and visual effects.</p>
                                </div>
                            </div>

                            <div class="column services-list__item">
                                <div class="services-list__item-content">
                                    <h4 class="item-title">UI/UX Design</h4>
                                    <p>
                                        visually stunning, user-friendly, and effective user interface and user experience designs for websites, mobile applications, and other digital platforms.
                                        Our team of experienced designers uses a collaborative approach to create custom designs that are tailored to our clients' specific needs and goals. We understand the importance of designing a seamless user experience and work closely with our clients to ensure that their digital platforms are intuitive, engaging, and optimized for conversions.
                                    </p>
                                </div>
                            </div>

                            <div class="column services-list__item">
                                <div class="services-list__item-content">
                                    <h4 class="item-title">E-Commerce</h4>
                                    <p>
                                        We understand the importance of creating a seamless online shopping experience that is both user-friendly and visually appealing. That's why we work closely with our clients to develop custom e-commerce strategies that are tailored to their specific needs and goals.

                                        Our team stays up-to-date with the latest e-commerce trends and technologies to ensure that our clients are positioned for success in the highly competitive online marketplace. We are committed to delivering high-quality services that help our clients increase sales, improve customer engagement, and enhance their online presence.</p>
                                </div>
                            </div>

                        </div>
                        <!-- end services-list -->

                    </div>
                    <!-- end 02 - tab services -->

                    <!-- 03 - tab contact -->
                    <div id="tab-contact" class="tab-content__item">

                        <div class="row tab-content__item-header">
                            <div class="column">
                                <h2>Get in Touch.</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column">

                                <p class="lead">
                                    Voluptates laborum eum quas. Pariatur impedit sit veniam est et quasi voluptas voluptatem. Cumque hic enim perferendis amet odit in molestias debitis. Facere nulla qui pariatur quasi mollitia et. Et dolorem dolorum quo in sit architecto.
                                </p>

                                <div class="row">
                                    <div class="column lg-6 tab-12">
                                        <h4>Where to Find Us</h4>

                                        <p>
                                            1600 Amphitheatre Parkway<br> Mountain View, CA<br> 94043 US
                                        </p>

                                    </div>

                                    <div class="column lg-6 tab-12">
                                        <h4>Follow Us</h4>

                                        <ul class="link-list">
                                            <li><a href="#0">Facebook</a></li>
                                            <li><a href="#0">Twitter</a></li>
                                            <li><a href="#0">Instagram</a></li>
                                        </ul>

                                    </div>
                                </div>

                                <p class="tab-content__item-bottom">
                                    <a href="mailto:#0" class="contact-email">hello@knox.com</a>
                                    <span class="contact-number">
                                        <a href="tel:197-543-2345">+197 543 2345</a>
                                        <span>/</span>
                                    <a href="tel:123-456-9000">+123 456 9000</a>
                                    </span>
                                </p>

                            </div>
                        </div>

                    </div>
                    <!-- end 03 - tab contact -->

                </div>
                <!-- end tab content -->

                <!-- footer  -->
                <footer>
                    <div class="footer">
                        <span>@ Melkon Art</span>
                    </div>
                </footer>

            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <span>Back to Top</span>
                <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="26" height="26"><path d="M7.5 1.5l.354-.354L7.5.793l-.354.353.354.354zm-.354.354l4 4 .708-.708-4-4-.708.708zm0-.708l-4 4 .708.708 4-4-.708-.708zM7 1.5V14h1V1.5H7z" fill="currentColor"></path></svg>
            </a>
        </div>
        <!-- end ss-go-top -->

    </section>
    <!-- end s-details -->

    <!-- Java Script
    ================================================== -->
    <script src="home/assets/js/plugins.js"></script>
    <script src="home/assets/js/main.js"></script>
    <script src="home/assets/js/particles.min.js"></script>
    <script src="home/assets/js/particle-settings.js"></script>

</body>

</html>
