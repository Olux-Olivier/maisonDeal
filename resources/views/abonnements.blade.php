@extends('base')
@section('title', 'Abonnements')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('{{ asset('cssTemplate/assets/img/page-header.jpg') }}');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Abonnements</h2>
              <p>Abonnez-vous pour ne rien rater comme actualité</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Abonnement</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Horizontal Pricing Section ======= -->
    <section id="horizontal-pricing" class="horizontal-pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>ABONNEMENTS DISPONIBLES</span>
          <h2>ABONNEMENTS DISPONIBLES</h2>

        </div>

        <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Type 1</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>2<span> / 2 mois</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li> Mensuel</li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Payer maintenant</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Type 2</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>5<span> / 6 mois</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li>Semestriel</li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Payer maintenant</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="row gy-4 pricing-item mt-4" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Type 3</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>10<span> / 12 mois</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li>Annuel</li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Payer maintenant</a></div>
          </div>
        </div><!-- End Pricing Item -->

      </div>
    </section><!-- End Horizontal Pricing Section -->

  </main><!-- End #main -->

  @endsection