<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<title>Orbit - {{ $data->title }}</title>

<body class="portfolio-details-page">
    @include('partials.header')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="breadcrumbs">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"><i class="bi bi-house"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('project.index') }}">Project</a>
                        </li>
                        <li class="breadcrumb-item active current">
                            {{ $data->title }}
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="title-wrapper">
                <h1>{{ $data->title }}</h1>
                <p>{{ $data->description }}</p>
            </div>
        </div>

        <!-- Portfolio Details -->
        <section id="portfolio-details" class="portfolio-details section">
            <div class="container">

                <div class="row gy-5">

                    <!-- IMAGE SLIDER -->
                    <div class="col-lg-7">
                        <div class="hero-image-wrapper">

                            <div class="portfolio-slider swiper init-swiper">

                                <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 700,
                                "autoplay": {
                                    "delay": 4000
                                },
                                "slidesPerView": 1,
                                "navigation": {
                                    "nextEl": ".swiper-button-next",
                                    "prevEl": ".swiper-button-prev"
                                }
                            }
                            </script>

                                <div class="swiper-wrapper">

                                    @if ($data->images)
                                        @foreach ($data->images as $img)
                                            <div class="swiper-slide">
                                                <img src="{{ asset('images/' . $img) }}" class="img-fluid">
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="swiper-slide">
                                            <img src="{{ asset('images/' . $data->image) }}" class="img-fluid">
                                        </div>
                                    @endif

                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>

                        </div>
                    </div>

                    <!-- INFO -->
                    <div class="col-lg-5">
                        <div class="project-info-card">

                            <div class="project-category">
                                <span class="dot"></span>
                                <span>{{ $data->category }}</span>
                            </div>

                            <h1 class="project-title">{{ $data->title }}</h1>

                            <p class="project-excerpt">
                                {{ $data->description }}
                            </p>

                            <div class="meta-grid">

                                <div class="meta-item">
                                    <span class="meta-label">Client</span>
                                    <span class="meta-value">{{ $data->client }}</span>
                                </div>

                                <div class="meta-item">
                                    <span class="meta-label">Location</span>
                                    <span class="meta-value">{{ $data->location }}</span>
                                </div>

                                <div class="meta-item">
                                    <span class="meta-label">Date</span>
                                    <span class="meta-value">
                                        @if ($data->end_date)
                                            {{ \Carbon\Carbon::parse($data->end_date)->format('F Y') }}
                                        @else
                                            Ongoing
                                        @endif
                                    </span>
                                </div>

                                <div class="meta-item">
                                    <span class="meta-label">Website</span>
                                    <a href="{{ $data->website ?? '#' }}" class="meta-value meta-link">
                                        {{ $data->website ?? '-' }}
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    @include('partials.footer')

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    @include('partials.scripts')

</body>

</html>
