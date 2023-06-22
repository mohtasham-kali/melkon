
<style>

/* Fonts */

:root {
    --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-primary: "Inter", sans-serif;
    --font-secondary: "Cardo", sans-serif;
}


/* Colors */

:root {
    --color-default: #fafafa;
    --color-primary: #2a8cc5;
    --color-secondary: #161718;
}


/* Smooth scroll behavior */

:root {
    scroll-behavior: smooth;
}


/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/

body {
    font-family: var(--font-default);
    background: #0f1824;
}

a {
    color: var(--color-primary);
    text-decoration: none;
}

a:hover {
    color: #2a8cc5;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: var(--font-primary);
}


/*--------------------------------------------------------------
# Sections & Section Header
--------------------------------------------------------------*/

.section-header {
    padding-bottom: 40px;
}

.section-header h2 {
    font-size: 14px;
    font-weight: 500;
    padding: 0;
    line-height: 1px;
    margin: 0 0 5px 0;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.6);
    font-family: var(--font-primary);
}

.section-header h2::after {
    content: "";
    width: 120px;
    height: 1px;
    display: inline-block;
    background: #2a8cc5;
    margin: 4px 10px;
}

.section-header p {
    margin: 0;
    margin: 0;
    font-size: 36px;
    font-weight: 700;
    font-family: var(--font-secondary);
    color: #fff;
}


/*--------------------------------------------------------------
# Page Header
--------------------------------------------------------------*/

.page-header {
    padding: 120px 0 60px 0;
    min-height: 30vh;
    position: relative;
}

.page-header h2 {
    font-size: 56px;
    font-weight: 500;
    color: #fff;
    font-family: var(--font-secondary);
}

@media (max-width: 768px) {
    .page-header h2 {
        font-size: 36px;
    }
}

.page-header p {
    color: rgba(255, 255, 255, 0.8);
}

.page-header .cta-btn {
    font-family: var(--font-primary);
    font-weight: 400;
    font-size: 14px;
    display: inline-block;
    padding: 12px 40px;
    border-radius: 4px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: 0.3s;
    color: #fff;
    background: var(--color-primary);
}

.page-header .cta-btn:hover {
    background: #2a8cc5;
}


/*--------------------------------------------------------------
# Scroll top button
--------------------------------------------------------------*/

.scroll-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: -15px;
    z-index: 99999;
    background: var(--color-primary);
    width: 44px;
    height: 44px;
    border-radius: 50px;
    transition: all 0.4s;
}

.scroll-top i {
    font-size: 24px;
    color: #fff;
    line-height: 0;
}

.scroll-top:hover {
    background: #2a8cc5;
    color: #fff;
}

.scroll-top.active {
    visibility: visible;
    opacity: 1;
    bottom: 15px;
}


/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/

#preloader {
    display: flex;
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100vh;
    z-index: 99999;
}

#preloader:before,
#preloader:after {
    content: "";
    background-color: var(--color-secondary);
    position: absolute;
    inset: 0;
    width: 50%;
    height: 100%;
    transition: all 0.3s ease 0s;
    z-index: -1;
}

#preloader:after {
    left: auto;
    right: 0;
}

#preloader .line {
    position: relative;
    overflow: hidden;
    margin: auto;
    width: 1px;
    height: 280px;
    transition: all 0.8s ease 0s;
}

#preloader .line:before {
    content: "";
    position: absolute;
    background-color: #fff;
    left: 0;
    top: 50%;
    width: 1px;
    height: 0%;
    transform: translateY(-50%);
    -webkit-animation: lineincrease 1000ms ease-in-out 0s forwards;
    animation: lineincrease 1000ms ease-in-out 0s forwards;
}

#preloader .line:after {
    content: "";
    position: absolute;
    background-color: #999;
    left: 0;
    top: 0;
    width: 1px;
    height: 100%;
    transform: translateY(-100%);
    -webkit-animation: linemove 1200ms linear 0s infinite;
    animation: linemove 1200ms linear 0s infinite;
    -webkit-animation-delay: 2000ms;
    animation-delay: 2000ms;
}

#preloader.loaded .line {
    opacity: 0;
    height: 100% !important;
}

#preloader.loaded .line:after {
    opacity: 0;
}

#preloader.loaded:before,
#preloader.loaded:after {
    -webkit-animation: preloaderfinish 300ms ease-in-out 500ms forwards;
    animation: preloaderfinish 300ms ease-in-out 500ms forwards;
}

