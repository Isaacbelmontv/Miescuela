<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('includes.header')
    </head>
    <body class="page-homepage-carousel">
    <!-- Wrapper -->
    <div class="wrapper">
    <!-- Header -->
      @include('includes.menu')
    <!-- end Header -->

    <!-- Page Content -->
    <div id="page-content">
    <!-- Slider -->
    <div id="homepage-carousel">
        <div class="container">
            <div class="homepage-carousel-wrapper">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="image-carousel">
                            <div class="image-carousel-slide"><img src="img/slide-1.jpg" alt=""></div>
                            <div class="image-carousel-slide"><img src="img/slide-2.jpg" alt=""></div>
                            <div class="image-carousel-slide"><img src="img/slide-3.jpg" alt=""></div>
                        </div><!-- /.slider-image -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                        <div class="slider-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>Encuentra tu escuela ideal</h1>
                                    <form id="slider-form" role="form" action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Nombre" type="text" required>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input class="form-control has-dark-background" name="slider-email" id="slider-email" placeholder="Correo" type="email" required>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <select name="slider-study-level" id="slider-study-level" class="has-dark-background">
                                                        <option value="- Not selected -">Nivel educativo</option>
                                                        <option value="preparatoria">Preparatoria</option>
                                                        <option value="universidad">Universidad</option>
                                                    </select>
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-6 -->
                                            <!-- <div class="col-md-6"> -->
                                                <!-- <div class="input-group">
                                                    <select name="slider-course" id="slider-course" class="has-dark-background">
                                                        <option value="- Not selected -">Courses</option>
                                                        <option value="Art and Design">Art and Design</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Science">Science</option>
                                                        <option value="History and Psychology"></option>
                                                    </select>
                                                </div> -->
                                                <!-- /.form-group -->
                                            <!-- </div> -->
                                            <!-- /.col-md-6 -->
                                        </div><!-- /.row -->
                                        <button type="submit" id="slider-submit" class="btn btn-framed pull-right">Enviar</button>
                                        <div id="form-status"></div>
                                    </form>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.slider-content -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
                <div class="background"></div>
            </div><!-- /.slider-wrapper -->
            <div class="slider-inner"></div>
        </div><!-- /.container -->
    </div>
    <!-- end Slider -->

    <!-- News, Events, About -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <section class="news-small" id="news-small">
                        <header>
                            <h2>Noticias</h2>
                        </header>
                        <div class="section-content">
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                                <header><a href="#">U-M School of Public Health, Detroit partners aim to improve air quality in the city</a></header>
                            </article>
                            <!-- <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                                <header><a href="#">At 50, Center for the Education of Women celebrates a wider mission</a></header>
                            </article>
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                                <header><a href="#">Three U-Michigan scientists receive Sloan fellowships</a></header>
                            </article> -->
                        </div><!-- /.section-content -->
                        <a href="" class="read-more stick-to-bottom">Todas las noticias</a>
                    </section><!-- /.news-small -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <section class="events small" id="events-small">
                        <header>
                            <h2>Eventos</h2>
                            <a href="" class="link-calendar">Calendar</a>
                        </header>
                        <div class="section-content">
                            <article class="event nearest">
                                <figure class="date">
                                    <div class="month">jan</div>
                                    <div class="day">18</div>
                                </figure>
                                <aside>
                                    <header>
                                        <a href="event-detail.html">Conservatory Exhibit: The garden of india a country and culture revealed</a>
                                    </header>
                                    <div class="additional-info">Matthaei Botanical Gardens</div>
                                </aside>
                            </article>
                            <!-- <article class="event nearest-second">
                                <figure class="date">
                                    <div class="month">feb</div>
                                    <div class="day">01</div>
                                </figure>
                                <aside>
                                    <header>
                                        <a href="event-detail.html">February Half-Term Activities: Big Stars and Little Secrets </a>
                                    </header>
                                    <div class="additional-info clearfix" >Pitt Rivers and Natural History Museums</div>
                                </aside>
                            </article> -->
                            <!-- <article class="event">
                                <figure class="date">
                                    <div class="month">mar</div>
                                    <div class="day">23</div>
                                </figure>
                                <aside>
                                    <header>
                                        <a href="event-detail.html">The Orchestra of the Age of Enlightenment perform with Music</a>
                                    </header>
                                    <div class="additional-info">Faculty of Music</div>
                                </aside>
                            </article> -->
                        </div><!-- /.section-content -->
                    </section><!-- /.events-small -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-12">
                    <section id="about">
                        <header>
                            <h2>Acerca de  Miescuelaideal</h2>
                        </header>
                        <div class="section-content">
                            <img src="img/students.jpg" alt="" class="add-margin">
                            <p><strong>Welcome o Universo.</strong> Premium HTML Template for schools, universieties and other educational institutes.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet semper tincidunt.
                                Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                            <a href="" class="read-more stick-to-bottom">Leer más</a>
                        </div><!-- /.section-content -->
                    </section><!-- /.about -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end News, Events, About -->

    <!-- Testimonial -->
    <section id="testimonials">
        <div class="block">
            <div class="container">
                <div class="author-carousel">
                    <div class="author">
                        <blockquote>
                            <figure class="author-picture"><img src="img/student-testimonial.jpg" alt=""></figure>
                            <article class="paragraph-wrapper">
                                <div class="inner">
                                    <header>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                        Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.</header>
                                    <footer>Claire Doe</footer>
                                </div>
                            </article>
                        </blockquote>
                    </div><!-- /.author -->
                    <div class="author">
                        <blockquote>
                            <figure class="author-picture"><img src="img/student-testimonial.jpg" alt=""></figure>
                            <article class="paragraph-wrapper">
                                <div class="inner">
                                    <header>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                        Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.</header>
                                    <footer>Claire Doe</footer>
                                </div>
                            </article>
                        </blockquote>
                    </div>
                </div><!-- /.author-carousel -->
            </div><!-- /.container -->
        </div><!-- /.block -->
    </section>
    <!-- end Testimonial -->

    <!-- Academic Life, Campus Life, Newsletter -->
    <div class="block">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4 col-sm-4">
                    <section id="academic-life">
                        <header>
                            <h2>Academic Life & Research</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                <li><a href="#">Programs and Areas</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Graduate & Postdoctoral Programs</a></li>
                                <li><a href="#">Continuing Studies</a></li>
                                <li><a href="#">International Activities</a></li>
                                <li><a href="#">Course Calendars & Listings</a></li>
                            </ul>
                        </div>
                    </section>
                </div> -->

                <!-- <div class="col-md-4 col-sm-4">
                    <section id="campus-life">
                        <header>
                            <h2>Campus Life</h2>
                        </header>
                        <div class="section-content">
                             <ul class="list-links">
                                <li><a href="#">Athletics & Recreation</a></li>
                                <li><a href="#">Clubs & Extra-curricular Activities</a></li>
                                <li><a href="#">Health & Wellness</a></li>
                                <li><a href="#">Housing & Residence</a></li>
                                <li><a href="#">Arts & Culture</a></li>
                                <li><a href="#">Student IT Services</a></li>
                            </ul>
                        </div>
                    </section>
                </div> -->

                <div class="col-md-4 col-sm-4">
                    <section id="newsletter">
                        <header>
                            <h2>Newsletter</h2>
                            <div class="section-content">
                                <div class="newsletter">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Ingresa tú correo">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn"><i class="fa fa-angle-right"></i></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div><!-- /.newsletter -->
                                <!-- <p class="opacity-50">Ut tincidunt, quam in tincidunt vestibulum, turpis ipsum porttitor nisi, et fermentum augue
                                    lit eu neque. In at tempor dolor, sit amet dictum lacus. Praesent porta orci eget laoreet ultrices.
                                </p> -->
                            </div><!-- /.section-content -->
                        </header>
                    </section><!-- /.newsletter -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Academic Life, Campus Life, Newsletter -->

    <!-- Divisions, Connect -->
    <!-- <div class="block">
        <div class="container">
            <div class="block-dark-background">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <section id="division" class="has-dark-background">
                            <header>
                                <h2>Divisions</h2>
                            </header>
                            <div class="section-content">
                                <ul class="list-links">
                                    <li><a href="#">Accounting & Finance</a></li>
                                    <li><a href="#">Advertising & Marketing</a></li>
                                    <li><a href="#">Architecture & Interior</a></li>
                                    <li><a href="#">Arts & Design</a></li>
                                    <li><a href="#">Broadcasting & Journalism</a></li>
                                    <li><a href="#">Business & Management</a></li>
                                    <li><a href="#">Computing & IT</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <section id="connect" class="has-dark-background">
                            <header>
                                <h2>Connect</h2>
                            </header>
                            <div class="connect-block">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active"><a href="#tab-twitter" data-toggle="pill"><i class="fa fa-twitter"></i>Twitter</a></li>
                                            <li><a href="#tab-facebook" data-toggle="pill"><i class="fa fa-facebook"></i>Facebook</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-twitter">
                                            <div class="col-md-3">
                                                <article class="social-post twitter-post">
                                                    <header>15 minutes ago</header>
                                                    <figure><a href="#">@Miescuelaideal</a></figure>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article>
                                            </div>
                                            <div class="col-md-3">
                                                <article class="social-post twitter-post">
                                                    <header>2 hours ago</header>
                                                    <figure><a href="#">@Miescuelaideal</a></figure>
                                                    <p>
                                                        Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis. Nulla eleifend libero mi, at consequat tellus.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article>
                                            </div>
                                            <div class="col-md-3">
                                                <article class="social-post twitter-post">
                                                    <header>February 02, 2014</header>
                                                    <figure><a href="#">@Miescuelaideal</a></figure>
                                                    <p>
                                                        Ut at arcu sed justo laoreet iaculis ut nec leo. Aliquam laoreet orci eu egestas fermentum.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-facebook">
                                            <div class="col-md-3">
                                                <article class="social-post facebook-post">
                                                    <header>30 minutes ago</header>
                                                    <figure><a href="#">@Miescuelaideal</a></figure>
                                                    <p>
                                                        Ut at arcu sed justo laoreet iaculis ut nec leo. Aliquam laoreet orci eu egestas fermentum.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article>
                                            </div>
                                            <div class="col-md-3">
                                                <article class="social-post facebook-post">
                                                    <header>4 days ago</header>
                                                    <figure><a href="#">@Miescuelaideal</a></figure>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article>
                                            </div>
                                            <div class="col-md-3">
                                                <article class="social-post facebook-post">
                                                    <header>One week ago</header>
                                                    <figure><a href="#">@Miescuelaideal</a></figure>
                                                    <p>
                                                        Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis. Nulla eleifend libero mi, at consequat tellus.
                                                        <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                    </p>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end Divisions, Connect -->

    <!-- Our Professors, Gallery -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <section id="our-professors">
                        <header>
                            <h2>Top Universidades</h2>
                        </header>
                        <div class="section-content">
                            <div class="professors">
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="member-detail.html"><img src="img/professor.jpg" alt=""></a></figure>
                                    <aside>
                                        <header>
                                            <a href="member-detail.html">Tecnológico de Monterrey</a>
                                            <div class="divider"></div>
                                            <figure class="professor-description">Licenciaturas e Ingenierías</figure>
                                        </header>
                                        <a href="member-detail.html" class="show-profile">Ver Más</a>
                                    </aside>
                                </article><!-- /.professor-thumbnail -->
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="member-detail.html"><img src="img/professor-02.jpg" alt=""></a></figure>
                                    <aside>
                                        <header>
                                            <a href="member-detail.html">Universidad del Valle de México</a>
                                            <div class="divider"></div>
                                            <figure class="professor-description">Licenciaturas e Ingenierías</figure>
                                        </header>
                                        <a href="member-detail.html" class="show-profile">Ver Más</a>
                                    </aside>
                                </article><!-- /.professor-thumbnail -->
                                <a href="" class="read-more stick-to-bottom">Todas las Universidades</a>
                            </div><!-- /.professors -->
                        </div><!-- /.section-content -->
                    </section><!-- /.our-professors -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-8 col-sm-8">
                    <section id="gallery">
                        <header>
                            <h2>Galeria</h2>
                        </header>
                        <div class="section-content">
                            <ul class="gallery-list">
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-01.jpg" alt=""></a></li>
                                <!-- <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-02.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-03.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-04.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-05.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-06.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-07.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-08.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-09.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-10.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-11.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-12.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-13.jpg" alt=""></a></li>
                                <li><a href="img/gallery-big-image.jpg" class="image-popup"><img src="img/image-14.jpg" alt=""></a></li> -->
                            </ul>
                            <a href="" class="read-more">Go to Gallery</a>
                        </div><!-- /.section-content -->
                    </section><!-- /.gallery -->
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Our Professors, Gallery -->

    <!-- Partners, Make a Donation -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section id="partners">
                        <header>
                            <h2>Universidades</h2>
                        </header>
                        <div class="section-content">
                            <div class="logos">
                                <div class="logo"><a href=""><img src="img/logo-partner-01.png" alt=""></a></div>
                                <!-- <div class="logo"><a href=""><img src="img/logo-partner-02.png" alt=""></a></div>
                                <div class="logo"><a href=""><img src="img/logo-partner-03.png" alt=""></a></div>
                                <div class="logo"><a href=""><img src="img/logo-partner-04.png" alt=""></a></div>
                                <div class="logo"><a href=""><img src="img/logo-partner-05.png" alt=""></a></div> -->
                            </div>
                        </div>
                    </section>
                </div><!-- /.col-md-9 -->
                <!-- <div class="col-md-3 col-sm-3">
                    <section id="donation">
                        <header>
                            <h2>Make a Donation</h2>
                        </header>
                        <div class="section-content">
                            <a href="" class="universal-button">
                                <h3>Support the University of Universo!</h3>
                                <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                            </a>
                        </div>
                    </section>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Partners, Make a Donation -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <footer id="page-footer">
      @include('includes.footer')
    </footer>
    <!-- end Footer -->
    </div>
    <!-- end Wrapper -->
<!--script-->
  @include('includes.scripts')
<!--script-->

    </body>
</html>
