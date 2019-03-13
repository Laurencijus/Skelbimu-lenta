@extends('admin.layouts.app_admin')

@section('content')

<div class="container">



  <hr />

  <form class="form-horizontal" enctype="multipart/form-data" action="{{route('post.store')}}" method="post">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('post.partials.form')

  </form>
</div>

@endsection
