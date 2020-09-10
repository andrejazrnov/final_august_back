<?php

namespace App\Core\Database;

class QueryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table} ORDER BY id DESC");

        $query->execute();

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getOne($table, $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE id='{$id}'");

        $query->execute();

        return $query->fetch(\PDO::FETCH_OBJ);
    }

    public function getOneByField($table, $parameters)
    {

        $params = '';
        foreach ($parameters as $key => $parameter) {
            $params .= "$key = '$parameter' AND ";
        }
        $params = substr($params, 0, -5);

        $query = $this->pdo->prepare("SELECT * FROM {$table} WHERE {$params}");


        $query->execute();

        return $query->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($table, $data)
    {

        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(", ", array_keys($data)),
            ":" . implode(", :", array_keys($data)));

        $query = $this->pdo->prepare($sql);

        $temp = $query->execute($data);


    }

    public function update($table, $data)
    {
        $id = $data['id'];
        unset($data['id']);

        $preparedParams = array_map(function ($item) {
            return $item . "=:" . $item;
        }, array_keys($data));

        $sql = sprintf("UPDATE %s SET %s WHERE id = '%s'",
            $table,
            implode(', ', $preparedParams),
            $id);


        $query = $this->pdo->prepare($sql);

        $query->execute($data);

    }

    public function delete($table, $id)
    {
        // DELETE FROM table WHERE id
        $sql = sprintf("DELETE FROM %s WHERE id='%s'",
            $table,
            $id);

        $query = $this->pdo->prepare($sql);
        $query->execute();
    }


    public function store()
    {

        $showInfo = json_decode(file_get_contents('php://select'), ARRAY_FILTER_USE_KEY);

        App::get('database')->insert('ships', $showInfo['name']);

        $form = $showInfo['formInfo']['form'];


    }
}
