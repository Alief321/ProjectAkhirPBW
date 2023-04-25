    <section id="isiAdmin">
        <h1 style="font-size: 2rem; margin:0; margin-bottom: 1rem">Selamat datang <?= $data['Name'] ?> 👋</h1>
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
        <h2>Grafik Product berdasarkan kategori</h2>
        <div id="piechart" style="width: 80%; height: 50%;"></div>
        <h2>Gambar Kucing lucu</h2>
        <div style="width: 90%; display: flex; justify-content: center; align-items: center; background-color: white; border-radius: 0.5rem;">  
        <img src="<?php 
        $imgist = array(
            "https://pbs.twimg.com/media/E9wam9rUUAI3Ok-.jpg", 
            "https://scontent-xsp1-2.xx.fbcdn.net/v/t1.6435-9/44891541_1996075170684798_3674461761450278912_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=9267fe&_nc_eui2=AeEauQTa6v96Ckjo_d_TyHDqHM7l4l5-WOkczuXiXn5Y6XTevgNcmm59VcfAnXshA97S-N6AH8qHTimU6h09AWSm&_nc_ohc=kqcyr4549HcAX8HuhRn&_nc_ht=scontent-xsp1-2.xx&oh=00_AfBtenH1fdrLKD4M7YP3Pm7divfSPymC22_gW9Hp75xxGg&oe=646DD9B0", 
            "https://pbs.twimg.com/media/ER7driWU8AIGh7L.jpg:large", 
            "https://t-2.tstatic.net/jogja/foto/bank/images/meme-wanita-dan-kucing.jpg",
            "https://cdn.idntimes.com/content-images/community/2022/09/fromandroid-0fe18287c3c179753f83188807e46da4.jpg",
            "https://akcdn.detik.net.id/community/media/visual/2020/09/22/longcat_43.jpeg?w=250&q=",
            "https://pic-bstarstatic.akamaized.net/ugc/e249e24e9fa8ed3754a27c2b9fe8da2e.jpg",
            "https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/02/522446079.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAUsZNvwuUbBN7QPwv6JC9rOE9lDbxEjrFWg&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXs--WlqHBZQflSe6c93HnXwz0Vcl-wzWpzA&usqp=CAU",

        );
        echo $imgist[mt_rand(0, count($quoteList)-1)];
        ?>" alt="" width="90%">
        </div>
    </section>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="js/AdminHome.js"></script>