<?php

//подключение
function getConnection()
{
    $dbConfig = include CONFIG_DIR . 'db.php';
    static $conn = NULL;
    if(is_null($conn)){
        $conn = mysqli_connect(
            $dbConfig["host"],
            $dbConfig["user"],
            $dbConfig["pass"],
            $dbConfig["db"]
        );
    }
    return $conn;

}
//запросы не требующие ответа
function execute(string $sql)
{
    return mysqli_query(getConnection(), $sql);
}
//получить данные по результату
function queryAll($sql)
{
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}
//одиночные данные
function queryOne($sql)
{
    return queryAll($sql)[0];
}
function closeConnection()
{
    return mysqli_close(getConnection());
}
