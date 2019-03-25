<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | About Us</title>
    <link rel="favicon" href="{{asset('favicon.png?v2')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    {{--Header--}}
    <header-component></header-component>

    <div id="sector" class="content-wrapper pt-10-md">
       <div id="sector-landing">
           <div class="sector-title-widget drop-shadow   bg-white">
               <h1 class="fg-orange">Tree Crops</h1>
               <p class="text-leader2">We can put some tag line here</p>
           </div>
       </div>

       <div id="sector-content">
           <div class="container pt-10 pb-10">
               <hr class="bg-green ">
               <h2 class="text-center text-bold fg-orange mt-8 mb-8">Tree Crops</h2>

               <p class="text-leader2 text-center ">
                   Tree Crops are blah blah and lorem iposium and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem eaque enim esse explicabo iusto, minus mollitia obcaecati odit omnis pariatur quas saepe sapiente veritatis? Aspernatur iure officia quos! Lorem ipsum dolor sit amet, consectetur adipisicing elit.
               </p>

               <div class="sectors-container mt-8">
                    <div class="sector-item drop-shadow ">
                        <div class="sector-image"></div>
                        <h3 class="fg-green text-center">Cocoa Production</h3>
                        <p class="">
                            Tree Crops are blah blah and lorem iposium and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem eaque enim esse explicabo iusto, minus mollitia obcaecati odit omnis pariatur quas saepe sapiente veritatis? Aspernatur iure officia quos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus animi autem corporis dicta eaque expedita, fugiat in ipsum itaque labore pariatur, perferendis possimus quae quidem quis sapiente tempore veritatis!
                        </p>
                    </div>
                   <div class="sector-item drop-shadow">
                       <div class="sector-image"></div>
                       <h3 class="fg-green text-center">Cocoa Production</h3>
                       <p class="">
                           Tree Crops are blah blah and lorem iposium and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem eaque enim esse explicabo iusto, minus mollitia obcaecati odit omnis pariatur quas saepe sapiente veritatis? Aspernatur iure officia quos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus animi autem corporis dicta eaque expedita, fugiat in ipsum itaque labore pariatur, perferendis possimus quae quidem quis sapiente tempore veritatis!
                       </p>
                   </div>
                   <div class="sector-item drop-shadow ">
                       <div class="sector-image"></div>
                       <h3 class="fg-green text-center">Cocoa Production</h3>
                       <p class="">
                           Tree Crops are blah blah and lorem iposium and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem eaque enim esse explicabo iusto, minus mollitia obcaecati odit omnis pariatur quas saepe sapiente veritatis? Aspernatur iure officia quos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus animi autem corporis dicta eaque expedita, fugiat in ipsum itaque labore pariatur, perferendis possimus quae quidem quis sapiente tempore veritatis!
                       </p>
                   </div>
                   <div class="sector-item drop-shadow">
                       <div class="sector-image"></div>
                       <h3 class="fg-green text-center">Cocoa Production</h3>
                       <p class="">
                           Tree Crops are blah blah and lorem iposium and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem eaque enim esse explicabo iusto, minus mollitia obcaecati odit omnis pariatur quas saepe sapiente veritatis? Aspernatur iure officia quos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus animi autem corporis dicta eaque expedita, fugiat in ipsum itaque labore pariatur, perferendis possimus quae quidem quis sapiente tempore veritatis!
                       </p>
                   </div>
                   <div class="sector-item drop-shadow ">
                       <div class="sector-image"></div>
                       <h3 class="fg-green text-center">Cocoa Production</h3>
                       <p class="">
                           Tree Crops are blah blah and lorem iposium and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem eaque enim esse explicabo iusto, minus mollitia obcaecati odit omnis pariatur quas saepe sapiente veritatis? Aspernatur iure officia quos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus animi autem corporis dicta eaque expedita, fugiat in ipsum itaque labore pariatur, perferendis possimus quae quidem quis sapiente tempore veritatis!
                       </p>
                   </div>
                   <div class="sector-item drop-shadow">
                       <div class="sector-image"></div>
                       <h3 class="fg-green text-center">Cocoa Production</h3>
                       <p class="">
                           Tree Crops are blah blah and lorem iposium and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem eaque enim esse explicabo iusto, minus mollitia obcaecati odit omnis pariatur quas saepe sapiente veritatis? Aspernatur iure officia quos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus animi autem corporis dicta eaque expedita, fugiat in ipsum itaque labore pariatur, perferendis possimus quae quidem quis sapiente tempore veritatis!
                       </p>
                   </div>
               </div>

           </div>
       </div>

   </div>


    {{--Footer--}}
    @include('components.footer')

</div>


</body>

<script src="{{asset('js/app.js')}}"></script>
</html>
