@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Arizalar</div>
                <div class="card-body">
                    <div class="p-5 text-center">
                        @if(count($applications) > 0)
                        @foreach($applications as $application)
                        <li>{{ $application->mentor_id }} - {{ $application->created_at->format('m/d/Y') }}</li>
                        @endforeach
                        @else
                        <i class="fa fa-file-text fa-2xl" aria-hidden="true"></i>
                        <p class="text-bold">Hozircha ustozlar yo'q</p>
                        <p>Siz hali ustozlarga ariza qoldirmagansiz</p>
                        <a href="btn btn-primary">Ustoz topish</a>
                        @endif
                    </div>
                </div>
                <!-- 
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        {{ auth()->user()->role }}
                        @if(auth()->user()->role === 'student')
                        <div>student</div>
                        @else
                        <div>admin</div>
                        @endif
                    </div> -->
            </div>

            <div class="card mt-3">
                <div class="card-header">Suhbatlar</div>
                <div class="card-body">
                    <div class="p-5 text-center">
                        <i class="fa fa-comments fa-2xl" aria-hidden="true"></i>
                        <p class="text-bold">Hozircha suhbatlar yo'q</p>
                        <p>Siz hali ustozlar bilan suhbat boshlamagansiz</p>
                        <a href="btn btn-primary">Ustoz topish</a>
                    </div>
                </div>
                <!-- 
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ auth()->user()->role }}
                    @if(auth()->user()->role === 'student')
                    <div>student</div>
                    @else
                    <div>admin</div>
                    @endif
                </div> -->
            </div>

            <div class="card mt-3">
                <div class="card-header">Ustozim bo'lishini hohlardim</div>
                <div class="card-body row">
                    <div class="card float-right col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <img class="d-block w-100" src="https://picsum.photos/150?image=641" alt="">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-block">
                                    <!--           <h4 class="card-title">Small card</h4> -->
                                    <p>Copy paste the HTML and CSS.</p>
                                    <p>Change around the content for awsomenes</p>
                                    <br>
                                    <a href="#" class="btn btn-primary btn-sm float-right">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- 
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ auth()->user()->role }}
                    @if(auth()->user()->role === 'student')
                    <div>student</div>
                    @else
                    <div>admin</div>
                    @endif
                </div> -->
            </div>
            <style>
                .cards-wrapper {
                    display: flex;
                    justify-content: center;
                }

                .card img {
                    max-width: 100%;
                    max-height: 100%;
                }

                .card {
                    margin: 0 0.5em;
                    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
                    border: none;
                    border-radius: 0;
                }

                .carousel-inner {
                    padding: 1em;
                }

                .carousel-control-prev,
                .carousel-control-next {
                    background-color: #e1e1e1;
                    width: 5vh;
                    height: 5vh;
                    border-radius: 50%;
                    top: 50%;
                    transform: translateY(-50%);
                }

                @media (min-width: 768px) {
                    .card img {
                        height: 11em;
                    }
                }
            </style>
            <!-- <div class="card mt-3">
                <div class="card-header">Siz uchun tavfsiyalar/div>
                    <div class="card-body">
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                                <div class="card-body">
                                                    <h4 class="card-title">Special title treatment</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="card mt-3">
                <div class="card-header">Ko'p so'raladigan savollar</div>
                <div class="row card-body">
                    <div class="col-md-6">
                        <div>
                            <h4>Bilimly.uz o'zi nima?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed velit numquam nostrum voluptatum nobis aliquam recusandae dignissimos, molestiae quasi quo!</p>
                        </div>
                        <div>
                            <h4>Bilimly.uz o'zi nima?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed velit numquam nostrum voluptatum nobis aliquam recusandae dignissimos, molestiae quasi quo!</p>
                        </div>
                        <div>
                            <h4>Bilimly.uz o'zi nima?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed velit numquam nostrum voluptatum nobis aliquam recusandae dignissimos, molestiae quasi quo!</p>
                        </div>
                        <div>
                            <h4>Bilimly.uz o'zi nima?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed velit numquam nostrum voluptatum nobis aliquam recusandae dignissimos, molestiae quasi quo!</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h4>Bilimly.uz o'zi nima?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed velit numquam nostrum voluptatum nobis aliquam recusandae dignissimos, molestiae quasi quo!</p>
                        </div>
                        <div>
                            <h4>Bilimly.uz o'zi nima?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed velit numquam nostrum voluptatum nobis aliquam recusandae dignissimos, molestiae quasi quo!</p>
                        </div>
                        <div>
                            <h4>Bilimly.uz o'zi nima?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed velit numquam nostrum voluptatum nobis aliquam recusandae dignissimos, molestiae quasi quo!</p>
                        </div>
                        <div>
                            <h4>Bilimly.uz o'zi nima?</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed velit numquam nostrum voluptatum nobis aliquam recusandae dignissimos, molestiae quasi quo!</p>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="/" class="btn btn-secondary">Ko'proq o'qish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection