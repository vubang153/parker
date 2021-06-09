<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <!-- Link Swiper's CSS -->
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
  />

  <!-- Demo styles -->
  <style>
    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


    .swiper-container {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .swiper-container.mySwiper.swiper-container-initialized.swiper-container-horizontal.swiper-container-free-mode.swiper-container-thumbs
    {
      width: 40%;
      float: right;
      padding: 2.5rem 0;
      height: 30%;

    }
    .swiper-slide.swiper-slide-visible.swiper-slide-thumb-active
    {
      border: 1px solid red;
    }
  </style>
</head>
<body>


  <div
  style="--swiper-navigation-color: #fff;"
  class="swiper-container mySwiper2"
  >
  <div class="swiper-wrapper">
    <?php for ($i=0; $i < 9 ; $i++) {?> 
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" style="max-width: 100%;object-fit: cover" />
      </div>  
    <?php } ?>
    
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
<div class="main-slider__footer" style="background-color: rgba(0,0,0,.5); clear: both">
  <div class="content" style="width: 50%; float: left; padding: 2rem">
    Chúng tôi muốn phục vụ bạn tốt hơn
    Điền vào biểu mẫu trực tuyến và nhóm kỹ thuật Parker của chúng tôi sẽ liên lạc với bạn ngay.

    Gửi yêu cầu của bạn ngày hôm nay!
  </div>
  <div thumbsSlider="" class="swiper-container mySwiper">
    <div class="swiper-wrapper">
      <?php for ($i=0; $i < 9 ; $i++) {?> 
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>  
      <?php } ?>
    </div>
  </div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
      320: {
        slidesPerView: 2,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 50
      }
    }
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
</script>
</body>
</html>
