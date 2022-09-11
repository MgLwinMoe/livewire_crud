<div>
    <input type="title" wire:model="title">
    <input type="name" wire:model="name">
    <hr>

    <h3>Title: {{$title}}</h3>
    <h3>Name: {{$name}}</h3>

    <h3>Life cycle Hooks</h3>

    @foreach ($infos as $info)
        <h4>{{$info}}</h4>
    @endforeach
</div>
