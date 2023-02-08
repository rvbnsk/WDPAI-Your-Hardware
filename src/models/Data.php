<?php

class Data {
    private $title;
    private $description;
    private $createdBy;
    private $imageUrl;

    public function __construct($title, $description, $createdBy, $imageUrl) {
        $this->title = $title;
        $this->description = $description;
        $this->createdBy = $createdBy;
        $this->imageUrl = $imageUrl;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCreatedBy() {
        return $this->createdBy;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

    public function setImageUrl($imageUrl) {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    public function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;  
        return $this;
    }
}