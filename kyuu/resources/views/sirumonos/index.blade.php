@extends('layouts.app')

@section('content')
  <h1>汁物一覧</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>月ランダムグループ番号</th>
                    <th>原価金額分類(1:低い  2:高い)</th>
                    <th>汁物品目</th>
                    <th>原価</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sirumonos as $sirumono)
                <tr>
                    <td>{{ $sirumono->bunrui }}</td>
                    <td>{{ $sirumono->kakaku }}</td>
                    <td>{{ $sirumono->name }}</td>
                    <td>{{ $sirumono->genka }}</td>
                    <td>{!! Form::model($sirumono, ['route' => ['sirumono-edit', $sirumono->id], 'method' => 'get']) !!}
                      {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}</td>
                    <td>{!! Form::model($sirumono, ['route' => ['sirumono-delete', $sirumono->id ], 'method' => 'delete']) !!}
                      {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
  
<!-- ここにページ毎のコンテンツを書く -->
<h1>{!! link_to_route('sirumono-create', '汁物登録', [], ['class' => 'btn btn-primary']) !!}</h1>

@endsection