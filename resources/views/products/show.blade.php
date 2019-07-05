@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <img src="/storage/{{ $product->image }}" class="w-100">
    </div>
    <div class="col-4">
        <div>
            <div class="d-flex align-items-center">
                <div class="pr-3">
                  <img src="{{ $product->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                </div>
                <div>
                  <div class="font-weight-bold">
                      <a href="/profile/{{ $product->user->id }}">
                          <span class="text-dark">{{ $product->user->username }}</span>
                      </a>
                      <a href="#" class="pl-3">Follow</a>
                  </div>
                </div>
            </div>
            
            <hr>
      
            <p>
                <span class="font-weight-bold">
                <a href="/profile/{{ $product->user->id }}">
                    <span class="text-dark">{{ $product->user->username }}</span>
                </a> 
                </span>{{ $product->caption }}
            </p>
            
        </div>
    </div>
</div>
@endsection

