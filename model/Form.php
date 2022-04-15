<?php
namespace ABI\model;
/**
 * Form
 */
class Form
{    
    /**
     * data
     *
     * @var mixed
     */
    private $data;
    public function __contruct($data)
    {
        $this->data=$data;
    }
    
    /**
     * input
     *
     * @param  mixed $type
     * @param  mixed $name
     * @param  mixed $label
     * @return void
     */
    public static function input($type, $name, $label)
    {
        return <<<HTML
        <div class="form-group">
          <label for={$name}>{$label}</label>
          <input type={$type} name={$name} id={$name} class="form-control" placeholder="" aria-describedby="helpId">
         
        </div>
HTML;

    }    
    /**
     * submit
     *
     * @param  mixed $text
     * @return void
     */
    public static function submit($text)
    {
        return <<<HTML
        <button class='btn btn-primary'>{$text}</button>
HTML;
    }

}
?>