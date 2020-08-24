@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>AI評価結果</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">番号</th>
                        <th scope="col">ソーシャルスキル</th>
                        <th scope="col">自己評価</th>
                        <th scope="col">AI評価</th>
                    </tr>
                    </thead>
                    @foreach($evaluations as $key => $evaluation)
                        <tr>
                            <th>
                                {{$key}}<br>
                            </th>
                            <th>
                                {{$evaluation->skill_name}}<br>
                            </th>
                            <th>
                              <h4>{{$evaluation->pivot->rate}}</h4>
                            </th>
                            <th>
                                @isset($aiEvaluations[$evaluation->id])
                                <h4>{{$aiEvaluations[$evaluation->id]}}</h4>
                                @endisset
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
