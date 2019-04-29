 <?php
$to = "sud_lawyer@bk.ru"; // емайл получателя данных из формы 
$tema = "Заявка с сайта Bankrotim.moscow"; // тема полученного емайла 
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>
<div style="display: flex; font-size: 25px; font-weight: bold;">
 <div style="margin: auto;">Ваша заявка принята! Спасибо за обращение!</div>
</div>
<script>
    setTimeout( 'location="/";', 3000 );
</script>