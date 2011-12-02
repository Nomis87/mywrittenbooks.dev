<table>
  <tbody>
    <tr>
      <th>News:</th>
      <td><?php echo $mwb_news->getNewsId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $mwb_news->getTitle() ?></td>
    </tr>
    <tr>
      <th>Writer:</th>
      <td><?php echo $mwb_news->getWriter() ?></td>
    </tr>
    <tr>
      <th>Date:</th>
      <td><?php echo $mwb_news->getDate() ?></td>
    </tr>
    <tr>
      <th>News:</th>
      <td><?php echo $mwb_news->getNews() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('news/edit?news_id='.$mwb_news->getNewsId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('news/index') ?>">List</a>
