<div class="container">
	<!-- edit book form -->
	<div>
		<h3>Edit a book</h3>
		<form action="<?php echo URL; ?>books/updatebook" method="POST">
			<label>Title</label>
			<input autofocus type="text" name="title" value="<?php echo htmlspecialchars($book->title, ENT_QUOTES, 'UTF-8'); ?>" required />
			<label>Publisher</label>
			<input type="text" name="publisher" value="<?php echo htmlspecialchars($book->publisher, ENT_QUOTES, 'UTF-8'); ?>" required />
			<label>Publish year</label>
			<input type="text" name="publish_year" value="<?php echo htmlspecialchars($book->publish_year, ENT_QUOTES, 'UTF-8'); ?>" /><br><br>
			<label>Description</label><br>
			<textarea cols="50" rows="10" name="description"><?php echo htmlspecialchars($book->description, ENT_QUOTES, 'UTF-8'); ?></textarea><br>
			<input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>" />
			<input type="submit" name="submit_update_book" value="Update" />
		</form>
	</div>
</div>

