@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('product Detail') }}
 </div>
 <div class="card-body">
 id : {{ $product->id }}
 <br>
 product : {{ $product->name }}
 <br>
 unit : {{ $product->unit }}
 <br>
 price : {{ $product->price }}
 <br>
 quantity : {{ $product->quantity }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('product/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection