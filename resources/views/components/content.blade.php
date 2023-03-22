@props(['title','icon'])
<div class="content-header mb-2">
    @if (isset($title))
    <div class="container-fluid ">
        <h1 class="m-0">
            @if (isset($icon))
            <i class="mr-1 {{ $icon }}"></i>
            @endif            
            <?= $title ?>
        </h1>
    </div>
    @endif
</div>

<div class="content">
    <div class="container-fluid">
        {{ $slot }}
    </div>
</div>