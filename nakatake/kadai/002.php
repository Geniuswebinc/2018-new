<!DOCTYPE html>
<html lang="ja">
<head>
    <title>002｜課題</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link type="stylesheet" src="./assets/css/style.css">
</head>
<body>
    <section>
        <h1 class="text-center">課題2</h1>

        <div class="text-center">
            <label>問題1</label>
            <?php for ($i = 1; $i <= 100; $i++) { ?>
                <p><?php echo $i; ?></p>
            <?php } ?>
        </div>

        <div class="text-center">
            <label>問題2</label>
            <p>
                <?php for ($i = 1; $i <= 100; $i++) {
                    if ($i % 2==0) {
                        echo $i;
                    }
                } ?>
            </p>
        </div>

        <div class="text-center">
            <label>問題3</label>
            <?php
                $sum = 0;
                for ($i = 1; $i <= 100; $i++) {
                    if ($i % 2==0) {
                        $sum += $i;
                    }
                }
            ?>
            <p><?php echo $sum; ?></p>
        </div>

        <div class="text-center">
            <label>問題4</label>
            <table class="table">
                <tbody>
                    <tr>
                        <?php
                            for ($i = 1; $i <= 100; $i++) {
                                echo '<td>'.$i.'</td>';
                                if ($i % 7==0) {
                                    echo '</tr><tr>';
                                }
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>


    </section>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
