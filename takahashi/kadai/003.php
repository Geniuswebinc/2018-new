<html>
<head>
    <meta charset="utf-8">
    <title>003.php</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>問題1（20161005/01.php）</p>
                <table  border="1" frame="hsides" rules="rows" width="600" height="200">
                    <p><?php echo '<tr>' ?></p>
                    <?php for($i=1;$i<=10;$i++): ?>
                        <p><?php echo '<tr>' ?></p>
                        <?php for($j=1;$j<=10;$j++): ?>
                            <p><?php echo '<td>'.$i*$j.'</td>'?></p>
                        <?php endfor; ?>
                        <p><?php echo '</tr>' ?></p>
                    <?php endfor; ?>
                </table>
            </div>
        </div>
    </div>





    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>

</html>
