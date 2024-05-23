@extends('layouts.app')

@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <form action="{{ route('stagiaire.upload.a') }}" method="post" enctype="multipart/form-data" class="flex flex-col gap-5">
            @csrf
            <div>
                <input type="file" id="file-upload" name="bac" class="hidden" />
                <label for="file-upload" class="cursor-pointer flex items-center space-x-2">
                    <img src="{{ asset('/assets/upload.svg') }}" alt="not found" class="w-[20px]">
                    <span class="text-slate-600">Upload Bac image</span>
                </label>
            </div>
            <button type="submit">next</button>
        </form>
    </div>
@endsection
