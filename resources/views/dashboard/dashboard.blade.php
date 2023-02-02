@extends('layouts.app-dashboard')

@section('content')
        <div id="layoutSidenav" style="background-color: #8d99ae">
            @include('layouts.sidemenu-dashboard')
            <div ></div>
            <div id="layoutSidenav_content" style="background: linear-gradient(0deg, rgba(92,121,182,1) 0%, rgba(17,13,4,1) 100%);">
                <main style="background: linear-gradient(0deg, rgba(92,121,182,1) 0%, rgba(17,13,4,1) 100%);">
                    <div class="container-fluid pt-5">
                        <div class="container" style="color: #ffba08">
                            <div style="display: flex;">
                                @php
                                    $user = Auth::user(); 
                                @endphp
                                <div style="flex: 1;">
                                    <h3 class="float-start" style="display: inline;font-family: Caveat Brush, cursive;text-align: center;font-size: 35px;color: rgb(232, 251, 14); text-shadow: rgb(0, 0, 0) 2px 2px 2px;"  data-aos="fade-right" data-aos-delay="50">WELCOME, {{ $user->name }}!</h3>
                                </div>
                                <div style="flex: 1;">
                                    <img class="float-end" src="{{ asset('assets-homepage/assets/img/gif/bird.gif') }}" class="img-fluid" alt="A description of the GIF" style="display: inline;width: 100px;height: 100px; margin-bottom:-20px;"  data-aos="fade-left" data-aos-delay="100">
                                </div>
                              </div>
                        </div>
                        <div class="container"  data-aos="fade-up" data-aos-delay="150">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="background-color: #9d0208;border-style: inset;height: 65%">
                                  @foreach ($announcements as $announcement)
                                      <div class="carousel-item @if($loop->first) active @endif  mt-5 ml-5">
                                          <div class="row align-items-stretch mb-5" style="margin-top: 3%; margin-bottom:5%">
                                              <div class="col-md-6">
                                                  <div style="margin-left:6%; color: #ffba08">
                                                      <h5>
                                                          <div class="ps-5">
                                                              <!-- Header display announcements-->
                                                              <div class="container p-1 mb-2" style="width: 10% height: 20%"><h2><b>{{ $announcement->header }}</b></h2></div>
                                                          </div>
                                                      </h5>
                                                      <h5>
                                                          <div class="ps-5">
                                                              <!-- sub Header display announcements-->
                                                              <div class="container p-1 mb-2" style="width: 10% height: 20%"><b>{{ $announcement->sub_header }}</b></div>
                                                          </div>
                                                      </h5>
                                                      <div class="mb-md-0 ps-5">
                                                          <!-- description display announcements-->
                                                          <div class="container p-1 mb-2" style="width: 10% height: 20%"><p>{{ $announcement->description }}</p></div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group mb-md-0 me-5" style="width: 8% height: 20%; overflow: hidden">
                                                      <!-- Header display announcements-->
                                                      <div class="container" style="overflow: hidden" >
                                                          <img src="{{ asset('images/' . $announcement->image) }}" style="width: 800px; height:300px;  object-fit:cover; border-style: inset;" class="image-thumbnail" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection
