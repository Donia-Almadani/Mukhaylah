@extends('Header&Footer')

@section('content')



    <!---->
<div class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-text">
          </div>
        </div>
      </div>
    </div>
</div>
<!---->


<!--
<div class="team section" id="team">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="main-content">
          <img src="assets/images/member-02.jpg" alt="">
          <h6>وصف مبسط لبداية القصة</h6>
        </div>
      </div>


      <div class="col-lg-3 col-md-6">
        <div class="main-content">
          <img src="assets/images/member-03.jpg" alt="">
          <h6>وصف مبسط لنهاية القصة</h6>
        </div>
      </div>

    </div>
  </div>
</div>
-->


<!---->
<div class="team section" id="team">
  <div class="main-content">
    <img src="assets/images/startstory2.png" alt="">
    <h6>بداية القصة</h6>
  </div>
  <p class="centered-text">كانت الحيوانات قبل آلاف السنين تتكلم كما يتكلم الإنسان عاش في ذاك الزمان مجموعة من الفيلة جميلة المظهر تسكن غابات الهند وقد كان أجمل الفيلة فيلٌ يدعى الحجاج ، وهو أبيض اللون، ضخم الجسد، نبيل النفس، بارا بوالدته أم شبل. كانت والدته حكيمة نبيهة ولكن الشيخوخة أتعبتها</p>
  <br>
  <br>

  <div class="main-content">
    <img src="assets/images/endstory2.png" alt="">
    <h6>نهاية القصة</h6>
  </div>
  <p class="centered-text">كان الملك عادلا رحيما أطلق سراح الحجاج ليعود إلى أمه. أسرع الحجاج الى والدته وجدها بخير فرحوا برؤية بعض. بعد ذلك اليوم نسى الحجاج غدر الحطاب وخيانته، ولكنه ظل يذكر صنيع الملك ويشكر له معروفه.</p>
  <br>
  <br>
</div>

<div class="contact-us section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6  align-self-center">

        <div class="section-heading">
          <h5>كتبت لك بداية ونهاية القصة</h5>
          <h5>قم بإكمال القصة من خيالك</h5>
          <div class="M">
            <img src="assets/images/character.png">
          </div>
        </div>

      </div>
      <div class="col-lg-6">
        <div class="contact-us-content">
          <form id="contact-form" action="{{route('savestoryC2.post')}}" method="post">
@csrf
            <div class="row">

              <div class="col-lg-12">
                <fieldset>
                  <textarea name="story" id="story" placeholder="أكتب قصتك هنا"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">حفظ القصة</button>

                  <button id="videoModalBtn">القصة من وجهة نظر مخيلة</button>
                  <div id="videoModal" class="modal">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <video id="modalVideo" controls>
                        <source src="assets/videos/story2.mp4" type="video/mp4">
                      </video>
                    </div>
                  </div>

                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->




  <!-- Scripts -->

  <script>

    // Get the modal element
    var modal = document.getElementById("videoModal");

    // Get the button that opens the modal
    var btn = document.getElementById("videoModalBtn");

    // Get the <span> element that closes the modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.addEventListener('click', function(event) {
      event.preventDefault();
      modal.style.display = "block";
    });

    // When the user clicks on <span> (x), close the modal
    closeBtn.addEventListener('click', function(event) {
      event.preventDefault();
      modal.style.display = "none";
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    });

  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>
</html>
@endsection
