@extends('layouts.app')

@section('content')
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets-homepage/assets/img/background-intro.jpg')">
            <div class="container bg-secondary opacity-75 pt-4 pb-4 rounded-3">
                <div class="masthead-subheading text-warning">Welcome To Snack Attack!</div>
                <div class="masthead-heading text-uppercase text-warning">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>

        @include('page-parts.page-slogan')
        @include('page-parts.page-services')
        @include('page-parts.page-products')
        @include('page-parts.page-abouts')
        @include('page-parts.page-owner')

        
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets-homepage/assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets-homepage/assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets-homepage/assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets-homepage/assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        
        @include('page-parts.page-contacts')
        @include('page-parts.page-footer')

        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets-homepage/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Halo-halo</h2>
                                    <p class="item-intro text-muted">Taste, Enjoy, Remember!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets-homepage/assets/img/portfolio/dis1.jpg" alt="..." />
                                    <p>Halo-halo  is a filipino style shaved ice made with sweetend beans,fruits and jellies and topped with milk,leche flan, purple yam jam, and ice cream. It's a cold and refreshing treats you'll want year-round!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                             55 pesos (ordinary) /
                                             85 pesos (special)

                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                             Desssert
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        CLOSE PRODUCT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets-homepage/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Noodles/Ramen</h2>
                                    <p class="item-intro text-muted">Taste, Enjoy, Remember!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets-homepage/assets/img/portfolio/dis2.jpg" alt="..." />
                                    <p>Ramen has a softer texture and smoother feels. Ramen is served in a broth where as pasta usually comes with a sauce. Ramen is basically always cut into long strips,whether straight or wavy!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                             50 pesos (good for 2 person)
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                             Grains
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        CLOSE PRODUCT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets-homepage/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Ham&Egg Sandwhich</h2>
                                    <p class="item-intro text-muted">Taste, Enjoy, Remember!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets-homepage/assets/img/portfolio/dis3.jpg" alt="..." />
                                    <p> The bread may be fresh or toasted, and it can be made with a variety of toppings including cheese and vegetables like lettuce, tomato, onion or pickle slices. Various kinds of mustard and mayonnaise are also common!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                            50 pesos (original)/
                                            85 pesos (special)
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Bread
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        CLOSE PRODUCT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets-homepage/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Milk Tea</h2>
                                    <p class="item-intro text-muted">Taste, Enjoy, Remember!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets-homepage/assets/img/portfolio/dis4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                             100 pesos (small)/
                                             140 pesos (medium)/
                                             190 pesos (largest)
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                             Drinks
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        CLOSE PRODUCT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets-homepage/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pizza</h2>
                                    <p class="item-intro text-muted">Taste, Enjoy, Remember!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets-homepage/assets/img/portfolio/dis5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                             250 pesos (5 slices)/
                                             300 pesos (7 slices) /
                                             450 pesos (9 slices)
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                             Bread
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        CLOSE PRODUCT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets-homepage/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Mango Graham</h2>
                                    <p class="item-intro text-muted">Taste, Enjoy, Remember!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets-homepage/assets/img/portfolio/dis6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Price:</strong>
                                             50 pesos (small)/
                                             100 pesos (medium)/
                                             150 pesos (largest)
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                              Dessert
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        CLOSE PRODUCT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection