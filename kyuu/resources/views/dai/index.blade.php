@extends('layouts.app')

@section('content')
{!! link_to_route('csv-index', 'CSVダウンロード', [], ['class' => 'btn btn-primary' ]) !!}
  <h1>一覧</h1>
       <div class="test">
        <table class="table">
            <thead>
                <tr>
                    <th>日付</th>
                    <th class="unko">主食品目</th>
                    <th>原価</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($randams as $num=>$randam)
                <tr>
                    <td>{{ $num+1 }}</td>
                    <td>{{ $randam->name }}</td>
                    <td>{{ $randam->genka }}</td>
                    <td>{!! Form::model($randam, ['route' => ['randam-edit', $randam->id], 'method' => 'get']) !!}
                      {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}</td>
                    <td>{!! Form::model($randam, ['route' => ['randam-delete', $randam->id ], 'method' => 'delete']) !!}
                      {!! Form::submit('無し', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
                @endforeach
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>日付</th>
                    <th class="unko">副食品目</th>
                    <th>原価</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($randams2 as $num=>$randam2)
                <tr>
                    <td>{{ $num+1 }}</td>
                    <td>{{ $randam2->name }}</td>
                    <td>{{ $randam2->genka }}</td>
                    <td>{!! Form::model($randam2, ['route' => ['randam-edit2', $randam2->id], 'method' => 'get']) !!}
                      {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}</td>
                    <td>{!! Form::model($randam2, ['route' => ['randam-delete2', $randam2->id ], 'method' => 'delete']) !!}
                      {!! Form::submit('無し', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
                @endforeach
            </tbody>
        </table>
       
        <div class="test2">
        <table class="table">
            <thead>
                <tr>
                    <th>日付</th>
                    <th class="unko">汁物品目</th>
                    <th>原価</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($randams3 as $num=>$randam3)
                <tr>
                    <td>{{ $num+1 }}</td>
                    <td class="unko">{{ $randam3->name }}</td>
                    <td>{{ $randam3->genka }}</td>
                    <td>{!! Form::model($randam3, ['route' => ['randam-edit3', $randam3->id], 'method' => 'get']) !!}
                      {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}</td>
                    <td>{!! Form::model($randam3, ['route' => ['randam-delete3', $randam3->id ], 'method' => 'delete']) !!}
                      {!! Form::submit('無し', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
                @endforeach
            </tbody>
        </table>
        </div>
        
        </div>
        <table class="table-a">
            <thead>
                <tr>
                    <th>日付</th>
                    <th>原価合計</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kakakus as $num=>$kakaku)
                <tr>
                    
                    <td class="unko2">{{ $num+1 }}</td>
                    <td class="unko2">{{ $kakaku }}</td>
                   
                @endforeach
            </tbody>
        </table>
        
  
<!-- ここにページ毎のコンテンツを書く -->

{!! link_to_route('kakunin-index', '削除', [], ['class' => 'btn btn-danger']) !!}

@endsection
<style>
.test{
    display:flex;
   
}
.test2{
    display:flex;
   
}
.table{
    font-size:15px;
    width:300%;
}

.unko{
    width:800px;
    
}
.table-a{
    margin-top:5%;
}
.unko2{
    padding-top:58px;
}

</style>