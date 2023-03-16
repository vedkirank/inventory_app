<html>
<nav>
    <ul>
        <li><a href="{{ route('asset.index') }}">Assets</a></li>
        <li><a href="{{ route('person.index') }}">People</a></li>
        <li><a href="{{ route('owner.index') }}">Ownership</a></li>
        @auth
            {{-- <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li> --}}
        @else
            {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
        @endauth
    </ul>
</nav>

{{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> --}}
    {{-- @csrf --}}
{{-- </form> --}}
</html>