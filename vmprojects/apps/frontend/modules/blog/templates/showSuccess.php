<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $blog_post->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $blog_post->getTitle() ?></td>
    </tr>
    <tr>
      <th>Body:</th>
      <td><?php echo $blog_post->getBody() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $blog_post->getAuthor() ?></td>
    </tr>
    <tr>
      <th>Slug:</th>
      <td><?php echo $blog_post->getSlug() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $blog_post->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $blog_post->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('blog/edit?id='.$blog_post->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('blog/index') ?>">List</a>
