<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Pet Store Landing Page</title>
</head>
<body>
    <header>
        <div class="banner">Get free delivery on orders over $80</div>
        <nav>
            <div id="logo">

                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8 32H0V21.9849C0 17.1239 4.0116 13.1839 8.96 13.1839H15.2V0.468341C15.2 0.251458 15.3792 0.0754376 15.6 0.0754376C15.7184 0.0754376 15.8308 0.127301 15.9068 0.216883L17.3616 1.92719C18.402 1.07577 19.74 0.563816 21.2 0.563816H22C23.442 0.563816 24.7656 1.06359 25.8 1.89654L27.2932 0.14066C27.3692 0.0514706 27.4812 0 27.6 0C27.8208 0 28 0.175628 28 0.392904V15.3896H23.36C17.528 15.3896 12.8 20.0337 12.8 25.7623V32Z" fill="#45413E" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.76 17.0569V12.0875C29.76 12.0836 29.76 12.0797 29.76 12.0758V6.79004C29.76 6.57435 29.9392 6.4 30.16 6.4C30.266 6.4 30.3676 6.44095 30.4424 6.51389L31.9576 7.98784C32.7864 7.42501 33.7936 7.09504 34.88 7.09504C35.97 7.09504 36.9808 7.42735 37.8112 7.99369L39.3176 6.52793C39.3924 6.45499 39.494 6.41404 39.6 6.41404C39.8208 6.41404 40 6.58878 40 6.80408V23.2632C40 28.0883 35.9884 32 31.04 32H14.4V25.7938C14.4 20.969 18.4116 17.0569 23.36 17.0569H29.76Z" fill="#45413E" />
                </svg>
                Sujal's <br> Pet Store
            </div>
            <ul class="navigation-menu">
                <li><a href="#">Products</a>
                    <ul class="subnav">
                        <li class="card-med" id="sup-dog">
                            <div class="card-image"><img src="https://ouch-cdn2.icons8.com/qPvaAv2gxwM3l0z7dl_eoh9v6h58HlzewBUfEgX6AZE/rs:fit:368:386/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMTIv/ZmM4YjNlYmItMDNj/Ni00NGM3LTliNGUt/YTUyOWUzOGU4NTE2/LnBuZw.png"></div>
                            <a href="#">
                                <span>Dogs</span>
                                <span>Shop All <span class="material-symbols-outlined">
                                        arrow_forward
                                    </span></span>
                            </a>
                        </li>
                        <li class="card-med" id="sup-cat">
                            <div class="card-image"><img src="https://ouch-cdn2.icons8.com/US6gJ6fHUOJqruLB7KDe5zEa82iDSp7OdO-bv-aLtvU/rs:fit:368:310/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNjU5/LzdmOWU1ZjU0LTMx/ZDQtNDgwNS1iM2E2/LWM3NzgyMTcyNzJh/NC5wbmc.png"></div>
                            <a href="#">
                                <span>Cats</span>
                                <span>Shop All <span class="material-symbols-outlined">
                                        arrow_forward
                                    </span></span>
                            </a>
                        </li>
                        <li class="card-med" id="sup-bird">
                            <div class="card-image"><img src="https://ouch-cdn2.icons8.com/6OkSfKKP476ZKzGJoDlXfXuWzX-vjlDRotIVMTz3lmo/rs:fit:368:396/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNzA1/LzRkNmI1YjIwLTQy/YWQtNDVlMC05ZDI5/LTA0MTkyMWZkNWE1/NS5wbmc.png"></div>
                            <a href="#">
                                <span>Birds</span>
                                <span>Shop All <span class="material-symbols-outlined">
                                        arrow_forward
                                    </span></span>
                            </a>
                        </li>
                        <li class="card-med" id="sup-fish">
                            <div class="card-image"><img src="https://ouch-cdn2.icons8.com/41Pv7w9rcbn7II_gB2vwvVCQRYE5mvpca1ZbsvMujR0/rs:fit:368:368/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNjE5/LzRlZjE1YTgyLTI3/NjYtNDlkNC1hMGE3/LWY4ZjRmNzhjM2M5/NS5wbmc.png"></div>
                            <a href="#">
                                <span>Fish</span>
                                <span>Shop All <span class="material-symbols-outlined">
                                        arrow_forward
                                    </span></span>
                            </a>
                        </li>
                    </ul>
                <li><a href="#">Services</a>
                    <ul class="subnav">
                        <li class="card-med" id="serv-groom">
                            <div class="card-image"><img src="https://ouch-cdn2.icons8.com/T11rfGmMKgcStJyAFKNgtOfE79cadabx0DVMnvzA9Pk/rs:fit:368:313/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNDQx/LzFlYWU4MWY3LWQ1/ZjYtNDM2Ny1hZjM5/LWVmNTFmMGM5Njk4/MS5wbmc.png"></div>
                            <a href="#">
                                <span>Grooming</span>
                                <span>More Info <span class="material-symbols-outlined">
                                        arrow_forward
                                    </span></span>
                            </a>
                        </li>
                        <li class="card-med" id="serv-board">
                            <div class="card-image"><img src="https://ouch-cdn2.icons8.com/F5Ea1suZtMYimKDkJr0CJLO_1bju6-bTyT1EuDKEg8s/rs:fit:368:254/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMjcx/LzVjMzE4NWM0LWZh/NTMtNGQ1OS05ZTM2/LTZjYzBhNGU3ODg0/NC5wbmc.png"></div>
                            <a href="#">
                                <span>Boarding</span>
                                <span>More Info<span class="material-symbols-outlined">
                                        arrow_forward
                                    </span></span>
                            </a>
                    </ul>
                </li>
                <li><a href="#locate">Locations & Hours</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li onclick="showContent('login')"><a href="login.php">LOGIN</a></li>
                <li onclick="showContent('loginout')"><a href="logout.php">LOGOUT</a></li>
            </ul>
            <div id="utility">
                <span class="material-symbols-outlined">
                    search
                </span>
                <span class="material-symbols-outlined">
                    shopping_cart
                </span>
            </div>
        </nav>
    </header>
    <section class="hero">
        <h1>Your One-Stop Shop for Every Pet's Needs!</h1>
        <div class="btn-group">
            <button class="btn-filled-dark"><span class="material-symbols-outlined">
                    shopping_cart
                </span>Shop All Products</button>
            <button class="btn-outline-dark btn-hover-color"><span class="material-symbols-outlined">
                    calendar_month
                </span> Book a Service</button>
        </div>
    </section>
    <section>
        <h2>Shop by Pet</h2>

        <ul class="shop-pets">
            <li class="card-large card-light" id="sup-dog">
                <div class="card-image"><img src="https://ouch-cdn2.icons8.com/5ccPOQq69UKQcbmXfjvOScfFc9NXKG0Xu6DPNQ8b0f8/rs:fit:368:247/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMTEw/LzFlODdiYzcyLTBl/OWEtNDFlNS05N2Ey/LTMzYTA4MDQ5MWU1/OC5wbmc.png"></div>
                <ul>
                    Dogs
                    <li><a href="#">Food & Treats</a></li>
                    <li><a href="#">Toys</a></li>
                    <li><a href="#">Beds & Furniture</a></li>
                    <li><a href="#">Outdoor Supplies</a></li>
                    <li><a href="#">Clothing</a></li>

                    <button class="btn-outline-light">Shop All<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button>
                </ul>
            </li>

            <li class="card-large card-dark" id="sup-cat">
                <div class="card-image"><img src="https://ouch-cdn2.icons8.com/RjiKOF2gGKiIVnIMFi0O1a4aU7DoHfhbkXr2JbUYZ3A/rs:fit:368:313/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMzEy/LzliNDQ3MmVlLWZh/YjMtNDQwNy1iOWVh/LWMwOTdlYWNjNWE3/NS5wbmc.png"></div>
                <ul>Cats
                    <li><a href="#">Food & Treats</a></li>
                    <li><a href="#">Toys</a></li>
                    <li><a href="#">Beds & Furniture</a></li>
                    <button class="btn-outline-dark">Shop All<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button>
                </ul>

            </li>

            <li class="card-large card-dark" id="sup-bird">
                <div class="card-image"><img src="https://ouch-cdn2.icons8.com/DF-XRInvbvWS9fQSpWc_SegC3meXZK8BmE-PjrdrF3Q/rs:fit:368:396/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNzI3/LzQyYWIyNzliLWJj/ZDgtNGEyMC04MGRi/LTk3MzU4YWFmNTVk/OS5wbmc.png"> </div>
                <ul>Birds
                    <li><a href="#">Food & Treats</a></li>
                    <li><a href="#">Toys</a></li>
                    <li><a href="#">Furniture</a></li>
                    <button class="btn-outline-dark">Shop All<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button>
                </ul>

            </li>
            <li class="card-large card-light" id="sup-fish">
                <div class="card-image"><img src="https://ouch-cdn2.icons8.com/41Pv7w9rcbn7II_gB2vwvVCQRYE5mvpca1ZbsvMujR0/rs:fit:368:368/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNjE5/LzRlZjE1YTgyLTI3/NjYtNDlkNC1hMGE3/LWY4ZjRmNzhjM2M5/NS5wbmc.png"></div>
                <ul>
                    Fish
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Aquariums</a></li>
                    <li><a href="#">Rocks & Decorations</a></li>
                    <button class="btn-outline-light">Shop All<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button>
                </ul>

            </li>
        </ul>
    </section>

    <section>
        <h2>Our Services</h2>

        <ul class="services">
            <li class="card-large card-dark card-wide" id="serv-groom">
                <div class="card-image"><img src="https://ouch-cdn2.icons8.com/T11rfGmMKgcStJyAFKNgtOfE79cadabx0DVMnvzA9Pk/rs:fit:368:313/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNDQx/LzFlYWU4MWY3LWQ1/ZjYtNDM2Ny1hZjM5/LWVmNTFmMGM5Njk4/MS5wbmc.png"></div>
                <ul>
                    Dog Grooming<span class="subtitle">Tail-wagging transformations are our specialty.</span>
                    <li><a href="#">Coat Care</a><span>$80</span></li>
                    <li><a href="#">Nail Care</a><span>$16</span></li>
                    <li><a href="#">Doggie Deluxe Spa Day</a><span>$160</span></li>
                    <button class="btn-filled-dark"><span class="material-symbols-outlined">
                            calendar_month
                        </span>Book Now</button>

                </ul>


            </li>
            <li class="card-large card-dark card-wide" id="serv-board">
                <div class="card-image"><img src="https://ouch-cdn2.icons8.com/F5Ea1suZtMYimKDkJr0CJLO_1bju6-bTyT1EuDKEg8s/rs:fit:368:254/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMjcx/LzVjMzE4NWM0LWZh/NTMtNGQ1OS05ZTM2/LTZjYzBhNGU3ODg0/NC5wbmc.png"></div>
                <ul>
                    Dog Boarding<span class="subtitle">Where fun and care never take a day off.</span>
                    <li><a href="#">Doggie Daycare</a><span>$80</span></li>
                    <li><a href="#">Short Term Boarding</a><span>$80</span></li>
                    <button class="btn-filled-dark"><span class="material-symbols-outlined">
                            calendar_month
                        </span>Book Now</button>
                </ul>

            </li>
        </ul>
    </section>

    <section id="locate">

        <div>
            <h2>Location & Hours</h2>
            <p>Our knowledgeable and friendly staff is always ready to assist you in making the best choices for your furry, feathered, or finned friends.</p>
            <div class="btn-group">
                <button class="btn-filled-dark"><span class="material-symbols-outlined">
pin_drop
</span>Find a Store</button>
                <button class="btn-outline-dark btn-hover-color"><span class="material-symbols-outlined">
contact_support
</span> Contact Us</button>
            </div>
        </div>
    </section>

    <footer>

        <ul>
            Products
            <li><a href="#">Food & Treats</a></li>
            <li><a href="#">Toys</a></li>
            <li><a href="#">Beds & Furniture</a></li>
            <li><a href="#">Outdoor Supplies</a></li>
            <li><a href="#">Clothing</a></li>
            <li><a href="#">Aquariums</a></li>
            <li><a href="#">Rocks & Decorations</a></li>
        </ul>

        <ul>
            Shop by Pet
            <li><a href="#">Dogs</a></li>
            <li><a href="#">Cats</a></li>
            <li><a href="#">Birds</a></li>
            <li><a href="#">Fish</a></li>
        </ul>

        <ul>
            Our Services
            <li><a href="#">Grooming</a></li>
            <li><a href="#">Boarding</a></li>
        </ul>
        <ul>
            Our Company
            <li><a href="#">Locations & Hours</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </footer>
</body>
</html>
