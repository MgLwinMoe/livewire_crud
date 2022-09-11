<div>
    Name:
    <br>
    <input type="text" wire:model="name" /><br>
    Message:
    <br>
    <textarea wire:model="message" cols="30" rows="10"></textarea><br>
    Marital Status:
    <br>
    Single: <input type="radio" wire:model="status" value="Single" /><br>
    Married: <input type="radio" wire:model="status" value="Married" /><br>
    <hr>
    Name: {{ $name }}
    <br>
    Message: {{ $message }}
    <br>
    Status: {{ $status }}
</div>
