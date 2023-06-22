<?php

class Connect
{
    private $host = 'us-cdbr-east-06.cleardb.net';
    private $user = 'b68a8766e141a8';
    private $password = 'f88fa9af';
    private $database = 'heroku_e5d511da014290d';

    private function cnt()
    {
        $connect = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        mysqli_set_charset($connect, "utf8");

        return $connect;
    }

    public function select($sql)
    {
        $connect = $this->cnt();

        $result = mysqli_query($connect, $sql);

        mysqli_close($connect);

        return $result;
    }

    public function execute(string $sql)
    {
        $connect = $this->cnt();

        $result = mysqli_query($connect, $sql);

        mysqli_close($connect);

        return $result;
    }

}



