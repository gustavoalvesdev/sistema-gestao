<h1>Editar Fornecedor</h1>

<form method="POST" class="form">

    Nome do Fabricante:<br />
    <input type="text" name="name" required value="<?= $fornecedor['name'] ?>" /><br /><br />

    Site do Fabricante:<br />
    <input type="text" name="url" required  value="<?= $fornecedor['url'] ?>" /><br /><br />

    <button type="submit" class="btn btn-edit btn-lg"><i class="fas fa-plus" ></i> Editar Fornecedor</button>
 
</form>
<!-- form -->