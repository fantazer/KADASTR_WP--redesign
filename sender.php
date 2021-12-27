<?
if (isset($_POST['name'])) {
  function clearData($data)
  {
    return trim(htmlspecialchars($data));
  }

  $formData = array_map('clearData', $_POST);
  $to = 'kuznecovs45@gmail.com';
  $subject = 'Заявка с сайта CGIKU.RU';
  $body = "Заявка :<br><br>";
  foreach ($formData as $key => $value) {
    $body = $body . $key . ": <strong>" . $value . "</strong><br>";
  }

  $headers = array();
  $headers[] = "MIME-Version: 1.0";
  $headers[] = "Content-type: text/html; charset=utf-8";
  $headers[] = "Subject: {$subject}";
  $headers[] = "From: info@cgiku.ru";
  $headers[] = "X-Mailer: PHP/" . phpversion();
  mail($to, $subject, $body, implode("\r\n", $headers));

}
?>

