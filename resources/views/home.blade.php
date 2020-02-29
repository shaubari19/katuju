@extends('layouts.app')

@section('title', 'Dashboard')

@section('styles')
@endsection

@section('content')
	<div class="section-header">
            <h1>Katuju.id</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Homepage</div>
            </div>
          </div>

          <div class="section-body">

            <h2 class="section-title">Articles</h2>
            <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="{{ asset('css/img/img13.jpg') }}">
                    </div>
                    <div class="article-badge">
                      <div class="article-badge-item bg-info"><i class="fas fa-fire"></i> Kategori 1</div>
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="{{ asset('css/img/img13.jpg') }}">
                    </div>
                    <div class="article-badge">
                      <div class="article-badge-item bg-info"><i class="fas fa-fire"></i> Kategori 2</div>
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="{{ asset('css/img/img13.jpg') }}">
                    </div>
                    <div class="article-badge">
                      <div class="article-badge-item bg-info"><i class="fas fa-fire"></i> Kategori 3</div>
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>

@endsection


@section('javascript')
@endsection