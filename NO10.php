<?php
    $pabp;
    $mtk;
    $dpk;
    $rata;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Nilai PABP</td>
                <td>:</td>
                <td><input type="number" name="pabp"></td>
            </tr>
            <tr>
                <td>Nilai MTK</td>
                <td>:</td>
                <td><input type="number" name="mtk"></td>
            </tr>
            <tr>
                <td>Nilai DPK</td>
                <td>:</td>
                <td><input type="number" name="dpk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form><br>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $pabp = $_POST['pabp'];
        $mtk = $_POST['mtk'];
        $dpk = $_POST['dpk'];
        $rata = ($pabp + $mtk + $dpk) / 3;

        if($rata <= 100 && $rata >= 80){
            echo "Grade A";
        }
        elseif($rata <= 80 && $rata >= 75){
            echo "Grade B";
        }
        elseif($rata <= 75 && $rata >= 65){
            echo "Grade C";
        }
        elseif($rata <= 65 && $rata >= 45){
            echo "Grade D";
        }
        elseif($rata <= 45 && $rata >= 0){
            echo "Grade E";
        }
        else{
            echo "Angka tidak memenuhi persyaratan";
        }
    }
?>
    