<?php
$title='Catalog';
?>
@extends('personal.masteradmin')

@section('content')
@if ($query==NULL)
<section class="content">
  <h1>
    NO DATA
    <small>Belum terdapat katalog produk</small>
  </h1>
</section>
@else
<ul class="cardds">
    @foreach ($query as $data)
      <li class="cardd">
        <div class="cardd__inner">
          <h2>{{$data->product_name}} <small>Product Name</small></h2>
          <div class="cardd__buttons">
            <a href="#">Edit</a>
            <a href="#">Delete</a>
          </div>
        </div>
        <ul class="cardd__icons">
          
        </ul>
        <h3>{{$data->product_price}}</h3>
      </li>
    @endforeach
</ul>
@endif
@endsection