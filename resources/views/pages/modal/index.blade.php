
<div class="absolute ">
    <div class="relative z-30 hidden modal {{$val->id}} ease-out duration-300" id="modal-{{$val->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!--
          Background backdrop, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
                  Modal panel, show/hide based on modal state.

                  Entering: "ease-out duration-300"
                    From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    To: "opacity-100 translate-y-0 sm:scale-100"
                  Leaving: "ease-in duration-200"
                    From: "opacity-100 translate-y-0 sm:scale-100"
                    To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                -->
                <div class="modal-center relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                    <div class="close-modal cursor-pointer" rel="modal-{{$val->id}}"></div>


                    {{--<div class="relative">--}}
                    {{--<div   class="close close-modal" rel="modalNhl-{{$val->id}}" style="z-index: 1"> </div>--}}
                    {{--</div>--}}

                    <div class=" px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

                        <div class="flex flex-col gap-4 w-full h-full relative rounded-xl ">
                            <div class="flex m-3 mt-5 gap-5">
                                <img class="w-[150px]  " src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                <div class="flex flex-col gap-3">
                                    <div class="flex flex-row gap-2">
                                        <p class="text-sm font-bold">
                                            {{  ( !empty($val->type->name) ? $val->type->name : '')     }}
                                        </p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl ">
                                            {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                        </h1>

                                        <div class="text-[12px] font-semibold">
                                                {{--{{  ( !empty($val->player->position) ? substr($val->player->position->name, 0, 1) : '')     }}--}}
                                                {{--{{  ( !empty($val->player->position) ? $val->player->position->name : '')   }}--}}
                                            @php
                                                $string = ( !empty($val->player->position) ? $val->player->position->name : '');
                                                $words = explode(' ', $string);
                                                $abr='';
                                            @endphp

                                            @foreach($words as $word)
                                                @php
                                                    $abr .= substr($word, 0, 1)
                                                @endphp
                                            @endforeach

                                            {{ $abr }}

                                        </div>
                                        @foreach($teams->data as $team)
                                            @if($team->slug == $val->team->slug)
                                                <div class="text-[12px] font-semibold">{{ $team->name }}</div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class=" m-3 mb-2 lg:pb-3 md:pb-1 flex flex-col gap-4">
                                <div class="modal-title text-sm font-bold">{{$val->title}}</div>
                                <div class="text-sm">{{$val->description}}</div>
                            </div>
                            <div class="m-3 flex  flex-col gap-4 items-center">
                                <div class="flex flex-row justify-between gap-2  w-full">
                                    <div  >
                                        <a class="  flex flex-row items-center gap-2  " href="{{$val->source->url}}">
                                            <img class="w-7 h-7" src="{{ asset('/images/twitter.png') }}">

                                            <div>
                                                <h3 class="text-xs font-extrabold">{{$val->source->name}}</h3>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="  flex flex-row items-center gap-2 ">
                                        <a href="{{$val->source->url}}">
                                            <img class="w-7 h-7" src="{{ asset('/images/6523-information-5.png') }}">
                                        </a>
                                        <div>
                                            <p class="text-xs font-bold">{{$val->published_at->date}} | {{$val->published_at->time}}</p>
                                        </div>
                                    </div>
                                </div>

                                {{--<div class=" ">--}}
                                {{--<img class="w-44" src="{{ asset('/images/projectedlineup_logo.png') }}">--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>

                    <div class="aa de dn md aue avb bxn hidden">
                        <button type="button" class="adu alo axp bkx bmz bne bnq bog">
                            <span class="t">Close</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="oc se w-[1.5rem] h-[1.5rem]">
                                </path>
                            </svg>
                        </button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>