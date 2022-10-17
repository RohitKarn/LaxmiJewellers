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
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
        
        <title>New Laxmi Jewellers</title>
    </head>
    <body>
        <!--==================== HEADER ====================--> 

        <!--==================== NAVBAR ====================--> 
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">New Laxmi Jewellers</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                <div class="collapse navbar-collapse" id="navbarNav">                      
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#featured" class="nav-link active" aria-current="page">Featured</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#new">New</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        
        
        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="{{ asset('images/testimonial.jpg') }}" alt="" class="home__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram
                        </a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title">JEWELLERY<br> COLLECTIONS BY NEW LAXMI JEWELLERS </h1>
                        <p class="home__description">
                            Latest arrival of the new imported jewellery of the Antique series, 
                            with a modern and impressive design.
                        </p>
                        <span class="home__price">$1245</span>

                        <div class="home__btns">
                            <a href="{{ url('/products') }}" class="button button--black button--small">
                                Discover
                            </a>

                            
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== FEATURED ====================-->
            <section class="featured section container" id="featured">
                <h2 class="section__title">
                    Featured
                </h2>

                <div class="featured__container grid">
                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="{{ asset('images/featured1.jpg') }}" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Jazzmaster</h3>
                            <span class="featured__price">$1050</span>
                        </div>

                        
                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="{{ asset('images/featured2.jpg') }}" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Ingersoll</h3>
                            <span class="featured__price">$250</span>
                        </div>

                        
                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="{{ asset('images/featured3.jpg') }}" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Rose gold</h3>
                            <span class="featured__price">$890</span>
                        </div>


                    </article>
                </div>
            </section>

            <!--==================== STORY ====================-->
            <section class="story section container">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">
                            Our Story
                        </h2>
    
                        <h1 class="story__title">
                            Inspirational Jewelleries of <br> this year
                        </h1>
    
                        <p class="story__description">
                            The latest and modern jewelleries of this year, is available in various 
                            presentations in this store, discover them now.
                        </p>
    
                        <a href="{{ url('/products') }}" class="button button--small">Discover</a>
                    </div>

                    <div class="story__images">
                        <img src="{{ asset('images/story.jpg') }}" alt="" class="story__img">
                        <div class="story__square"></div>
                    </div>
                </div>
            </section>

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

                        <button class="products__button">
                            <a href = "{{ url('/products') }}" class = "product_btn">EXPLORE</a>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product2.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Golden pilot</h3>
                        <span class="products__price">$1350</span>

                        <button class="products__button">
                        <a  href = "{{ url('/products') }}">EXPLORE</a>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product3.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Jubilee black</h3>
                        <span class="products__price">$870</span>

                        <button class="products__button">
                            <a  href = "{{ url('/products') }}">EXPLORE</a>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product4.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Fosil me3</h3>
                        <span class="products__price">$650</span>

                        <button class="products__button">
                            <a  href = "{{ url('/products') }}">EXPLORE</a>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product5.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Duchen</h3>
                        <span class="products__price">$950</span>

                        <button class="products__button">
                            <a  href = "{{ url('/products') }}">EXPLORE</a>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="{{ asset('images/product5.jpg') }}" alt="" class="products__img">

                        <h3 class="products__title">Duchen</h3>
                        <span class="products__price">$950</span>

                        <button class="products__button">
                        <a  href = "{{ url('/products') }}">EXPLORE</a>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
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
                            </div>
                        </div>
                    
                    </div>

                    <div class="testimonial__images">
                        <h2 class="section__title">
                            Design
                        </h2>
                    <div class="testimonial__square"></div>
                        <img src="{{ asset('images/home.jpg') }}" alt="" class="testimonial__img">
                    </div>
                    
                </div>
            </section>

            <!--==================== NEW ====================-->
            <section class="new section container" id="new">
                <h2 class="section__title">
                    New Arrivals
                </h2>
                
                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="{{ asset('images/new1.jpg') }}" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Longines rose</h3>
                                    <span class="new__price">$980</span>
                                </div>
                                <a href = "{{ url('/products') }}">
                                <button class="button new__button">Discover</button>
                                </a>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="{{ asset('images/new2.jpg') }}" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Jazzmaster</h3>
                                    <span class="new__price">$1150</span>
                                </div>
        
                                <a href = "{{ url('/products') }}">
                                <button class="button new__button">Discover</button>
                                </a>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="{{ asset('images/new3.jpg') }}" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Dreyfuss gold</h3>
                                    <span class="new__price">$750</span>
                                </div>
        
                                <a href = "{{ url('/products') }}">
                                <button class="button new__button">Discover</button>
                                </a>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="{{ asset('images/new4.jpg') }}" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Portuguese rose</h3>
                                    <span class="new__price">$1590</span>
                                </div>
        
                                <a href = "{{ url('/products') }}">
                                <button class="button new__button">Discover</button>
                                </a>
                            </article>                       
                        </div>
                    </div>
                </div>
            </section>

            <!-- Booking Appointment -->
            <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Book an Appointment Now</h3>

                    <form action = "DataInsert" method = "post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <input type="text" name="firstname" class="form-control form-control-lg" />
                                <label class="form-label" for="firstName">First Name</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <input type="text" name="lastname" class="form-control form-control-lg" />
                                <label class="form-label" for="lastName">Last Name</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                                <input type="email" name="email" class="form-control form-control-lg" />
                                <label class="form-label" for="email">Email</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                                <input type="tel" name="phone" class="form-control form-control-lg" />
                                <label class="form-label" for="phone    ">Phone Number</label>
                            </div>

                            </div>
                        </div>
                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                            </div>                            
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

            <!--==================== NEWSLETTER ====================-->
            <section class="newsletter section container">
                <div class="newsletter__bg grid">
                    <div>
                        <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                        <p class="newsletter__description">
                            Don't miss out on your discounts. Subscribe to our email 
                            newsletter to get the best offers, discounts, coupons, 
                            gifts and much more.
                        </p>
                    </div>

                    <form action="post" class="newsletter__subscribe">
                        <input type="email" placeholder="Enter your email" class="newsletter__input">
                        <button class="button">
                            SUBSCRIBE
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Our information</h3>

                    <ul class="footer__list">
                        <li>5M9P+H29,</li>
                        <li>Pandu Railway Bazaar,Maligaon,</li>
                        <li>Guwahati, Assam 781012</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">About Us</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="{{ url('/about') }}" class="footer__link">Support Center</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}" class="footer__link">Customer Support</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}" class="footer__link">Copy Right</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Product</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="{{ url('/products') }}" class="footer__link">Antique Jewellery</a>
                        </li>
                        <li>
                            <a href="{{ url('/products') }}" class="footer__link">Bead Jewellery</a>
                        </li>
                        <li>
                            <a href="{{ url('/products') }}" class="footer__link">Bridal Jewellery</a>
                        </li>
                        <li>
                            <a href="{{ url('/products') }}" class="footer__link">Gold Jewellery</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook'></i>
                        </a>

                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-twitter'></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram'></i>
                        </a>
                    </ul>
                </div>
            </div>

            <span class="footer__copy">&#169; New Laxmi Jewellers. All rights reserved</span>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html> 