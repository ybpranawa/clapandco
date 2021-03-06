<?php
$title='Catalog';
?>
@extends('personal.masteradmin')

@section('content')
@if ($query==NULL)
<section class="content">
    <div class="row">
        <div class="col-md-10">
            <h1>
                NO DATA
                <small>Belum terdapat katalog produk</small>
            </h1>
        </div>
        <div class="col-md-2">
            <a href="addproduct" type="button" class="btn btn-block btn-warning btn-lg"><i class="fa fa-plus"></i>Tambah Produk</a>
        </div>
    </div>
</section>
@else
<ul class="cardds">
    @foreach ($query as $data)
      <li class="cardd" data-id="{{$data->product_id}}">
        <div class="cardd__inner">
          <h2>{{$data->product_name}} <small>Product Name</small></h2>
          <div class="cardd__buttons">
            <a href="editproduct?product_id={{$data->product_id}}">Edit</a>
            <a href="removeproduct?product_id={{$data->product_id}}">Delete</a>
          </div>
        </div>
        <ul class="cardd__icons">
          
        </ul>
        <h3>{{$data->product_price}}</h3>
      </li>
    @endforeach
</ul>
@endif
    <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                    <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                     <h3>Delete</h3>
                </div>
              <div class="modal-body">
                    <h2>Do you want to proceed?</h2>
                </div>
              <div class="modal-footer">
                  <a href="removeproduct?product_id=123" id="btnYes" class="btn danger">Yes</a>
                  <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
                </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

@endsection