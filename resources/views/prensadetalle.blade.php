@extends('layouts.site')

@section('content')

<section class="py-5-home py-5-h-size new-bg">
  <div class="grid-banner-home">



  </div>

</section>

<div class="grid-team background-card-l">
  <div class="uno-team-u">
    @foreach ($publicaciones->tags as $key_t => $value_t)
    <span class="badge badge-info first-lt" style="background:#59982f;">{{$value_t['name']}}</span>
    @endforeach
    <br>
    <p class="font-face-dpbl text-blues-three s-four-text" style="padding-top : 12px">Prensa:</p>
    <h1 class="font-face-dp text-color-letter-title s-two-text" style="margin-top : -12px">
      {{$publicaciones->title_es}}
    </h1>

    </div>
    <div class="dos-team-u-d"
    style="background-image:url(
      ' {{ url('/storage/thumbnails/' . $publicaciones->thumbnail) }} '
      ); background-repeat: round;
      ">
      <label>&nbsp;</label>
    </div>
  </div>


  <section>
    <div class="container background-card margin-pds">
      <br>

      <div class="grid-pds">

        <div class="uno-gpds">
          <div class="text-color-letter-content s-four-text font-face-dp text-lg-justify" >
            {!! $publicaciones->description_es !!}
          </div>
          <br>


        </div>

        <div class="dos-gpds">
          <div class="row">

            <div class="col-md-12" style="
            border-left: 1px solid #000000;

            ">
            <p class="text-color-letter-title font-face-dpbl s-four-text">Recursos descargables</p>
            <br>
            <p class="font-face-dp">
              <a href="{{ asset('https://fundacionidea.org.mx/storage/IDEA/files/' . $publicaciones->file) }}" target="_blank"><i class="fas fa-download"></i>&nbsp;{{$publicaciones->file}}</a>
            </p>
          </div>

      </div>
    </div>

  </div>
</div>
</section>












@endsection
