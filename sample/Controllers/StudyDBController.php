<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;


class StudyDBController extends Controller
{
  public function index(Request $request) 
  {
     //idパラメータがクエリ文字列にあるか確認
     if (isset($request->id))
     {
        $param = ['id' => $request->id];
        $items = DB::select('select * from people where id = :id', $param);
     } else {
      //idパラメータが無ければ
        $items = DB::select('select * from people');
     }

     return view('db.index',['pitems' => $items]);

  }


  public function post(Request $request)
  { 
     //idパラメータがクエリ文字列にあるか確認
     if (isset($request->id))
     {
        $param = ['id' => $request->id];
        $items = DB::select('select * from people where id = :id', $param);
     } else {
      //idパラメータが無ければ
        $items = DB::select('select * from people');
     }

     return view('db.index',['pitems' => $items]);

  }

  public function add(Request $request) 
  {
    //INSERT用のURL 
    return view('db.add');

  }

  public function create(Request $request)
  {
    //データ作成-ADD-処理
    $param = [
     'name' => $request->name,
     'mail' => $request->mail,
     'age'  => $request->age,
    ];

    //日本語エラーメッセージの定義
    $messages = [
    'name.required' => '名前は必ず入力してください。',
    'mail.email' => 'メールアドレスは必須項目です。',
    'age.numeric' => '年齢は整数で入力してください。',
    'age.between' => '年齢は0歳～150歳の間で入力して下さい。',];

    //バリデータを追加
    $validator = Validator::make($request->all(), [
     'name' => 'required',
     'mail' => 'email',
     'age'  => 'numeric|between:0,150',
      ], $messages);

     if ($validator->fails()) {
     return redirect('/db/add')->withErrors($validator);
     }
    
     DB::insert('insert into people(name,mail,age) values(:name, :mail, :age)', $param);
     return redirect('/db');

   }

  public function edit(Request $request)
  {
    //UPDATE用のURLここではIDの指定が無い場合のエラー処理は無いので後で追加
    $param = ['id' => $request->id];
    $item = DB::select('select * from people where id = :id', $param);
    return view('db.edit', ['form' => $item[0]]);
  }


  public function update(Request $request)  
  {
    //実際のデータ更新処理
    $param = [
     'id'   => $request->id,
     'name' => $request->name,
     'mail' => $request->mail,
     'age'  => $request->age,
    ];
    
    DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
    return redirect('/db');
  }


  public function del(Request $request)
  {
    
    $param = ['id' => $request->id];
    $item = DB::select('select * from people where id = :id', $param);
    return view('db.del',['form' => $item[0]]);
  }

  public function remove(Request $request)
  {
    $param = ['id' => $request->id];
    DB::delete('delete from people where id = :id', $param);
    return redirect('/db');

  }


}
