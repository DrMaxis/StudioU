<!--
  @StudioUnwanted 2019
  StudioUnwanted.com
-->

<html class="no-js" lang="{{ app()->getLocale() }}">
    @include('inc.head') @yield('xcss')

<body style="background-image: url({{asset('assets/imgs/overlays/shattered-dark.png')}});">


    <section class="xenx-box">


        <!--/-/-/-/-/-/-/-/-/
    Begin UI-Container  
-/-/-/-/-/-/-/-/-/-->
        {{--
        <div class="wrapper"> --}}
    @include('inc.header')
            <section>
                <section class="xeny-box stretch">

                    <section id="content">
                        <section class="xeny-box stretch">
                            <section>
                                <section class="xenx-box">
                                    <section id="main-sec" class="scrollable padder-lg w-f-md">


                                        <div class="row row-sm">
                                            @yield('content')

                                        </div>


                                        <!--/-/-/-/-/-/-/-/-/
    End UI-Container  
-/-/-/-/-/-/-/-/-/-->














                                        <!--/-/-/-/-/-/-/-/-/
    Begin JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->









                                       


                                        <!--/-/-/-/-/-/-/-/-/
    END JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->


                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>

            <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>

                <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>

 @yield('xjs')




</body>

</html>