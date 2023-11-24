<?php

namespace App\Synths;

use App\Resources\Form;
use Livewire\Mechanisms\HandleComponents\Synthesizers\Synth;

class FormSynth extends Synth
{
    public static $key = 'form-resource';

    public static function match($target)
    {
        return $target instanceof Form;
    }

    public function dehydrate($target)
    {
        return [[
            'name' => $target->name,
            'age' => $target->age,
            'confirm' => $target->confirm,
        ], []];
    }

    public function hydrate($value)
    {
        $instance = new Form;

        $instance->name = $value['name'];
        $instance->age = $value['age'];
        $instance->confirm = $value['confirm'];

        return $instance;
    }

    public function get(&$target, $key)
    {
        return $target->{$key};
    }

    public function set(&$target, $key, $value)
    {
        $target->{$key} = $value;
    }
}
