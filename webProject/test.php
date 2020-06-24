<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>



</head>
<style>
div {
    cursor: pointer;
}
</style>
<script>
function test() {
    console.log('test');
    var input = document.createElement('input');
    input.type = 'text';
    input.setAttribute('name', 't');
    input.setAttribute('value', 't');
    var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.appendChild(input);
    document.body.appendChild(form);
    form.submit();
}
</script>

<body>
    <?php
    echo ("
            <div onclick='test()'>adf</div>
        ");

    if (array_key_exists('t', $_POST)) {
        testfunction($_POST['t']);
    }

    function testfunction($value)
    {
        echo "$value";
    }
    ?>
</body>

</html>