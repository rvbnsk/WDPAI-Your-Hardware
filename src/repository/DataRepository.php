<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Data.php';

class DataRepository extends Repository {
    public function getData() {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.data
        ');

        $stmt->execute();
        $data = $stmt->fetchAll();

        if($data == false) {
            return null;
        }

        return json_encode($data);
    }

    public function getDataById($id) {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.data WHERE id = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if($data == false) {
            return null;
        }

        return $data;
    }

    public function addPost(Data $data){
        if($data->getTitle() == null ||
            $data->getDescription() == null ||
            $data->getCreatedBy() == null
        ) {
            return;
        }

        $stmt = $this->database->connect()->prepare("
            INSERT INTO data(title, description, createdBy, imageUrl) VALUES (?, ?, ?, ?)
        ");

        $stmt->execute([
            $data->getTitle(),
            $data->getDescription(),
            $data->getCreatedBy(),
            $data->getImageUrl()
        ]);
    }
}