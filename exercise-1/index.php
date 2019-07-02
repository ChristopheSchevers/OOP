<?php
$action = 'test';
$name = 'Schevers';
$firstname = 'Christophe';    

class Form{
    public function __construct()
    {
        //
    }
    
    public function create($action)
    {
        return '<form action="'.$action.'" method="POST">';
    }

    public function text($nameAttr, $value)
    {
        return '<input name='.$nameAttr.' value="'.$value.'">';
    }
    
    public function submit($value)
    {
        return '<input type="submit" value="'.$value.'">';
    }

    public function end()
    {
        return '</form>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Exercise 1</title>
</head>
<body>
    <h1>Simple form</h1>
    <?php
        $form = new Form();
        echo $form->create($action);
        echo $form->text('name', $name);
        echo $form->text('firstname', $firstname);
        echo $form->submit('Modify');
        echo $form->end();
    ?>
</body>
</html>