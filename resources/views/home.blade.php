@extends('layout.main')
@extends('layout.transparentnavbar')
@section('container')
{{-- home --}}
  <section class="home">
      <img src="img/gedung.png" alt="" id="gedung">
      <h2 id="text" ><span class="text1"> Welcome To My</span><br><span class="text2">BLOG</span> </h2>
      <img src="img/matahari.png" alt="" id="sun">
      <img src="img/pesawat.png" alt="" id="plane">
      <img src="img/saya.png" alt="" id="me">

  </section>
  

  <main class="main">
      {{-- about --}}
  <section class="about section" id="about">
      <div class="sec">
      <h2 class="section-title">About Me</h2>
      <span class="section-subtitle">My Introduce</span>
      <div class="about-container container grid">
          <img src="img/saya-2.jpg" alt="" class="about-img">
          <div class="about-data">
              <h1 class="about-title">Hi, Im Pradipta Wistika</h1>
              <h3 class="about-subtitle">Full Stack Developer</h3>
                <p class="about-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis reiciendis labore nam voluptatem, velit quidem fugiat tempora aperiam, distinctio beatae debitis.</p>
                <div class="about-info">
                    <div class="icon">
                        <a href="" target="_blank" class="logos"><i class="uil uil-linkedin"></i></a>
                        <span class="icon-text">Linkedin</span>
                    </div>
                    <div class="icon">
                        <a href="" target="_blank" class="logos"><i class="uil uil-github"></i></a>
                        <span class="icon-text">Github</span>
                    </div>
                    <div class="icon">
                        <a href="" target="_blank" class="logos"><i class="uil uil-instagram"></i></a>
                        <span class="icon-text">Instagram</span>
                    </div>
                </div>
          </div>
      </div>
    </div>
  </section>


  {{-- skills --}}
  <section class="skills section" id="skills">
    <div class="sec">
      <h2 class="section-title">My Skills</h2>
      <span class="section-subtitle">My Technical Level</span>

        <div class="skill-container container grid">
            <div>
            {{-- skills1 --}}
                <div class="skills-content skills-open">
                    <div class="skill-header">
                        <i class="uil uil-brackets-curly skills-icon"></i>
                        <div>
                            <h1 class="skills-title">Frontend Developer</h1>
                            <span class="skills-subtitle">More Than 1 Years</span>
                        </div>
                        <i class="uil uil-angle-double-down skills-arrow"></i>
                    </div>

                    <div class="skills-list grid">
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">HTML</h3>
                                <span class="skills-number">90%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skill-percentage skill-html"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">CSS</h3>
                                <span class="skills-number">80%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skill-percentage skill-css"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">JavaScript</h3>
                                <span class="skills-number">70%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skill-percentage skill-js"></span>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- skills2 --}}
                <div class="skills-content skills-close">
                    <div class="skill-header">
                        <i class="uil uil-database skills-icon"></i>
                        <div>
                            <h1 class="skills-title">Backend Developer</h1>
                            <span class="skills-subtitle">6 month</span>
                        </div>
                        <i class="uil uil-angle-double-down skills-arrow"></i>
                    </div>

                    <div class="skills-list grid">
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">PHP</h3>
                                <span class="skills-number">80%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skill-percentage skill-php"></span>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- skills3 --}}
                <div class="skills-content skills-close">
                    <div class="skill-header">
                        <i class="uil uil-code-branch skills-icon"></i>
                        <div>
                            <h1 class="skills-title">Framework</h1>
                            <span class="skills-subtitle">6 month</span>
                        </div>
                        <i class="uil uil-angle-double-down skills-arrow"></i>
                    </div>

                    <div class="skills-list grid">
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Laravel</h3>
                                <span class="skills-number">70%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skill-percentage skill-laravel"></span>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- skills4--}}
                <div class="skills-content skills-close">
                    <div class="skill-header">
                        <i class="uil uil-illustration skills-icon"></i>
                        <div>
                            <h1 class="skills-title">Design</h1>
                            <span class="skills-subtitle">More Than 2 Years</span>
                        </div>
                        <i class="uil uil-angle-double-down skills-arrow"></i>
                    </div>

                    <div class="skills-list grid">
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Photoshop</h3>
                                <span class="skills-number">60%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skill-percentage skill-photoshop"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Lightroom</h3>
                                <span class="skills-number">60%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skill-percentage skill-lightroom"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Premiere</h3>
                                <span class="skills-number">70%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skill-percentage skill-premiere"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</main>





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
    //   script untuk parallax
      let gedung = document.getElementById('gedung');
      let text = document.getElementById('text');
      let sun = document.getElementById('sun');
      let plane = document.getElementById('plane');
      let me = document.getElementById('me');
      window.addEventListener('scroll',function(){
          let value = window.scrollY;
          text.style.top = 10 + value * -0,9 + '%';
          gedung.style.top = value * 0.5 + 'px';
          sun.style.top = value * 0.1 + 'px';
          plane.style.top = -value * 0.2 + 'px';
          me.style.top = value * 0.2 + 'px';
      })


      //script untuk skills
      const skillsContent = document.getElementsByClassName('skills-content'),
      skillsHeader = document.querySelectorAll('.skill-header');

      function togleSkills(){
          let itemClass = this.parentNode.className;
          for(i=0;i<skillsContent.length;i++){
              skillsContent[i].className = 'skills-content skills-close';
          }
          if(itemClass === 'skills-content skills-close'){
              this.parentNode.className = 'skills-content skills-open';
          }
      }


      skillsHeader.forEach((el) => {
          el.addEventListener('click',togleSkills)
      });
  </script>
@endsection