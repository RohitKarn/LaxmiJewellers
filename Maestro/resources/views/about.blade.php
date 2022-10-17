<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOOTSTRAP ===============-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        
        <title>New Laxmi Jewellers</title>
    </head>

    <body>
        
        <!--==================== HEADER ====================-->

        <ul class="nav justify-content-center navbar-dark bg-dark">
            <li class="nav-item">
                <a class="nav-link active" href="#">New Laxmi Jewellers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Featured</a>   
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">New</a>
            </li>
        </ul>

        <!--==================== CAROUSEL ====================-->
        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/Camio.jpg') }}" class="d-block w-100" alt="Image Here">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/home.jpg') }}" class="d-block w-100" alt="Image Here">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/Camio1.jpg') }}" class="d-block w-100" alt="Image Here">
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>

        <!--==================== PRODUCTS ====================-->

        <section class="products section container" id="products">
                <h2 class="section__title">
                    Products
                </h2>

                <div class="products__container grid">
                    <article class="products__card">
                        <img src="{{ asset('images/product1.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Spirit rose</h3>
                        <span class="products__price">$1500</span>

                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product2.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Golden pilot</h3>
                        <span class="products__price">$1350</span>

                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product3.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Jubilee black</h3>
                        <span class="products__price">$870</span>
                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product4.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Fosil me3</h3>
                        <span class="products__price">$650</span>

                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product5.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Duchen</h3>
                        <span class="products__price">$950</span>
                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product5.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Duchen</h3>
                        <span class="products__price">$950</span>
                    </article>
                </div>
            </section>


            <!--==================== ABOUT US ====================-->

             <section class = "quick">
                <h1 class = "upwork">ABOUT US</h1>
                <h3 class = "upwork">When you gift jewellery you achieve immortality in their heart.</h3>
                <p class = "genesis">Having ventured into jewellery retailing in 1993 in Thrissur, Kerala, India, where we are headquartered, and as on March 31st, 2022, we have over 150 showrooms spread across India and GCC

                    Indian jewellery, its craftsmanship and variety is an amazing showcase of India's heritage, culture and diversity. With a deep understanding of local tastes and preferences, Kalyan offers an array of traditional and contemporary jewellery designs in gold, diamonds, precious stones and other precious metals.

                    We at Kalyan have always believed that the customer needs to be educated and aware, as this is the first step in preventing malpractices in business. As a part of this philosophy we have conducted several campaigns over the years, to educate customers about purity, pricing and other aspects. These efforts of Kalyan have gone a long way in the industry, that is now becoming more transparent towards the customer’s interests. We believe that this is our legacy to the industry.

                    Inspired by the trust we have earned across varied markets, we will soon be expanding into new markets across India, GCC, USA, Singapore, Malaysia, Sri Lanka and more.</p>

             </section>

             <section class ="quick">
                 <h1 class = "upwork">VISION</h1>
                 <h4 class = "upwork">To understand and delight the world, translating everyone's dream and personality into fine Indian jewellery, and spread the happiness from it to all.</h4>
             </section>

             <section class ="quick">
                 <h1 class = "upwork">Mission</h1>
                 <h4 class = "upwork">To give every customer much more than what he/she asks for in terms of quality, selection, 
                     value for money and customer service, by understanding local tastes and preferences and innovating constantly to eventually provide an unmatched experience in Indian jewellery shopping.</h4>
             </section>




            <!--==================== TESTIMONIALS ====================-->
            <section class="testimonial section container">
            <h2 class="section__title">
                    Testimonial
                </h2>
                <div class="testimonial__container grid">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="testimonial__card swiper-slide">
                                
                                
                                
                                
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
        
                                <div class="testimonial__perfil">
                                    <img src="{{ asset('images/testimonial2.jpg') }}" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Samantha Mey</span>
                                        <span class="testimonial__perfil-detail">Director of a company</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">

                                <p class="testimonial__description">
                                    They are the best jewelleries that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                
                                </div>

                                <div class="testimonial__perfil">
                                    <img src="{{ asset('images/testimonial1.jpg') }}" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">David Brass</span>
                                        <span class="testimonial__perfil-detail">Director of a company</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">

                                <p class="testimonial__description">
                                    They are the best jewelleries that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                
                                </div>
                            </div>
                        </div>
                    
                    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