@-webkit-keyframes lineincrease {
    0% {
        height: 0%;
    }
    100% {
        height: 100%;
    }
}

@keyframes lineincrease {
    0% {
        height: 0%;
    }
    100% {
        height: 100%;
    }
}

@-webkit-keyframes linemove {
    0% {
        transform: translateY(200%);
    }
    100% {
        transform: translateY(-100%);
    }
}

@keyframes linemove {
    0% {
        transform: translateY(200%);
    }
    100% {
        transform: translateY(-100%);
    }
}

@-webkit-keyframes preloaderfinish {
    0% {
        width: 5 0%;
    }
    100% {
        width: 0%;
    }
}

@keyframes preloaderfinish {
    0% {
        width: 5 0%;
    }
    100% {
        width: 0%;
    }
}


/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

.header {
    transition: all 0.5s;
    z-index: 997;
    padding: 0px;
    background-color: #000;
}

.header .logo {
    transition: 0.3s;
}

.header .logo img {
    max-height: 40px;
    margin-right: 8px;
}

.header .logo h1 {
    font-size: 32px;
    margin: 0;
    font-weight: 400;
    color: #fff;
    font-family: 'cardo';

}

.header .logo i {
    font-size: 32px;
    margin-right: 8px;
    line-height: 0;
}

@media (max-width: 575px) {
    .header .logo h1 {
        font-size: 26px;
    }
    .header .logo i {
        font-size: 24px;
    }
}

.header .header-social-links {
    padding-right: 15px;
}

.text-white {
    padding: 25px;
}

.header .header-social-links a {
    color: rgba(255, 255, 255, 0.5);
    padding-right: 25px;
    display: table-cell;
    line-height: 0px;
    transition: 0.3s;
    font-size: 16px;
}

.header .header-social-links a:hover {
    color: #2a8cc5;
}

@media (max-width: 575px) {
    .header .header-social-links a {
        padding-left: 5px;
    }
}


/*--------------------------------------------------------------
# Desktop Navigation
--------------------------------------------------------------*/

@media (min-width: 1280px) {
    .navbar {
        padding: 0;
    }
    .navbar ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
    }
    .navbar li {
        position: relative;
    }
    .navbar a,
    .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0 10px 30px;
        font-family: var(--font-secondary) ;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 15px;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.5);
        white-space: nowrap;
        transition: 0.3s;
    }
    .navbar.a>.bi-cart {
        margin-top: 12px;
    }
    .navbar a i,
    .navbar a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
    }
    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
        color: #2a8cc5;
    }
    .navbar .dropdown ul {
        display: block;
        position: absolute;
        left: 14px;
        top: calc(100% + 30px);
        margin: 0;
        padding: 10px 0;
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        background: var(--color-secondary);
        transition: 0.3s;
        border-radius: 4px;
    }
    .navbar .dropdown ul li {
        min-width: 200px;
    }
    .navbar .dropdown ul a {
        padding: 10px 20px;
        font-size: 15px;
        text-transform: none;
        font-weight: 400;
    }
    .navbar .dropdown ul a i {
        font-size: 12px;
    }
    .navbar .dropdown ul a:hover,
    .navbar .dropdown ul .active:hover,
    .navbar .dropdown ul li:hover>a {
        color: #2a8cc5;
    }
    .navbar .dropdown:hover>ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
    }
    .navbar .dropdown .dropdown ul {
        top: 0;
        left: calc(100% - 30px);
        visibility: hidden;
    }
    .navbar .dropdown .dropdown:hover>ul {
        opacity: 1;
        top: 0;
        left: 100%;
        visibility: visible;
    }
}

@media (min-width: 1280px) and (max-width: 1366px) {
    .navbar .dropdown .dropdown ul {
        left: -90%;
    }
    .navbar .dropdown .dropdown:hover>ul {
        left: -100%;
    }
}

@media (min-width: 1280px) {
    .mobile-nav-show,
    .mobile-nav-hide {
        display: none;
    }
}


/*--------------------------------------------------------------
# Mobile Navigation
--------------------------------------------------------------*/

