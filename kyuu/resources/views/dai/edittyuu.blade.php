@extends('layouts.app')

@section('content')

    <h1>主食詳細編集ページ</h1>

    <h3>{{$randam2->bunrui}}</h3>
    <h3>{{$randam2->kakaku}}</h3>
    <h3>{{$randam2->name}}</h3>
    <h3>{{$randam2->genka}}</h3>

    <div class="row">
        <div class="col-6">
            {!! Form::model($randam2, ['route' => ['randam-update2',$randam2->id],'method' => 'put']) !!}

                <div class="form-group">
                {!! Form::label('name', '主食名') !!}
                    {!! Form::select('fukushoku_id', $shushokus, null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection