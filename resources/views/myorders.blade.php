@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="popular-wrapper">
            <h4>My Orders</h4>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-divider ">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="popular-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h3>Product Name: {{$item->name}}</h3>
                      <h4>Price of Product: {{$item->price}}</h4>
                      <h4>Delivery Status: {{$item->status}}</h4>
                      <h4>Address: {{$item->address}}</h4>
                      <h4>Payment Method: {{$item->payment_method}}</h4>
                    </div>
             </div>
            </div>
            @endforeach
          </div>
      </div>
@endsection 