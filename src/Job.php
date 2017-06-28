<?php
    class Job {
        private $company;
        private $title;
        private $description;
        private $dates;
        private $image_url;

        function __construct($company, $title, $description, $dates, $image_url) {
            $this->company = $company;
            $this->title = $title;
            $this->description = $description;
            $this->dates = $dates;
            $this->image_url = $image_url;
        }

        function setCompany($company) {
            $this->company = (string) $company;
        }

        function getCompany() {
            return $this->company;
        }

        function save() {
            array_push($_SESSION['list_of_jobs'], $this);
        }

        static function getAll() {
            return $_SESSION['list_of_jobs'];
        }

        static function deleteAll() {
            $_SESSION['list_of_jobs'] = array();
        }
    }
?>
