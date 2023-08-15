<?php session_start() ?>
<?php require_once('layout/header.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<style>

    form {
        display: flex;
        flex-flow: column;
        justify-content: center;
        align-items: center;
    }

    .form-group {
        padding: 10px;
        width: 650px;
    }

    .form-group input {
        padding: 5px 0;
        width: 100%;
    }

    textarea {
        width: 100%;
    }

    button {
        padding: 10px 50px;
        border-radius: 5px;
        color: white;
        background-color: red;
        border: none;
        outline: 0;
    }

    button:hover {
        opacity: 0.7;
        cursor: pointer;
    }

    center {
        font-size: 20px;
        font-weight: bold;
        color: green;
        padding: 20px;
    }
</style>

<body>
    <h2 style="text-align: center;">Hãy liên hệ với chúng tôi nếu các bạn gặp các vấn đề trên Website</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Tên của bạn:</label>
            <input type="text" name="name" required="required" />
        </div>
        <div class="form-group">
            <label>Gửi đến gmail:</label>
            <input type="email" name="email" required="required" />
        </div>
        <div class="form-group">
            <label>Tên Email</label>
            <input type="text" name="subject" required="required" />
        </div>
        <div class="form-group">
            <label>Nội dung email</label>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <button name="send"> Send</button>
    </form>
</body>
<?php require_once('layout/footer.php'); ?>

</html>