@extends('layout.main')
@extends('layout.transparentnavbar')
@section('container')
  <section class="home">
      <img src="img/gedung.png" alt="" id="gedung">
      <h2 id="text" ><span class="text1"> Welcome To My</span><br><span class="text2">BLOG</span> </h2>
      <img src="img/matahari.png" alt="" id="sun">
      <img src="img/pesawat.png" alt="" id="plane">
      <img src="img/saya.png" alt="" id="me">

  </section>
  
  <section class="about section" id="about">
      <div class="sec">
      <h2 class="section-title">About Me</h2>
      <span class="section-subtitle">My Introduce</span>
    </div>
  </section>






  <style>
      .container{
          max-width: 100% !important;
          padding: 0px !important;
      }
      .mt-3{
          margin-top: 0 !important; 
      }
  </style>
  <script>
      let gedung = document.getElementById('gedung');
      let text = document.getElementById('text');
      let sun = document.getElementById('sun');
      let plane = document.getElementById('plane');
      let me = document.getElementById('me');
      window.addEventListener('scroll',function(){
          let value = window.scrollY;
          text.style.top = 10 + value * -0,9 + '%';
          gedung.style.top = value * 0.5 + 'px';
          sun.style.left = value * 0.1 + 'px';
          plane.style.left = value * 0.5 + 'px';
          me.style.left = value * 0.2 + 'px';
      })
  </script>
@endsection