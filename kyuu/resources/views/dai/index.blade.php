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
      <div class="hyou">
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
        <table class="border">
          <tr>
             <th>日</th>
             <th>月</th>
             <th>火</th>
             <th>水</th>
             <th>木</th>
             <th>金</th>
             <th>土</th>
          </tr>
          <tr>
             <td>
               <tb>1</tb>
             </td>
               <td>
             <tb>2</tb>
               </td>
             <td>
               <tb>3</tb>
             </td>
               <td>
             <tb>4</tb>
               </td>
             <td>
               <tb>5</tb>
             </td>
             <td>
               <tb>6</tb>
             </td>
             <td>
               <tb>7</tb>
             </td>
          </tr>
          <tr>
             <td>
               <tb>8</tb>
             </td>
               <td>
             <tb>9</tb>
               </td>
             <td>
               <tb>10</tb>
             </td>
               <td>
             <tb>11</tb>
               </td>
             <td>
               <tb>12</tb>
             </td>
             <td>
               <tb>13</tb>
             </td>
             <td>
               <tb>14</tb>
             </td>
          </tr>
          <tr>
             <td>
               <tb>15</tb>
             </td>
               <td>
             <tb>16<br></tb>
               </td>
             <td>
               <tb>17</tb>
             </td>
               <td>
             <tb>18</tb>
               </td>
             <td>
               <tb>19</tb>
             </td>
             <td>
               <tb>20</tb>
             </td>
             <td>
               <tb>21</tb>
             </td>
          </tr>
          <tr>
             <td>
               <tb>22</tb>
             </td>
               <td>
             <tb>23</tb>
               </td>
             <td>
               <tb>24</tb>
             </td>
               <td>
             <tb>25</tb>
               </td>
             <td>
               <tb>26</tb>
             </td>
             <td>
               <tb>27</tb>
             </td>
             <td>
               <tb>28</tb>
             </td>
          </tr>
          <tr>
             <td>
               <tb>29</tb>
             </td>
               <td>
             <tb>30</tb>
               </td>
             <td>
               <tb>31</tb>
             </td>
               <td>
             <tb>32</tb>
               </td>
             <td>
               <tb>33</tb>
             </td>
             <td>
               <tb>34</tb>
             </td>
             <td>
               <tb>35</tb>
             </td>
          </tr>
          <tr>
             <td>
               <tb>36</tb>
             </td>
               <td>
             <tb>37</tb>
               </td>
             <td>
               <tb>38</tb>
             </td>
            
          </tr>
          
            
        </table>
      </div> 
  
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

.unko2{
    padding-top:15px;
   
}
.hyou{
    display:flex;
}

.border{
    text-align:center;
    width:800px;
    height:300px;
    border: solid 1px #000000;
}
.border th{
    border: solid 1px #000000;
}
.border tr{
    border: solid 1px #000000;
}
.border td{
    border: solid 1px #000000;
}
</style>