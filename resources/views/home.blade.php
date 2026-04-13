<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        @foreach ($twirpe as $twirpes)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                     <div>
                        <div class="font-semibold">{{$twirpes['author']}}</div>
                        <div class="mt-1">{{$twirpes['message']}}</div>
                        <div class="text-sm text-gray-500 mt-2">{{$twirpes['time']}}</div>
                    </div>
                </div>
            </div>
         @endforeach        
    </div>
</x-layout>