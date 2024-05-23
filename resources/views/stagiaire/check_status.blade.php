@extends('layouts.app')

@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        @if (auth()->guard('stagiaire')->user()->accepted == 'accepted')
            <div class="w-2/4 border-2 border-blue-400 flex flex-col text-blue-700 p-10 bg-blue-50 rounded-lg">
                <div>congratulatios {{ auth()->guard('stagiaire')->user()->fname }}, you has been selected</div>
            </div>
        @elseif (auth()->guard('stagiaire')->user()->accepted == 'rejected')
            <div class="w-2/4 border-2 border-red-400 flex flex-col text-red-700 p-10 bg-red-50 rounded-lg">
                <div>unfortunatly {{ auth()->guard('stagiaire')->user()->fname }}, you has not been selected</div>
            </div>
        @else
            <div class="w-2/4 border-2 border-slate-400 flex flex-col text-slate-700 p-10 bg-slate-50 rounded-lg">
                <div>check another time {{ auth()->guard('stagiaire')->user()->fname }}, you are still on check</div>
            </div>
        @endif
    </div>
@endsection
