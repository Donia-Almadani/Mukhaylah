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

<!---->
<div class="container00">
  <div class="box">
      <a href="{{url('/stories_CompleteStory')}}">
      <img src="assets\images\CompleteStory.png" alt="Your Image">
    </a>
    <div class="box-content">
      <h3>أكمل القصة</h3>
      <p>اطلع على بداية ونهاية القصة ثم قم بإكمال القصة من خيالك</p>
    </div>
  </div>

  <div class="box">
      <a href="{{url('/stories_PictureGuessing')}}">
      <img src="assets\images\picGuess.png" alt="Your Image">
    </a>
    <div class="box-content">
      <h3>تخمين الصورة</h3>
      <p>قم بتخمين الاحداث اللتي تجري بالصورة وانطلق بكاتبتك الإبداعية</p>
    </div>
  </div>

  <div class="box">
      <a href="{{url('/stories_WriteWithFriend')}}">
      <img src="assets\images\WriteFriend.png" alt="Your Image">
    </a>
    <div class="box-content">
      <h3>الكتابة مع صديق</h3>
      <p>قم بكتابة قصة مع صديقك لاعطاء الفرصة للمزيد من الإبداع</p>
    </div>
  </div>
</div>


<div class="section about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ماهو نشاط تخمين الصورة؟ أو كيف أنجز النشاط؟
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

              <div class="accordion-body">
                <p>قم بتخمين الحدث بالصورة.</p>
                <p>-في هذا النشاط، ستتمكن من رؤية صورة لقصة.</p>
                <p>-مهمتك هي استخدام خيالك وكتابة قصة استنادًا إلى ما تراه في الصورة.</p>
                <p>-يمكنك التفكير في الشخصيات الموجودة في الصورة، وما يمكن أن يكونوا يفعلونه، وما قد يحدث بعد ذلك.</p>
                <p>-يمكن أن تكون قصتك إبداعية وخيالية قدر ما تريد!</p>
                <p>-بمجرد الانتهاء من كتابة القصة، يمكنك الاحتفاظ بها لنفسك والعوده لقرائتها لاحقاً.</p>
                <p>تذكير: لا يوجد إجابة صحيحة أو خاطئة، فقط استمتع بالكتابة.</p>
              </div>

            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                ماهو نشاط أكمل القصة؟ أو كيف أنجز النشاط؟
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

              <div class="accordion-body">
                <p>هذا النشاط يتضمن كتابة جزء وسط القصة.</p>
                <p>-ستحصل على بداية القصة ونهايتها مع صورها، وعليك إكمال الجزء الذي بينهما.</p>
                <p>-استخدم خيالك وتفكيرك الإبداعي لإضافة أحداث وتطورات للقصة.</p>
                <p>-بمجرد الانتهاء من كتابة القصة، يمكنك الاحتفاظ بها لنفسك والعوده لقراءتها لاحقاً.</p>
                <p>تذكير: لا يوجد إجابة صحيحة أو خاطئة، فقط استمتع بالكتابة.</p>
              </div>

            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ماهو نشاط الكتابة مع صديق؟ أو كيف أنجز النشاط؟
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">

              <div class="accordion-body">
                <p>قم بكتابة قصة مع صديقك.</p>
                <p>-يمكنك أن تنشأ غرفة.</p>
                <p>-بعد ذلك سيظهر لك رقم الغرفة، أدعو صديقك إلى النشاط بتزويده برقم الغرفة.</p>
                <p>-سوف تتناوب في الكتابة انت وصديقك، كل واحد منكم سوف يكتب لمدة دقيقتين.</p>
                <p>-بعد أن تنتهوا من النشاط، سوف تظهر القصة التي كتبتوها سوياً لك ولصديقك.</p>
                <p>-بمجرد الانتهاء من كتابة القصة، يمكنك الاحتفاظ بها لنفسك والعوده لقراءتها لاحقاً.</p>
                <p>تذكير: لا يوجد إجابة صحيحة أو خاطئة، فقط استمتع بالكتابة.</p>
              </div>

            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                ما هو منظور مخيلة؟
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">

              <div class="accordion-body">
                <p>في النشاطات ستكتب قصة باستخدام خيالك الخاص حيث يمكنك إضافة أحداث وتفاصيل حسب رغبتك.
                  ولكن بعد او قبل كتابة قصتك يمكنك ان تقوم بمشاهدة الفيديو الذي يظهر القصة الأصلية من وجهة نظر الشخصية مخيلة.
                  ويمكنك مقارنة القصة التي كتبتها بالقصة الأصلية واكتشاف الاختلافات والتشابهات لمعرفة اشياء جديدة.
                  لا تنسى أنه ليس هناك إجابة صحيحة أو خاطئة، فقط استمتع بالكتابة والتعبير عن أفكارك.</p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 align-self-center">
        <div class="section-heading">

          <h2>لم تفهم الأنشطة؟</h2>
          <h2>هنا تجد شرح لكل نشاط!</h2>

          <div class="M">
            <img src="assets/images/character.png">
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<!---->




  <!-- Scripts -->

  <script>
    function redirectToVideo() {
      window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ", "_blank");
    }
  </script>
  <!-- dont forget that there is three vid so amke three of it -->

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
