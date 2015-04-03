<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $vmtest_job->getId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $vmtest_job->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $vmtest_job->getType() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $vmtest_job->getCompany() ?></td>
    </tr>
    <tr>
      <th>Picture:</th>
      <td><?php echo $vmtest_job->getPicture() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $vmtest_job->getUrl() ?></td>
    </tr>
    <tr>
      <th>Width:</th>
      <td><?php echo $vmtest_job->getWidth() ?></td>
    </tr>
    <tr>
      <th>Height:</th>
      <td><?php echo $vmtest_job->getHeight() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $vmtest_job->getDescription() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $vmtest_job->getToken() ?></td>
    </tr>
    <tr>
      <th>Is public:</th>
      <td><?php echo $vmtest_job->getIsPublic() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $vmtest_job->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $vmtest_job->getEmail() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $vmtest_job->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $vmtest_job->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $vmtest_job->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job/edit?id='.$vmtest_job->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>">List</a>
