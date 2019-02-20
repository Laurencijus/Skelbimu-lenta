<label for="">Skelbimų statusas</label>
 <select class="form-control" name="published">
  @if (isset($category->id))
    <option value="0" @if ($category->published == 0) selected="" @endif>Nepublikuotas</option>
    <option value="1" @if ($category->published == 1) selected="" @endif>Publikuotas</option>
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
<input type="text" class="form-control" name="title" placeholder="Skelbimo kategorijos pavadinimas" value="{{empty($category->title) ? '' : $category->title}}" required>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Skelbimo aprašas</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="invalid-feedback">Neteisingai įvestas tekstas</div>

  <form class="was-validated">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Neteisingai pasirinktas failas</div>
  </div>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Аutomatine generacija" value="{{empty($category->slug) ? '' : $category->slug}}" readonly="">

<label for="">Tevinė kategorija</label>
<select class="form-control" name="parent_id">
  <option value="0">-- be tevinės kategorijos --</option>
  @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Išsaugoti">
</form>
</div>
