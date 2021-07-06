<?php
    // interfaceheader.php
    include ('header_interface.php');
    
//redirect to log in if not logged in
    session_start();
    if(empty($_SESSION['username']))
    {
        header("Location: index.php");     
        
    }
?>

<!--===== HEADER =====-->
<header class="l-header" id="header">
            <nav class="nav bd-grid">
                <div class="nav__toggle" id="nav-toggle">   
                    <i class='bx bxs-grid'></i>
                </div>
                <a href="./main_ui.php" class="nav__logo"><b>Digigraphy</b></a>
                
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">

                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#digiwall" class="nav__link">DigiWall</a></li>
                        <li class="nav__item"><a href="#digishares" class="nav__link">DigiShares</a></li>
                        <li class="nav__item"><a href="#gallery" class="nav__link">Gallery</a></li>
                        <li class="nav__item"><a href="./crud_users_page.php" class="nav__link">Profile</a></li>
                  </ul>
                </div>
                
                <div class="nav__logout">

                    <a href="./index.php" class="nav__logo"><i class='bx bx-log-out bx-sm'></i></a>
                </div>
            </nav>
        </header>

        
        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__display">
                        <div class="home__shape"></div>
                        <img src="assets/img/dglogo.png" alt="" class="home__img">
                </div>

                <div class="home__data">
                    <span class="home__new">Feature</span>
                    <h1 class="home__title">EMBRACING THE<br>NEW DIGITAL ERA</br></h1>
                    <p class="home__description">Explore the depth of technology</p>
                    <a href="./main_ui.php" class="button">Explore now</a>
                </div>
            </section>                                                                                 

            <!--===== DIGIWALL =====-->
            <section class="digiwall section" id="digiwall">
              
                <h2 class="section-title">DIGIWALL</h2>
                
                <div class="digiwall__container bd-grid">
                    <article class="digi">
                        <div class="digi__sale"></div>
                        <img src="assets/img/A1.png" alt="" class="digi__img">
                        <span class="digi__name" >The orange hue that captures the beauty of sunlight reflected to one's soul<br><br>Kwon Jihyo</br></br></span>
                        <span class="digi__preci"></span>
                        <a href="#gallery" class="button-light">See more <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </article>

                    <article class="digi">
                        <div class="digi__sale"></div>
                        <img src="assets/img/A2.png" alt="" class="digi__img">
                        <span class="digi__name" >Even in the sun, you know I keep it icy, take a lick but it's too cold to bite me<br><br>Kim Jennie</br></br></span>
                        <span class="digi__preci"></span>
                        <a href="#gallery" class="button-light">See more <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </article>
                    
                    <article class="digi">
                        <div class="digi__sale"></div>
                        <img src="assets/img/A3.png" alt="" class="digi__img">
                        <span class="digi__name"  >Vintage tee, brand new phone. You're young, they assume you know nothing<br><br>Swift Taylor</br></br></span>
                        <span class="digi__preci"></span>
                        <a href="#gallery" class="button-light">See more <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </article>
                </div>
            </section>

            <!--===== DIGISHARES =====-->
            <section class="shares section" id="digishares">
                <h2 class="section-title">DIGISHARES</h2>

                <div class="shares__container bd-grid">
                    <article class="digi">
                        <img src="assets/img/A4.png" alt="" class="digi__imgshares">
                        <span class="digi__name">Thy object that glows around.</span>
                        <span class="digi__preci"></span>
                        <a href="" class="button-light">Bree Wong <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </article>

                    <article class="digi">
                        <img src="assets/img/A5.png" alt="" class="digi__imgshares">
                        <span class="digi__name">The spark that gone colorized.</span>
                        <span class="digi__preci"></span>
                        <a href="" class="button-light">JC Paner <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </article>

                    <article class="digi">
                        <img src="assets/img/A6.png" alt="" class="digi__imgshares">
                        <span class="digi__name">This hand symbolizes color.</span>
                        <span class="digi__preci"></span>
                        <a href="" class="button-light">Laurence Ligan <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </article>

                    <article class="digi">
                        <img src="assets/img/A7.png" alt="" class="digi__imgshares">
                        <span class="digi__name">Weighing black and white.</span>
                        <span class="digi__preci"></span>
                        <a href="" class="button-light">Jerson Som <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </article>
                </div>
            </section>

            <!--===== GALLERY =====-->
            <section class="gallery section">
                <div class="gallery__container bd-grid">
                    <div class="gallery__data">
                        <h3 class="gallery__title">SHARE & DISCOVER</h3>
                        <p class="gallery_description">An online outlet for inspiring artists.</p>
                        <a href="#" class="button">Explore</a>
                    </div>

                    <img src="" alt="" class="gallery__img">
                </div>
            </section>

            <!--===== CONTINUATION =====-->
            <section class="new section" id="gallery">
                <h2 class="section-title">GALLERY</h2>

                <div class="new__container bd-grid">
                    <div class="new__mens">
                        <img src="" alt="" class="new__mens-img">
                        <h3 class="new__title">Featuring</h3>
                        <span class="new__preci">Exclusive at Digigraphy</span>
                        <a href="#" class="button-light">Browse <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </div>

                    <div class="new__digi">
                        <div class="new__digi-card">
                            <img src="assets/img/A8.png" alt="" class="new__digi-img">
                            <div class="new__digi-overlay">
                                <a href="#" class="button" ><p>Britney Wong’s delightful Infinite Artwork Simulator is, as described, “a tongue-in-cheek artwork description generator” based on Mira Schor’s musings on “Recipe Art” from her 2009 essay collection, A Decade of Negative Thinking. Schor critiqued the recycling of themes both in young artists.</p></a>
                            </div>
                        </div>

                        <div class="new__digi-card">
                            <img src="assets/img/A9.png" alt="" class="new__digi-img">
                            <div class="new__digi-overlay">
                                <a href="#" class="button"><p>Following Schor’s “recipe,” Kim’s simulator generates descriptions of fictional artworks, pulling from Andrea Liu’s “Top Ten Words I Am Sick of Seeing on Artist Statements” and descriptions of artwork from the 2017 Whitney Biennial. The formula: a title & materials of work ultimately “deploys.”</p></a>
                            </div>
                        </div>
                        <div class="new__digi-card">
                            <img src="assets/img/A10.png" alt="" class="new__digi-img">
                            <div class="new__digi-overlay">
                                <a href="#" class="button"><p >Not unlike the Random Exhibition Title Generator or 500 Letters, an artist’s statement generator (Kim links to both), the results are absurd precisely because they feel too real. To pull randomly from several simulations: A work made of “floppy disks” is a “humorous elevated platform”.</p></a>
                            </div>
                        </div>

                        <div class="new__digi-card">
                            <img src="assets/img/A11.png" alt="" class="new__digi-img">
                            <div class="new__digi-overlay">
                                <a href="#" class="button"><p>pamphlets, automotive manuals, fast-food–franchise contracts, and blog posts, vantablack pigment, artists’s mixing bowls. This work is a fantastical, environmental machete consisting of drab, cluttered office which is reminiscent of the subject-object hierarchy being destabilized.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                  <form class="slider" action="">
    <div class="line"></div>
    <div class="custom-checkbox left">
            <input type="radio" id="strongly-disagree" name="agreement" class="regular-radio" onclick="font_size2()"/>
      <label for="strongly-disagree">
            <div class="tag">1</div>
      </label>
      </div>
    <div class="custom-checkbox left">
            <input type="radio" id="disagree" name="agreement" class="regular-radio" onclick="font_size3()" />
      <label for="disagree">
            <div class="tag">2</div>
      </label>
      </div>
    <div class="custom-checkbox">
            <input type="radio"  id="neutral" name="agreement" class="regular-radio" onclick="font_sizedef()"/>
      <label for="neutral">
            <div class="tag">default</div>
      </label>
      </div>
    <div class="custom-checkbox right">
            <input type="radio"  id="agree" name="agreement" class="regular-radio" onclick="font_size4()" />
      <label for="agree">
            <div class="tag">4</div>
      </label>
      </div>
    <div class="custom-checkbox right">
            <input type="radio"  id="strongly-agree" name="agreement" class="regular-radio" onclick="font_size5()"/>
      <label for="strongly-agree">
            <div class="tag">5</div>
      </label>
      </div>
  </form>


  <div class="mode"><button class="dark" onclick="dm()">DARKMODE</button>
                  <button class="light" onclick="lm()">LIGHTMODE</button></div>
    <script>
        function dm() {   
            document.getElementById("home").style.backgroundColor = "rgb(34,34,34)";
            }
    </script>
    <script>
    function lm() {
        document.getElementById("home").style.backgroundColor = "rgb(235,235,235)";
        }
    </script>
            
            </section>


        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__box">
                    <h3 class="footer_title">DIGIGRAPHY</h3>
                    <p class="footer_description">Home of Craft & Skills 2021.</p>
                </div>

                <div class="footer__box">
                    <h3 class="footer_title">EXPLORE</h3>
                    <ul>
                        <li><a href="#home" class="footer_link">Home</a></li>
                        <li><a href="#digiwall" class="footer_link">Digital Wall</a></li>
                        <li><a href="#digishares" class="footer_link">Digital Shares</a></li>
                        <li><a href="#gallery" class="footer_link">Gallery</a></li>
                    </ul>
                </div>

                <div class="footer__box">
                    <h3 class="footer_title">SUPPORT</h3>
                    <ul>
                        <li><a href="#" class="footer_link">Help</a></li>
                        <li><a href="#" class="footer_link">Customer Care</a></li>
                        <li><a href="#" class="footer_link">Authorized Services</a></li>
                    </ul>
                </div>

                <div class="footer__box">
                    <a href="https://www.facebook.com/" class="footer__social"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.instagram.com/?hl=en" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://twitter.com/" class="footer__social"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://www.google.com/" class="footer__social"><i class='bx bxl-google' ></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 Digigraphy. All Rights Reserved.</p>
        </footer>
    
<script src="js/interface_main.js"></script>

<?php
    // footer.php
    include ('footer_interface.php');
?>