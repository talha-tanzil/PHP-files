<?php
function generateReport() { //40th line
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData); 
?> 
<table>
    <tr>
        <th>Name</th>
        <th>Roll</th>
        <?php if(isAdmin()|| isEDitor()): ?>
        <th width="25%">Action</th>
    </tr>

    <?php
    foreach ($students as $student) {
        ?>
        <tr>
            <td><?php printf('%s %s', $student['fname'], $student['lname']); ?></td>
            <td><?php printf('%s', $student['roll']); ?></td>
            <?php if(isAdmin()): ?>
            <td>
                <?php
                printf(
                    '<a href="/crud/index.php?task=edit&id=%s">Edit</a> | <a class="delete" href="/crud/index.php?task=delete&id=%s">Delete</a>',
                    $student['id'],
                    $student['id']
                );
                ?>
            </td>
            <?php elseif(isEditor()): ?>
                <td>
                <?php
                printf(
                    '<a href="/crud/index.php?task=edit&id=%s">Edit</a>', $student['id']);
                ?>
            </td>
            <?php endif; ?>
        </tr>
        <?
    }
    ?>
</table>
<?php
}
function addStudent($fname, $lname, $roll) {
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $_student) {
        if ($_student['roll'] == $roll) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        // rest of the function not visible in screenshot
    $newId = getNewId($students);
$student = array(
    'id'    => $newId,
    'fname' => $fname,
    'lname' => $lname,
    'roll'  => $roll
);

array_push($students, $student);
$serializedData = serialize($students);
file_put_contents(DB_NAME, $serializedData, LOCK_EX);

return true;
}

return false;
function getStudent ($id) { //94th line
  $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $student) {
        if ($student['id'] == $id) {
            return $student;
        }
    }

    return false;
}

function updateStudent($id, $fname, $lname, $roll) {
    $found = false;

    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $_student) {
        if ($_student['roll'] == $roll && $_student['id'] != $id) {
            $found = true;
            break;
        }
    }

    if (! $found) {
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll']  = $roll;

        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData, LOCK_EX);

        return true; //123rd line
        
    return false;
}

function deleteStudent ($id) { //129th line
$serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $offset => $student) {
        if ($student['id'] == $id) {
            unset($students[$offset]);
        }
    }

    $serializedData = serialize($students);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

function printRaw()
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    print_r($students);
}

function getNewId($students)
{
    $maxId = max(array_column($students, 'id'));
    return $maxId + 1;
} //152nd line


function isAdmin() {
    return ($_SESSION['role']=='admin');
}

function isEditor() {
    return ($_SESSION['role']=='editor');
} //162nd line

function hasPrivilege () {
    return (isAdmin() || isEditor());
}
