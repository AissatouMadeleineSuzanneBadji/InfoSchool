@extends('layout')
@section("contenu_page")


    <section class="site-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme home-slider">
                        <div>
                            <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url{{asset('images/img_1.jpg')}}; ">
                                <div class="text half-to-full">
                                    <span class="category mb-5">Food</span>
                                    <div class="post-meta">

                                        <span class="author mr-2"><img src="{{asset('images/infoschool.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                                    </div>
                                    <h3>How to Find the Video Games of Your Youth</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url{{asset('images/img_2.jpg')}}; ">
                                <div class="text half-to-full">
                                    <span class="category mb-5">Travel</span>
                                    <div class="post-meta">


                                    </div>
                                    <h3>How to Find the Video Games of Your Youth</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url{{asset('images/infoschool.jpg')}}; ">
                                <div class="text half-to-full">
                                    <span class="category mb-5">Sports</span>
                                    <div class="post-meta">

                                        <span class="author mr-2"><img src="{{assert('images/infoschool.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                                    </div>
                                    <h3>How to Find the Video Games of Your Youth</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </section>
    <!-- END section -->

    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Les Nouvelles</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                       @foreach($articles as $article)
                            <div class="col-md-6">
                                <a href="blog-single.html" class="blog-entry" data-animate-effect="fadeIn">
                                    <img src="{{asset('images/inovation à UGB.jpg')}}" alt="Image placeholder">
                                    <div class="blog-content-body">
                                        <div class="post-meta">
                                            <span class="author mr-2"><img src="{{asset('images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                            <span class="mr-2">March 15, 2018 </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                        </div>
                                        <h2>Innovation : une étudiante de l’IPSL réalise un banc de test moteur pour des hélicoptères de combat de l’Armée de l’Air sénégalaise</h2>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6">
                                <a href="blog-single.html" class="blog-entry" data-animate-effect="fadeIn">
                                    <img src="{{asset('images/infoschool.jpg')}}" alt="Image placeholder">
                                    <div class="blog-content-body">
                                        <div class="post-meta">
                                            <span class="author mr-2"><img src="{{asset('images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                            <span class="mr-2">March 15, 2018 </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                        </div>
                                        <h2>Publication : le Docteur Nalla Socé FALL sort un ouvrage intitulé « Histoire de la préparation olympique: le secret des vainqueurs »</h2>
                                    </div>
                                </a>
                            </div>


                        @endforeach
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12 text-center">
                            <nav aria-label="Page navigation" class="text-center">

                            </nav>
                        </div>
                    </div>



                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>

                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="{{asset('images/person_1.jpg')}}" alt="Image Placeholder" class="img-fluid">
                            <div class="bio-body">
                                <h2>David Craig</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                                <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                                <p class="social">
                                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Articles Récents</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{asset('images/img_2.jpg')}}" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>How to Find the Video Games of Your Youth</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('images/img_4.jpg')}}" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>How to Find the Video Games of Your Youth</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('images/img_12.jpg')}}" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>How to Find the Video Games of Your Youth</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Nos Catégories</h3>
                        <ul class="Actualité">
                            <li><a href="#">Etude <span>(1)</span></a></li>
                            <li><a href="#">Sport <span>(2)</span></a></li>
                            <li><a href="#">Activité socio-culturel <span>(3)</span></a></li>
                            <li><a href="#">Bourse <span>(4)</span></a></li>
                            <li><a href="#">Examen/Concour <span>(5)</span></a></li>
                        </ul>



                    </div>


                    <!-- END sidebar -->
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>

@endsection
