<form action="{{ route('set_language_locale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="nav-link btn-locale text-white">
        <span>{{ Str::upper($lang) }}</span>
    </button>
</form>