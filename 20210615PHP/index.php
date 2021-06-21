<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse
        }
    </style>
</head>
<body>
    <table border=1>
        <?php for ($i=1;$i<10;$i++) {?>
            <tr>
                <?php for ($a=1;$a<10;$a++) {?>
                    <td>
                    <?php echo $i*$a; ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>