@extends('user.layout')

@section('content')
<div class="row justify-content-start">
    
    @include('user.sidebar')

    <div class="col-9">
        <div class="row align-items-start">
            <!-- Looping -->
            @foreach ($data as $item)
                <div class="col-4">
                    <div class="card my-3" style="width: 18rem;">
                        <img src="{{asset($item->files)}}" width="236" height="231" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->nama}}</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="text-nowrap bd-secondary text-uppercase">
                                        {{$item->model}}
                                    </div>
                                    <br>
                                    <div class="col">
                                        <div class="text-nowrap bd-secondary text-uppercase">
                                            Rp. {{number_format($item->harga,0,',','.')}}
                                        </div>
                                    </div>
                                    <div class="col">
                                        <a href="{{route('detail', $item->id)}}" class="btn btn-outline-secondary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 

            <!-- End Looping -->
            {{-- {{ $data->links() }} --}}

        </div>
    </div>
</div>
@endsection
