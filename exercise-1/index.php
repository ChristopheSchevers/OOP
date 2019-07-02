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
        return '<input type="text" name='.$nameAttr.' value="'.$value.'">';
    }

    public function select()
    {
        return '<select>';
    }

    public function option($value, $text)
    {
        return '<option value="'.$value.'">'.$text.'</option>';
    }

    public function endselect()
    {
        return '</select>';
    }

    public function textarea($rows,$cols,$text)
    {
        return '<textarea rows="'.$rows.'" cols="'.$cols.'">'.$text.'</textarea>';
    }

    public function radio($name,$value,$text)
    {
        return '<input type="radio" name="'.$name.'" value="'.$value.'">'.$text.'<br>';
    }

    public function check($name,$value,$text)
    {
        return '<input type="checkbox" name="'.$name.'" value="'.$value.'">'.$text.'<br>';
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