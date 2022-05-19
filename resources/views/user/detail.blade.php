@extends('user.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 bg-secondary">
            <div class="grid" style="row-gap: 0;">
                <div class="g-col-6">
                    <img src="{{asset($data->files)}}" width="370px" height="400px" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>
            <div class="row my-2">
                <div class="col border border-5">
                    <img src="{{asset($data->files)}}" width="100px" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="col border border-5">
                    <img src="{{asset($data->files)}}" width="100px" class="rounded mx-auto d-block" alt="...">
                </div>
                <div class="col border border-5">
                    <img src="{{asset($data->files)}}" width="100px" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>
        </div>
        
        <div class="col-6">
            <h1 class="text-white">{{$data->nama}}</h1>
            <h5 class="text-white">Rp. {{number_format($data->harga,0,',','.')}}</h5>
            <p class="text-white">{{$data->model}}</p>

            <h4 class="text-secondary">Size</h4>

            <table class="table table-bordered">
                <tr>
                    <td></td>
                    <td class="text-white">P</td>
                    <td class="text-white">L</td>
                    <td class="text-white">PL</td>
                </tr>
                <tr>
                    <td class="text-white">S</td>
                    <td class="text-white">65</td>
                    <td class="text-white">46</td>
                    <td class="text-white">58</td>
                </tr>
                <tr>
                    <td class="text-white">M</td>
                    <td class="text-white">68</td>
                    <td class="text-white">48</td>
                    <td class="text-white">61</td>
                </tr>
                <tr>
                    <td class="text-white">L</td>
                    <td class="text-white">oke</td>
                    <td class="text-white">oke</td>
                    <td class="text-white">oke</td>
                </tr>
                <tr>
                    <td class="text-white">XL</td>
                    <td class="text-white">71</td>
                    <td class="text-white">51</td>
                    <td class="text-white">63</td>
                </tr>
                <tr>
                    <td class="text-white">XXL</td>
                    <td class="text-white">76</td>
                    <td class="text-white">57</td>
                    <td class="text-white">67</td>
                </tr>
            </table>
        </div>
        
    </div>

</div>
@endsection