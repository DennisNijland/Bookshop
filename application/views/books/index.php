<h2><?php echo $title; ?></h2>
 
<table class="rwd-table">
    <thead>
        <tr>
            <th><strong>Title</strong></th>
            <th><strong>Author</strong></th>
            <th><strong>Year</strong></th>
            <th><strong>Genre</strong></th>
            <th><strong>Action</strong></th>
        </tr>
    </thead>
<?php foreach ($books as $book): ?>
    <tbody>
        <tr>
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['year']; ?></td>
            <td><?php echo $book['genre']; ?></td>
            <td>
                <a href="<?php echo site_url('books/'.$book['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('books/edit/'.$book['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('books/delete/'.$book['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
    </tbody>
<?php endforeach; ?>
</table>
