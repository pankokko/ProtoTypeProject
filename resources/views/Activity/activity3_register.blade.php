@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h2>いつまでアクティビティを続けましたか？</h2>
                    <form action="{{route('activity.register_step3')}}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            @foreach($activities as $activity)
                                <tr>
                                    <th>
                                        {{$activity->activity_name}}<br>
                                        開始時期:{{$activity->pivot->started_at}}
                                    </th>
                                    <th>
                                        <div class="form-group row">
                                            <label for="example-date-input" class="col-2 col-form-label">終了期間</label>
                                            <div class="col-10">
                                                <input class="form-control" type="date" name="activities[{{$activity->id}}][finished_at]" min="{{$activity->pivot->started_at}}" max="{{$maxDay}}" id="date">
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="activities[{{$activity->id}}][is_continue]" id="check1a">
                                            <label class="form-check-label" for="check1a">現在も継続中</label>
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
