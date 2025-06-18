<x-app>
    <x-slot name="title">
        Contatti
    </x-slot>

    <h1>Ciao, sei in contatti</h1>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/invia-email" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input type="text" value="{{ old('firstname') }}" class="form-control" name="firstname">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Congome</label>
                <input type="text" value="{{ old('lastname') }}" class="form-control" id="exampleFormControlInput3"
                    name="lastname" placeholder="Caio">
                @error('lastname')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" required class="form-control"
                    id="exampleFormControlInput3" name="email" placeholder="Tizio caio">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Corpo del Messaggio</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>
        </form>
    </div>
</x-app>
