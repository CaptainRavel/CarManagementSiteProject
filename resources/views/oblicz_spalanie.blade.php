@extends('layouts.app')
@section('content')

<div class="container">
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->

            <div class="row gx-2 gx-lg-5 align-items-center my-5">
                <div class="col-lg-6"><img class="img-fluid rounded mb-4 mb-lg-0" <img src="{{ URL::to('/img/spalanie.jpg') }}"></div>
                <div class="col-lg-6">


                  <!--<div class="row gx-4 gx-lg-5 align-items-center my-5"> -->
                      <div class="col-lg-9">
                          <h1 class="text-center">Oblicz spalanie</h1>
                                <div class="form-group row">
                                    <label  class="pb-3 col-md-4 col-form-label text-md-right">Litry</label>
                                      <div class="col-md-6">
                                        <input id="p" type="text" class="form-control @error('email') is-invalid @enderror"required="required" autofocus>
                                      </div>
                                </div>
                                <div class="form-group row">
                                    <label class="pb-3 col-md-4 col-form-label text-md-right">KM</label>
                                      <div class="col-md-6">
                                        <input id="d" type="text" class="form-control @error('email') is-invalid @enderror"required="required" autofocus>
                                      </div>
                                </div>
                                <div class="row"><input type="submit" value="Oblicz" onclick="spalanie()" class= "btn btn-primary text-light d-flex justify-content-center font-weight-bold"></div>
                              </p><label class="col-lg-9 text-center strong font-weight-bold"><p id="w"></label>

                        </div>




                <!--  </div> -->

              </div>
            <!-- Call to Action-->
          </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

@endsection