@media (max-width: 1279px) {
    .navbar {
        position: fixed;
        top: 0;
        right: -100%;
        width: 100%;
        max-width: 400px;
        bottom: 0;
        transition: 0.3s;
        z-index: 9997;
    }
    .navbar ul {
        position: absolute;
        inset: 0;
        padding: 50px 0 10px 0;
        margin: 0;
        background: rgba(0, 0, 0, 0.9);
        overflow-y: auto;
        transition: 0.3s;
        z-index: 9998;
    }
    .navbar a,
    .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        font-family: var(--font-primary);
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.5);
        letter-spacing: 1px;
        white-space: nowrap;
        transition: 0.3s;
    }
    .navbar a i,
    .navbar a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
    }
    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
        color: #fff;
    }
    .navbar .dropdown ul,
    .navbar .dropdown .dropdown ul {
        position: static;
        display: none;
        padding: 10px 0;
        margin: 10px 20px;
        transition: all 0.5s ease-in-out;
        border: 1px solid black;
    }
    .navbar .dropdown>.dropdown-active,
    .navbar .dropdown .dropdown>.dropdown-active {
        display: block;
    }
    .mobile-nav-show {
        color: #fff;
        font-size: 28px;
        cursor: pointer;
        line-height: 0;
        transition: 0.5s;
        z-index: 9999;
        margin: 0 10px 0 10px;
    }
    .mobile-nav-hide {
        color: #fff;
        font-size: 32px;
        cursor: pointer;
        line-height: 0;
        transition: 0.5s;
        position: fixed;
        right: 20px;
        top: 20px;
        z-index: 9999;
    }
    .mobile-nav-active {
        overflow: hidden;
    }
    .mobile-nav-active .navbar {
        right: 0;
    }
    .mobile-nav-active .navbar:before {
        content: "";
        position: fixed;
        inset: 0;
        background: rgba(22, 23, 24, 0.8);
        z-index: 9996;
    }
}


/*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/

.about .content h2 {
    font-weight: 700;
    font-size: 24px;
    color: var(--color-primary);
}

.about .content ul {
    list-style: none;
    padding: 0;
}

.about .content ul li {
    margin-bottom: 20px;
    display: flex;
    align-items: center;
}

.about .content ul strong {
    margin-right: 10px;
}

.about .content ul i {
    font-size: 16px;
    margin-right: 5px;
    color: var(--color-primary);
    line-height: 0;
}


/*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/

.testimonials {
    margin-top: 80px;
}

.testimonials .testimonial-item {
    box-sizing: content-box;
    padding: 30px;
    margin: 40px 30px;
    background: var(--color-secondary);
    min-height: 320px;
    display: flex;
    flex-direction: column;
    text-align: center;
    transition: 0.3s;
}

.testimonials .testimonial-item .stars {
    margin-bottom: 15px;
}

.testimonials .testimonial-item .stars i {
    color: #ffc107;
    margin: 0 1px;
}

.testimonials .testimonial-item .testimonial-img {
    width: 90px;
    border-radius: 50%;
    border: 5px solid #474a4d;
    margin: 0 auto;
}

.testimonials .testimonial-item h3 {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0 5px 0;
    color: #fff;
}

.testimonials .testimonial-item h4 {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.5);
    margin: 0;
}

.testimonials .testimonial-item p {
    font-style: italic;
    margin: 0 auto 15px auto;
}

.testimonials .swiper-pagination {
    margin-top: 20px;
    position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: rgba(255, 255, 255, 0.2);
    opacity: 1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
    background-color: rgba(255, 255, 255, 0.5);
}

.testimonials .swiper-slide {
    opacity: 0.3;
}

@media (max-width: 1199px) {
    .testimonials .swiper-slide-active {
        opacity: 1;
    }
    .testimonials .swiper-pagination {
        margin-top: 0;
    }
    .testimonials .testimonial-item {
        margin: 40px 20px;
    }
}

@media (min-width: 1200px) {
    .testimonials .swiper-slide-next {
        opacity: 1;
        transform: scale(1.12);
    }
}


/*--------------------------------------------------------------
# Pricing Section
--------------------------------------------------------------*/

.gallery {
    margin-top: 40px;
}

.gallery .gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

.gallery .gallery-item img {
    transition: 0.3s;
    border-radius: 30px;
}

.img-fluid {
    margin-top: 35px;
}

#artis,
#cat {
    margin-top: 65px;
}

.gallery .gallery-links {
    inset: 0;
    opacity: 0;
    margin-top: 12px;
    transition: all ease-in-out 0.3s;
    background: rgba(0, 0, 0, 0.6);
    z-index: 3;
}

