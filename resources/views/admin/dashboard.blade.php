@extends('admin.layouts.app_admin')

@section('content')
  <div class="container" >
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
            <p>
            <h3>Skelbimu Kategorijos</h3>
            @foreach ($categories as $category)
            {{$category->title}}: {{$category->posts->count()}}
            <br>
            @endforeach
            </p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary"> Dar_nezinau</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Lankytojai 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Siandien Lankytoju 0</span></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="{{route('post.create')}}" >Skelbimo statusas</a>
        <a class="list-group-item" href="#">
          <h4 class="list-group-item-heading">Kategorija pirma</h4>
          <p class="list-group-item-text">
            Kiekis dar nezinau ko
          </p>
        </a>
      </div>
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="#">Sukurti dar nezinau ka</a>
        <a class="list-group-item" href="#">
          <h4 class="list-group-item-heading">Dar nezinau kas pirmas</h4>
          <p class="list-group-item-text">
            Kategorija
          </p>
        </a>
      </div>
    </div>
  </div>
@endsection
