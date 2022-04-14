<?php
namespace ABI\model;
class Form
{
    private $data;
    public function __contruct($data)
    {
        $this->data=$data;
    }

    public static function input($type, $name, $label)
    {
        return <<<HTML
        <div class="form-group">
          <label for={$name}>{$label}</label>
          <input type={$type} name={$name} id={$name} class="form-control" placeholder="" aria-describedby="helpId">
         
        </div>
HTML;

    }
    public static function submit($text)
    {
        return <<<HTML
        <button class='btn btn-primary'>{$text}</button>
HTML;
    }

}
?>