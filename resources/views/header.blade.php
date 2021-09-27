<!DOCTYPE html>
<html lang="en">
<?php 
$asset = config('constants.asset');
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon"  href="{{{$asset('img/favicon.ico')}}}">
<title>
Inaklug</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href = "{{$asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
<!-- <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" /> -->

<link href ="{{$asset('css/main.css')}}" rel="stylesheet" />
<link href ="{{$asset('css/style.css')}}" rel="stylesheet" />
<script src="{{$asset('js/jquery.min.js')}}"></script>
<!-- <script src= "{{$asset('bootstrap/dist/js/bootstrap.min.js')}}"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <!-- <style type="text/css">
  .title-nav{
  /*width: 100px;*/
  /*height: 16px;*/
  font-size: 13px;
  font-weight: 500;
  font-style: normal;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #1e1e1e;
  }
  .modal-dialog {
    margin: 5px auto;`

}

/*//removing extra padding from the body*/
.modal-body {
    position: relative;
    padding: 0 15px;
}

/*// Add padding to your footer*/
.modal .modal-footer {
    border-top: none;
    padding: 10px;
}

  </style> -->
</head>
<header id="header" class="header clearfix" style="position: fixed;">
<nav class="navbar navbar-light navbar-fixed-top">
<div class="col-lg-8 col-md-8 col-xs-12">
<!-- Bagian Gambar -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="navbar-brand" href="/">
  <img class="header_logo" src="{{$asset('img/inaklug.png') }}" style="margin-left: -20%;display: inline;margin-top: -5%;" >
<h1 style="color: #FFFFFF;display: inline; margin-bottom: -40%">
Inaklug  
</h1>
</div>
</div>
<!-- Bagian Home -->
<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="margin-left: -10%; ">
<div class="collapse navbar-collapse" >
  <ul class="nav navbar-nav" >
    <li class="nav-item active" style="margin-top: 1%;" >
      <a class="nav-link title-nav active"  href="/" style="color: #FFFFFF">HOME
       <span class="sr-only">(current)</span>
     </a>
    </li>
    <li class="nav-item">
      <a class="nav-link title-nav" href="/tentangkami" style="color: #FFFFFF">TENTANG KAMI</a>
    </li>
    <li class="nav-item">
      <a class="nav-link title-nav" href="/layanankami" style="color: #FFFFFF">LAYANAN KAMI</a>
    </li>
    <li class="nav-item">
      <a class="nav-link title-nav" href="/artikel" style="color: #FFFFFF;">ARTIKEL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link title-nav" href="/hubungikami" style="color: #FFFFFF;">HUBUNGI KAMI</a>
    </li>   
  </ul>
  </div>
</div>
</div>
<!-- Bagian Search dan Daftar online -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top: 1.5%; padding: 0 5%;">
  <!-- <div class="input-group">
  <button type="button" class="btn btn-primary">
    <i class="fa fa-search"></i>
  </button>
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>  
  
</div> -->
  <button class="daftar navbar-right  text-center">
    <a href="" style="color: #FFFFFF;font-size: 13px;
  line-height: 16px;">Daftar Online</a>
  </button>

</div>
<!-- Akhir dari header -->
</nav>
</header>
<body>