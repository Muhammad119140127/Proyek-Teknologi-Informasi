@extends('user.layout')

@section('content')
 <div class="container">
        <center>
            <h1 class="text-white my-3">TRACKING ORDER</h1>
        </center>
    </div>
    <center>
<div class="logo">
    <img src="{{asset('user/assets/img/logo.png')}}" alt="" width="414" height="108">
    
    <form>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="keyword" value="{{$query}}" placeholder="Insert receipt number" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Track</button>
        </div>
    </form>
</center>

    @if(count($pesanan) > 0)
    <table class="table table-success table-striped">
        <tr>
            <th>Nama Produk</th>
            <th>Qty</th>
            <th>Nama Pemesan</th>
            <th>Status</th>
        </tr>
        @foreach($pesanan as $pesan)
        <tr>
        <td>{{$pesan->namaProduk ?? '-'}}</td>
        <td>{{$pesan->qty ?? '-'}}</td>
        <td>{{$pesan->namaPemesan ?? '-'}}</td>
        <td>{{$pesan->status ?? '-'}}</td>
        </tr>
        @endforeach
    </table>
    @endif

    @if($status == 0 && $query != '')
        <div class="alert alert-danger" role="alert">
            Receipt number incorrect
        </div>
    @endif

</div>

@endsection