@extends('layouts.master-nhl-v1')

@section('content')

    <style>

        body{
            background-color: #f5f5f5;
        }
    </style>
    <div class="w-full flex justify-center ">
        <div class="  flex flex-col items-center gap-10 xl:w-10/12 lg:w-10/12  md:w-10/12 sm:w-10/12 w-11/12 md:max-w-screen-2xl ">
            <div class="w-full  flex flex-col  mt-10 gap-6  ">
                <div id="vue-nhl-matchup">
                    <nhl-matchup></nhl-matchup>
                </div>
                {{--@include('pages.matchup.index')--}}

            </div>
        </div>
    </div>



@endsection
