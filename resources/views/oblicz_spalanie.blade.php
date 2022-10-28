  <script src="{{ asset('js//spalanie.js') }}"> </script>
@extends('layouts.app')
@section('content')

<div class="container">
        <!-- Page Content-->
        
            <!-- Heading Row-->

            <div class="row gx-2 gx-lg-5 align-items-center my-5">
                <div class="col-lg-6"><img class="img-fluid rounded mb-4 mb-lg-0" <img src="{{ URL::to('/img/spalanie.jpg') }}"></div>
                    <div class="card col-lg-6">


                 
                          <h1 class="text-center mr_top">Oblicz spalanie</h1>
                                <div class="form-group row mr_top">
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
                                <div class="card text-center mr_top"><input type="submit" value="Oblicz" onclick="spalanie()" class= "btn btn-primary text-light d-flex justify-content-center font-weight-bold"></div>
                              </p><label class="col-lg-9 text-center strong font-weight-bold"><p id="w"></label>

                     </div>
                     
            </div>
        </div>


        

        

@endsection
