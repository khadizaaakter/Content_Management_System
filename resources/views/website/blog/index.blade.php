@extends('layout.website')

@section('content')
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>Blogs</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @foreach ($blog as $it)
                        <div class="post">
                            <div class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{$it->image }}" alt="">
                                </a>
                            </div>
                            <h3 class="post-title"><a href="#">{{ $it->title }}</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <i class="ion-calendar"></i> {{ date('d M Y', strtotime($it->created_at)) }}
                                    </li>
                                    <li>
                                        <i class="ion-android-people"></i> POSTED BY ADMIN
                                    </li> 
                                    

                                </ul>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad
                                    architecto
                                    nostrum
                                    asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto
                                    quibusdam
                                    cumque veniam
                                    fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab
                                    doloremque accusamus
                                    sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing
                                    elit. Quod, facere. </p>
                                <a href="blog-single.html" class="btn btn-main">Read More</a>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach

            <nav aria-label="Page navigation example">
                <ul class="pagination post-pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="blog-grid.html">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="blog-grid.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="blog-grid.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="blog-grid.html">3</a></li>
                    <li class="page-item"><a class="page-link" href="blog-grid.html">Next</a></li>
                </ul>
            </nav>


        </div>

    </div>
@endsection
