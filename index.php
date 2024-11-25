<?php
require 'info.html';
$data = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $data['text'] = htmlspecialchars(trim($_POST["text"] ?? ''));
    $data['email'] = htmlspecialchars(trim($_POST["email"] ?? ''));
    $data['number'] = htmlspecialchars(trim($_POST["number"] ?? ''));
    $data['select'] = htmlspecialchars(trim($_POST["select"] ?? ''));
    $data['radio'] = htmlspecialchars(trim($_POST["radio"] ?? ''));
    $data['checkbox'] = isset($_POST["checkbox"]) ? "on" : "off";
    $data['password'] = htmlspecialchars(trim($_POST["password"] ?? ''));
    $data['timestamp'] = date('Y-m-d H:i:s');
    file_put_contents('info.json', json_encode($data).PHP_EOL,FILE_APPEND);
    echo "Данные успешно сохранены!";
    exit;
}