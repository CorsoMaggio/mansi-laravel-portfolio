<x-app>
    <h1>Ciao, sei in chi sono</h1>
    <div class="container">

        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">

                @foreach ($services as $service)
                    <li class="list-group-item">
                        <a href="/dettaglio/{{ $service['id'] }}">
                            {{ $service['id'] }} - {{ $service['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</x-app>
