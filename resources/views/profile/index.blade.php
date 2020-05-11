<!--PHP/Laravel 18 課題↓-->
@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="name">
                                <h1>{{ str_limit($headline->name, 40) }}</h1>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="gender">
                                <h1>{{ str_limit($headline->gender, 8) }}</h1>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hobby">
                                <h1>{{ str_limit($headline->hobby, 60) }}</h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="introduction mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-10 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-2">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                             </div>
                             <div class="text col-md-2">
                                <div class="name">
                                    {{ str_limit($post->name, 40) }}
                                </div>
                            </div>
                            <div class="text col-md-1">
                                <div class="gender">
                                    {{ str_limit($post->gender, 6) }}
                                </div>
                            </div>
                            <div class="text col-md-3">
                                <div class="hobby">
                                    {{ str_limit($post->hobby, 60) }}
                                </div>
                            </div>
                            <div class="text col-md-4">
                                <div class="introduction">
                                    {{ str_limit($post->introduction, 650) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
<!--PHP/Laravel 18 ↑-->