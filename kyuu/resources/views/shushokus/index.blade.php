@extends('layouts.app')

@section('content')
  <h1>主食一覧</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>月ランダムグループ番号</th>
                    <th>原価金額分類(1:低い  2:高い)</th>
                    <th>主食品目</th>
                    <th>原価</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shushokus as $shushoku)
                <tr>
                    <td>{{ $shushoku->bunrui }}</td>
                    <td>{{ $shushoku->kakaku }}</td>
                    <td>{{ $shushoku->name }}</td>
                    <td>{{ $shushoku->genka }}</td>
                    <td>{!! Form::model($shushoku, ['route' => ['shushoku-edit', $shushoku->id], 'method' => 'get']) !!}
                      {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}</td>
                    <td>{!! Form::model($shushoku, ['route' => ['shushoku-delete', $shushoku->id ], 'method' => 'delete']) !!}
                      {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
  
<!-- ここにページ毎のコンテンツを書く -->
<h1>{!! link_to_route('shushoku-create', '主食登録', [], ['class' => 'btn btn-primary']) !!}</h1>

@endsection