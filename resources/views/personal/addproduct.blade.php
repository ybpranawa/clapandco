<?php
$title='Add Product'
?>
@extends('personal.masteradmin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-2"></div>
        <!-- left column -->
        <div class="col-md-8">            
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Produk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" class="form-horizontal" action="doupload" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="product_name" class="col-sm-2 control-label">Nama Produk</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Nama Produk...." required>
                  </div>
                </div>
                  
                <div class="form-group">
                  <label for="product_desc" class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="product_desc" placeholder="Deskripsi Produk...." required></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="product_stock" class="col-sm-2 control-label">Jumlah stok</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_stock" name="product_stock" placeholder="stok" required>
                  </div>
                </div>
                  
                <div class="form-group">
                  <label for="product_timedev" class="col-sm-2 control-label">Estimasi pembuatan</label>
                  <div class="col-sm-10">
                      <input type="text" class="col-sm-1" id="product_timedev" name="product_timedev" placeholder="0.." required>{{'Hari'}}
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="product_type" class="col-sm-2 control-label">Tipe</label>
                  <div class="col-sm-10">
                      <select class="form-control" name="product_type" required>
                        @foreach ($query as $data)
                            <option value="{{$data->type_id}}">{{ $data->type_name }}</option>
                        @endforeach
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="product_price" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="product_price" name="product_price" placeholder="0000...." required>
                  </div>
                </div>
                  
                <div class="form-group">
                    <label for="product_pict0" class="col-sm-2 control-label">File input</label>
                    <div class="col-sm-10">
                      <input type="file" id="product_pict0" name="product_pict[]">
                      <p class="help-block">Max size 1MB</p>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="product_pict1" class="col-sm-2 control-label">File input</label>
                    <div class="col-sm-10">
                      <input type="file" id="product_pict1" name="product_pict[]">
                      <p class="help-block">Max size 1MB</p>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="product_pict2" class="col-sm-2 control-label">File input</label>
                    <div class="col-sm-10">
                      <input type="file" id="product_pict2" name="product_pict[]">
                      <p class="help-block">Max size 1MB</p>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="product_pict3" class="col-sm-2 control-label">File input</label>
                    <div class="col-sm-10">
                      <input type="file" id="product_pict3" name="product_pict[]">
                      <p class="help-block">Max size 1MB</p>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="product_pict4" class="col-sm-2 control-label">File input</label>
                    <div class="col-sm-10">
                      <input type="file" id="product_pict4" name="product_pict[]">
                      <p class="help-block">Max size 1MB</p>
                    </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-warning pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
</section>
@endsection