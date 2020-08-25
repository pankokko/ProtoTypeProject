@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>自己評価シート</h1>
                    <p>何も入力しなかった項目は評価「０」となります</p>
                    <form action="{{route('self_evaluation.step1')}}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            @foreach($socialSkills as $socialSkill)
                                <tr>
                                    <th>{{$socialSkill->skill_name}}</th>
                                    <input type="hidden" name="evaluations[{{$socialSkill->id}}]">
                                    <th>
                                        <div class="form-control-radio">自己評価
                                            <input type="number" name="evaluations[{{$socialSkill->id}}]" min="0"
                                                   max="5">
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
