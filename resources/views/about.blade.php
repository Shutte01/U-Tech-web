
@extends('layouts.main')

@section('container')
    <div>
        <div class="gradient-about"></div>
        <img class="bg-image" src="{{ asset('img/bioloid.jpg') }}" alt="Welcome" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover; position: absolute; z-index: -2; top: 0; left: 0;">
        <div id="padding-about-top" class="container">
            <div class="text-center">
                <img src="img/{{ $image }}" alt="U-Tech" class="img-fluid" style="width: 200pt; object-fit: cover" class="align-text-center">
            </div>
            <h1 class="text-center" style="color: #EBEBEB; font-size: 50px">{{ $company }}</h1>
            <div class="text-center">
                <h1 id="about-motto" class="text-center">{{ $motto }}</h1>
            </div>
            <h1 style="text-align: center; margin: auto; color: #EBEBEB; font-size: 12pt">Unpad Technology Club (U-Tech) adalah sebuah organisasi mahasiswa di Universitas Padjadjaran (Unpad) yang memiliki fokus utama dalam mengembangkan berbagai aspek teknologi dan berfokus untuk mengikuti kompetisi-kompetisi di bidang robotik. Berdiri dengan visi untuk menghubungkan dan memfasilitasi mahasiswa Unpad dalam mengembangkan minat, bakat, pengetahuan, dan keterampilan di bidang teknologi, U-Tech bertujuan untuk menciptakan dampak positif di lingkungan sekitar melalui penerapan solusi teknologi yang inovatif.</h1>
        </div>
    </div>
    <div style="padding: 100px; background-color: #3A3A3A"></div>
    <div style="background-color: #3A3A3A">
        <div class="container">
            <div style="padding: 20px;">
            <div class="row py-3">
                <div class="col-md-6" style="border-radius: 20px;">
                    <div class="container" style="background-color: #EBEBEB; border-radius: 20px; height: 250px;">
                        <h3 class="text-center"><b>Visi</b></h3>
                        <p class="text-center">
                            Menjadi wadah bagi mahasiswa Universitas Padjadjaran (Unpad) untuk mengembangkan dan menerapkan minat, bakat, pengetahuan, dan keterampilan di berbagai bidang teknologi melalui kolaborasi dan eksplorasi guna menciptakan dampak positif yang berkelanjutan bagi lingkungan sekitar dan masyarakat secara luas.
                        </p>
                    </div>
                </div>
                <div class="col-md-6" style="border-radius: 20px;">
                    <div class="container" style="background-color: #EBEBEB; border-radius: 20px; height: 250px;">
                        <h3 class="text-center"><b>Misi</b></h3>
                        <div class="container justify-content-center">
                            <p style="text-align: left;">
                                <ol>
                                    <li>Pengembangan Pengetahuan dan Keterampilan Teknologi</li>
                                    <li>Penyaluran Minat, Bakat, dan Ilmu Praktis</li>
                                    <li>Implementasi Teknologi untuk Dampak Positif</li>
                                    <li>Persiapan Mahasiswa untuk Kompetisi Nasional dan Internasional</li>
                                    <li>Prestasi dalam Kompetisi Teknologi</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
