@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>{!! link_to_route('shushoku-index', '主食一覧', [], ['class' => 'btn btn-primary']) !!}</h1>
<h1>{!! link_to_route('fukushoku-index', '副食一覧', [], ['class' => 'btn btn-primary']) !!}</h1>
<h1>{!! link_to_route('sirumono-index', '汁物一覧', [], ['class' => 'btn btn-primary']) !!}</h1>
<h1>{!! link_to_route('randam-create', 'ランダム１', [], ['class' => 'btn btn-primary']) !!}</h1>
<h1>{!! link_to_route('randam-create2', 'ランダム2', [], ['class' => 'btn btn-primary']) !!}</h1>
<h1>{!! link_to_route('randam-index', 'ランダム一覧', [], ['class' => 'btn btn-primary']) !!}</h1>


@endsection