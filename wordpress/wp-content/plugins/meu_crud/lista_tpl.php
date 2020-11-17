<div class="wrap">
    <h1>Meu CRUD</h1>
    <form method="post">

   
        <table>
            <tr>

                <td>Nome</td>
                <td>Whatsapp</td>

            </tr>

            <?php
            foreach ($contatos as $key => $value) {
                echo "<tr><td>{$value->nome} </td><td>{$value->whatsapp}</td><td><a href= '?page={$_GET['page']}&apagar=`$value->id} </td></tr>";
            }
            ?>

            <tr>

                <td><input type="text" name="nome"></td>
                <td><input type="text" name="whatsapp"></td>
                <td><?php submit_button('Gravar'); ?> </td>
            </tr>
        </table> 
    </form>
</div>