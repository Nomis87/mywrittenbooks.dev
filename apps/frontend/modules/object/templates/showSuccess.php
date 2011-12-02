<table>
  <tbody>
    <tr>
      <th>Object:</th>
      <td><?php echo $mwb_object->getObjectId() ?></td>
    </tr>
    <tr>
      <th>Generated at:</th>
      <td><?php echo $mwb_object->getGeneratedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $mwb_object->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $mwb_object->getTitle() ?></td>
    </tr>
    <tr>
      <th>Sites:</th>
      <td><?php echo $mwb_object->getSites() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $mwb_object->getDescription() ?></td>
    </tr>
    <tr>
      <th>Price:</th>
      <td><?php echo $mwb_object->getPrice() ?></td>
    </tr>
    <tr>
      <th>Writer:</th>
      <td><?php echo $mwb_object->getWriter() ?></td>
    </tr>
    <tr>
      <th>Picture:</th>
      <td><?php echo $mwb_object->getPicture() ?></td>
    </tr>
    <tr>
      <th>Documentpath:</th>
      <td><?php echo $mwb_object->getDocumentpath() ?></td>
    </tr>
    <tr>
      <th>Genre:</th>
      <td><?php echo $mwb_object->getGenre() ?></td>
    </tr>
    <tr>
      <th>Language:</th>
      <td><?php echo $mwb_object->getLanguage() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('object/edit?object_id='.$mwb_object->getObjectId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('object/index') ?>">List</a>
