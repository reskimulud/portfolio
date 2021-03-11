<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Personal Portfolio Website</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/font-awesome.css">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/responsive.css">
    <!-- skin color -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/skins/color-1.css">
    <!-- style switcher -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/skins/color-1.css"
        class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/skins/color-2.css"
        class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/skins/color-3.css"
        class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/skins/color-4.css"
        class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/skins/color-5.css"
        class="alternate-style" title="color-5" disabled>

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/style-switcher.css">
</head>

<body>

    <!-- preloader start -->
    <div class="preloader">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <div class="header">
        <div class="container">
            <div class="row justify-content-between">
                <div class="logo">
                    <a href="<?= base_url(); ?>">M</a>
                </div>
                <div class="hamburger-btn outer-shadow hover-in-shadow">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- navigation menu start -->
    <nav class="nav-menu">
        <div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>
        <div class="nav-menu-inner">
            <ul>
                <li><a href="#home" class="link-item inner-shadow active">home</a></li>
                <li><a href="#about" class="link-item outer-shadow hover-in-shadow">about</a></li>
                <li><a href="#services" class="link-item outer-shadow hover-in-shadow">services</a></li>
                <li><a href="#portfolio" class="link-item outer-shadow hover-in-shadow">portfolio</a></li>
                <li><a href="#testimonial" class="link-item outer-shadow hover-in-shadow">testimonial</a></li>
                <li><a href="#contact" class="link-item outer-shadow hover-in-shadow">contact</a></li>
            </ul>
        </div>
        <!-- copyright text -->
        <p class="copyright-text">&copy; 2021 Reski Mulud Muchamad</p>

    </nav>
    <div class="fade-out-effect"></div>
    <!-- navigation menu end -->

    <!-- home section start -->
    <section class="section home-section active" id="home">
        <!-- effect wrap start -->
        <div class="effect-wrap">
            <div class="effect effect-1"></div>
            <div class="effect effect-2">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="effect effect-3"></div>
            <div class="effect effect-4"></div>
            <div class="effect effect-5">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- effect wrap end -->
        <div class="container">
            <div class="row full-screen align-items-center">
                <div class="home-text">
                    <p>Hello</p>
                    <h2>I'm Reski Mulud Muchamad</h2>
                    <h1>Web Developer & Graphic Designer</h1>
                    <a href="#about" class="link-item btn-1 outer-shadow hover-in-shadow">More About Me</a>
                </div>
                <div class="home-img">
                    <div class="img-box inner-shadow">
                        <img src="<?= base_url('assets/'); ?>img/about-pic.png" class="outer-shadow" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->

    <!-- about section start -->
    <section class="about-section section" id="about">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="main info">About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <div class="img-box inner-shadow"><img src="<?= base_url('assets/'); ?>img/about-pic.png" alt=""
                            class="outer-shadow"></div>
                    <!-- social links start -->
                    <div class="social-links">
                        <a href="<?= $about['facebook']; ?>" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-fw fa-facebook-f"></i></a>
                        <a href="<?= $about['twitter']; ?>" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-fw fa-twitter"></i></a>
                        <a href="<?= $about['instagram']; ?>" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-fw fa-instagram"></i></a>
                        <a href="<?= $about['linkedin']; ?>" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-fw fa-linkedin-in"></i></a>
                        <a href="<?= $about['github']; ?>" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-fw fa-github"></i></a>
                        <a href="<?= $about['pinterest']; ?>" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-fw fa-pinterest"></i></a>
                    </div>
                    <!-- social links end -->
                </div>
                <div class="about-info">
                    <?= $about['description']; ?>

                    <p><span>Email</span> : <a href="mailto:<?= $about['email']; ?>"><?= $about['email']; ?></a></p>
                    <p><span>Phone Number</span> : +62<?= $about['telp']; ?></p>

                    <a href="cv.pdf" class="btn-1 outer-shadow hover-in-shadow">Download CV</a>
                    <a href="#contact" class="link-item btn-1 outer-shadow hover-in-shadow">Hire Me</a>
                </div>
            </div>
            <!-- about tabsstart -->
            <div class="row">
                <div class="about-tabs">
                    <span class="tab-item outer-shadow active" data-target=".skills">skills</span>
                    <span class="tab-item" data-target=".experience">experience</span>
                    <span class="tab-item" data-target=".education">education</span>
                </div>
            </div>
            <!-- about tabs end -->

            <!-- skills start -->
            <div class="row">
                <div class="skills tab-content active">
                    <div class="row">
                        <!-- skill start -->
                        <?php foreach ($skills as$skill) : ?>
                        <div class="skill-item">
                            <p><?= $skill['skill']; ?></p>
                            <div class="progress inner-shadow">
                                <div class="progress-bar" style="width: calc(<?= $skill['percentage']; ?>% - 14px);">
                                    <span><?= $skill['percentage']; ?>%</span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- skill end -->
                    </div>
                </div>
            </div>
            <!-- skills endd -->

            <!-- experience start -->
            <div class="row">
                <div class="experience tab-content">
                    <div class="row">
                        <div class="timeline">
                            <div class="row">
                                <!-- timelime item start -->
                                <div class="timeline-item">
                                    <div class="timeline-item-inner outer-shadow">
                                        <i class="fas fa-briefcase icon"></i>
                                        <span>Sep, 2018 - present</span>
                                        <h3>fullstack developer</h3>
                                        <h4>Company name, Indonesia</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque qui
                                            impedit consectetur,
                                            similique accusantium consequatur ducimus cum quam corporis?</p>
                                    </div>
                                </div>
                                <!-- timelime item end -->
                                <!-- timelime item start -->
                                <div class="timeline-item">
                                    <div class="timeline-item-inner outer-shadow">
                                        <i class="fas fa-briefcase icon"></i>
                                        <span>Sep, 2018 - present</span>
                                        <h3>fullstack developer</h3>
                                        <h4>Company name, Indonesia</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque qui
                                            impedit consectetur,
                                            similique accusantium consequatur ducimus cum quam corporis?</p>
                                    </div>
                                </div>
                                <!-- timelime item end -->
                                <!-- timelime item start -->
                                <div class="timeline-item">
                                    <div class="timeline-item-inner outer-shadow">
                                        <i class="fas fa-briefcase icon"></i>
                                        <span>Sep, 2018 - present</span>
                                        <h3>fullstack developer</h3>
                                        <h4>Company name, Indonesia</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque qui
                                            impedit consectetur,
                                            similique accusantium consequatur ducimus cum quam corporis?</p>
                                    </div>
                                </div>
                                <!-- timelime item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- experience end -->

            <!-- education start -->
            <div class="row">
                <div class="education tab-content">
                    <div class="row">
                        <div class="timeline">
                            <div class="row">
                                <!-- timelime item start -->
                                <div class="timeline-item">
                                    <div class="timeline-item-inner outer-shadow">
                                        <i class="fas fa-graduation-cap icon"></i>
                                        <span>Sep, 2018 - present</span>
                                        <h3>fullstack developer</h3>
                                        <h4>Company name, Indonesia</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque qui
                                            impedit consectetur,
                                            similique accusantium consequatur ducimus cum quam corporis?</p>
                                    </div>
                                </div>
                                <!-- timelime item end -->
                                <!-- timelime item start -->
                                <div class="timeline-item">
                                    <div class="timeline-item-inner outer-shadow">
                                        <i class="fas fa-graduation-cap icon"></i>
                                        <span>Sep, 2018 - present</span>
                                        <h3>fullstack developer</h3>
                                        <h4>Company name, Indonesia</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque qui
                                            impedit consectetur,
                                            similique accusantium consequatur ducimus cum quam corporis?</p>
                                    </div>
                                </div>
                                <!-- timelime item end -->
                                <!-- timelime item start -->
                                <div class="timeline-item">
                                    <div class="timeline-item-inner outer-shadow">
                                        <i class="fas fa-graduation-cap icon"></i>
                                        <span>Sep, 2018 - present</span>
                                        <h3>fullstack developer</h3>
                                        <h4>Company name, Indonesia</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque qui
                                            impedit consectetur,
                                            similique accusantium consequatur ducimus cum quam corporis?</p>
                                    </div>
                                </div>
                                <!-- timelime item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- education end -->

        </div>
    </section>
    <!-- about section send -->

    <!-- service section start -->
    <section class="service-section section" id="services">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="Services">What I do</h2>
                </div>
            </div>
            <div class="row">
                <!-- service item start -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Responsive Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, eligendi.</p>
                    </div>
                </div>
                <!-- service item end -->
                <!-- service item start -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Responsive Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, eligendi.</p>
                    </div>
                </div>
                <!-- service item end -->
                <!-- service item start -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Responsive Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, eligendi.</p>
                    </div>
                </div>
                <!-- service item end -->
                <!-- service item start -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Responsive Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, eligendi.</p>
                    </div>
                </div>
                <!-- service item end -->
                <!-- service item start -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Responsive Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, eligendi.</p>
                    </div>
                </div>
                <!-- service item end -->
                <!-- service item start -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Responsive Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, eligendi.</p>
                    </div>
                </div>
                <!-- service item end -->
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- portfolio section start -->
    <section class="portfolio-section section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="portfolio">Lates Works</h3>
                </div>
            </div>
            <!-- portfolio filter start -->
            <div class="row">
                <div class="portfolio-filter">
                    <span class="filter-item outer-shadow active" data-target="all">all</span>
                    <span class="filter-item" data-target="web-application">web application</span>
                    <span class="filter-item" data-target="photoshop">photoshop</span>
                    <span class="filter-item" data-target="mobile-app">mobile app</span>
                    <span class="filter-item" data-target="e-commerce">e commerce</span>
                </div>
            </div>
            <!-- portfolio filter end -->

            <!-- portfolio items start -->
            <div class="row portfolio-items">
                <!-- portfolio item start -->
                <div class="portfolio-item" data-category="web-application">
                    <div class="portfolio-item-inner outer-shadow">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url('assets/'); ?>img/portfolio/thumb/project-1.png" alt="portfolio"
                                data-screenshots="<?= base_url('assets/'); ?>img/portfolio/large/project-1/1.png, <?= base_url('assets/'); ?>img/portfolio/large/project-1/2.png, <?= base_url('assets/'); ?>img/portfolio/large/project-1/3.png, <?= base_url('assets/'); ?>img/portfolio/large/project-1/4.png, <?= base_url('assets/'); ?>img/portfolio/large/project-1/5.png, <?= base_url('assets/'); ?>img/portfolio/large/project-1/6.png">
                            <span class="view-project">view project</span>
                        </div>
                        <p class="portfolio-item-title">personal portfolio</p>

                        <!-- portfolio item details start -->
                        <div class="portfolio-item-details">
                            <div class="row">
                                <div class="description">
                                    <h3>Project Brief :</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem
                                        assumenda aliquid
                                        accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                                </div>
                                <div class="info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>Date <span>2020</span></li>
                                        <li>Client <span>xyz</span></li>
                                        <li>Tools <span>html, css, javascript</span></li>
                                        <li>Web <span><a href="#">www.domain.com</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item details end -->

                    </div>
                </div>
                <!-- portfolio item end -->

                <!-- portfolio item start -->
                <div class="portfolio-item" data-category="web-application">
                    <div class="portfolio-item-inner outer-shadow">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url('assets/'); ?>img/portfolio/thumb/project-2.png" alt="portfolio"
                                data-screenshots="<?= base_url('assets/'); ?>img/portfolio/large/project-2/1.png, <?= base_url('assets/'); ?>img/portfolio/large/project-2/2.png">
                            <span class="view-project">view project</span>
                        </div>
                        <p class="portfolio-item-title">wedding invitation</p>

                        <!-- portfolio item details start -->
                        <div class="portfolio-item-details">
                            <div class="row">
                                <div class="description">
                                    <h3>Project Brief :</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem
                                        assumenda aliquid
                                        accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                                </div>
                                <div class="info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>Date <span>2020</span></li>
                                        <li>Client <span>xyz</span></li>
                                        <li>Tools <span>html, css, javascript</span></li>
                                        <li>Web <span><a href="#">www.domain.com</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item details end -->

                    </div>
                </div>
                <!-- portfolio item end -->

                <!-- portfolio item start -->
                <div class="portfolio-item" data-category="e-commerce">
                    <div class="portfolio-item-inner outer-shadow">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url('assets/'); ?>img/portfolio/thumb/project-3.png" alt="portfolio"
                                data-screenshots="<?= base_url('assets/'); ?>img/portfolio/large/project-3/1.png, <?= base_url('assets/'); ?>img/portfolio/large/project-3/2.png, <?= base_url('assets/'); ?>img/portfolio/large/project-3/3.png, <?= base_url('assets/'); ?>img/portfolio/large/project-3/4.png, <?= base_url('assets/'); ?>img/portfolio/large/project-3/5.png">
                            <span class="view-project">view project</span>
                        </div>
                        <p class="portfolio-item-title">website e-commerce</p>

                        <!-- portfolio item details start -->
                        <div class="portfolio-item-details">
                            <div class="row">
                                <div class="description">
                                    <h3>Project Brief :</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem
                                        assumenda aliquid
                                        accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                                </div>
                                <div class="info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>Date <span>2020</span></li>
                                        <li>Client <span>xyz</span></li>
                                        <li>Tools <span>html, css, javascript</span></li>
                                        <li>Web <span><a href="#">www.domain.com</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item details end -->

                    </div>
                </div>
                <!-- portfolio item end -->

                <!-- portfolio item start -->
                <div class="portfolio-item" data-category="web-application">
                    <div class="portfolio-item-inner outer-shadow">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url('assets/'); ?>img/portfolio/thumb/project-4.png" alt="portfolio"
                                data-screenshots="<?= base_url('assets/'); ?>img/portfolio/large/project-4/1.png">
                            <span class="view-project">view project</span>
                        </div>
                        <p class="portfolio-item-title">phptograper</p>

                        <!-- portfolio item details start -->
                        <div class="portfolio-item-details">
                            <div class="row">
                                <div class="description">
                                    <h3>Project Brief :</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem
                                        assumenda aliquid
                                        accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                                </div>
                                <div class="info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>Date <span>2020</span></li>
                                        <li>Client <span>xyz</span></li>
                                        <li>Tools <span>html, css, javascript</span></li>
                                        <li>Web <span><a href="#">www.domain.com</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item details end -->

                    </div>
                </div>
                <!-- portfolio item end -->

                <!-- portfolio item start -->
                <div class="portfolio-item" data-category="web-application">
                    <div class="portfolio-item-inner outer-shadow">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url('assets/'); ?>img/portfolio/thumb/project-5.png" alt="portfolio"
                                data-screenshots="<?= base_url('assets/'); ?>img/portfolio/large/project-5/1.png">
                            <span class="view-project">view project</span>
                        </div>
                        <p class="portfolio-item-title">fitness</p>

                        <!-- portfolio item details start -->
                        <div class="portfolio-item-details">
                            <div class="row">
                                <div class="description">
                                    <h3>Project Brief :</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem
                                        assumenda aliquid
                                        accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                                </div>
                                <div class="info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>Date <span>2020</span></li>
                                        <li>Client <span>xyz</span></li>
                                        <li>Tools <span>html, css, javascript</span></li>
                                        <li>Web <span><a href="#">www.domain.com</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item details end -->

                    </div>
                </div>
                <!-- portfolio item end -->

                <!-- portfolio item start -->
                <div class="portfolio-item" data-category="web-application">
                    <div class="portfolio-item-inner outer-shadow">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url('assets/'); ?>img/portfolio/thumb/project-6.png" alt="portfolio"
                                data-screenshots="<?= base_url('assets/'); ?>img/portfolio/large/project-6/1.png, <?= base_url('assets/'); ?>img/portfolio/large/project-6/2.png, <?= base_url('assets/'); ?>img/portfolio/large/project-6/3.png">
                            <span class="view-project">view project</span>
                        </div>
                        <p class="portfolio-item-title">quiz</p>

                        <!-- portfolio item details start -->
                        <div class="portfolio-item-details">
                            <div class="row">
                                <div class="description">
                                    <h3>Project Brief :</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem
                                        assumenda aliquid
                                        accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                                </div>
                                <div class="info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>Date <span>2020</span></li>
                                        <li>Client <span>xyz</span></li>
                                        <li>Tools <span>html, css, javascript</span></li>
                                        <li>Web <span><a href="#">www.domain.com</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item details end -->

                    </div>
                </div>
                <!-- portfolio item end -->

                <!-- portfolio item start -->
                <div class="portfolio-item" data-category="mobile-app">
                    <div class="portfolio-item-inner outer-shadow">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url('assets/'); ?>img/portfolio/thumb/project-7.png" alt="portfolio"
                                data-screenshots="<?= base_url('assets/'); ?>img/portfolio/large/project-7/1.png, <?= base_url('assets/'); ?>img/portfolio/large/project-7/2.png">
                            <span class="view-project">view project</span>
                        </div>
                        <p class="portfolio-item-title">mobile apps</p>

                        <!-- portfolio item details start -->
                        <div class="portfolio-item-details">
                            <div class="row">
                                <div class="description">
                                    <h3>Project Brief :</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem
                                        assumenda aliquid
                                        accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                                </div>
                                <div class="info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>Date <span>2020</span></li>
                                        <li>Client <span>xyz</span></li>
                                        <li>Tools <span>html, css, javascript</span></li>
                                        <li>Web <span><a href="#">www.domain.com</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item details end -->

                    </div>
                </div>
                <!-- portfolio item end -->

                <!-- portfolio item start -->
                <div class="portfolio-item" data-category="web-application">
                    <div class="portfolio-item-inner outer-shadow">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url('assets/'); ?>img/portfolio/thumb/project-8.png" alt="portfolio"
                                data-screenshots="<?= base_url('assets/'); ?>img/portfolio/large/project-8/1.png, <?= base_url('assets/'); ?>img/portfolio/large/project-8/2.png">
                            <span class="view-project">view project</span>
                        </div>
                        <p class="portfolio-item-title">portfolio</p>

                        <!-- portfolio item details start -->
                        <div class="portfolio-item-details">
                            <div class="row">
                                <div class="description">
                                    <h3>Project Brief :</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem
                                        assumenda aliquid
                                        accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                                </div>
                                <div class="info">
                                    <h3>Project Info</h3>
                                    <ul>
                                        <li>Date <span>2020</span></li>
                                        <li>Client <span>xyz</span></li>
                                        <li>Tools <span>html, css, javascript</span></li>
                                        <li>Web <span><a href="#">www.domain.com</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio item details end -->

                    </div>
                </div>
                <!-- portfolio item end -->
            </div>
            <!-- portfolio item end -->
        </div>
    </section>
    <!-- portfolio section end -->

    <!-- testimonial section start -->
    <section class="testimonial-section section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="testimonial">Client Speak</h2>
                </div>
            </div>
            <div class="row">
                <div class="testi-box">
                    <div class="testi-slider outer-shadow">
                        <div class="testi-slider-container">
                            <!-- testi item start -->
                            <div class="testi-item active">
                                <i class="fas fa-quote-left left"></i>
                                <i class="fas fa-quote-right right"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere illo accusantium in
                                    repellat vero?
                                    Reprehenderit?
                                </p>
                                <img src="<?= base_url('assets/'); ?>img/testimonial/1.png" alt="testimonial">
                                <span>reski</span>
                            </div>
                            <!-- testi item end -->
                            <!-- testi item start -->
                            <div class="testi-item">
                                <i class="fas fa-quote-left left"></i>
                                <i class="fas fa-quote-right right"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere illo accusantium in
                                    repellat vero?
                                    Reprehenderit?
                                </p>
                                <img src="<?= base_url('assets/'); ?>img/testimonial/1.png" alt="testimonial">
                                <span>Seseorang</span>
                            </div>
                            <!-- testi item end -->
                            <!-- testi item start -->
                            <div class="testi-item">
                                <i class="fas fa-quote-left left"></i>
                                <i class="fas fa-quote-right right"></i>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere illo accusantium in
                                    repellat vero?
                                    Reprehenderit?
                                </p>
                                <img src="<?= base_url('assets/'); ?>img/testimonial/1.png" alt="testimonial">
                                <span>mulud</span>
                            </div>
                            <!-- testi item end -->
                        </div>
                    </div>
                    <div class="testi-slider-nav">
                        <span class="prev outer-shadow hover-in-shadow"><i class="fa fa-angle-left"
                                aria-hidden="true"></i></span>
                        <span class="next outer-shadow hover-in-shadow"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- contact section start -->
    <section class="contact-section section" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="contact">Get In Touch</h2>
                </div>
            </div>
            <div class="row">
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-phone"></i>
                        <span>phone</span>
                        <p>+62<?= $about['telp']; ?></p>
                    </div>
                </div>
                <!-- contact item end -->
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-envelope"></i>
                        <span>email</span>
                        <p><?= $about['email']; ?></p>
                    </div>
                </div>
                <!-- contact item end -->
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>address</span>
                        <p><?= $about['address']; ?></p>
                    </div>
                </div>
                <!-- contact item end -->
            </div>
            <div class="row">
                <div class="contact-form">
                    <form action="">
                        <div class="row">
                            <div class="w-50">
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input type="text" placeholder="Name" class="input-control">
                                </div>
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input type="text" placeholder="Email" class="input-control">
                                </div>
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input type="text" placeholder="Subject" class="input-control">
                                </div>
                            </div>
                            <div class="w-50">
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <textarea name="" id="" class="input-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="submit-btn">
                                <button type="submit" class="btn-1 outer-shadow hover-in-shadow">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->

    <!-- portfolio popup start -->
    <div class="portfolio-popup">
        <div class="pp-details">
            <div class="pp-details-inner">
                <div class="pp-title">
                    <h2>Personal Portfolio</h2>
                    <p>Category - <span class="pp-project-category">Web Aplication</span></p>
                </div>
                <div class="pp-project-details">
                    <div class="row">
                        <div class="description">
                            <h3>Project Brief :</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem assumenda
                                aliquid
                                accusantium exercitationem dolores tempore est ipsa perferendis explicabo!</p>
                        </div>
                        <div class="info">
                            <h3>Project Info</h3>
                            <ul>
                                <li>Date <span>2020</span></li>
                                <li>Client <span>xyz</span></li>
                                <li>Tools <span>html, css, javascript</span></li>
                                <li>Web <span><a href="#">www.domain.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator"></div>

        <div class="pp-main">
            <div class="pp-main-inner">
                <div class="pp-project-details-btn outer-shadow hover-in-shadow">
                    Project Details <i class="fas fa-plus" style="margin-left: 5px;"></i>
                </div>
                <div class="pp-close outer-shadow hover-in-shadow">&times;</div>
                <img src="<?= base_url('assets/'); ?>img/portfolio/large/project-1/1.png" alt=""
                    class="pp-img outer-shadow">
                <div class="pp-counter">1 of 6</div>
            </div>
            <!-- preloader -->
            <div class="pp-loader">
                <img src="<?= base_url('assets/'); ?>img/preloader.gif" alt="">
            </div>
            <!-- pp navigation -->
            <div class="pp-prev"><i class="fas fa-play"></i></div>
            <div class="pp-next"><i class="fas fa-play"></i></div>
        </div>
    </div>
    <!-- portfolio popup end -->

    <!-- style switcher start -->
    <div class="style-switcher outer-shadow">
        <div class="style-switcher-toggler s-icon outer-shadow hover-in-shadow">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon outer-shadow hover-in-shadow">
            <i class="fas "></i>
        </div>

        <h4>Themes Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- style switcher end -->

    <!-- main js -->
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>
    <!-- style switcher js -->
    <script src="<?= base_url('assets/'); ?>js/style-switcher.js"></script>
</body>

</html>