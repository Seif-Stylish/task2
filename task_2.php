<?php




$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ]
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ]
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ]
    ],
];

$userData = "";

for($i = 0; $i < count($users); $i++)
{
    if($users[$i]->gender->gender == "m")
    {
        $userData.= "
        <tr>
        
            <td>".$users[$i]->id."</td>
            <td>".$users[$i]->name."</td>
            <td>male</td>    
        
        ";
    }
    else
    {
        $userData.= "
        <tr>
        
            <td>".$users[$i]->id."</td>
            <td>".$users[$i]->name."</td>
            <td>female</td>       
        ";
    }

    $ourHobbiesLoop = "";
    $ourActivitiesLoop = "";
    
    foreach($users[$i]->hobbies as $index=> $value)
    {
        $ourHobbiesLoop.= "$value, ";
    }

    foreach($users[$i]->activities as $key => $act)
    {
        $ourActivitiesLoop.= "$key: $act, ";
    }
    

    $userData.= "
    
        <td>$ourHobbiesLoop</td>
        <td>$ourActivitiesLoop</td>
        </tr>
    
    ";
}

$ourColumns = $users[0];

?>


<html>
    <head>
        <title>user table</title>


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>
        


    <div class="py-5 text-center">
        <h2>Users</h2>
    </div>
    
    <table class="table w-75 m-auto">
        <thead>
            <?php   foreach($ourColumns as $property => $val){echo "<th>$property</th>";}  ?>
        </thead>

        <tbody>
            <?php  echo $userData;   ?>
        </tbody>

    </table>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>