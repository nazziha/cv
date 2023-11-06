<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Najiha</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="w-[100%] flex justify-evenly">
        <div class="mt-10">
            <h1 class="text-2xl">Sidqi Najihah</h1>
        </div>
        <ul class="mt-10">
            <li><a href="login.php" class="hover:bg-blue-700 text-black text-xl hover:text-white duration border rounded-md px-2 duration-200">Login</a></li>
        </ul>
    </header>

    <div class="mt-24 mx-10 border-4 rounded-xl bg-blue-200 mb-5">
        <div class="flex justify-center">
        <?php echo "<img src='$foto_path' class='m-3 w-40 h-40 object-cover'>"; ?>
        </div>
        <h3 class="text-grey-600 text-2xl font-bold m-3 text-center"><?php echo $nama; ?></h3>
        <h2 class = "font-bold text-xl m-3">ALAMAT</h2>
        <p class="text-grey-600 text-md m-3"><?php echo $alamat; ?></p>
        <h2 class = "font-bold text-xl m-3">TELEPON</h2>
        <p class="text-grey-600 text-md m-3"><?php echo $telepon; ?></p>
        <h2 class = "font-bold text-xl m-3">EMAIL</h2>
        <p class="text-grey-600 text-md m-3"><?php echo $email; ?></p>
        <h2 class = "font-bold text-xl m-3">PENDIDIKAN</h2>
        <p class="text-grey-600 text-md m-3"><?php echo $pendidikan; ?></p>
        <h2 class = "font-bold text-xl m-3">PENGALAMAN KERJA</h2>
        <p class="text-grey-600 text-md m-3"><?php echo $pengalaman_kerja; ?></p>
        <h2 class = "font-bold text-xl m-3">KETERAMPILAN</h2>
        <p class="text-grey-600 text-md m-3"><?php echo $keterampilan; ?></p>s
    </div>
    <div class="">

    </div>    
</body>
</html>
