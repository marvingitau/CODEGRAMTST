@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-1 ">
            <img src="https://image.shutterstock.com/image-vector/cooperation-logo-design-260nw-1237097860.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1> {{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>44</strong> post</div>
                <div class="pr-4"><strong>324</strong> follower</div>
                <div class="pr-4"><strong>24</strong> following</div>
            </div>
            <div class="pt-4  font-weight-bold">
                codeGram.com
            </div>
            <div>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam obcaecati tempore rerum iste debitis aperiam saepe aut, magnam quo natus! Maxime aut laudantium error eaque aperiam cum ad quidem praesentium!
            </div>
            <div><a href="#"> codeGram.com</a></div>
            
        </div>

    </div>

    <div class="row p-4">
      <div class="col-4">
       <img class="w-100" src= "{{ asset('svg/mega.jpg') }}" >
      </div>
      <div class="col-4">
       <img class="w-100" src= "{{ asset('svg/mega.jpg') }} " >
      </div>
      <div class="col-4">
       <img class="w-100" src= "{{ asset('svg/mega.jpg') }}" >
      </div>
    </div>

</div>
@endsection
                         