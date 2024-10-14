<?php
include_once __DIR__.'/FormPage.php';

class EditItemPage extends FormPage
{
    private $formResults;
    
    public function __construct()
    {

    }
    public static function WithResults($formResults)
    {
        $instance = new self();
        $instance->formResults = $formResults;
        return $instance;
    }
    function showTitle()
    {
        echo "EditItem";

    }
    function showBody()
    {
        $this->showForm(REGISTERFORMDATA, $this->formResults, 'EditItem', 'EditItem', 'Edit item', 'Edit');
    }
}