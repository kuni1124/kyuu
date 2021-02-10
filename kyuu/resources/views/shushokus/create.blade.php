@extends('layouts.app')

@section('content')

    <h1>主食新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($shushoku, ['route' => 'shushoku-store']) !!}

                <div class="form-group">
                    {!! Form::label('bunrui', '月分類') !!}
                    {!! Form::text('bunrui', null, ['class' => 'form-control']) !!}
                    {!! Form::label('kakaku', '原価分類') !!}
                    {!! Form::text('kakaku', null, ['class' => 'form-control']) !!}
                    {!! Form::label('name', '主食名') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! Form::label('genka', '原価') !!}
                    {!! Form::text('genka', null, ['class' => 'form-control']) !!} 
                </div>
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection