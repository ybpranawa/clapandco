<?php
$title='Order List'
?>
@extends('personal.masteradmin');

@section('content')
@if ($query==NULL)
<section class="content">
    <div class="row">
        <div class="col-md-10">
            <h1>
                NO DATA
                <small>Belum terdapat order produk</small>
            </h1>
        </div>
    </div>
</section>
@else
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Order List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Pesanan</th>
                  <th>Nama Pesanan</th>
                  <th>Nama Pemesan</th>
                  <th>Jumlah Pesanan</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Pesanan</th>
                  <th>Nama Pesanan</th>
                  <th>Nama Pemesan</th>
                  <th>Jumlah Pesanan</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endif
@endsection