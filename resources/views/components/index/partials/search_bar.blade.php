<form class="d-flex" role="search" id="form_busqueda">
    @csrf

    <input class="form-control me-2 dull-white" id="barra_busqueda" placeholder="Buscar productos" aria-label="Search">

    <!-- Ícono lupa -->
    <svg
        xmlns="http://www.w3.org/2000/svg"
        class=" top-50 search-icon d-lg-block"
        width="25"
        height="25"
        viewBox="0 0 20 20"
        fill="currentColor"
    >
        <path
            fill-rule="evenodd"
            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            clip-rule="evenodd"
        />
    </svg>

</form>
