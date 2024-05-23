@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center w-full h-screen pt-48">
        <div class="flex flex-col gap-5 pb-10">
            <img src="{{ asset('assets/logo-long.png') }}" alt="not found" class="w-1/2 mx-auto"></img>
            <div class="flex flex-col w-4/5 mx-auto">
                <div class="flex justify-center items-center gap-10">
                    <div>
                        <p class='text-xl mb-8 font-bold'>C'est quoi OFPPT ?</p>
                        <div class="mx-auto w-full text-start mb-20">
                            L'Office de la formation professionnelle et de la promotion du travail (OFPPT) est un opérateur public
                            en formation professionnelle, couvrant le territoire marocain. Il a une capacité d'accueil de plus de
                            500 000 stagiaires dans 187 filières diplômantes et 133 qualifiantes.
                        </div>
                    </div>
                    <img src="{{ asset('home/1.jpg') }}" alt="not found" class="w-full rounded">
                </div>
                <p class='text-start text-xl mb-8 font-bold'>Our mission ?</p>
                <div class="mx-auto w-full text-start mb-3">
                    As the main public vocational training operator in Morocco, driven by the economic sector's needs, we
                    have a mission that defines our core purpose and helps to direct our actions and activities in order to:
                </div>
                <ul class="list-disc">
                    <li>Improve the quality of the training sector.</li>
                    <li>Improve the quality of the professional sector.</li>
                    <li>Improve the quality of the economy.</li>
                    <li>Improve the quality of the society.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
