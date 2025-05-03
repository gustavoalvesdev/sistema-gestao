<h1>Adicionar Produto</h1>

<form method="POST" class="form">

    Código de Barras:<br />
    <input type="text" name="cod" required /><br /><br />

    Nome do Produto:<br />
    <input type="text" name="name" required /><br /><br />

    Preço do Produto:<br />
    <input type="text" name="price" required /><br /><br />

    Quantidade:<br />
    <input type="text" name="quantity" required /><br /><br />

    Qtd. Mínima:<br />
    <input type="text" name="min_quantity" required /><br /><br />

    <button type="submit" class="btn btn-add btn-lg"><i class="fas fa-plus"></i> Adicionar Produto</button>
 
</form>
<!-- form -->

<script>
    let baseUrl = '<?= BASE_URL ?>';
</script>
<script src="<?= BASE_URL ?>assets/js/categories_handle.js"></script>