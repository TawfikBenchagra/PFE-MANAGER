<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Biblio</title>
   <!--font awesome cdn link site https://cdnjs.com/ -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!--custom css file link -->
   <link rel="stylesheet" href="{{asset('css')}}/yas_style.css">

</head>
<body>

<!--header section starts-->

<header class="header">

    <section class="flex">

      <a href="#" class="logo"><img src="images/E-APPR.jpg" alt="" class="ms-auto"></a>

      
        {{--<form action="" method="post" class="search-form">
         <input type="text" name="search-box" placeholder="search courses..."
         required maxlength="100">
         <button type="submit" class="fas fa-search" name="search-box"></button>
        </form>--}}
     
       <div>
       <h1 class="logo">Bibliothèque</h1>
       </div>
      
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         
         <div id="user-btn" class="fas fa-user"></div>
         
         <!-- 
            <div id="search-btn" class="fas fa-search"></div> 
            <div id="toggle-btn" class="fas fa-sun"></div>
         -->
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" alt="">
         <h3>ASSIA</h3>
         <span>Étudiant</span>
         <a href="#" class="btn">Voir le profil</a>
         <div class="flex-btn">
            <a href="#" class="option-btn">Déconnecter</a>
         </div>
      </div>
     


    </section>

</header>

<!--header sectino ends-->

<!--side bar section starts-->

<div class="side-bar">
   
   <div class="close-side-bar">

      <i class="fas fa-times"></i>

   </div>


      <div class="profile">
         <img src="images/pic-1.jpg" alt="">
         {{--dd($user)--}}
         <h3>ASSIA</h3>   {{--{{session()->user()->nom}}--}}
         <span>Étudiant</span>
         <a href="#" class="btn">Voir le profil</a>
      </div> 


   <nav class="navbar">
   <a href="#"><i class="fas fa-book"></i><span>Rejoindre un cours</span></i>
   <a href="#"><i class="fa-solid fa-calendar-days"></i><span>Soumettre un devoir</span></i>
   <a href="#biblio"><i class="fas fa-graduation-cap"></i><span>Bibliothèque </span></i>
   <a href="#"><i class="fa-solid fa-calendar-days"></i><span>Passer  examens</span></i>
   <a href="#"><i class="fa-solid fa-calendar-days"></i><span>EMPLOIS DU TEMPS</span></i>
   
   
      </a>
   </nav>

</div>

<!--
    <a href="#"><i class="fas fa-home"></i><span>SEMESTER 1</span></i>
      <a href="#"><i class="fas fa-question"></i><span>SEMESTER 2</span></i>
      <a href="#"><i class="fas fa-graduation-cap"></i><span>SEMESTER 3</span></i>
      <a href="#"><i class="fas fa-chalkboard-user"></i><span>SEMESTER 4</span></i>
      <a href="#"><i class="fas fa-heatset"></i><span>SEMESTER 5</span></i>
      <a href="contact.html"><i class="fas fa-heatset"></i><span>SEMESTER 6</span></i>
-->

<!--side bar section ends-->

<!-- quick select section strarts -->

<section id="biblio" class="quick-select">
    
<h1 class="heading">Filière</h1>

   <div class="box" style="text-align: center;">
   <a href="Semester.php" class="btn-Filiere">DP</a> 
   <a href="Semester.php" class="btn-Filiere">SMP</a>
   <a href="Semester.php" class="btn-Filiere">SMC</a>
   <a href="Semester.php" class="btn-Filiere">SVI</a>
   <a href="Semester.php" class="btn-Filiere">SMA</a>
   <a href="Semester.php" class="btn-Filiere">SMI</a>
   </div>

   
   <h1  style="text-align:center;" >-----------------------------------------------------------------------------------------</h1>
 <!--
   <div class="box-container">
        
   <!--
    <div class="box">
         <h3 class="title">likes and comments</h3>
         <p>total likes : <span>14</span></p>
         <a href="#" class="inline-btn">view like</a>
         <p>total comments : <span>5</span></p>
         <a href="#" class="inline-btn">view comment</a>
         <p>saved plylist : <span>3</span></p>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

        <i class="fas fa-code"></i>
        <i class="fas fa-chart-simple"></i>
        <i class="fas fa-pen"></i>
        <i class="fas fa-chart-line"></i>
        <i class="fas fa-music"></i>
        <i class="fas fa-camera"></i>
        <i class="fas fa-cog"></i>
        
         <a href="#"><i class="fas fa-vial"></i><span>SEMESTER 6</span></a>
   -->
      
     <!--

      <div class="box">
         <h3 class="title" style="text-align: center;" >SEMESTER</h3>
         <div class="flex "  style="margin-left: 7%;" >
            <a href="#"><span>SEMESTER 1</span></a> 
            <a href="#"><span>SEMESTER 2</span></a> 
            <a href="#"><span>SEMESTER 3</span></a> 
            <a href="#"><span>SEMESTER 4</span></a>
            <a href="#"><span>SEMESTER 5</span></a>
            <a href="#"><span>SEMESTER 6</span></a>
            
         </div>
      </div>

--> 
 <!--
     <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>css3</span></a>
            <a href="#"><i class="fab fa-js"></i><span>js</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>php</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>

         </div>
      </div>
 -->
     


      <!--
        <div class="box">
         <h3 class="title">become a tutor</h3>
         <p class="tutor">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Perspiciatis, nam?</p>
         <a href="teachers.html" class="inline-btn">get started</a>
      </div>


      
   </div>


       -->

      
</section>


<!-- quick select section end -->














 <!--custom js file link-->
 <script src="{{asset('js')}}/script.js"></script>

</body>
</html>

