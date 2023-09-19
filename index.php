<?php
require 'functions.php';
$wadah = tambah("select * from content");
if (isset($_POST['tambah'])) {
    $keyword = $_POST['keyword'];
    $into = "insert into content values(null,'$keyword')";
    mysqli_query($conn, $into);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/33886cee1c.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&family=Oswald&family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;0,800;1,800&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: lightblue;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            background-color: #fff;
            border-radius: 5px;
            padding-bottom: 3%;
            box-shadow: 1px 1px 4px 1px rgba(0, 0, 0, .2);
        }

        h1 {
            font-family: poppins;
            font-weight: bold;
            margin-left: 8%;
            margin-bottom: 4%;
            margin-top: 1%;
        }

        span {
            font-family: poppins;
            font-weight: bold;
            margin-bottom: 4%;
            margin-top: 3%;
            color: orangered;
        }

        #keyword {
            width: 70%;
            height: 7vh;
            border-radius: 4px;
            border: 1px solid gray;
            padding-left: 3%;
            margin-bottom: 3%;
            font-size: 1.2rem;
        }

        #tambah {
            height: 7vh;
            width: 12%;
            color: white;
            border: none;
            background-color: orangered;
            font-family: poppins;
            border-radius: 2px;
            font-size: 2rem;
            line-height: 5vh;
            margin-bottom: 3%;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2px;
        }

        input:focus {
            outline: none;
        }

        .content {
            width: 85%;
            height: 7vh;
            background-color: rgb(226, 226, 226);
            margin: auto;
            border-radius: 5px;
            margin-top: 1.3%;
            display: flex;
            align-items: center;
            padding-left: 2%;
            font-size: 1.1rem;
            font-family: poppins;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }

        a {
            background-color: rgb(189, 19, 19);
            width: 45px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: 0;
        }

        @media (max-width: 767px) {
            .container {
                width: 100%;
                min-height: 100vh;
                background-color: #fff;
                border-radius: 5px;
                padding-bottom: 3%;
                box-shadow: 1px 1px 4px 1px rgba(0, 0, 0, .2);
            }

            span {
                font-family: poppins;
                font-weight: bold;
                margin-bottom: 4%;
                margin-top: 3%;
                margin-left: -4%;
                color: orangered;
            }

            .content {
                width: 90%;
                height: 7vh;
                background-color: rgb(226, 226, 226);
                margin: auto;
                border-radius: 5px;
                margin-top: 5%;
                display: flex;
                align-items: center;
                padding-left: 5%;
                font-size: 1.1rem;
                font-family: poppins;
                font-weight: 500;
                position: relative;
                overflow: hidden;
            }

            #keyword {
                width: 75%;
                height: 7vh;
                border-radius: 4px;
                border: 1px solid gray;
                padding-left: 3%;
                margin-bottom: 3%;
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <h1><span>TODO</span> KEY</h1>
        <form action="" method="POST">
            <input type="text" name="keyword" size="36%" id="keyword" autocomplete="off" required placeholder="Tambahkan Todo List">
            <button type="submit" name="tambah" id="tambah">+</button>
        </form>
        <?php foreach ($wadah as $wdh) : ?>
            <div class="content">
                <?= $wdh['value'] ?>
                <a href="hapus.php?id=<?= $wdh['content_id'] ?>"><i class="fa-solid fa-trash fa-lg" style="color: white;"></i></a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>