@extends('layouts.app')

@section('content')
<section class="pt-6 bg-600" id="home">
    <div class="container">
        <div class="row align-items-center flex-column">
            <div class="col-md-12 col-lg-6 order-0 order-md-1 text-end">
                <img class="pt-7 pt-md-0 w-100" src="/img/gallery/hero-header.png" width="470" alt="hero-header" />
            </div>
            <div class="col-md-12 col-lg-12 text-md-start text-center py-6">
                <h4 class="fw-bold font-sans-serif">Bilimliroq bo'ling</h4>

                <h1 class="fs-12 fs-xl-7 mb-5"><span id="element"></span>ni o'rganing</h1>
                <div class="text-center">
                    <a class="btn btn-primary me-2" href="#!" role="button">Ro'yhatdan o'tish</a><a class="btn btn-outline-secondary" href="#!" role="button">Ko'proq</a>

                </div>
                <script>
                    var typed = new Typed('#element', {
                        strings: ['<i>Web dasturlash</i>', '<i>Grafik dizayn</i>', '<i>DevOps</i>', '<i>Marketing</i>', '<i>Ma\'lumotlar tahlili</i>', '<i>Psixologiya</i>', '<i>Biznesda boshqaruv</i>', '<i>Startup yaratish</i> ', '<i>Backend</i> ', '<i>Sotuv</i> '],
                        typeSpeed: 50,
                        loop: true
                    });
                </script>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- <section> begin ============================-->
<!-- <section class="py-0" style="margin-top:-5.8rem">

    <div class="container">
        <div class="row">
            <div class="card card-span bg-secondary">
                <div class="card-body">
                    <div class="row flex-center gx-0">
                        <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="/img/gallery/funfacts.png" width="170" alt="..." /></div>
                        <div class="col-lg-8 col-xl-4">
                            <h1 class="text-light fs-lg-4 fs-xl-5">Upcoming Our <span class="text-primary">Basic in Python </span>Course!</h1>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <h1 class="display-1 text-light text-center text-xl-end">11 : 02 : 45 : 21</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> -->
<!-- <section> close ============================-->
<!-- ============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

    <div class="container">
        <div class="row">
            <h1 class="text-center mb-5">Mentorlar</h1>
            @foreach ($mentors as $mentor)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($mentor->avatar)
                    @if (strpos($mentor->avatar, 'http') !== false)
                    <img class="card-img-top w-100" src="{{ $mentor->avatar }}" alt="{{ $mentor->name }}">
                    @else
                    <img class="card-img-top w-100" src="{{ asset('storage/' . $mentor->avatar) }}" alt="{{ $mentor->name }}">
                    @endif
                    @else
                    <img class="card-img-top w-100" src="/img/gallery/user.jpg" alt="{{ $mentor->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">{{ $mentor->name }}</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="{{ route('mentor.show', ['id' => $mentor->id]) }}">The Museum of Modern Art</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4 mb-5"><img src="/img/gallery/cta.png" width="280" alt="cta" /></div>
            <div class="col-md-6 col-lg-5">
                <h5 class="text-primary font-sans-serif fw-bold">Subscrible now</h5>
                <h1 class="mb-5">Get every single<br />update you will get</h1>
                <form class="row g-0 align-items-center">
                    <div class="col">
                        <div class="input-group-icon">
                            <input class="form-control form-little-squirrel-control" type="email" placeholder="Enter email " aria-label="email" /><i class="fas fa-envelope input-box-icon"></i>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary rounded-0" type="submit">Subscribe now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->
@endsection