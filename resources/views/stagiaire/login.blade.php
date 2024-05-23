@extends('layouts.app')

@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="w-full h-screen flex justify-center items-center mt-20">
            <div class="w-1/2 flex flex-col mx-auto mb-28">
                <img src="{{ asset('assets/logo-long.png') }}" alt="not found" class="w-2/3 mx-auto">
                <div class="w-2/3 text-start mx-auto">
                    At OFPPT, we believe in the power of education to transform lives and communities. Our mission is to
                    equip young minds with the skills, knowledge, and experiences they need to thrive in today's dynamic
                    world. We offer a comprehensive 2-year formation program designed to bridge the gap between academic
                    learning and practical career readiness.
                </div>
            </div>
            <div class="w-1/2 flex justify-start items-center">
                <form action="{{ route('stagiaire.login.a') }}" method="post" class="grid grid-cols-2 gap-5">
                    @csrf
                    <div class="col-span-2 text-start text-3xl mb-10">
                        Login...</br>
                        <p class="text-lg font-normal my-3">
                            Login now and keep up with the status of your application
                        </p>
                    </div>
                    <div class="flex flex-col gap-5 w-full col-span-2">
                        <input type="email" name="email" class="input input-bordered" placeholder="email" class="w-full">
                        <input type="password" name="password" class="input input-bordered" placeholder="password" class="w-full">
                    </div>
                    <div class="col-span-2 text-end">
                        <button type="submit" class="hover:text-blue-400">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