.gallery .gallery-links .preview-link,
.gallery .gallery-links .details-link {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.5);
    transition: 0.3s;
    line-height: 1.2;
    margin: 30px 8px 0 8px;
}

.gallery .gallery-links .preview-link:hover,
.gallery .gallery-links .details-link:hover {
    color: #fff;
}

.gallery .gallery-links .details-link {
    font-size: 30px;
    line-height: 0;
}

.gallery .gallery-item:hover .gallery-links {
    opacity: 1;
    border-radius: 30px;
}

.gallery .gallery-item:hover .preview-link,
.gallery .gallery-item:hover .details-link {
    margin-top: 0;
}

.gallery .gallery-item:hover img {
    transform: scale(1.1);
}

.glightbox-clean .gslide-description {
    background: #222425;
}

.glightbox-clean .gslide-title {
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
}


/*--------------------------------------------------------------
# Gallery Single Section
--------------------------------------------------------------*/

.gallery-single .portfolio-details-slider img {
    width: 100%;
}

.gallery-single .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: rgba(255, 255, 255, 0.7);
    opacity: 1;
}

.gallery-single .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
    background-color: var(--color-primary);
}

.gallery-single .swiper-button-prev,
.gallery-single .swiper-button-next {
    width: 48px;
    height: 48px;
}

.gallery-single .swiper-button-prev:after,
.gallery-single .swiper-button-next:after {
    color: rgba(255, 255, 255, 0.8);
    background-color: rgba(0, 0, 0, 0.2);
    font-size: 24px;
    border-radius: 50%;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}

.gallery-single .swiper-button-prev:hover:after,
.gallery-single .swiper-button-next:hover:after {
    background-color: rgba(0, 0, 0, 0.6);
}

@media (max-width: 575px) {
    .gallery-single .swiper-button-prev,
    .gallery-single .swiper-button-next {
        display: none;
    }
}

.gallery-single .portfolio-info h3 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
    font-family: var(--font-secondary);
}

.gallery-single .portfolio-info h3:after {
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 3px;
    background: var(--color-primary);
    left: 0;
    bottom: 0;
}

.gallery-single .portfolio-info ul {
    list-style: none;
    padding: 0;
    font-size: 15px;
}

.gallery-single .portfolio-info ul li {
    display: flex;
    flex-direction: column;
    padding-bottom: 15px;
}

.gallery-single .portfolio-info ul strong {
    text-transform: uppercase;
    font-weight: 400;
    color: #6b7075;
    font-size: 14px;
}

.gallery-single .portfolio-info .btn-visit {
    padding: 8px 40px;
    background: var(--color-primary);
    color: #fff;
    border-radius: 50px;
    transition: 0.3s;
}

.gallery-single .portfolio-info .btn-visit:hover {
    background: #2cbc85;
}

.gallery-single .portfolio-description h2 {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #fff;
    font-family: var(--font-secondary);
}

.gallery-single .portfolio-description p {
    padding: 0;
}

.gallery-single .portfolio-description .testimonial-item {
    padding: 30px 30px 0 30px;
    position: relative;
    background: var(--color-secondary);
    height: 100%;
    margin-bottom: 50px;
}

.gallery-single .portfolio-description .testimonial-item .testimonial-img {
    width: 90px;
    border-radius: 50px;
    border: 6px solid #2e3133;
    float: left;
    margin: 0 10px 0 0;
}

.gallery-single .portfolio-description .testimonial-item h3 {
    font-size: 18px;
    font-weight: bold;
    margin: 15px 0 5px 0;
    padding-top: 20px;
}

.gallery-single .portfolio-description .testimonial-item h4 {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.6);
    margin: 0;
}

.gallery-single .portfolio-description .testimonial-item .quote-icon-left,
.gallery-single .portfolio-description .testimonial-item .quote-icon-right {
    color: #2a8cc5;
    font-size: 26px;
    line-height: 0;
}

.gallery-single .portfolio-description .testimonial-item .quote-icon-left {
    display: inline-block;
    left: -5px;
    position: relative;
}

.gallery-single .portfolio-description .testimonial-item .quote-icon-right {
    display: inline-block;
    right: -5px;
    position: relative;
    top: 10px;
    transform: scale(-1, -1);
}

