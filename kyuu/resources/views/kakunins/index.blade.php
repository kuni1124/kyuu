@extends('layouts.app')

@section('content')
<h1>本当に削除しますか？</h1>
{!! link_to_route('randam-delete4', '削除', [], ['class' => 'btn btn-danger']) !!}

@endsection