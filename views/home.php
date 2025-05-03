<h1>Bem-vindo(a), Gustavo! - <?= date('d/m/Y') ?> <span id="relogio">00:00:00</span> </h1>

<div class="cards-container">

    <a href="<?= BASE_URL ?>produto">
        <div class="card">
            <p><strong><i class="fas fa-box"></i><br /> Produtos</strong></p>
        </div>
        <!-- card -->
    </a>

    <a href="<?= BASE_URL ?>fornecedor">
        <div class="card">
            <p><strong><i class="fas fa-industry"></i><br /> Fornecedores</strong></p>
        </div>
        <!-- card -->
    </a>

    <a href="<?= BASE_URL ?>cliente">
        <div class="card">
            <p><strong><i class="fas fa-users"></i><br /> Clientes</strong></p>
        </div>
        <!-- card -->
    </a>

    <div class="card">
        <p><strong><i class="fas fa-cash-register"></i><br /> Vendas</strong></p>
    </div>
    <!-- card -->

    <a href="<?= BASE_URL ?>relatorio">
        <div class="card">
            <p><strong><i class="fas fa-copy"></i><br /> Relatórios</strong></p>
        </div>
        <!-- card -->
    </a>
    
</div>
<!-- cards-container -->