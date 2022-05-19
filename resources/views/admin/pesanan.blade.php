@extends('admin.layout')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pesanan</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
            @error('idProduk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('namaPemesan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('namaPemesan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('nomorTelepon')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('size')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('qty')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('status')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus-circle"></i>
              Tambah Pesanan
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Pesanan Pelanggan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="{{route('pesananPost')}}" method="post">
                            @csrf
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama Product</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="idProduk" aria-label="Default select example">
                                                <option selected>Pilih Product</option>
                                                @foreach ($produk as $item)
                                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="namaPemesan" class="col-sm-2 col-form-label">Nama Pemesan</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="namaPemesan" class="form-control" id="namaPemesan">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nomorTelpon" class="col-sm-2 col-form-label">Nomor Telpon</label>
                                        <div class="col-sm-10">
                                        <input type="tel" name="nomorTelepon" class="form-control" id="nomorTelpon">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td></td>
                                                <td class="text-dark">P</td>
                                                <td class="text-dark">L</td>
                                                <td class="text-dark">PL</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">S</td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="L 65" value="L 65">
                                                        <label class="form-check-label" for="L 65">
                                                        65
                                                        </label>
                                                    </div>
                                                    
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="P 46" value="P 46">
                                                        <label class="form-check-label" for="P 46">
                                                            46
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="PL 58" value="PL 58">
                                                        <label class="form-check-label" for="PL 58">
                                                        58
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">M</td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="PL 58" value="PL 58">
                                                        <label class="form-check-label" for="PL 58">
                                                        58
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="48" value="48">
                                                        <label class="form-check-label" for="48">
                                                            48
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="61" value="61">
                                                        <label class="form-check-label" for="61">
                                                            61
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">L</td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="71" value="71">
                                                        <label class="form-check-label" for="71">
                                                            71
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="51" value="51">
                                                        <label class="form-check-label" for="51">
                                                            51
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="63" value="63">
                                                        <label class="form-check-label" for="63">
                                                            63
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">XL</td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="71" value="71">
                                                        <label class="form-check-label" for="71">
                                                            71
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="51" value="51">
                                                        <label class="form-check-label" for="51">
                                                            51
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="63" value="63">
                                                        <label class="form-check-label" for="63">
                                                            63
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">XXL</td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="74" value="74">
                                                        <label class="form-check-label" for="74">
                                                            74
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="57" value="57">
                                                        <label class="form-check-label" for="57">
                                                            57
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-dark">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size" id="67" value="67">
                                                        <label class="form-check-label" for="67">
                                                            67
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                                        <div class="col-sm-10">
                                        <input type="number" name="qty" class="form-control" id="qty">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <select class="form-select" name="status" aria-label="Default select example">
                                            <option value="" selected>Status Pesanan</option>
                                            <option value="Belum Bayar">Belum Bayar</option>
                                            <option value="Dikemas">Dikemas</option>
                                            <option value="Dikirim">Dikirim</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
      </svg>
       <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                {{ $message }}
            </div>
        </div>
    @endif

    <table class="table table-sm">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Id Produk</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Nomor Telpon</th>
              <th scope="col">Size</th>
              <th scope="col">Qty</th>
              <th scope="col">Status</th>
              <th scope="col">Kode Pesanan</th>
              <th scope="col"></th>
            </tr>
        </thead>
        @foreach ($data as $item)
        <tbody>
            <form action="{{route('pesananUpdate', $item->id)}}" method="post">
                @method('patch')
                @csrf
                <tr>
                    <th scope="row">1</th>
                    <td>{{$item->idProduk}}</td>
                    <td>{{$item->namaPemesan}}</td>
                    <td>{{$item->nomorTelepon}}</td>
                    <td>{{$item->size}}</td>
                    <td>{{$item->qty}}</td>
                        <td>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option value="Belum Bayar" {{$item->status === 'Belum Bayar' ? 'selected' : ''}}>Belum Bayar</option>
                                <option value="Dikemas" {{$item->status === 'Dikemas' ? 'selected' : ''}}>Dikemas</option>
                                <option value="Dikirim" {{$item->status === 'Dikirim' ? 'selected' : ''}}>Dikirim</option>
                                <option value="Selesai" {{$item->status === 'Selesai' ? 'selected' : ''}}>Selesai</option>
                            </select>
                        </td>
                        <td>{{$item->kodePesanan}}</td>
                        <td><button type="submit" class="btn btn-primary">Update</button></td>
                    </form>
                </tbody>
            @endforeach
    </table>
</main>
  
@endsection