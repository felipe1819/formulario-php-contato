<form action="" method="post">
    <label for="nome"value="<?php
            if(!empty($row['nome'])) {
                echo $row['nome'];
            }
            ?>" >Nome</label>
    <input name="nome" id="nome">
        
    <label for="telefone"value="<?php
            if(!empty($row['telefone'])) {
                echo $row['telefone'];
            }
            ?>" >Telefone></label>
    <input name="telefone" id="telefone">
    <label for="mensagem">Mensagem</label>
    <textarea name="mensagem" id="mensagem" value="<?php
            if(!empty($row['mensagem'])) {
                echo $row['mensagem'];
            }
            ?>" >mesagem</textarea>
<input type="submit" value="Enviar">
</form>


