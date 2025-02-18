<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        :root {
            --dark-green: #9cc675;
            --dark-yellow: #e89a3d;
            --extra-light-brown: #fdf0d7;
            --light-brown: #ecd5ab;
            --dark-brown: #915b40;
        }

        body {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow-x: hidden;
            background: var(--light-brown);
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-full-mobile {
            position: relative;
            margin: 50px auto;
            padding-bottom: 50px;
        }

        .swiper-full-mobile .swiper-slide {
            height: 100%;
        }

        .swiper-full-mobile .swiper-slide img {
            width: 100%;
            height: 530px;
            object-fit: cover;
        }

        .swiper-slide.swiper-slide-active img {
            border-radius: 0;
        }
    </style>
    <title>Image Swiper</title>
</head>
<body>
    <section>
        <center>
            {{-- <img src="/2.jpg" alt="ThuisImage" class="logo-img"> --}}
            <h1 style="font-size: 36px;">Thuisschoonmeester</h1>
            <p style="font-size: 18px; font-weight: 300">Pictures of my work</p>
        </center>
        <div class="swiper-container swiper-full-mobile">
            <div class="swiper-wrapper">
                @foreach($Image as $image)
                    <div class="swiper-slide">
                        <div class="swiper-slide__img">
                            <img src="{{ asset('storage/' . $image->image) }}" alt="Gallery Image">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiperMobile = new Swiper('.swiper-container.swiper-full-mobile', {
                slidesPerView: 4,
                spaceBetween: 0,
                slideToClickedSlide: true,
                centeredSlides: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                effect: "coverflow",
                grabCursor: true,
                coverflowEffect: {
                    rotate: -10,
                    stretch: 10,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                loop: true,
                keyboard: {
                    enabled: true,
                    onlyInViewport: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    }
                }
            });
        });
    </script>
</body>
</html>
