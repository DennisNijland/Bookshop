<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('books/edit/'.$books_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $books_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="author">Author</label></td>
            <td><input type="input" name="author" size="50" value="<?php echo $books_item['author'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="year">Year</label></td>
            <td><input type="input" name="year" size="50" value="<?php echo $books_item['year'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><input type="input" name="description" size="50" value="<?php echo $books_item['description'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="genre">Genre</label></td>
            <td><input type="input" name="genre" size="50" value="<?php echo $books_item['genre'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit book" /></td>
        </tr>
    </table>
</form>