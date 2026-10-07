<?php
$filename = "C:/laragon/www/phpday1/php-file-session-date-exception/data/f3.txt";
$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age'   => 12,
        'class' => 7,
        'roll'  => 11
    ),
    array(
        'fname' => 'Abdur',
        'lname' => 'Rahim',
        'age'   => 11,
        'class' => 7,
        'roll'  => 13
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age'   => 12,
        'class' => 7,
        'roll'  => 14
    )
);
// csv = comma separated value
/*$fp=fopen ($filename, 'w');
foreach ($students as $student) {
    // $data= sprintf ("%s, %s, %s, %s, %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
    // fwrite($fp, $data);
    fputcsv($fp, $student, ",", "\"", "");// fputcsv te default parameter dite hobe latest 8.4.2 version theke
}
fclose($fp); */
/*$fp= fopen($filename, 'r');
while ($data= fgets($fp)) {
    $student = explode (",",$data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2],$student[3], $student[4] );
}
fclose($fp);*/
/*$fp= fopen($filename, 'r');
while ($student= fgetcsv($fp, null, ",", "\"", "")) {
    //ekhane fgetcsv dile explode kora lagbe na
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2],$student[3], $student[4] );
}
fclose($fp); */

/*$student=  array(
        'fname' => 'Kamal',
        'lname' => 'Ahmed',
        'age'   => 13,
        'class' => 7,
        'roll'  => 17
    );
    $fp= fopen($filename, 'a');
    fputcsv($fp, $student,",", "\"", "");
    fclose($fp); */

    $data = file($filename);// ai file function dile puro data ke array er moddhe niye ashe, erpor chaile file_putcontents diye print kora jai
    print_r ($data);
    unset ($data[1]);
    $fp= fopen($filename, 'w');
    foreach ($data as $student) {
        fwrite ($fp, $student);
    }