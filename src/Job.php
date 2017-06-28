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

        function setTitle($title) {
            $this->title = (string) $title;
        }

        function getTitle() {
            return $this->title;
        }

        function setDescription($description) {
            $this->description = (string) $description;
        }

        function getDescription() {
            return $this->description;
        }

        function setDates($dates) {
            $this->dates = (string) $dates;
        }

        function getDates() {
            return $this->dates;
        }

        function setImage($image_url) {
            $this->image_url = (string) $image_url;
        }

        function getImage() {
            return $this->image_url;
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

    class Person {
        private $name;
        private $email;

        function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
        }

        function setName($name) {
            $this->name = (string) $name;
        }

        function getName() {
            return $this->name;
        }

        function setEmail($email) {
            $this->email = (string) $email;
        }

        function getEmail() {
            return $this->email;
        }

        function save() {
            array_push($_SESSION['person_info'], $this);
        }

        static function getAll() {
            return $_SESSION['person_info'];
        }

        static function deleteAll() {
            return $_SESSION['person_info'];
        }
    }
?>
