@extends('layout')

@section('content')
    <section class="page-name background-bg" data-image-src="/assets/images/breadcrumb.jpg">
        <div class="overlay">
            <div class="section-padding">
                <div class="container">
                    <form action="#" class="course-search-form">
                        <input type="text" name="search" id="search" class="search"
                            placeholder="Find a course or tutorial ">
                        <input type="submit" name="submit" id="search-submit" class="sreach-submit">
                    </form><!-- /.course-search-form -->
                </div><!-- /.container -->
            </div><!-- /.section-padding -->
        </div><!-- /.overlay -->
    </section><!-- /.page-name -->




    <section class="courses">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="filters">
                            <div class="row">
                                <div class="col-lg-6">
                                    <select class="filter-select" name="text">
                                        <option value="" selected>All price</option>
                                        <option value="20">Under $20</option>
                                        <option value="40">Under $40</option>
                                        <option value="60">Under $60</option>
                                    </select>

                                    <select class="filter-select" name="text">
                                        <option value="" selected>All type</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <span class="float-left">Sort by:</span>

                                    <select class="filter-select" name="text">
                                        <option value="" selected>Popularity</option>
                                        <option value="paid">Top paid</option>
                                        <option value="free">Top free</option>
                                    </select>

                                    <div class="layout-switcher">
                                        <span class="grid"><i class="fa fa-th"></i></span>
                                        <span class="list"><i class="fa fa-list"></i></span>
                                    </div><!-- /.layout-switcher -->
                                    <p>
                                        Showing 12 of 17
                                    </p>
                                </div>
                            </div>
                        </div><!-- /.filters -->

                        <div class="course-items">
                            <div class="row">
                                @foreach ($courses as $course)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="item">
                                            <div class="item-thumb"><img src="/assets/images/{{$course->image}}" alt="Item Thumbnail">
                                            </div><!-- /.item-thumb -->
                                            <div class="item-details">
                                                <h3 class="item-title"><a href="/courses/{{$course->id}}">
                                                {{$course->title}}    
                                                </a></h3><!-- /.item-title -->
                                                <span class="instructor"><a href="#">
                                                {{ $course->instructor}}    
                                                </a></span><!-- /.instructor -->
                                                <div class="details-bottom">
                                                    <div class="course-price float-left"><span
                                                            class="currency">$</span><span class="price">
                                                             {{$course->price}}   
                                                            </span></div>
                                                           
                                                    <!-- /.course-price -->
                                                    <div class="rating float-right">
                                                        <input type="hidden" class="rating-tooltip-manual"
                                                            data-filled="fas fa-star" data-empty="far fa-star"
                                                            value="4.5" data-fractions="5" />
                                                    </div><!-- /.rating -->
                                                </div><!-- /.details-bottom -->
                                                  <div>{{ $course->category->nom }}</div>
                                            </div><!-- /.item-details -->
                                           
                                        </div><!-- /.item -->
                                    </div>
                                @endforeach

                            </div><!-- /.row -->

                            <nav aria-label="Page navigation example">
                                {{$courses->links()}}
                            </nav>

                        </div><!-- /.course-items -->
                    </div>

                    <div class="col-md-4">
                        <aside class="sidebar">
                            <div class="category-list">
                                <ul>
                                    <li class="active"><a href="{{ route('courses.index')}}">All Courses</a></li>
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('courses.showByCategory', $category->nom)}}">{{$category->nom}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside><!-- /.sidebar -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </section><!-- /.courses -->
@endsection
