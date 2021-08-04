@extends('layouts.app')
@section('title' , 'صفحه اصلی وبلاگ ایمان')
    @section('css')
        <link rel="stylesheet" href="css/index.css">
    @endsection
@section('content')

    <div class="index-main">
        <section class="posts">
            <div class="posts-padding">



                    {{-- @foreach($posts as $item) --}}
                    <a href="{{ route('post') }}">
                        <div class="index-post">
                            <div class="main-image">
                                <img src="/images/posts/future.jpg" alt="">
                            </div>

                            <div class="title-post">
                                <p>
                                    عنوان مطلب
                                </p>
                            </div>

                            <div class="index-line"></div>

                            <div class="description">
                                <p>
                                    توضیح کوتای درباره مطلب
                                </p>
                            </div>

                        </div>
                    </a>

                {{-- @endforeach --}}


            </div>
        </section>
    </div>
{{-- @endsection --}}


@endsection
