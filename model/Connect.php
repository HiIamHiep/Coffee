<?php

class Connect
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'admin@1234';
    private $database = 'ban_caffe';

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



