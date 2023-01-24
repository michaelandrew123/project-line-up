@extends('layouts.master')

@section('content')

<div class="w-full flex justify-center">
    <div class="w-[90%] h-[2.5rem] bg-gradient-to-r from-blue-400 to-cyan-500">
        <ul class="flex flex-row gap-5">
            <li class="flex flex-col justify-center ">
                <h1 class="text-md">NHL DFS</h1>
                <p class="text-sm">Optimal Lineup</p>
            </li>
            <li class="flex justify-center items-center hover:bg-white">
                <a class="" href="#">Locked Player</a>
            </li>
            <li class="flex justify-center items-center bg-white">
                <a class="" href="#">Excluded Players</a>
            </li>
            <li class="flex justify-center items-center bg-white">
                <a class="" href="#">Excluded Teams</a>
            </li>
        </ul>
    </div>
</div>




















@endsection