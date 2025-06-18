<x-app>
    <x-slot name="title">
        Chi sono
    </x-slot>
    <h1>Ciao, sei in chi sono</h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($services as $service)
                <x-card class="col text-danger" :service="$service" :status="true"></x-card>
            @endforeach
        </div>

    </div>
</x-app>
