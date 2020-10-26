<!doctype html>
<html lang="ja">
  <head>
    <title>Index</title>
  </head>
<body>
  <h1>Hello/Index</h1>
  <p>{!!$msg!!}</p>
  {{--  <ul>
    @foreach($data as $item)
    <li>{!!$item!!}</li>
    @endforeach
  </ul>
  <style>
    th { background-color: red; padding:10px; }
    td { background-color: #eee; padding:10px; }
  </style>  --}}

  <form action="/hello" method="get">
    @csrf
    <div>NAME:<input type="text" name="name" value="{{old('name')}}"></div>
    <div>MAIL:<input type="text" name="mail" value="{{old('mail')}}"></div>
    <div>TEL:<input type="text" name="tel" value="{{old('tel')}}"></div>
    <input type="submit">
  </form>
  <hr>
  <ol>
    @for($i = 0;$i < count($keys);$i++)
    <li>{{$keys[$i]}}:{{$values[$i]}}</li>
    @endfor
  </ol>
</body>
</html>