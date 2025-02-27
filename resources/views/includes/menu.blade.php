<div class="navigation-wrapper">
    <div class="secondary-navigation-wrapper">
        <div class="container">
            <div class="navigation-contact pull-left">Llámanos:  <span class="opacity-70">55-55-55-55-55</span></div>
            <div class="search">
                <div class="input-group">
                    <input type="search" class="form-control" name="search" placeholder="Buscar">
                    <span class="input-group-btn"><button type="submit" id="search-submit" class="btn"><i class="fa fa-search"></i></button></span>
                </div><!-- /.input-group -->
            </div>
            <!--Menu de arriba-->
            <!-- <ul class="secondary-navigation list-unstyled">
                <li><a href="#">Prospective Students</a></li>
                <li><a href="#">Current Students</a></li>
                <li><a href="#">Faculty & Staff</a></li>
                <li><a href="#">Alumni</a></li>
            </ul> -->
        </div>
    </div><!-- /.secondary-navigation -->
    <div class="primary-navigation-wrapper">
        <header class="navbar" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav" id="brand">
                        <a href="index.html"><img src="img/logo.png" alt="brand"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="{{ URL::to('/') }}">Home</a>
                            <!-- <ul class="list-unstyled child-navigation">
                                <li><a href="index.html">Homepage Education</a></li>
                                <li><a href="homepage-courses.html">Homepage Courses</a></li>
                                <li><a href="homepage-events.html">Homepage Events</a></li>
                            </ul> -->
                        </li>
                        <li>
                          <a href="{{route('escuelas')}}">Escuelas</a>
                        </li>
                        <!-- <li>
                            <a href="#" class=" has-child no-link">Courses</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="course-landing-page.html">Course Landing Page</a></li>
                                <li><a href="course-listing.html">Course Listing</a></li>
                                <li><a href="course-listing-images.html">Course Listing with Images</a></li>
                                <li><a href="course-detail-v1.html">Course Detail v1</a></li>
                                <li><a href="course-detail-v2.html">Course Detail v2</a></li>
                                <li><a href="course-detail-v3.html">Course Detail v3</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#" class="has-child no-link">Eventos</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="#">Lista de eventos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html">Nosotros</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <!-- <ul class="list-unstyled child-navigation">
                                <li><a href="blog-listing.html">Blog listing</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul> -->
                        </li>
                        <!-- <li>
                            <a href="#" class="has-child no-link">Pages</a>
                            <ul class="list-unstyled child-navigation">
                                <li><a href="full-width.html">Fullwidth</a></li>
                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="microsite.html">Microsite</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="members.html">Members</a></li>
                                <li><a href="member-detail.html">Member Detail</a></li>
                                <li><a href="register-sign-in.html">Register & Sign In</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="contact-us.html">Contáctanos</a>
                        </li>
                    </ul>
                </nav><!-- /.navbar collapse-->
            </div><!-- /.container -->
        </header><!-- /.navbar -->
    </div><!-- /.primary-navigation -->
    <div class="background">
        <img src="img/background-city.png"  alt="background">
    </div>
</div>
