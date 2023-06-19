<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Mohcin Bounouara</title>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KCBYVGJBPB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KCBYVGJBPB');
</script>


    </head>
    <body class="bg-white">
        <div class="container mt-5 col-md-8 mx-auto">
    @include('layouts.header')
    <div class="row">
        @include('layouts.nav')
        {{-- articles --}}
        <div class="col-md-9 mt-4">
               <h1>About me</h1>
               <p>
                Muslim, software developer, striving for daily self-improvement in the field of software engineering. <br><br>

                I have had the opportunity to work in various teams, and I hold great respect for them. During my search for a team that values mutual respect and treats individuals as human beings rather than mere production machines, also push you to discover new things in your career, I found the amazing <a href="https://contentcoffee.com/">Content & Coffee</a> company.  <br><br>
                
                I truly feel like a part of their family, and I strive to contribute my best to the team.  <br><br>

                Apart from my professional pursuits, I am constantly working on personal growth, cultivating good habits, and eliminating bad ones. I aim to be a valuable asset to my family, offering assistance whenever possible situations.  <br><br>

                In addition to software development, I have a keen interest in sharing knowledge and thoughts on various aspects of life. Therefore, I intend to use this blog as a platform to discuss a wide range of topics the main of them is software engineering ones.  <br><br> 

                Technologies and tools I work with:   </p>

                <p>
                    <ul>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>JavaScript</li>
                    <li>Linux</li>
                    <li>CSS</li>
                    <li>HTML</li>
                    <li>SCSS</li>
                    <li>Vue.js</li>
                    <li>Testing tools and frameworks</li>
                </ul>
                </p>

                
                <p> I firmly believe in taking small and continuous steps in my life's journey..  <br><br>

                ‘A’isha reported God’s Messenger as saying, “The acts most pleasing to God are those which are done most continuously, even if they amount to little.” (Bukhari and Muslim.)  <br><br>
               </p>
        </div>
    </div>
</div>
</div>