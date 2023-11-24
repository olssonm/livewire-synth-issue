<div
    x-data="{
        age: @entangle('form.age').live
    }"
>
    <fieldset>
        <label for="age">Age</label><br>
        <input id="age" type="number" x-model="age"><br>
        <small>Will <strong>not</strong> cause double update</small>
    </fieldset>
</div>