.gallery-single .portfolio-description .testimonial-item p {
    font-style: italic;
    margin: 0 0 15px 0 0 0;
    padding: 0;
}


/*--------------------------------------------------------------
# Services Section
--------------------------------------------------------------*/

.services .service-item {
    padding: 50px 30px;
    transition: all ease-in-out 0.4s;
    background: var(--color-secondary);
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.services .service-item:before {
    content: "";
    position: absolute;
    background: #1d1f20;
    top: -200px;
    transition: all 0.3s;
    z-index: -1;
}

.services .service-item i {
    background: var(--color-primary);
    color: #fff;
    font-size: 24px;
    transition: 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    height: 56px;
    border-radius: 50%;
}

.services .service-item h4 {
    font-weight: 600;
    margin: 15px 0 0 0;
    transition: 0.3s;
    font-size: 20px;
}

.services .service-item h4 a {
    color: #fff;
}

.services .service-item p {
    line-height: 24px;
    font-size: 14px;
    margin: 15px 0 0 0;
}

.services .service-item:hover:before {
    background: var(--color-primary);
    right: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 0px;
}

.services .service-item:hover h4 a,
.services .service-item:hover p {
    color: #fff;
}

.services .service-item:hover i {
    background: #fff;
    color: var(--color-primary);
}


/*--------------------------------------------------------------
# Pricing Section
--------------------------------------------------------------*/

.pricing {
    margin-top: 80px;
}

.pricing .pricing-item {
    border-bottom: 1px dashed #474a4d;
    width: 100%;
    height: 100%;
    padding: 0 0 15px 0;
}

.pricing .pricing-item h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.6);
}

.pricing .pricing-item h4 {
    margin: 0;
    font-size: 16px;
}

.dropbtn {
    background-color: #000;
    color: #ffffff80;
    padding: 16px;
    font-size: 16px;
    border: none;
}


/* The container <div> - needed to position the dropdown content */

.dropdown {
    position: relative;
    display: inline-block;
}


/* Dropdown Content (Hidden by Default) */

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff80;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    border-radius: 12px;
    z-index: 1;
    transition: all 3s ease-in-out;
}


/* Links inside the dropdown */

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: all 3s ease-in-out;
}


/* Change color of dropdown links on hover */

.dropdown-content a:hover {
    color: #2a8cc5;
    transition: all 2s ease-in-out;
    animation: 1000ms ease-in-out 0s forwards;
}


/* Show the dropdown menu on hover */

.dropdown:hover .dropdown-content {
    display: block;
    transition: all 3s ease-in-out;
    animation: 10s ease-in-out 3s forwards;
}


/* Change the background color of the dropdown button when the dropdown content is shown */

.dropdown:hover .dropbtn {
    color: #2a8cc5;
    animation: 1000ms ease-in-out 0s forwards;
}


