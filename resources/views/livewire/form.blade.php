<div
    x-data="{
        age: @entangle('form.age').live,
        name: @entangle('form.name').live,
        confirm: @entangle('form.confirm').live,
    }"
>
    <fieldset>
        <label for="age">Age</label><br>
        <input id="age" type="number" x-model="age"><br>
        <small>Will cause double update</small>
    </fieldset>

    <fieldset>
        <label for="name">Name</label><br>
        <input id="name" type="text" x-model="name"><br>
        <small>Will <strong>not</strong> cause double update</small>
    </fieldset>

    <fieldset>
        <label for="option_a">
            <input id="option_a" type="radio" x-model="confirm" value="true"> Yes
        </label>
        <label for="option_b">
            <input id="option_b" type="radio" x-model="confirm" value="false"> no
        </label><br>
        <small>Will cause double update</small>
    </fieldset>

</div>
