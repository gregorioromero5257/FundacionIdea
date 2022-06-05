@extends('layouts.site')

@section('content')

<section class="py-5-home py-5-h-size new-bg">
  <div class="grid-banner-home">



    </div>

  </section>

  <div class="grid-publications-one background-card-l">
    <div class="uno-team-u">
      <h1 class="text-blues-two font-face-dp s-one-text">
        Prensa
      </h1>
      <br><br>
    </div>
  </div>


  @foreach ($arreglo as $key_p => $value_p)

  <div class="grid-home-uno background-card-r">
    <div class="grid-home-uno-suno-s-p">
      <h3 class="text-blues-three font-face-dpbl s-two-text">
        {{$value_p['anio']}}
      </h3>
    </div>
    <div class="grid-home-list-pp" >
      <div class="container-icons-brands-p " >

        @foreach ($value_p['posts'] as $key => $value)


        <div class="card card-home">
          <div class="card-body">
            <div class="grid-body-card">
              <div class="uno-gbc">
                <h1 class="text-color-letter-card mt-3 font-face-dp s-four-text-dos">
                  {{$value->title_es}}
                </h1>
              </div>
              <div class="slider-card">
                  <div class="slide-card">
                    <img src="{{ url('/storage/thumbnails/' . $value->thumbnail) }}">
                      <div class="badge-aling">
                        @foreach ($value->tags as $key_t => $value_t)
                        <span class="badge badge-info first-lt" style="background:#59982f;">{{$value_t->name}}</span>
                        @endforeach
                      </div>

                  </div>
              </div>
            </div>
            <a href="{{url('/prensadetalle/'.$value->id)}}" class="stretched-link"></a>

          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>
  @endforeach


  @endsection
