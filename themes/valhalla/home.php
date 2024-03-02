<?php $this->layout('theme') ?>

<!--BLOG-->
<section class="blog">
    <div class="blog_content container content">
        <header class="blog_header">
            <h2>Nossos artigos</h2>
            <p>Confira nossas dicas para controlar melhor suas contas</p>
        </header>

        <div class="blog_articles">
            <?php
            for ($i = 0; $i <= 1; $i++): ?>
                <?= $this->insert('parts/blog')?>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!--OPT OUT-->
