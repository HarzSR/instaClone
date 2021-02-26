@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fhlz1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fhlz1-1.fna.fbcdn.net&_nc_ohc=wbBX-0-mRFwAX9hkVeE&tp=1&oh=f1bf5c7848c1e4daf82e87dcd0ade088&oe=605CA21F" class="rounded-circle" height="200px" width="200px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>Num</strong> posts</div>
                <div class="pr-5"><strong>Num</strong> followers</div>
                <div class="pr-5"><strong>Num</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url   }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fhlz1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.825.825a/s640x640/151387931_248131726986063_7146800644906673262_n.jpg?_nc_ht=instagram.fhlz1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=elv8IhAKlEAAX_Z41oq&tp=1&oh=2a82144f551d3413da45827310aa23b4&oe=605EDCF2" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fhlz1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.20.866.866a/s640x640/150607721_1232644437130448_5432726904860811056_n.jpg?_nc_ht=instagram.fhlz1-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=LWkl5luZdusAX_wZIsf&tp=1&oh=a31f6e1dc2e3054cb5aa59eee439d205&oe=60602578" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fhlz1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.65.943.943a/s640x640/148526975_459153691922829_5035445392948180720_n.jpg?_nc_ht=instagram.fhlz1-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=JwA3UY_b24wAX-z34-m&tp=1&oh=87d087d97eb79828a46cd900cf50e8e7&oe=605F2F02" class="w-100">
        </div>
    </div>
</div>
@endsection
