@extends('layout.main')
@extends('layout.transparentnavbar')
@section('container')
  <section>
      <h2 id="text" ><span class="text1"> Welcome To My</span><br><span class="text2">BLOG</span> </h2>
      <img src="img/gedung.png" alt="" id="gedung">
      <img src="img/matahari.png" alt="" id="sun">
      <img src="img/pesawat.png" alt="" id="plane">
      <img src="img/saya.png" alt="" id="me">

  </section>
  <div class="sec">
      <h2>About Me</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde a aperiam, corporis deleniti veniam adipisci eos illo cupiditate est? Culpa et aut quas, esse voluptatibus molestiae. Exercitationem accusamus provident ad quasi ipsa nesciunt placeat a quo neque maiores culpa cum dolor quidem ratione iusto, at, dolorem quae. Quasi voluptate dolorem eligendi cumque porro, enim culpa ullam corrupti amet quidem, quos voluptatum, vitae quae doloremque. Sint voluptatum ipsum vero deleniti eos minus ducimus doloremque quam error labore eius accusamus aliquam, assumenda quibusdam similique laborum magnam quae impedit, harum a aut ipsa consequuntur? Ab earum numquam porro voluptate placeat laborum, vero quasi, laudantium voluptatem eligendi soluta possimus enim architecto odit quibusdam ullam et cum labore excepturi reiciendis reprehenderit assumenda distinctio ipsam? Nemo, et repellendus quae ut dolor quaerat omnis optio ipsum. Minus at quaerat repellendus. Animi doloribus recusandae, consequatur delectus earum perferendis obcaecati. Dolore, magni iste. Quaerat eum placeat, soluta perspiciatis eius reiciendis repellat, distinctio iure temporibus officiis debitis maiores ad maxime quia voluptatibus dolores eligendi harum possimus nemo quod laudantium? Earum veniam modi atque, possimus pariatur aperiam distinctio? Ipsa omnis provident eligendi dicta totam nulla exercitationem labore atque accusantium voluptatum porro corrupti non, voluptatem magni perferendis id ipsum blanditiis, beatae soluta!</p>
  </div>
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