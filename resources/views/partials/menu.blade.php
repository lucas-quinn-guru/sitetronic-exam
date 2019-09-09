@push( 'header-nav-items-menu' )
    @auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('exam.index') }}">Exams</a>
    </li>
    @endauth
@endpush

@push( 'header-nav-profile-items-menu' )
    @auth
    <a class="dropdown-item" href="{{ route('exam.index') }}">Exams</a>
    @endauth
@endpush
