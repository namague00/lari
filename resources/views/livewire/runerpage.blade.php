<div>
    <form wire:submit.prevent="submit">
        <div>
            <label for="bib">Bib:</label>
            <input type="text" id="bib" wire:model="bib">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>