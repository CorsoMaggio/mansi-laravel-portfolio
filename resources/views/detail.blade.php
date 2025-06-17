<x-app>
    <x-slot name="title">
        Dettaglio di {{ $service['title'] }}
    </x-slot>

    <x-card class="col" :service="$service" :status="true"> </x-card>
</x-app>
