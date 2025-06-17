 <div {{ $attributes }}>

     <div class="card h-100">
         @if ($status)
             <img src="" alt="">IMMAGINE
         @endif
         <div class="card-body">
             <h5 class="card-title"> {{ $service['id'] }} - {{ $service['title'] }}</h5>
         </div>
         <a class="btn btn-warning" href="/dettaglio/{{ $service['id'] }}">
             Dettagli
         </a>
     </div>
 </div>
