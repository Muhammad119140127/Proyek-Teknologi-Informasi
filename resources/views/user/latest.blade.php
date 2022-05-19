@extends('user.layout')

@section('content')
<div class="container">
    <center>
        <h1 class="text-white my-3">LATEST PROJECTS</h1>
    </center>
    <div class="row gx-5">
        <div class="col">
         <div class="p-3 border bg-light">
            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <center>
                    <img src="{{asset('user/assets/img/project1.png') }}" alt="">
                
                <div class="card-body">
                    <h5 class="card-title fw-bolder text-center">PODOMORO GROUP</h5>
                    <p class="card-text text-center text-dark">Projek ini telah selesai pada bulan november 2019. Projek ini menjadi projek pertama parsial di pulau timur Indonesia</p>
                </div>
            </center>
            </div>
         </div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">
            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <center>
                    <img src="{{asset('user/assets/img/project2.png') }}" alt="">
                
                    <div class="card-body">
                    <h5 class="card-title fw-bolder text-center">CITRA LAND</h5>
                    <p class="card-text text-center text-dark">Projek ini telah selesai pada bulan november 2019. Projek ini menjadi projek pertama parsial di pulau timur Indonesia</p>
                  </div>
                </center>
            </div>
      
          </div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">
              
            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <center>
                    <img src="{{asset('user/assets/img/project3.png') }}" alt="">
                <div class="card-body">
                    <center>
                    <h5 class="card-title fw-bolder text-center">ARMUH PROJECT</h5>
                    <p class="card-text text-center text-dark">Projek ini telah selesai pada bulan november 2019. Projek ini menjadi projek pertama parsial di pulau timur Indonesia.</p>
                </center></div>
            </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="nav justify-content-end">
        <h4 class="text-white">ONGOING PROJECT <i class="far fa-angle-right"></i></h4>
    </div>
</div>
@endsection
