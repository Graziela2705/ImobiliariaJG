<h2>Nova Cidade</h2>


<?php if (isset($_GET['sucesso'])): ?>
    <p style="color: green;">Cidade salva com sucesso!</p>
<?php endif; ?>


<form method="POST" action="">

<label>Nome:</label><br>
<input type="text" name="nome" required><br> 
<br><br>



<label for="estado">Estado:</label><br>
<input type="text" name="estado" maxlength="2" required>
<br><br>


<button type="submit">Salvar</button> 


</form>