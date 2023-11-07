<x-filament-notifications::notification
    :notification="$notification"
    class="flex w-80 rounded-lg transition duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:leave-end="opacity-0"
>
    <h4>
        {{ product->id }}
    </h4>
  
    <span x-on:click="close">
        Close
    </span>
</x-filament-notifications::notification>