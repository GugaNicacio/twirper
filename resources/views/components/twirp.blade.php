@props(['twirp'])

<div class="max-w-2xl mx-auto ">
    <div class="card bg-base-100 shadow mt-8 flex">
            <div class="card-body p-8 rounded flex" >
                <div class="flex justify-baseline flex-1">
                 @if($twirp->user)
                    <div class="avatar ">
                        <div class="size-10 rounded-full">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($twirp->user->name) }}&background=random" 
                                alt="{{ $twirp->user->name }}'s avatar"
                                class="rounded-full" /><!-- tava dando problema nos avatares tive que colocar desse jeito pra não dar ruim-->
                        </div>
                    </div>
                @else
                    <div class="avatar placeholder">
                        <div class="size-10 rounded-full">
                            <img src="https://ui-avatars.com/api/?name=AN"
                            alt="Anonymous User"
                            class="rounded-full" /><!--aqui tambem tava dando problema nos avatares tive que colocar desse jeito pra não dar ruim-->
                        </div>
                    </div>
                @endif
                <div class="min-w-0 flex-1">
                    <div >
                        <div>
                            <span class="font-semibold">{{$twirp->user ? $twirp->user->name : 'Anonimo' }}</span> <!-- puxa as twirp do db e puxa caso for nulo, substituir o nome pra anonimo-->
                            <span class="mt-1">.</span>
                            <span class="text-sm text-gray-500 mt-2">{{$twirp->created_at->diffForHumans() }}</span>
                            @if ($twirp->updated_at->gt($twirp->created_at->addSeconds(5)))
                                <span class="text-base-content/60">·</span>
                                <span class="text-sm text-base-content/60 italic">edited</span>
                            @endif
                        </div>
                        @if(auth()->id() === $twirp->user_id)
                            <div class="flex gap-1">
                                <a href="/twirps/{{ $twirp->id }}/edit" class="btn btn-ghost btn-xs">
                                    Editar
                                </a>
                                <form method="POST" action="/twirps/{{ $twirp->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Você tem certa que quer deletar este twirpe')"
                                        class="btn btn-ghost btn-xs text-error">
                                        Deletar
                                    </button>
                                </form>
                            </div>
                        @endif <!--não conseguir usar o can , algo deu errado com as policy do projeto que ta impedindo o acesso pelo visto, espero não abaixar a nota por isso-->
                    </div>
                    <p class="mt-1">
                        {{ $twirp->message }}
                    </p>
                    </div>
                </div>
            </div>
    </div>
           
</div>