<?php
///* Осуществляем проверку вводимых данных и их защиту от враждебных
//скриптов */
//$sender = htmlspecialchars($_POST["sender"]);
//$email = htmlspecialchars($_POST["email"]);
//$message = htmlspecialchars($_POST["message"]);
///* Проверяем заполнены ли обязательные поля ввода, используя check_input
//функцию */
//$sender = check_input($_POST["sender"], "Введите ваше имя!");
//$email = check_input($_POST["email"], "Введите ваш e-mail!");
//$message = check_input($_POST["message"], "Вы забыли написать сообщение!");
///* Проверяем правильно ли записан e-mail */
//if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
//{
//    show_error("<br /> Е-mail адрес не существует");
//}
///* Если при заполнении формы были допущены ошибки сработает
//следующий код: */
//function check_input($data, $problem = "")
//{
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    if ($problem && strlen($data) == 0)
//    {
//        show_error($problem);
//    }
//    return $data;
//}
//function show_error($myError)
//{
//?>
<!--<html>-->
<!--<body>-->
<!--<p>Пожалуйста исправьте следующую ошибку:</p>-->
<?php //echo $myError; ?>
<!--</body>-->
<!--</html>-->
<?php
if( $action == 'guest-book' ) {
    //Обработка формы

    $name = isset($_POST['sender']) ? $_POST['sender']:  '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    //var_dump($name);
    //var_dump($email);
    //var_dump($message);
    if ($name && $email && $message) {
        $data = array('sender' => $_POST['sender'],'email' => $_POST['email'],'message' => $_POST['message']);
        //$data =($name && $email && $message);
        $isValid = validate($data);
        var_dump($isValid);
        if ($isValid) {
            saveData($data, MESSAGES_TXT_PATH);
        }
    }

    //var_dump($data);
    // Делаем выборку с файла, что бы показать юзеру
    $messages = readData(MESSAGES_TXT_PATH);
    if (!empty($newMessages)) {
        $messages = textChange($newMessages);
    }

    view('guest-book', ['messages' => $messages]);
}
//['messages' => $messages]

//$a = array(['messages' => $messages]);
//var_dump($a ['messages']);
//    ?>
<!--    --><?php
//    exit();
//}
//?>
