@extends('layouts.app')

@section('content')

    <h1>主食詳細編集ページ</h1>

    <h3>{{$randam->bunrui}}</h3>
    <h3>{{$randam->kakaku}}</h3>
    <h3>{{$randam->name}}</h3>
    <h3>{{$randam->genka}}</h3>

    <div class="row">
        <div class="col-6">
            {!! Form::model($randam, ['route' => ['randam-update',$randam->id],'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('name', '主食名') !!}
                    {!! Form::select('shushoku_id', $shushokus, null, ['class' => 'form-control']) !!}
                    
                </div>
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection