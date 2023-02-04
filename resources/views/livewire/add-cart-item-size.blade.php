<div x-data>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <p class="text-gray-700 mb-4">
        <span class="font-sembold text-lg">Available stock: {{$quantity}}</span>
    </p>

    <p class="text-xl text-gray-700">Size</p>

    <select wire:model="size_id" class="form-control w-full">
        <option value="" selected disabled>Select one size</option>
        @foreach ($sizes as $size)
            <option value="{{$size->id}}">{{$size->name}}</option>
        @endforeach
    </select>

    <select wire:model="color_id" class="form-control w-full mt-4">
        <option value="" selected disabled>Select one color</option>
        @foreach ($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
        @endforeach
    </select>

    <div class="flex mt-4">
        <div class="mr-4">
            <x-jet-secondary-button  
            disabled 
            x-bind:disabled="$wire.qty<=1" 
            wire:loading.attr="disabled"
            wire:target="decrement"
            wire:click="decrement">
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-gray-700">{{$qty}}</span>
            <x-jet-secondary-button 
            disabled 
            x-bind:disabled="$wire.qty>=$wire.quantity" 
            wire:loading.attr="disabled"
            wire:target="increment"
            wire:click="increment">
                +
            </x-jet-secondary-button> 
        </div>
        <div class="flex-1">
            <x-button class="w-full" color="orange"
             x-bind:disabled="!$wire.quantity">
                Add to cart
            </x-button>

        </div>
        
    </div>
</div>
