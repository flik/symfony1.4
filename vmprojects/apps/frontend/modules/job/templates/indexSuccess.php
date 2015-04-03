<h1>Vmtest jobs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Picture</th>
      <th>Url</th>
      <th>Width</th>
      <th>Height</th>
      <th>Description</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($vmtest_jobs as $vmtest_job): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?id='.$vmtest_job->getId()) ?>"><?php echo $vmtest_job->getId() ?></a></td>
      <td><?php echo $vmtest_job->getCategoryId() ?></td>
      <td><?php echo $vmtest_job->getType() ?></td>
      <td><?php echo $vmtest_job->getCompany() ?></td>
      <td><?php echo $vmtest_job->getPicture() ?></td>
      <td><?php echo $vmtest_job->getUrl() ?></td>
      <td><?php echo $vmtest_job->getWidth() ?></td>
      <td><?php echo $vmtest_job->getHeight() ?></td>
      <td><?php echo $vmtest_job->getDescription() ?></td>
      <td><?php echo $vmtest_job->getToken() ?></td>
      <td><?php echo $vmtest_job->getIsPublic() ?></td>
      <td><?php echo $vmtest_job->getIsActivated() ?></td>
      <td><?php echo $vmtest_job->getEmail() ?></td>
      <td><?php echo $vmtest_job->getExpiresAt() ?></td>
      <td><?php echo $vmtest_job->getCreatedAt() ?></td>
      <td><?php echo $vmtest_job->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
