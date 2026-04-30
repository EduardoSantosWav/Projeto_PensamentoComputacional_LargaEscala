# Detalhamento de Design e Pensamento Computacional - AXIS LAB.

## 1. Decomposição do Sistema
Para gerenciar a complexidade de um e-commerce de vestuário, o sistema foi decomposto nos seguintes submódulos:
* **Módulo de Produtos:** Gerencia o catálogo, categorias e especificações técnicas (gramatura do tecido, medidas "boxy").
* **Módulo de Usuário:** Autenticação, histórico de pedidos e endereços de entrega.
* **Módulo de Checkout:** Processamento de pagamentos e validação de estoque em tempo real.

## 2. Abstração
Na modelagem do sistema, abstraímos detalhes complexos para focar na funcionalidade:
* **Entidade Produto:** Embora um produto tenha diversos detalhes de fabricação, para o sistema ele é abstraído em: ID, Nome, Preço, SKU e Quantidade em Estoque.
* **Interface de Pagamento:** O sistema interage com uma interface genérica de pagamento, não precisando conhecer as regras internas de cada banco ou operadora de cartão.

## 3. Reconhecimento de Padrões
* **Reutilização de Componentes:** Padronização de cards de produtos e botões de ação em toda a interface (estética brutalista).
* **Persistência:** Uso do padrão Singleton para gerenciar a conexão com o banco de dados MySQL.
