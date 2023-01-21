<div class="section" id="announcement">
  <div class="container-fluid bg-dark">
      <div class="container text-warning">
          <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"  data-aos="fade-right" data-aos-delay="100">Announcement</h3>
      </div>
      <div class="container"  data-aos="fade-up" data-aos-delay="300">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" style="background-image: url('assets-homepage/assets/img/announcement/announcement3.jpg'); height: 65%">
                @foreach ($announcements as $announcement)
                    <div class="carousel-item @if($loop->first) active @endif  mt-5 ml-5">
                        <div class="row align-items-stretch mb-5" style="margin-top: 3%; margin-bottom:5%">
                            <div class="col-md-6">
                                <div class="ps-5">
                                    <!-- Header display announcements-->
                                    <label for="" class="m-auto p-1 mb-2 bg-danger text-white"><b>HEADER:</b></label>
                                    <div class="container border border-1 border-primary p-1 mb-2 bg-light text-dark" style="width: 10% height: 20%"><b>{{ $announcement->header }}</b></div>
                                </div>
                                <div class="ps-5">
                                    <!-- sub Header display announcements-->
                                    <label for="" class="m-auto p-1 mb-2 bg-danger text-white"><b>SUB HEADER:</b></label>
                                    <div class="container border border-1 border-primary p-1 mb-2 bg-light text-dark" style="width: 10% height: 20%"><b>{{ $announcement->sub_header }}</b></div>
                                </div>
                                <div class="mb-md-0 ps-5">
                                    <!-- description display announcements-->
                                    <label for="" class="m-auto p-1 mb-2 bg-danger text-white"><b>DESCRIPTION:</b></label>
                                    <div class="container border border-1 border-primary p-1 mb-2 bg-light text-dark" style="width: 10% height: 20%"><b>{{ $announcement->description }}</b></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-md-0 me-5" style="width: 8% height: 20%; overflow: hidden">
                                    <!-- Header display announcements-->
                                    <div class="container border border-1 border-primary" style="overflow: hidden" >
                                        <img src="{{ asset('images/' . $announcement->image) }}" style="width: 100%; height:100%;  object-fit:cover" class="image-thumbnail" alt="">
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
</div>