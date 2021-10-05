<!-- In templates/Articles/tags.php -->
<h1>
    Articles tagged with
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<!--
<section>
<?php foreach ($articles as $article) : ?>
    <article>
        <h4><?= $this->Html->link(
                $article->title,
                ['controller' => 'Articles', 'action' => 'view', $article->slug]
            ) ?></h4>
        <span><?= h($article->created) ?></span>
    </article>
<?php endforeach; ?>
</section>
-->
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>
    <?php foreach ($articles as $article) : ?>
        <tr>
            <td>
                <h4><?= $this->Html->link(
                        $article->title,
                        ['controller' => 'Articles', 'action' => 'view', $article->slug]
                    ) ?></h4>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>