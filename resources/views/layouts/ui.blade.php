<!--
  @StudioUnwanted 2019
  StudioUnwanted.com
-->

<html class="no-js" lang="{{ app()->getLocale() }}">

    @include('inc.head') 
    
    @yield('xcss')

<body>


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
                                    <section id="main-sec" style="margin-top:25px;" class="scrollable padder-lg w-f-md">


                                        <div class="row row-sm">
                                            @yield('content')

                                        </div>


<!--/-/-/-/-/-/-/-/-/
    End UI-Container  
-/-/-/-/-/-/-/-/-/-->














                                        <!--/-/-/-/-/-/-/-/-/
    Begin JAVASCRIPT  
-/-/-/-/-/-/-/-/-/-->



    
                                         




                                        @yield('xjs')


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




              
  <script src="{{asset('js/starwave.js')}}"></script>

  
</body>

</html>