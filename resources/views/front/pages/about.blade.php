@extends('front.app')
@section('content')
@include('front.partials.header')
<main class="aboutContent">
    <section>
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h3>{{ trans('vars.About.title') }}</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="cont">
                <div class="tranText">
                    <span>{{ trans('vars.About.row1-1') }}</span> <br />
                    <span>{{ trans('vars.About.row1-2') }}</span>
                </div>
                <div class="scaleIn">
                  <img id="scaleIn" class="img1" src="{{ Banner('Banner_About_Section_1_left', 'desktop') }}" alt="aboout" />
                </div>
                <div class="scaleOut">
                  <img id="scaleOut" class="img2" src="{{ Banner('Banner_About_Section_1_right', 'desktop') }}" alt="about" />
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="colorRed">{{ trans('vars.About.section1Title') }}</div>
                    <p>
                        {{ trans('vars.About.section1Body') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 block1">
                    <img class="top" id="top" src="{{ Banner('Banner_About_Section_2_right', 'desktop') }}" alt="anout" />
                    <p>
                        {{ trans('vars.About.section2-1') }}
                    </p>
                </div>
                <div class="col-12 block2">
                    <div class="imgContainer">
                        <img id="scaleOut2" src="{{ Banner('Banner_About_Section_2_left', 'desktop') }}" alt="about" />
                        <div class="tranText">
                            {{ trans('vars.About.section2-2') }}
                        </div>
                    </div>
                    <p>
                        {{ trans('vars.About.section2-3') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="imageContainer">
          <img src="{{ Banner('Banner_About_Section_3_fulwidth', 'desktop') }}" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="dens">{{ trans('vars.About.section3Title') }}</p>
                    <p>
                        {{ trans('vars.About.section3Body') }}
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <h4>{{ trans('vars.About.ourBrands') }}
                </h4>
              </div>
                <div class="col-12">
                    <h4>{{ trans('vars.About.outBijouxTitle') }}</h4>
                </div>
                <div class="col-12">
                    <div class="imgContainer">
                        <img id="top2" src="{{ Banner('Banner_About_Section_4_bijoux_1', 'desktop') }}" alt="about" />
                        <div class="scaleOut">
                            <img src="{{ Banner('Banner_About_Section_4_bijoux_2', 'desktop') }}" alt="about" />
                        </div>
                        <img id="bottom" src="{{ Banner('Banner_About_Section_4_bijoux_3', 'desktop') }}" alt="about" />
                    </div>
                </div>
                <div class="col-12">
                    <p>
                        {{ trans('vars.About.outBijouxBody') }}
                    </p>
                </div>

                <div class="col-12 newText">
                    {{ trans('vars.About.welcomeToBijoux') }}
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <h4>{{ trans('vars.About.ourBrands') }}
                </h4>
              </div>
                <div class="col-12">
                    <h4>{{ trans('vars.About.ourHomewareTitle') }}</h4>
                </div>
                <div class="col-12">
                    <div class="imgContainer">
                        <img id="top3" src="{{ Banner('Banner_About_Section_5_homewear_1', 'desktop') }}" alt="about" />
                        <div class="scaleOut">
                            <img id="scaleOut4" src="{{ Banner('Banner_About_Section_5_homewear_2', 'desktop') }}" alt="about" />
                        </div>
                        <img id="bottom2" src="{{ Banner('Banner_About_Section_5_homewear_3', 'desktop') }}" alt="about" />
                    </div>
                </div>
                <div class="col-12">
                    <p>
                        {{ trans('vars.About.ourHomewareBody') }}
                    </p>
                </div>
                <div class="col-md-8 newText newTextHomeweare">
                    {{ trans('vars.About.welcomeToHomewear') }}
                </div>
            </div>
        </div>
    </section>
</main>
@include('front.partials.footer')
@stop
