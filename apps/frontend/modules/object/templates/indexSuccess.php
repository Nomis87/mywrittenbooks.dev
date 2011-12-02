<h1>Mwb objects List</h1>

<table>
  <thead>
    <tr>
      <th>Object</th>
      <th>Generated at</th>
      <th>Updated at</th>
      <th>Title</th>
      <th>Sites</th>
      <th>Description</th>
      <th>Price</th>
      <th>Writer</th>
      <th>Picture</th>
      <th>Documentpath</th>
      <th>Genre</th>
      <th>Language</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mwb_objects as $mwb_object): ?>
    <tr>
      <td><a href="<?php echo url_for('object/show?object_id='.$mwb_object->getObjectId()) ?>"><?php echo $mwb_object->getObjectId() ?></a></td>
      <td><?php echo $mwb_object->getGeneratedAt() ?></td>
      <td><?php echo $mwb_object->getUpdatedAt() ?></td>
      <td><?php echo $mwb_object->getTitle() ?></td>
      <td><?php echo $mwb_object->getSites() ?></td>
      <td><?php echo $mwb_object->getDescription() ?></td>
      <td><?php echo $mwb_object->getPrice() ?></td>
      <td><?php echo $mwb_object->getWriter() ?></td>
      <td><?php echo $mwb_object->getPicture() ?></td>
      <td><?php echo $mwb_object->getDocumentpath() ?></td>
      <td><?php echo $mwb_object->getGenre() ?></td>
      <td><?php echo $mwb_object->getLanguage() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('object/new') ?>">New</a>
