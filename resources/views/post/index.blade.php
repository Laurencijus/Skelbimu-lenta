@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

   @component('admin.components.breadcrumb')
    @slot('title') Список категорий @endslot
    @slot('parent') Главная @endslot
    @slot('active') Категории @endslot
  @endcomponent

  <hr>

  <a href="{{route('post.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>  Sukurti skelbima1</a>
  <table class="table table-striped">
    <thead>
      <th>pavadimas</th>
      <th>Publikuoti</th>
      <th class="text-right">Veiksmas</th>
    </thead>
    <tbody>
      @forelse ($posts as $post)
        <tr>
          <td>{{$post->name}}</td>
          <td>{{$post->text}}</td>
          <td>{{$post->published}}</td>
          <td class=" ">
          <form onsubmit="if (confirm('Trinti?')){return true}else{return false}" action="{{route('admin.post.destroy',
          $post)}} " method="post">
          <input type="hidden" name="_method" value="DELETE">
          {{csrf_field()}}
            <a class="btn btn-default" href="{{route('post.edit', $post)}}"><i class="fa fa-edit"></i></a>
            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Duomenų nėra</h2></td>
        </tr>
      @endforelse
    </tbody>
    <tfoot>
    <tr>
    <td colspan="3">
    <ul class="pagination pull-right">
    {{$posts->links()}}
    </ul>
    </td>
    </tr>
    </tfoot>

  </table>
</div>

@endsection
