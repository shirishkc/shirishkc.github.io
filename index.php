<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Portfolio</title>
    </head>
    <body>
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"><img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExNjVoZTh6Zzl1dzAwMjBqaTZtaGdxaTR6YnYyN2lnMzJ1MWVpNmV5diZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Ac0fCix8D3oN7DwCEB/giphy.webp" width="60" height="100" style="border-radius: 50%"></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">PORTFOLIO</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        <a href="https://bento.me/shirishkc" style="margin-left:200px;">🗳️Bento-Profile </a>
                    </ul>
          
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hello,<br>I'am <span class="home__title-color">Shirish</span><br>A SOFTWARE ENGINEERING STUDENT CURRENTLY STUDYING IN GCES.</h1>

                    <a href="https://wa.me/+9779846386011" class="button">Contact me on whatsapp</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/shirish-kc-033ab0211/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.instagram.com/kc_shirish/" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://github.com/shirishpasa" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                    <a href="https://www.facebook.com/seerish.kaysee/"  class="home__social-icon"><i class="bx bxl-facebook"></i></a>
                    <a href="https://twitter.com/dji_shirishkc" class="home__social-icon"><i class="bx bxl-twitter"></i></a>

                </div>


                <div class="home__img">    
                  <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExdnNyYjNueHk0NHJqejdiNWVnYTBxb3dnYThsYmd6MHVyNHNpOTl0ZCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/VTtANKl0beDFQRLDTh/giphy.webp" alt="" style="border-radius: 20%; opacity: 100;">
                </div>
            </section>

            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExb3lhZmd6ZW02djlsMXg1MHFuYm44a2gzaGF4NGU0Z2ZjcGEzbXlqZCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/u1WhXLjwgcXpHJBMRM/giphy.webp" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I am a Software Engineer student , Technician,Drone Pilot and A Trader</h2>
                        <p class="about__text">Being a drone pilot, I have done many aerial photophore around the Pokhara valley.In my leisure time,I support my family business. Apart from this,I love to do different adventerous activites like hiking&travelling.</p>           
                    </div>                                    
                </div>
            </section>

            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">Some of the top skill.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">10%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bx-laptop skills__icon'></i>
                                <span class="skills__name">HARDWARE</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-camera-movie skills__icon'></i>
                                <span class="skills__name">content-creator</span>
                            </div>
                            <div class="skills__bar skills__gf">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">55%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExYTdrdGZrMzNpcnBoZ3V1MTA1MDRxOXI3N3lvZTN1Mjh5MW10aTBneCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/bGgsc5mWoryfgKBx1u/giphy.webp" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <section class="work section" id="work">
                <h2 class="section-title">PORTFOLIO</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="1.JPG" alt="">
                    </div>
                    <div class="work__img">
                        <img src="scene.JPG" alt="">
                    </div>
                    <div class="work__img">
                        <img src="3.JPG" alt="">
                    </div>
                    <div class="work__img">
                        <img src="5.JPG" alt="">
                    </div>
                    <div class="work__img">
                  <iframe width="300" height="420" src="video.mp4" allowfullscreen></iframe>                
                 </div>
                    <div class="work__img">
                        <img src="6.JPG" alt="">
                    </div>
                </div>
            </section>

            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
                    <div class="contact__container bd-grid">
                    <form action="contactform.php" class="contact__form" method="post">
                        <input type="text" placeholder="Name" class="contact__input" name="name">
                        <input type="mail" placeholder="Email" class="contact__input" name="email">
                        <textarea name="message" id="" cols="0" rows="10" class="contact__input"  placeholder="Query"></textarea>
                        <div class="btn">
                        <input type="submit" name="login" class="btn">
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <footer class="footer">
            <p class="footer__title">Support me:</p>
            <div class="footer__social">
             <a href="https://buymeacoffee.com/shirishkc04">
             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="currentColor" d="m20.216 6.415l-.132-.666c-.119-.598-.388-1.163-1.001-1.379c-.197-.069-.42-.098-.57-.241c-.152-.143-.196-.366-.231-.572c-.065-.378-.125-.756-.192-1.133c-.057-.325-.102-.69-.25-.987c-.195-.4-.597-.634-.996-.788a6 6 0 0 0-.626-.194c-1-.263-2.05-.36-3.077-.416a26 26 0 0 0-3.7.062c-.915.083-1.88.184-2.75.5c-.318.116-.646.256-.888.501c-.297.302-.393.77-.177 1.146c.154.267.415.456.692.58c.36.162.737.284 1.123.366c1.075.238 2.189.331 3.287.37q1.829.074 3.65-.118q.449-.05.896-.119c.352-.054.578-.513.474-.834c-.124-.383-.457-.531-.834-.473c-.466.074-.96.108-1.382.146q-1.767.12-3.536.006a22 22 0 0 1-1.157-.107c-.086-.01-.18-.025-.258-.036q-.364-.055-.724-.13c-.111-.027-.111-.185 0-.212h.005q.416-.09.838-.147h.002c.131-.009.263-.032.394-.048a25 25 0 0 1 3.426-.12q1.011.029 2.017.144l.228.031q.4.06.798.145c.392.085.895.113 1.07.542c.055.137.08.288.111.431l.319 1.484a.237.237 0 0 1-.199.284h-.003l-.112.015a37 37 0 0 1-4.743.295a37 37 0 0 1-4.699-.304c-.14-.017-.293-.042-.417-.06c-.326-.048-.649-.108-.973-.161c-.393-.065-.768-.032-1.123.161c-.29.16-.527.404-.675.701c-.154.316-.199.66-.267 1c-.069.34-.176.707-.135 1.056c.087.753.613 1.365 1.37 1.502a39.7 39.7 0 0 0 11.343.376a.483.483 0 0 1 .535.53l-.071.697l-1.018 9.907c-.041.41-.047.832-.125 1.237c-.122.637-.553 1.028-1.182 1.171q-.868.197-1.756.205c-.656.004-1.31-.025-1.966-.022c-.699.004-1.556-.06-2.095-.58c-.475-.458-.54-1.174-.605-1.793l-.731-7.013l-.322-3.094c-.037-.351-.286-.695-.678-.678c-.336.015-.718.3-.678.679l.228 2.185l.949 9.112c.147 1.344 1.174 2.068 2.446 2.272c.742.12 1.503.144 2.257.156c.966.016 1.942.053 2.892-.122c1.408-.258 2.465-1.198 2.616-2.657l1.024-9.995l.215-2.087a.48.48 0 0 1 .39-.426c.402-.078.787-.212 1.074-.518c.455-.488.546-1.124.385-1.766zm-1.478.772c-.145.137-.363.201-.578.233c-2.416.359-4.866.54-7.308.46c-1.748-.06-3.477-.254-5.207-.498c-.17-.024-.353-.055-.47-.18c-.22-.236-.111-.71-.054-.995c.052-.26.152-.609.463-.646c.484-.057 1.046.148 1.526.22q.865.132 1.737.212c2.48.226 5.002.19 7.472-.14q.675-.09 1.345-.21c.399-.072.84-.206 1.08.206c.166.281.188.657.162.974a.54.54 0 0 1-.169.364zm-6.159 3.9c-.862.37-1.84.788-3.109.788a6 6 0 0 1-1.569-.217l.877 9.004c.065.78.717 1.38 1.5 1.38c0 0 1.243.065 1.658.065c.447 0 1.786-.065 1.786-.065c.783 0 1.434-.6 1.499-1.38l.94-9.95a4 4 0 0 0-1.322-.238c-.826 0-1.491.284-2.26.613"/>       </svg></a>
                <a href="https://cr8.rs/@KC_SHIRISH">                            
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M24.87 7.45h15.42a1.57 1.57 0 0 1 1.56 1.74l-2.35 22a2.1 2.1 0 0 1-1 1.58l-12.28 7.4a2.6 2.6 0 0 1-2.69 0l-12.29-7.36a2.1 2.1 0 0 1-1-1.58l-2.35-22a1.58 1.58 0 0 1 1.57-1.78z"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m8.29 12.88l-5.43.58l1.12 10.45l5.42-.58m10.39-11.17v18.92m10.17 0l-7.79-9.46l7.79-9.4m-7.79 9.4h-2.38"/></svg>                </svg>
                </a>
            </div>
            <p>Nepal,Pokhara</p>
            <p> shirish 2024 © copyright all right reserved</p>
        </footer>
      <script src="https://unpkg.com/scrollreveal"></script> 
        <script src="index.js"></script>
    </body>
</html>