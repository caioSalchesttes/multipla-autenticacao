<div class="p-6">

    <input type="text" wire:model="pesquisa">

    @foreach($ola as $user)

        <p>{{$user->name}}</p>

    @endforeach

    <button wire:click="carregar">Carregar mais</button>

</div>
