@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3">
                <img src="../../svg/McAfee_security.jpg" alt="profile photo" class="rounded-circle img-fluid" style="max-width: 100%;"/>
            </div>
            <div class="col-md-9">
                <div style="padding-left: 10px">
                    <h1>{{$user->username}}</h1>
                </div>
                <div class="d-flex" style="padding-left: 10px">
                    <div><strong>153</strong> posts</div>
                    <div class="px-5"><strong>23k</strong> followers</div>
                    <div><strong>150</strong> following</div>
                </div>
                <div class="pt-4"><b>Instagram Clone.org</b></div>
                <div>This is my first laravel project and am creating my own community here for programming and learning developing softwares</div>
                <div><a href="#">www.instagramclone.org</a></div>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-md-4" v-for="n in 3" :key="n">
            <img src="../../svg/McAfee_security.jpg" alt="pics" style="max-width: 75%;"/>
            </div>
        <div>
        <div>
            Hello
        </div>
    </div>
@endsection
