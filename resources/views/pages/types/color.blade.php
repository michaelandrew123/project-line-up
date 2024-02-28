
{{--<h1 class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold">NHL random facts? </h1>--}}
{{--@php--}}
    {{--$nhl_text = 'random text for testing';--}}
{{--@endphp--}}
{{--{{$some}}--}}
{{--{{$nhl_text}}--}}
{{--@php--}}
    {{--$nhl_bg_color = 'bg-[#F10000]';--}}
{{--@endphp--}}
{{--{{ $nhl_bg_color }}--}}
{{--@if($val->type->slug == 'injury' || $val->type->slug == 'send-down' || $val->type->slug == 'suspension' || $val->type->slug == 'ruled-out' || $val->type->slug == 'healthy-scratch')--}}
    {{--@php--}}
        {{--$nhl_bg_color = 'bg-[#F10000]';--}}
    {{--@endphp--}}
    {{--@if($val->type->slug == 'injury')--}}
        {{--@php--}}
            {{--$nhl_type_icon ='';--}}
        {{--@endphp--}}
    {{--@else--}}
        {{--@php--}}
            {{--$nhl_type_icon ='';--}}
        {{--@endphp--}}
    {{--@endif--}}
{{--@elseif($val->type->slug == 'starting-goalie' || $val->type->slug == 'available' || $val->type->slug == 'call-up' || $val->type->slug == 'will-play')--}}
    {{--@if($val->metafields->goalie_status && $val->metafields->goalie_status->value == 'confirmed')--}}
        {{--@php--}}
            {{--$nhl_type_icon ='';--}}
            {{--$nhl_bg_color = 'bg-[#15D869]';--}}
        {{--@endphp--}}
    {{--@elseif($val->metafields->goalie_status && $val->metafields->goalie_status->value == 'expected')--}}
        {{--@php--}}
            {{--$nhl_type_icon ='';--}}
            {{--$nhl_bg_color = 'bg-[#FFCC00]';--}}
        {{--@endphp--}}
    {{--@else--}}
        {{--@php--}}
            {{--$nhl_type_icon ='';--}}
            {{--$nhl_bg_color = 'bg-[#15D869]';--}}
        {{--@endphp--}}
    {{--@endif--}}
{{--@elseif($val->type->slug == 'probable')--}}
    {{--@php--}}
        {{--$nhl_type_icon ='';--}}
        {{--$nhl_bg_color = 'bg-[#FFCC00]';--}}
    {{--@endphp--}}
{{--@elseif($val->type->slug == 'doubtful' || $val->type->slug == 'questionable')--}}
    {{--@php--}}
        {{--$nhl_bg_color = 'bg-[#FE6601]';--}}
        {{--$nhl_type_icon ='';--}}
    {{--@endphp--}}
{{--@elseif($val->type->slug == 'game-time-decision')--}}
    {{--@php--}}
        {{--$nhl_bg_color = 'bg-[#000000]';--}}
        {{--$nhl_type_icon ='';--}}
    {{--@endphp--}}
{{--@else--}}
    {{--@php--}}
        {{--$nhl_bg_color = 'bg-[#38B6FF]';--}}
        {{--$nhl_type_icon ='';--}}
    {{--@endphp--}}
{{--@endif--}}