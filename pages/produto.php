<h1 class="text-center"><?=$produtos['nome'];?></h1>

<?php if(isset($produtos) && !empty($produtos)): ?>
<main class="produto">
    <article class="card-produto">
        <div class="card-produto-header">
            <img class="produto-img" src="images/<?=$produto['img'];?>" alt="<?=$produto['nome'];?>">
        </div>
        <div class="card-produto-body">
            <p class="text-center font-lg"><?=$produto['descricao'];?></p>
        </div>
    </article>
</main>

<section class="row">
    <div class="voltar">
        <a href="?page=home" class="btn btn-primary">Voltar para Home</a>
    </div>
</section>

<?php endif; ?>
