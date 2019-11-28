@extends('layout')
@section("contenu_page")
      
<section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="owl-carousel owl-theme home-slider">
                <div>
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_1.jpg'); ">
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
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_2.jpg'); ">
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
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('infoschool.jpg'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5">Sports</span>
                      <div class="post-meta">
                        
                        <span class="author mr-2"><img src="infoschool.jpg" alt="Colorlib"> Colorlib</span>&bullet;
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
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('images/infoschool.jpg.jpg')}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>How to Find the Video Games of Your Youth</h2>
                    </div>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('images/img_6.jpg')}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('images/infoschool.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>How to Find the Video Games of Your Youth</h2>
                    </div>
                  </a>
                </div>

                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('images/img_7.jpg')}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="infoschool.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>How to Find the Video Games of Your Youth</h2>
                    </div>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('images/img_8.jpg')}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>How to Find the Video Games of Your Youth</h2>
                    </div>
                  </a>
                </div>

                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{('images/img_9.jpg')}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{('images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>How to Find the Video Games of Your Youth</h2>
                    </div>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('images/img_10.jpg')}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>How to Find the Video Games of Your Youth</h2>
                    </div>
                  </a>
                </div>

                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('images/img_11.jpg')}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>How to Find the Video Games of Your Youth</h2>
                    </div>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('images/img_12.jpg')}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{('images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>How to Find the Video Games of Your Youth</h2>
                    </div>
                  </a>
                </div>
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
                <h3 class="heading">Popular Posts</h3>
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
                <h3 class="heading">Categories</h3>
                <ul class="categories">
                  <li><a href="#">Food <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(22)</span></a></li>
                  <li><a href="#">Lifestyle <span>(37)</span></a></li>
                  <li><a href="#">Business <span>(42)</span></a></li>
                  <li><a href="#">Adventure <span>(14)</span></a></li>
                </ul>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
                  <li><a href="#">Travel</a></li>
                  <li><a href="#">Adventure</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Lifestyle</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Freelancing</a></li>
                  <li><a href="#">Travel</a></li>
                  <li><a href="#">Adventure</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Lifestyle</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Freelancing</a></li>
                </ul>
              </div>
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>
      @endsection