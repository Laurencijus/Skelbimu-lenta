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
</div>
