<h1>Formulaire</h1>

<?php
/**
 * permet de générer un formulaire simplement
 */


class Form{
    /**
     * @var array Données utilisées par le formlaire
     */
    private $data;
    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data Données utilisées par le formlaire
     */
     */

    public function __construct($data = array()){
        $this->data = $data;
    }
    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }
        /**
     * @param $index string
     * @return string
     */
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    public function input($name){
        return $this->surround("<input type = 'text' name = '".$name."' value ='".$this->getValue($name)."'>",'p');
    }
    public function submit(){
        return $this->surround("<button type='submit'>Envoyer</button>");
    }
}