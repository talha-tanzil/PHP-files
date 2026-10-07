<?php
//(File) Processing data in json format to file, json_encode()
$filename = "C:/laragon/www/phpday1/php-file-session-date-exception/data/f5.txt";
$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11
    ),
    array(
        'fname' => 'Abdur',
        'lname' => 'Rahim',
        'age' => 11,
        'class' => 7,
        'roll' => 13
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 14
    )
);
// $encodedData= json_encode($students);
// file_put_contents($filename, $encodedData, LOCK_EX);
$data= file_get_contents($filename);
// $allStudents= json_decode($data);//ekhane sudhu variable likhe true na likle json object hisebe decode hobe, array hisebe na. array hisebe decode korte erpore 'true' likte hobe
$allStudents= json_decode($data, true);
print_r($allStudents);
// echo $allStudents[0] ->fname;// evabe kono object er property access korte hoi
echo $allStudents[0] ["fname"];// evabe kono array er property access korte hoi
