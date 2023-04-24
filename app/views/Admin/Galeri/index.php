    <section id="isiAdmin">
        <table>   
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $content = ' 
                    <tr>
                    <td>1</td>
                    <td>Whiskas</td>
                    <td>Rp. 23.000</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis quod quam quasi! Quis iure dignissimos, modi dolores eius nobis neque veniam quibusdam a.</td>
                    <td> <i data-feather="trash-2" id="trash"></i></td>
                    <td><i data-feather="edit" id="edit"></i></td>
                    </tr>';
                for ($i=0; $i <10 ; $i++) { 
                    echo $content;
                }
            ?>

          
            </tbody>
        </table>
    </section>