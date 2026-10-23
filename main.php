<!-- Developed by 
 Project Members :- Shraddha Suruse
                    Durga Barve
                    Amruta Jadhav
                    Nikita Shinde
                    Vaishnavi Mule       
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A K Beauty Salon </title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="main.js"></script>
</head>
<body>
    <?php 
    include('connection.php')
    ?>
    <!---Navbar--->
    <header class="bg-gray">
        <nav class="navbar">
            <div class="logo">A K Beauty Salon.</div>
            <ul class="navlist">
                <li>
                    <a href="#" class="active navlinks">Home</a>
                </li>
                <li>
                    <a href="#Our Services" class="navlinks">Our Services</a>
                </li>
                <li>
                    <a href="#About" class="navlinks">About</a>
                </li>
                <li>
                    <a href="#Home Services" class="navlinks">Home Services</a>
                </li>
                <li>
                    <a href="#Testimonial" class="navlinks">Testimonial</a>
                </li>
                <li>
                    <a href="appoinment.php" class="primary-btn" data-type="inverted-btn">Appointment</a>
                </li>
                <li>
                    <a href="signup.php" class="primary-btn" data-type="inverted-btn">Signin</a>
                </li>
                <li>
                    <a href="appoinment.php" class="primary-btn" data-type="inverted-btn">AppoinmentList</a>
                </li>
            </ul>

        </nav>
    </header>


    <main>


        <!---Hero Section--->

        <section class="hero-section bg-gray">
            <div class="container">
                <div class="row-container">
                    <div class="content">
                        <h3>123,central Square,India</h3>
                        <h1>A K Beauty Salon</h1>
                        <p>A short description that goes well with the title and the purpose of the Page,Make it look attractive so that users are encouraged to click on the call-to-action.</p>
                        <div class="actions">
                            <a href="#Contact us" class="primary-btn " data-type="inverted-btn">Contact us</a>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="home page img 2.jpg" alt="">

                    </div>
                </div>
            </div>

        </section>


         <!---Our Services Section--->


         <section class="section bg-gray" id="Our Services">
            <div class="column-container">
                <div class="content">
                    <h1> Services We provided</h1>
                </div>
                <div class="grid-card-container">
                    <div class="card">
                        <img src="./Services images/services hair cutting.jpg" class="card-image">
                        <h4>Hair Cutting</h4>
                        <p>Hair Cutting</p>
                        <h4>Starts at 699</h4>
                        <p class="para">1.Bob- 700Rs <br>
                        2.Shag- 720Rs <br>
                        3.Curls- 690Rs <br>
                        4.Feathered Layers-850Rs <br>
                        5.Blunt Cut-600Rs <br>
                        6.Lob- 790Rs <br>
                        7.Short Blande- 960Rs <br>
                        8.Ringlets- 780Rs  
                        </p>
                        <div class="btn-container">
                           <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./Services images/Hair Styling img.jpg" class="card-image">
                        <h4>Hair Style</h4>
                        <p>Hair Style</p>
                        <h4>Starts at 750</h4>
                        <p class="para">1.French Braid- 2000Rs <br>
                            2.Straight- 1500Rs <br>
                            3.Chignon- 1700Rs <br>
                            4.Waterfall Braid- 2500Rs <br>
                            5.Diagonal Braid Updo- 3000Rs <br>
                            6.Regular Braid- 2000Rs <br>
                            7.Pigtails- 1000Rs <br>
                            8.Dteadlocks- 1935Rs
                        </p>
                        <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                    <div class="card">
                        <img src="Services images/makeup.jpg" class="card-image">
                        <h4>Makeup Services</h4>
                        <p>Makeup</p>
                        <h4>Starts at 2000</h4>
                        <p class="para">1.HD Makeup- 2500Rs <br>
                            2.Matte Makeup- 3600Rs <br>
                            3.Nude Makeup- 3950Rs <br>
                            4.Mineral Makeup- 4600Rs <br>
                            5.Water based Makeup- 4560Rs <br>
                            6.Bridal Makeup- 5000Rs <br>
                            7.Minimal Makeup- 4500Rs <br>
                            8.Natural Makeup- 3500Rs <br>
                        </p>
                        <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                    <div class="card">
                        <img src="services nails service.jpg" class="card-image">
                        <h4>Nails Art</h4>
                        <p>Nails Art service</p>
                        <h4>Starts at 3000</h4>
                        <p class="para"> 1.French Manicure- 3500Rs <br>
                            2.Splatter Nails- 4680Rs <br>
                            3.Floral Nails- 5380Rs <br>
                            4.Rainbow Pop Art Nails- 4500Rs <br>
                            5.Aura Nails- 5000Rs <br>
                            6.Marble Nails- 3900Rs <br>
                            7.Dip Powder- 3200Rs <br>
                            8.American Nails- 4580Rs
                        </p>
                        <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                    <div class="card">
                        <img src="Services images/Manucare and Padicare.jpg" class="card-image">
                        <h4>Manicure and Pedicure</h4>
                        <p>Manicure and Pedicure</p>
                        <h4>Starts at 4000</h4>
                        <p class="para"> 1.Regular Pedicure- 4500Rs <br>
                            2.Fish Pedicure- 5000Rs <br>
                            3.SPA Pedicure- 4900Rs <br>
                            4.Paraffin Manicure- 6000Rs <br>
                            6.Acrylic Manicure- 6300Rs <br>
                            7.Aerican Manicure- 5500Rs <br>
                            8.Gel Pedicure- 45000Rs <br>
                            9.Hot Stone Pedicure-6000Rs
                        </p>
                        <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                    <div class="card">
                        <img src="Services images/message.jpg" class="card-image">
                        <h4>Massage</h4>
                        <p> Massage Services</p>
                        <h4>Starts at 6000</h4>
                        <p class="para">1.Deep Tissue Massage- 6500Rs <br>
                            2.Trigger Point- 7000Rs <br>
                            3.Prenatal Massage- 7560Rs <br>
                            4.Hot Stone Massage- 6500Rs <br>
                            5.Swedish Massage- 8000Rs <br>
                            6.Pregnancy massage- 8090Rs <br>
                            7.Thai Massage- 7000Rs <br>
                            8.Chair Massage- 6800Rs
                        </p>
                        <button class="primary-btn" data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                   
                </div>

            </div>
         </section>



         <!---Offers-->
         <section class="offers-section bg-pink">
            <div class="container">
                <div class="project-content">
                    <h2 class="fill-white">Book your Appointment Now and Get 25% off </h2>
                    <p class="fill-light-pink para">Awasome Monsoon Sale- 25% off on all professional services from only $5</p>


                    
                </div>
            </div>
         </section>



         <!---About Section--->
         <Section class="section bg-white" id="About">
            <div class="container">
                <div class="row-container">
                    <div class="image-container" data-type="inverted-img">
                        <img src="about 3.jpg" alt="profile">
                    </div>
                    <div class="content">
                        <h3>About us</h3>
                        <h1>A World class Beauty Salon Company.</h1>
                        <p class="para-content">A K Beauty Salon, Pune first and leading India's of beauty salons, offers expert services in hairstyling, skin and beauty care. It is dedicated to the contemporary Indian woman’s exploration of the fine art of beauty. Known for our magical concoction of stunning make-up, fabulous hair and excellent skin services, we bring the backstage expertise and experience of Lakmé Fashion Week to modern Indian women through a team of over 3500+ highly trained professional stylists.  Professionally trained hair and makeup experts with countless shows under our belt and outstanding skin services come together at Lakmé Salon and offer an unforgettable experience. </p>
                        <ul class="information">
                            <li class="detail">
                                <i class="fa-solid fa-user fill-pink"></i>
                                Name &nbsp; &nbsp : &nbsp; &nbsp;  A K Beauty Salon
                            </li>

                            <li class="detail">
                                <i class="fa-solid fa-phone fill-pink"></i>
                                Phone &nbsp; &nbsp : &nbsp; &nbsp;  9763532650
                            </li>

                            <li class="detail">
                                <i class="fa-solid fa-envelope fill-pink"></i>
                                Email &nbsp; &nbsp : &nbsp; &nbsp;  AKSalon@gmail.com
                            </li>
                        </ul>
                        <h4>Salon Facility</h4>
                        <ul class=" Salon-Facility">
                        
                            <li>
                                <i class="fa-solid fa-line fill-pink"></i>Ac Room
                            </li>

                            <li>
                                <i class="fa-solid fa-music fill-pink"></i>Music
                            </li>

                            <li>
                                <i class="fa-solid fa-wifi fill-pink"></i>Wifi
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
         </Section>





         <!--Home services-section-->
         <section class="section bg-gray" id="Home Services">
            <div class="column-container">
                <div class="content">
                    <h1>Home Services</h1>
                </div>
                <div class="grid-card-container">
                    <div class="card">
                        <h4>Beach & Detan</h4>
                        <p>detan</p>
                        <i class="fa-solid fa-star fill-black ">4.84(78.6k reviews)</i>
                        <h4>Starts at 399</h4>
                        <p class="para">RAAGA detan pack infused with milk,honey,and fruit extracts to remove tan Skin. <br>
                        suitable for reducing dark spots.</p>
                        <div class="btn-container">
                            <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <h4>Wax & Glow</h4>
                        <p>Wax</p>
                        <i class="fa-solid fa-star fill-black">4.85(926.6k reviews)</i>
                        <h4>Starts at 2,449</h4>
                        <p class="para"><b>.waxing</b>:Full arm-RICA roll on,Full legs-RICH Roll on. <br>
                            <b>.Facial Hair Removal</b>:Upper lip-Threading.
                        </p>
                        <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                    <div class="card">
                        <h4>Manicure & Pedicure</h4>
                        <p>Manicure & Pedicure</p>
                        <i class="fa-solid fa-star fill-black">4.85(926.6k reviews)</i>
                        <h4>Starts at 1,459</h4>
                        <p> <b>.Pedicure</b>:Elysian British Rose Pedicure. <br>
                            <b>.Threading+Face Waxing</b></p>
                        <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                    <div class="card">
                        <h4>Loreal Hair Spa</h4>
                        <p>Loreal Hair Spa</p>
                        <i class="fa-solid fa-star fill-black">4.86(24.5k reviews)</i>
                        <h4>Starts at 199</h4>
                        <p>Relaxing oil massage to relieve stress & promote hair <br>
                        an ultimate protecter of oily hair.</p>
                        <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                    <div class="card">
                        <h4>Threading & Face waxing</h4>
                        <p>Threading</p>
                        <i class="fa-solid fa-star fill-black">4.85(926.6k reviews)</i>
                        <h4>Starts at 50</h4>
                        <p>Good quality thread for facial areas'hair removal & desired eyebrow shape.</p>
                        <button class="primary-btn"  data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                    <div class="card">
                        <h4>Foot Message</h4>
                        <p>Foot Message</p>
                        <i class="fa-solid fa-star fill-black">4.82(30.1k reviews)</i>
                        <h4>Starts at 299</h4>
                        <p>.Micromovement techniques with thumb & fingers to cover all the <br>
                            .Relaxes your feet & entrie body.
                        </p>
                        <button class="primary-btn" data-type="inverted-btn"><a href="appoinment.php">Book Now</a></button>
                    </div>
                  
                </div>

            </div>
         </section>

           <!--Testimonial Section-->
           <section class="section bg-white" id="Testimonial">
            <div class="container">
               <div class="column-container">
                <div class="content">
                    <h3>Testimonial</h3>
                    <h1>My Client Saying...</h1>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="profile-container"></div>
                        <h4>Sai Kadam</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">My professional arrived a bit late  but her service was excellent and she was very professional otherwise. </p>
                      </div>
                      <div class="swiper-slide">
                        <div class="profile-container1"></div>
                        <h4>Shruti Patil</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">She is very sweet person and she knows her work very well. I like the service.</p>
                      </div>
                      <div class="swiper-slide">
                        <div class="profile-container2"></div>
                        <h4>Aarti Sule</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">The overall experience was good. </p>

                      </div>
                      <div class="swiper-slide">
                        <div class="profile-container3"></div>
                        <h4>Gargi varpe</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">She was polite and did a good job</p>

                      </div>
                      <div class="swiper-slide">
                        <div class="profile-container4"></div>
                        <h4>Diksha Doke</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">Was a really good service</p>

                      </div>
                      <div class="swiper-slide">
                        <div class="profile-container5"></div>
                        <h4>Puja Pawar</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">I had an a</p>

                      </div>
                      <div class="swiper-slide">
                        <div class="profile-container6"></div>
                        <h4>Durga Barve</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">Quick and very good waxing service provided by Asha. Thanks</p>
                      </div>
                      <div class="swiper-slide">
                        <div class="profile-container7"></div>
                        <h4>Swra mule</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">She was polite and did a good job</p>

                      </div>
                      <div class="swiper-slide">
                        <div class="profile-container8"></div>
                        <h4>Tanvi Jadhav</h4>
                        <img src="star image.jpg" alt="Rating">
                        <p class="para">My professional arrived a bit late  but her service was excellent and she was very professional otherwise. </p>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                
               </div>
            </div>
           </section>



         
          
        <!--contact us Section-->

        <section class="section bg-white" id="Contact us">
            <div class="container">
                <div class="column-contaianer">
                    <div class="content">
                        <h3>Contact Us</h3>
                        <h1>Get In Touch</h1>
                    </div>
                    <form action="#" class="form">
                        <input type="text" placeholder="Who are you booking an Appointment for?" required>
                        <input type="text" placeholder="Name"required >
                        <input type="number" placeholder="Phone Number" required >
                        <input type="Email" placeholder="Email Address"required  >
                        <textarea placeholder="Type your Message here" rows="6"required  ></textarea>
                        <input type="submit" value="submit" class="primary-btn" data-type="inverted-btn">
                    </form>
                </div>
            </div>
        </section>


      <!---Footer Section--->
      
      <footer class="footer-section bg-black">
        <div class="container">
          
            <h3>A K Beauty Salon</h3>
            <p class="para fill-white">Have a Question?</p>
            <li class="para fill-white">
             <i class="fa-solid fa-phone fill-pink"></i>
              Phone &nbsp; &nbsp : &nbsp; &nbsp;  9763532650
            </li>
  
            <li class="para fill-white">
                <i class="fa-solid fa-map fill-pink"></i>
                 location &nbsp; &nbsp : &nbsp; &nbsp;   Pimpri-chichvad,Pune
            </li>
  
            <li class="para fill-white">
                <i class="fa-solid fa-envelope fill-pink"></i>
                 Email &nbsp; &nbsp : &nbsp; &nbsp;   AKSalon@gmail.com
            </li>
            <div class="information">
                <h3>information</h3>
                <h4 class="para fill-white">F & Q</h4>
                <h4 class="para fill-white">Privacy</h4>
                <h4 class="para fill-white">Term Condition</h4>
  
            </div>
         
  
  
           
  
        </div>
      </footer>


             


         
         
        
            
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>


