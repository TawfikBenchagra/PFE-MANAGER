@extends('layout.master')
@section('title')
    Accueil
@endsection

@section('main')

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Bienvenue dans PFEMANAGER</h1>
                    <!--<h5 class="text-white mt-3 mb-4" data-aos="fade-right">WE ARE TEAM OF TALENTED DESIGNERS MAKING WEBSITES WITH BOOTSTRAP</h5>-->
                    <div class="mt-4" data-aos="fade-up" data-aos-delay="50">
                        <a href="login" class="btn btn-brand me-2 text-light" style=" background-color: #4e57d4;">Commencer</a>
                        <a href="firstregister" class="btn btn-light ms-2">S'inscrire </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- ABOUT -->
    
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About us</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="{{asset('images')}}/about-img.svg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h2>Pourquoi Nous Choisir? </h2>
                    <p class="mt-3 mb-4">Les avantages de notre application d'enseignement à distance :<br>
                    Notre application permettra aux étudiants de communiquer avec leurs enseignants et les autres 
                    étudiants, de suivre des cours en ligne, d'accéder à des ressources pédagogiques (bibliothèque), 
                    de permettre aux parents de suivre la progression de leurs enfants et de soumettre des travaux.</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-fill"></i>
                        </div>
                        <div>
                            <h5>Vous pouvez disposer d'un compte personel et d'accèder a notre environnement facilement.</h5>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <div>
                           
                            <h5>En tant que parent, vous pouvez suivre l'évolution de votre fils ou fille.</h5>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            
                            <h5>L'accès à une bibliothèque en ligne, notre bibliothèque vous permet de voir vos supports de cours, TD, TP, etc.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Services géniaux</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pen-nib-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Suivre vos cours en ligne</h5><br>
                        <p>Notre application vous permet de suivre facilement vos cours en ligne.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-stack-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Suivre votre fils ou fille </h5>
                        <p>En consultant les notes, les emplois du temps et plus d'informations concernant l'étudiant.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-ruler-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Consulter la liste des étudiants</h5>
                        <p>En tant qu'enseignant vous pouvez voir les listes de vos étudiants.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-code-box-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Étudiez où que vous soyez</h5>
                        <p>Bienvenue sur notre plateforme d'enseignement à distance, conçue pour faciliter la gestion
                            des cours entre les étudiants et les enseignants.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 " data-aos="fade-down" data-aos-delay="450">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pie-chart-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Voir plus</h5><br>
                            <p>Commencer vos cours, et bénéficier de cette nouvelle expérience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER -->
    <section id="counter" class="section-padding">
        
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4"></h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Bibliothèque en ligne</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4"></h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Devoirs en ligne</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4"></h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Cours en ligne</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4"></h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Emplois de temps</h6>
                </div>
            </div>
        </div>
    
    
    </section>

    <!-- TEAM -->
    <section id="team" class="section-padding" >
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">L’équipe</h1>
                        <div class="line"></div>
                        <!--   <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>-->
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center ">
                <div class="col-md-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{asset('images')}}/assia.png" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">ASSIA BENCHAGRA</h4>
                            <p class="mb-0 text-white">Etudiante </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{asset('images')}}/assia.png" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">ASMAA KNIDAR</h4>
                            <p class="mb-0 text-white">Etudiante</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section-padding bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Contact</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">Nos conseillers pédagogiques sont disponibles de 9h00 à 19h00 (fuseau horaire de Maroc ) du lundi au vendredi (hors jours fériés).</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <form action="#" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Entrer votre nom">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Entrer votre prenom">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" class="form-control" placeholder="Entrer votre Email">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" placeholder="Entrer subject">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Entrer votre Message"></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                           <!-- <input class="btn btn-brand" type="submit" value="Envoyer"><a href="anas.abahaj@yahoo.com"></a></input>-->
                            <button class="btn btn-brand text-light" style=" background-color: #4e57d4;">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{asset('js')}}/main.js"></script>


@endsection

