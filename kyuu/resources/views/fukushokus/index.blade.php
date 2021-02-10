@extends('layouts.app')

@section('content')
  <h1>副食一覧</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>月ランダムグループ番号</th>
                    <th>原価金額分類(1:低い  2:高い)</th>
                    <th>副食品目</th>
                    <th>原価</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fukushokus as $fukushoku)
                <tr>
                    <td>{{ $fukushoku->bunrui }}</td>
                    <td>{{ $fukushoku->kakaku }}</td>
                    <td>{{ $fukushoku->name }}</td>
                    <td>{{ $fukushoku->genka }}</td>
                    <td>{!! Form::model($fukushoku, ['route' => ['fukushoku-edit', $fukushoku->id], 'method' => 'get']) !!}
                      {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}</td>
                    <td>{!! Form::model($fukushoku, ['route' => ['fukushoku-delete', $fukushoku->id ], 'method' => 'delete']) !!}
                      {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
  
<!-- ここにページ毎のコンテンツを書く -->
<h1>{!! link_to_route('fukushoku-create', '副食登録', [], ['class' => 'btn btn-primary']) !!}</h1>

@endsection