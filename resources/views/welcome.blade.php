@extends('layout')

@section('content')  
  <section class="course-category">
        <div class="section-padding">
            <div class="container">
                <div class="top-content text-center">
                    <h2 class="section-title">Best categories</h2>
                    <p>Donec rutrum congue leo eget malesuada</p>
                </div><!-- /.top-content -->

                <div class="category-items">
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/1.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-layers"></i><span class="item-title">Design</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/2.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-chemistry"></i><span class="item-title">Development</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/3.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-puzzle"></i><span class="item-title">IT & Software</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/4.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-briefcase"></i><span class="item-title">Business</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/5.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-handbag"></i><span class="item-title">Marketing</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->

                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/6.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-layers"></i><span class="item-title">Lifestyle</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/7.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-chemistry"></i><span class="item-title">Photography</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/8.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-puzzle"></i><span class="item-title">Music</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/9.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-briefcase"></i><span class="item-title">Academics</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                    <div class="item radius text-center">
                        <div class="item-thumb"><img class="radius" src="/assets/images/10.jpg" alt="Item Thumbnail">
                        </div><!-- /.item-thumb -->
                        <div class="item-details">
                            <a href="#">
                                <div class="item-texts">
                                    <i class="icon-handbag"></i><span class="item-title">Language</span>
                                </div><!-- /.item-texts -->
                            </a>
                        </div><!-- /.item-details -->
                    </div><!-- /.item -->
                </div><!-- /.category-items -->

                <div class="btn-container text-center bm8">
                    <a href="#" class="btn btn-lg section-btn">Browse all</a>
                </div>
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </section><!-- /.course-category -->




    <section class="subscribe text-center gray-bg">
        <div class="section-padding">
            <div class="container">
                <h4 class="title">Subscribe Weekly Newsletter</h4>

                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1971 bm8 " method="post" data-id="1971"
                    data-name="Mail Form">
                    <input class="subscribe-email" type="email" id="subscribe-email" name="EMAIL"
                        placeholder="Enter Email Address Here" required="">
                    <input class="subscribe-submit" type="submit" id="subscribe-submit" name="submit"
                        value="Subscribe now">
                </form>
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </section><!-- /.subscribe -->


@endsection