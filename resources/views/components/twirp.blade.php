@props(['twirp'])

<div class="max-w-2xl mx-auto">
      
    
        @forelse ($twirp as $twirps) <!--mudou de enquanto pra , para cada-->
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body p-8 rounded">
                     <div>
                        <div class="font-semibold">{{$twirps->user ? $twirps->user->name : 'Anonimo' }}</div> <!-- puxa as twirp do db e puxa caso for nulo, substituir o nome pra anonimo-->
                        <div class="mt-1">{{$twirps->message}}</div>
                        <div class="text-sm text-gray-500 mt-2">
                            {{$twirps->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>
        @empty<!-- se não tiver nenhum twirp ele manda issoaqui-->
            <p>Sem twirps por enquanto. Seja o primeiro a mandar</p>
        @endforelse        
    </div>