
<div class="sky-item align-content-center sky-bg2">
    <div class="card card-primary text-center">
        <div class="card-heading">
            <h3 class="card-title sky-title">
                <span class="glyphicon glyphicon-arrow-right"></span> {{ $poll->question }}
            </h3>
        </div>
    </div>
    <div class="card-body bg-light text-center">
        <ul class="list-group">
            @if($poll->maxCheck == 1)
                @foreach($poll->options as $id => $option)
                    <div class=" border-bottom  ">
                      <label class="" for="{{  $option->name }}">
                        {{  $option->name }}
                      </label>
                      <input class=" sky-checkbox" type="radio" name="options" value="{{ $option->id }}" id="{{  $option->name }}" disabled>
                    </div>

                       
                @endforeach
                <div class="card-footer">
                    
                    @guest
                        @if($poll->canVoterSeeResult)
                        <a href="{{route('poll.result', $poll->id)}}">
                            <button type="button" class="btn btn-primary m-3 ">@lang('Polling::pollings.result')</button>           
                            </a>
                        @endif
                        @if($poll->canVisitorsVote )
                        <a href="{{route('poll.vote', $poll->id)}}">
                            <button type="button" class="btn btn-primary m-3">@lang('Polling::pollings.view')</button>           
                            </a>
                        @endif
                    @else
                        <a href="{{route('poll.result', $poll->id)}}">
                            <button type="button" class="btn btn-primary m-3 ">@lang('Polling::pollings.result')</button>           
                            </a>
                        <a href="{{route('poll.vote', $poll->id)}}">
                            <button type="button" class="btn btn-primary m-3">@lang('Polling::pollings.view')</button>           
                            </a>

                    @endguest
                </div>
            @else
                @foreach($poll->options as $id => $option)
                    <div class="  border-bottom ">
                      <label class="" for="{{  $option->name }}">
                        {{  $option->name }}
                      </label>
                      <input class=" sky-checkbox" type="checkbox" name="options" value="{{ $option->id }}" id="{{  $option->name }}" disabled>
                    </div>           
                       
                @endforeach
                <div class="card-footer">
                    
                 @guest
                        @if($poll->canVoterSeeResult)
                        <a href="{{route('poll.result', $poll->id)}}">
                            <button type="button" class="btn btn-primary m-3 ">@lang('Polling::pollings.result')</button>           
                            </a>
                        @endif
                        @if($poll->canVisitorsVote)
                        <a href="{{route('poll.vote', $poll->id)}}">
                            <button type="button" class="btn btn-primary m-3">@lang('Polling::pollings.view')</button>           
                            </a>
                        @endif
                    @else
                        <a href="{{route('poll.result', $poll->id)}}">
                            <button type="button" class="btn btn-primary m-3 ">@lang('Polling::pollings.result')</button>           
                            </a>
                        <a href="{{route('poll.vote', $poll->id)}}">
                            <button type="button" class="btn btn-primary m-3">@lang('Polling::pollings.view')</button>           
                            </a>

                    @endguest
                </div>
            @endif
        </ul>
    </div>
    
</div>
