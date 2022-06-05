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
    @if($publicaciones->id != 75)
    <p class="font-face-dpbl text-blues-three s-four-text" style="padding-top : 12px">Publicación:</p>
    @else
    <p class="font-face-dpbl text-blues-three s-four-text" style="padding-top : 12px">&nbsp;</p>
    @endif
    <h1 class="font-face-dp text-color-letter-title s-two-text" style="margin-top : -12px">
      {{$publicaciones->title_es}}
    </h1>
    <!-- <p class="font-face-dpbl text-blues-three s-four-text" style="padding-top: 12px;">Aliados:</p>
    <div style="margin-top : -12px;">
      <h1 class="font-face-dp text-color-letter-title s-four-text" >
        Nombre de la contraparte
      </h1>
    </div> -->

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
            border-bottom: 1px solid #000000;
            ">
            <p class="text-color-letter-title font-face-dpbl s-four-text">Recursos descargables</p>

            <div class="size-link" style="height: auto;">
              <p class="font-face-dp" style="overflow: hidden;text-overflow: ellipsis;">
                <a href="{{ url('/storage/IDEA/files/' . $publicaciones->file) }}" target="_blank"><i class="fas fa-download"></i>&nbsp;{{$publicaciones->file}}</a>
              </p>
              <br>
              @if (count($multiple) > 0)
              @foreach ($multiple as $key_m => $value_m)
              <p class="font-face-dp" style="overflow: hidden;text-overflow: ellipsis;">
                <a href="{{ url('/storage/IDEA/files/' . $value_m->file) }}" target="_blank"><i class="fas fa-download"></i>&nbsp;{{$value_m->file}}</a>
              </p><br>
              @endforeach
              @endif

            </div>
            <br>
          </div>

          <div class="col-md-12" style="
          border-left: 1px solid #000000;
          ">
          <p class="text-color-letter-title font-face-dpbl s-four-text">Otros proyectos</p>
          @foreach($data_p as $key_p => $value_p)
          <br>
          <div class="card card-home card-other-projects">
            <div class="card-body" style="margin: 0 7px 0 7px;">
              <h3 class="text-color-letter-title mt-3 font-face-dp s-four-text">{{$value_p['title_es']}}</h3>
                <br>
                <div class="text-color-letter-content font-face-dp s-four-text sc-desc " style="overflow: hidden;text-overflow: ellipsis;" >
                  {!! $value_p['description_es'] !!}
                </div>
                <br>
                <a class="btn btn-outline-white-fs-xl-0-n"
                  href="{{ action('PublicationController@getByPost', ['id' => $value_p['id']]) }}"
                >Leer más <img src="../img/Leer-mas.png" class="img-home-banner"> </a>
            </div>
          </div>
          @endforeach



        </div>
      </div>
    </div>

  </div>
</div>
</section>












@endsection
