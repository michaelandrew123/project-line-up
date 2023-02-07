@extends('layouts.master')

@section('content')

<div class="w-full flex flex-col items-center bg-stone-200 ">
   
    <div class="w-[90%] flex flex-col gap-3">
        <div class="w-full flex flex-row items-center justify-between">
            <h1 class="text-2xl font-bold">Daily Hockey Projections</h1>
            <a class="text-blue-400 text-[12px] text-end" href="#">Show Help</a>
        </div>
        <hr>
        <div>
           <ul class="flex flex-row gap-3">
                <li class="">
                    <select style="-webkit-appearance: none;" class="w-[12rem] p-1.5 text-[12px] border border-2 " name="" id="">
                        <option value="">Daily Hockey Projections</option>
                        <option value=""></option>
                    </select>
                </li>
                <li class="">
                    <select style="-webkit-appearance: none;" class="w-[12rem] p-1.5 text-[12px] border border-2 " name="" id="">
                        <option value="">Skaters</option>
                    </select>
                </li>
           </ul>
        </div>
        <div classs="relative flex flex-col">
            <table  class="w-full flex flex-col">
                <tr class="flex flex-row justify-between h-[1.5rem] sticky top-0 bg-white">
                    <td class="flex justify-center items-center border border-slate-200 w-full text-[12px] font-semibold"><h1 class="text-md font-medium">Draftkings</h1></li>
                    <td class="flex justify-center items-center border border-slate-200 w-full text-[12px] font-semibold"><h1 class="text-md font-medium">Stats</h1></li>
                </tr>
                <tr class="flex flex-row justify-between h-[1.5rem] sticky top-0 bg-white">
                    <td class="flex justify-center items-center border  w-full border border-slate-200 text-[12px] font-semibold"><h1 class="text-md font-medium">Player</h1></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">FP</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">SALARY</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">VALUE</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">SHOTS</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">GOALS</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">AST</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">PTS</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">PPG</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">PPA</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">+/-</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">BLK</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">MIN</a></td>
                    <td class="flex justify-center items-center border  w-[20%] border border-slate-200 text-[12px] font-semibold "><a class=" text-md font-medium underline" href="#">PIM</a></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">14.5</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$7,600</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.9</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.51</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.60</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.74</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">01.34</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.12</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.28</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.38</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.31</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">14.5</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$7,600</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.9</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.51</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.60</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.74</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">01.34</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.12</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.28</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.38</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.31</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">14.5</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$7,600</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.9</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.51</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.60</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.74</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">01.34</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.12</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.28</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.38</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.31</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">14.5</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$7,600</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.9</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.51</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.60</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.74</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">01.34</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.12</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.28</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.38</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.31</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">14.5</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$7,600</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.9</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.51</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.60</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.74</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">01.34</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.12</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.28</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.38</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.31</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-white">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Steven Stamkos C</h1>
                                <p class="text-[11px] ">MIN @ <b>TB</b></p>
                                <p class="text-[9px]">Tue 7:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">14.5</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$7,600</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.9</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.51</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.60</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.74</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">01.34</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.12</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.28</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.38</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.31</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr>
                <tr class="flex justify-between h-[3rem] bg-stone-100 ">
                    <td class="flex flex-col justify-center  border border-slate-200 justify-start w-full ">
                        <div class="flex flex-row  gap-2 ml-2">
                            
                            <div class="flex flex-col">
                                <h1 class="text-sky-300 text-[12px] font-normal">Tage Thompson C</h1>
                                <p class="text-[11px] "><b>BUF</b> @ STL</p>
                                <p class="text-[9px]">Tue 8:00pm</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class=" text-md font-medium">13.9</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">$9,000</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.55</p</td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">3.69</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.53</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.67</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">1.2</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.16</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">+0.25</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">19.4</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">20.7</p></td>
                    <td class="flex justify-center items-center w-[20%] border border-slate-200 text-[12px] font-semibold"><p class="text-md font-medium">0.57</p></td>
                </tr> 
            </table>
        </div>
        
    </div>
    
</div>




















@endsection