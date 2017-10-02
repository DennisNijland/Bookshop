

<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('books/create'); ?>    
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="40" /></td>
        </tr>
                <tr>
            <td><label for="author">Author</label></td>
            <td><input type="input" name="author" size="40"/></td>
        </tr>
        <tr>
            <td><label for="genre">Genre</label></td>
            <td><input type="input" name="genre" size="40"/></td>
        </tr>
        <tr>
            <td><label for="year">Year</label></td>
            <td><input type="input" name="year" size="40"/></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><textarea type="input" name="description" rows="10" cols="40" size="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create new book" /></td>
        </tr>
    </table>    
</form>