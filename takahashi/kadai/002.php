<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>002.php</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <p>問題1(20161004/01.php)</p>
                <?php for($i=1;$i<=100;$i++): ?>
                    <p><?php echo $i; ?></p>
                <?php endfor ?>
            </div>

            <div class="col-xs-6">
                <p>問題2(20161004/02.php)</p>
                <?php for($i=1;$i<=100;$i++): ?>
                    <?php if($i%2==0): ?>
                        <p><?php echo $i; ?></p>
                    <?php endif ?>
                <?php endfor ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <p>問題3(20161004/03.php)</p>
                <?php $sum=0; ?>
                <?php for($i=1;$i<=100;$i++): ?>
                    <?php if($i%2==0): ?>
                        <?php $sum+=$i; ?>
                    <?php endif ?>
                <?php endfor ?>
                <p><?php echo $sum; ?></p>
            </div>

            <div class="col-xs-12">
                <p>問題4(20161004/04.php)</p>
                <table  border="1" frame="hsides" rules="rows" width="400" empty-cells="show">
                    <p><?php echo '<tr>' ?></p>
                    <?php for($i=1;$i<=30;$i++): ?>
                        <p><?php echo '<td>'.$i.'</td>'; ?></p>
                        <?php if($i%7==0): ?>
                            <p><?php echo '</tr><tr>'; ?></p>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <?php for($j=$i;$j<=35;$j++): ?>
                        <p><?php echo '<td></td>'; ?></p>
                    <?php endfor; ?>
                    <p><?php echo '</tr>' ?></p>
                </table>
            </div>
        </div>
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>

</html>
