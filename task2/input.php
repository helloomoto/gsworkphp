<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>タスク入力</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/sample.css">
        <script src="js/jquery-2.1.3.min.js"></script>
    </head>
    <body>
        <div>
            <form method="post" action="insert.php">
                <dl>
                    <dt>Task</dt>
                    <dd><input type="text" name="task" id="task" value=""></dd>

                    <dt>Day</dt>
                    <dd><input type="date" name="day" id="day" value=""></dd>

                    <dt>Time</dt>
                    <dd><input type="time" name="time" id="time" value=""></dd>

                    <dt>Memo</dt>
                    <dd><textarea name="memo" rows="4" cols="25" id="memo"></textarea></dd>
                </dl>

                <input type="submit" value="送信する">
            </form>
        </div>
        <div>
        </div>
        <script>
            $("#memo").val("");
            var month = $()
        </script>
    </body>
</html>