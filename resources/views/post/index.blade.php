@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <hr>
  <a href="{{route('post.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>  Sukurti skelbimą</a>
  <table class="table table-hover table-dark">
  <thead>
      <th>Pavadimas</th>
      <th >Tekstas</th>
      <th>Sukurimo data</th>
      <th>Kategorija</th>
      <th>Veiksmas</th>
    </thead>
    <tbody>
      @forelse ($posts as $post)
        <tr>
          <td>{{$post->title}}</td>
          <td>{{$post->text}}</td>
          <td>{{$post->published}}</td>
          <td>{{empty($post->category) ? '' :$post->category->title}}</td>
                    <td class style=" ">
          <form class onsubmit="if (confirm('Trinti?')){return true}else{return false}" action="{{route('post.destroy',
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
    </form>

  </table>
</div>

@endsection
