<!doctype html>
<html>
<head>
    <title>Request Sample</title>
    <style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    </style>
</head>
<body>
    <h1>Request Sample</h1>
    <p><?php echo $message; ?></p>
    <form method="post" action="/hello_request">
        <?php echo csrf_field(); ?>
        <input type="text" name="str">
        <input type="submit">
    </form>
</body>
