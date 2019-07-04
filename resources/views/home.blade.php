@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
      <div class="col-3 p-5">
        <img src="https://instagram.fphx1-1.fna.fbcdn.net/vp/a2729ba61f6bf294969f75d3631a6adc/5DB47138/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fphx1-1.fna.fbcdn.net" class="rounded-circle">
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="#">Add New Post</a>
        </div>
          <div class="d-flex">
            <div class="pr-5"><strong>153</strong> posts</div>
            <div class="pr-5"><strong>22k</strong> followers</div>
            <div class="pr-5"><strong>212</strong> following</div>
          </div>
          <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
          <div>{{ $user->profile->description }}</div>
          <div><a href="#">{{ $user->profile->url }}</a></div>
      </div>
    </div>
    
    <div class="row pt-5">
      <div class="col-4">
          <img src="https://instagram.fphx1-1.fna.fbcdn.net/vp/be879b655f8e352ba3225b9c7fddcdd9/5DA11054/t51.2885-15/e35/65285896_859971694372408_6053802884198789538_n.jpg?_nc_ht=instagram.fphx1-1.fna.fbcdn.net" class="w-100">
      </div>
      <div class="col-4">
          <img src="https://instagram.fphx1-1.fna.fbcdn.net/vp/be879b655f8e352ba3225b9c7fddcdd9/5DA11054/t51.2885-15/e35/65285896_859971694372408_6053802884198789538_n.jpg?_nc_ht=instagram.fphx1-1.fna.fbcdn.net" class="w-100">
      </div>
      <div class="col-4">
          <img src="https://instagram.fphx1-1.fna.fbcdn.net/vp/be879b655f8e352ba3225b9c7fddcdd9/5DA11054/t51.2885-15/e35/65285896_859971694372408_6053802884198789538_n.jpg?_nc_ht=instagram.fphx1-1.fna.fbcdn.net" class="w-100">
      </div>
</div>
    
</div>
@endsection

