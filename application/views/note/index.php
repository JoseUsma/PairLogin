<div class="container">
    <h1>Notes</h1>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form method="post" action="<?php echo URL;?>note/create">
        <label>New note: </label><input type="text" name="note_text" />
        <input type="submit" value='Create this note' autocomplete="off" />
    </form>

    <h1 style="margin-top: 50px;">List of your notes</h1>

    <table>
    <?php
        if ($this->notes) {
            foreach($this->notes as $key => $value) {
                echo '<tr>';
                echo '<td>' . htmlentities($value->note_text) . '</td>';
                echo '<td><a href="'. URL . 'note/edit/' . $value->note_id.'">Edit</a></td>';
                echo '<td><a href="'. URL . 'note/delete/' . $value->note_id.'">Delete</a></td>';
                echo '</tr>';
            }
        } else {
            echo 'No notes yet. Create some !';
        }
    ?>
    </table>
</div>
