<div class="col-3">
    <div class="flex-shrink-0 p-3 bg-dark" style="width: 250px; height: 100%;">
        <a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
          <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-5 fw-semibold text-white">PARSIAL</span>
        </a>
        
        <form action="{{route('cari')}}" method="post">

            <ul class="list-group">
                <li class="list-group-item" aria-current="true">
                    <div class="row">
                            @csrf
                            <div class="col-7">
                                <input type="text" name="cari" class="form-control" id="cari" placeholder="Search" required>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-outline-secondary">Submit</button>
                            </div>
                    </div>
                </li>
                <a href="{{route('tshirt')}}" class="list-group-item list-group-item-action">T-Shirt</a>
                <a href="{{route('jersey')}}" class="list-group-item list-group-item-action">Jersey</a>
                <a href="{{route('hoodie')}}" class="list-group-item list-group-item-action">Hoodie</a>
            </ul>
        </form>


        <div class="list-group my-3">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              Filter
            </a>
            <a href="{{route('product')}}" class="list-group-item list-group-item-action">All Products</a>
            <a href="{{route('kuantitas')}}" class="list-group-item list-group-item-action">Highest Quantity</a>
            <a href="{{route('terbaru')}}" class="list-group-item list-group-item-action">Latest Products</a>
            <a href="{{route('terlama')}}" class="list-group-item list-group-item-action">Oldest Products</a>
        </div>

        <form action="{{route('max')}}" method="post">
        @csrf
            <div class="list-group my-3">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Price Search
                </a>
                <div class="row my-2">
                    <div class="col-9">
                        <input type="text" name="max" class="form-control @error('max') is-invalid @enderror" value="{{ old('max') }}" id="inputPassword2" placeholder="Max Price">
                        @error('max')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-outline-secondary">GO</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
