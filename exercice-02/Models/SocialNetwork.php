<?php

    class SocialNetwork {
        private $_name;
        private $_link;

        public function __construct($name, $link) {
            $this->setName($name);
            $this->setLink($link);
        }

        function getName() {
            return $this->_name;
        }

        function setName($name) {
            $this->_name = $name;
        }

        function getLink() {
            return $this->_link;
        }

        function setLink($link) {
            $this->_link = $link;
        }
    }

?>