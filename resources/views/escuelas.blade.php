<!DOCTYPE html>

<html lang="en-US">
<head>
  @include('includes.header')
</head>

<body class="page-sub-page page-course-listing">
<!-- Wrapper -->
<div class="wrapper">
  <!-- Header -->
    @include('includes.menu')
  <!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Escuelas</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section class="course-listing" id="courses">
                        <header><h1>Escuelas</h1></header>
                        <!-- <section id="course-search">
                            <div class="search-box">
                                <header><span class="fa fa-search"></span><h2>Find Course for You</h2></header>
                                <form id="course-search-form" role="form" class="form-inline">
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="course-type">Course Type</label>
                                            <select name="course-type" id="course-type">
                                                <option value="">Graphic Design and 3D</option>
                                                <option value="2">History and Psychology</option>
                                                <option value="3">Marketing</option>
                                                <option value="4">Science</option>
                                            </select>


                                        <div class="form-group">
                                            <label for="study-level">Study Level</label>
                                            <select name="study-level" id="study-level">
                                                <option value="">Study Level</option>
                                                <option value="2">Beginner</option>
                                                <option value="3">Advanced</option>
                                                <option value="4">Intermediate</option>
                                                <option value="5">Professional</option>
                                            </select>


                                        <div class="form-group">
                                            <label for="full-text">Full Text</label>
                                            <input name="full-text" id="full-text" placeholder="Enter Keyword" type="text">

                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Webinar
                                        </label>
                                    </div>
                                    <button type="submit" class="btn pull-right">Search</button>
                                </form>
                            </div>
                        </section> -->
                        <section id="course-list">
                            <div class="table-responsive">
                                <table class="table table-hover course-list-table tablesorter">
                                    <thead>
                                    <tr>
                                        <th>Escuela</th>
                                        <th>Nivel educativo</th>
                                        <th class="starts">Estado</th>
                                        <th class="length">Modalidad</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html">Tecnológico de Monterrey</a></th>
                                        <th class="course-category"><a href="#">Universidad</a></th>
                                        <th>México</th>
                                        <th>Semestral</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </section><!-- /.course-listing -->
                    <!-- <div class="center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div> -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Escuelas Recomendadas</h2>
                        </header>
                        <div class="section-content">
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2019</figure>
                                <header><a href="#">Tecnológico</a></header>
                            </article><!-- /article -->
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2019</figure>
                                <header><a href="#">Tecnológico</a></header>
                            </article><!-- /article -->
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2019</figure>
                                <header><a href="#">Tecnológico</a></header>
                            </article><!-- /article -->
                        </div><!-- /.section-content -->
                        <!-- <a href="" class="read-more">All News</a> -->
                    </aside><!-- /.news-small -->
                    <!-- <aside id="archive">
                        <header>
                            <h2>Course Archive</h2>
                            <ul class="list-links">
                                <li><a href="#">February 2014</a></li>
                                <li><a href="#">January 2014</a></li>
                                <li><a href="#">November 2013</a></li>
                                <li><a href="#">October 2013</a></li>
                                <li><a href="#">August 2013</a></li>
                                <li><a href="#">July 2013</a></li>
                                <li><a href="#">June 2013</a></li>
                                <li><a href="#">May 2013</a></li>
                            </ul>
                        </header>
                    </aside> -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
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
