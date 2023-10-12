  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="fe/vendor/jquery/jquery.min.js"></script>
  <script src="fe/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="fe/assets/js/isotope.min.js"></script>
  <script src="fe/assets/js/owl-carousel.js"></script>

  <script src="fe/assets/js/tabs.js"></script>
  <script src="fe/assets/js/swiper.js"></script>
  <script src="fe/assets/js/custom.js"></script>
  <script>
      var interleaveOffset = 0.5;

    var swiperOptions = {
      loop: true,
      speed: 1000,
      grabCursor: true,
      watchSlidesProgress: true,
      mousewheelControl: true,
      keyboardControl: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        progress: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress;
            var innerOffset = swiper.width * interleaveOffset;
            var innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".slide-inner").style.transform =
              "translate3d(" + innerTranslate + "px, 0, 0)";
          }      
        },
        touchStart: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function(speed) {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-inner").style.transition =
              speed + "ms";
          }
        }
      }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);
  </script>
      <script>
        const searchBySelect = document.getElementById("searchBy");
        const input2 = document.getElementById("input2");

        searchBySelect.addEventListener("change", function () {
            if (this.value === "namaLengkap") {
                input2.placeholder = "Nama Lengkap";
                document.querySelector("label[for='input2']").textContent = "Nama Lengkap";
            } else if (this.value === "nomorSertifikat") {
                input2.placeholder = "Nomor Sertifikat";
                document.querySelector("label[for='input2']").textContent = "Nomor Sertifikat";
            }
        });
    </script>