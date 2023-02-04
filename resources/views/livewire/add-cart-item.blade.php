<div x-data>
    {{-- The best athlete wants his opponent at his best. --}}
    <p class="text-gray-700 mb-4">
        <span class="font-sembold text-lg">Available stock: {{$quantity}}</span>
    </p>
    <div class="flex">
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
            <x-button class="w-full" color="orange">
                Add to cart
            </x-button>

        </div>
        
    </div>
</div>
