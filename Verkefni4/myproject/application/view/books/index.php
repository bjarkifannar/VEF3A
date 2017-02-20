<div class="container">
    <h1>Books</h1>
    <!-- add book form -->
    <div class="box">
        <h3>Add a book</h3>
        <form action="<?php echo URL; ?>books/addbook" method="POST">
            <label>Title</label>
            <input type="text" name="title" value="" required />
            <label>Publisher</label>
            <input type="text" name="publisher" value="" required />
            <label>Year published</label>
            <input type="text" name="publish_year" value="" required /><br><br>
            <label>Description</label><br>
            <textarea cols="25" rows="10" name="description" required></textarea><br><br>
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of books: <?php echo $amount_of_books; ?></h3>
        <h3>List of books</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Publisher</td>
                <td>Year published</td>
                <td>Description</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->id)) echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->title)) echo htmlspecialchars($book->title, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->publisher)) echo htmlspecialchars($book->publisher, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->publish_year)) echo htmlspecialchars($book->publish_year, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->description)) echo htmlspecialchars($book->description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo URL . 'books/deletebook/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'books/editbook/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