/*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/

.contact .info-item+.info-item {
    margin-top: 40px;
}

.contact .info-item i {
    font-size: 20px;
    color: var(--color-primary);
    float: left;
    width: 44px;
    height: 44px;
    background: #222425;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
    margin-right: 15px;
}

.contact .info-item h4 {
    padding: 0;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 5px;
    color: rgba(255, 255, 255, 0.5);
}

.contact .info-item p {
    padding: 0;
    margin-bottom: 0;
    font-size: 14px;
    color: #fff;
}

.contact .info-item:hover i {
    background: var(--color-primary);
    color: #fff;
}

.contact .php-email-form {
    width: 100%;
}

.contact .php-email-form .form-group {
    padding-bottom: 8px;
}

.contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #df1529;
    text-align: left;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .error-message br+br {
    margin-top: 25px;
}

.contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: var(--color-primary);
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .loading {
    display: none;
    background: var(--color-secondary);
    text-align: center;
    padding: 15px;
    color: rgba(255, 255, 255, 0.6);
}

.contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid var(--color-primary);
    border-top-color: var(--color-secondary);
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
    border-radius: 4px;
    box-shadow: none;
    font-size: 14px;
    background-color: var(--color-secondary);
    border: 1px solid #2e3133;
    color: #fff;
}

.contact .php-email-form input {
    height: 44px;
}

.contact .php-email-form textarea {
    padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
    background: var(--color-primary);
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
    background: #2a8cc5;
}

@-webkit-keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}


/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/

.hero {
    width: 100%;
    min-height: 30vh;
    background: #000;
    background-size: cover;
    position: relative;
    padding: 140px 0 60px 0;
}

.hero h2 {
    margin: 0 0 10px 0;
    font-size: 38px;
    font-weight: 700;
    color: #fff;
    font-family: var(--font-secondary);
}

.hero h2 span {
    position: relative;
    z-index: 1;
    padding: 0 5px;
    display: inline-block;
}

.bi-search {
    background: #000;
    margin-right: 12px;
}

.input-group-append>i {
    color: #ffffff80;
    margin: 8px 0 0px 15px;
}

.hero h2 span:before {
    content: "";
    position: absolute;
    height: 50%;
    bottom: 0;
    left: 0;
    right: 0;
    background: var(--color-primary);
    z-index: -1;
}

.hero p {
    color: rgba(255, 255, 255, 0.6);
    margin-bottom: 30px;
    font-size: 18px;
}

.hero .btn-get-started {
    font-family: var(--font-primary);
    font-weight: 400;
    font-size: 14px;
    display: inline-block;
    padding: 12px 40px;
    border-radius: 4px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: 0.3s;
    color: #fff;
    background: var(--color-primary);
}

.hero .btn-get-started:hover {
    background: #2a8cc5;
}

@media (max-width: 768px) {
    .hero h2 {
        font-size: 32px;
    }
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

.footer {
    background-color: #1d1f20;
}

html,
body,
img,
figure {
    max-width: 100%;
}

html,
body {
    overflow-x: hidden;
    color: #fff;
    -ms-overflow-style: scrollbar;
    -webkit-font-smoothing: antialiased;
}

a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
    color: inherit;
}

a {
    -webkit-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
}

.ct-u-paddingTop10 {
    padding-top: 10px !important;
}

.ct-footer {
    background-color: #111;
    padding-top: 70px;
    margin-top: 20px;
    position: relative;
}

.ct-footer-pre {
    width: 100%;
    padding-bottom: 55px;
    border-bottom: 1px solid #555;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.ct-footer-pre span {
    font-family: 'Open Sans Condensed', sans-serif;
    color: #ebebeb;
    font-size: 30px;
}

.ct-footer-pre .form-group {
    position: relative;
    margin: 0;
}

.ct-footer-pre .form-group:before,
.ct-footer-pre .form-group:after {
    content: '';
    display: table;
}

.ct-footer-pre .form-group:after {
    clear: both;
}

.ct-footer-pre .form-group input {
    border: 1px solid #00bff3;
    background-color: #333;
    color: #fff;
    height: 50px;
    padding: 0 30px;
    margin: 0 5px;
    border-radius: 0 !important;
}

.ct-footer-pre .form-group button {
    height: 50px;
    position: relative;
    width: 80px;
    padding: 0
}

.ct-footer-list {
    padding: 50px 0;
    list-style: none;
    padding-left: 0;
    display: table;
    width: 100%;
    border-bottom: 1px solid #555;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.ct-footer-list>li .ct-footer-list-header {
    font-family: 'Open Sans Condensed', sans-serif;
    color: #00bff3;
    font-size: 30px;
}

.ct-footer-list>li ul {
    list-style: none;
    padding-left: 0;
}

.ct-footer-list>li ul li a {
    color: #fff;
}

.ct-footer-list>li ul li a:hover,
.ct-footer-post a:hover {
    text-decoration: underline;
    color: #2a8cc5;
    padding: 12px;
}

.ct-footer-post {
    padding: 0px 95px 0px;
}

.ct-footer-post .inner-left,
.ct-footer-post .inner-right {
    padding: 0px 408px;
}

.ct-footer-post ul {
    list-style: none;
    padding-left: 0;
    margin: 0 -20px;
}

.ct-footer-post ul li {
    display: inline-block;
    margin: 0 20px;
}

.ct-footer-post a {
    color: #fff;
}

.ct-footer-post p {
    color: #fff;
}

.ct-footer-meta {
    padding-top: 30px;
}

.ct-footer-meta .ct-socials {
    padding: 20px 0;
}

.ct-footer-meta .ct-socials li {
    padding: 0 3px;
}

.ct-socials>li {
    float: left;
}

.ct-footer--with-button {
    padding-top: 150px;
}

address {
    color: #fff;
    display: inline-block;
}

address span {
    font-weight: 600;
}

address a {
    color: #fff;
}

address a:hover {
    text-decoration: underline;
}

.btn {
    font-family: 'Open Sans Condensed', sans-serif;
    border-radius: 0;
    border: none;
    text-transform: uppercase;
    color: #111;
    font-size: 26px;
    background-color: #fff;
    padding: 0;
}

.btn.btn-motive {
    background-color: #00bff3;
    -webkit-transition: all .25s ease;
    transition: all .25s ease;
}

.btn.btn-motive:hover,
.btn.btn-motive:hover:active {
    background-color: #00bff3;
}

.btn.btn-violet {
    color: #fff;
    background-color: #4f4f99;
    -webkit-transition: all .25s ease;
    transition: all .25s ease;
}

.btn.btn-violet:hover {
    background-color: #37376b;
}

.btn.btn-violet:hover:active {
    background-color: #2f2f5b
}

.btn.btn-green {
    color: #fff;
    background-color: #43670f;
    -webkit-transition: all .25s ease;
    transition: all .25s ease;
}

.btn.btn-green:hover {
    background-color: #36520c;
}

.btn.btn-green:hover:active {
    background-color: #314a0b;
}

.btn.btn-red {
    color: #fff;
    background-color: #da2229;
    -webkit-transition: all .25s ease;
    transition: all .25s ease;
}

.btn.btn-red:hover {
    background-color: #ae1b21;
}

.btn.btn-red:hover:active {
    background-color: #9d181e
}

.btn.btn-white {
    background-color: #fff;
    -webkit-transition: all .25s ease;
    transition: all .25s ease;
}

.btn.btn-white:hover {
    background-color: #d9d9d9;
}

.btn.btn-white:hover:active {
    background-color: #c9c9c9
}

.btn.btn-large {
    padding: 20px 50px;
    font-size: 30px;
    white-space: normal;
}
.container-fluid{
    height: 60px;
}
.ct-mediaSection {
    background-attachment: fixed;
}

.ct-section_header--type1 {
    font-family: 'Open Sans Condensed', sans-serif;
    color: #000;
    font-size: 115px;
    text-transform: uppercase;
}

.ct-section_header--type2 small {
    font-family: 'coquette', fantasy;
    font-size: 58px;
    line-height: .7;
    display: block;
    font-weight: 700;
    position: relative;
    left: -12px;
}

.ct-section_header--type2 span {
    font-family: 'Bebas Neue';
    font-size: 115px;
    line-height: .8;
}

.ct-section_header--type2 img {
    display: inline-block;
    float: left;
    position: relative;
    top: 15px;
    padding-right: 3px;
}

.ct-section_header--type3 {
    text-align: center;
}

.ct-section_header--type3 small {
    font-family: 'coquette', fantasy;
    font-size: 50px;
    padding: 15px 0;
    font-weight: 700;
    color: #fff;
    background-image: url("/core/fileparse.php/16/urlt/../images/ribbon.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    display: block
}

.ct-section_header--type3 span {
    font-family: 'Bebas Neue';
    font-size: 150px;
    font-weight: 400;
    text-transform: uppercase;
    line-height: .85
}

.ct-section_header--type4 {
    text-align: center;
}

.ct-section_header--type4:before,
.ct-section_header--type4:after {
    content: '';
    display: table
}

.ct-section_header--type4:after {
    clear: both
}

.ct-section_header--type4 small {
    font-family: 'coquette', fantasy;
    font-size: 50px;
    color: inherit;
    font-weight: 700;
    display: block
}

.ct-section_header--type4 span {
    font-family: 'nimbus-sans-condensed', sans-serif;
    font-weight: 400;
    font-weight: bold;
    font-size: 150px;
    text-transform: uppercase;
    display: block;
    line-height: .7
}

.ct-section_header+p {
    font-size: 30px;
    font-weight: 700;
    letter-spacing: -1.5px;
    text-align: center;
}

.ct-section_header--type4+p {
    font-family: 'nimbus-sans-condensed', sans-serif;
    font-weight: 400;
    font-size: 40px;
    font-weight: 700;
    line-height: 1;
}

.d-flex {
    color: #2a8cc5;
    background-color: #000;
    border-radius: 0px;
}

.d-flex>span {
    padding: 0 3px;
}


/* Media Queries */

