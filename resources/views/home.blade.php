@extends('layouts.main')

@section('container')
    <div class="background-welcome-home pb-4">
        <div class="gradient-welcome"></div>
        <img class="bg-image" src="{{ asset('img/welcome.jpg') }}" alt="Welcome" class="img-fluid" style="width: 100%; height: 910px; object-fit: cover; position: absolute; z-index: -3; top: 0px; left: 0; overflow: hidden;">
        <div>
            <div style="padding: 250px;"></div>
            <div class="container text-center border border-3 border-start-0 border-end-0" style="z-index: 2; --bs-border-color: #232D47;">
                <div class="container text-center">
                    <h1 class="pt-4 pb-1" style="color: #232D47; font-size: 45px; font-weight: bold;">Welcome to Unpad Technology Club</h1>
                </div>
                <div class="container text-center">
                    <h4 class="pb-3 pt-1">Empowering Ideas, Unleash Your Tech Potential</h4>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-news-home">
        <div class="container">
            <div class="pt-4">
                <h2 style="color: white;"><b>Latest News</b></h2>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            @if ($posts->count())
                <article>
                    <div class="grid-container-news mt-2 mb-5">
                        <div style="position: relative;">
                            @if ($posts[0]->image)
                                <img src="{{ asset('storage') . '/' . $posts[0]->image }}" alt="{{ $posts[0]->slug }}" class="img-fluid" style="width: 512px; height: 256px; object-fit: cover; border-radius: 15px;">
                            @else
                                <img src="{{ asset('img/bioloid.jpg') }}" alt="{{ $posts[0]->slug }}" style="width: 512px; height: 256px; object-fit: cover; border-radius: 15px; ">
                            @endif
                        </div>
                        <div>
                            <div>
                                <h2>
                                    <a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none text-light">{{ $posts[0]->title }}</a>
                                </h2>
                            </div>
                            <div>
                                <p style="color: white">by <a href="/news?author={{ $posts[0]->author->username }}" class="text-decoration-none text-light">{{ $posts[0]->author->name }}</a> in <a href="/news?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-light">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
                                <p style="color: white">{{ $posts[0]->excerpt }}</p>
                                <a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </article>
            @else
                <p class="text-center fs-4">News not found</p>
            @endif
        </div>
    </div>
    <div class="container-video-home py-5">
        <div class="container">
            <div class="pt-4">
                <h2 style="color: white;"><b>Our Journey</b></h2>
            </div>
        </div>
        <div class="justify-content-center d-flex">
            <video id="myVid" width="100%" height="720" autoplay loop controls muted style="display: block; width: 1280">
                <source src="{{ asset('video/u-tech-vid-recap.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="container-competition-home">
        <div class="container text-center">
            <div class="py-4">
                <h2 style="color: #333333;"><b>Cabang Lomba</b></h2>
            </div>
        </div>
    </div>

    <script src="https://player.vimeo.com/api/player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script>
        // Video play and pause on scroll
        var player = new Vimeo.Player($("#myVid")[0]);

        ScrollTrigger.create({
            trigger: "#myVid", // can be switched to another element id or class
            start: "top 80%", // Adjust as necessary
            end: "bottom 30%", // Adjust as necessary
            //markers: true,  //switch this on to help visulise start and end points
            onEnter: () => {
            player.play();
            player.setMuted(false);
            },
            onLeave: () => {
            player.pause();
            player.setMuted(true);
            },
            onEnterBack: () => {
            player.play();
            player.setMuted(false);
            },
            onLeaveBack: () => {
            player.pause();
            player.setMuted(true);
            }
        });
    </script>
@endsection