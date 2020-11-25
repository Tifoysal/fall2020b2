<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('category.form')}}">
                    <span data-feather="shopping-cart"></span>
                    Create Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.list')}}">
                    <span data-feather="shopping-cart"></span>
                    Category List
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('product.form')}}">
                    <span data-feather="shopping-cart"></span>
                    Create Product
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.list')}}">
                    <span data-feather="shopping-cart"></span>
                    Product List
                </a>
            </li>

        </ul>
    </div>
</nav>
