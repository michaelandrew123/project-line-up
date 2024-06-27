@extends('layouts.master-nhl-v1')

@section('content')

    <div class="w-full justify-center flex sm:mt-10  mt-0 ">
        <div class="xl:w-10/12 lg:w-10/12 md:w-10/12 sm:w-10/12  w-11/12 justify-center flex flex-col items-center gap-5 md:max-w-screen-2xl sm:mb-0 mb-10 ">

            @include('pages.home.nba')
            @include('pages.home.nhl')
            @include('pages.home.nfl')
            {{--@include('pages.home.mlb1')--}}
            @include('pages.home.mlb')
            @include('pages.home.epl')

        </div>
    </div>
    <!-- API link  https://api.projectedlineups.com/v1/sports/leagues -->
    <!-- Mobile design -->


@endsection
