<!doctype html>
<html lang="ja">
  <head>
    <title>Index</title>
  </head>
<body>
  <h1>Hello/Index</h1>
  <p>{!!$msg!!}</p>
  <ul>
    @foreach($data as $item)
    <li>{!!$item!!}</li>
    @endforeach
  </ul>
  <style>
    th { background-color: red; padding:10px; }
    td { background-color: #eee; padding:10px; }
  </style>
</body>
</html>