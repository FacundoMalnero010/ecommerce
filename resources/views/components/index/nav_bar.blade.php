<nav class="navbar navbar-expand-lg fixed-top">

    <div class="container">

        <a class="navbar-brand dark-black" id="redirec_inicio" href="{{ route('index') }}">FAKA</a>

        <x-index.partials.collapsed_toggler
            idNavItemsContainer="{{ $idNavItemsContainer }}"
        />

        <div class="collapse navbar-collapse" id="{{ $idNavItemsContainer }}">

            <x-index.partials.search_bar/>

            <ul class="navbar-nav navbar-nav-scroll ml-auto">

                <x-index.partials.nav_item
                    section="Categorias"
                />

                <x-index.partials.nav_item_with_image
                    section="Cuenta"
                    imageRoute="index/cuenta"
                    imageHeight="30px"
                />

                <x-index.partials.nav_item_with_image
                    section="Carrito"
                    imageRoute="index/carrito"
                    imageHeight="25px"
                />

            </ul>

        </div>

    </div>

</nav>
