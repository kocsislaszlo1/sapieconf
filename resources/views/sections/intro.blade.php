<section id="intro">
  <div class="intro-container wow fadeIn">
    @if($esemenyek->esemenynev!=null)
    <h1 class="mb-4 pb-0">{{$esemenyek->esemenynev}}</h1>
    <p class="mb-4 pb-0">{{$esemenyek->tema}}</p>
   @endif  
    <a href="#about" class="about-btn scrollto">About The Event</a>
    <a href="{{ route('regist') }}" class="about-btn scrollto">Registration</a>
  </div>
</section>
