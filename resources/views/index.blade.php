@extends('base')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Bienvenue à tous sur nDeal</h2>

          <!-- mot de bienvenue -->
          <p data-aos="fade-up" data-aos-delay="100">Nous sommes ravis de vous avoir ici. Que 
            vous cherchiez à acheter votre première maison, à louer 
            un appartement ou à investir dans des propriétés, nous 
            sommes là pour vous aider. Parcourez notre large sélec
            tion de propriétés et trouvez la maison selon vos preferences ou besoin. Nous sommes impatients de vous aider à faire 
            de ces rêves une réalité. Bonne recherche !!</p>

          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="Recherchez une maison">
            <button type="submit" class="btn btn-primary">Recherher</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Abonnés</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Louées</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p>achetées</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p>Visites</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main"> 


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      
      <h6 id="qui_sommes-nous"></h6>
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="{{ asset('cssTemplate/assets/img/features-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Nous sommes une entreprise de vente des maisons et de location des maisons dans
              la ville de Lubumbashi (RDC).</h3>
            <p class="fst-italic">
              Nous apportons jusque chez vous le service de la vente et location des immobiliers disponibles sur l'etandue de toute la ville avec 
              comme avantages pour vous :
            </p>
            <ul>
              <li><i class="bi bi-check"></i> La possibilité d'atteindre un public plus large.</li>
              <li><i class="bi bi-check"></i> Offrir une expérience d'achat personnalisée et pratique.</li>
              <li><i class="bi bi-check"></i> Gagner en temps et depenser moins.</li>
            </ul>
          </div>
        </div>

      </div>
    </section>



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h6 id="a_savoir"></h6>
          <span>A SAVOIR</span>
          <h2>A SAVOIR</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Naviguer sans compte</h3>
              <ul>
                <li><i class="bi bi-check"></i> Voir la Collection des maisons</li>
                <li class="na"><i class="bi bi-x"></i> <span>Voir quelques details sur une maison</span></li>
          
                <li class="na"><i class="bi bi-x"></i> <span>Recevoir les notifications</span></li>
              </ul>
              <a href="#" class="buy-btn">Créer un compte</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Naviguer avec compte</h3>
              
              <ul>
                <li><i class="bi bi-check"></i> Voir la Collection des maisons</li>
                <li><i class="bi bi-check"></i> Voir quelques details sur une maison</li>
                
                
                <li class="na"><i class="bi bi-x"></i> <span>Recevoir les notifications</span></li>
              </ul>
              <a href="connexion.html" class="buy-btn">Se connecter</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Naviguer avec abonnement</h3>

              <ul>
                <li><i class="bi bi-check"></i> Voir la Collection des maisons</li>
                <li><i class="bi bi-check"></i> Voir quelques details sur une maison</li>
        
                <li><i class="bi bi-check"></i> <span>Recevoir les notifications</span></li>
              </ul>
              <a href="abonnement.html" class="buy-btn">S'abonner</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">
        <h6 id="equipe"></h6>
        <div class="section-header">
          <span>NOTRE EQUIPE</span>
          <h2>NOTRE EQUIPE</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="{{ asset('cssTemplate/assets/img/team/olivier.png') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Olivier Kasongo</h4>
                <span>Web Development</span>
                
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100060822485336"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/olivier-kasongo-556110277?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="{{ asset('cssTemplate/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Deborah Sapwila</h4>
                <span>Marketing</span>
                
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="{{ asset('cssTemplate/assets/img/team/gopher.png') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Gopher Kaseya</h4>
                <span>Web Development</span>
                
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/gophers.kaseya"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->



  </main><!-- End #main -->

@endsection
