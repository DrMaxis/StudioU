<!--/-/-/-/-/-/-/-/-/
    Begin Head 
-/-/-/-/-/-/-/-/-/-->

<head>
    
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" content="Studio Unwanted Lead Developer Nathan Antwi" />
    <meta name="keywords" content="Web, Development, Nathan, Antwi, Studio, Unwanted"/>
    <link rel="canonical" href="@yield('canonical-url')"/>
  
  
  
  
    <!--/-/-/-/-/-/-/-/-/
  
      START STYLE DEPENDANTS 
      
  -/-/-/-/-/-/-/-/-/-->
  
  
  
    <!--/-/-/-/-/-/-/-/-/ 
      Favicon 
  -/-/-/-/-/-/-/-/-/-->
  
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/imgs/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/imgs/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/imgs/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('pubassets/imgs/favicon/site.webmanifest')}}">
  <link rel="mask-icon" href="{{asset('pubassets/imgs/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  
 <!--/-/-/-/-/-/-/-/-/ 
      SVG
  -/-/-/-/-/-/-/-/-/-->
  
  
    <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink">
      <filter id="glitch">
        <feColorMatrix in="SourceGraphic" type="matrix" values="1   0   0   0   0
                  0   0   0   0   0
                  0   0   0   0   0
                  0   0   0   1   0 " result="red"></feColorMatrix>
        <feColorMatrix in="SourceGraphic" type="matrix" values="0   0   0   0   0
                  0   1   0   0   0
                  0   0   0   0   0
                  0   0   0   1   0 " result="green"></feColorMatrix>
        <feColorMatrix in="SourceGraphic" type="matrix" values="0   0   0   0   0
                  0   0   0   0   0
                  0   0   1   0   0
                  0   0   0   1   0 " result="blue"></feColorMatrix>
        <feOffset in="red" result="red" dx="0.699957">
          <animate attributeName="dx" attributeType="XML" values="0; -3; 1; 0; 2; -1; 0;" dur="2s" repeatCount="indefinite"></animate>
        </feOffset>
        <feOffset in="green" result="green" dx="1.28007">
          <animate attributeName="dx" attributeType="XML" values="0; 2; -1; 1; 0; 1; 0;" dur="2.5s" repeatCount="indefinite"></animate>
        </feOffset>
        <feOffset in="blue" result="blue" dx="0.199742">
          <animate attributeName="dx" attributeType="XML" values="0; 1; 2; -4; 2; 6; 0;" dur="2s" repeatCount="indefinite"></animate>
        </feOffset>
        
        <feBlend in="red" in2="green" mode="screen" result="blend"></feBlend>
        <feBlend in="blend" in2="blue" mode="screen" result="blend"></feBlend>
      <feGaussianBlur in="blend" stdDeviation="1.57331">
        <animate attributeName="stdDeviation" attributeType="XML" values="0; 2; 1; 0.3; 2; 1; 0.5 ;3; 0" dur="5s" repeatCount="indefinite"></animate>
      </feGaussianBlur>
      </filter>
    </svg>

 <!--/-/-/-/-/-/-/-/-/ 
    STYLE SHEETS
  -/-/-/-/-/-/-/-/-/-->

    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
    <!--/-/-/-/-/-/-/-/-/ 
  
      END STYLE DEPENDANTS 
      
  -/-/-/-/-/-/-/-/-/-->
  
  
  
  
  
  
  
  
  
    <title>Nathan Antwi || StudioU</title>
  
  
  
  
  
  
  </head>
  
  <!--/-/-/-/-/-/-/-/-/
  
  
      End Head
  
  
  -/-/-/-/-/-/-/-/-/-/-->