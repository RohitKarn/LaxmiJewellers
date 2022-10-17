<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Laxmi Jewellers</title>

    <!--=============== BOOTSTRAP ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

<body>

    <header>
        <h2>
            <a href="#showcase">
                <img src="{{ asset('images/pro.jpg') }}" alt="Jewellery Image">
                <span class="highlight">New Laxmi Jewellers</span>
            </a>
        </h2>

        <nav>
            <ul>
                <li>
                    <a href="#benefits">Products</a>
                </li>
                <li>
                    <a href="#customize">Types</a>
                </li>
                <li>
                    <a href="#products">Designs</a>
                </li>
                <li>
                    <a href="#pricing-tables">
                        <span class="highlight">Info</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Showcase -->
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
    <!-- End of showcase -->

    <!-- Benefits -->
    <section id="benefits">

        <h1 class="section-title">Latest Design and Hand Crafted
            <span class="highlight">Jewelleries</span>
        </h1>
        <hr>

        <div class="grid">
            <div id="benefits-list" class="left">
                <ul>
                    <li>
                        <p>
                            <i class="fa fa-arrow-right"></i> Handmade jewellery
                            <strong>Our Designed</strong> Traditional jewellery in India remains synonymous with handmade jewellery.</p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-arrow-right"></i> Ivory Jewellery
                            Made from Ivory or its substitutes, they are considered to bring a bride luck as she begins her married life.</p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-arrow-right"></i> Jadau Jewellery
                            Jadau jewellery or engraved jewellery was brought into India by the Mughals. It forms an intricate mixture of design, gemstones, gold and enamelling work.</p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-arrow-right"></i> Kundan Jewellery
                            Kundankari, centred in Rajasthan, was considered an art developed into perfection. Traditional kundan jewellery has stones encrusted on one side, and colourful and intricate meenakari on the other side.</p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-arrow-right"></i> Meenakari Jewellery
                            In Meenakari jewellery, precious stones are set and then enameled with gold, which adds beauty to the jewellery.</p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-arrow-right"></i>Navratna Jewellery
                            In Navratna jewellery, nine Gemstones are used in a single ornament, with the belief that the nine stones together ensure well-being of the person who wears it.</p>
                    </li>
                </ul>

            </div>

            <div id="benefits-Jewellery-image" class="right">
                <img src="{{ asset('images/product2.jpg') }}" alt="Jewellery Image">
            </div>
        </div>

    </section>
    <!-- End of benefits -->

    <!-- Customize -->
    <section id="customize">

        <h1 class="section-title">Choose your
            <span class="highlight">Jewellery</span>
        </h1>
        <h3 class="section-subtitle">The jewellery of India is as varied as the languages that spread across the country. And yet, some trends sweep across greater portions of the land than others.</h3>
        <hr>

        <ul class="grid">
            <li class="ingredient-box">
                <img src="{{ asset('images/product3.jpg') }}" alt="Ingredient">
                
            </li>
            <li class="ingredient-box">
                <img src="{{ asset('images/product4.jpg') }}" alt="Ingredient">
                
            </li>
            <li class="ingredient-box">
                <img src="{{ asset('images/product5.jpg') }}" alt="Ingredient">
                
            </li>
            <li class="ingredient-box">
                <img src="{{ asset('images/product1.jpg') }}" alt="Ingredient">
                
            </li>
            <li class="ingredient-box">
                <img src="{{ asset('images/product2.jpg') }}" alt="Ingredient">
                
            </li>
            <li class="ingredient-box">
                <img src="{{ asset('images/product3.jpg') }}" alt="Ingredient">
            </li>
        </ul>

    </section>
    <!-- End of customize -->

    <!-- Combine with Coke -->
    <section id="add-cola">

        <h1 class="section-title">Our Design is top among the best in the market, here's a look of our
            <span class="highlight">Fashion jewelry</span>
        </h1>
        <h3 class="section-subtitle">We take pride in our work and can promise to stand behind the quality of our jewelleries</h3>
        <hr>

        <div class="grid">
            <div id="Jewellery-cola" class="left">
                <img src="{{ asset('images/product4.jpg') }}" alt="Jewellery">
            </div>
            <div id="cola-Jewellery" class="right">
                <img src="{{ asset('images/new1.jpg') }}" alt="Cola">
            </div>
        </div>

    </section>
    <!-- End of combine with Coke -->

    <!-- products -->
    <section id="testimonials">

        <h1 class="section-title">Few quotes and information related to
            <span class="highlight">Our Jewelleries</span>
        </h1>
        <h3 class="section-subtitle">Once you give us a chance, you'll definetely feel the difference</h3>
        <hr>

        <ul class="grid products-list">
            <li class="product-box left">
                <blockquote>
                    <i class="fa fa-quote-left" aria-hidden="true"></i> Antique Jewellery
                    <span>Antique Jewellery, with its rough look combined with an old-world charm, has gained enormous admiration in recent times.</span>
                </blockquote>
            </li>
            <li class="product-box right">
                <blockquote>
                    <i class="fa fa-quote-left" aria-hidden="true"></i> Bead Jewellery
                    <span>Bead art in India, which dates back to the five thousand year old Indus Valley Civilisation where beads out of gold, silver, copper, clay, ivory and even wood were common, is a continuing trend in Indian jewellery.</span>
                </blockquote>
            </li>
            <li class="product-box left">
                <blockquote>
                    <i class="fa fa-quote-left" aria-hidden="true"></i> Bridal Jewellery
                    <span>Indian brides are decked with various jewellery symbolising various meanings.
                        Intricately designed along with mesmerizing patterns and great colours, the gamut of bridal jewellery trousseau, though varying across the land, carries the bride’s cheerful celebration of a new life.</span>
                </blockquote>
            </li>
            <li class="product-box right">
                <blockquote>
                    <i class="fa fa-quote-left" aria-hidden="true"></i> Gold Jewellery
                    <span>Gold, the metal of desire and the symbol of prosperity, has become a major form of guaranteed investment for much of India. Gold is also considered auspicious for occasions like marriage, engagement, etc.</span>
                </blockquote>
            </li>
        </ul>

    </section>

    <!-- End of products -->

    <!-- Booking Appointment -->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Book an Appointment Now</h3>
                    <form>

                    <div class="row">
                        <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="firstName" class="form-control form-control-lg" />
                            <label class="form-label" for="firstName">First Name</label>
                        </div>

                        </div>
                        <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="lastName" class="form-control form-control-lg" />
                            <label class="form-label" for="lastName">Last Name</label>
                        </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">

                        <div class="form-outline datepicker w-100">
                            <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                            <label for="birthdayDate" class="form-label">Birthday</label>
                        </div>

                        </div>
                        <div class="col-md-6 mb-4">

                        <h6 class="mb-2 pb-1">Gender: </h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="option1" checked />
                            <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="option2" />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="option3" />
                            <label class="form-check-label" for="otherGender">Other</label>
                        </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="email" id="emailAddress" class="form-control form-control-lg" />
                            <label class="form-label" for="emailAddress">Email</label>
                        </div>

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>

                        </div>
                    </div>

                    <div class="row">
                            <div class="col-12">

                            <select class="select form-control-lg">
                                <option value="1" disabled>Choose option</option>
                                <option value="2">Subject 1</option>
                                <option value="3">Subject 2</option>
                                <option value="4">Subject 3</option>
                            </select>
                            <label class="form-label select-label">Choose option</label>

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
    <!-- End of pricing tables -->

    <!-- Footer -->
    <footer>
        <p>
            <span class="footer__copy">&#169; New Laxmi Jewellers. All rights reserved</span>
        </p>

        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-twitter-square fa-2x"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-facebook-square fa-2x"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-snapchat-square fa-2x"></i>
                </a>
            </li>
        </ul>
    </footer>
    <!-- End of footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>