<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">Mon E-commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach ($items as $item)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>