@media (min-width:1200px) {
    .ct-footer-pre {
        display: table;
        padding-top: 82px;
    }
    .ct-footer-pre>.inner {
        display: table-cell;
        vertical-align: middle;
    }
    .ct-footer-list>li {
        width: 8%;
        display: table-cell;
        vertical-align: top;
    }
    .ct-footer-list>li:last-child {
        width: 7%;
    }
}

@media (max-width:1199px) {
    .ct-footer-pre .form-group {
        padding-top: 15px
    }
}

@media (max-width: 1199px) {
    .ct-footer-list>li {
        display: inline-block;
        float: left;
    }
}

@media (min-width:992px) {
    .ct-footer-post .inner-left {
        float: left;
    }
    .ct-footer-post .inner-right {
        float: right;
    }
}

@media (max-width:991px) {
    .ct-footer-post {
        text-align: center;
    }
}

@media (min-width: 768px) {
    .col-md-3 {
        flex: 0 0 auto;
        width: 35%;
    }
}

@media (min-width: 768px) and (max-width: 1199px) {
    .ct-footer-list>li {
        width: 33.3333%;
    }
}

@media (min-width: 768px) {
    .col-md-2 {
        flex: 0 0 auto;
        width: 9.7%;
    }
}

@media (min-width:768px) {
    .ct-footer-post p {
        display: inline-block;
    }
    .ct-footer-post p+p {
        padding-left: 50px;
    }
}

