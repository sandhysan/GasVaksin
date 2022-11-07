@extends('user.master')

@section('konten')


<!-- Blog -->
<div id="informasi" class="page-section">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="subhead">Our Blog</div>
            <h2 class="title-section">Informasi Tentang Vaksin</h2>
            <div class="divider mx-auto"></div>
        </div>

        <div class="row mt-5">
            @foreach ($blogs as $item)
        <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="card-blog">
                <div class="header">
                    <div class="post-thumb">
                        <img src="../assets/img/sinovac.jpg" alt="">
                    </div>
                </div>
                <div class="body">
                    <h5 class="post-title"><a href="{{ route('informasi', ['id'=>$item->id]) }}">{{ $item->judul }}</a></h5>
                    <div class="post-date">Posted on {{ $item->created_at->isoFormat('d-m-Y') }}</a></div>
                    <div class="post-date">By {{ $item->user->nama }}</a></div>
                </div>
            </div>
        </div>

        @endforeach
        <div class="col-12 mt-4 text-center wow fadeInUp">
            <a href="blog.html" class="btn btn-vaksin">View More</a>
        </div>
    </div>

    </div>
  </div>

@endsection
