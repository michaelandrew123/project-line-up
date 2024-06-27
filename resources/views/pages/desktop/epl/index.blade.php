
<div id="shirt-footer" class="sm:flex flex-col gap-2  ">
    <div class="flex flex-col gap-2 mt-0 sm:mt-0 w-full" id="forwards">

        @foreach($result as $val)
            @if($val->formation && $val->formation->slug)
                @if($val->formation->slug == '3-4-3')
                    @include('pages.desktop.epl.343.formation')
                @elseif($val->formation->slug == '3-5-2')
                    @include('pages.desktop.epl.352.formation')
                @elseif($val->formation->slug == '4-3-3')
                    @include('pages.desktop.epl.433.formation')
                @elseif($val->formation->slug == '4-4-2')
                    @include('pages.desktop.epl.442.formation')
                @elseif($val->formation->slug == '4-5-1')
                    @include('pages.desktop.epl.451.formation')
                @elseif($val->formation->slug == '3-2-4-1')
                    @include('pages.desktop.epl.3241.formation')
                @elseif($val->formation->slug == '3-4-2-1')
                    @include('pages.desktop.epl.3421.formation')
                @elseif($val->formation->slug == '4-1-4-1')
                    @include('pages.desktop.epl.4141.formation')
                @elseif($val->formation->slug == '4-2-2-2')
                    @include('pages.desktop.epl.4222.formation')
                @elseif($val->formation->slug == '4-2-3-1')
                    @include('pages.desktop.epl.4231.formation')
                @elseif($val->formation->slug == '4-3-2-1')
                    @include('pages.desktop.epl.4321.formation')
                @elseif($val->formation->slug == '4-1-2-1-2')
                    @include('pages.desktop.epl.41212.formation')
                @endif
            @endif
        @endforeach
    </div>

</div>