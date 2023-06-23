    <section id="isiAdmin">
        <h1 style="font-size: 2rem; margin:0; margin-bottom: 1rem">Selamat datang <?= $data['Name']['Nama'] ?> 👋</h1>
        <?php 
        $quoteList = array(
            "Apa persamaan kamu dengan kucing? Sama-sama lucu dan menggemaskan. ", 
            "Pengin tahu apa hobi aku selain main sama kucing? Ngangenin kamu. ", 
            "Bukan kamu yang mengadopsi kucing. Kucinglah yang memilihmu menjadi hambanya.", 
            "Kenapa kucing mengeong? Karena yang nyinyir itu netizen.",
            "Aku memang bukan yang terbaik untukmu, tapi aku punya kucing yang pasti akan kamu suka.",
            "Kenapa kucing mengeong? Karena kalau kucing bilang I love you, nanti kamu baper."
        );
        echo '<i>';
        echo $quoteList[mt_rand(0, count($quoteList)-1)];
        echo '</i>';
        ?>

        <!-- di server fitur ini dihilangkan -->
        <h2>Grafik Product berdasarkan kategori</h2>
        <div id="piechart" style="width: 80%; height: 50%;"></div>
        <!---->

        <h2>Gambar Kucing lucu</h2>
        <div style="width: 90%; display: flex; justify-content: center; align-items: center; background-color: white; border-radius: 0.5rem;">  
        <img src="<?php 
        $imgist = array(
            BASEURL."img/g1.jpg",
            BASEURL."img/g3.jpg",
            BASEURL."img/g4.jpg",
            BASEURL."img/g5.jpeg",
            BASEURL."img/g6.jpg",
            BASEURL."img/g7.jpg",
            BASEURL."img/g8.jpg",
            BASEURL."img/g9.jpg",
        );
        echo $imgist[mt_rand(0, count($imgist)-1)];
        ?>" alt="" width="90%">
        </div>
    </section>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="js/AdminHome.js"></script>