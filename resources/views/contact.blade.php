@extends('layouts.main')

@section('container')
    <div class="bg-contact"></div>
    <div class="gradient-contact"></div>
    <div class="container py-3">
        <section>
            <div class="contact-header justify-content-center">
                <div class="container text-center">
                    <h2 style="font-weight: bold">Contact Us</h2>
                    <p style="margin: 0">Have questions, ideas, or want to collaborate with us? We'd love to hear from you!</p>
                    <p>Whether you're a student, enthusiast, or organization looking to connect, U-Tech is always open to meaningful conversations.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="contact-info" style="padding: 20px;">
                                <div class="contact-info-item d-inline-flex">
                                    <div class="contact-info-icon">
                                        <i class="bi bi-building"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h4><b>Address</b></h4>
                                        <p>Laboratorium RAIoTBE, Universitas Padjadjaran, <br/>
                                            Jl. Raya Jatinangor KM 21 Kecamatan Jatinangor, Sumedang <br/>
                                            45636 <br/>
                                            West Java, Indonesia
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-info-item d-inline-flex">
                                    <div class="contact-info-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h4><b>Email</b></h4>
                                        <a href="mailto:unpad.tech.club24@gmail.com" target="_top" class="text-decoration-none text-dark">
                                            <p>
                                                unpad.tech.club24@gmail.com
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="contact-info-item d-inline-flex">
                                    <div class="contact-info-icon">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h4><b>Instagram</b></h4>
                                        <a href="https://www.instagram.com/unpadtechclub?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-decoration-none text-dark">
                                            <p>
                                                @unpadtechclub
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="contact-info-item d-inline-flex">
                                    <div class="contact-info-icon">
                                        <i class="bi bi-youtube"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h4><b>YouTube</b></h4>
                                        <a href="https://youtube.com/@unpadtechnologyclub?si=GInqBYSOyhSWHAjJ" class="text-decoration-none text-dark">
                                            <p>
                                                Unpad Technology Club
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container" style="border-radius:15px;">
                        <div class="contact-form">
                            <h2>Send Message</h2>
                            <form method="POST" action="mailto:unpad.tech.club24@gmail.com" enctype="multipart/form-data">
                                <div class="input-box">
                                    <input aria-required="" id="name" type="text" required/>
                                    <span>Full Name</span>
                                </div>
                                <br>
                                <div class="input-box">
                                    <input aria-required="" id="email" type="email" required/>
                                    <span>Email</span>
                                </div>
                                <br>
                                <div class="input-box">
                                    <textarea name="comment" required></textarea>
                                    </textarea>
                                    <span>Type your message here</span>
                                </div>
                                <br>
                                <div class="input-box">
                                    <input type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection