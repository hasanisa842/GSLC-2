@extends('layouts.header')

@section('body')
<br>

{{-- <div class="container">
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Status</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Product Price</th>
            </tr>
        </thead>

        <tbody>
            
        </tbody>

    </table>
</div> --}}

<div class="d-flex flex-wrap justify-content-center">

    {{-- GET BIKES --}}
    @foreach ($items as $item)
        <div class="card m-4" style="width: 18rem;">
            <div class="card-header">
                {{ $item->itemName }}
            </div>
                <div class="card-body">
                <h5 class="card-title">{{ $item->itemName }}</h5>
                <p class="card-text text-success">{{ $item->itemStatus }}</p>
                <p class="card-text">{{ $item->itemPrice }}</p>
                <p class="card-text">{{ $item->itemQuantity }}</p>
                </div>
        </div>
    @endforeach


</div>

@endsection