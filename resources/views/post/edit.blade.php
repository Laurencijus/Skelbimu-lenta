@extends('admin.layouts.app_admin')

@section('content')

<div class="container">



  <hr />

  <form class="form-horizontal" action="{{route('post.update', $post)}}" method="post">
   <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}

    <!-- {{-- Form include --}} -->
    @include('post.partials.form')

  </form>
</div>

@endsection
