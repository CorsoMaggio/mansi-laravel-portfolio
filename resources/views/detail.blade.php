<x-app>
    <x-slot name="title">
        Dettaglio di {{ $service['title'] }}
    </x-slot>

    <x-card :service="$service"> </x-card>
</x-app>
