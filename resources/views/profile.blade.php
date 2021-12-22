
<head>
    <title>profile</title>
    <link href="{{ URL::asset('assets/css/css.css') }}" rel="stylesheet">
</head>


<figure class="fir-image-figure">
@php
    $var= Auth::user()->gender
@endphp
  @if ($var=="male")
  <img class="fir-author-image fir-clickcircle" src="http://127.0.0.1:8000/assets/images/user_icon.png" alt="David East - Author">
  @endif
  @if ($var=="female")
  <img class="fir-author-image fir-clickcircle" src="http://127.0.0.1:8000/assets/images/female.png" alt="David East - Author">
  @endif
      <div class="fir-imageover-color"></div>

    <figcaption>
      <div class="fig-author-figure-title">{{ Auth::user()->name }}</div>
      <div class="fig-author-figure-title">{{ Auth::user()->email  }}.</div>
      <div class="fig-author-figure-title">{{$var}} </div>
    </figcaption>
  </figure>
<a href="/dashboard"><img src="http://127.0.0.1:8000/assets/images/back.png" alt="David East - Author" class="back"></a>
