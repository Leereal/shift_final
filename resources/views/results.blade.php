<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MBTI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
    <div class="container border border-gray-300 rounded m-10 grid grid-cols-2 items-center">
        <div class="left-side pl-20">
            <h3 class="text-blue-700">Your Perspective</h3>
            <p class="font-medium">Your perspective type is {{$mbti}}</p>
        </div>
        <div class="right-side py-20">
           <div class="grid grid-cols-3 items-center ">
               <div><p>Introversion(I)</p></div>
               @if($ei_resonance == 'I')
               <div class="bar px-5 flex justify-center">
                <div class="bg-fuchsia h-4 w-20"></div>
                <div class="bg-gray-300 h-4 w-20"></div>
               </div>
               @else               
               <div class="bar mx-5 flex justify-center">
                <div class="bg-gray-300 h-4 w-20"></div>
                <div class="bg-fuchsia h-4 w-20"></div>
               </div>
               @endif
               <div><p>Extraversion(E)</p></div>
            </div> 
            <div class="grid grid-cols-3 items-center ">
                <div><p>Sensing(S)</p></div>
                @if($sn_resonance == 'S')
                <div class="bar mx-5 flex justify-center">
                    <div class="bg-fuchsia h-4 w-20"></div>
                    <div class="bg-gray-300 h-4 w-20"></div>
                   </div>
                   @else               
                   <div class="bar mx-5 flex justify-center">
                    <div class="bg-gray-300 h-4 w-20"></div>
                    <div class="bg-fuchsia h-4 w-20"></div>
                   </div>
               @endif
                <div><p>Intuition(N)</p></div>
             </div> 
             <div class="grid grid-cols-3 items-center ">
                <div><p>Thinking(T)</p></div>
                @if($tf_resonance == 'T')
                <div class="bar mx-5 flex justify-center">
                    <div class="bg-fuchsia h-4 w-20"></div>
                    <div class="bg-gray-300 h-4 w-20"></div>
                   </div>
                   @else               
                   <div class="bar mx-5 flex justify-center">
                    <div class="bg-gray-300 h-4 w-20"></div>
                    <div class="bg-fuchsia h-4 w-20"></div>
                   </div>
               @endif
                <div><p>Feeling(F)</p></div>
             </div> 
             <div class="grid grid-cols-3 items-center ">
                <div><p>Judging(J)</p></div>
                @if($jp_resonance == 'J')
                <div class="bar mx-5 flex justify-center">
                    <div class="bg-fuchsia h-4 w-20"></div>
                    <div class="bg-gray-300 h-4 w-20"></div>
                   </div>
                   @else               
                   <div class="bar mx-5 flex justify-center">
                    <div class="bg-gray-300 h-4 w-20"></div>
                    <div class="bg-fuchsia h-4 w-20"></div>
                   </div>
               @endif
                <div><p>Perceiving(P)</p></div>
             </div> 
        </div>
    </div> 
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
