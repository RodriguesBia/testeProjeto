<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $product->nome }}">
    </div>
    
    <div class="form-group">
        <label for="categorias">Categorias:</label>
        <input type="text" name="categorias" id="categorias" value="{{ $product->categorias }}">
    </div>
    
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" name="preco" id="preco" value="{{ $product->preco }}">
    </div>
    
    <button type="submit">Atualizar Produto</button>
</form>
