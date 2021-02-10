@extends('layouts.app')

@section('content')

    <h1>主食編集ページ</h1>

    <h3>{{$shushoku->bunrui}}</h3>
    <h3>{{$shushoku->kakaku}}</h3>
    <h3>{{$shushoku->name}}</h3>
    <h3>{{$shushoku->genka}}</h3>

    <div class="row">
        <div class="col-6">
            {!! Form::model($shushoku, ['route' => ['shushoku-update',$shushoku->id],'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('bunrui', '月分類') !!}
                    {!! Form::text('bunrui', null, ['class' => 'form-control']) !!}
                    {!! Form::label('kakaku', '原価分類') !!}
                    {!! Form::text('kakaku', null, ['class' => 'form-control']) !!}
                    {!! Form::label('genka', '原価') !!}
                    {!! Form::text('genka', null, ['class' => 'form-control']) !!} 
                </div>
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
