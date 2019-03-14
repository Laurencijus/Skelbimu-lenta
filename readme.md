<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# Skelbimų-lenta

Sukuriam Controllerį viduje folderio Admin
php artisan make:controller Admin/DashboardController

Pereisim į route/web.php ir sukursim grupę maršrutų administravimo daliai:

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {

});

Grįšim į Controllerį ir parašysim metodą,mūsų dashbordui atvaizduoti:
// Dashboard
public function dashboard() {
   return view('admin.dashboard');
}:

Parašysim maršrutą šiam Controllerio metodui:
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
   Route::get('/', 'DashboardController@dashboard')->name('admin.index');
});

Peržiūrim maršrutų sąrašą Laravel:
php artisan route:list


Sukuriam view failą dashbordui:
 resources/view/admin/dashboard.blade.php

@extends('admin.layouts.app_admin')

@section('content')
  <div class="container" >
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
            <p><span class="label label-primary">Skelbimu Kategorijos </span></p>
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

Admino maketas:
 resources/view/admin/layouts/app_admin.blade.php

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Блог</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Категории</a></li>
                            <li><a href="#">Материалы</a></li>
                          </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>




Mūsų skelbimai bus saugomi vardu Post
Sukuriam modelį Skelbimui Post

php artisan make:model Post -m 
Dabar sukuriam Controllerį ir surišam su modeliu

php artisan make:controller PostController --resource --model=Post
Parašom migracijos failą

Schema::create('post', function (Blueprint $table) {
   $table->increments('id');
   $table->string('title');
   $table->string('slug')->unique();
   $table->integer('parent_id')->nullable();
   $table->tinyInteger('published')->nullable();
   $table->integer('created_by')->nullable();
   $table->integer('modified_by')->nullable();
   $table->timestamps();
});
Maršrutas Postui



Route::resource('/post', 'PostController');
Route::resource('/category', 'CategoryController');

įvykdome migraciją

php artisan make:migration

php artisan migrate:fresh --seed


Admino maketas resources/view/admin/layouts/app_admin.blade.php

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<style>



 <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Meniu</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('post.index')}}">Skelbimai</a></li>
                            <li><a href="#">Skelbimai</a></li>
                          </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


blade failas resources/view/post/index.blade.php:

@extends('admin.layouts.app_admin')

@section('content')

<div class="container">



  <hr>

  <a href="{{route('post.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>  Sukurti skelbimą</a>
  <table class="table table-striped">
    <thead>
    <i>
      <th>Pavadimas</th>
      <th>Publikuoti</th>
      <th class="text-right">Veiksmas</th>
      </i>
    </thead>
    <tbody>
      @forelse ($posts as $post)
        <tr>
          <td>{{$post->name}}</td>
          <td>{{$post->text}}</td>
          <td>{{$post->published}}</td>
          <td class=" ">
          <form onsubmit="if (confirm('Trinti?')){return true}else{return false}" action="{{route('post.destroy',
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


PostControlleryje naudojam CRUD (Create Read Update Delete) 



 public function create(Request $request)
    {
        return view('post.create', [
            'post' => new Post(),
            'posts' => Post::all(),
            'delimiter' => '',
        ]);
    }

    
    public function store(Request $request)
    {

        // var_dump($request->input('text'));
        // die;

        $post = new Post();
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->name = $request->input('name');

        $file = $request->file('image');
        if ($file) {
            // $destinationPath = 'uploads';
            // $result = $file->move($destinationPath, $file->getClientOriginalName());
            Storage::put('', $file);

        }

        $post->save();
        return redirect()->route('post.index');
    }

   
    public function show(Post $post)
    {
        //
    }

  
    public function edit(Post $post, Request $request)
    {
        if ($request->isMethod('post')) {

            $post->title = $request->input('title');
            $post->text = $request->input('text');
            $post->name = $request->input('name');
            $post->save();
        }

        return view('post.edit', [
            'post' => $post,
            'post' => Post::with('children')->where('parent_id', '0')->get(),
            'delimiter' => '',
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->except('slug'));
        return redirect()->route('post.index');
    }

    
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}



Mūsų skelbimas gali tureti prisegtą failą. Sukuriam modelį 
php artisan make:model UploadFile
Modelyje nurodome ryšį su Vartotoju(useriu)
class UplodFile extends Model
{

    public function user()
    {
        return $this->belongsTo('App\Category');
    }
}

paleidžiam Controllerį
php artisan make:UploadFileController
class UploadFileController extends Controller
{
    public function index()
    {
        return view('uploadfile');
    }
    public function showUploadFile(Request $request)
    {
        $file = $request->file('image');

        // отображаем имя файла
        echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';

        //отображаем расширение файла
        echo 'File Extension: ' . $file->getClientOriginalExtension();
        echo '<br>';

        //отображаем фактический путь к файлу
        echo 'File Real Path: ' . $file->getRealPath();
        echo '<br>';

        //отображаем размер файла
        echo 'File Size: ' . $file->getSize();
        echo '<br>';

        //отображаем Mime-тип файла
        echo 'File Mime Type: ' . $file->getMimeType();

        //перемещаем загруженный файл
        $destinationPath = 'uploads';
        $result = $file->move($destinationPath, $file->getClientOriginalName());
        var_dump($result);
    }
}
Sukuriam Upload failui UploadFail.blade.php
<html>
   <body>
      <?php
echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
echo 'Select the file to upload.';
echo Form::file('image', '', []);
echo Form::submit('Upload File');
echo Form::close();
?>
   </body>
</html>

Routes Web nurodom kelią
Route::get('/uploadfile', 'UploadFileController@index');
Route::post('/uploadfile', 'UploadFileController@showUploadFile');


įvykdome migraciją

php artisan make:migration
php artisan migrate:fresh --seed


Sukuriam failą form.blade, čia atsispindi skelbimo įkelimo forma su failo uploadu.

<label for="">Skelbimų statusas</label>
 <select class="form-control" name="published">
  @if (isset($post->id))
    <option value="0" @if ($post->published == 0) selected="" @endif>Nepublikuotas</option>
    <option value="1" @if ($post->published == 1) selected="" @endif>Publikuotas</option>
  @else
    <option value="0">Nepublikuotas</option>
    <option value="1">Publikuotas</option>
  @endif
</select>
 <style>
   .was-validated{
     margin: 40px;}
 </style>
<label for="">Skelbimo kategorijos pavadinimas</label>
<select name="category_id" class="form-control">
    @foreach ($categories as $category)
    <option value="{{$category->id}}">{{$category->title}}</option>
    @endforeach
     </select>
     <label for="">Skelbimo pavadinimas</label>
<input type="text" class="form-control" name="title" placeholder="Skelbimo pavadinimas" value="{{empty($post->title) ? '' : $post->title}}" required>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Skelbimo aprašas</label>

    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{empty($post->text) ? '' : $post->text}}</textarea>
  </div>
    <div class="invalid-feedback">Neteisingai įvestas tekstas</div>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Neteisingai pasirinktas failas</div>
  </div>
<label for="">Slug</label>
<hr />
<input class="btn btn-primary" type="submit" value="Išsaugoti">
</div


        įkelema skelbimų statistika nustacius category modelyle id sąrisiui sutvirtinti ir atvaizdavimui dashborde;
        <p>
            <h3>Skelbimu Kategorijos</h3>
            @foreach ($categories as $category)
            {{$category->title}}: {{$category->posts->count()}}
            <br>
            @endforeach
            </p>