<h2>Produtos</h2>

<form action="/produto/store" method="post">

        {{csrf_field()  }}

    <input type="text" name="name">

    <button type="submit">Cadastrar</button>
</form>


