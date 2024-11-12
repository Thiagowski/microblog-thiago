# Operações CRUD usando SQL

## Resumo

- C: Criar/Inserir dados        -> INSERT
- R: (R) Ler dados              -> SELECT
- U: (U) Atualizar dados        -> UPDATE
- D: (D) Excluir dados          -> DELETE


## Exemplos para tabela "usuarios"

### Inserindo usuarios

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('thiago', 'thi@gmail.com' '123senac', 'admin');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('jarves', 'jarves@gmail.com' '1245', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('chico bento', 'chico@gmail.com', 'dodo1', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('sasuke', 'sasuke@gmail.com', 'sasa', 'editor');