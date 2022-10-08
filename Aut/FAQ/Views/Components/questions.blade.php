<div class="">
@foreach ($questions as $question)

<div class="card">
    <div class="card-body">
        <h4 class="card-title"><strong>{{$question->category_f_a_q_name}}</strong>{!! $question->question !!}</h4>
        <p class="card-text">{!! $question->answer !!}</p>
    </div>
</div>
@endforeach
@if($links->next)
<a href='{{$links->next}}'>next</a>
@endif

@if($links->prev)
<a href='{{$links->prev}}'>prev</a>
@endif

</div>

