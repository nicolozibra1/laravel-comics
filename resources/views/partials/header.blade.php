<header class="container d-flex justify-content-center align-items-center p-3 gap-5">
    <div class="container-logo debug">
        <div class="box-logo debug">
            <img src="/img/dc-logo.png" alt="dc logo" class="debug">
        </div>
    </div>
    {{-- <a href="#" class="hamburger fs-4" v-if="!open"><i class="fa-solid fa-bars"></i></a>
    <a href="#" class="cross fs-2" v-if="close"><i class="fa-solid fa-xmark"></i></a>
    <ul v-for="link in links" :key="link.id" :id="link.id" class="navbar list-unstyled">
        <li class="px-3">
            <a href="#">{{ link.title }}</a>
        </li>
    </ul> --}}
    <div class="v-menu" v-if="open">
        <ul v-for="link in links" :key="link.id" :id="link.id" class="list-unstyled mb-2">
            @foreach ($nav_links as $link )
                <li><a href="#">{{$link}}</a></li>
            @endforeach
        </ul>
    </div>
</header>

