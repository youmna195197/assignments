<!DOCTYPE html>
<html lang="en">
<head>
  <title>add posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('include/nav')
<div class="container">
  <h2>add new post data</h2>
  <form action=" {{ route('storePost') }}" method = "POST">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value= "{{ old ('title')}}">
      @error('title')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value= "{{ old ('description')}}">
      @error('description')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="auther">Auther:</label>
      <input type="text" class="form-control" id="auther" placeholder="Enter auther" name="auther" value= "{{ old ('auther')}}">
      @error('auther')
      {{$message}}
      @enderror
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published"> published </label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>