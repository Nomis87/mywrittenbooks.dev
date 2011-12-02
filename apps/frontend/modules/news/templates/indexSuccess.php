<h1>Mwb newss List</h1>

<table>
  <thead>
    <tr>
      <th>News</th>
      <th>Title</th>
      <th>Writer</th>
      <th>Date</th>
      <th>News</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mwb_newss as $mwb_news): ?>
    <tr>
      <td><a href="<?php echo url_for('news/show?news_id='.$mwb_news->getNewsId()) ?>"><?php echo $mwb_news->getNewsId() ?></a></td>
      <td><?php echo $mwb_news->getTitle() ?></td>
      <td><?php echo $mwb_news->getWriter() ?></td>
      <td><?php echo $mwb_news->getDate() ?></td>
      <td><?php echo $mwb_news->getNews() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <!-- <a href="<?php echo url_for('news/new') ?>">New</a> -->
