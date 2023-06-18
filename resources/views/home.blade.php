@extends('layouts.mainlayaouts')
@section('title', 'Home')

@section('contect')
<div class="container mt-3">
    <hr>
    <div class="d-flex justify-content-center py-2 px-4 bg-light rounded-3 border text-center">
        <div class="bi bi-rocket-takeoff me-3 fs-1"></div>
        <h4 class="mt-3 text-center">Welcome to my website!</h4>
    </div>
    <div class="row d-flex justify-content-center mt-2  align-items-center h-100">
        <div class="col col-lg-12 mb-4 mb-lg-0">
            <div class="card mb-2" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white"
                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="{{ asset('gambar')}}/foto.jpg" class="img-fluid my-5"
                            style="height:300px" alt="">
                        <h5 class="text-dark">Daniel Christian Winoto</h5>
                        <p class="text-dark">ITTelkom Surabaya Student</p>
                        <i class="far fa-edit mb-5"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h6>About me</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>NIM</h6>
                                    <p class="text-muted">124200072</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Email</h6>
                                    <p class="text-muted">danielchrist@gmail.com</p>
                                </div>
                            </div>
                            <h6>Pengalaman</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Recent</h6>
                                    <p class="text-muted"> - Fullobster IOT</p>
                                    <p class="text-muted"> - Website Perpustakaan</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Most Viewed</h6>
                                    <p class="text-muted">Dolor sit amet</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
