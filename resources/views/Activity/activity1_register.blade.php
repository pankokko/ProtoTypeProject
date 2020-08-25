@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>アクティビティ登録</h1>
                    <form action="{{route('activity.register_step1')}}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            @foreach($activities as $activity)
                                <tr>
                                    <th>
                                        {{$activity->activity_name}}
                                    </th>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="activities[{{$activity->id}}]" value="1" id="check1a">
                                            <label class="form-check-label" for="check1a">経験がある場合チェック</label>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                        <button type="submit" class="form-control btn btn-primary">送信</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
