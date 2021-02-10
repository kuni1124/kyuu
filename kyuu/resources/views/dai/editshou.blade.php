@extends('layouts.app')

@section('content')

    <h1>主食詳細編集ページ</h1>

    <h3>{{$randam3->bunrui}}</h3>
    <h3>{{$randam3->kakaku}}</h3>
    <h3>{{$randam3->name}}</h3>
    <h3>{{$randam3->genka}}</h3>

    <div class="row">
        <div class="col-6">
            {!! Form::model($randam3, ['route' => ['randam-update3',$randam3->id],'method' => 'put']) !!}

                <div class="form-group">
                {!! Form::label('name', '主食名') !!}
                {!! Form::select('sirumono_id', $sirumonos, null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection