<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # %s?', $category->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="categories view large-10 medium-9 columns">
	<h2><?= h($category->title) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Title') ?></h6>
			<p><?= h($category->title) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($category->id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($category->created) ?></p>
			<h6 class="subheader"><?= __('Modified') ?></h6>
			<p><?= h($category->modified) ?></p>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Blogs') ?></h4>
	<?= if (!empty($category->blogs)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Title') ?></th>
			<th><?= __('Content') ?></th>
			<th><?= __('Slug') ?></th>
			<th><?= __('User Id') ?></th>
			<th><?= __('Tag Id') ?></th>
			<th><?= __('Category Id') ?></th>
			<th><?= __('Created') ?></th>
			<th><?= __('Modified') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($category->blogs as $blogs): ?>
		<tr>
			<td><?= h($blogs->id) ?></td>
			<td><?= h($blogs->title) ?></td>
			<td><?= h($blogs->content) ?></td>
			<td><?= h($blogs->slug) ?></td>
			<td><?= h($blogs->user_id) ?></td>
			<td><?= h($blogs->tag_id) ?></td>
			<td><?= h($blogs->category_id) ?></td>
			<td><?= h($blogs->created) ?></td>
			<td><?= h($blogs->modified) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Blogs', 'action' => 'view', $blogs->id]) ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Blogs', 'action' => 'edit', $blogs->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Blogs', 'action' => 'delete', $blogs->id], ['confirm' => __('Are you sure you want to delete # %s?', $blogs->id)]) ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= endif; ?>
	</div>
</div>
