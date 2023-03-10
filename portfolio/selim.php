<?php require_once"header.php";?>
<section class="home section" id="home">
            <div class="home__container containers grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://github.com/selimaydinn" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                        <a href="https://www.instagram.com/selimaydinresmi/" target="_blank" class="home__social-icon">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/selimaydinn/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="mailto:selimaydinresmi@gmail.com" target="_blank" class="home__social-icon">
                            <i class="uil uil-envelope-alt"></i>
                        </a>
                    </div>
                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home__blob-img" x='12' y='18' xlink:href="../images/team/selim_aydin.png" />
                            </g>
                        </svg>
                    </div>
                    <div class="home__data">
                        <h1 class="home__title"><?php echo $lang['h_selim'] ?></h1>
                        <h3 class="home__subtitle"><?php echo $lang['selim'] ?></h3>
                        <p class="home__description"><?php echo $lang['abouts'] ?></p>
                        <a href="mailto:selimaydinresmi@gmail.com" class="button button--flex">
                        <?php echo $lang['cm'] ?> <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name"><?php echo $lang['sd'] ?></span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>
         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
            <h2 class="section__title"><?php echo $lang['aboutme'] ?></h2>
            <span class="section__subtitle"></span>

            <div class="about__container containers grid">
                <img src="../images/selim2.jpg" alt="" class="about__img">
                <div class="about__data">

                    <p class="about__description"></p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">05+</span>
                            <span class="about__info-name"><?php echo $lang['experience'] ?></span>
                        </div>

                        <div>
                            <span class="about__info-title">40+</span>
                            <span class="about__info-name"><?php echo $lang['projects'] ?></span>
                        </div>

                        <div>
                            <span class="about__info-title">05</span>
                            <span class="about__info-name"><?php echo $lang['worked'] ?></span>
                        </div>
                    </div>
                    <div class="about__buttons">
                        <a  href="cv_selimaydin.pdf" class="button button--flex">
                        <?php echo $lang['cv'] ?><i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                  
                </div>
            </div>
        </section>
         <!--==================== SKILLS ====================-->
         <section class="skills section" id="skills">
            <h2 class="section__title"><?php echo $lang['skills'] ?></h2>
            <span class="section__subtitle"><?php echo $lang['technical'] ?></span>

            <div class="skills__container containers grid">
                <div>
                    <!--==================== SKILLS 1====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Frontend <?php echo $lang['developer'] ?></h1>
                                <span class="skills__subtitle"><?php echo $lang['bbd'] ?></span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">95%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Css</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__secss"></span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== SKILLS 2====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Backend <?php echo $lang['developer'] ?></h1>
                                <span class="skills__subtitle"><?php echo $lang['bbd'] ?></span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">MySql</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                   
                                        <div class="skills__bar">
                                            <span class="skills__percentage skills__mysql"></span>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Python</h3>
                                                <span class="skills__number">40%</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage skills__sepython"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--==================== SKILLS 3====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>

                            <div>
                                <h1 class="skills__title"><?php echo $lang['design'] ?></h1>
                                <span class="skills__subtitle"><?php echo $lang['sdd'] ?></span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Illustrator</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                   
                                        <div class="skills__bar">
                                            <span class="skills__percentage skills__secss"></span>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Premier Pro</h3>
                                                <span class="skills__number">60%</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage skills__secss"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== SKILLS 4====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-robot skills__icon"></i>

                            <div>
                                <h1 class="skills__title"><?php echo $lang['robotichs'] ?></h1>
                                <span class="skills__subtitle"><?php echo $lang['bbd'] ?></span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Arduino</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__secss"></span>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <section class="qualification section">
            <h2 class="section__title"><?php echo $lang['personalj']?></h2>
           
            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        <?php echo $lang['personal']?>
                    </div>

                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-users-alt qualification__icon"></i>
                        <?php echo $lang['team']?>
                    </div>
                </div>
                <div class="qualification__sections">
                    <!--==================== QUALIFICATION CONTENT 1 ====================-->
                    <div class="qualification__content qualification__active" data-content="" id="education">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qone']?></h3>
                              
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2015 - ?
                                                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                        </div>
                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qtwo']?></h3>
                              
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2022
                                </div>
                            </div>

                        </div>
                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qthree']?></h3>
                    
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2017 - ?
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                        </div>
                        <!--==================== QUALIFICATION 4 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->

                            </div>
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qfour']?></h3>
                     
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2022
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--==================== QUALIFICATION CONTENT 2 ====================-->
                    <div class="qualification__content" data-content="" id="work">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqone']?></h3>
                               
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - ?
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                        </div>
                       <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqtwo']?></h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020
                                </div>
                            </div>

                        </div>
                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqthree']?></h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                        </div>
                       <!--==================== QUALIFICATION 4 ====================-->
                         <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqfour']?></h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021
                                </div>
                            </div>

                        </div>
                         <!--==================== QUALIFICATION 5 ====================-->
                         <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqfive']?>
                    </h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                                
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 6 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                               <!-- <span class="qualification__line"></span> -->

                            </div>
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqsix']?></h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022
                                </div>
                            </div>

                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <br><br><br>
<?php require_once"footer.php";?>