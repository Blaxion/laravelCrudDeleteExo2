@extends('layout.index')
@section('main')
    <div class="container w-25 text-center bg-primary mt-5 rounded py-4">
        <form action="/postcar" method='POST'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Brand</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name='brand' aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Year</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name='year' aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Color</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name='color' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price in €</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name='price' aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Discount in %</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name='discount'
                aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
