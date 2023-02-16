<div>
<form wire:submit.prevent="button">
    <input type="text" wire:model="message" />
    <button>submit</button>
</form>
@if($message)
<p>{{ $message }}</p>
@endif
</div>
