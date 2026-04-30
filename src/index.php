<?php
// AXIS LAB. E-commerce - Protótipo Inicial 

$catalog = [
    [
        'id' => 1,
        'sku' => 'AL-BX-BLK-01',
        'name' => 'BOXY SHIRT - JET BLACK',
        'price' => 189.90,
        'image' => 'https://via.placeholder.com/400x500/111111/FFFFFF?text=AXIS+BOXY+BLACK', // Placeholder
        'stock' => 15,
        'tags' => ['minimalist', 'oversized']
    ],
    [
        'id' => 2,
        'sku' => 'AL-TT-WHT-01',
        'name' => 'TANK TOP - MIST WHITE',
        'price' => 129.90,
        'image' => 'https://via.placeholder.com/400x500/EEEEEE/111111?text=AXIS+TANK+WHITE', // Placeholder
        'stock' => 8,
        'tags' => ['minimalist', 'brutalist']
    ],
    [
        'id' => 3,
        'sku' => 'AL-BX-GRY-01',
        'name' => 'BOXY SHIRT - CONCRETE GREY',
        'price' => 189.90,
        'image' => 'https://via.placeholder.com/400x500/888888/FFFFFF?text=AXIS+BOXY+GREY', // Placeholder
        'stock' => 0, // Simulação de falta de estoque
        'tags' => ['boxy', 'urban']
    ]
];


// LÓGICA DO FRONTEND (CÁLCULO SIMPLES)

$totalProducts = count($catalog);
$inStockCount = 0;
foreach ($catalog as $product) {
    if ($product['stock'] > 0) {
        $inStockCount++;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AXIS LAB. | CATALOG | [PC-SLE Project]</title>
    <style>
        /* CSS INLINE PARA SIMPLICIDADE DO PROTÓTIPO */
        :root {
            --bg-color: #FFFFFF;
            --text-color: #000000;
            --accent-color: #555555;
            --card-bg: #F8F8F8;
            --brutalist-border: 2px solid #000000;
        }

        /* Estética Minimalista/Brutalista */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            text-transform: uppercase; /* Identidade da marca */
            letter-spacing: 1px;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            padding-bottom: 50px;
        }

        header {
            padding: 30px;
            border-bottom: var(--brutalist-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 900;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-color);
            font-size: 0.8rem;
        }

        main {
            padding: 30px;
        }

        .PC-info {
            background-color: #f1f1f1;
            padding: 15px;
            margin-bottom: 30px;
            border: 1px solid #ccc;
            font-size: 0.8rem;
            color: #444;
        }

        .catalog-summary {
            margin-bottom: 30px;
            font-size: 0.9rem;
        }

        /* Grid de Produtos */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        /* Estilo do Card (Brutalist Minimal) */
        .product-card {
            background-color: var(--card-bg);
            border: var(--brutalist-border);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-bottom: var(--brutalist-border);
        }

        .product-details {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-sku {
            font-size: 0.7rem;
            color: var(--accent-color);
            margin-bottom: 5px;
        }

        .product-name {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .product-price {
            font-size: 1.1rem;
            font-weight: 900;
            margin-bottom: 15px;
        }

        /* Algoritmo de Interface: Botão condicional */
        .add-to-cart {
            width: 100%;
            padding: 12px;
            background-color: var(--text-color);
            color: var(--bg-color);
            border: none;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .add-to-cart:hover {
            background-color: var(--accent-color);
        }

        .out-of-stock {
            background-color: #cccccc;
            color: #666666;
            cursor: not-allowed;
        }

        .out-of-stock:hover {
            background-color: #cccccc;
        }

        footer {
            margin-top: 50px;
            padding: 30px;
            border-top: var(--brutalist-border);
            text-align: center;
            font-size: 0.7rem;
            color: var(--accent-color);
        }
    </style>
</head>
<body>

<header>
    <div class="logo">AXIS LAB.</div>
    <nav>
        <ul>
            <li><a href="#">NEW</a></li>
            <li><a href="#">TOPS</a></li>
            <li><a href="#">BOTTOMS</a></li>
            <li><a href="#">CART (0)</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Seção de Contexto Acadêmico (Importante para o trabalho) -->
    <section class="PC-info">
        [TRABALHO ACADÊMICO - PENSAMENTO COMPUTACIONAL EM LARGA ESCALA] <br>
        PROTÓTIPO INICIAL DO MÓDULO DE CATÁLOGO (DTC).
    </section>

    <section class="catalog-summary">
        VISUALIZANDO <strong><?php echo $totalProducts; ?></strong> PRODUTOS | 
        <strong><?php echo $inStockCount; ?></strong> EM ESTOQUE.
    </section>

    <section class="product-grid">
        <!-- RECONHECIMENTO DE PADRÕES: Loop que itera sobre o catálogo -->
        <?php foreach ($catalog as $product): ?>
            <article class="product-card">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
                <div class="product-details">
                    <div>
                        <p class="product-sku"><?php echo $product['sku']; ?></p>
                        <h2 class="product-name"><?php echo $product['name']; ?></h2>
                    </div>
                    <div>
                        <p class="product-price">R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                        
                        <!-- ALGORITMO DE INTERFACE (IF/ELSE): Verificação de Estoque -->
                        <?php if ($product['stock'] > 0): ?>
                            <button class="add-to-cart" onclick="alert('Módulo de Checkout (Simulação): Adicionado ID <?php echo $product['id']; ?>')">
                                ADICIONAR AO CARRINHO
                            </button>
                        <?php else: ?>
                            <button class="add-to-cart out-of-stock" disabled>
                                ESGOTADO
                            </button>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<footer>
    AXIS LAB. © 2026 | PROTÓTIPO DESENVOLVIDO PARA ADS.
</footer>

</body>
</html>
