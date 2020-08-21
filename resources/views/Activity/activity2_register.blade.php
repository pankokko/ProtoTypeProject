@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h2>あなたがアクティビティを開始した時期を登録</h2>
                    <form action="{{route('activity.register_step2')}}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            @foreach($activities as $activity)
                                <tr>
                                    <th>
                                        {{$activity->activity_name}}
                                    </th>
                                    <th>
                                        <div class="form-group row">
                                            <label for="example-date-input" class="col-2 col-form-label"></label>
                                            <div class="col-10">
                                                <input class="form-control" type="date" name="activities[{{$activity->id}}]" max="{{$maxDay}}" id="date">
                                            </div>
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
