<!-- レイアウトの呼び出し -->
@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
   @parent
   新規作成ページ
@endsection

@section('content')

       @if (count($errors) > 0)
       <div>
         <ul>
          @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
          @endforeach
         </ul>
       </div>
       @endif

 <table>
 <form action="/db/add" method="post">
     @csrf
  <tr><th>名前: </th><td><input type="text" name="name"></td></tr>
  <tr><th>メールアドレス: </th><td><input type="text" name="mail"></td></tr>
  <tr><th>年齢: </th><td><input type="text" name="age"></td></tr>
  <tr><th></th><td><input type="submit" value="send"></td></tr>
 
 </form>
 </table>

@endsection

@section('footer')
copyright 2018 Shinya
@endsection

