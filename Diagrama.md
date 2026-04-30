# Modelagem e Fluxo do Sistema - AXIS LAB.

Aqui estão as representações visuais da estrutura de dados e do fluxo de compra do e-commerce.

## 1. Diagrama de Classes (Entidade-Relacionamento Simplificado)
Este diagrama mostra como as principais entidades do banco de dados se relacionam.

<img width="1240" height="864" alt="diagrama_axis-trabalho" src="https://github.com/user-attachments/assets/e44a7c2c-a295-4d8e-8eb3-46596d161409" />

-
```mermaid
classDiagram
    class Cliente {
        +int id_cliente
        +String nome
        +String email
        +String endereco
        +fazerPedido()
    }
    class Produto {
        +int id_produto
        +String nome
        +float preco
        +int estoque
        +SKU sku
    }
    class Pedido {
        +int id_pedido
        +Date data
        +String status
        +processarPagamento()
    }
    class ItemPedido {
        +int quantidade
        +float precoUnitario
    }


    Cliente "1" -- "0..*" Pedido : faz
    Pedido "1" -- "1..*" ItemPedido : contem
    ItemPedido "*" -- "1" Produto : referencia
