@extends('layout.main')
@extends('layout.transparentnavbar')
@section('container')
{{-- home --}}
  <section class="home">
      <img src="img/matahari.png" alt="" id="sun">
      <img src="img/tengahkiri.png" alt="" id="cl">
      <img src="img/tengahkanan.png" alt="" id="cr">
      <img src="img/awankiri.png" alt="" id="lc">
      <img src="img/awankanan.png" alt="" id="rc">
      <img src="img/pegunungan.png" alt="" id="pegunungan">
      <img src="img/gedung.png" alt="" id="gedung">
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
              <h3 class="about-subtitle">Web Developer</h3>
                <p class="about-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis reiciendis labore nam voluptatem, velit quidem fugiat tempora aperiam, distinctio beatae debitis.</p>
                <div class="about-info">
                    <div class="icon">
                        <a href="https://www.linkedin.com/in/pradipta-wistika-7b5b831b4/" target="_blank" class="logos"><i class="uil uil-linkedin"></i></a>
                        <span class="icon-text">Linkedin</span>
                    </div>
                    <div class="icon">
                        <a href="https://github.com/pradipta610" target="_blank" class="logos"><i class="uil uil-github"></i></a>
                        <span class="icon-text">Github</span>
                    </div>
                    <div class="icon">
                        <a href="https://www.instagram.com/pradipta610/" target="_blank" class="logos"><i class="uil uil-instagram"></i></a>
                        <span class="icon-text">Instagram</span>
                    </div>
                </div>
                <div class="about-info">
                    <a href="/img/CV.png" class="button" download>
                        Download Cv <i class="uil uil-message button__icon"></i>
                    </a>
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
  </section>


  {{-- pendidikan --}}
  <section class="qualification section" id="education">

    <div class="sec">
      <h2 class="section-title">Pendidikan</h2>
      <span class="section-subtitle">Pendidikan Yang Saya Tempuh</span>
      <div class="qualification-container container">
          <div class="qualification-section">
              {{-- qualification content --}}
              <div class="qualification-content">
                  {{-- qualification 1 --}}
                  <div class="qualification-data">
                      <div>
                      <div class="margin-data">
                        <h3 class="qualification-title">Sekolah Dasar</h3>
                        <span class="qualification-subtitle">SDN 4 BALER BALE AGUNG</span>
                        <div class="qualification-calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2007-2013
                        </div>
                      </div>
                    </div>
                      <div>
                          <span class="qualification-rounder"></span>
                          <span class="qualification-line"></span>
                      </div>
                  </div>

                  {{-- qualification 2 --}}
                  <div class="qualification-data">
                      <div></div>
                      <div>
                        <span class="qualification-rounder"></span>
                        <span class="qualification-line"></span>
                    </div>
                    <div>
                      <div class="margin-data">
                        <h3 class="qualification-title">Sekolah Menengah Pertama</h3>
                        <span class="qualification-subtitle">SMPN 1 NEGARA</span>
                        <div class="qualification-calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2013-2016
                        </div>
                      </div>
                    </div>
                  </div>


                  {{-- qualification 3 --}}
                  <div class="qualification-data">
                    <div>
                      <div class="margin-data" >
                        <h3 class="qualification-title">Sekolah Menengah Atas</h3>
                        <span class="qualification-subtitle">SMAN 1 NEGARA</span>
                        <div class="qualification-calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2016-2019
                        </div>
                      </div>
                    </div>

                      <div>
                          <span class="qualification-rounder"></span>
                          <span class="qualification-line"></span>
                      </div>
                  </div>

                  {{-- qualification 4 --}}
                  <div class="qualification-data">
                    <div></div>
                    <div>
                        <span class="qualification-rounder"></span>
                    </div>
                    <div>
                      <div class="margin-data">  
                        <h3 class="qualification-title">Perguruan Tinggi</h3>
                        <span class="qualification-subtitle">ITB STIKOM BALI</span>
                        <div class="qualification-calendar">
                            <i class="uil uil-calendar-alt"></i>
                            2019-2022
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>




  {{-- contact-me --}}
  <section class="contact-me section" id="contact-me">
    <div class="sec">
      <h2 class="section-title">Contact Me</h2>
      <span class="section-subtitle">Get in touch!</span>
        <div class="contact-container container grid">
            <form action="" class="contact-form grid">
                <div class="contact-inputs grid">
                    <div class="contact-content">
                        <label for="" class="contact-label">Name</label>
                        <input type="text" class="contact-input">
                    </div>
                    <div class="contact-content">
                        <label for="" class="contact-label">Email</label>
                        <input type="email" class="contact-input">
                    </div>
                    <div class="contact-content">
                        <label for="" class="contact-label">Project</label>
                        <input type="text" class="contact-input">
                    </div>
                    <div class="contact-content">
                        <label for="" class="contact-label">Message</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact-input"></textarea>
                    </div>
                    <div class="about-info">
                        <a href="#" class="button button-flex">
                            Send Message
                            <i class="uil uil-message"></i>
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
  </section>



  {{-- footer --}}
  <footer class="footer">
      <div class="footer-bg">
          <div class="footer-container container grid">
              <div class="padding-left">
                  <h1 class="footer-title">Pradipta</h1>
                  <span class="footer-subtitle">
                      Web Developer
                  </span>
              </div>

              <ul class="footer-links">
                  <li>
                      <a href="#about" class="footer-link">Tentang Saya</a>
                  </li>
                  <li>
                      <a href="#skills" class="footer-link">Skill</a>
                  </li>
                  <li>
                      <a href="#education" class="footer-link">Pendidikan</a>
                  </li>
                  <li>
                      <a href="#contact-me" class="footer-link">Hubungi Saya</a>
                  </li>
              </ul>

              <div class="footer-socials">
                  <a href="https://www.facebook.com/ketut.pradipta" target="_blank" class="footer-social">
                    <i class="uil uil-facebook-f"></i>
                  </a>
                  <a href="https://www.instagram.com/pradipta610/" target="_blank" class="footer-social">
                    <i class="uil uil-instagram"></i>
                  </a>
              </div>
          </div>
          <p class="footer-copy">Made with &#10084; By Pradipta Wistika</p>
      </div>
  </footer>


  {{-- scroll up --}}
  <a href="#" class="scrollup" id="scrollup">
    <i class="uil uil-arrow-up scrollup-icon"></i>
  </a>
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
      let crcloud = document.getElementById('cr');
      let clcloud = document.getElementById('cl');
      let leftcloud = document.getElementById('lc');
      let righttcloud = document.getElementById('rc');
      let me = document.getElementById('me');
      window.addEventListener('scroll',function(){
          let value = window.scrollY;
         
          gedung.style.top = value * 0.5 + 'px';
          sun.style.top = -55 -value * -0.9 + 'px';
          crcloud.style.left = 30 -value * 0.5 + 'px';
          crcloud.style.top = -99 -value * -0.9 + 'px';
          clcloud.style.left = -35 -value * -0.5 + 'px';
          clcloud.style.top = -99 -value * -0.9 + 'px';
          leftcloud.style.top = -10 - value * -0.1 + '%';
          righttcloud.style.top = -10 - value * -0.1 + '%';
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


    //   scroll to top
    function scrollTop(){
    const scrollTop = document.getElementById('scrollup');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)





/*==================== DARK LIGHT THEME ====================*/ 
let themeButton = document.getElementById('theme-button')
let darkTheme = 'dark-theme'
let iconTheme = 'uil-sun'
let textTheme = themeButton.innerHTML="Light&nbsp;Theme"
let navbar = document.getElementById('navbar');
let bgNav = 'light';


// Previously selected topic (if user selected)
let selectedTheme = localStorage.getItem('selected-theme')
let selectedIcon = localStorage.getItem('selected-icon')
let selectedText = localStorage.getItem('selected-text')
let selectedNav = localStorage.getItem('selected-navbar')
let selectedImg = localStorage.getItem('selected-image')

// We obtain the current theme that the interface has by validating the dark-theme class
let getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
let getCurrentNavbar = () => document.body.classList.contains(darkTheme) ? 'bg-dark' : 'bg-light'
let getCurrentImage = () => document.body.classList.contains(darkTheme) ? 'img/bulan.png' : 'img/matahari.png'
let getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'uil-sun' : 'uil-moon'
let getCurrentText = () => themeButton.classList.contains(iconTheme) ? themeButton.innerHTML="Light&nbsp;Theme" : themeButton.innerHTML="Dark&nbsp;Theme"


// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeButton.classList[selectedIcon === 'uil-sun' ? 'add' : 'remove'](iconTheme)
    selectedText != textTheme ? themeButton.innerHTML="Dark&nbsp;Theme" : themeButton.innerHTML="Light&nbsp;Theme"
    selectedTheme != bgNav ? navbar.classList.add('bg-dark','navbar-dark') : navbar.classList.add('bg-light','navbar-light')
    selectedTheme != bgNav ?  sun.src='img/bulan.png' : sun.src='img/matahari.png'
    
      
    
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)

    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
    localStorage.setItem('selected-text', getCurrentText())
    localStorage.setItem('selected-navbar', getCurrentNavbar())
    localStorage.setItem('selected-iamge', getCurrentImage())

    //navbar
    if(getCurrentTheme() === "dark"){
        navbar.classList.add('bg-dark','navbar-dark');
        navbar.classList.remove('bg-light','navbar-light');
    }else{
        navbar.classList.add('bg-light','navbar-light');
        navbar.classList.remove('bg-dark','navbar-dark');
    }

    //image
    getCurrentTheme()==="dark"? sun.src="img/bulan.png" : sun.src="img/matahari.png"
   
})

  </script>
@endsection