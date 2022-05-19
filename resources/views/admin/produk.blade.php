@extends('admin.layout')

@section('content')


  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{route('create')}}" class="btn btn-sm btn-outline-primary">
              <i class="fas fa-plus-circle"></i>
              Tambah Produk</a>
        </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
      </div>
    @endif

    <div class="table-responsive">
      <table  id="example" class="display table-border table" style="width:100%">
        <thead class="table-dark">
          <tr>
            <th>Image</th>
            <th>Model</th>
            <th>nama</th>
            <th>Harga</th>
            <th>Quantity</th>
          </tr>
        </thead>

        @foreach ($produk as $item)
          <tbody>
            <td><img src="{{ asset($item->files )}}" width="50" height="50" alt=""> </td>
            <td>{{$item->model}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->quantity}}</td>
            <td>
              <a href="{{route('edit', $item->id)}}">
                <i class="fad fa-pencil-alt fa-2x" style="color:rgb(17, 110, 218)"></i>
              </a>
            </td>
            <td>
              <a href="{{route('delete', $item->id)}}"><i class="fad fa-trash-alt fa-2x" style="color:red"></i></a>
            </td>
          </tbody>
        @endforeach
      </table>
    </div>
  </main>
@endsection


@push('scripts')
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src=" https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
@endpush