<div>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="name" placeholder="Name">
        <button type="submit">Submit</button>
    </form>

    @if (session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif
</div>


