@extends('layouts.app-dashboard')

@section('content')
        <div id="layoutSidenav" style="background-color: #8d99ae">
            @include('layouts.sidemenu-dashboard')
            <div ></div>
            <div id="layoutSidenav_content" style="background-color: #8d99ae">
                <main style="background-color: #8d99ae">
                    <div class="container-fluid pt-5">
                        <div class="container" style="color: #ffba08">
                            <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"  data-aos="fade-right" data-aos-delay="100">Announcement</h3>
                        </div>
                        <div class="container"  data-aos="fade-up" data-aos-delay="300">
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
                                                              <div class="container p-1 mb-2" style="width: 10% height: 20%"><b>{{ $announcement->header }}</b></div>
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
