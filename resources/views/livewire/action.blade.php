<div>
    <button wire:click="addTwoNumbers(2,22)">Sum</button>
    <br>
    Message :
    <br>
    <textarea wire:keydown.enter="DisplayMessage($event.target.value)" cols="30" rows="10"></textarea>
    <br>


    <form wire:submit.prevent="sumNum">
        Number One: <input type="text" name="num1" wire:model="num1"><br>
        Number Two: <input type="text" name="num2" wire:model="num2"><br>
        <button type="submit">Submit</button>
    </form>


    <hr>

    Result: {{ $sum }}
    <br>
    Message: {{ $message }}
</div>
