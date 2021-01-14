<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        showing edit
    </h2>
</x-slot>
<div>
    @extends('view')
    <livewire :add-data :$event=null> </@livewire('Eventview', ['Eventview' => $event],
     key($event->id))
</div>
