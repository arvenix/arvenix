<!DOCTYPE html>
<html>

<head>
  <title>Welcome to Arvenix Framework</title>
</head>

<body>
  <div>Congratulations!</div>
  <div>If you see this, it means the framework is working.</div>
  <div><?= baseUrl() ?></div>
  <div><?= phpinfo() ?></div>
</body>
<script type="module">
  import Main from './main.js';
  let main = new Main();
  main.index();
</script>

</html>