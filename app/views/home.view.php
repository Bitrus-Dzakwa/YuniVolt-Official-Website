<?php $this->view('includes/header',$data) ?>
</head> 
<body style="height: 100vh;">
<?php $this->view('includes/nav',$data) ?>

<main id="main" > 
   <section id="journalPopUp" class="generalPopUp"> 
      <div class="generalPopUp-child">
      <p>Create an acount or login to use the Journal</p>
         <a style="color:white;" href="<?=ROOT?>/signup"><button>Proceed</button></a>
         <button onclick="controlPopup('journalPopUp')">Cancel</button>
      </div>
   </section>
      
   <section id="unvailablePopUp" class="generalPopUp"> 
      <div class="generalPopUp-child">
      <p>This Tool is currently unavailable at the moment, 
         keep an eye on our Telegram group for anouncement when ready.</p>
         <a style="color:white;" href="https://t.me/+vbD1QTXgje8zMjc0"><button>Join</button></a> 
         <button onclick="controlPopup('unvailablePopUp')">Okay</button>
      </div>
   </section>

   <!-- Main Contents--> 
   <section class="section1"> 
      <div style="padding-top:30px;">
        <h1 class="intro-head brand-cl-white">We are The Best Electrical Plug Energy Source</h1>
        <p class="intro-sub-head">
          Always on point and in service, giving our best to the clients.
        </p>
        <div class="txtAli-center mg-top21px"><button class="wd150px">View Gallery</button></div> 
     </div> 
   </section>

   <section id="gallery" class="brand-bg-white pd-sqr20px" style="padding-bottom: 60px; padding-top: 80px;">
      <div class="txtAli-center mg-bottom20px">
        <img class="wd45px icon-intros" src="<?=ROOT?>/assets/images/gallery.png" alt="">
        <p class="defaultBody-DSK">Our Gallery</p> 
        <h2 class="defaultHead-DSK">Past and Current Projects</h2>
        <p class="defaultBody-DSK">tenetur officia ullam error.</p>
      </div> 

      <div class="gallery-mobile txtAli-center">
         <img class="mySlides wd100pc ht200px br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-21-01.jpg" alt="">
         <img class="mySlides wd100pc ht200px br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-20-33.jpg" alt="">
         <img class="mySlides wd100pc ht200px br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-21-33.jpg" alt="">
         <img class="mySlides wd100pc ht200px br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-20-27.jpg" alt="">
         <img class="mySlides wd100pc ht200px br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-20-39.jpg" alt="">
         <img class="mySlides wd100pc ht200px br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-20-58.jpg" alt="">
         <img class="mySlides wd100pc ht200px br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-21-21.jpg" alt="">
         <img class="mySlides wd100pc ht200px br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-21-17.jpg" alt="">
      </div>

      <div class="ds-none gallery-DSK">
         <div class="ds-flex">
          <div class="txtAli-center ttt">
           <img class="g-img-dsk br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-21-01.jpg" alt="">
           <img class="g-img-dsk br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-20-33.jpg" alt="">
           <img class="g-img-dsk br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-21-33.jpg" alt="">
           <img class="g-img-dsk br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-20-27.jpg" alt="">
          </div>
         </div> 
         <div class="ds-flex">
          <div class="txtAli-center ttt">
           <img class="g-img-dsk br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-20-39.jpg" alt="">
           <img class="g-img-dsk br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-20-58.jpg" alt="">
           <img class="g-img-dsk br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-21-21.jpg" alt="">
           <img class="g-img-dsk br10" src="<?=ROOT?>/assets/images/gallery/photo_2024-03-13_18-21-17.jpg" alt="">
          </div>
         </div> 
      </div>
   </section>
   <hr>

   <section id="services" class="brand-bg-white" style="padding-top: 50px; padding-bottom: 30px;">
      <div class="txtAli-center mg-bottom20px">
        <img class="wd45px icon-intros" src="<?=ROOT?>/assets/images/gallery.png" alt="">
        <p class="defaultBody-DSK">Whatever it is</p> 
        <h2 class="defaultHead-DSK">Our Values And Services</h2>
        <p class="defaultBody-DSK">tenetur officia ullam error.</p>
      </div> 

      <div class="chests-sec" style="padding: 40px 20px;">
         <div class="serviceMinor">
            <div class="serviceBox bs-bolder"> 
               <span id="chest1" class="chest-letter">C</span> 
               <h3 class="ft-size17px mg-top20px">Software Development</h3>
               <p class="txtAli-center">Volup tatum del eniti atque corr upti quos dolores et quas molestias excepturi</p>
            </div>
            <div id="chest-body1" class="serviceBox bs-bolder">
               <span class="chest-letter">H</span> 
               <h3 class="ft-size17px mg-top20px">Software Development</h3>
               <p class="txtAli-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
            <div class="serviceBox bs-bolder">
               <span class="chest-letter">E</span> 
               <h3 class="ft-size17px mg-top20px">Software Development</h3>
               <p class="txtAli-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div> 
         </div> 
         <div class="serviceMinor">
            <div class="serviceBox bs-bolder">
               <span class="chest-letter">S</span> 
               <h3 class="ft-size17px mg-top20px">Software Development</h3>
               <p class="txtAli-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
            <div class="serviceBox bs-bolder">
               <span class="chest-letter">T</span> 
               <h3 class="ft-size17px mg-top20px">Software Development</h3>
               <p class="txtAli-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
            <div class="serviceBox bs-bolder">
               <span class="chest-letter">S</span> 
               <h3 class="ft-size17px mg-top20px">Software Development</h3>
               <p class="txtAli-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div> 
         </div>  
      </div> 
   </section>

   <!--
   <section class="brand-bg-white" style="padding:0 20px; padding-bottom: 50px; padding-top: 80px;">
      <div class="txtAli-center mg-bottom20px">
        <img class="wd45px icon-intros" src="<?=ROOT?>/assets/images/gallery.png" alt="">
        <p class="defaultBody-DSK">Meet Our Staffs</p> 
        <h2 class="defaultHead-DSK">They Work Relentlessly To Do The Best.</h2>
        <p class="defaultBody-DSK">tenetur officia ullam error.</p>
      </div>

      <div class="servicesGeneral">
         <div class="serviceMinor">
            <div class="serviceBox bs-bolder">
               <img class="staff-img" src="<?=ROOT?>/assets/images/gallery/post-4.png" alt="">
               <h3 class="ft-size17px">John Martins</h3>
               <p class="txtAli-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
            <div class="serviceBox bs-bolder">
               <img class="staff-img" src="<?=ROOT?>/assets/images/gallery/eng1.jpg" alt="">
               <h3 class="ft-size17px">Usman Joe</h3>
               <p class="txtAli-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
            <div class="serviceBox bs-bolder">
               <img class="staff-img" src="<?=ROOT?>/assets/images/gallery/eng2.jpg" alt="">
               <h3 class="ft-size17px">Bella Johna</h3>
               <p class="txtAli-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div> 
         </div>    
      </div> 
   </section>
   -->
   <section id="aboutUs" class="brand-bg-white" style="padding-bottom: 50px; padding-top: 40px; margin-bottom:50px"> 
      <div class="txtAli-center mg-bottom41px">
        <img class="wd45px icon-intros" src="<?=ROOT?>/assets/images/gallery.png" alt="">
        <p class="defaultBody-DSK">Meet Our Staffs</p> 
        <h2 class="defaultHead-DSK" style="padding: 0 10px;">They Work Relentlessly To Do The Best.</h2>
        <p class="defaultBody-DSK">tenetur officia ullam error.</p>
      </div>
   
      <div class="about-wrapper">
        <div class="about-img-wrapper"> 
           <img class="about-img" src="<?=ROOT?>/assets/images/about/Rectangle-9.png" alt=""> 
           <img class="abstract-obt1" src="<?=ROOT?>/assets/images/about/Ellipse-4.png" alt=""><br> 
           <img class="abstract-obt2" src="<?=ROOT?>/assets/images/about/Ellipse-3.png" alt=""> 
        </div>

        <div class="about-content-wrapper"> 
           <div class="about-content">
              <h3 class="ft-size17px mg-bottom10px">Here Is What You Need To Know About Us.</h3>
              <div class="mg-bottom20px">
                 <h4 class="ft-size15px">PROFESSIONAL TEAM</h4>
                 <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit fuga quis fugiat.</P>
              </div>
              <div class="mg-bottom20px">
                 <h4 class="ft-size15px">EXPERT ADVISE</h4>
                 <P>Lorem ipsum, dolor adipisicing elit. Id delectus, nostrum.</P>
              </div>
              <div class="mg-bottom20px">
                 <h4 class="ft-size15px">CREATIVE IDEAS</h4>
                 <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. nostrum.</P>
              </div>
           </div>
           <img class="abstract-obt3" src="<?=ROOT?>/assets/images/about/Ellipse-2.png" alt=""><br> 
           <img class="abstract-obt2" src="<?=ROOT?>/assets/images/about/Ellipse-1.png" alt=""> 
        </div> 
      </div>
      <hr>
      
      <div class="mi-vi-wrapper" style="padding-top: 50px;">
         <div id="mission">
            <h1 class="txtAli-left" style="padding-left: 40px; margin: 0; font-weight:bold;">MISSION</h1>
            <h3 class="txtAli-left ft-size20px" style="padding-left: 40px; margin-top: -15px;">Statement</h3>
            <p class="brand-bg-orange-light pd-sqr20px mg-sqr20px"> 
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores illo labore eligendi quos accusantium qui sapiente ex exercitationem doloribus officiis expedita sunt placeat, quasi ad autem praesentium explicabo. Impedit, nulla?
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ea non molestiae, maxime aspernatur iure voluptas. Aliquid, numquam sint ipsa, consequuntur dolorum laudantium neque commodi placeat quam maxime error adipisci.
            </p>
         </div>

         <div>
            <h1 class="txtAli-left" style="padding-left: 40px; margin: 0; font-weight:bold;">VISION</h1>
            <h3 class="txtAli-left ft-size20px" style="padding-left: 40px; margin-top: -15px;">Statement</h3>
            <p class="brand-bg-orange-light pd-sqr20px mg-sqr20px"> 
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores illo labore eligendi quos accusantium qui sapiente ex exercitationem doloribus officiis expedita sunt placeat, quasi ad autem praesentium explicabo. Impedit, nulla?
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ea non molestiae, maxime aspernatur iure voluptas. Aliquid, numquam sint ipsa, consequuntur dolorum laudantium neque commodi placeat quam maxime error adipisci.
            </p>
         </div>
      </div>
   </section>  

   <section id="SSG" class="power-calculator">
      <div class="power-calculator-landing">
         <h2 class="brand-cl-blue">Solar System Calculator</h2>
         <p class="pd-lr20px">
            Find out your solar needs based on your home or office appliances.
         </p>
      </div> 
         
     <div class="ooo"> 
      <div class="container"> 
         <p class="warningTag">Make sure your inputs are correct!</p>
         <!-- <label for="electricLoad">Electric Load in decimal:</label>
         <input type="number" id="electricLoad" step="0.01" min="0" required>-->
         <div class="ds-flex">
           <div class="wd50pc">
            <label for="electronic">Electronic Load:</label>
            <input type="text" id="electronic" style="width: 120px;" placeholder="e.g Television" required>
           </div> 
           <div class="wd25pc">
            <label for="electronicWat">Wat:</label><br>
            <input type="number" id="electronicWat" style="width: 40px; height: 8px;" min="10" value="0" required>
           </div> 
           <div class="wd20pc txtAli-center mg-left30px pd-top5px">
            <button class="btn-spc-small" onclick="addElectricLoad()">Add</button>
            <button class="btn-spc-small mg-top5px" onclick="clearElectricLoad()">Reset</button>
           </div>
         </div>

         <!--
         <select id="questionType" onchange="addInputField()" name="answer_type">
            <option value="none" disabled>-Select-</option>
            <option value="text">Text</option>
            <option value="select">Select</option>   
         </select><br><br>-->

         <div id="loadsContainer" class="ds-none"></div> 
         <div class="ds-flex">
            <label class="wd250px ht30px pd-top10px">Total Load (wat):</label>
           <input type="number" id="watHolder" value="0" disabled required>
         </div>  

         <div class="ds-flex">
           <div class="wd60pc">
            <label for="loadTime">Power Time (Hours):</label>
            <input type="number" id="loadTime" style="width: 120px; height: 8px;" required> 
           </div>
           <div class="wd30pc">
            <label for="loadTime">Panels:</label>
            <input type="number" id="panels" style="width: 80px; height: 8px;" value="4" required> 
           </div>  
         </div>  

        <button class="mg-bottom20px" onclick="generateSolarSystem()">Calculate</button> 
      </div> 

      <div id="resultWrapper" class="ds-none">
         <h2 class="brand-cl-black ft-size19px">RESULT</h2>
           <p id="param33" style="padding-bottom: 10px; font-size:16px;">
              Your load is <span id="loads"></span>
              W, and you want the setup to carry it for <span id="timeUsage"></span>
              hours. Below is what you need:
           </p>
           <p id="param44" style="padding-bottom: 10px;"></p> 
           <p id="param55" style="padding-bottom: 10px;"></p>  
           <p id="param66" style="padding-bottom: 10px;"></p>   
           <div>
              <h2 class="txtAli-center brand-cl-black">Need This Above Setup?</h2>
              <p>Automatically send it to us - by inputing your email and click "Email Now"</p>
              
               <div class="ds-flex"> 
                  <div class="wd60pc">
                   <form action="" class="mg-top20px">
                    <label for="loadTime">Input Your Email:</label>
                    <input type="email" style="height: 20px;" required> 
                   </form>
                  </div>  
                  <div class="wd30pc" style="margin-left: 5%;">   
                    <a href="mailto:yunivolttech@gmail.com?subject=YuniVolt - I Need This Setup&body=Hi, I am interested in getting this setup:"><button class="wd100px mg-top31px">Email Now!</button></a>
                  </div>
               </div>  
            </div>
      </div>
     </div>
   </section>

   <section id="contactUs" class="section6">
      <div>
         <h2 class="defaultHead-DSK txtAli-center" style="color: black;">Have More Question About Our Business And Services?</h2>
         <h3 class="defaultBody-DSK txtAli-center mg-bottom31px" style="color: black;">
            Send us an email or chat with support on WhatsApp, Twitter or FaceBook using the links below.
            We are everywhere just to serve you better!
         </h3> 
         <hr class="mg-bottom10px mg-top10px mg-auto wd70px ht3px bd-zero brand-bg-blue"> 
         <div class="txtAli-center"> 
            <a href=“tel:+2347048888874”><img class="socialIconsE" src="<?=ROOT?>/assets/images/phone.png"  alt=""></a>  
            <a href="mailto:yunivolttech@gmail.com"><img class="socialIconsE" src="<?=ROOT?>/assets/images/email.png"  alt=""></a>  
            <a href="https://wa.link/16mt2f"><img class="socialIconsW wd25px" src="<?=ROOT?>/assets/images/whatsapp-black.png" alt=""></a>  
            <a href="#"><img class="socialIcons wd25px" src="<?=ROOT?>/assets/images/twitter.jpg" alt=""></a> 
            <a href="#"><img class="socialIcons wd25px" src="<?=ROOT?>/assets/images/facebook.jpg" alt=""></a> 
         </div>  
      </div>
   </section>  

</main><!-- End #main --> 

<script>
    var carouselIndex = 0;
carousel(); 
function carousel() { 
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  carouselIndex++;
  if (carouselIndex > x.length) {carouselIndex = 1}    
  x[carouselIndex-1].style.display = "block";  
  setTimeout(carousel, 1000);    
} 
 
</script>
   
     
   <?php $this->view('includes/footer') ?>