<?php

    class Card{

        public $nb_paires;
        public $card_files;
        public $cards;
        public $pairs;

        public function Melange_img(int $nb_paires) {

            $card_files = array('cartes/carte01.jpg' , 'cartes/carte02.jpg' , 'cartes/carte03.jpg' , 'cartes/carte04.jpg' , 'cartes/carte05.jpg' , 'cartes/carte06.jpg' , 'cartes/carte07.jpg' , 'cartes/carte08.jpg' , 'cartes/carte09.jpg' , 'cartes/carte10.jpg' , 'cartes/carte11.jpg' , 'cartes/carte12.jpg' , 'cartes/carte13.jpg' , 'cartes/carte14.jpg' , 'cartes/carte15.jpg' , 'cartes/carte16.jpg' , 'cartes/carte17.jpg');

            // Shuffle the available image files array so  
            // we won't pick the same ones every time
            shuffle($card_files);

            $this->card_files = $card_files;

            $this->nb_paires = $nb_paires;

        }

        public function Create_pairs(array $tab) {
            
            // Double the array so that we'll have pairs
            $tab = array_merge($tab, $tab);

            // Shuffle the cards to create their order on the board
            shuffle($tab);

            $this->pairs = $tab;

            var_dump($tab);

        }

        public function Create_card($card_file) {

            $path = $card_file;

            echo '<td><form method="POST"><input type="checkbox" name="card_return[]" value="return' . $card_file[12] . $card_file[13] . '" /><img src="' . $path . '"></td>';

        }






        
        // function __construct($url) {
        //     $this->url = $url;
        //     $this->css_class = $this->extract_name($url);
        // }
        
        // function get_name(){
        //     return $this->css_class;
        // }
        
        // function get_css_block(){
        //     return "n.".$this->get_name()."{background:url(" . $this->url . ") center center no-repeat;}";
        // }
        
        // function get_html_simple_block(){
        //     return "r<div class=\"card {toggle:'" . $this->get_name() . "'}\"></div>";
        // }
        
        // function get_html_block(){
        //     return "r<div class=\"card {toggle:'" . $this->get_name() . "'}\">
        //             r<div class=\"off\"></div>
        //             r<div class=\"on\"></div>
        //         </div>";
        // }
        // private function extract_name($str){
        //     $tmp = pathinfo($str);
        //     return $tmp['filename'];
        // }
    }

?>