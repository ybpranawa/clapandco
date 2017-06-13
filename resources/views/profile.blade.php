@extends('master')

@section('content')
<div class="banner-top">
	<div class="container">
		<h3 >Profile</h3>
		<h4><a href="profile">Account</a><label>/</label>Profile</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="wrapper">
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                <li class="active treeview">
                  <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                  </ul>
                </li>
            </ul>
        </section>
    </aside>
</div>
@endsection