@props(['logo','name'])
<a class="brand-link" {{ $attributes }}>
    <img src="{{ $logo }}" alt="Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">{{ $name }}</span>
</a>