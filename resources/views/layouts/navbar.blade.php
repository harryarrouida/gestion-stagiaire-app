@if (auth()->guard('stagiaire')->check())
    <div class="w-full p-3 flex justify-between items-center border-b-2 shadow-md bg-slate-50">
        <div class="w-2/5 flex justify-start items-center">
            {{-- logo goes here --}}
            <img src="{{ asset('assets/ofppt.png') }}" alt="not found" class="w-[70px]">
            <a class="ml-5" href="/">OFPPT</a>
        </div>
        <div class="w-full flex justify-end items-center gap-5 p-5">
            {{-- as many as neccesary --}}
            <a href="{{ route('stagiaire.check.v') }}">status</a>
            <form method="get" action="{{ route('stagiaire.logout.a') }}">
                @csrf
                <button type="submit">logout</button>
            </form>
        </div>
    </div>
    {{-- <p class="relative top-1 left-3">{{ url()->current() }}</p> --}}
@elseif (!auth()->guard('stagiaire')->check() && !auth()->guard('admin')->check())
    <div class="w-full p-3 flex justify-between items-center border-b-2 shadow-md bg-slate-50">
        <div class="w-2/5 flex justify-start items-center">
            {{-- logo goes here --}}
            <img src="{{ asset('assets/ofppt.png') }}" alt="not found" class="w-[70px]">
            <a class="ml-5" href="/">OFPPT</a>
        </div>
        <div class="w-full flex justify-end items-center gap-5 p-5">
            {{-- as many as neccesary --}}
            <a href="{{ route('stagiaire.inscription.v') }}">Inscription</a>
            <a href="{{ route('stagiaire.login.v') }}">Login</a>
        </div>
    </div>
@endif

@if (auth()->guard('admin')->check())
    <div class="w-full p-3 flex justify-between items-center border-b-2 shadow-md bg-slate-50">
        <div class="w-2/5 flex justify-start items-center">
            {{-- logo goes here --}}
            <img src="{{ asset('assets/ofppt.png') }}" alt="not found" class="w-[70px]">
            <a class="ml-5" href="/">OFPPT</a>
        </div>
        <div class="w-full flex justify-end items-center gap-5 p-5">
            {{-- as many as neccesary --}}
            {{-- <a href="{{ route('stagiaire.inscription.v') }}">Inscription</a> --}}
            <a href="{{ route('admin.applications.v') }}">Applications</a>
            <a href="{{ route('admin.stagiaires.v') }}">Stagiaires</a>
            <a href="{{ route('admin.logout.v') }}">Logout</a>
        </div>
    </div>
@endif