@media (max-width:767px) {
    address {
        padding-top: 30px;
    }
}

@media (min-width: 480px) and (max-width:767px) {
    .ct-footer-list>li {
        width: 50%;
    }
}

@media (min-width:480px) {
    .ct-footer-pre .form-group button {
        top: -1px;
    }
    .ct-footer-pre .form-group input {
        width: 331px;
    }
}

@media (max-width:479px) {
    .ct-footer-pre .form-group input {
        float: left;
        width: 70%;
        margin: 0;
    }
    .ct-footer-pre .form-group button {
        float: left;
        width: 30%;
    }
    .ct-footer-list>li {
        width: 100%;
        text-align: center;
    }
    .ct-footer-list {
        padding: 20px 0;
    }
    .btn.btn-large {
        padding: 20px 10px;
        line-height: .9;
        font-size: 26px;
        letter-spacing: -.2px;
    }
    .ct-section_header--type1 {
        font-size: 60px;
        line-height: .8;
    }
    .ct-section_header+p {
        font-size: 22px;
    }
    .ct-section_header--type3 small {
        font-size: 25px;
    }
    .ct-section_header--type4 small {
        font-size: 40px;
    }
    .ct-section_header--type3 span {
        font-size: 90px;
    }
    .ct-section_header--type4 span {
        font-size: 80px;
    }
    .ct-section_header--type4+p {
        font-size: 28px;
    }
}

#_blank:hover {
    background-color: #2a8cc5;
}
body {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.content {
  height: 70vh; }

.footer-20192 {
  position: relative;
  color: #fff;
  padding: 7rem 0;
  background-color: #141d2a; }
  .footer-20192 .contain {
    position: relative;
    margin-left: 100px;
    margin-right: 0px;
   }
  .footer-20192 h3 {
    font-size: 16px;
    margin-bottom: 10px;
    margin-top: 0;
    line-height: 1.5; }
  .footer-20192 .links li {
    margin-bottom: 10px;
    line-height: 1.5;
    display: block; }
    .footer-20192 .links li a {
      color: #666873; }
      .footer-20192 .links li a:hover {
        color: #fff; }
  .footer-20192 .social li {
    display: inline-block;
    position: relative; }
    .footer-20192 .social li a {
      position: relative;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: inline-block;
      margin: 0;
      padding: 10px;
      background-color: #2a6fc5;
      color: #fff; }
      .footer-20192 .social li a > span {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
  .footer-20192 .footer-logo {
    color: #fff;
    font-size: 20px;
    letter-spacing: .1rem; }
  .footer-20192 .copyright {
    color: #666873; }
  .footer-20192 .cta {
    -webkit-box-shadow: -20px -20px 0 0 rgba(52, 58, 64, 0.2);
    box-shadow: -20px -20px 0 0 rgba(52, 58, 64, 0.2);
    padding: 20px;
    background-color: #2a6fc5;
    top: -150px;
    position: relative; }
    .footer-20192 .cta h2, .footer-20192 .cta h3 {
      line-height: 1.5; }
    .footer-20192 .cta h3 {
      font-size: 20px; }

</style>
