@extends('admin.layout')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Produk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <div class="row">
        <div class="col-9">
            <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-sm-10">
                    <img src="{{asset($produk->files)}}" class="img-fluid @error('files') is-invalid @enderror" width="433" height="320" id="gambar" alt="">
                    <input type="file" class="form-control" name="files" id="file" style="display: none;">
                    @error('files')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="button" id="pilih" class="btn-secondary">Pilih file</button>
                </div>
                
                <div class="col-sm-12">
                    <div class="row g-3">
                        <div class="col-auto">
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $produk->nama}}" id="inputtext" placeholder="Nama Item: T-Shirt Red" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-auto">
                            <select class="form-select @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" aria-label="Default select example" required>
                                <option value="">Pilih Model</option>
                                <option value="t-shirt">T-Shirt</option>
                                <option value="jersey">Jersey</option>
                                <option value="hoodie">Hoodie</option>
                                <option value="OfficialClothes">Official Clothes</option>
                            </select>
                            @error('model')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $produk->harga}}" id="harga" placeholder="Harga; 50000" required>
                            @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-auto">
                            <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ $produk->quantity}}" id="quantity" placeholder="Quantity: 32" required>
                            @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>
            </form>
        </div>
        <div class="col-3 border border-1 border-primary">
            <div class="row">
                <div class="col-lg-12 bg-primary">
                    <center>
                        <a href="" class="btn btn-primary" disable>Masukkan Data Produk</a>
                    </center>
                </div>
            </div>
            <lottie-player class="img-fluid"  src="https://assets2.lottiefiles.com/packages/lf20_komemhfl.json" background="transparent"  speed="1"  style="width: 260px; height: 260px;" loop autoplay></lottie-player>
            <p class="fst-italic">Lengkapi data sesuai instruksi di form masing-masing.</p>
        </div>
    </div>
</main>

@endsection

@push('scripts')
<script type="text/javascript">
    var tm_pilih = document.getElementById('pilih');
    var file = document.getElementById('file');
    tm_pilih.addEventListener('click', function () {
        file.click();
    })
    file.addEventListener('change', function () {
        gambar(this);
    })

    function gambar(a) {
        if (a.files && a.files[0]) {     
             var reader = new FileReader();    
             reader.onload = function (e) {
                 document.getElementById('gambar').src=e.target.result;
             }    
             reader.readAsDataURL(a.files[0]);
        }

    }
</script>

    <!-- Optional JavaScript; Lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endpush
