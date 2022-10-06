<section class="parallax parallax-2" style="background-image: url('{{ /*$module->image->path*/ }}'); background-position: 50% -133px;">
    <div class="overlay dark-8">{{-- dark overlay [1 to 9 opacity] --}}</div>
    <div class="container">
        {{ $slot }}
    </div>
</section>
