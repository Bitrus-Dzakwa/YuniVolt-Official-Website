
<header>  
 
<?php if(!Auth::signed_in()):?>
 <!--For Non-Logged in user -->     
 <div>
  <nav class="ds-flex  pd-top10px brand-bg-white" style="position: fixed; width:100%;">
    <div class="wd80pc txtAli-left mg-left15px"> 
      <img class="brandLogo" alt="logo" src="<?=ROOT?>/assets/images/brand/brand-logo.png" >
    </div>

    <div class="hambuger-visitor wd20pc ht30px pd-right20px txtAli-right">  
      <img id="hamburger-visitor" onclick="toggleVisitor()" class="navIcon" src="<?=ROOT?>/assets/images/hamburger.png" alt="">  
    </div> 

    <div id="nav-links-desktop-wrapper" class="ht30px txtAli-right pd-right20px" style="text-align: right;"> 
      <div>
        <nav>
          <ul class="ds-flex nav-ul-dsk"> 
            <li style="font-weight: bold;width:100px;"><a href="#gallery" class="brand-cl-black">Gallery</a></li>
            <li style="font-weight: bold;width:100px;"><a href="#services" class="brand-cl-black">Our Services</a></li>
            <li style="font-weight: bold;width:100px;"><a href="#aboutUs" class="brand-cl-black">About Us</a></li>
            <li style="font-weight: bold;width:180px;"><a href="#SSG" class="brand-cl-black">Solar Setup Generator</a></li>
            <li style="font-weight: bold;width:100px;"><a href="#contactUs" class="brand-cl-black">Contact Us</a></li>  
          </ul>
        </nav>
      </div> 

      <div class="ds-flex mg-left21px"> 
        <span class="pd-left10px pd-right10px"><a style="margin: 0; padding:0;" href="<?=ROOT?>/signup"><button class="ht25px wd100px">Register</button></a></span>
        <span><a style="margin: 0; padding:0;" href="<?=ROOT?>/login" ><button class="ht25px wd80px">Login</button></a></span>
      </div>
    </div>
  </nav> 

  <div id="Jenny">  
    <span id="alert-nav-visitor" class="ds-none"> </span> 
    <div id="side-nav-mobile-overlay-bg-visitor" class="ps-fixed ds-none ht100pc wd100pc top50 bottom left right brand-bg-transparent zi1 cs-pointer" onclick="toggleVisitor()"></div>
    
    <div id="side-nav-mobile-visitor" class="ht100pc wd0 ps-fixed zi2 top50 left0 brand-bg-white of-x-hidden pd-top20px">
      <nav id="side-nav-mobile-links" > 
        <ul id="side-nav-mobile-ul" class="pd-top20px pd-bottom20px pd-left10px pd-right10px wd100pc"> 
          <div class="mo-nav-li">
            <li class="navLink" onclick="mobileNavController('gallery')">Gallery</li> 
          </div>

          <div class="mo-nav-li">
            <li class="navLink" onclick="mobileNavController('services')">Our Services</li> 
          </div>

          <div class="mo-nav-li">
            <li class="navLink" onclick="mobileNavController('aboutUs')">About US</li> 
          </div>

          <div class="mo-nav-li">
            <li class="navLink" onclick="mobileNavController('SSG')">Solar Setup Generator</li> 
          </div>

          <div class="mo-nav-li">
            <li class="navLink" onclick="mobileNavController('contactUs')">Contact Us</li> 
          </div>
        </ul> 
        
        <div class="ds-flex"> 
          <span class="pd-left10px pd-right10px"><a style="margin: 0; padding:0;" href="<?=ROOT?>/signup"><button class="ht25px wd90px">Register</button></a></span>
          <span><a style="margin: 0; padding:0;" href="<?=ROOT?>/login" ><button class="ht25px wd70px">Login</button></a></span>
      </div>
      </nav> 
    </div> 
  </div> 
 </div>

 
 <?php else:?>  
     <!--For Logged in user--> 
 <div> 
  <div class="ds-flex pd-left20px pd-right20px">
    <div id="brandLogo-Desktop" class="txtAli-left ds-none mg-left15px"> 
      <img class="brandLogo" alt="logo" src="<?=ROOT?>/assets/images/brand/brand-logo.png" >
    </div>

    <div id="hambuger-mobile" class="wd20pc"> 
      <p id="sig" class="ds-none"></p>
      <img onclick="toggleOn()" id="navIcon1" class="navIcon" src="<?=ROOT?>/assets/images/hamburger.png" alt=""> 
      <img onclick="toggleOff()" id="navIcon2" class="ds-none navIcon" src="<?=ROOT?>/assets/images/close-nav-menu.png" alt=""> 
    </div> 

    <div id="brandLogo-mobile" class="wd60pc txtAli-center"> 
      <img class="brandLogo" alt="logo" src="<?=ROOT?>/assets/images/brand/brand-logo.png" >
    </div>

    <div class="nav-profile-general txtAli-right wd20pc">
     <?php if(file_exists(Auth::getUserInfo()['image'])):?> 
      <img class="userImg" src="<?=Auth::getUserInfo()['image']?>" alt="avatar">
     <?php else:?> 
      <img class="userImg" src="<?=ROOT?>/assets/images/avatar.png" alt="avatar">
     <?php endif;?> 
    </div> 
  </div>

  <nav id="navMenu" class="navMenu">
    <ul id="navLinkWrapper" class="ds-none pd-left20px pd-right10px pd-top21px"> 
      <div class="br10 pd-sqr10px mg-bottom10px" style="background-color:#ff6600;">
        <li onclick="tabController('dashboard')" class="navLink">Dashboard</li> 
      </div>

      <div class="br10 pd-sqr10px mg-bottom10px" style="background-color:skyblue;">
        <li onclick="openNavChild('navchild1')" class="navLink">FX Journal</li>
        <div id="navchild1" class="js-navChildTabs ds-none">
          <li onclick="tabController('journeyJournal')" class="childNavLink">Create Journal</li> 
          <li onclick="tabController('performMatrics')" class="childNavLink">Performance Metrics</li> 
        </div> 
      </div> 
      
      <?php if(Auth::is_admin()):?>
      <div class="br10 pd-sqr10px mg-bottom10px" style="background-color:skyblue;">
        <li onclick="tabController('manageUsers')" class="navLink">Manage Users</li> 
      </div> 

      <div class="br10 pd-sqr10px mg-bottom10px" style="background-color:skyblue;">
        <li onclick="openNavChild('navchild2')" class="navLink">Back Testing</li>
        <div id="navchild2" class="js-navChildTabs ds-none">
          <li onclick="tabController('backTesting_create')" class="childNavLink">Create</li> 
          <li onclick="tabController('backTesting_result')" class="childNavLink">Result</li> 
        </div> 
      </div> 
      <?php endif;?>
      
      <div class="br10 pd-sqr10px mg-bottom10px" style="background-color:skyblue;">
        <li onclick="tabController('profile')" class="navLink">Profile</li> 
      </div>

      <div class="br10 pd-sqr10px mg-bottom10px" style="background-color:skyblue;">
        <li class="navLink"><a href="<?=ROOT?>/logout">Logout</a></li> 
        </div> 
      </div>
    </ul>
  </nav> 
 </div> 
<?php endif;?>
  
</header>   