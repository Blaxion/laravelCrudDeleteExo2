@extends('layout.index')
@section('main')
<div class="container w-25 mt-5 d-flex justify-content-center flex-column ">
    <button type="button" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        All Cars
    </button>
    @include('partial.cars')

    <button type="button" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        Cheap Cars
    </button>
    @include('partial.cheapcars')

    <button type="button" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal3">
        Expensive Cars
    </button>
    @include('partial.expensivecars')

    <button type="button" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal4">
        Promo Cars
    </button>
    @include('partial.promocars')
</div>
@endsection
