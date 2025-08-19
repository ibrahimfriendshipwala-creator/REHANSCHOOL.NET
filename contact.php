<?php /* contact.php */
// server-side form handling
require_once 'db.php';
$messageFeedback = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $msg = trim($_POST['message'] ?? '');
  if($name === '' || $email==='' || $msg===''){
    $messageFeedback = 'Please fill all fields.';
  } else {
    try{
      $stmt = $pdo->prepare('INSERT INTO messages (name,email,message,created_at) VALUES (:name,:email,:message,NOW())');
      $stmt->execute([':name'=>$name,':email'=>$email,':message'=>$msg]);
      $messageFeedback = 'Thank you! Your message has been received.';
    } catch(Exception $e){
      $messageFeedback = 'Could not save message: ' . $e->getMessage();
    }
  }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact — RehanSchool Clone</title>
  <style>
    body{font-family:Inter,Arial;margin:0;background:#f5f7fb;color:#0b1220}
    .container{max-width:760px;margin:0 auto;padding:28px}
    form{background:#fff;padding:18px;border-radius:12px;box-shadow:0 10px 30px rgba(2,6,23,0.04)}
    label{display:block;margin-top:12px;font-weight:600}
    input[type=text],input[type=email],textarea{width:100%;padding:10px;border-radius:8px;border:1px solid #e6eef8;margin-top:6px}
    textarea{min-height:120px}
    .row{display:flex;gap:10px}
    .btn{background:#0f62fe;color:#fff;padding:10px 14px;border-radius:10px;border:0;cursor:pointer;margin-top:12px}
    .note{color:#6b7280;margin-top:8px}
  </style>
</head>
<body>
  <div class="container">
    <a href="index.php">← Home</a>
    <h1>Contact Us</h1>
    <?php if($messageFeedback): ?>
      <div style="background:#eef6ff;padding:12px;border-radius:10px;margin-bottom:12px"><?php echo htmlspecialchars($messageFeedback); ?></div>
    <?php endif; ?>

    <form method="post" action="contact.php">
      <label for="name">Name</label>
      <input id="name" name="name" type="text" required>

      <label for="email">Email</label>
      <input id="email" name="email" type="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" required></textarea>

      <button class="btn" type="submit">Send Message</button>
      <p class="note">Or email us directly at info@rehanschool.example</p>
    </form>
  </div>
</body>
</html>
