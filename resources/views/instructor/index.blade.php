@extends('layout')

@section('content')
<section class="page-name background-bg" data-image-src="/assets/images/breadcrumb.jpg">
    <div class="overlay">
        <div class="section-padding">
            <div class="container">
                <h2 class="section-title">Instructors</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Instructors</li>
                    </ol>
                </nav>
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </div><!-- /.overlay -->
</section><!-- /.page-name -->





<section class="instructors text-center">
    <div class="section-padding">
        <div class="container">
            <div class="row">

                @foreach($users as $user)
                    
               
                <div class="col-md-3 col-sm-6">
                    <div class="instructor">
                        <div class="avatar radius"><img src="/assets/images/speakers/{{$user->image}}" alt="Avatar Image">
                        </div><!-- /.avatar -->
                        <div class="instructor-details">
                            <h3 class="name"><a href="{{ route('instructors.show', $user->id)}}">{{$user->name}}</a></h3><!-- /.name -->
                            <span class="designation">Web Designer</span><!-- /.designation -->
                        </div><!-- /.instructor-details -->
                    </div><!-- /.instructor -->
                </div>

               @endforeach
          
            </div><!-- /.row -->
{{$users->links()}}
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.instructors -->
@endsection