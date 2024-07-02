@extends('layout')
@section('content')

<section>
    <div class="section-padding">
        <div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{$course->title}}
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <img src="" alt="">
                        <div>
                            <ul>
                                <li>{{ $course->description}}</li>
                                <li>{{ $course->price}}</li>
                                <li>formateur: {{$course->instructor->email }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>
@endsection