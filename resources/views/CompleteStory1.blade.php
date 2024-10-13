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

<div class="team section" id="team">
  <div class="main-content">
    <img src="assets/images/startstory1.png" alt="">
    <h6>بداية القصة</h6>
  </div>
  <p class="centered-text">كان الْأَرْنَبُ «نَبْهَانُ» نَائِمٌ يَحْلُمُ. الْعُصْفُورَةُ قَالَتْ لَهُ فِي الْحُلْمِ: «أَخُوكَ سَلْمَانُ» فِي خَطَرٍ يا «نَبْهَانُ». «نَبْهانُ» صَحِيَ مِنْ نَوْمِهِ لَهْفَانَ. «نَبْهانُ» قَعَدَ يَنْتَظِرُ عَوْدَةَ إِخْوَتِهِ الثَّلَاثَةِ.</p>
  <br>
  <br>

  <div class="main-content">
    <img src="assets/images/endstory1.png" alt="">
    <h6>نهاية القصة</h6>
  </div>
  <p class="centered-text">فَرْحو بِنَجَاةِ «سَلْمَانَ». رَجَعو إِلَى الْبَيْتِ فِي غَايَةِ الأَطْمِثْنَانِ. الْأَرَانِبُ الْأَرْبَعَةُ فِي الْبَيْتِ، وَالْكُلُّ فَرْحَانُ.</p>
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
          <form id="contact-form" action="{{ url('/CompleteStory1/saveStory') }}" method="post">
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
                        <source src="assets/videos/story1.mp4" type="video/mp4">
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
